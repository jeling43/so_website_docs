# GCSO Custom WordPress Theme

Custom WordPress theme for the **Gordon County Sheriff's Office** website redesign. Built without page builders (no Divi, Elementor, or Gutenberg blocks for layout) using clean PHP, HTML5, CSS, and vanilla JavaScript.

---

## Table of Contents

1. [Local Development Setup](#local-development-setup)
2. [Theme Installation](#theme-installation)
3. [Staging Activation](#staging-activation)
4. [Menu Setup](#menu-setup)
5. [Homepage Assignment](#homepage-assignment)
6. [Logo Setup](#logo-setup)
7. [Image Placement](#image-placement)
8. [Customizer Settings](#customizer-settings)
9. [Migration Notes (Divi)](#migration-notes-divi)
10. [Testing Checklist](#testing-checklist)
11. [Launch Checklist](#launch-checklist)
12. [Rollback Instructions](#rollback-instructions)
13. [Theme Structure](#theme-structure)

---

## Local Development Setup

### Prerequisites

- [Docker Desktop](https://www.docker.com/products/docker-desktop/) installed
- Git installed

### Quick Start

```bash
# 1. Clone the repository
git clone <repo-url>
cd so_website_docs

# 2. Copy environment file
cp .env.example .env

# 3. Start Docker containers
docker-compose up -d

# 4. Wait ~30 seconds for WordPress to initialize, then visit:
#    WordPress: http://localhost:8080
#    phpMyAdmin: http://localhost:8081
```

### First-Time WordPress Setup

1. Open `http://localhost:8080` in your browser
2. Complete the WordPress installation wizard:
   - Site Title: `Gordon County Sheriff's Office`
   - Username: `admin`
   - Password: (choose a password)
   - Email: your email
3. Log in to `http://localhost:8080/wp-admin`

### Activate the Theme Locally

1. Go to **Appearance > Themes**
2. Find **GCSO Custom** and click **Activate**

### Useful Docker Commands

```bash
# Start containers
docker-compose up -d

# Stop containers
docker-compose down

# View logs
docker-compose logs -f wordpress

# Restart WordPress container
docker-compose restart wordpress

# Destroy everything (including database)
docker-compose down -v

# Rebuild containers
docker-compose up -d --build
```

### Working on Theme Files

The `gcso-custom/` directory is mounted directly into the WordPress container. Any changes you make to theme files will be immediately reflected on the site — just refresh the browser.

### Database Access

- **phpMyAdmin**: http://localhost:8081
  - Server: `db`
  - Username: `root`
  - Password: `rootpassword`

### WP-CLI (Optional)

```bash
# Run WP-CLI commands inside the container
docker-compose exec wordpress wp --allow-root theme list
docker-compose exec wordpress wp --allow-root plugin install wordpress-importer --activate
```

---

## Theme Installation

### On a Remote Server / WP Staging

1. Compress the `gcso-custom/` folder into a ZIP file:
   ```bash
   cd gcso-custom && zip -r ../gcso-custom.zip . && cd ..
   ```
2. In WordPress Admin, go to **Appearance > Themes > Add New > Upload Theme**
3. Upload `gcso-custom.zip`
4. Click **Install Now**

### Via FTP / File Manager

1. Upload the `gcso-custom/` folder to `/wp-content/themes/`
2. Ensure the folder structure matches:
   ```
   /wp-content/themes/gcso-custom/style.css
   /wp-content/themes/gcso-custom/functions.php
   ...
   ```

---

## Staging Activation

1. Log in to the **WP STAGING** admin dashboard
2. Go to **Appearance > Themes**
3. Locate **GCSO Custom** and click **Activate**
4. The previous theme (Divi) remains installed but inactive — it will **not** be deleted automatically

---

## Menu Setup

### Create Menus

1. Go to **Appearance > Menus**
2. Create three menus:

#### Primary Navigation
- Menu Name: `Primary Navigation`
- Assign to location: **Primary Navigation**
- Add pages: Home, About GCSO, Services, Divisions, Careers, News & Alerts, Contact

#### Utility Navigation
- Menu Name: `Utility Navigation`
- Assign to location: **Utility Navigation**

#### Footer Navigation
- Menu Name: `Footer Navigation`
- Assign to location: **Footer Navigation**
- Add links: Inmate Information, Sex Offender Registry, Most Wanted, Tip Line, Request a Report, Public Records

### Adding Dropdown Items

For items like "Services" or "Divisions" with sub-items:
1. Add the parent menu item
2. Drag child items slightly to the right to create a dropdown structure

---

## Homepage Assignment

1. Create a new **Page** titled `Home` (leave content blank — the theme uses `front-page.php`)
2. Create another **Page** titled `News` (for the blog/posts archive)
3. Go to **Settings > Reading**
4. Select **A static page**
   - Homepage: **Home**
   - Posts page: **News**
5. Click **Save Changes**

---

## Logo Setup

1. Go to **Appearance > Customize > Site Identity**
2. Click **Select Logo**
3. Upload the GCSO badge/logo (recommended: 200×200px PNG with transparent background)
4. The logo appears in the header and footer automatically
5. Set **Site Title** to: `Gordon County Sheriff's Office`
6. Set **Tagline** to: `Serving & Protecting Our Community`

---

## Image Placement

### Hero Image
1. Go to **Appearance > Customize > GCSO Settings > Hero Section**
2. Upload a hero image (recommended: 1920×800px)
3. Set heading, description, and button text/URLs

### Sheriff Photo
1. Go to **Appearance > Customize > GCSO Settings > Sheriff Message**
2. Upload the sheriff's portrait photo
3. Update the sheriff's name and welcome message

### Division Images
Place images in `/wp-content/themes/gcso-custom/assets/images/`:
- `division-admin.jpg` (300×200px minimum)
- `division-enforcement.jpg`
- `division-judicial.jpg`
- `division-jail.jpg`

Or override via WordPress by creating Division posts (custom post type).

### News Post Images
When creating news posts, set a **Featured Image** for each post. Recommended size: 600×400px.

---

## Customizer Settings

Go to **Appearance > Customize > GCSO Settings** to edit:

| Section | Settings |
|---------|----------|
| Contact Information | Phone, emergency phone, address, email |
| Hero Section | Heading, description, image, button text/URLs |
| Sheriff Message | Name, photo, welcome message |
| Social Media | Facebook, Twitter/X, YouTube, Instagram URLs |
| Emergency Notice | Toggle on/off, message text |
| Careers CTA | Heading, subheading, description, button |

---

## Migration Notes (Divi)

### Important

- **Do NOT deactivate Divi** until all pages have been rebuilt
- The new theme works completely independently of Divi
- Divi shortcodes (`[et_pb_*]`) will appear as raw text in pages that haven't been rebuilt

### Migration Steps

1. **Install & activate** GCSO Custom on staging
2. **Rebuild key pages** using the WordPress block editor or plain HTML:
   - Home (handled by `front-page.php`)
   - About GCSO
   - Contact
   - Services
   - Divisions
   - Careers
3. **Clean up** old Divi content from rebuilt pages
4. **Test thoroughly** on staging
5. **Push to production** when ready
6. After confirming everything works, **deactivate Divi** (keep it installed as a safety net for 30 days)
7. After 30 days with no issues, **delete Divi**

### Dealing with Divi Shortcodes

If pages show raw `[et_pb_*]` shortcodes:
1. Edit the page
2. Remove all Divi shortcode content
3. Re-enter content using standard WordPress editor
4. Update the page

---

## Testing Checklist

### Functionality
- [ ] Homepage loads correctly with all sections
- [ ] Navigation works (desktop & mobile)
- [ ] Dropdown menus open/close properly
- [ ] Mobile menu opens, closes, and traps focus
- [ ] Search overlay works
- [ ] Quick links cards are clickable
- [ ] News section shows latest posts
- [ ] Interior pages display correctly
- [ ] 404 page displays for non-existent URLs
- [ ] Search results page works
- [ ] Custom logo displays in header and footer
- [ ] Social media links open in new tabs
- [ ] Customizer settings update the front end

### Responsive Design
- [ ] 320px (small mobile)
- [ ] 375px (iPhone)
- [ ] 768px (tablet)
- [ ] 1024px (small desktop)
- [ ] 1440px (desktop)
- [ ] 1920px+ (large screens)

### Accessibility
- [ ] Skip link works
- [ ] Keyboard navigation through all menus
- [ ] Focus states visible on all interactive elements
- [ ] Screen reader announces menu states
- [ ] Escape key closes overlays
- [ ] Color contrast passes WCAG 2.2 AA
- [ ] Images have alt text
- [ ] Headings follow logical order
- [ ] ARIA attributes are correct

### Performance
- [ ] Page loads in under 3 seconds
- [ ] No console errors
- [ ] Images are lazy loaded below fold
- [ ] No render-blocking resources
- [ ] CSS and JS versioned with filemtime

### Browser Testing
- [ ] Chrome (latest)
- [ ] Firefox (latest)
- [ ] Safari (latest)
- [ ] Edge (latest)
- [ ] iOS Safari
- [ ] Android Chrome

---

## Launch Checklist

1. [ ] All pages rebuilt from Divi content
2. [ ] All menu locations assigned
3. [ ] Homepage set as static front page
4. [ ] Custom logo uploaded
5. [ ] Hero image and content configured
6. [ ] Sheriff photo and message set
7. [ ] Social media URLs entered
8. [ ] Contact information verified
9. [ ] Favicon set (Site Identity)
10. [ ] SSL certificate active
11. [ ] Permalinks set to `/%postname%/`
12. [ ] XML Sitemap plugin active
13. [ ] SEO plugin configured
14. [ ] Cache plugin installed and configured
15. [ ] Backup created before switching
16. [ ] DNS/hosting team notified
17. [ ] Divi deactivated (after full verification)
18. [ ] All 301 redirects in place (if URLs changed)
19. [ ] Google Search Console updated
20. [ ] Analytics tracking confirmed

---

## Rollback Instructions

If something goes wrong after activating the new theme:

### Quick Rollback (via Admin)

1. Go to **Appearance > Themes**
2. Activate the previous theme (Divi)
3. The site immediately reverts to the old design

### Rollback via FTP (if Admin is inaccessible)

1. Connect to the server via FTP
2. Navigate to `/wp-content/themes/`
3. Rename `gcso-custom` to `gcso-custom-disabled`
4. WordPress will automatically fall back to a default theme
5. Log into admin and reactivate Divi

### Rollback via Database

1. Access phpMyAdmin or MySQL CLI
2. Run:
   ```sql
   UPDATE wp_options SET option_value = 'Divi' WHERE option_name = 'template';
   UPDATE wp_options SET option_value = 'Divi' WHERE option_name = 'stylesheet';
   ```

### Restore from Backup

If a full restore is needed:
1. Restore the database backup taken before migration
2. Restore the `/wp-content/` directory from backup
3. Verify the site is working

---

## Theme Structure

```
gcso-custom/
├── style.css                      # Theme metadata
├── functions.php                  # Main theme functions
├── header.php                     # Site header
├── footer.php                     # Site footer
├── front-page.php                 # Homepage template
├── page.php                       # Standard page template
├── single.php                     # Single post template
├── archive.php                    # Archive/blog template
├── search.php                     # Search results template
├── searchform.php                 # Search form template
├── 404.php                        # 404 error page
├── screenshot.png                 # Theme screenshot
├── assets/
│   ├── css/
│   │   ├── main.css               # Main stylesheet
│   │   └── editor-style.css       # Block editor styles
│   ├── js/
│   │   └── main.js                # Main JavaScript
│   ├── images/                    # Theme images
│   └── icons/                     # SVG icons
│       ├── facebook.svg
│       ├── twitter.svg
│       ├── youtube.svg
│       └── instagram.svg
├── inc/
│   ├── theme-setup.php            # Theme support & menus
│   ├── enqueue.php                # Asset enqueuing
│   ├── customizer.php             # Customizer settings
│   ├── custom-post-types.php      # CPTs (Staff, Divisions)
│   └── helpers.php                # Helper functions
└── template-parts/
    ├── header/
    │   ├── utility-bar.php
    │   ├── branding.php
    │   ├── navigation.php
    │   └── mobile-nav.php
    ├── footer/
    │   └── fallback-menu.php
    ├── home/
    │   ├── hero.php
    │   ├── quick-links.php
    │   ├── sheriff-message.php
    │   ├── divisions.php
    │   ├── news.php
    │   └── cta.php
    ├── content/
    │   └── page-banner.php
    └── components/
```

---

## Development Notes

- **No page builder dependencies** — works as a standalone WordPress theme
- **Mobile-first CSS** — responsive breakpoints at 768px, 1024px, 1440px
- **Vanilla JavaScript** — no jQuery dependency
- **WordPress Coding Standards** — escaping, sanitization, nonces
- **WCAG 2.2 AA** — semantic HTML, ARIA, focus management, color contrast
- **Performance optimized** — minimal assets, lazy loading, cache busting

---

## Credits

Built for the Gordon County Sheriff's Office.  
Theme development: Custom coded without third-party frameworks.
