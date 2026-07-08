# Gordon County Sheriff’s Office Divi Redesign Guide

This guide explains how to rebuild the Gordon County Sheriff’s Office homepage in **WordPress using Divi**, based on the approved visual mockup. The goal is to make the site feel more like the Lee County Sheriff’s Office website: modern, service-first, easy to navigate, and professional.

This version includes more detail about **Divi free-form CSS**, CSS classes, the Theme Builder, the Services mega menu, mobile layout, and the recommended build order.

---

## 1. Project goal

The redesigned homepage should accomplish four things:

1. Make the most-used citizen services easy to find.
2. Modernize the visual appearance without losing the Gordon County identity.
3. Improve navigation by grouping services logically.
4. Make the site easier to maintain in WordPress and Divi.

The homepage should prioritize:

- Inmate Information
- Request a Report
- Sex Offender Registry
- Most Wanted
- Tip Line
- Employment
- Press Releases
- Contact Information

The design should use Gordon County branding, but the navigation pattern should be inspired by Lee County’s service-first structure.

---

## 2. Important Divi concept: layout vs. free-form CSS

Divi should handle the layout. CSS should handle polish.

### Use Divi Builder for:

- Sections
- Rows
- Columns
- Images
- Buttons
- Text
- Blurbs
- Blog module
- Footer columns
- Responsive stacking
- Global header and footer

### Use free-form CSS for:

- Card shadows
- Hover effects
- Gold accent lines
- Header button alignment
- Mega-menu styling
- Rounded corners
- Image cropping
- Mobile spacing fixes
- Consistent typography refinements

Do **not** hand-code the whole homepage in CSS. Build the structure visually in Divi first, then apply CSS classes and custom CSS to make it match the mockup.

---

## 3. Where free-form CSS goes in Divi

Divi gives you several places to add custom CSS. Use them carefully.

### Option A: Site-wide CSS

Best for this project.

Go to:

```text
Divi → Theme Options → General → Custom CSS
```

Use this area for CSS that applies across the site, such as:

- `.quick-card`
- `.division-card`
- `.gcs-hero`
- `.top-contact-bar`
- `.gcs-news`
- `.header-actions`
- mobile media queries

This keeps the redesign consistent and easier to maintain.

### Option B: Page-specific CSS

Use this for CSS that only applies to the redesigned homepage.

Go to the page using the Divi Builder, then open:

```text
Page Settings → Advanced → Custom CSS
```

Use this only if you do not want the CSS affecting interior pages.

### Option C: Section, row, column, or module custom CSS

Every Divi element has custom CSS fields.

Open any section, row, column, or module, then go to:

```text
Advanced → Custom CSS
```

Use this sparingly. It is useful for a one-off adjustment, but it can become hard to manage if overused.

### Recommended approach

For this site, use:

```text
Divi Theme Options → Custom CSS
```

Then assign CSS classes to sections, rows, columns, and modules.

That is the cleanest workflow.

---

## 4. How CSS classes work in Divi

CSS classes let you style specific Divi elements without affecting the whole site.

For example, if you want the row of service cards to have special styling, do this:

1. Open the row in Divi.
2. Go to **Advanced**.
3. Open **CSS ID & Classes**.
4. Add this class under **CSS Class**:

```text
quick-links-row
```

Then in the Custom CSS area, write:

```css
.quick-links-row .et_pb_column {
  background: #ffffff;
  border: 1px solid #e3e6ea;
  padding: 20px 10px;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}
```

This tells Divi:

> Only style columns inside a row with the class `quick-links-row`.

That is safer than styling every column on the website.

---

## 5. Create a staging website first

Do not redesign the public homepage directly.

### If your host has staging

Check the hosting dashboard for:

- Staging
- Clone Site
- Development Site
- Copy Site

Create a staging copy of the current website.

### If your host does not have staging

Use a WordPress staging plugin.

Recommended plugin:

```text
WP STAGING
```

Steps:

1. Go to **Plugins → Add New Plugin**.
2. Search for **WP STAGING**.
3. Install and activate it.
4. Create a staging site named:

```text
redesign
```

5. Open the staging copy.
6. Go to **Settings → Reading**.
7. Check:

```text
Discourage search engines from indexing this site
```

Only do this on staging. Do not leave this checked on the live website.

### Before touching the live site

Create a backup that includes:

- WordPress files
- Uploads folder
- Theme settings
- Plugins
- Database

Use your host’s backup tool or a plugin such as UpdraftPlus.

---

## 6. Gather image assets

