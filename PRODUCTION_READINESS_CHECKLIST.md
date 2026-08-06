# Production Readiness Checklist

Use this checklist as a release gate. Every required item must be checked, documented, and signed off before production deployment. Items marked **Owner decision** require an explicit decision from the captain, project owner, or IT administrator.

## 1. Scope and approval

- [ ] Confirm the production release scope and version number.
- [ ] Confirm the application is an offline administrative statistics dashboard, not a case-management system.
- [ ] Confirm the captain and secretary have reviewed the workflow.
- [ ] Confirm the production owner, technical owner, and support contact.
- [ ] Confirm the deployment target: Windows desktop first; macOS support separately documented.
- [ ] Obtain written approval for production release.
- [ ] Record known limitations, deferred features, and accepted risks.

## 2. Source workbook and data accuracy

- [ ] Test with the current official workbook: `Copy of DETECTIVE DIVISION ACTIVITY REPORT 2026.xlsx`.
- [ ] Confirm all expected monthly worksheets are recognized.
- [ ] Confirm `YEAR END` is ignored as a monthly data source.
- [ ] Confirm the importer reads detective headers from row 1 beginning in column B.
- [ ] Confirm activity labels are read from column A.
- [ ] Confirm the workbook `TOTAL` column is ignored and totals are recalculated by the application.
- [ ] Confirm blank cells are handled according to policy and do not create false warnings.
- [ ] Confirm legitimate recorded zero values remain visible as zero.
- [ ] Confirm future blank months are not treated as errors.
- [ ] Confirm formulas are either evaluated correctly or reported clearly when they cannot be evaluated.
- [ ] Confirm non-numeric cells do not crash the import.
- [ ] Confirm duplicate detective columns and duplicate activity rows are reported.
- [ ] Confirm inconsistent detective names normalize to one detective.
- [ ] Confirm inconsistent activity labels normalize correctly.
- [ ] Confirm unknown activity categories are retained and displayed.
- [ ] Confirm the original workbook is never modified.
- [ ] Independently reconcile January through the latest populated month against Excel totals.
- [ ] Reconcile division totals for cases assigned, cases closed, reports, warrants, callouts, agencies assisted, crime scenes, and mileage.
- [ ] Reconcile at least three detectives across multiple months.
- [ ] Save an import-audit record with workbook name, file hash, date, and reviewer initials.

## 3. Analytical calculations

- [ ] Verify cases assigned totals.
- [ ] Verify cases completed/closed totals.
- [ ] Verify completion gap calculation: assigned minus closed.
- [ ] Verify recorded completion ratio: completed divided by assigned.
- [ ] Verify zero-denominator behavior displays “Not available,” not 0%.
- [ ] Verify ratios can exceed 100% without being silently capped in the numeric value.
- [ ] Verify month filtering.
- [ ] Verify year filtering.
- [ ] Verify detective filtering.
- [ ] Verify activity-category filtering.
- [ ] Verify all available months behavior.
- [ ] Verify division averages and medians.
- [ ] Verify assignment-share calculations.
- [ ] Verify previous-month comparisons use the previous available populated month.
- [ ] Verify small-number changes do not create misleading percentage alerts.
- [ ] Verify missing data is distinguished from a true recorded zero where possible.
- [ ] Verify no overall detective performance score is displayed.
- [ ] Verify all labels describe activity as operational context, not effectiveness or quality.

## 4. User interface and HCI

