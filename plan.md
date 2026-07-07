# Gordon County Sheriff’s Office Website Redesign in Divi

This guide explains how to rebuild the website shown in the mockup using **WordPress and Divi** while keeping the current website live.

## 1. Create a staging website

Do not redesign the public homepage directly.

1. Log in to WordPress.
2. Check the hosting dashboard for:
   - Staging
   - Clone Site
   - Development Site
3. If the host does not provide staging:
   - Go to **Plugins → Add New Plugin**
   - Search for **WP STAGING**
   - Install and activate it
   - Create a staging copy named `redesign`
4. On the staging site, go to **Settings → Reading**.
5. Check **Discourage search engines from indexing this site**.
6. Leave that option unchecked on the live website.

Create a full backup of the live site before making changes.

---

## 2. Gather the images

Prepare these image assets:

| Image | Recommended size |
|---|---:|
| Main horizontal logo | 700 × 240 transparent PNG |
| Sheriff cutout for hero | 900 × 1,100 transparent PNG |
| Large badge or star | 900 × 900 transparent PNG |
| Sheriff and flag portrait | 800 × 700 |
| Hero background | 1,920 × 850 |
| Division photos | 800 × 450 |
| News photos | 600 × 360 |
| Footer logo | 500 × 200 transparent PNG |

Use **WebP** for photos when possible. Use transparent PNG or SVG for logos and badges.

---

## 3. Set the site colors and fonts

### Colors

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

### Fonts

```text
Body and navigation: Montserrat
Hero heading: Montserrat ExtraBold
Sheriff welcome heading: Libre Baskerville
```

Go to:

**Divi → Theme Customizer → General Settings → Typography**

Set:

- Body font: Montserrat
- Body size: 16px
- Body line height: 1.6
- Header font: Montserrat
- Header color: `#071B3A`

### Standard row width

Use these settings for most Divi rows:

```text
Width: 92%
Maximum width: 1280px
```

---

## 4. Create the main pages

Go to **Pages → Add New** and create:

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

Keep incomplete pages in draft status.

---

## 5. Create the navigation menu

Go to:

**Appearance → Menus**

Create a menu called:

```text
Primary Navigation
```

Add:

- Home
- About GCSO
- Services
- Divisions
- Careers
- News & Alerts
- Contact

Add these child links under **Services**:

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

For the category headings, use Custom Links with `#` as the URL.

---

## 6. Build the global header

Go to:

**Divi → Theme Builder**

Under **Default Website Template**:

1. Click **Add Global Header**.
2. Choose **Build Global Header**.
3. Choose **Build From Scratch**.

### Emergency contact bar

Add a one-column section.

#### Section settings

```text
Background: #071B3A
Top padding: 7px
Bottom padding: 7px
```

Add a Text Module:

```html
<div class="top-contact-bar">
  <span>☎ Emergency: 911</span>
  <span>☎ Non-Emergency: 706-629-1244</span>
  <span>💬 Submit a Tip</span>
</div>
```

Text settings:

- Font: Montserrat
- Size: 13px
- Color: white
- Alignment: center

### Main navigation section

Add a second regular section.

#### Section settings

```text
Background: white
Top padding: 14px
Bottom padding: 14px
```

Add a three-column row:

```text
28% | 47% | 25%
```

#### Column 1

Add an Image Module:

- Upload the horizontal logo
- Width: about 320px
- Alignment: left
- Link: `/`

#### Column 2

Add a Menu Module:

- Select `Primary Navigation`
- Menu text color: `#111722`
- Text size: 14px
- Font weight: 600
- Active link color: gold
- Alignment: center

#### Column 3

Add two Button Modules:

```text
INMATE SEARCH
REQUEST A REPORT
```

First button:

```text
Background: #C69B43
Text: white
Border: none
Border radius: 3px
```

Second button:

```text
Background: #071B3A
Text: white
Border: none
Border radius: 3px
```

Add this CSS class to column 3:

```text
header-actions
```

### Make the navigation sticky

Open the white navigation section:

**Advanced → Scroll Effects → Sticky Position → Stick to Top**

Do not make the emergency bar sticky.

---

## 7. Create the Services mega menu

Go to:

**Appearance → Menus**

Open **Screen Options** and enable **CSS Classes**.

Open the Services menu item and add:

```text
mega-menu
```

Keep the hierarchy:

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

Save the menu.

---

## 8. Create the homepage

1. Go to **Pages → Add New**.
2. Name it `Home Redesign`.
3. Click **Use Divi Builder**.
4. Choose **Build From Scratch**.
5. Open the Visual Builder.

---

## 9. Build the hero section

Add a regular section with this CSS class:

```text
gcs-hero
```

### Background

Add:

- A dark red and black abstract background image
- A dark gradient overlay

Suggested gradient:

```text
Left: rgba(2, 12, 30, 0.96)
Middle: rgba(2, 12, 30, 0.70)
Right: rgba(2, 12, 30, 0.25)
```

