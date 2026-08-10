# Gordon County Sheriff's Office — Custom WordPress Theme

Custom WordPress theme and documentation for the **Gordon County Sheriff's Office** website. Built from scratch using clean PHP, HTML5, CSS, and vanilla JavaScript — no page builders (no Divi, Elementor, or Gutenberg blocks for layout).

## Quick Start — local development only

```bash
cp .env.example .env
docker compose up -d
# Visit http://localhost:8080
```

See [docs/LOCAL-DEVELOPMENT.md](docs/LOCAL-DEVELOPMENT.md) for the full setup guide.

For the live website, do not run or upload Docker. Package and deploy only the
`gcso-custom` theme through [Upload & Deploy](docs/UPLOAD-TO-WORDPRESS.md).

## Repository Structure

| Path | Description |
|------|-------------|
| `gcso-custom/` | The WordPress theme (PHP, CSS, JS) |
| `site/` | Generated static preview/deployment files |
| `docs/` | Project documentation |
| `docker-compose.yml` | Local development environment |
| `prompts.md` | AI image generation prompts for placeholder assets |

## Documentation

- [Documentation Index](docs/README.md) — Complete documentation and wiki index
- [Project Wiki](docs/wiki/Home.md) — Site overview, architecture, maintenance, and troubleshooting
- [Local Development](docs/LOCAL-DEVELOPMENT.md) — Docker setup and workflow
- [Theme README](gcso-custom/README.md) — Installation, configuration, and usage
- [Upload & Deploy](docs/UPLOAD-TO-WORDPRESS.md) — Packaging and deployment
- [Testing](docs/TESTING.md) — Functional, responsive, accessibility, and performance testing
- [Logos & Assets](docs/LOGOS-AND-ASSETS.md) — Image specs and guidelines
- [Site Structure](docs/Current_Site_Structure.md) — Navigation and content architecture
- [Static Preview Deployment](docs/wiki/Deployment.md) — Exporting and deploying the `site/` directory