The mockup depends heavily on strong photography and clean logo assets.

Prepare these files before building.

| Image | Recommended size | Notes |
|---|---:|---|
| Main horizontal logo | 700 × 240 | Transparent PNG or SVG preferred |
| Sheriff cutout | 900 × 1,100 | Transparent PNG for hero |
| Large badge/star | 900 × 900 | Transparent PNG |
| Sheriff portrait with flag | 800 × 700 | JPG or WebP |
| Hero background | 1,920 × 850 | WebP preferred |
| Division photos | 800 × 450 | Same crop ratio for all four |
| News photos | 600 × 360 | Featured images for posts |
| Footer logo | 500 × 200 | Transparent PNG |

### Image naming convention

Use simple lowercase filenames:

```text
gcso-logo-horizontal.png
gcso-sheriff-cutout.png
gcso-badge-large.png
gcso-hero-background.webp
gcso-sheriff-portrait.webp
division-administration.webp
division-enforcement.webp
division-judicial.webp
division-jail.webp
```

### Image optimization

Before uploading:

- Compress large photos.
- Use WebP for photos when possible.
- Keep most images under 300 KB.
- Add alt text in the Media Library.

Example alt text:

```text
Gordon County Sheriff’s Office patrol vehicle
```

Avoid vague alt text like:

```text
image1
```

---

## 7. Set site colors and fonts

Use these colors consistently.

```text
Main navy:   #071B3A
Dark navy:   #04142D
Gold:        #C69B43
Dark gold:   #A87C22
White:       #FFFFFF
Light gray:  #F5F6F8
Border gray: #E3E6EA
Body text:   #20242C
```

### Divi typography settings

Go to:

```text
Divi → Theme Customizer → General Settings → Typography
```

Recommended settings:

```text
Body font: Montserrat
Body size: 16px
Body line height: 1.6
Header font: Montserrat
Header color: #071B3A
```

For the sheriff welcome heading, use:

```text
Libre Baskerville
```

You can set that directly in the Text Module for the welcome section.

### Standard Divi row width

Use this on most rows:

```text
Width: 92%
Maximum Width: 1280px
```

This keeps the site wide and modern without stretching too far on large monitors.

---

## 8. Create the main pages

Go to:

```text
Pages → Add New
```

Create these pages:

- Home
- About GCSO
- Services
- Divisions
- Careers
- News & Alerts
- Contact
- Inmate Information
- Sex Offender Registry
- Most Wanted
- Tip Line
- Request a Report
- Public Records
- Employment Application
- Administration
- Enforcement
- Judicial Services
- Jail Division
- Secondary Metals
- Raffle Permits

Incomplete pages can stay in draft status while building.

### Suggested URL slugs

| Page | Suggested slug |
|---|---|
| Inmate Information | `/inmate-information/` |
| Request a Report | `/request-a-report/` |
| Sex Offender Registry | `/sex-offender-registry/` |
| Most Wanted | `/most-wanted/` |
| Tip Line | `/tip-line/` |
| Employment Application | `/employment-application/` |
| Public Records | `/public-records/` |

If existing pages already have URLs, try to preserve them. Do not change URLs unless necessary.

---

## 9. Create the primary navigation menu

Go to:

```text
Appearance → Menus
```

Create a menu called:

```text
Primary Navigation
```

Add these top-level links:

```text
Home
About GCSO
Services
Divisions
Careers
News & Alerts
Contact
```

### Services menu hierarchy

Use this structure:

```text
Services
    Most Used
        Inmate Information
        Request a Report
        Public Records
    Public Safety
        Sex Offender Registry
        Most Wanted
        Tip Line
    Other Services
        Secondary Metals
        Employment Application
        Raffle Permits
```

For the headings **Most Used**, **Public Safety**, and **Other Services**, use Custom Links with:

```text
URL: #
```

These are category headings, not real pages.

### Divisions menu hierarchy

Use this structure:

```text
Divisions
    Administration
    Enforcement
    Judicial Services
    Jail Division
```

### About menu hierarchy

Use this structure:

```text
About GCSO
    Welcome
    Meet the Sheriff
    Organization
```

### Careers menu hierarchy

Use this structure:

```text
Careers
    Employment Information
    Employment Application
```

---

## 10. Build the global header

Go to:

```text
Divi → Theme Builder
```

Under **Default Website Template**:

1. Click **Add Global Header**.
2. Choose **Build Global Header**.
3. Choose **Build From Scratch**.

The header has two main parts:

1. Emergency contact bar
2. Main navigation bar