Section settings:

```text
Minimum height: 540px
Top padding: 110px
Bottom padding: 70px
Overflow: hidden
```

### Hero row

Add a three-column row:

```text
42% | 30% | 28%
```

Row settings:

```text
Width: 92%
Maximum width: 1280px
Vertical alignment: bottom
Gutter width: 2
```

### Hero text

Add a Text Module:

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

Heading settings:

```text
Font: Montserrat
Weight: 800
Desktop size: 58px
Line height: 1.02
Color: white
Letter spacing: -1px
```

Paragraph settings:

```text
Size: 18px
Color: white
Maximum width: 460px
```

Add two buttons:

```text
INMATE SEARCH
CONTACT US
```

For Contact Us:

```text
Background: transparent
Border: 1px solid white
Text: white
```

### Sheriff image

Add the transparent sheriff portrait.

Settings:

```text
Width: 100%
Maximum width: 420px
Alignment: center
Bottom margin: -70px
```

### Large badge

Add the badge image.

Settings:

```text
Width: 95%
Maximum width: 400px
Alignment: right
Opacity: 90%
```

---

## 10. Build the quick service cards

Add a regular section below the hero.

Section settings:

```text
Top padding: 0
Bottom padding: 25px
```

Add a six-column row.

Add this CSS class:

```text
quick-links-row
```

Row settings:

```text
Width: 92%
Maximum width: 1280px
Top margin: -40px
Equalize column heights: yes
Z-index: 10
```

Add one Blurb Module per column:

1. Inmate Information
2. Sex Offender Registry
3. Most Wanted
4. Tip Line
5. Request a Report
6. Employment

Blurb settings:

```text
Icon placement: top
Icon color: #071B3A
Icon size: 42px
Title alignment: center
Title size: 15px
Title weight: 600
Background: white
Padding: 20px 10px
```

Add this CSS class to each Blurb:

```text
quick-card
```

---

## 11. Build the Sheriff welcome section

Add a light-gray section.

Section settings:

```text
Background: #F5F6F8
Top padding: 25px
Bottom padding: 40px
```

Add a two-column row:

```text
31% | 69%
```

### Left column

Add the sheriff and flag portrait.

Settings:

```text
Border radius: 8px
Box shadow: medium
Right border: 4px solid #C69B43
```

### Right column

Add a Text Module:

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
Weight: 700
Color: #071B3A
Line height: 1.1
```

Add a button:

```text
MEET THE SHERIFF
```

Button background:

```text
#071B3A
```

---

## 12. Build the Divisions section

Add a white section.

Add a centered heading:

```html
<h2>OUR DIVISIONS</h2>
```

Heading settings:

```text
Font: Montserrat
Size: 22px
Weight: 600
Color: #071B3A
Alignment: center
```

Add a four-column row.

Use these division names:

- Administration
- Enforcement
- Judicial Services
- Jail Division

Each column should contain:

1. Image Module
2. Text Module

Image settings:

```text
Aspect ratio: about 16:7
Width: 100%
Bottom margin: 0
```

Text settings:

```text
Background: #071B3A
Text: white
Padding: 17px 20px
Size: 15px
Weight: 600
```

Add this CSS class to each column:

```text
division-card
```

---

## 13. Build the news section

Create a WordPress category named:

```text
Press Releases
```

Each press release should be a separate WordPress post with:

- Title
- Featured image
- Publication date
- Short excerpt
- Full article
- Press Releases category

Add a Divi Blog Module to the homepage.

Settings:

```text
Category: Press Releases
Post count: 3
Layout: Grid
Show featured image: yes
Show date: yes
Show author: no
Show categories: no
Show excerpt: yes
Show read more: yes
Excerpt length: about 18 words
```

Add this CSS class:

```text
gcs-news
```

Add a button above the Blog Module:

```text
VIEW ALL NEWS
```

Link it to the News & Alerts page.

---

## 14. Build the careers banner

Add a two-column row:

```text
68% | 32%
```

Row settings:

```text
Width: 92%
Maximum width: 1280px
Background: #071B3A
Border radius: 6px
Padding: 18px 25px
```

Left column:

```html
<h3>
  MAKING A DIFFERENCE.<br>
  <span class="gold-text">START YOUR CAREER WITH GCSO.</span>
