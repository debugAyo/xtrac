# xTrac Modernization — Progress & Handoff

> Read this first if you are a new session continuing this work.
> Last updated: Phase 4 committed and pushed (fast-path complete).

## Standing rules (user-mandated)

1. **After every phase:** update this file, update the task list, commit, and
   `git push` to the remote. Never let this file drift from actual progress.
2. **No live database.** MySQL is stopped and the data dir is access-denied; the
   user does not have a DB. Verification = `php -l` + smoke scripts only.
3. **PHP CLI:** `php` on PATH (PHP 8.1.33, `C:\Users\HP\Desktop\Scripts\Laravel\php.exe`).
4. **Branding/rebranding is data-only** via the `custom` table
   (`config/xyz.php`, `install/auth_custom.php`). NEVER edit UI code for branding.
5. **Wiring style:** screens are plain includes dispatched from the role wrappers
   via `shared/dispatch.php`. Follow that pattern for anything new.
6. **CWD matters:** entry scripts run from module dirs (`users_prof/`,
   `admin_prof/`, `store/`); relative includes resolve against the module dir.
   Never `chdir()` in `shared/dashboard.php`.

## Git state

- Repo root = xtrac dir (nested inside the home-dir repo). Branch: **xtrac-features**
- Remote: **`origin` → https://github.com/debugAyo/xtrac.git** (user-provided).
  Push after every commit. First push established the repo (it was empty).
- History: `0f753d4` baseline (main) → `1822d8d` Phase 0 → `9a1e0ec` Phase 1 →
  `996719d` Phase 2 → `7b06c59` Phase 3 → `???????` Phase 4 (see log).
- Secrets never committed: `.gitignore` excludes `shared/ai/config.php` and
  `config/db.local.php`.

## What has been built

| Piece | File(s) | Notes |
|---|---|---|
| DB config | `config/db.php`; all `connect.php` are thin wrappers | profiles: main/staff/shelf/plotter/plotter2, env `XTRAC_DB_*` |
| Shared screens | `shared/screens/` (183 files) | 175 byte-identical users_prof≡admin_prof moved here; originals are shims |
| Menu | `shared/menu.php` | `xtrac_menu($role)`, `xtrac_render_menu($role,$appcode)`; counts: super 37, admin 39, staff 39, store 30 |
| Dispatch | `shared/dispatch.php` | `xtrac_dispatch_map($role)`; super 163 / admin 164 / staff 164 / store 163 — **all targets verified to resolve** |
| Dashboard engine | `shared/dashboard.php` | session guard (30-min), role guard, CSRF verify, ob_start 2-pass form-token injection, prepared profile query, `xtrac_resolve_screen()` |
| Resolver order | in `shared/dashboard.php` | explicit path `/` → module-local → `shared/screens/` → `../users_prof/` → `../store/` |
| Role wrappers | `users_prof/securedpage.php` (super), `admin_prof/securedpage.php` (admin), `admin_prof/staff_securedpage.php` (staff), `store/staff_securedpage.php` (store) | each sets `$XTRAC_ROLE` + requires dashboard |
| Security lib | `shared/security.php` | `xtrac_csrf_token/field/verify`, `xtrac_escape`, `xtrac_password_verify` (bcrypt + legacy MD5 with upgrade hash), `xtrac_require_role` |
| Login gate | `login/loginproc.php` | prepared stmt, bcrypt w/ MD5 upgrade-on-login, `session_regenerate_id(true)`, `$_SESSION['role']`, CSRF; `login/index.php` embeds token |
| Unprovisioned modules | `fin_acct/`, `e_procure/` placeholders; `index_error.php` | login routing never 404s |

## Phase status

- [x] **Phase 0** (1822d8d): git, .gitignore, central DB config, connect wrappers
- [x] **Phase 1** (9a1e0ec): 175 shared screens + shims; fixed parse error in
  `shared/screens/auth_budget_edit.php`
- [x] **Phase 2** (996719d): menu + dispatch + dashboard + role wrappers
- [x] **Phase 3** (7b06c59): dispatch regenerated from live includes; 8 missing
  screens created; login routing fixed
- [x] **Phase 4** (committed + pushed): security hardening + partial bulk SQL
  conversion — see below. Remaining raw-SQL debt: **115 files, documented**
- [ ] **Phase 5**: DeepSeek AI (ask user for API key first — see below)
- [ ] **Phase 6**: README (comprehensive)
- [ ] **Phase 7**: full lint audit + demo notes + final commit + push

## Phase 4 — final state (committed)

### Security core (done, verified)

- `shared/security.php` — helpers; **30/30 verification assertions passed**
  (bcrypt accept/reject, MD5 accept + upgrade + reject, empty/garbage fail-closed,
  full CSRF lifecycle, escape, require_role defined). Script:
  `C:\Users\HP\AppData\Local\Temp\opencode\phase4_verify.php`.
- CSRF form injection in `shared/dashboard.php` — **8/8 injection tests passed**
  (earlier session; re-verified via menu smoke + verify script).