---

## 11. Build the emergency contact bar

Add a regular section with one column.

### Section settings

```text
Background: #071B3A
Top padding: 7px
Bottom padding: 7px
```

### Text module content

Add a Text Module with this HTML:

```html
<div class="top-contact-bar">
  <span>☎ Emergency: 911</span>
  <span>☎ Non-Emergency: 706-629-1244</span>
  <span>💬 Submit a Tip</span>
</div>
```

### Text settings

```text
Font: Montserrat
Size: 13px
Color: #FFFFFF
Alignment: Center
```

### Add CSS class

The class is inside the HTML:

```text
top-contact-bar
```

The free-form CSS later will make this bar display neatly across the top.

---

## 12. Build the main navigation bar

Add a second regular section under the emergency bar.

### Section settings

```text
Background: #FFFFFF
Top padding: 14px
Bottom padding: 14px
Box shadow: subtle, optional
```

### Row layout

Add a three-column row:

```text
28% | 47% | 25%
```

Set row width:

```text
Width: 92%
Maximum Width: 1280px
Vertical Alignment: Middle
```

### Column 1: logo

Add an Image Module.

Settings:

```text
Image: horizontal Gordon County Sheriff’s Office logo
Width: 320px
Alignment: Left
Link URL: /
```

### Column 2: main menu

Add a Menu Module.

Settings:

```text
Menu: Primary Navigation
Text color: #111722
Text size: 14px
Font weight: 600
Active link color: #C69B43
Alignment: Center
Show Search Icon: Yes
```

### Column 3: action buttons

Add two Button Modules:

```text
INMATE SEARCH
REQUEST A REPORT
```

Recommended button links:

```text
INMATE SEARCH → /inmate-information/
REQUEST A REPORT → /request-a-report/
```

First button:

```text
Background: #C69B43
Text: #FFFFFF
Border: none
Border radius: 3px
```

Second button:

```text
Background: #071B3A
Text: #FFFFFF
Border: none
Border radius: 3px
```

Add this CSS class to Column 3:

```text
header-actions
```

This lets the CSS align the two buttons in a row.

### Make only the white navigation sticky

Open the white navigation section:

```text
Advanced → Scroll Effects → Sticky Position → Stick to Top
```

Do not make the emergency bar sticky. It should scroll away.

---

## 13. Create the Services mega menu

The mockup shows the Services menu open as a three-column mega menu.

### Enable CSS classes in WordPress menus

Go to:

```text
Appearance → Menus
```

At the top right, click:

```text
Screen Options
```

Check:

```text
CSS Classes
```

### Add the mega-menu class

Open the **Services** top-level menu item.

In the CSS Classes field, add:

```text
mega-menu
```

Save the menu.

### Important hierarchy

Make sure the menu looks like this:

```text
Services
    Most Used
        Inmate Information
        Request a Report
        Public Records
    Public Safety
        Sex Offender Registry
        Most Wanted
        Tip Line
    Other Services
        Secondary Metals
        Employment Application
        Raffle Permits
```

Divi will use the `mega-menu` class to spread child links into columns.

### Making it look like the mockup

Divi’s default mega menu will work, but it may not look polished enough. Use the CSS later in this guide to improve:

- width
- spacing
- column headings
- background
- shadows
- hover state
- gold accent color

---

## 14. Create the redesigned homepage

Go to:

```text
Pages → Add New
```

Name the page:

```text
Home Redesign
```

Then:

1. Click **Use Divi Builder**.
2. Choose **Build From Scratch**.
3. Open the Visual Builder.

Do not set this as the live homepage until it is reviewed.

---

## 15. Homepage section map

The homepage should be built in this order:

1. Hero section
2. Quick service cards
3. Sheriff welcome section
4. Divisions section
5. News and press releases section
6. Careers banner
7. Footer handled globally through Theme Builder

---

## 16. Build the hero section

Add a regular section.

### Section CSS class

Open Section Settings:

```text
Advanced → CSS ID & Classes → CSS Class
```

Add:

```text
gcs-hero
```

### Section background

Use the hero background image from the mockup.

Recommended:

```text
Background image: dark red/navy abstract sheriff background
Background image size: Cover
Background image position: Center
```

Add a gradient overlay:

```text
Left: rgba(2, 12, 30, 0.96)
Middle: rgba(2, 12, 30, 0.70)
Right: rgba(2, 12, 30, 0.25)
```

### Section spacing

```text
Minimum height: 540px
Top padding: 110px
Bottom padding: 70px
Overflow: Hidden
```