</h3>
```

Right column button:

```text
VIEW OPEN POSITIONS
```

Button settings:

```text
Background: #C69B43
Text: white
Width: about 220px
Alignment: right
```

---

## 15. Build the global footer

Return to:

**Divi → Theme Builder**

Under **Default Website Template**:

1. Click **Add Global Footer**.
2. Choose **Build Global Footer**.
3. Build from scratch.

Footer settings:

```text
Background: #071B3A
Top border: 3px solid #C69B43
Text: white
Top padding: 35px
Bottom padding: 20px
```

Add a five-column row:

```text
24% | 18% | 18% | 22% | 18%
```

### Column 1

Add:

- Sheriff’s Office logo
- Address
- Phone
- Email

### Column 2

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

### Column 3

Heading:

```text
QUICK LINKS
```

Add:

- Inmate Information
- Sex Offender Registry
- Most Wanted
- Tip Line
- Request a Report
- Public Records

### Column 4

Heading:

```text
IMPORTANT LINKS
```

Add relevant government and law-enforcement resources.

### Column 5

Heading:

```text
FOLLOW US
```

Add a Social Media Follow Module.

Add a final row containing:

- Copyright
- Privacy Policy
- Terms of Use
- Accessibility Statement

---

## 16. Add the custom CSS

Go to:

**Divi → Theme Options → General → Custom CSS**

Paste:

```css
:root {
  --gcs-navy: #071b3a;
  --gcs-dark-navy: #04142d;
  --gcs-gold: #c69b43;
  --gcs-light-gray: #f5f6f8;
  --gcs-border: #e3e6ea;
}

.gold-text {
  color: var(--gcs-gold);
}

.section-label {
  color: var(--gcs-gold);
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 0.5px;
  margin-bottom: 10px;
}

.top-contact-bar {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 28px;
  flex-wrap: wrap;
}

.header-actions {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  gap: 10px;
}

.header-actions .et_pb_button_module_wrapper {
  margin: 0 !important;
}

.gcs-hero {
  position: relative;
  overflow: hidden;
}

.gcs-hero .et_pb_row {
  align-items: flex-end;
}

.hero-buttons {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
}

.hero-buttons .et_pb_button_module_wrapper {
  margin: 0 !important;
}

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

.division-card {
  overflow: hidden;
  border-radius: 6px;
  box-shadow: 0 4px 14px rgba(7, 27, 58, 0.12);
  transition: transform 0.2s ease;
}

.division-card:hover {
  transform: translateY(-4px);
}

.division-card .et_pb_image {
  margin-bottom: 0 !important;
}

.division-card .et_pb_image img {
  width: 100%;
  aspect-ratio: 16 / 7;
  object-fit: cover;
}

.division-card .et_pb_text {
  margin-top: 0 !important;
}

.gcs-news article.et_pb_post {
  border: 1px solid var(--gcs-border);
  border-radius: 6px;
  overflow: hidden;
  box-shadow: 0 3px 12px rgba(7, 27, 58, 0.08);
}

.gcs-news .entry-title {
  font-size: 17px;
  line-height: 1.25;
  font-weight: 700;
}

.gcs-news .post-meta {
  font-size: 12px;
}

.gcs-news .more-link {
  color: var(--gcs-navy);
  font-weight: 700;
  text-transform: capitalize;
}

.et_pb_button {
  font-weight: 600;
  letter-spacing: 0.2px;
}

@media (max-width: 980px) {
  .header-actions {
    display: none;
  }

  .gcs-hero h1 {
    font-size: 44px !important;
  }

  .quick-links-row .et_pb_column {
    margin-bottom: 10px;
  }
}

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

  .hero-buttons {
    justify-content: center;
  }

  .quick-links-row {
    margin-top: -20px !important;
  }
}
```

---

## 17. Mobile adjustments

### Tablet

- Hero heading: 44px
- Service cards: three per row
- Divisions: two per row
- Footer: two columns per row
- Hide the large badge if space is limited

### Phone

- Hero heading: 34px to 36px
- Center hero text
- Stack hero buttons
- Place the sheriff portrait below the text
- Hide the large background badge
- Service cards: two per row
- Divisions: one per row
- News posts: one per row
- Footer: one column
- Keep buttons at least 44px tall

---

## 18. Save reusable Divi sections

Save these items to the Divi Library:

- GCSO Section Heading
- GCSO Gold Button
- GCSO Navy Button
- GCSO Division Card
- GCSO Careers Banner
- GCSO Quick Link Card

---

## 19. Set the redesigned page as the homepage

On staging, go to:

**Settings → Reading**

Set:

```text
Your homepage displays: A static page
Homepage: Home Redesign
```

Test everything before changing the live site.

---

## 20. Launch checklist

1. Test every menu item.
2. Test every phone number.
3. Test inmate, report, tip, and employment links.
4. Confirm the mobile menu works.
5. Check the site on iPhone and Android.
6. Compress large images.
7. Add alt text to images.
8. Use only one H1 on the homepage.
9. Preserve existing URLs.
10. Back up the live site.
11. Push the staging design to production.
12. Uncheck **Discourage search engines from indexing this site** on the live site.
13. Clear Divi, WordPress, hosting, and CDN caches.
14. Request indexing in Google Search Console.

## Recommended build order

1. Staging site
2. Global header
3. Hero section
4. Quick service links
5. Sheriff welcome section
6. Divisions
7. News
8. Careers banner
9. Global footer
10. Mobile adjustments