- [ ] Confirm the dashboard answers the captain’s primary questions within a few seconds.
- [ ] Confirm the current reporting period is always visible.
- [ ] Confirm the source workbook name and refresh timestamp are visible.
- [ ] Confirm the reload action provides loading, success, and error states.
- [ ] Confirm filters have clear labels and a clear-filters action.
- [ ] Confirm Dashboard means division-wide information.
- [ ] Confirm Detective Detail requires a selected detective and does not silently fall back to the dashboard.
- [ ] Confirm charts appear before detailed tables.
- [ ] Confirm charts have legends, axis labels, readable detective labels, and empty states.
- [ ] Confirm all metric cards have readable labels and values at standard office-window sizes.
- [ ] Resize the window to minimum supported, typical, and wide desktop sizes.
- [ ] Confirm no horizontal clipping, overflow warnings, or hidden Mileage/card content.
- [ ] Confirm tables remain usable with horizontal scrolling where unavoidable.
- [ ] Confirm no critical meaning depends on color alone.
- [ ] Confirm color contrast meets WCAG AA where applicable.
- [ ] Confirm keyboard navigation reaches filters, buttons, charts, and export controls.
- [ ] Confirm focus states are visible.
- [ ] Confirm text is readable at 100% and increased system text scaling.
- [ ] Confirm tooltips explain “recorded completion ratio,” completion gap, averages, and median.
- [ ] Confirm empty, loading, malformed-file, missing-file, and no-match states are understandable.
- [ ] Confirm zero values are visually distinct from unavailable values.
- [ ] Confirm warning colors are reserved for review/data-quality context.
- [ ] Confirm the interface contains no unnecessary decorative elements or animation.

## 5. Detective Detail and reporting

- [ ] Confirm Detective Detail shows the selected detective and selected period.
- [ ] Confirm current-period summary values match the dashboard filters.
- [ ] Confirm monthly activity totals are correct.
- [ ] Confirm activity-category totals are correct.
- [ ] Confirm division comparison is labeled as context, not a ranking or rating.
- [ ] Confirm highest and lowest activity months handle ties and missing months.
- [ ] Confirm incomplete or missing periods are explained.
- [ ] Confirm PDF export is available only when a detective is selected.
- [ ] Confirm PDF export uses the current filters and workbook source.
- [ ] Confirm PDF contains summary metrics, monthly comparison, activity categories, data-quality notes, date generated, and disclaimer.
- [ ] Confirm PDF output is readable on screen and on paper.
- [ ] Confirm PDF filenames are safe and descriptive.
- [ ] Confirm export failure is handled without crashing the application.
- [ ] Confirm CSV/PDF exports do not include data outside the selected filters.
- [ ] Confirm exported reports contain no case-level information not already present in the workbook.

## 6. Security and privacy

- [ ] Confirm the application makes no network calls.
- [ ] Confirm there is no telemetry, analytics, cloud storage, or remote upload.
- [ ] Confirm workbook contents are never logged.
- [ ] Confirm logs do not contain case names, narratives, identifiers, or sensitive values.
- [ ] Confirm only local files are read and written.
- [ ] Confirm the original workbook is read-only from the application’s perspective.
- [ ] Confirm file extension and malformed-file validation.
- [ ] Confirm the application warns when a workbook is outside the expected local folder.
- [ ] Confirm exported PDFs and CSVs are saved only to a user-selected local location.
- [ ] Confirm local settings and logs use appropriate operating-system permissions.
- [ ] Confirm temporary files are cleaned up or stored securely.
- [ ] Confirm the production workstation has endpoint protection and current OS updates.
- [ ] Confirm removable-media and backup policies for exported reports.
- [ ] **Owner decision:** define retention and deletion policy for exported PDFs, CSVs, logs, and settings.
- [ ] **Owner decision:** define who may access the workbook and generated reports.

## 7. Import resilience

- [ ] Test missing workbook.
- [ ] Test moved workbook.
- [ ] Test deleted workbook.
- [ ] Test wrong file extension.
- [ ] Test corrupted workbook.
- [ ] Test workbook with no monthly sheets.
- [ ] Test workbook with blank sheets.
- [ ] Test workbook with unexpected sheet names.
- [ ] Test workbook with missing headers.
- [ ] Test workbook with duplicate headers.
- [ ] Test workbook with formulas.
- [ ] Test workbook with text in numeric cells.
- [ ] Test workbook with blank numeric cells.
- [ ] Test workbook with new activity categories.
- [ ] Test workbook with renamed detective headers.
- [ ] Confirm valid data still loads when one cell or one sheet is invalid.

## 8. Automated testing

- [ ] Run `flutter test` successfully.
- [ ] Run `flutter analyze` and resolve all errors.
- [ ] Review and resolve production-relevant analyzer warnings.
- [ ] Run importer unit tests.
- [ ] Run normalization unit tests.
- [ ] Run analytics calculation tests.
- [ ] Run insight/data-quality rule tests.
- [ ] Run filter behavior tests.
- [ ] Run empty-state tests.
- [ ] Run PDF export tests.
- [ ] Run widget tests for startup, file selection, filtering, detail navigation, and export availability.
- [ ] Run an integration test with a sanitized fixture workbook.
- [ ] Test on a clean workstation or clean virtual machine.
- [ ] Test with the actual production workbook copy.
- [ ] Record test date, Flutter version, Dart version, OS version, and test results.

