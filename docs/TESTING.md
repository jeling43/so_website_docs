# Testing Guide

This document covers how to test the GCSO Custom WordPress theme for functionality, responsiveness, accessibility, and performance before deploying to production.

---

## Table of Contents

1. [Testing Environment Setup](#testing-environment-setup)
2. [Functional Testing](#functional-testing)
3. [Responsive Design Testing](#responsive-design-testing)
4. [Accessibility Testing](#accessibility-testing)
5. [Performance Testing](#performance-testing)
6. [Browser Compatibility](#browser-compatibility)
7. [Content Testing](#content-testing)
8. [Security Testing](#security-testing)

---

## Testing Environment Setup

### Local Testing

Use the Docker setup (see [LOCAL-DEVELOPMENT.md](./LOCAL-DEVELOPMENT.md)):

```bash
docker compose up -d
# Access at http://localhost:8080
```

### Staging Testing

Upload the theme to WP Staging and test on the staging copy before going live.

### Tools You'll Need

| Tool | Purpose | Link |
|------|---------|------|
| Browser DevTools | Inspect, responsive testing, performance | Built into Chrome/Firefox |
| WAVE Extension | Accessibility audit | [wave.webaim.org](https://wave.webaim.org/extension/) |
| axe DevTools | WCAG compliance | [deque.com/axe](https://www.deque.com/axe/) |
| Lighthouse | Performance + accessibility | Built into Chrome DevTools |
| PageSpeed Insights | Real-world performance | [pagespeed.web.dev](https://pagespeed.web.dev/) |
| NVDA or VoiceOver | Screen reader testing | NVDA (Windows) / VoiceOver (Mac) |

---

## Functional Testing

### Homepage Sections

Test each section renders correctly:

| # | Section | What to Check |
|---|---------|---------------|
| 1 | Utility Bar | Phone numbers display, "Submit a Tip" link works |
| 2 | Header | Logo shows, site name correct, sticky on scroll |
| 3 | Primary Navigation | All links work, dropdowns appear on hover/focus |
| 4 | Mobile Navigation | Opens/closes, sub-menus toggle, focus trapped |
| 5 | Hero | Background image loads, heading/buttons display, buttons link correctly |
| 6 | Quick Links | All 6 cards display, hover states work, links work |
| 7 | Sheriff Message | Photo loads, message displays, "Meet the Sheriff" links |
| 8 | Divisions | 4 cards with images, links work, hover effects |
| 9 | News | Latest 3 posts show, dates correct, "View All" links to archive |
| 10 | CTA Banner | Text and button display, button links correctly |
| 11 | Footer | All columns render, links work, social icons link |

### Navigation Testing

```
✓ Desktop: Hover over menu items with dropdowns → dropdown appears
✓ Desktop: Tab through menu → focus enters dropdown
✓ Desktop: Press Escape in dropdown → dropdown closes, focus returns
✓ Desktop: Click outside dropdown → dropdown closes
✓ Mobile: Tap hamburger → menu slides in
✓ Mobile: Tap X → menu closes
✓ Mobile: Tap submenu arrow → submenu expands
✓ Mobile: Press Escape → menu closes
✓ Mobile: Tap backdrop → menu closes
✓ Mobile: Focus trapped inside open menu
```

### Search Testing

```
✓ Click search icon → search overlay opens
✓ Cursor auto-focuses in search input
✓ Submit search → results page displays
✓ Press Escape → overlay closes
✓ Click outside → overlay closes
✓ Search with no results → "No results" message shows
```

### Interior Pages

```
✓ Standard page → displays with banner, breadcrumbs, content
✓ Single post → displays with meta, featured image, content, navigation
✓ Archive/blog → grid of posts with pagination
✓ 404 page → displays for non-existent URL with search form
✓ Search results → displays matching posts with pagination
```

### WordPress Features

```
✓ Custom logo appears in header and footer
✓ Menus update when changed in admin
✓ Customizer changes reflect on front end
✓ New posts appear in News section
✓ Featured images display on posts
✓ Page titles use WordPress title tag
```

---

## Responsive Design Testing

### Using Browser DevTools

1. Open Chrome/Firefox DevTools (F12)
2. Toggle device toolbar (Ctrl+Shift+M)
3. Test at these breakpoints:

| Breakpoint | Represents | Key Checks |
|------------|-----------|------------|
| 320px | Small mobile | All content readable, no horizontal scroll |
| 375px | iPhone SE/12 mini | Cards stack, hamburger menu shows |
| 414px | iPhone Plus/Pro Max | Hero text readable, buttons full width |
| 768px | iPad / tablet | Grid becomes 2 columns, nav still mobile |
| 1024px | iPad Pro / laptop | Desktop nav appears, hamburger hidden |
| 1280px | Laptop | Full layout, comfortable spacing |
| 1440px | Desktop | Max container width reached |
| 1920px | Large monitor | Content centered, no stretching |

### Responsive Checklist

```
✓ No horizontal scrollbar at any breakpoint
✓ Text remains readable (no overflow or clipping)
✓ Images scale without distortion
✓ Buttons remain tappable (min 44×44px touch target)
✓ Navigation switches from desktop to mobile at 1024px
✓ Quick links grid adjusts from 6 columns to 2-3 on mobile
✓ News cards stack vertically on mobile
✓ Footer columns stack on mobile
✓ Hero section scales gracefully
✓ Tables have horizontal scroll wrapper on mobile
```

### Real Device Testing

If possible, test on actual devices:
- iPhone (Safari)
- Android phone (Chrome)
- iPad (Safari)
- Android tablet (Chrome)

---

## Accessibility Testing

### Automated Testing

#### WAVE Extension
1. Install [WAVE](https://wave.webaim.org/extension/)
2. Visit each page
3. Click WAVE icon
4. Fix any Errors (red) — Alerts (yellow) may be informational

#### Lighthouse Accessibility Audit
1. Open Chrome DevTools > Lighthouse tab
2. Check "Accessibility" category
3. Run audit
4. Target: **Score of 90+**

#### axe DevTools
1. Install [axe DevTools extension](https://www.deque.com/axe/devtools/)
2. Open DevTools > axe tab
3. Scan page
4. Fix Critical and Serious issues

### Manual Testing

#### Keyboard Navigation
```
✓ Tab through entire page — logical order follows visual layout
✓ Skip link appears on first Tab press
✓ Skip link jumps to main content
✓ All interactive elements reachable via Tab
✓ Enter/Space activates buttons and links
✓ Arrow keys navigate within dropdowns
✓ Escape closes modals/overlays
✓ Focus never trapped (except intentionally in modals)
✓ Focus indicator always visible (gold outline)
```

#### Screen Reader Testing

Using **VoiceOver** (Mac: Cmd+F5) or **NVDA** (Windows):

```
✓ Page landmarks announced (banner, navigation, main, contentinfo)
✓ Headings follow logical order (h1 > h2 > h3, no skips)
✓ Images have descriptive alt text
✓ Links have descriptive text (not "click here")
✓ Form inputs have labels
✓ ARIA states announced (expanded/collapsed)
✓ Dynamic content changes announced
```

#### Color Contrast
Use Chrome DevTools:
1. Inspect any text element
2. Click the color swatch
3. Check contrast ratio shown

Minimum ratios (WCAG AA):
- Normal text: **4.5:1**
- Large text (18px+ bold or 24px+): **3:1**
- UI components: **3:1**

#### Reduced Motion
1. Enable "Reduce motion" in OS settings:
   - Mac: System Preferences > Accessibility > Display > Reduce motion
   - Windows: Settings > Ease of Access > Display > Show animations (off)
2. Verify: No animations, smooth scrolling disabled

---

## Performance Testing

### Lighthouse Performance Audit

1. Open Chrome DevTools > Lighthouse
2. Select "Performance" and "Mobile"
3. Run audit

**Target Scores:**
- Performance: 90+
- First Contentful Paint: < 1.8s
- Largest Contentful Paint: < 2.5s
- Cumulative Layout Shift: < 0.1
- Total Blocking Time: < 200ms

### What to Check

```
✓ No render-blocking CSS (preload used)
✓ JavaScript deferred (loaded in footer)
✓ Images lazy-loaded below the fold
✓ Images have explicit width/height
✓ No unused CSS causing bloat
✓ Fonts not causing FOUT/FOIT
✓ No third-party scripts blocking render
✓ Cache-busting via filemtime() works correctly
```

### Image Optimization

Before uploading images:
1. Resize to appropriate dimensions:
   - Hero: 1920×800px
   - News thumbnails: 600×400px
   - Division cards: 600×400px
   - Sheriff photo: 600×700px
2. Compress using [TinyPNG](https://tinypng.com/) or [Squoosh](https://squoosh.app/)
3. Use JPEG for photos, PNG for graphics with transparency, SVG for icons

---

## Browser Compatibility

### Required Browsers

| Browser | Version | Priority |
|---------|---------|----------|
| Chrome | Latest 2 versions | High |
| Firefox | Latest 2 versions | High |
| Safari | Latest 2 versions | High |
| Edge | Latest 2 versions | High |
| iOS Safari | iOS 15+ | High |
| Android Chrome | Latest | Medium |
| Samsung Internet | Latest | Low |

### CSS Features Used (Compatibility Notes)

| Feature | Support | Fallback |
|---------|---------|----------|
| CSS Custom Properties | All modern browsers | N/A (required) |
| `clamp()` | All modern browsers | Falls back to fixed size |
| `min()` | All modern browsers | N/A |
| CSS Grid | All modern browsers | N/A |
| `gap` in Flexbox | All modern browsers | Margin fallback |
| `:focus-visible` | All modern browsers | Falls back to `:focus` |
| `aspect-ratio` | All modern browsers | Height + overflow |

### Known Quirks

- **Safari**: Sticky positioning may need `-webkit-sticky` (included)
- **iOS Safari**: 100vh includes the address bar — avoid full-height hero on mobile
- **Firefox**: Custom scrollbar styles won't apply

---

## Content Testing

### Customizer Settings

Test each Customizer setting updates correctly:

1. Go to **Appearance > Customize > GCSO Settings**
2. Change each field and verify it updates in the preview:
   - [ ] Phone number → utility bar + footer
   - [ ] Hero heading → hero section
   - [ ] Hero description → hero section
   - [ ] Hero image → hero background
   - [ ] Hero button text/URLs → hero buttons
   - [ ] Sheriff name → sheriff section
   - [ ] Sheriff photo → sheriff section
   - [ ] Sheriff message → sheriff section
   - [ ] Social URLs → footer icons
   - [ ] Emergency notice toggle → bar appears/hides
   - [ ] CTA text/button → CTA section

### Edge Cases

```
✓ Very long page titles don't overflow
✓ Posts with no featured image display correctly
✓ Posts with no excerpt use auto-generated excerpt
✓ Empty menus show fallback content
✓ Missing custom logo shows fallback badge
✓ Very long navigation labels don't break layout
✓ Content with tables is responsive (scrollable)
✓ Content with embedded videos scales properly
```

---

## Security Testing

### Basic Checks

```
✓ All output properly escaped (view source, look for unescaped HTML)
✓ No PHP errors/warnings in debug log
✓ Admin-only features require authentication
✓ Nonces present on any custom forms
✓ No sensitive data in page source
✓ defined('ABSPATH') || exit; present in all PHP files
✓ No direct file access possible (try visiting a PHP file directly)
```

### Security Headers (production)

Verify these headers are set (may be server-level):
- `X-Content-Type-Options: nosniff`
- `X-Frame-Options: SAMEORIGIN`
- `X-XSS-Protection: 1; mode=block`

---

## Test Report Template

Use this template to document test results:

```markdown
## Test Report - [Date]

### Environment
- WordPress version: x.x.x
- PHP version: x.x
- Browser: Chrome xxx
- Device: Desktop / Mobile (specify)

### Results Summary
- Total tests: XX
- Passed: XX
- Failed: XX
- Blocked: XX

### Failed Tests
| # | Test | Expected | Actual | Priority |
|---|------|----------|--------|----------|
| 1 | ... | ... | ... | High/Med/Low |

### Notes
- ...
```

---

## Continuous Testing

During development, run through this quick checklist after every significant change:

### Quick Smoke Test (2 minutes)

1. ✓ Homepage loads without errors
2. ✓ Desktop navigation works
3. ✓ Mobile menu opens/closes
4. ✓ One interior page loads
5. ✓ No console errors (DevTools > Console)
6. ✓ Responsive at 375px and 1024px
