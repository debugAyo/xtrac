# xTrac — Asset Management System

xTrac is a legacy PHP asset-management application (assets, budgets, tickets,
reports, inventory) that has been modernized in place: three duplicate
dashboards were consolidated into one shared engine, security hardening was
added across the board, and an AI layer (chat, report insights, ticket triage)
was integrated via OpenRouter.

## Requirements

- **PHP 8.1+** with extensions: `mysqli`, `curl`, `openssl`, `mbstring`, `session`, `json`
- **MySQL 8** (the app was built against it)
- A web server (Apache/nginx) **or** PHP's built-in server for local work

> **Note for this machine:** the PHP on PATH
> (`C:\Users\HP\Desktop\Scripts\Laravel\php.exe`) has **no php.ini**, so
> curl/openssl/mbstring are not loaded by default. For local runs, load them
> explicitly:
>
> ```powershell
> php -d extension_dir=C:\Users\HP\Desktop\Scripts\Laravel\ext `
>     -d extension=php_curl.dll -d extension=php_openssl.dll `
>     -d extension=php_mbstring.dll -S localhost:8000
> ```

## Installation

1. Clone the repo and serve the repository root (entry point per role, see below).
2. Database configuration lives in **`config/db.php`** with named profiles
   (`main`, `staff`, `shelf`, `plotter`, `plotter2`). Every `connect.php`
   across the tree is a thin wrapper around it. Override credentials with
   environment variables `XTRAC_DB_*` or a gitignored `config/db.local.php`.
3. Create the database schema (see `install/` for the original installation
   helpers).
4. Rebranding is **data-only** via the `custom` table
   (`config/xyz.php`, `install/auth_custom.php`). Never edit UI code for
   branding.

## Roles & entry points

| Role | Entry point | Session role |
|---|---|---|
| Super admin | `users_prof/securedpage.php` | `super` |
| Admin | `admin_prof/securedpage.php` | `admin` |
| Staff | `admin_prof/staff_securedpage.php` | `staff` |
| Store | `store/staff_securedpage.php` | `store` |

Login is handled by `login/index.php` → `login/loginproc.php`.

Menu items are POSTed as `list=<label>` and resolved through
**`shared/dispatch.php`** (`label → screen file`, per role). Verified counts:
super 39 / admin 41 / staff 41 / store 31 menu buttons; 165–166 dispatch
targets per role, all resolving to real files.

## Architecture

```
shared/
  dashboard.php    # session + role guard + CSRF verify + screen dispatch
                   # + 2-pass CSRF token injection into legacy forms
  menu.php         # per-role sidebar definitions + renderer
  dispatch.php     # per-role label -> screen map
  security.php     # CSRF helpers, bcrypt/MD5 password verify, role guard,
                   # output escaping
  screens/         # 183 consolidated screens (byte-identical copies of
                   # users_prof/admin_prof originals; module files are shims)
  ai/              # AI layer (see below)
```

- Screens are plain includes dispatched from the role wrappers through
  `shared/dashboard.php`.
- Bare filenames resolve: module-local → `shared/screens/` → `users_prof/` →
  `store/`. Paths containing `/` resolve relative to the module directory.
- Working directory matters: entry scripts run from module dirs.

## Security model

- **Passwords:** bcrypt (`password_hash`). Legacy MD5 hashes still verify and
  are **upgraded to bcrypt transparently on next successful login**.
- **SQL injection:** the login gate, user management (`application/`), all
  `login/` handlers, and ~90 screens use prepared statements. A documented
  debt of **115 display/handler screens** still uses interpolated SQL
  (authenticated-users-only; see `HANDOFF.md` for the exact list).
- **CSRF:** session-scoped enforcement on every POST; tokens are injected
  automatically into all legacy forms (2-pass output buffering), so existing
  screens need no edits.
- **Role guard:** `shared/dashboard.php` refuses to render a screen unless the
  session role matches the wrapper.
- **Output escaping:** helpers exist (`xtrac_escape`) and are used by
  menu/new screens; a full escaping pass over legacy screens is pending.
- **AI key:** lives only in gitignored `shared/ai/config.php`; browsers never
  talk to the provider directly.

## AI features (OpenRouter)

Menu: **AI Tools → AI Assistant** (all roles) and **AI Insights**
(super/admin/staff). New tickets are auto-triaged on creation.

Setup:

1. Copy `shared/ai/config.php.example` → `shared/ai/config.php` (gitignored)
   and paste your OpenRouter key, **or** set `OPENROUTER_API_KEY`.
2. Defaults: model `deepseek/deepseek-chat` for chat/insights/triage
   (swappable per feature), **30 requests/user/day**, **200/day app-wide**,
   per-request `max_tokens` (800/1500/300) and timeouts. Exceeding a cap
   returns a friendly message with the reset time.
3. `shared/ai/cacert.pem` is the stock Mozilla CA bundle. On machines where
   antivirus performs TLS interception (e.g. Avast), export that root to a
   gitignored `shared/ai/cacert.local.pem` — the client merges automatically.

Triage results are appended to `shared/ai/usage/triage-*.jsonl` (gitignored).

## Verification tools

```powershell
# dispatch + menu + security suite (expects 0 missing / 39-41-41-31 / 30-30)
php tools/phase4_verify.php "$PWD"

# placeholder <-> bind_param consistency across files (catches conversion bugs)
php tools/verify_bind.php <file paths...>

# AI self-test; add --live for one real (fraction-of-a-cent) API call
php tools/ai_selftest.php
```

Full lint: `php -l` over changed files (see `HANDOFF.md` for the command).

## Known limitations

- **No live database in this dev environment** — verification is lint +
  tooling-based (`php -l`, `tools/*`); runtime smoke needs a real DB.
- **Pre-existing parse errors (out of scope):** `e_procure/auto_reg.php:143`,
  `e_procure/portal/Tera-WURFL/.../TeraWurflDatabase_MSSQL2005.php:571`.
- **Dead menu buttons (blank pane, same as original):** Ticket Management,
  Compliance Management, View Assets by Dependency, Assets Category Settings.
- **115 screens** still use raw interpolated SQL (see `HANDOFF.md`).
- **Legacy XSS debt:** many screens echo DB values unescaped.
- `auth_update_user.php` references columns from another project's schema
  (pre-existing mismatch).

## Repository

- Branch: `xtrac-features` — https://github.com/debugAyo/xtrac
- History: baseline → Phase 0 (DB config) → Phase 1 (screen consolidation) →
  Phase 2 (shared dashboard) → Phase 3 (dispatch fixes) → Phase 4 (security) →
  Phase 5 (AI).
- **`HANDOFF.md`** is the live progress/continuation document — read it first
  if you are picking up this work.
