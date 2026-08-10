# Gordon County Sheriff's Office Website Structure Review

> **Current implementation note (August 7, 2026):** The generated page tree and
> production link checklist in [`SITE_PAGE_MAP.md`](../SITE_PAGE_MAP.md) are the
> source of truth. This document retains historical review notes below, but the
> current site does not publish a Most Wanted section. News & Alerts is reserved
> for press-release posts, and the site includes Privacy Policy, Accessibility
> Statement, Terms of Use, and Secondary Metals Recycler Information pages.

## Current Site Structure

```text
Home
├── Welcome
├── Meet the Sheriff
├── Organization
│   ├── Administration
│   ├── Enforcement
│   └── Judicial
│       └── Jail Division
├── Resources
│   ├── Request an Incident / Accident Report
│   │   └── Additional Information for Reports
│   ├── Secondary Metals Recycler Information
│   ├── Inmate Information
│   ├── Sex Offender Registry
│   │   └── Sex Offenders Employed in Gordon County
│   ├── Tip Line
│   ├── Employment Application
│   ├── Raffle Permits
│   └── Georgia Criminal Alien Quarterly Report
├── News & Alerts (press releases only)
└── Contact Us
```

---

# Main Problems

## 1. Organization Content Is Repeated

The **Organization** page describes the Enforcement and Judicial bureaus, then the separate **Enforcement** and **Judicial** pages repeat much of the same information.

### Recommendation

Use the Organization page only as an overview:

```text
Sheriff
└── Chief Deputy
    ├── Enforcement Bureau
    └── Judicial Bureau
```

Put detailed information on the individual division pages.

The current Organization page presents this hierarchy visually with connecting
lines from the Sheriff to the Chief Deputy and then to the Enforcement and Judicial
bureaus. Division names remain grouped beneath their bureau cards.

---

## 2. Judicial and Jail Content Overlap

The **Judicial** page and **Jail Division** page repeat responsibilities and command staff information.

### Recommendation

Simplify the structure:

```text
Divisions
├── Enforcement
├── Court Services
└── Jail
```

---

## 3. Inmate Information Is Repeated

Inmate information appears on:

* Homepage
* Inmate Information page
* Jail page

### Recommendation

Use a prominent **Inmate Search** button that links directly to the inmate system.

Keep jail policies, visitation, bonds, mail, and commissary information on the main Jail page.

---

## 4. Homepage News and Press Releases

The homepage and News & Alerts page may display overlapping press-release content.

### Recommendation

```text
Homepage
└── 3 Latest News Items
    └── View All News

News & Alerts
└── Press-release archive
```

The current News & Alerts page is reserved for official press releases. Registry and
other non-press-release posts should not be assigned to the `press-release` category.

---

## 5. Resources and Quick Links Repeat Each Other

The Resources page lists links that are repeated again in Quick Links.

### Current implementation

Services and Resources use consistent, task-focused card layouts. Resources includes
category navigation, clear action labels, responsive card grids, and a separate
informational Public Records notice.

```text
Services and Resources
├── Reports & Records
│   ├── Request a Report
│   └── Public Records notice
├── Jail & Offender Information
│   ├── Inmate Search
│   ├── Jail Information
│   ├── Sex Offender Registry
├── Permits & Licensing
│   ├── Raffle Licenses
│   └── Secondary Metals Recycling
└── Community
    ├── Submit a Tip
    └── Employment

Services also includes Court Services fees, including civil process, subpoenas,
levies, garnishments, and funeral transport fees.
```

---

## 6. Welcome and Contact Repeat Basic Information

The Welcome and Contact pages both repeat the office address and phone numbers.

### Recommendation

Change:

* **Welcome** → About / Mission & Values
* **Contact Us** → Full Contact Directory

Example:

```text
Contact Us
├── Emergency
├── Non-Emergency
├── Main Office
├── Jail
├── Records
├── Criminal Investigations
├── Tip Line
└── Address / Directions
```

