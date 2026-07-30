# Deployment

The project supports a WordPress theme and a static export. Follow the repository deployment documentation before publishing changes.

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
