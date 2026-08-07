# Technical Architecture

## Repository layout

```text
so_website_docs/
├── gcso-custom/                         WordPress theme source
│   ├── assets/
│   │   ├── css/main.css                 Shared theme styles
│   │   ├── js/main.js                   Theme interactions
│   │   └── images/                      Logos and visual assets
│   ├── page-*.php                       Custom page templates
│   ├── template-parts/                  Reusable WordPress markup
│   └── functions.php                    Theme setup and helpers
├── site/                                Static site export/preview
│   ├── wp-content/themes/gcso-custom/   Exported theme assets
│   └── about, resources, ...             Exported page directories
├── docs/                                Project documentation
│   ├── wiki/                            Working project wiki
│   └── Current_Site_Structure.md        Content architecture review
└── README.md                            Project entry point
```

## Rendering model

The WordPress theme is the primary implementation. WordPress loads page templates from `gcso-custom/`, shared styles from the theme stylesheet, and reusable components from `template-parts/`.

The `site/` directory is a static representation used for review, sharing, and deployment workflows that require exported HTML. When a template or shared stylesheet changes, update the corresponding static copy when the export is being maintained.

## Page architecture

### About

- `page-about.php` — About landing page
- `page-meet-the-sheriff.php` — Sheriff profile
- `page-mission-and-values.php` — Mission and values
- `page-organization.php` — Connected organization chart

### Services and resources

- `page-services.php` — Service categories, external searches, and court fees
- `page-resources.php` — Public resource cards, Public Records notice, and court fees

### Public information pages

Additional templates cover reports, tips, sex offender information, secondary-metals recycling, jail information, contact, accessibility, privacy, and terms of use. Most Wanted is not part of the current public navigation.

## Design system

Shared design tokens define colors, typography, spacing, borders, shadows, and responsive breakpoints. Reusable components include:

- Page banners and breadcrumbs
- Section headings with gold accent lines
- Information cards
- Action links and buttons
- Fee lists
- Alerts and informational notices
- Organization-chart nodes and connectors

Prefer extending an existing component or shared token over adding page-specific styling.

## Change flow

```text
Content or design change
        ↓
WordPress template / shared CSS
        ↓
Static export copy, when maintained
        ↓
Desktop, mobile, keyboard, and link checks
        ↓
Commit and deploy
```

For content structure, see [Site Overview](Site-Overview.md) and [Current Site Structure](../Current_Site_Structure.md). For release steps, see [Deployment](Deployment.md).