### Hero row

Add a three-column row:

```text
42% | 30% | 28%
```

Row settings:

```text
Width: 92%
Maximum Width: 1280px
Vertical Alignment: Bottom
Gutter Width: 2
```

---

## 17. Hero column 1: headline and buttons

Add a Text Module.

Content:

```html
<h1>
  SERVING AND<br>
  PROTECTING<br>
  <span class="gold-text">GORDON COUNTY</span>
</h1>

<p>
  Dedicated professionals committed to safety, integrity, and community.
</p>
```

### Heading settings

```text
Font: Montserrat
Weight: 800
Desktop size: 58px
Tablet size: 44px
Phone size: 36px
Line height: 1.02
Color: #FFFFFF
Letter spacing: -1px
```

### Paragraph settings

```text
Font: Montserrat
Size: 18px
Color: #FFFFFF
Maximum width: 460px
```

### Buttons

Add two Button Modules under the text:

```text
INMATE SEARCH
CONTACT US
```

Links:

```text
INMATE SEARCH → /inmate-information/
CONTACT US → /contact/
```

Button 1:

```text
Background: #C69B43
Text: #FFFFFF
Border: none
Border radius: 3px
```

Button 2:

```text
Background: transparent
Text: #FFFFFF
Border: 1px solid #FFFFFF
Border radius: 3px
```

Wrap the buttons in a row or assign their wrappers the class:

```text
hero-buttons
```

If using two separate Divi Button Modules, add `hero-buttons` to the row or column that contains them.

---

## 18. Hero column 2: sheriff image

Add an Image Module.

Use a transparent PNG cutout of the sheriff.

Settings:

```text
Width: 100%
Maximum width: 420px
Alignment: Center
Bottom margin: -70px
```

On phone, move this image below the headline or hide it if the hero becomes too crowded.

---

## 19. Hero column 3: large badge

Add an Image Module.

Use the large Gordon County Sheriff’s Office badge/star.

Settings:

```text
Width: 95%
Maximum width: 400px
Alignment: Right
Opacity: 90%
```

On phone, hide this image.

This keeps the mobile hero clean.

---

## 20. Build the quick service cards

Add a regular section directly below the hero.

Section settings:

```text
Background: #FFFFFF
Top padding: 0
Bottom padding: 25px
```

Add a six-column row.

### Row CSS class

Add this CSS class to the row:

```text
quick-links-row
```

Row settings:

```text
Width: 92%
Maximum Width: 1280px
Top margin: -40px
Equalize Column Heights: Yes
Z-index: 10
```

### Add six Blurb Modules

Create one Blurb Module per column.

Cards:

1. Inmate Information
2. Sex Offender Registry
3. Most Wanted
4. Tip Line
5. Request a Report
6. Employment

### Blurb settings

```text
Icon placement: Top
Icon color: #071B3A
Icon size: 42px
Title alignment: Center
Title size: 15px
Title weight: 700
Background: #FFFFFF
Padding: 20px 10px
```

### Add class to each Blurb Module

```text
quick-card
```

### Suggested icons

| Card | Icon idea |
|---|---|
| Inmate Information | person / jail / user icon |
| Sex Offender Registry | group / ID icon |
| Most Wanted | target icon |
| Tip Line | chat bubble icon |
| Request a Report | document icon |
| Employment | briefcase icon |

---

## 21. Build the Sheriff welcome section

Add a regular section.

Section settings:

```text
Background: #F5F6F8
Top padding: 35px
Bottom padding: 45px
```

Add a two-column row:

```text
31% | 69%
```

Row settings:

```text
Width: 92%
Maximum Width: 1280px
Vertical Alignment: Middle
```

### Left column

Add an Image Module.

Use the sheriff portrait with the American flag background.

Settings:

```text
Border radius: 8px
Box shadow: medium
Right border: 4px solid #C69B43
```

### Right column

Add a Text Module.

Content:

```html
<p class="section-label">MESSAGE FROM THE SHERIFF</p>

<h2>Welcome to the Gordon County Sheriff’s Office</h2>

<p>
  At the Gordon County Sheriff’s Office, our mission is simple:
  to serve and protect every citizen with honor, integrity, and
  professionalism. We are committed to building strong partnerships,
  promoting safety, and improving the quality of life in our community.
</p>
```

Heading settings:

```text
Font: Libre Baskerville
Size: 42px
Tablet size: 34px
Phone size: 28px
Weight: 700
Color: #071B3A
Line height: 1.1
```

