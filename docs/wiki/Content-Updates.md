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

When the static export is maintained, update the matching file under `site/` and the copied theme stylesheet under `site/wp-content/themes/gcso-custom/assets/css/`.

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
