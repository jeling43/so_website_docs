# Security & Code-Quality Pipeline

This document explains how to run every CI check locally and what each tool does.

---

## Prerequisites

| Tool | Version | Install |
|------|---------|---------|
| PHP | ≥ 7.4 for the theme runtime; PHP 8.2 recommended for tooling | [php.net](https://www.php.net/downloads) |
| Composer | v2 | [getcomposer.org](https://getcomposer.org/download/) |
| Node.js | ≥ 20 LTS | [nodejs.org](https://nodejs.org/) |
| npm | (bundled with Node) | — |
| Semgrep | latest | `pip install semgrep` or [semgrep.dev](https://semgrep.dev/docs/getting-started/) |
| Gitleaks | latest | `brew install gitleaks` or [GitHub releases](https://github.com/gitleaks/gitleaks/releases) |

---

## Setup

```bash
# Install PHP dependencies
composer install

# Install JavaScript/CSS dependencies
npm ci
```

---

## Local Commands

### PHP

| Command | What it does |
|---------|-------------|
| `composer lint` | Runs `php -l` on every PHP file in the theme |
| `composer phpcs` | WordPress Coding Standards check (PHP_CodeSniffer + WPCS) |
| `composer phpcbf` | Auto-fix coding-standard violations where possible |
| `composer phpstan` | Static analysis with PHPStan (level 5, WordPress stubs) |
| `composer security` | Check Composer dependencies for known vulnerabilities |
| `composer ci` | Run **all** PHP checks in sequence |

### JavaScript & CSS

| Command | What it does |
|---------|-------------|
| `npm run lint:js` | ESLint on `gcso-custom/assets/js/` |
| `npm run lint:css` | Stylelint on all theme CSS files |
| `npm run security` | `npm audit` for high/critical vulnerabilities |
| `npm run ci` | Run **all** front-end checks in sequence |

### Semgrep (manual)

```bash
semgrep scan \
  --config=auto \
  --config=p/php \
  --config=p/javascript \
  --config=p/wordpress \
  --config=p/owasp-top-ten \
  --config=p/security-audit \
  --exclude='vendor' \
  --exclude='node_modules' \
  --exclude='dist' \
  --exclude='build' \
  --exclude='*.min.js' \
  --exclude='*.min.css' \
  gcso-custom
```

### Gitleaks (manual)

```bash
gitleaks detect --source . --verbose
```

---

## What Each Tool Scans For

| Tool | Category | Key findings |
|------|----------|-------------|
| **php -l** | Syntax | Parse errors in PHP files |
| **PHPCS + WPCS** | Standards & Security | Output escaping, input sanitization, nonce verification, capability checks, direct DB queries, `$wpdb->prepare()`, unsafe redirects, deprecated functions, naming conventions |
| **PHPStan** | Static Analysis | Type errors, undefined methods/properties, unreachable code |
| **Composer audit** | Dependencies | Known CVEs in PHP packages |
| **Semgrep** | SAST | SQL injection, XSS, command injection, unsafe deserialization, path traversal, file inclusion, hardcoded credentials, dangerous PHP functions, unsafe superglobals, DOM-based injection |
| **Gitleaks** | Secrets | API keys, tokens, passwords, private keys committed to Git history |
| **ESLint** | JS Quality | `eval()`, implied eval, script URLs, `debugger`, unused variables |
| **Stylelint** | CSS Quality | Invalid hex colors, unknown properties, missing generic font families |
| **npm audit** | Dependencies | Known CVEs in npm packages |

---

## What Fails the Pipeline

| Check | Fails on |
|-------|---------|
| PHP syntax (`php -l`) | Any parse error |
| PHPCS | Any error-level violation |
| PHPStan | Any level-5 error |
| Composer audit | Any known vulnerability |
| Semgrep | Any finding |
| Gitleaks | Any detected secret |
| ESLint | Any `error`-level rule violation |
| Stylelint | Any error-level rule violation |
| npm audit | Any `high` or `critical` vulnerability |

---

## Warnings That Do Not Fail

- PHPCS **warnings** (as opposed to errors) are reported but do not fail the build.
- ESLint rules set to `"warn"` (e.g., `no-console`, `no-var`, `prefer-const`) produce warnings without failing.
- Stylelint rules set to `null` (disabled) produce no output.

---

## Assumptions

- The WordPress theme root is `gcso-custom/`.
- PHP ≥ 7.4 is required by the theme runtime (per `style.css`).
- WordPress ≥ 6.0 is targeted (per `style.css`).
- CI uses PHP 8.2 and Node.js 20 LTS.
- No `composer.json` or `package.json` existed previously.
- Third-party/generated directories (`vendor/`, `node_modules/`, `dist/`, `build/`) are excluded from all scans.
- The Gitleaks GitHub Action is free for public repositories. For private repos, run `gitleaks detect` manually instead.

---

## File Reference

| File | Purpose |
|------|---------|
| `.github/workflows/theme-ci.yml` | GitHub Actions CI pipeline |
| `composer.json` | PHP dependencies and scripts |
| `phpcs.xml` | PHP_CodeSniffer / WPCS configuration |
| `phpstan.neon` | PHPStan configuration (level 5 + WordPress stubs) |
| `package.json` | Node.js dependencies and scripts |
| `eslint.config.js` | ESLint 9 flat config for theme JavaScript |
| `.stylelintrc.json` | Stylelint rules for theme CSS |
| `SECURITY_PIPELINE.md` | This file |
