# Deployment

The project supports a WordPress theme and a static export. Follow the repository deployment documentation before publishing changes.

## Static preview deployment

GitHub Pages deploys the committed contents of `site/` from the
`website-content-and-design` branch. It does not render the PHP theme directly.
After publishing or changing a WordPress page, regenerate the static export from
the local or staging WordPress site:

```bash
node scripts/export-static.mjs http://localhost:8080/ site
```

Review the generated routes and links, commit the updated `site/` files, and push
the branch. The `Deploy static site preview` workflow then uploads `site/` to
GitHub Pages. Do not run the exporter against production unless the export is
intended to replace the complete static preview.

## Pre-deployment checklist

- Review the complete diff.
- Run `git diff --check`.
- Confirm changed pages load at their expected URLs.
- Test navigation, forms, external links, and mobile layouts.
- Verify phone numbers, addresses, emails, fees, and legal text.
- Check keyboard focus and visible error states.
- Remove placeholder content and test links.

## Branch workflow

Before pulling a branch with local commits, inspect its state:

```bash
git status --short --branch
git branch -vv
```

When the local branch is ahead and behind its remote, use an explicit strategy:

```bash
git pull --rebase origin <branch-name>
```

Use a merge instead when preserving the existing branch history is more important:

```bash
git pull --no-rebase origin <branch-name>
```

See [PRODUCTION-DEPLOYMENT.md](../PRODUCTION-DEPLOYMENT.md) for the full release process.
