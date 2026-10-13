# dn-tx — Dyne Therapeutics WP → Drupal 11 as-is migration

Source: https://www.dyne-tx.com/ (WP custom theme `dynetxdev2020`, Yoast SEO, MDB UI).

## Scaffolded (this repo)
- `composer.json` — Drupal 11 + Paragraphs, Bootstrap5, Pathauto/Redirect/Metatag/XMLSitemap, Webform, Video Embed, Colorbox, EU Cookie Compliance, External Link Popup, Migrate+Tools, Drush 13.
- `web/themes/custom/dynetx/` — as-is theme: `page.html.twig` (alert bar, header/drawer, Stay-in-Touch footer, exit modal), `css/style.css`, `js/exit-modal|carousel|custom.js`.
- `web/modules/custom/dyne_migrate/` — content model README + 4 migrate YAML + CSVs (`pages 22`, `jobs-sample 8`, `perspectives 7`, `leaders 11`, `url-map 6`) + `validate.py` (PASSED).
- `.ddev/config.yaml` — PHP 8.3 / MariaDB 11.4 / Apache-FPM.

## Backend field administration
- Drupal core `field_ui` is enabled as a dependency of `dyne_migrate`, providing Manage fields, Manage form display, and Manage display for content and Paragraph bundles.
- Update hook `dyne_migrate_update_8103()` creates missing default form/view displays for existing Paragraph bundles so their fields appear when Paragraphs are expanded on node edit forms.
- The display setup supports Drupal `string_long` fields as textareas, which fixed the hidden banner-text field in the live Paragraph forms.
- On an existing site, run `ddev drush en field_ui -y`, `ddev drush php:script web/modules/custom/dyne_migrate/scripts/repair-paragraph-displays.php`, and `ddev drush cr`. Review pending update `8102` before running the full update queue in this workspace because it also seeds menus. See `web/modules/custom/dyne_migrate/README.md` for account permissions and display behavior notes.

## Single job detail
- A dedicated migration `dyne_job_clinical_operations_study_lead` maps the live Associate Director, Clinical Operations Study Lead page to the existing `job` content type without importing the other sample job rows.
- Apply update `8104`, rebuild caches, and import only this migration. See `web/modules/custom/dyne_migrate/README.md` for the targeted commands and rerun caution.
- Careers + Culture uses the existing `dyne_page` Paragraph stack. A `dyne_jobs_list` Paragraph can optionally show published job nodes grouped by `field_department_group` with Department/Location filters; run `scripts/add-careers-open-positions.php` to append the `#positions` section without rebuilding the page.
- Update `8106` provides job grouping, explicit within-group order, and dynamic-list fields. The current listing reflects only job records imported and published in Drupal; previous/next order is stored explicitly per job.

## To run (needs Docker+DDEV or PHP+Composer on host — not available in this env)
```
ddev start
ddev composer install
ddev drush site:install minimal --account-name=admin -y
ddev drush en paragraphs pathauto redirect metatag xmlsitemap webform better_exposed_filters bootstrap5 video_embed_field colorbox eu_cookie_compliance dyne_migrate -y
ddev drush theme:enable dynetx && ddev drush config-set system.theme default dynetx -y
ddev drush mim --group=dyne
```
Then: create Paragraphs/Views/Webforms per `web/modules/custom/dyne_migrate/README.md`, copy `wp-content/uploads/*` + `themes/dynetxdev2020/images/*`, rebuild menus, QA redirects/SEO/a11y.