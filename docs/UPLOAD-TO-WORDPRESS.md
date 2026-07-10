# Upload & Deploy to WordPress

This guide covers how to package the GCSO Custom theme and deploy it to a WordPress site — whether it's a staging copy, WP Staging, or the live production server.

---

## Table of Contents

1. [Packaging the Theme](#packaging-the-theme)
2. [Method 1: Upload via WordPress Admin](#method-1-upload-via-wordpress-admin)
3. [Method 2: Upload via FTP/SFTP](#method-2-upload-via-ftpsftp)
4. [Method 3: Upload via File Manager (cPanel)](#method-3-upload-via-file-manager-cpanel)
5. [Method 4: Upload via WP-CLI (SSH)](#method-4-upload-via-wp-cli-ssh)
6. [Activating the Theme](#activating-the-theme)
7. [Post-Activation Setup](#post-activation-setup)
8. [Deploying Updates](#deploying-updates)
9. [WP Staging Deployment](#wp-staging-deployment)
10. [Production Launch](#production-launch)
11. [Troubleshooting](#troubleshooting)

---

## Packaging the Theme

### Create a ZIP File

From the project root directory:

```bash
# macOS / Linux
cd gcso-custom
zip -r ../gcso-custom.zip . -x "*.DS_Store" -x "__MACOSX/*"
cd ..

# Windows (PowerShell)
Compress-Archive -Path gcso-custom\* -DestinationPath gcso-custom.zip
```

### Verify the ZIP Structure

The ZIP file should have this structure when extracted:

```
gcso-custom.zip
└── (files directly inside, NOT inside a subfolder)
    ├── style.css
    ├── functions.php
    ├── header.php
    ├── footer.php
    ├── front-page.php
    ├── ...
    ├── assets/
    ├── inc/
    └── template-parts/
```

> ⚠️ **Important**: WordPress expects theme files at the top level of the ZIP. If your ZIP has `gcso-custom/gcso-custom/style.css` (double-nested), it won't work. Always zip the **contents** of the folder, not the folder itself, or ensure there's only one level.

### Quick Verification

```bash
# Check ZIP contents
unzip -l gcso-custom.zip | head -20
# Should show: style.css, functions.php, etc. at root level
```

---

## Method 1: Upload via WordPress Admin

**Best for**: Quick deployment, non-technical users

### Steps

1. Log in to your WordPress admin dashboard (`/wp-admin`)
2. Go to **Appearance > Themes**
3. Click **Add New** (top of page)
4. Click **Upload Theme** (top of page)
5. Click **Choose File** and select `gcso-custom.zip`
6. Click **Install Now**
7. Wait for "Theme installed successfully"
8. Click **Activate** (or do it later — see [Activating the Theme](#activating-the-theme))

### File Size Limits

If you get an upload error:
- Default WordPress limit is usually 2MB–50MB
- The theme ZIP should be under 1MB

If the ZIP is too large, ask your hosting provider to increase `upload_max_filesize` and `post_max_size` in PHP settings, or use FTP instead.

---

## Method 2: Upload via FTP/SFTP

**Best for**: Reliable uploads, larger files, automated deployment

### Prerequisites

- FTP/SFTP credentials from your hosting provider
- FTP client: [FileZilla](https://filezilla-project.org/) (free), Cyberduck, or WinSCP

### Steps

1. Connect to your server via SFTP:
   - Host: your domain or IP
   - Port: 22 (SFTP) or 21 (FTP)
   - Username/Password: from hosting provider

2. Navigate to the themes directory:
   ```
   /public_html/wp-content/themes/
   ```
   (Path may vary: `/var/www/html/wp-content/themes/` or `/home/username/public_html/wp-content/themes/`)

3. Upload the entire `gcso-custom/` folder (not the ZIP — upload the extracted folder)

4. Verify the structure on the server:
   ```
   /wp-content/themes/gcso-custom/style.css
   /wp-content/themes/gcso-custom/functions.php
   /wp-content/themes/gcso-custom/header.php
   ...
   ```

5. Set file permissions (if needed):
   - Folders: 755
   - Files: 644

---

## Method 3: Upload via File Manager (cPanel)

**Best for**: Shared hosting without SSH access

### Steps

1. Log in to **cPanel** (usually at `yourdomain.com/cpanel` or `yourdomain.com:2083`)
2. Open **File Manager**
3. Navigate to: `public_html/wp-content/themes/`
4. Click **Upload** in the toolbar
5. Upload `gcso-custom.zip`
6. Once uploaded, right-click the ZIP file → **Extract**
7. Verify the extracted `gcso-custom/` folder contains `style.css` at the top level
8. Delete the ZIP file (optional, to save space)

---

## Method 4: Upload via WP-CLI (SSH)

**Best for**: Developers with SSH access, scripted deployments

### Steps

```bash
# SSH into your server
ssh user@your-server.com

# Navigate to WordPress root
cd /var/www/html  # or your WordPress install path

# Option A: Install from ZIP URL (if hosted somewhere)
wp theme install https://your-url.com/gcso-custom.zip --activate

# Option B: Install from local ZIP
wp theme install /path/to/gcso-custom.zip --activate

# Option C: If you uploaded the folder manually
wp theme activate gcso-custom
```

### Verify Installation

```bash
wp theme list
# Should show: gcso-custom | active | none | 1.0.0

wp theme status gcso-custom
```

---

## Activating the Theme

### Before Activating

> ⚠️ **Create a full backup** before switching themes on a live site.

1. Back up the database (via phpMyAdmin, WP-CLI, or backup plugin)
2. Back up the current theme files
3. Note current Customizer settings (take screenshots)

### Activate via Admin

1. Go to **Appearance > Themes**
2. Hover over **GCSO Custom**
3. Click **Activate**

### Activate via WP-CLI

```bash
wp theme activate gcso-custom
```

### What Happens When You Activate

- The front end immediately uses the new theme
- The previous theme becomes inactive (NOT deleted)
- Menu locations need to be reassigned
- Widgets may need reconfiguration
- Customizer settings from the old theme won't carry over

---

## Post-Activation Setup

Complete these steps immediately after activating:

### 1. Set Up Static Homepage

1. **Settings > Reading**
2. "Your homepage displays" → **A static page**
3. Homepage: **Home** (create this page if it doesn't exist)
4. Posts page: **News** (create this page if it doesn't exist)

### 2. Assign Menus

1. **Appearance > Menus**
2. Assign menus to:
   - Primary Navigation → **Primary Navigation** location
   - Footer Navigation → **Footer Navigation** location
   - Utility Navigation → **Utility Navigation** location

### 3. Upload Logo

1. **Appearance > Customize > Site Identity**
2. Upload logo (200×200px recommended)
3. Set Site Title and Tagline

### 4. Configure GCSO Settings

1. **Appearance > Customize > GCSO Settings**
2. Fill in:
   - Contact Information (phone, address, email)
   - Hero Section (image, heading, buttons)
   - Sheriff Message (name, photo, message)
   - Social Media URLs
   - Careers CTA

### 5. Set Permalinks

1. **Settings > Permalinks**
2. Select **Post name** (`/%postname%/`)
3. Save Changes

### 6. Verify

- Visit the homepage
- Test navigation
- Check mobile view
- Verify no errors in DevTools console

---

## Deploying Updates

When you make changes to the theme and need to update the live site:

### Option A: FTP Upload (Overwrite)

1. Upload changed files via FTP, overwriting existing ones
2. Hard refresh the site (Ctrl+Shift+R)
3. Clear any caching plugin

### Option B: Full Theme Re-upload

1. Package new ZIP
2. Via admin: **Appearance > Themes > Add New > Upload Theme**
3. WordPress will ask "This theme is already installed" → Click **Replace current with uploaded**

### Option C: Git-Based Deployment

If your server supports Git:

```bash
# On server
cd /var/www/html/wp-content/themes/gcso-custom
git pull origin main
```

### Option D: Deploy Script

Create a simple deploy script:

```bash
#!/bin/bash
# deploy.sh - Deploy theme to server

SERVER="user@your-server.com"
REMOTE_PATH="/var/www/html/wp-content/themes/gcso-custom"

# Sync theme files (excluding unnecessary files)
rsync -avz --delete \
  --exclude='.git' \
  --exclude='node_modules' \
  --exclude='.DS_Store' \
  ./gcso-custom/ $SERVER:$REMOTE_PATH/

echo "Deploy complete!"
```

### After Any Update

1. Clear server-side cache (if using a caching plugin)
2. Clear CDN cache (if using Cloudflare, etc.)
3. Hard refresh the site in your browser
4. Spot check key pages

---

## WP Staging Deployment

If using the **WP Staging** plugin for testing:

### Deploy to Staging

1. Install theme on the staging copy using any method above
2. The staging URL is typically: `yourdomain.com/staging/` or a subdomain

### Test on Staging

1. Activate the theme on staging
2. Complete all [Post-Activation Setup](#post-activation-setup) steps
3. Run through the [Testing Checklist](./TESTING.md)
4. Get approval from stakeholders

### Push to Production

1. Once staging is approved, deploy to production using the same upload method
2. Alternatively, use WP Staging's "Push" feature to push staging → production
3. Always backup production first

---

## Production Launch

### Pre-Launch Checklist

```
□ Theme tested thoroughly on staging
□ Full production backup created
□ Maintenance mode enabled (optional)
□ DNS team notified (if domain changes involved)
□ SSL certificate verified
□ Redirects prepared (if URL structure changes)
□ Analytics/tracking code verified
□ Search Console updated
□ Cache plugins configured
□ Security plugin configured
□ SEO plugin configured
```

### Launch Steps

1. **Enable maintenance mode** (optional):
   ```bash
   wp maintenance-mode activate
   ```

2. **Deploy the theme** (FTP, ZIP upload, or CLI)

3. **Activate the theme**

4. **Complete post-activation setup** (menus, logo, Customizer)

5. **Verify everything works**:
   - Homepage
   - Interior pages
   - Mobile navigation
   - Forms
   - Search

6. **Disable maintenance mode**:
   ```bash
   wp maintenance-mode deactivate
   ```

7. **Clear all caches**

8. **Monitor for errors** (check debug.log and server logs)

### Post-Launch

- Monitor site for 24–48 hours
- Check Google Search Console for crawl errors
- Verify analytics is tracking
- Keep old theme (Divi) installed but inactive for 30 days as safety net
- After 30 days with no issues, delete old theme

---

## Troubleshooting

### Theme Not Appearing After Upload

**Cause**: ZIP structure is wrong (double-nested folder)

**Fix**:
```bash
# Check: Does this path exist?
/wp-content/themes/gcso-custom/style.css

# If it's at /wp-content/themes/gcso-custom/gcso-custom/style.css
# Move files up one level and delete the extra folder
```

### White Screen After Activation

**Cause**: PHP error in theme files

**Fix**:
1. Enable WP_DEBUG in wp-config.php:
   ```php
   define('WP_DEBUG', true);
   define('WP_DEBUG_LOG', true);
   ```
2. Check `/wp-content/debug.log` for errors
3. If you can't access admin, switch theme via FTP:
   - Rename `gcso-custom` folder to `gcso-custom-disabled`
   - WordPress falls back to default theme
   - Fix the error, rename folder back

### "The theme is missing the style.css stylesheet"

**Cause**: `style.css` not at the root of the uploaded folder

**Fix**: Ensure the ZIP contains files directly (not inside a subfolder)

### Menus Not Showing

**Cause**: Menus not assigned to theme locations

**Fix**: Go to **Appearance > Menus** → Assign each menu to its display location

### Styles Not Loading

**Cause**: File paths incorrect or cache serving old files

**Fix**:
1. Hard refresh (Ctrl+Shift+R)
2. Clear cache plugin
3. Check browser DevTools Network tab for 404 errors on CSS files
4. Verify file exists on server at the expected path

### Images Not Displaying

**Cause**: Image files not uploaded to the theme's assets/images folder

**Fix**:
1. Upload required images to `/wp-content/themes/gcso-custom/assets/images/`
2. Or set images via Customizer (hero, sheriff photo)
3. Check file permissions (644 for files)

---

## Quick Reference

| Task | Command / Action |
|------|-----------------|
| Package theme | `cd gcso-custom && zip -r ../gcso-custom.zip .` |
| Upload via admin | Appearance > Themes > Add New > Upload Theme |
| Upload via CLI | `wp theme install gcso-custom.zip --activate` |
| Activate | `wp theme activate gcso-custom` |
| Check status | `wp theme status gcso-custom` |
| Backup database | `wp db export backup.sql` |
| Enable debug | `wp config set WP_DEBUG true --raw` |
| Clear cache | `wp cache flush` |
| Set homepage | Settings > Reading > Static page > Home |
| Assign menus | Appearance > Menus > Manage Locations |
