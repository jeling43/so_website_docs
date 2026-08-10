# Updating Content

## Before editing

1. Confirm the information with an official Gordon County Sheriff’s Office source.
2. Identify whether the change belongs in a WordPress template, static export, or both.
3. Preserve existing URLs unless a redirect is planned.

## Updating a page

WordPress page templates are in `gcso-custom/`. Common templates include:

- `page-about.php`
- `page-resources.php`
- `page-services.php`
- `page-organization.php`

When the static export is maintained, regenerate it from the WordPress source after
publishing page or shared-template changes. The exporter replaces the contents of
`site/`, so do not run it against an output directory containing unrelated files.
For a local WordPress site, run:

```bash
node scripts/export-static.mjs http://localhost:8080/ site
```

Review the generated page tree and run the local-link check before committing. The
GitHub Pages preview deploys only `site/`; changes made only in `gcso-custom/` will
not appear there until the static export is updated.

Current legal and service pages include:

- `page-privacy-policy.php` → `/privacy-policy/`
- `page-accessibility.php` → `/accessibility-statement/`
- `page-terms-of-use.php` → `/terms-of-use/`
- `page-secondary-metals-recycling.php` → `/services/secondary-metals-recycling/` when the page is nested under Services

The News & Alerts template queries only posts in the `press-release` category. Do not
assign registry, administrative, or unrelated posts to that category.

## Content rules

- Use descriptive action labels such as “Request a Report” or “View Organization.”
- Do not make informational notices look like links.
- Mark external links with an external-link icon and `rel="noopener noreferrer"`.
- Keep headings in a logical order.
- Use the official name “Gordon County Sheriff’s Office.”

## After editing

Run:

```bash
git diff --check
```

Then test the page at desktop and mobile widths, including keyboard navigation and every changed link.
