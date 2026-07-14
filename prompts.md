# GCSO Temporary Image Generation Prompt Pack

Use this pack to generate **temporary but realistic website assets** while final photography/design is in progress.

## Global Style Rules (apply to every prompt)
- Visual style: professional county sheriff website, clean civic branding.
- Palette influence: navy `#071B3A` and gold `#C69B43`.
- Quality: realistic, polished, editorial/commercial grade.
- Composition: website-friendly, uncluttered, clear focal point.
- Output: no watermark, no signatures, no gibberish text.
- Unless explicitly requested, do **not** add text overlays.
- Prefer landscape for section backgrounds/cards, portrait for people.
- If the tool supports it, use **PNG transparency** for cutouts/emblems.

## Recommended Negative Prompt (reuse)
`watermark, logo artifacts, blurry, low-resolution, distorted face, extra fingers, malformed hands, unreadable text, random letters, over-saturated, heavy noise, compression artifacts, frame, border`

---

## 1) Hero Background
- **Filename:** `gcso-hero-background.webp`
- **Size:** `1920x850`
- **Used in:** Homepage hero section background
- **Prompt:**
  > Abstract cinematic background for a sheriff office website hero, deep navy and dark red light streaks, subtle diagonal motion, high contrast but not noisy, space on the left for white headline text and CTA buttons, space on the right for badge and portrait overlays, realistic lighting, professional civic tone, no logos, no watermark.
- **Negative Prompt:** (use global)

---

## 2) Sheriff Cutout (Primary Hero Subject)
- **Filename:** `gcso-sheriff-cutout.png`
- **Size:** `900x1100`
- **Used in:** Hero character image overlay
- **Prompt:**
  > Formal portrait of a male sheriff in dark dress uniform, seated and facing camera, confident approachable expression, studio lighting, clean edge separation suitable for transparent background cutout, realistic photo style, full torso to upper legs framing, no readable insignia text, no watermark.
- **Negative Prompt:** (use global)
- **Export Notes:** Prefer PNG with transparent background if available.

---

## 3) Sheriff Badge / Star Emblem
- **Filename:** `gcso-badge-large.png`
- **Size:** `900x900`
- **Used in:** Hero right-side emblem graphic
- **Prompt:**
  > Sheriff-style six-point star badge emblem with metallic gold and navy enamel look, embossed texture, centered composition, transparent background look, realistic reflections, generic law-enforcement insignia without real county name, clean edges, no watermark.
- **Negative Prompt:** (use global)
- **Export Notes:** PNG preferred.

---

## 4) Main Header Logo (Temporary Brand Mark)
- **Filename:** `gcso-logo-horizontal.png`
- **Size:** `700x240`
- **Used in:** Header left logo area
- **Prompt:**
  > Generic county sheriff office horizontal brand mark, star icon/seal area on the left and agency name lockup area on the right, navy and gold color scheme, clean vector-like design, high contrast, transparent background look, no real county seal text, no watermark.
- **Negative Prompt:** (use global)
- **Export Notes:** PNG preferred.

---

## 5) Footer Logo Variant
- **Filename:** `gcso-footer-logo.png`
- **Size:** `500x200`
- **Used in:** Footer branding block
- **Prompt:**
  > Minimal horizontal sheriff office logo variant for footer use, navy and gold civic styling, simplified emblem plus text lockup proportions, transparent background look, clean vector-like finish, no watermark.
- **Negative Prompt:** (use global)
- **Export Notes:** PNG preferred.

---

## 6) Sheriff Portrait (Welcome Section)
- **Filename:** `gcso-sheriff-portrait.webp`
- **Size:** `800x700`
- **Used in:** “Message from the Sheriff” section
- **Prompt:**
  > Professional sheriff portrait in dress uniform, half-body framing, subtle U.S. flag backdrop, warm neutral studio lighting, official civic portrait style, realistic skin tones, clean composition for website content block, no watermark.
- **Negative Prompt:** (use global)

---

## 7) Division Card Image — Administration
- **Filename:** `division-administration.webp`
- **Size:** `800x450`
- **Used in:** Divisions grid card 1
- **Prompt:**
  > County public safety administrative building exterior in daylight, clean landscaping, documentary-realistic photo style, slightly wide composition suitable for website card banner, no people in close foreground, no watermark.
- **Negative Prompt:** (use global)

---

## 8) Division Card Image — Enforcement
- **Filename:** `division-enforcement.webp`
- **Size:** `800x450`
- **Used in:** Divisions grid card 2
- **Prompt:**
  > Marked sheriff patrol SUV parked near civic/government setting, daylight, realistic editorial photo style, clean framing for website card use, professional public safety tone, no watermark.
- **Negative Prompt:** (use global)

---

## 9) Division Card Image — Judicial Services
- **Filename:** `division-judicial.webp`
- **Size:** `800x450`
- **Used in:** Divisions grid card 3
- **Prompt:**
  > Courtroom justice concept scene with gavel, legal books, and bench environment, dramatic but professional lighting, realistic photo style, crisp detail, no text overlay, no watermark.
- **Negative Prompt:** (use global)

---

## 10) Division Card Image — Jail Division
- **Filename:** `division-jail.webp`
- **Size:** `800x450`
- **Used in:** Divisions grid card 4
- **Prompt:**
  > Clean detention facility corridor with cell doors and overhead lighting, neutral color grading, realistic documentary style, no people visible, safe professional tone for civic website, no watermark.
- **Negative Prompt:** (use global)

---

## 11) News Image 1 — Memorial/Heroes
- **Filename:** `news-1.webp`
- **Size:** `600x360`
- **Used in:** Latest news card
- **Prompt:**
  > Sheriff office memorial-themed editorial photo with U.S. flag and ceremonial badge elements, respectful tone, clean composition for news card thumbnail, realistic style, no text overlay, no watermark.
- **Negative Prompt:** (use global)

---

## 12) News Image 2 — Community Event
- **Filename:** `news-2.webp`
- **Size:** `600x360`
- **Used in:** Latest news card
- **Prompt:**
  > Community safety event scene with sheriff patrol vehicle in background and civic setting context, bright daytime, realistic editorial photography, clean card-friendly composition, no watermark.
- **Negative Prompt:** (use global)

---

## 13) News Image 3 — Training/Advancement
- **Filename:** `news-3.webp`
- **Size:** `600x360`
- **Used in:** Latest news card
- **Prompt:**
  > Law enforcement training room scene with officers in classroom briefing environment, professional tone, realistic editorial style, balanced indoor lighting, no text overlay, no watermark.
- **Negative Prompt:** (use global)

---

## Quick Generation Workflow
1. Generate each image at the exact size listed.
2. Keep filenames exactly as specified above.
3. Upload all files to WordPress Media Library.
4. Place images in the appropriate theme template or assign via the Customizer.
5. Later, replace temp images with final assets using the same filenames where possible.

## Optional Upscale / Export Settings
- Format:
  - `.png` for transparent/cutout/logo assets.
  - `.webp` for photographic sections/cards.
- Compression:
  - Keep quality high enough to avoid artifacts around faces and edges.
- Sharpening:
  - Light only; avoid halos.
