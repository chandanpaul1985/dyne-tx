# Dyne content model (as-is from WP)

## Backend field editing

The custom module depends on Drupal core's `field_ui` module. This provides
the **Manage fields**, **Manage form display**, and **Manage display** tabs for
content types and Paragraph types. Users need the relevant Drupal field
administration permissions to access these routes. The required permissions
for content types are `administer node types`, `administer node fields`,
`administer node form display`, and `administer node display`. For Paragraph
types they are `administer paragraphs types`, `administer paragraph fields`,
`administer paragraph form display`, and `administer paragraph display`.

The local site has no `administrator` role; it currently has only the standard
anonymous and authenticated roles. Drupal user 1 is the site-owner account and
has the superuser permission bypass. Sign in with that account, or have its
owner grant the permissions above to a trusted backend role/account. Do not
grant schema administration permissions to every authenticated user. An
anonymous browser session will correctly receive Access denied at these routes.

The `dyne_page` edit form uses the Paragraphs widget in open edit mode. The
`dyne_migrate_update_8103()` update creates default form and view displays for
all existing Paragraph bundles, with an edit widget selected for each field
type, including long plain-text (`string_long`) fields. This ensures that a
Paragraph expanded inside a node form exposes its fields. Existing visible
display components are preserved.

On an existing installation, enable `field_ui`, run the idempotent Paragraph
display repair/verification script, and rebuild caches:

```sh
ddev drush en field_ui -y
ddev drush php:script web/modules/custom/dyne_migrate/scripts/repair-paragraph-displays.php
ddev drush cr
```

The module also provides update hook `8103` for normal deployments. Before
running the full pending update queue in this workspace, review the earlier
pending `8102` hook: it also invokes menu seeding, which should be checked
against the current menu before database updates are applied.

On a fresh installation, enabling `dyne_migrate` enables its `field_ui`
dependency and its install hook creates the Paragraph displays.

**Display note:** the custom Paragraph Twig templates currently read values
directly from the Paragraph entity. The Manage display form will be available,
but formatter changes do not necessarily change those custom template outputs.
To control rendered output through Manage display, the relevant Twig templates
must render the corresponding `content.field_*` render arrays instead. This
backend fix does not alter the site's front-end templates.

## Single job-detail migration

The migration `dyne_job_clinical_operations_study_lead` imports only the
Associate Director, Clinical Operations Study Lead record from its embedded
source row. It does not run or expand the sample `dyne_jobs` migration. The
job bundle stores the source department/location, Greenhouse apply URL, full
HTML body, and previous/next navigation URLs in the job fields.

On the existing local site, apply the targeted job fields without running the
older pending menu update, then rebuild caches and import only the dedicated
record:

```sh
ddev drush php:eval "include_once DRUPAL_ROOT . '/modules/custom/dyne_migrate/dyne_migrate.install'; dyne_migrate_update_8104();"
ddev drush php:eval "include_once DRUPAL_ROOT . '/modules/custom/dyne_migrate/dyne_migrate.install'; dyne_migrate_update_8105();"
ddev drush cr
ddev drush migrate:status
ddev drush migrate:import dyne_job_clinical_operations_study_lead --update
```

The import uses the canonical path
`/jobs/associate-director-clinical-operations-study-lead`. Before rerunning an
import on a site with editor changes, review its migration map and current node
revision. The job display is implemented by `node--job--full.html.twig` and
uses the existing shared `dynetx` page shell and Bootstrap5 theme.

## Careers job index

The live Careers + Culture page groups the open positions by department and
provides Department and Location filters. Individual job detail pages use
explicit previous/next links; this is a maintained content sequence, not an
assumption that alphabetical node order matches the source-site order.

The Drupal implementation keeps job descriptions as standalone `job` nodes.
The existing `dyne_jobs_list` Paragraph opts into a dynamic mode that queries
published job nodes, groups them by `field_department_group`, and filters them
by `field_location_text`. In the Paragraph editor, set the dynamic-list
checkbox, heading, `field_anchor`, and optional introduction. Set the anchor
to `positions` for the source Open positions link. Leave it unchecked to
continue using the existing static JSON list mode.

After confirming the careers alias and current Paragraph list, the one-time
idempotent script appends the Open positions section at `#positions` without
rebuilding existing Careers + Culture sections:

```sh
ddev drush php:eval "include_once DRUPAL_ROOT . '/modules/custom/dyne_migrate/dyne_migrate.install'; dyne_migrate_update_8106();"
ddev drush cr
ddev drush php:script web/modules/custom/dyne_migrate/scripts/add-careers-open-positions.php
ddev drush cr
```

Update `8106` adds department-group metadata and dynamic-list fields. Apply it
directly as shown when the full update queue has earlier unrelated pending
hooks; review those hooks before running `drush updb`. New job imports must
include the visible department text, canonical grouping label, location,
application URL, approved within-department order, and explicit previous/next
URLs.
The dynamic listing contains only job nodes actually present and published in
Drupal; this workspace currently has one imported example, not the live site's
full vacancies inventory. Do not run the eight-row sample import as a substitute
for a complete, client-approved job feed.

## Content types
- page: title, body(CKEditor5), hero_image, summary. URL aliases MUST match WP exactly (see data/url-map.csv). ~52 nodes.
- job (from CPT `jobs`): title, `field_body_text`, `field_department_text`, `field_department_group`, `field_open_position_weight`, `field_location_text`, `field_apply_url`, `field_previous_url`, and `field_next_url`. The department/location display values are plain text; grouping and within-group order metadata are separate. The CSV is sample data, not the complete live vacancy inventory.
- perspective (from CPT `perspectives` + patient stories DMD/DM1/FSHD): title, body, hero, field_disease [taxonomy disease], field_story_type. ~13 + ~10 stories.
- leader: name(title), field_role, field_bio, field_photo, field_leader_type [Leadership|Board|SAB]. ~30 nodes (14+10+6).
- pipeline_program (DYNE-251/Z-rostudirsen, DYNE-101/Z-basivarsen, DYNE-302): field_disease, field_prevalence, field_target, field_phase, field_status (PDUFA Jan 21 2027 etc), body sections Onset/Cause/Symptoms/Unmet need.
- publication, announcement, quote (from wpa-stats-type/wb_quotes/comp_announcements if kept).

## Paragraphs (component-built sections)
hero_banner | icon_card_grid | pipeline_table | drug_detail | team_grid (modal bio) | video_lightbox | quote_carousel | jobs_grouped_list | cta | alert_banner

## Taxonomy
disease: DMD, DM1, FSHD, Pompe | department (PLATFORM, QUALITY, REGULATORY, ...) | job_location | story_type

## Menus (rebuild 1:1)
About Us / FORCE Platform / Pipeline / Physicians / Patients / Investors & Media (external) / Culture & Careers + footer legal.

## Forms (Webform)
contact (About-Us Contact us), stay_in_touch (footer), onetrust_embed (OneTrust-EmbedForm/ot-webform.js replacement).

## Media/Files
Copy wp-content/uploads/* + wp-content/themes/dynetxdev2020/images/* (logo-shape.svg, logo-duchenne.svg, ico-*.svg, home-culture.webp, bg-man.jpg, hero-home-duchenne-26*.webp, cover-*.webp, people/*.jpg) into Drupal media library. Preserve filenames where hotlinked.
