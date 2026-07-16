# Logos & Image Assets

Reference for all logo and badge assets needed by the GCSO WordPress theme.

## Color Scheme

| Color | Hex | Usage |
|-------|-----|-------|
| Green olive | `#344D2A` | Primary background, enamel on badge |
| Gold | `#C69B43` | Accents, metallic badge finish |

---

## Logo Files Required

| Logo | Filename | Size (px) | Format | Used In |
|------|----------|-----------|--------|---------|
| Main Header Logo | `gcso-logo-horizontal.png` | 700 × 240 | Transparent PNG (or SVG) | Header left logo area |
| Large Badge / Star Emblem | `gcso-badge-large.png` | 900 × 900 | Transparent PNG | Hero right-side emblem |
| Footer Logo Variant | `gcso-footer-logo.png` | 500 × 200 | Transparent PNG | Footer branding block |
| Fallback Badge (small) | `gcso-badge.png` | 200 × 200 | Transparent PNG | Header fallback, footer fallback, sheriff message, CTA section |

---

## Where Logos Appear in Templates

| Template File | Image Referenced | Display Size |
|---------------|-----------------|--------------|
| `template-parts/header/branding.php` | `gcso-badge.png` (fallback when no custom logo set) | 80 × 80 px |
| `footer.php` | `gcso-badge.png` (fallback when no custom logo set) | 60 × 60 px |
| `template-parts/home/sheriff-message.php` | `gcso-badge.png` (decorative) | 60 × 60 px |
| `template-parts/home/cta.php` | `gcso-badge.png` (decorative) | 60 × 60 px |
| WordPress Customizer (Site Identity) | Custom logo via `the_custom_logo()` | Flexible (theme default 100 × 100) |

---

## File Location

All logo/badge files should be placed in:

```
gcso-custom/assets/images/
```

> **Note:** This directory does not exist yet and must be created before adding assets.

---

## WordPress Custom Logo

The theme registers custom-logo support with flexible dimensions:

```php
add_theme_support('custom-logo', [
    'height'      => 100,
    'width'       => 100,
    'flex-height' => true,
    'flex-width'  => true,
]);
```

Upload the main logo via **Appearance → Customize → Site Identity → Select Logo** (200 × 200 px recommended for the Customizer).

---

## Image Naming Convention

Use simple lowercase filenames:

```text
gcso-logo-horizontal.png
gcso-badge-large.png
gcso-badge.png
gcso-footer-logo.png
```

---

## Optimization Guidelines

- Use **PNG** for transparent/cutout/logo assets
- Use **WebP** for photographic/non-transparent images
- Compress PNGs with tools like TinyPNG or `pngquant`
- Keep file sizes under 200 KB where possible

---

## Hero Carousel Image Sizes

The hero carousel supports up to **3 slides**, configured via **Appearance → Customize → Hero Section / Hero Slide 2 / Hero Slide 3**.

### Recommended Image Size

| Asset | Size (px) | Format | Notes |
|-------|-----------|--------|-------|
| Hero background image (each slide) | **1920 × 800** | WebP or JPG | Registered as custom image size `gcso-hero` via `add_image_size()` |

### Carousel Display Heights (CSS `min-height`)

| Breakpoint | Min-Height |
|------------|-----------|
| Default (mobile) | 520 px |
| Tablet (≥ 768 px) | 580 px |
| Desktop (≥ 1024 px) | 650 px |
| Large (≥ 1440 px) | 700 px |

### How It Works

- Each slide uses a **full-bleed background image** (`background-size: cover; background-position: center`).
- The image is set via `background-image` on `.gcso-hero-carousel__bg`.
- A dark overlay (`.gcso-hero-carousel__overlay`) sits on top for text readability.
- The image zooms slightly (scale 1.04) when the slide is active for a subtle Ken Burns effect.

### Tips for Hero Images

- **Aspect ratio:** Roughly 2.4:1 (1920 × 800). Wider is fine; taller will crop.
- **Safe zone:** Keep important subjects centered — edges may be cropped on narrower screens.
- **File size:** Target under 300 KB per image (use WebP compression).
- **Recommended filenames:**
  ```text
  hero-slide-1.webp
  hero-slide-2.webp
  hero-slide-3.webp
  ```

---

## Department Page Image Specs (Jail, Enforcement, Records, etc.)

Use consistent image dimensions across division pages to improve usability, visual consistency, and easier content maintenance.

### Recommended Department Assets

| Asset Type | Recommended Size (px) | Format | Suggested Filename Pattern | Used In |
|------------|------------------------|--------|----------------------------|---------|
| Department Hero Banner | **1600 × 600** | WebP (preferred) or JPG | `dept-{name}-hero.webp` | Top of each department page (Jail, Patrol/Enforcement, CID, Records, etc.) |
| Department Feature Card Image | **800 × 500** | WebP or JPG | `dept-{name}-card.webp` | Service cards/grids on department landing pages |
| Staff/Unit Photo | **600 × 750** | WebP or JPG | `dept-{name}-staff-{person}.webp` | Leadership/contact sections |
| Icon/Badge for Service Blocks | **128 × 128** | Transparent PNG or SVG | `icon-{service}.png` / `icon-{service}.svg` | Quick links and “Most Requested Tasks” buttons |
| Downloadable Form Preview Thumbnail | **1200 × 1550** | JPG or WebP | `form-{topic}-preview.jpg` | Records/forms listing pages |

### Department Hero Display Guidance

- Use a **wide composition** that keeps key subjects centered.
- Add a subtle dark overlay for readable text on top of photos.
- Keep headline and CTA content inside the center-safe area (avoid outer 15% edges).
- Target file size under **350 KB** per hero image where possible.

### Suggested Department Hero Filenames

```text
dept-jail-hero.webp
dept-enforcement-hero.webp
dept-cid-hero.webp
dept-records-hero.webp
dept-court-services-hero.webp
dept-community-programs-hero.webp
```

### HCI Notes for Department Images

- Prefer **recognizable local context** images to strengthen information scent.
- Avoid text baked into images (improves accessibility and responsiveness).
- Keep visual style consistent so users can quickly recognize page structure.
- Ensure all informative images include meaningful alt text.

---

## Status

- [ ] `gcso-custom/assets/images/` directory created
- [ ] `gcso-logo-horizontal.png` (700 × 240) — generated/obtained
- [ ] `gcso-badge-large.png` (900 × 900) — generated/obtained
- [ ] `gcso-badge.png` (200 × 200) — scaled from large badge
- [ ] `gcso-footer-logo.png` (500 × 200) — generated/obtained
- [ ] Department hero images prepared (1600 × 600)
- [ ] Department card images prepared (800 × 500)
- [ ] Service icons prepared (128 × 128)
- [ ] Custom logo uploaded via WordPress Customizer
