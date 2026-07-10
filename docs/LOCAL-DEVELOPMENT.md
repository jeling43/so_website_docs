# Local Development Guide

This guide explains how to set up and run the GCSO Custom WordPress theme on your local machine for development and testing.

---

## Prerequisites

Before you begin, install the following on your computer:

| Tool | Purpose | Download |
|------|---------|----------|
| **Docker Desktop** | Runs WordPress, MySQL, and phpMyAdmin in containers | [docker.com/products/docker-desktop](https://www.docker.com/products/docker-desktop/) |
| **Git** | Version control | [git-scm.com](https://git-scm.com/) |
| **Code Editor** | Edit theme files (VS Code recommended) | [code.visualstudio.com](https://code.visualstudio.com/) |

### Verify Installation

Open a terminal and confirm these commands work:

```bash
docker --version
# Docker version 24.x or higher

docker-compose --version
# Docker Compose version v2.x or higher

git --version
# git version 2.x or higher
```

---

## Getting Started

### Step 1: Clone the Repository

```bash
git clone <your-repo-url>
cd so_website_docs
```

### Step 2: Set Up Environment Variables

```bash
cp .env.example .env
```

The default values work out of the box for local development. Only change them if you have port conflicts.

### Step 3: Start the Development Environment

```bash
docker compose up -d
```

This starts three services:

| Service | URL | Purpose |
|---------|-----|---------|
| WordPress | http://localhost:8080 | Your local WordPress site |
| phpMyAdmin | http://localhost:8081 | Database management UI |
| MySQL | localhost:3306 | Database server |

Wait about 30 seconds for the containers to fully initialize on first run.

### Step 4: Complete WordPress Installation

1. Open http://localhost:8080 in your browser
2. Select your language
3. Fill in the installation form:
   - **Site Title**: `Gordon County Sheriff's Office`
   - **Username**: `admin`
   - **Password**: `admin` (local only — never use this in production)
   - **Email**: `admin@example.com`
   - **Search engine visibility**: Check "Discourage search engines" (local dev)
4. Click **Install WordPress**
5. Log in with your credentials

### Step 5: Activate the Theme

1. Go to **Appearance > Themes** in the WordPress admin
2. Find **GCSO Custom** in the list
3. Click **Activate**

---

## Working on Theme Files

### Live Editing

The `gcso-custom/` folder is mounted directly into the Docker container. This means:

- **Any file you edit** in your code editor is **immediately available** in WordPress
- Just **refresh your browser** to see changes
- No need to restart Docker after file changes
- No build step required — CSS and JS are plain files

### File Locations

```
so_website_docs/
├── docker-compose.yml          # Docker configuration
├── .env.example                # Environment template
├── gcso-custom/                # ← YOUR THEME (edit files here)
│   ├── style.css
│   ├── functions.php
│   ├── header.php
│   ├── footer.php
│   ├── front-page.php
│   ├── assets/
│   │   ├── css/main.css        # ← Main styles
│   │   └── js/main.js          # ← Main JavaScript
│   ├── inc/                    # ← PHP includes
│   └── template-parts/        # ← Template parts
└── docs/                       # ← Documentation
```

### Making CSS Changes

1. Open `gcso-custom/assets/css/main.css`
2. Make your edits
3. Save the file
4. Refresh the browser (Ctrl+Shift+R / Cmd+Shift+R for hard refresh)

### Making PHP Changes

1. Open the relevant PHP file (e.g., `gcso-custom/header.php`)
2. Make your edits
3. Save the file
4. Refresh the browser

### Making JavaScript Changes

1. Open `gcso-custom/assets/js/main.js`
2. Make your edits
3. Save the file
4. Hard refresh the browser (Ctrl+Shift+R / Cmd+Shift+R)

---

## Common Docker Commands

### Starting and Stopping

```bash
# Start all containers (runs in background)
docker-compose up -d

# Stop all containers (preserves data)
docker-compose down

# Restart everything
docker-compose restart

# View running containers
docker-compose ps
```

### Viewing Logs

```bash
# All logs
docker-compose logs

# WordPress logs only
docker-compose logs wordpress

# Follow logs in real time
docker-compose logs -f wordpress

# Last 50 lines
docker-compose logs --tail=50 wordpress
```

### Resetting the Environment

```bash
# Stop and remove containers + volumes (DELETES DATABASE)
docker-compose down -v

# Start fresh
docker-compose up -d
```

### Accessing the Container Shell

```bash
# WordPress container
docker-compose exec wordpress bash

# Inside the container, WordPress files are at:
# /var/www/html/
# Theme is at:
# /var/www/html/wp-content/themes/gcso-custom/
```

### WP-CLI Commands

```bash
# List themes
docker-compose exec wordpress wp --allow-root theme list

# Activate the theme
docker-compose exec wordpress wp --allow-root theme activate gcso-custom

# Create test posts
docker-compose exec wordpress wp --allow-root post generate --count=5

# Import test content
docker-compose exec wordpress wp --allow-root plugin install wordpress-importer --activate

# Flush permalinks
docker-compose exec wordpress wp --allow-root rewrite flush

# Enable debug mode
docker-compose exec wordpress wp --allow-root config set WP_DEBUG true --raw
```

---

## Setting Up Test Content

### Create the Homepage

```bash
docker-compose exec wordpress wp --allow-root post create \
  --post_type=page \
  --post_title="Home" \
  --post_status=publish

docker-compose exec wordpress wp --allow-root post create \
  --post_type=page \
  --post_title="News" \
  --post_status=publish
```

Then in **Settings > Reading**:
- Your homepage displays: **A static page**
- Homepage: **Home**
- Posts page: **News**

### Create Sample News Posts

```bash
docker-compose exec wordpress wp --allow-root post create \
  --post_title="GCSO Honors Fallen Heroes on Memorial Day" \
  --post_content="We remember and honor the brave men and women who made the ultimate sacrifice." \
  --post_status=publish

docker-compose exec wordpress wp --allow-root post create \
  --post_title="Community Safety Event a Success" \
  --post_content="Thank you to everyone who joined us for our Community Safety Event this past weekend." \
  --post_status=publish

docker-compose exec wordpress wp --allow-root post create \
  --post_title="Deputies Complete Advanced Training" \
  --post_content="GCSO deputies successfully completed advanced training in defensive tactics." \
  --post_status=publish
```

### Create Navigation Menus

Use the WordPress admin UI:
1. Go to **Appearance > Menus**
2. Create a menu named "Primary Navigation"
3. Add pages: Home, About, Services, Divisions, Careers, News, Contact
4. Assign to **Primary Navigation** location
5. Save

---

## Enabling WordPress Debug Mode

For development, enable debugging to see PHP errors:

Edit `docker-compose.yml` and ensure this environment variable is set:

```yaml
WORDPRESS_DEBUG: 1
```

Or run:

```bash
docker-compose exec wordpress wp --allow-root config set WP_DEBUG true --raw
docker-compose exec wordpress wp --allow-root config set WP_DEBUG_LOG true --raw
docker-compose exec wordpress wp --allow-root config set WP_DEBUG_DISPLAY true --raw
```

View debug logs:

```bash
docker-compose exec wordpress cat /var/www/html/wp-content/debug.log
```

---

## Port Conflicts

If port 8080 or 3306 is already in use:

1. Edit `docker-compose.yml`
2. Change the port mapping:
   ```yaml
   ports:
     - "8888:80"   # Change 8080 to 8888
   ```
3. Restart: `docker-compose down && docker-compose up -d`
4. Access at http://localhost:8888

---

## Using VS Code

### Recommended Extensions

- **PHP Intelephense** — PHP autocomplete and error checking
- **WordPress Snippets** — WordPress function snippets
- **CSS Peek** — CSS class definitions
- **Live Server** (not needed with Docker, but useful for static HTML)

### Workspace Settings

Create `.vscode/settings.json`:

```json
{
    "editor.tabSize": 4,
    "editor.insertSpaces": true,
    "files.associations": {
        "*.php": "php"
    },
    "css.validate": true,
    "php.validate.enable": true
}
```

---

## Troubleshooting

### "Cannot connect to the Docker daemon"
- Ensure Docker Desktop is running
- Restart Docker Desktop

### WordPress shows a blank page
- Check logs: `docker-compose logs wordpress`
- Enable WP_DEBUG (see above)
- Ensure all PHP files have proper `<?php` opening tags

### Theme not appearing in Themes list
- Verify `style.css` exists in `gcso-custom/` with proper header
- Check the volume mount in `docker-compose.yml`
- Run: `docker-compose exec wordpress ls /var/www/html/wp-content/themes/gcso-custom/`

### CSS changes not showing
- Hard refresh: Ctrl+Shift+R (Windows) / Cmd+Shift+R (Mac)
- Clear browser cache
- Check browser DevTools Network tab for cached files

### Database connection error
- Wait 30 seconds and retry (MySQL may still be starting)
- Check if MySQL container is running: `docker-compose ps`
- Try: `docker-compose restart db`

---

## Next Steps

Once your local environment is working:

1. Set up the homepage and menus (see above)
2. Configure the Customizer settings (**Appearance > Customize > GCSO Settings**)
3. Add test content and images
4. Test responsive design at various breakpoints
5. When ready, follow the [Upload to WordPress](#) guide to deploy
