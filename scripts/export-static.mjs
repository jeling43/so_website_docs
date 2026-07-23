#!/usr/bin/env node

import fs from 'node:fs/promises';
import path from 'node:path';
import { fileURLToPath } from 'node:url';

const source = new URL(process.argv[2] || 'http://localhost:8080/');
const output = path.resolve(process.argv[3] || 'site');
const sourceOrigin = source.origin;
const pageUrls = new Set(['/']);
const assetUrls = new Set();
const documents = new Map();

const toUrl = (value, base = source) => {
    try {
        const url = new URL(value, base);
        return url.origin === sourceOrigin ? url : null;
    } catch {
        return null;
    }
};

const normalizePath = (value) => {
    const pathname = new URL(value, source).pathname;
    if (pathname === '/') return '/index.html';
    return pathname.endsWith('/') ? `${pathname}index.html` : pathname;
};

const writeFile = async (url, body, binary = false) => {
    const target = path.join(output, normalizePath(url).replace(/^\/+/, ''));
    await fs.mkdir(path.dirname(target), { recursive: true });
    await fs.writeFile(target, body, binary ? undefined : 'utf8');
};

const response = async (url) => {
    const result = await fetch(url);
    if (!result.ok) throw new Error(`${result.status} ${url}`);
    return result;
};

const collectPagesFromApi = async () => {
    try {
        const result = await response(new URL('/wp-json/wp/v2/pages?per_page=100&status=publish', source));
        const pages = await result.json();
        for (const page of pages) {
            const pageUrl = toUrl(page.link);
            if (pageUrl) pageUrls.add(pageUrl.pathname);
        }
    } catch (error) {
        console.warn(`Could not read WordPress page list: ${error.message}`);
    }
};

const collectFromHtml = (html, baseUrl) => {
    const matches = html.matchAll(/(?:href|src)=["']([^"']+)["']/gi);
    for (const match of matches) {
        const url = toUrl(match[1], baseUrl);
        if (!url) continue;
        if (/\.(?:css|js|png|jpe?g|gif|svg|webp|woff2?|ttf)(?:\?.*)?$/i.test(url.pathname)) {
            assetUrls.add(url.href);
        } else if (url.pathname !== '/wp-json/' && !url.pathname.startsWith('/wp-admin')) {
            pageUrls.add(url.pathname);
        }
    }
};

const rewriteLocalUrls = (text, currentUrl) => text.replace(
    new RegExp(sourceOrigin.replace(/[.*+?^${}()|[\]\\]/g, '\\$&') + '([^"\'\\s)<>]*)', 'g'),
    (match, pathname) => {
        const target = normalizePath(new URL(pathname, source));
        const current = normalizePath(currentUrl);
        return path.posix.relative(path.posix.dirname(current), target) || './';
    },
);

const cleanHtml = (html) => html
    .replace(/<link[^>]+(?:wp-json|oembed|EditURI|application\/rss\+xml)[^>]*>\s*/gi, '')
    .replace(/<meta[^>]+name=["']generator["'][^>]*>\s*/gi, '')
    .replace(/<script[^>]+type=["']speculationrules["'][\s\S]*?<\/script>\s*/gi, '')
    .replace(/<script[^>]+id=["']gcso-main-js-extra["'][\s\S]*?<\/script>\s*/gi, '')
    .replace(/<script[^>]+id=["']wp-emoji-settings["'][\s\S]*?<\/script>\s*/gi, '')
    .replace(/<script[^>]+type=["']module["'][\s\S]*?wpEmojiSettingsSupports[\s\S]*?<\/script>\s*/gi, '');

await fs.rm(output, { recursive: true, force: true });
await fs.mkdir(output, { recursive: true });
await collectPagesFromApi();

for (const pathname of [...pageUrls]) {
    const url = new URL(pathname, source);
    try {
        const result = await response(url);
        const html = await result.text();
        documents.set(pathname, html);
        collectFromHtml(html, url);
    } catch (error) {
        console.warn(`Skipping ${url}: ${error.message}`);
    }
}

for (const url of assetUrls) {
    try {
        const result = await response(url);
        const contentType = result.headers.get('content-type') || '';
        if (contentType.includes('text/css')) {
            const css = await result.text();
            documents.set(new URL(url).pathname, css);
            for (const match of css.matchAll(/url\(["']?([^"')]+)["']?\)/gi)) {
                const nested = toUrl(match[1], url);
                if (nested) assetUrls.add(nested.href);
            }
        } else {
            await writeFile(url, Buffer.from(await result.arrayBuffer()), true);
        }
    } catch (error) {
        console.warn(`Skipping asset ${url}: ${error.message}`);
    }
}

for (const [pathname, document] of documents) {
    const currentUrl = new URL(pathname, source);
    await writeFile(currentUrl, rewriteLocalUrls(cleanHtml(document), currentUrl));
}

await fs.writeFile(path.join(output, 'robots.txt'), 'User-agent: *\nDisallow: /\n', 'utf8');

console.log(`Exported ${documents.size} documents and ${assetUrls.size} assets to ${output}`);
