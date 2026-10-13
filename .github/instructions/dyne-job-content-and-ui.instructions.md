---
name: Dyne Job Content and UI
description: "Use when modeling, migrating, rendering, or visually matching Dyne job listings in Drupal. Preserve the job bundle, isolate imports, and validate against the live careers page."
applyTo:
  - "web/modules/custom/dyne_migrate/**"
  - "web/themes/custom/dynetx/**"
---

# Dyne Job Content and UI Rules

- Use the existing standalone `job` content type for individual job postings. Do not model job-detail records as `dyne_page` Paragraph stacks; reserve `dyne_page` for curated marketing pages.
- Inspect the active Drupal field configuration before writing migration mappings. The installed job department and location fields are plain text (`field_department_text`, `field_location_text`); do not assume the older sample migration's taxonomy-reference fields match the installed schema.
- Keep one-off imports isolated by migration ID and stable source ID. Do not run the broad `dyne_jobs` sample migration when the task requests one job record.
- Keep `dyne_page` for the Careers + Culture page composition and use `dyne_jobs_list` as its grouped index component; let that component query published `job` nodes only when its dynamic-source checkbox is enabled.
- Populate `field_department_group` with the approved live grouping label separately from `field_department_text`, which may contain a source code plus department display value. Populate `field_location_text` for the live Location filter.
- Preserve the live within-department listing sequence in `field_open_position_weight`; do not substitute alphabetical title order when approved source-order data is available.
- Back and Next are explicit per-job sequence fields. Preserve the source's actual neighboring-job order; do not derive previous/next from title sorting or taxonomy order. If a neighbor is not migrated locally, report that gap rather than silently choosing another job.
- Preserve the approved source title, description, location, department, compensation wording, disclaimer, application URL, and section/list order. Do not invent a posting date or job identifier from an external application URL.
- Store editorial content in migration data and render it through the job node template. Keep page-specific layout in the existing `dynetx` theme and follow its Bootstrap5 conventions.
- Compare the full live job page and local route at desktop and mobile widths, including the careers hero, apply actions, job metadata, full description, compensation/legal content, navigation, and footer.
- Verify only the requested migration's source count, import result, target node, and canonical alias. Review revision/editor state before rerunning an import over an existing node.
- The live careers page currently presents grouped listings under both Competitive benefits and Open positions, with Department and Location controls. Implement the agreed in-scope section(s) with the existing Paragraph stack; do not imply that a partial local inventory is the complete vacancies feed.
- Report source-site defects separately; do not reproduce unrelated JavaScript errors, overflow bugs, or sticky-header overlaps merely for visual parity.