# Production WordPress Deployment Runbook

This runbook describes how to deploy the GCSO Custom theme to the production WordPress website with minimal downtime.

## Scope

- Docker is for local development only.
- Production runs on the existing WordPress hosting environment.
- Deploy the `gcso-custom` theme only.
- Do not upload Docker files, local database volumes, or local credentials.
- Do not overwrite the production database with the local Docker database.

Target downtime: less than one minute when the hosting platform supports a quick theme-directory switch.

## Existing posts and content

### Posts already in the production WordPress site

If the new theme is being installed on the existing production WordPress installation, posts do not need to be migrated. WordPress stores posts in the database, separately from the theme.

Before deployment:

1. Back up the production database.
2. Confirm that existing posts are published and have the correct categories.
3. Confirm that featured images and authors are present.
4. Identify the page that should display the news archive.

After activating the theme:

1. Go to **Settings → Reading**.
2. Set the correct page as the **Posts page**, such as `News & Alerts`.
3. Test the news archive and at least one individual post.
4. Verify dates, authors, categories, featured images, excerpts, search results, and pagination.
5. Confirm that existing post URLs have not changed.

Do not copy the local Docker database into production. This could overwrite production posts, pages, users, settings, and form data.

### Posts from a separate WordPress site

If posts are coming from a different WordPress installation, use the built-in WordPress export and import tools:

1. On the old site, go to **Tools → Export**.
2. Export posts, or select the required date range, author, category, and status.
3. On the new site, go to **Tools → Import → WordPress**.
4. Upload the exported WordPress XML file.
5. Map the old authors to the correct production users.
6. Enable the option to download and import file attachments when available.
7. Review imported posts, media, categories, authors, dates, and links.
8. Confirm that featured images display correctly.
9. Add redirects if imported post URLs differ from the old URLs.

Complete imports on staging first. Never run an untested import directly against production.

## 1. Inventory production

Record the current production configuration before testing or deployment:

- WordPress version
- PHP version
- Active plugins and versions
- Active theme and theme version
- Theme customizer settings
- Menus, widgets, and navigation locations
- Site URL and home URL
- Current production theme directory
- Backup and restore process provided by the host

Confirm that the production PHP and WordPress versions are compatible with the theme and installed plugins.

## 2. Test on staging

Create a staging copy from production whenever the hosting provider supports it. The staging copy should contain:

- A copy of the production database
- Production uploads
- Production plugins
- Production WordPress configuration
- The new `gcso-custom` theme

Do not use the local Docker database as the production or staging database.

On staging:

1. Upload and activate the theme.
2. Confirm that customizer settings, menus, widgets, and page templates work.
3. Confirm that all required pages exist and use the correct slugs.
4. Test the home page, navigation, search, mobile menu, forms, and external links.
5. Verify phone numbers, addresses, email addresses, emergency information, and legal text.
6. Check the site at desktop and mobile widths.
7. Test keyboard navigation and visible focus states.
8. Check the browser console and PHP error log for errors.
9. Remove test pages, the default “Hello world!” post, placeholder text, and `href="#"` links.
10. Run a broken-link scan before approval.

Important pages to verify:

- Home
- About
- Meet the Sheriff
- Mission and Values
- Organization
- Resources
- Request a Report
- Secondary Metals Recycler Information
- Jail
- Judicial Bureau
- Enforcement Bureau
- Sex Offender Registry
- Contact
- Accessibility Statement
- Privacy Policy
- Terms of Use

The News & Alerts page is limited to posts in the `press-release` category. Registry,
administrative, and other non-press-release posts must not be assigned to that category
or they will appear in the public press-release feed.

## 3. Prepare backups

Immediately before deployment, create and verify:

- A full database backup
- A full `wp-content` backup
- A copy of the current active theme
- A copy of the uploads directory
- An export of customizer settings, if supported
- A list of active plugins and versions

Store backups outside the WordPress installation. Keep the previous theme available for at least 30 days.

Do not rely solely on an unverified hosting backup.

## 4. Freeze content changes

Set a short content freeze before deployment. During the freeze, do not:

- Publish or edit pages
- Publish news or press releases
- Change menus or widgets
- Change customizer settings
- Install, remove, or update plugins

This prevents content changes from being lost during an emergency rollback.

## 5. Deploy the theme

### Preferred deployment

If SSH or the hosting platform supports an atomic file switch:

1. Upload the new theme to a temporary release directory.
2. Verify that all expected files are present.
3. Preserve the current theme as the rollback copy.
4. Switch the new release into the expected theme path.
5. Activate the theme only after the files are in place.
6. Clear WordPress, host, CDN, and object caches.
7. Flush rewrite rules.
8. Clear PHP OPcache if the host uses it.

The final theme directory should remain:

```text
wp-content/themes/gcso-custom
```

Keeping the same directory name helps preserve theme-specific settings.

### Hosting file manager deployment

If the host only provides a file manager:

1. Enable a short maintenance notice.
2. Upload the new theme as a separate directory.
3. Confirm the upload completed successfully.
4. Rename the current theme directory to a dated rollback directory.
5. Rename the new directory to `gcso-custom`.
6. Activate the theme.
7. Clear caches and flush rewrite rules.
8. Disable the maintenance notice.

Do not upload files directly over the active theme while visitors are using the site. That can produce a mixed version with missing CSS, JavaScript, or PHP files.

## 6. Immediate smoke test

Run these checks immediately after activation:

- Home page loads successfully.
- Header, logo, footer, CSS, and JavaScript load.
- Desktop and mobile navigation work.
- Search opens, submits, and closes correctly.
- Forms load and submit correctly.
- External links open in the intended location.
- Phone links work on mobile.
- Images load without errors.
- Emergency information is visible and accurate.
- Privacy, accessibility, and terms pages load.
- No PHP errors appear in logs.
- No serious browser-console errors appear.
- No unexpected redirects or 404 responses occur.

Test in a private browser window and at least one desktop and one mobile browser.

## 7. Rollback procedure

If a serious issue appears:

1. Keep the site in maintenance mode if it is already enabled.
2. Deactivate the new theme.
3. Restore the previous `gcso-custom` theme directory.
4. Reactivate the previous theme.
5. Clear WordPress, host, CDN, and object caches.
6. Clear PHP OPcache if applicable.
7. Re-test the home page and primary navigation.
8. Record the failure and investigate on staging.

Do not restore the entire database for a theme-only failure. Restoring an old database can erase newly published pages, posts, form submissions, and settings.

## 8. Post-deployment monitoring

Monitor the site for at least 24–48 hours:

- PHP and web-server error logs
- 404 responses
- Form submissions
- Contact reports from staff and visitors
- Page-load performance
- Plugin warnings
- Broken links
- Mobile rendering

Keep the previous theme and deployment notes available until the monitoring period is complete.

## Production security rules

- Never run Docker in production.
- Never upload `docker-compose.yml`, `.env`, `db_data`, or `wordpress_data`.
- Never reuse local development passwords.
- Keep `WP_DEBUG` disabled in production.
- Do not expose MySQL or phpMyAdmin to the public internet.
- Update WordPress core and plugins separately from the theme deployment.
- Test plugin updates before applying them to production.
- Maintain current, tested backups.
