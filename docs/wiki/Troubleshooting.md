# Troubleshooting

## Changes are not visible

- Confirm the correct template or static page was edited.
- Check that the browser and WordPress caches were cleared.
- Confirm the deployed stylesheet version is current.
- Inspect the browser console for failed assets.

## Static and WordPress pages look different

Compare the relevant files under `gcso-custom/` and `site/`. Content and theme CSS changes may need to be applied to both copies.

## A card layout is uneven

Check the card grid, title length, responsive breakpoint, and whether an informational card was incorrectly marked as a link. Prefer consistent content and a reusable layout rule over page-specific spacing hacks.

## A connector or decorative line is missing

Inspect overflow, stacking order, and the element’s positioning context. Confirm the hierarchy remains understandable without the decorative line.