Paragraph settings:

```text
Font: Montserrat
Size: 16px
Color: #20242C
Line height: 1.6
```

Add a Button Module:

```text
MEET THE SHERIFF
```

Button settings:

```text
Background: #071B3A
Text: #FFFFFF
Border radius: 3px
```

Link:

```text
/meet-the-sheriff/
```

---

## 22. Build the Divisions section

Add a white regular section.

Section settings:

```text
Background: #FFFFFF
Top padding: 45px
Bottom padding: 35px
```

Add a Text Module for the section heading:

```html
<h2>OUR DIVISIONS</h2>
```

Heading settings:

```text
Font: Montserrat
Size: 22px
Weight: 700
Color: #071B3A
Alignment: Center
Letter spacing: 0.5px
```

Add a four-column row.

Row settings:

```text
Width: 92%
Maximum Width: 1280px
Gutter width: 3
```

### Division cards

Use these four cards:

- Administration
- Enforcement
- Judicial Services
- Jail Division

Each column should contain:

1. Image Module
2. Text Module

Image settings:

```text
Width: 100%
Force fullwidth: Yes
Bottom margin: 0
```

Text Module content example:

```html
<p>ADMINISTRATION</p>
```

Text Module settings:

```text
Background: #071B3A
Text color: #FFFFFF
Padding: 17px 20px
Font size: 15px
Font weight: 700
```

Add this CSS class to each column:

```text
division-card
```

The CSS will round the corners, crop the images evenly, and add hover movement.

---

## 23. Build the News and Press Releases section

First create a WordPress category.

Go to:

```text
Posts → Categories
```

Create:

```text
Press Releases
```

Each press release should be a normal WordPress post with:

- Title
- Featured image
- Publication date
- Short excerpt
- Full article
- Press Releases category

### Add the homepage section

Add a regular section.

Section settings:

```text
Background: #FFFFFF
Top padding: 30px
Bottom padding: 35px
```

Add a Text Module heading:

```html
<h2>LATEST NEWS & PRESS RELEASES</h2>
```

Add a Button Module near the heading:

```text
VIEW ALL NEWS
```

Link:

```text
/news-alerts/
```

### Add Blog Module

Add a Divi Blog Module.

Settings:

```text
Category: Press Releases
Post Count: 3
Layout: Grid
Show Featured Image: Yes
Show Date: Yes
Show Author: No
Show Categories: No
Show Excerpt: Yes
Show Read More: Yes
Excerpt Length: 18 words
```

Add this CSS class to the Blog Module:

```text
gcs-news
```

The CSS will make the posts look like clean news cards.

---

## 24. Build the careers banner

Add a regular section.

Section settings:

```text
Background: #FFFFFF
Top padding: 15px
Bottom padding: 35px
```

Add a two-column row:

```text
68% | 32%
```

Row settings:

```text
Width: 92%
Maximum Width: 1280px
Background: #071B3A
Border radius: 6px
Padding: 22px 30px
Vertical Alignment: Middle
```

Left column Text Module:

```html
<h3>
  MAKING A DIFFERENCE.<br>
  <span class="gold-text">START YOUR CAREER WITH GCSO.</span>
</h3>
<p>Join a team dedicated to service, leadership, and community.</p>
```

Text settings:

```text
Heading color: #FFFFFF
Heading size: 27px
Heading weight: 700
Paragraph color: #FFFFFF
```

Right column Button Module:

```text
VIEW OPEN POSITIONS
```

Button settings:

```text
Background: #C69B43
Text: #FFFFFF
Width: about 220px
Alignment: Right
Border radius: 3px
```

Link:

```text
/careers/
```

---

## 25. Build the global footer

Go to:

```text
Divi → Theme Builder
```

Under **Default Website Template**:

1. Click **Add Global Footer**.
2. Choose **Build Global Footer**.
3. Build from scratch.

### Footer section settings

```text
Background: #071B3A
Top border: 3px solid #C69B43
Text color: #FFFFFF
Top padding: 35px
Bottom padding: 20px
```

Add a five-column row:

```text
24% | 18% | 18% | 22% | 18%
```

Row settings:

```text
Width: 92%
Maximum Width: 1280px
```

### Column 1: agency information

Add:

- Footer logo
- Address
- Phone number
- Email

Example:

```text
Gordon County Sheriff’s Office
100 Public Safety Way
Calhoun, GA 30701
706-629-1244
info@gordonsheriff.org
```

Only use the correct official email address if confirmed.

### Column 2: office hours