- `login/loginproc.php`, `login/index.php`, `login/securedpage.php`,
  `shared/screens/loginproc.php`, `shared/screens/auth_user_reg.php`,
  `settings/net_config.php` (shell_exec gated behind env
  `XTRAC_NET_CONFIG_ENABLED=1`, default dry-run),
  `application/auth_*` (bcrypt + prepared).
- `store/sto_desk_prev.php` — **pre-existing corrupted line fixed** (an image
  echo had been mashed into an SQL string on main, line 25 → parse error). All
  3 of its queries are now prepared. This removes one of the 3 historical
  pre-existing parse errors.

### Bulk SQL conversion — partially landed (committed)

Agents converted (all lint-passed, bind-consistency verified via
`C:\Users\HP\AppData\Local\Temp\opencode\verify_bind.php` — ALL OK):
- `settings/` 5/5, `plotter/` 2/2, `login/` 2/2 (auth_remark, auth_update_tick)
- `admin_prof/` 8/17, `users_prof/` 13/23, `store/` 4/34, `shared/screens/` 20/86
- Plus wave-1: `login/` 15 files + `application/` 9 files (fully converted)

**Real bug found & fixed during verification:** `store/auth_sto_add_item.php`
had 3 VALUES placeholders dropped by its converting agent (32 `?` vs 35 bind
vars → execute would fail). Rebuilt VALUES as 21 `?` + `CURDATE()` + 14 `?` =
36 slots for 36 columns; verified `?=35, CURDATE=1, types=35, vars=35`.
Lesson for future conversions: **placeholder-count drift is the top agent bug —
always run verify_bind (improved version accepts any `$stmtX` var).**

### Verification results (commit gate, all green)

- Lint: **91 modified PHP files, 0 failures** (repo-wide: only 2 pre-existing
  parse errors remain, both untouched on main, out of scope:
  `e_procure/auto_reg.php:143`,
  `e_procure/portal/Tera-WURFL/DatabaseConnectors/TeraWurflDatabase_MSSQL2005.php:571`)
- Dispatch: super 163 / admin 164 / staff 164 / store 163 targets, **0 missing**
- Menu smoke: **37/39/39/30** buttons rendered per role
- Security helpers: **30/30** assertions

### Remaining SQL debt — 115 files (documented, NOT blocking)

Not retried by design (fast path). All are authenticated-user display/handler
screens. Convert opportunistically or in a later dedicated pass using the agent
prompt template + verify_bind. Exact lists:

- **S1** `shared/screens/` (31): auth_biz_plan_sub, auth_budg_delete,
  auth_budg_edit, auth_budget_edit, auth_contract_ass, auth_deprecat_analyzer,
  auth_financial_report, auth_group_loan_app, auth_group_training_sch,
  auth_hard_budget_edit, auth_invoice_ass, auth_item_trac, auth_opex_budget_edit,
  auth_parts_ass, auth_proj_definition, auth_software_ass, auth_sto_consumass,
  auth_track_class, auth_track_date, auth_track_no_rows, auth_track_subject,
  auth_update_tick, auth_x_trial_new, auto_ass_prev, budg_delete, budget_edit,
  build_prev, change, complete_interv, consumass_prev, contract_ass
- **S2** `shared/screens/` (35): exam, expense_acct, fin_stat, furn_ass_prev,
  furn_prev, geo_coord, information, invoice_ass, learn_areas, logout,
  my_activities_prev, my_activities, my_daily_rep, my_homework, obs_build,
  ongoing_interv, other_prev, other_serial_prev, parts_ass, personal_info,
  phased_budg, plant_ass_prev, proc_auth_consumass, project_report, quality,
  remote_cam_view, resources, risks, sample, software_ass, sto_auth_assedit,
  temp_answer, trac_tick, update_tick, vehicle_prev
- **M** `admin_prof/` (9): auth_budget_refr, auto_spec_categ, barcode_test,
  budg_edit, bugt_summary, det_budget, elec_spec_categ, eqp_spec_categ,
  view_artisan
- **U** `users_prof/` (10): act_ict, auth_auto_ass, auth_consumass,
  auth_elect_ass, auth_furn_ass, auth_land_ass, auth_new_tick, auth_plant_ass,
  barcode_test, obs_ict
- **ST** `store/` (30): auth_sto_contract, auth_sto_invass, auth_sto_item_trac,
  auth_sto_item_track, auth_sto_name_search, auth_sto_partass,
  auth_sto_serial_search, auth_sto_status_search, auth_sto_trac, other_prev,
  sto_act_vehicles, sto_auth_assdelete, sto_auth_asset_categ_prev,
  sto_auth_fetchass, sto_auth_item_trac, sto_auth_trac,
  sto_auth_update_consumass, sto_auth_update_form, sto_build_prev,
  sto_consum_prev, sto_furn_prev, sto_obs_vehicles, sto_other_prev,
  sto_other_status_prev, sto_update_invent_issue, sto_update_req_stat,
  sto_veh_prev, sto_vehicle_prev, sto, stodat_prev