---

## 7. Historical Most Wanted and Captured Content

Most Wanted and Captured were identified in the original site review, but they have
since been removed from the current public cards and fallback navigation.

### Current status

Do not add these links back to public navigation unless the Sheriff’s Office provides
current, approved content and a specific publishing requirement.

```text
Removed from current public navigation
```

---

# Confirmed Duplicate Content

## Jail Page

The **Transfer Bond** section contains the same cash bond fee sentence twice consecutively.

Remove the duplicate during migration.

---

# Information That Needs Verification

## Tip Line Numbers Conflict

The site currently lists two different confidential tip numbers:

```text
706-879-5485
706-879-5515
```

Verify the correct number before launch.

---

## Main Phone Numbers Are Inconsistent

The site displays:

```text
706-629-1244
706-879-5467
706-629-1245
```

These may serve different purposes, but they should be clearly labeled.

Example:

```text
Main Office:
Non-Emergency:
Jail:
Records:
Investigations:
```

---

## Homepage Tip Line Card May Be Incorrect

A homepage feature associated with the Tip Line appears to contain information about reporting trash or requesting trash pickup.

Verify the card title, image, and destination.

---

## Public Records Information

The official Sheriff’s Office site identifies Captain Chuck Kirby as the Custodian of
Records. The project presents this as a clearly labeled informational notice rather
than an unsupported online request form.

### Current implementation

```text
Reports & Records
├── Request Incident / Accident Report
└── Public Records notice
```

---

# Recommended New Site Structure

## Main Navigation

```text
HOME

ABOUT
├── Meet the Sheriff
├── Mission & Values
├── Command Staff
└── Organization

DIVISIONS
├── Patrol
├── Criminal Investigations
├── School Resource Officers
├── Special Operations
├── Court Services
└── Jail

SERVICES
├── Request a Report
├── Public Records
├── Inmate Search
├── Sex Offender Registry
├── Submit a Tip
├── Raffle Licenses
├── Secondary Metals Recycling
└── Court Services Fees

JAIL
├── Inmate Search
├── Visitation
├── Bonds
├── Inmate Funds & Commissary
├── Phone & Messaging
├── Inmate Mail
└── Contact Information

NEWS
├── News & Alerts (press releases)
├── Annual Reports
└── Criminal Alien Quarterly Reports

CONTACT
├── Contact Directory
├── Directions
└── Employment
```

---

# Recommended Header Quick Actions

```text
[ INMATE SEARCH ]
[ REQUEST A REPORT ]
[ SUBMIT A TIP ]
```

These should remain visible and easy to access.

---

# Recommended Page Merges

| Current Page                    | Recommended Location               |
| ------------------------------- | ---------------------------------- |
| Welcome                         | About → Mission & Values           |
| Meet the Sheriff                | About → Meet the Sheriff           |
| Organization                    | About → Organization               |
| Administration                  | About → Command Staff              |
| Enforcement                     | Divisions                          |
| Judicial                        | Split into Court Services and Jail |
| Jail Division                   | Jail                               |
| Resources                       | Services landing page              |
| Inmate Information              | Direct Inmate Search               |
| Captured                        | Section inside Most Wanted         |
| Additional Report Information   | Records & Reports                  |
| Press Releases                  | News & Alerts press-release archive |
| Public Records homepage section | Public Records notice in Resources |
| Employment Application          | Employment page                    |

---

# Recommended Design Principle

Do not copy the current navigation one-for-one.

The current site is organized mostly around the Sheriff's Office's internal structure:

```text
Organization
├── Enforcement
└── Judicial
```

The redesigned site should focus more on what visitors need to accomplish:

```text
Find an Inmate
Request a Report
Visit an Inmate
Submit a Tip
Find a Sex Offender
Apply for a Job
Contact the Sheriff's Office
```

Internal organizational information should remain available under **About** and **Divisions**, while the most common public services should be immediately accessible.