Heading:

```text
OFFICE HOURS
```

Content:

```text
Monday through Friday
8:00 AM to 5:00 PM

Closed weekends and holidays
```

### Column 3: quick links

Heading:

```text
QUICK LINKS
```

Links:

- Inmate Information
- Sex Offender Registry
- Most Wanted
- Tip Line
- Request a Report
- Public Records

### Column 4: important links

Heading:

```text
IMPORTANT LINKS
```

Possible links:

- Georgia Sheriffs’ Association
- Georgia Crime Information Center
- Georgia.gov
- GBI Sex Offender Registry
- GCIC/CJIS resources, if appropriate

### Column 5: follow us

Heading:

```text
FOLLOW US
```

Add a Social Media Follow Module.

Add a small badge or seal below it if desired.

### Footer bottom row

Add a final row with:

```text
© 2026 Gordon County Sheriff’s Office. All rights reserved.
```

Add links:

- Privacy Policy
- Terms of Use
- Accessibility Statement

---

## 26. Free-form CSS for the redesign

Paste this CSS into:

```text
Divi → Theme Options → General → Custom CSS
```

```css
:root {
  --gcs-navy: #071b3a;
  --gcs-dark-navy: #04142d;
  --gcs-gold: #c69b43;
  --gcs-dark-gold: #a87c22;
  --gcs-light-gray: #f5f6f8;
  --gcs-border: #e3e6ea;
  --gcs-text: #20242c;
}

/* General helpers */
.gold-text {
  color: var(--gcs-gold);
}

.section-label {
  color: var(--gcs-gold);
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 0.5px;
  margin-bottom: 10px;
  text-transform: uppercase;
}

.et_pb_button {
  font-weight: 700;
  letter-spacing: 0.2px;
  border-radius: 3px;
}

/* Top emergency/contact bar */
.top-contact-bar {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 28px;
  flex-wrap: wrap;
}

.top-contact-bar span {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  white-space: nowrap;
}

/* Header action buttons */
.header-actions {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  gap: 10px;
}

.header-actions .et_pb_button_module_wrapper {
  margin: 0 !important;
}

/* Main menu polish */
.et_pb_menu .et-menu > li > a {
  font-weight: 700;
  letter-spacing: 0.2px;
}

.et_pb_menu .et-menu > li > a:hover {
  color: var(--gcs-gold) !important;
  opacity: 1;
}

.et_pb_menu .et-menu > li.current-menu-item > a,
.et_pb_menu .et-menu > li.current_page_item > a {
  color: var(--gcs-gold) !important;
}

/* Divi mega menu polish */
.et_pb_menu .et-menu-nav li.mega-menu > ul {
  width: min(920px, 92vw) !important;
  left: 50% !important;
  transform: translateX(-50%);
  padding: 28px 30px !important;
  border-top: 3px solid var(--gcs-gold);
  border-radius: 0 0 6px 6px;
  box-shadow: 0 12px 35px rgba(4, 20, 45, 0.18);
}

.et_pb_menu .et-menu-nav li.mega-menu > ul > li > a {
  color: var(--gcs-navy) !important;
  font-weight: 800;
  text-transform: uppercase;
  font-size: 13px;
  letter-spacing: 0.4px;
  padding-bottom: 10px !important;
  border-bottom: 1px solid var(--gcs-border);
}

.et_pb_menu .et-menu-nav li.mega-menu ul li a {
  color: var(--gcs-text) !important;
  font-size: 14px;
  line-height: 1.4;
}

.et_pb_menu .et-menu-nav li.mega-menu ul li a:hover {
  color: var(--gcs-gold) !important;
  background: transparent !important;
}

/* Hero */
.gcs-hero {
  position: relative;
  overflow: hidden;
}

.gcs-hero .et_pb_row {
  align-items: flex-end;
}

.gcs-hero h1 {
  text-transform: uppercase;
}

.hero-buttons {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
}

.hero-buttons .et_pb_button_module_wrapper {
  margin: 0 !important;
}

/* Quick service cards */
.quick-links-row {
  position: relative;
  z-index: 10;
}

.quick-links-row .et_pb_column {
  background: #ffffff;
  border: 1px solid var(--gcs-border);
  padding: 20px 10px;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.quick-links-row .et_pb_column:first-child {
  border-radius: 6px 0 0 6px;
}

.quick-links-row .et_pb_column:last-child {
  border-radius: 0 6px 6px 0;
}

.quick-links-row .et_pb_column:hover {
  transform: translateY(-4px);
  box-shadow: 0 8px 22px rgba(7, 27, 58, 0.13);
}

.quick-card .et_pb_blurb_content::after {
  content: "";
  display: block;
  width: 28px;
  height: 2px;
  background: var(--gcs-gold);
  margin: 12px auto 0;
}

.quick-card .et_pb_module_header {
  padding-bottom: 0;
}

/* Division cards */
.division-card {
  overflow: hidden;
  border-radius: 6px;
  box-shadow: 0 4px 14px rgba(7, 27, 58, 0.12);
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.division-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 10px 28px rgba(7, 27, 58, 0.16);
}

.division-card .et_pb_image {
  margin-bottom: 0 !important;
}

.division-card .et_pb_image img {
  width: 100%;
  aspect-ratio: 16 / 7;
  object-fit: cover;
  display: block;
}

.division-card .et_pb_text {
  margin-top: 0 !important;
}

/* News cards */
.gcs-news article.et_pb_post {
  border: 1px solid var(--gcs-border);
  border-radius: 6px;
  overflow: hidden;
  box-shadow: 0 3px 12px rgba(7, 27, 58, 0.08);
  background: #ffffff;
}

.gcs-news article.et_pb_post:hover {
  box-shadow: 0 8px 24px rgba(7, 27, 58, 0.14);
}

.gcs-news .entry-featured-image-url img {
  aspect-ratio: 5 / 3;
  object-fit: cover;
}

.gcs-news .entry-title {
  font-size: 17px;
  line-height: 1.25;
  font-weight: 800;
  padding: 0 18px;
}

.gcs-news .post-meta,
.gcs-news .post-content {
  padding-left: 18px;
  padding-right: 18px;
}

.gcs-news .post-meta {
  font-size: 12px;
}

.gcs-news .more-link {
  color: var(--gcs-navy);
  font-weight: 800;
  text-transform: capitalize;
}

.gcs-news .more-link:hover {
  color: var(--gcs-gold);
}

/* Footer */
.gcs-footer a {
  color: #ffffff;
}

.gcs-footer a:hover {
  color: var(--gcs-gold);
}

/* Tablet */
@media (max-width: 980px) {
  .header-actions {
    display: none;
  }

  .gcs-hero h1 {
    font-size: 44px !important;
  }

  .quick-links-row .et_pb_column {
    margin-bottom: 10px;
    border-radius: 6px !important;
  }

  .division-card {
    margin-bottom: 20px;
  }
}

/* Phone */
@media (max-width: 767px) {
  .top-contact-bar {
    gap: 8px;
    font-size: 11px;
  }

  .top-contact-bar span:nth-child(2) {
    display: none;
  }

  .gcs-hero {
    text-align: center;
  }

  .gcs-hero h1 {
    font-size: 36px !important;
  }

  .gcs-hero p {
    margin-left: auto;
    margin-right: auto;
  }

  .hero-buttons {
    justify-content: center;
  }

  .quick-links-row {
    margin-top: -20px !important;
  }

  .quick-links-row .et_pb_column {
    margin-bottom: 10px;
    border-radius: 6px !important;
  }
}
```