## 9. Windows packaging and deployment

- [ ] Confirm the production Flutter and Dart versions.
- [ ] Build Windows release mode: `flutter build windows --release`.
- [ ] Launch the release build on a clean Windows workstation.
- [ ] Confirm the required Visual C++ runtime/dependencies are documented or packaged.
- [ ] Confirm the application starts without a development environment.
- [ ] Confirm file picker works in the release build.
- [ ] Confirm drag-and-drop works in the release build if supported.
- [ ] Confirm PDF save works in the release build.
- [ ] Confirm path persistence works after restart.
- [ ] Confirm the application can access the expected local workbook location.
- [ ] Confirm Windows Defender or endpoint protection does not quarantine the build.
- [ ] Generate a versioned release artifact and checksum.
- [ ] Store the build artifact in the approved internal location.
- [ ] Document installation, upgrade, rollback, and uninstall procedures.
- [ ] **Owner decision:** determine whether an installer, signed executable, or portable folder deployment is required.
- [ ] **Owner decision:** determine code-signing certificate and update process.

## 10. Logging and support

- [ ] Confirm startup, workbook selection, import, validation, and export events are logged.
- [ ] Confirm logs exclude workbook contents and sensitive information.
- [ ] Confirm log size limits or rotation are working.
- [ ] Confirm log location is documented.
- [ ] Confirm users can report the application version and source workbook name.
- [ ] Confirm support instructions explain how to collect logs safely.
- [ ] Confirm error messages tell the user what action to take.
- [ ] Confirm there is a rollback build available.

## 11. Documentation and training

- [ ] Update the README with installation and Windows build instructions.
- [ ] Add the supervisor user guide.
- [ ] Document how to select or replace the monthly workbook.
- [ ] Document how to reload after the secretary updates the workbook.
- [ ] Document expected workbook structure.
- [ ] Document supported aliases and normalization behavior.
- [ ] Document how blank cells and zero values are interpreted.
- [ ] Document the difference between monthly values, year-to-date values, and available-month totals.
- [ ] Document the recorded completion ratio limitation.
- [ ] Document data-quality messages and what actions they require.
- [ ] Document PDF/CSV export handling and retention.
- [ ] Provide a short captain walkthrough using sanitized data.
- [ ] Provide a secretary checklist for maintaining the workbook template.

## 12. Production data and handoff

- [ ] Create a production data folder with approved permissions.
- [ ] Create a separate exports folder with approved permissions.
- [ ] Create a logs folder with approved permissions.
- [ ] Back up the official workbook before first production import.
- [ ] Record the official workbook filename and expected location.
- [ ] Import the workbook and obtain captain sign-off on the displayed totals.
- [ ] Confirm the latest populated month is correct.
- [ ] Confirm future blank months are not incorrectly presented as missing operational data.
- [ ] Confirm the production user can recover from a moved or deleted workbook.
- [ ] Confirm the production user can export and locate a briefing report.
- [ ] Record the final release version, build checksum, workbook hash, and sign-off date.
- [ ] Define a monthly refresh procedure.
- [ ] Define a process for reporting workbook template changes before they reach production.

## 13. Final go/no-go review

- [ ] No unresolved blocking defects.
- [ ] No unexplained total discrepancies.
- [ ] No critical security or privacy findings.
- [ ] No critical accessibility or overflow defects.
- [ ] Release build passes clean-workstation testing.
- [ ] Production workbook reconciliation is signed off.
- [ ] User guide and support contacts are available.
- [ ] Rollback build is available.
- [ ] Captain approval received.
- [ ] IT/deployment approval received.
- [ ] Go-live date and owner confirmed.

## Sign-off

| Role | Name | Date | Signature/approval |
| --- | --- | --- | --- |
| Project owner |  |  |  |
| Captain/supervisor |  |  |  |
| Technical reviewer |  |  |  |
| IT/deployment reviewer |  |  |  |

