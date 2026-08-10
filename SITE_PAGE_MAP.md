# Gordon County Sheriff’s Office Site Page Map

Use this list as the production navigation and link-review checklist. The paths below are relative to the generated `site/` directory.

## Primary navigation

- [ ] `/` — Home
- [ ] `/divisions/` — Divisions overview
- [ ] `/news-alerts/` — News and alerts
- [ ] `/jail/` — Jail information
- [ ] `/about/` — About the Sheriff’s Office
- [ ] `/contact/` — Contact information

## About

- [ ] `/about/` — About overview
- [ ] `/about/meet-the-sheriff/` — Meet the Sheriff
- [ ] `/about/mission-and-values/` — Mission and values
- [ ] `/about/organization/` — Organization and structure

## Divisions

- [ ] `/divisions/` — Divisions overview
- [ ] `/divisions/administration/` — Administration
- [ ] `/divisions/enforcement-bureau/` — Enforcement Bureau
- [ ] `/divisions/judicial-bureau/` — Judicial Bureau

## Public services and resources

- [ ] `/resources/` — Resources overview
- [ ] `/resources/request-a-report/` — Report-copy request instructions; in-person/mail process
- [ ] `/jail/` — Jail information
- [ ] `/submit-a-tip/` — Submit a tip
- [ ] `/sex-offender-registry/` — Sex offender registry
- [ ] `/raffle-licenses/` — Raffle licenses
- [x] `/secondary-metals-recycling/` — Secondary metals recycler information and registration requirements

## News and public information

- [ ] `/news-alerts/` — News and alerts
- [ ] `/contact/` — Contact information
- [x] `/accessibility-statement/` — Accessibility statement
- [x] `/terms-of-use/` — Terms of use
- [x] `/privacy-policy/` — Privacy policy

## External links requiring owner verification

- [ ] Inmate search destination
- [ ] Facebook page
- [ ] Georgia Sheriffs’ Association
- [ ] Georgia.gov
- [ ] Any external social-media or embedded-feed URL

## Link-audit findings to resolve before production

The generated site currently contains references that do not match the generated page tree. Confirm the intended destination, then update all instances consistently.

- [x] Replace `/services/request-a-report` references with `/resources/request-a-report/` where appropriate.
- [x] Replace `/services/submit-a-tip` references with `/submit-a-tip/` where appropriate.
- [x] Replace `/services/index.html` references with `/resources/index.html` where appropriate.
- [x] `/privacy-policy/` page created and privacy-policy references can be resolved.
- [ ] Resolve `/contact/employment` references or create the missing employment page.
- [ ] Regenerate the static export so the published Employment and Public Records pages are included under `site/`.
- [x] Most Wanted removed from public cards and fallback menus; confirm no CMS menu still references it.
- [x] Secondary metals recycling page created and resource link updated.
- [x] Remove the default `/hello-world/index.html` content and stale references.
- [x] Remove the GACJ and Georgia Crime Information Center footer placeholders until approved destinations are provided.
- [ ] Verify all carousel buttons and customizer-configured URLs.
- [ ] Verify every mobile-navigation link separately from desktop navigation.
- [ ] Verify relative links after deployment at the final production domain.

## Existing generated page count

There are currently 21 `index.html` page files under `site/`:

```text
about/index.html
about/meet-the-sheriff/index.html
about/mission-and-values/index.html
about/organization/index.html
accessibility-statement/index.html
contact/index.html
privacy-policy/index.html
divisions/administration/index.html
divisions/enforcement-bureau/index.html
divisions/index.html
divisions/judicial-bureau/index.html
index.html
jail/index.html
news-alerts/index.html
raffle-licenses/index.html
resources/index.html
resources/request-a-report/index.html
secondary-metals-recycling/index.html
sex-offender-registry/index.html
submit-a-tip/index.html
terms-of-use/index.html
```

The static export does not currently include the WordPress Employment landing page
or the full Public Records/ORR page. Regenerate the export after those pages are
published so their links resolve in the GitHub Pages preview.

## Final link-review procedure

- [ ] Review every primary and mobile navigation link.
- [ ] Review every homepage card and CTA.
- [ ] Review every footer link and social link.
- [ ] Review every in-page anchor and breadcrumb.
- [ ] Test internal links from the site root and from nested pages.
- [ ] Test external links in a new tab and confirm they are current.
- [ ] Test telephone and email links on supported devices.
- [ ] Test 404 behavior for removed or mistyped routes.
- [ ] Run an automated local-link checker after route corrections.
- [ ] Perform a final manual click-through on desktop and mobile.
- [ ] Record the reviewer, date, release version, and unresolved exceptions.