---

## 27. CSS class checklist

As you build in Divi, make sure these classes are assigned.

| Divi element | CSS class |
|---|---|
| Emergency bar HTML wrapper | `top-contact-bar` |
| Header button column | `header-actions` |
| Services menu item | `mega-menu` |
| Hero section | `gcs-hero` |
| Hero button wrapper/row | `hero-buttons` |
| Quick service row | `quick-links-row` |
| Each quick service Blurb | `quick-card` |
| Each division card column | `division-card` |
| Blog Module | `gcs-news` |
| Footer section, optional | `gcs-footer` |

If something does not style correctly, first check that the class is spelled exactly right.

---

## 28. Mobile layout adjustments

Divi lets you set different values for desktop, tablet, and phone.

When hovering over many size fields in Divi, click the small responsive icon to set different values.

### Tablet recommendations

```text
Hero heading: 44px
Quick service cards: 3 per row
Divisions: 2 per row
News posts: 2 or 1 per row depending on space
Footer: 2 columns per row
Hide large badge if needed
```

### Phone recommendations

```text
Hero heading: 34px to 36px
Hero text: centered
Hero buttons: stacked or centered side-by-side
Sheriff cutout: below text or hidden
Large badge: hidden
Quick service cards: 2 per row or 1 per row
Divisions: 1 per row
News posts: 1 per row
Footer: 1 column
Buttons: at least 44px tall
```

