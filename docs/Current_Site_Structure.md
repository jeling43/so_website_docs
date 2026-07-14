# Gordon County Sheriff's Office Website Structure Review

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
│   ├── Most Wanted
│   │   └── Captured
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
├── Press Releases
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

## 4. Homepage News Duplicates Press Releases

The homepage and Press Releases page display much of the same content.

### Recommendation

```text
Homepage
└── 3 Latest News Items
    └── View All News

News & Updates
└── Full News Archive
```

Rename **Press Releases** to **News & Updates** unless formal press releases will be published separately.

---

## 5. Resources and Quick Links Repeat Each Other

The Resources page lists links that are repeated again in Quick Links.

### Recommendation

Create one organized **Services & Resources** page.

```text
Services & Resources
├── Reports & Records
│   ├── Request a Report
│   ├── Submit Additional Information
│   └── Open Records Request
├── Jail & Offender Information
│   ├── Inmate Search
│   ├── Jail Information
│   ├── Sex Offender Registry
│   └── Most Wanted
├── Permits & Licensing
│   ├── Raffle Licenses
│   └── Secondary Metals Recycling
└── Community
    ├── Submit a Tip
    └── Employment
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

## 7. Most Wanted and Captured Are Overused

Most Wanted and Captured appear in several navigation areas.

### Recommendation

Use one page:

```text
Most Wanted
├── Currently Wanted
└── Captured
```

Use tabs or filters instead of separate pages.

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

## Public Records Information Is Buried

Public Records information appears on the homepage but is not clearly accessible from the main navigation.

### Recommendation

```text
Records & Reports
├── Request Incident / Accident Report
├── Submit Additional Information
└── Open Records Request
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
├── Submit Additional Information
├── Open Records Request
├── Inmate Search
├── Sex Offender Registry
├── Most Wanted
├── Submit a Tip
├── Raffle Licenses
└── Secondary Metals Recycling

JAIL
├── Inmate Search
├── Visitation
├── Bonds
├── Inmate Funds & Commissary
├── Phone & Messaging
├── Inmate Mail
└── Contact Information

NEWS
├── News & Updates
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
| Press Releases                  | News & Updates                     |
| Public Records homepage section | Open Records page                  |
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
View Most Wanted
Apply for a Job
Contact the Sheriff's Office
```

Internal organizational information should remain available under **About** and **Divisions**, while the most common public services should be immediately accessible.