(Out of original scope entirely: `e_procure/` tree incl. portal legacy,
`users_prof/shelf/`, `admin_prof/shelf/`, `login/shelf/`, `install/`.)

### Agent prompt template (reuse verbatim, swap file list)

> Convert LIVE interpolated SQL to prepared statements in the listed files of this
> legacy PHP 8.1 mysqli codebase. SELECT → `mysqli_prepare` + `bind_param` +
> `execute` + `mysqli_stmt_get_result` keeping downstream `mysqli_num_rows`/
> `mysqli_fetch_*` unchanged. INSERT/UPDATE/DELETE → prepare+bind+execute,
> adapt `=== TRUE`/`> 0` checks to the execute bool, keep success/failure
> branches. LIKE binds `'%'.$var.'%'` as 's'. Drop now-redundant
> `mysqli_real_escape_string`. Types i/d/s (default 's'). Skip static queries
> and anything in comments. Preserve everything else byte-for-byte; no
> refactors, no reformatting, no added comments. Reusing `$stmt` sequentially
> is fine. Run `php -l` on every file; all must pass. Report: converted counts,
> skipped files, unconverted queries + reason, lint results.

**After any agent batch: run `verify_bind.php` on every touched file — it
catches placeholder/type/var count drift (the bug class found in
auth_sto_add_item.php).**

Special notes: `sto_auth_fetchass.php` include flow and
`sto_auth_update_form.php`/`sto_auth_update_consumass.php` field logic must stay
byte-identical; `budg_comp.php`/`budg_summary.php` use `HAVING year='$year'`;
`$$mum_name` variable-variable in `application/auth_new_applicant.php` is
intentional.

## Phase 5 — AI features (DeepSeek) — ASK FOR THE KEY FIRST

**Ask the user for the DeepSeek API key before starting.**

- Base URL `https://api.deepseek.com`, endpoint `/chat/completions`
- Models: `deepseek-flash` (chat assistant + ticket triage),
  `deepseek-v4-pro` (report insights). Legacy `deepseek-chat`/`deepseek-reasoner`
  retired July 2026 — do not use.
- Key storage: gitignored `shared/ai/config.php` (create and commit
  `shared/ai/config.php.example`) or env `DEEPSEEK_API_KEY`.
- Files to create: `shared/ai/client.php` (cURL wrapper),
  `config.php(.example)`, `ai_chat.php` + `ai_chat_backend.php` (chat UI/AJAX),
  `ai_insights.php` (report insights — wire near budget/financial screens),
  `ai_triage_backend.php` (ticket triage — integration point:
  `auth_new_tick.php` ticket creation flow).
- Wire via existing dispatch/menu pattern (new menu entries via
  `shared/menu.php` + `shared/dispatch.php`).

## Phase 6 — README

Comprehensive: install (PHP 8.1, MySQL 8, config/db.php profiles), architecture
(shared screens/menu/dispatch/dashboard), roles, security model
(CSRF/bcrypt/role guard), AI setup, rebranding via `custom` table, known
limitations (incl. the 115-file SQL debt).

## Phase 7 — final audit

Full `php -l` sweep (expect only the 2 pre-existing e_procure errors), verify
dispatch + menu smoke + security tests still green, commit, demo notes
(unified dashboard per role, menu counts, AI chat, insights, triage), final
HANDOFF update, push.

## Known issues / deliberate non-goals

- **Pre-existing parse errors (leave unless asked):** only 2 remain —
  `e_procure/auto_reg.php:143` and the Tera-WURFL MSSQL file line 571.
  (`store/sto_desk_prev.php` was FIXED in Phase 4.)
- **Dead menu buttons (blank pane, same as original):** Ticket Management,
  Compliance Management, View Assets by Dependency, Assets Category Settings
  (admin). elearn/microfinance labels exist only in dispatch, not menus.
- **XSS/output escaping debt:** screens echo DB values unescaped; menu and new
  screens use htmlspecialchars. Targeted pass may be added in Phase 7.
- **`auth_update_user.php`** references columns (`name`, `privilege`, `date_ob`,
  `marital`) that don't match the xtrac `user_login` schema (other-project
  leftover); converted SQL but schema mismatch is pre-existing.
- **`login/error_login.php` / `application/testing.php`** carry Books-Embassy
  branding leftovers — cosmetic, untouched.

## Quick verification commands (repo root)

```powershell
# lint modified files (expect 0 failures)
git status --short | ? { $_ -match '\.php$' } | % { ($_ -replace '^\s*[A-Z?!]{1,2}\s+','').Trim() } | % { php -l $_ }

# full verification suite (dispatch 0-missing, menu 37/39/39/30, security 30/30)
php C:\Users\HP\AppData\Local\Temp\opencode\phase4_verify.php "C:\Users\HP\Desktop\Scripts\Juanlee\xtrac\xtrac"

# bind consistency on any file set (catches placeholder drift)
php C:\Users\HP\AppData\Local\Temp\opencode\verify_bind.php <absolute file paths...>
```