### Important mobile rule

Do not force the desktop mega menu onto mobile. Let Divi use a simpler mobile menu.

Mobile users should quickly see:

- Inmate Information
- Request a Report
- Tip Line
- Contact
- Careers

---

## 29. Accessibility checklist

A sheriff’s office website should be easy for everyone to use.

Check these items before launch:

- Use only one H1 on the homepage.
- Add alt text to all meaningful images.
- Do not use images of text for important information.
- Make sure buttons have clear labels.
- Use strong contrast between text and background.
- Make sure phone numbers are selectable on mobile.
- Keep body text at least 16px.
- Do not rely only on color to communicate meaning.
- Make sure the menu can be used with keyboard navigation.
- Use clear page titles.

Suggested accessibility footer links:

- Accessibility Statement
- Privacy Policy
- Terms of Use

---

## 30. SEO and indexing checklist

Because the site previously had indexing issues, check this carefully.

### On staging

Settings should be:

```text
Discourage search engines from indexing this site: checked
```

### On live site

Settings should be:

```text
Discourage search engines from indexing this site: unchecked
```

Go to:

```text
Settings → Reading
```

### After launch

1. Clear Divi cache.
2. Clear WordPress cache.
3. Clear hosting cache.
4. Clear CDN cache if used.
5. Submit the homepage in Google Search Console.
6. Request indexing.
7. Confirm the site has a sitemap.
8. Confirm the site does not have accidental `noindex` tags.

---

## 31. Save reusable Divi Library items

Save these to the Divi Library so future pages match the homepage.

- GCSO Section Heading
- GCSO Gold Button
- GCSO Navy Button
- GCSO Quick Link Card
- GCSO Division Card
- GCSO Careers Banner
- GCSO News Card Style
- GCSO Footer Column

This makes the site easier for staff to maintain.

---

## 32. Recommended build order

Build in this order:

1. Create staging site.
2. Create backup.
3. Upload image assets.
4. Set colors and fonts.
5. Create pages.
6. Create primary navigation menu.
7. Build global header.
8. Build Services mega menu.
9. Build hero section.
10. Build quick service cards.
11. Build sheriff welcome section.
12. Build divisions section.
13. Build news section.
14. Build careers banner.
15. Build global footer.
16. Add custom CSS.
17. Adjust tablet layout.
18. Adjust phone layout.
19. Test links.
20. Review with sheriff’s office staff.
21. Push staging to live.
22. Confirm live indexing is enabled.

---

## 33. Launch checklist

Before launching:

- Test every menu item.
- Test every button.
- Test every phone number.
- Test every email link.
- Test Inmate Information.
- Test Request a Report.
- Test Tip Line.
- Test Employment Application.
- Confirm mobile menu works.
- Confirm homepage loads quickly.
- Compress large images.
- Add alt text to images.
- Use only one H1.
- Preserve existing URLs when possible.
- Create redirects for changed URLs.
- Back up the live site.
- Push staging to production.
- Uncheck search-engine discouragement on live.
- Clear all caches.
- Request indexing in Google Search Console.

---

## 34. Common problems and fixes

### The CSS is not showing

Check:

- Did you paste CSS in **Divi → Theme Options → Custom CSS**?
- Did you save changes?
- Did you clear Divi cache?
- Did you spell the CSS class correctly?
- Did you add the class to the correct row/module?

### The quick cards are not overlapping the hero

Check the quick-links row settings:

```text
Top margin: -40px
Z-index: 10
```

Also make sure the row has this class:

```text
quick-links-row
```

### The header buttons are stacked weirdly

Check that the button column has:

```text
header-actions
```

Also check that the CSS is pasted.

### The mega menu does not spread into columns

Check:

- CSS Classes are enabled in Appearance → Menus.
- The Services menu item has `mega-menu`.
- The menu hierarchy has headings and child links.
- You are using the Divi Menu Module in the global header.

### The mobile menu is too crowded

Move less important links under parent pages. Keep the top mobile menu simple.

Most important mobile links:

- Inmate Information
- Request a Report
- Tip Line
- Contact
- Careers

---

## 35. Final recommendation

The fastest path is:

1. Build the homepage visually in Divi.
2. Assign the CSS classes exactly as listed.
3. Paste the free-form CSS into Divi Theme Options.
4. Adjust mobile views inside the Divi Visual Builder.
5. Launch only after reviewing every link and confirming live indexing is enabled.

This approach keeps the site editable by staff while still giving it the polished look of a professional sheriff’s office website.

