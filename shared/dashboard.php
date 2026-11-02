<?php
/**
 * xTrac shared dashboard engine.
 *
 * Included by the role wrappers:
 *   users_prof/securedpage.php      -> $XTRAC_ROLE = 'super'
 *   admin_prof/securedpage.php      -> $XTRAC_ROLE = 'admin'
 *   admin_prof/staff_securedpage.php-> $XTRAC_ROLE = 'staff'
 *   store/securedpage.php           -> $XTRAC_ROLE = 'store'
 *
 * The wrapper must run from its module directory (the web entry script),
 * so relative screen includes resolve against that CWD — same as the
 * original per-module dashboards.
 */

if (!defined('XTRAC_ROLE')) {
    define('XTRAC_ROLE', isset($XTRAC_ROLE) ? $XTRAC_ROLE : 'super');
}

// --- Session guard (identical semantics to the original securedpage.php) ---
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/security.php';

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

// Role guard: the session must carry the role the wrapper declares.
if (empty($_SESSION['role']) || $_SESSION['role'] !== XTRAC_ROLE) {
    header('Location: ../login/index.php');
    exit();
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    session_unset();
    session_destroy();
    header('Location:../index.php');
    exit();
}
$_SESSION['LAST_ACTIVITY'] = time();

// CSRF: reject forged cross-site POSTs before dispatching anything.
if (!xtrac_csrf_verify()) {
    http_response_code(403);
    exit('Invalid or missing CSRF token. Please go back, refresh the page and try again.');
}

// Issue the session token now so every rendered form carries it.
xtrac_csrf_token();

// Buffer all output and inject the CSRF hidden field into every <form>
// that does not already carry one. This protects all legacy forms
// without editing hundreds of screen files.
ob_start(function ($buffer) {
    if (session_status() !== PHP_SESSION_ACTIVE || empty($_SESSION['xtrac_csrf'])) {
        return $buffer;
    }
    $token = htmlspecialchars($_SESSION['xtrac_csrf'], ENT_QUOTES, 'UTF-8');
    $hidden = '<input type="hidden" name="xtrac_csrf" value="' . $token . '">';

    // Pass 1: well-formed forms (open ... close). Inject after the
    // opening tag unless a token already exists in the form body;
    // mark every processed form so pass 2 leaves it alone.
    $buffer = preg_replace_callback('/<form\b[^>]*>.*?<\/form>/is', function ($m) use ($hidden) {
        if (stripos($m[0], 'xtrac_csrf') !== false) {
            return preg_replace('/<form\b/i', '<form data-xtrac-csrf="1"', $m[0], 1);
        }
        return preg_replace('/<form\b([^>]*)>/i', '<form data-xtrac-csrf="1"$1>' . $hidden, $m[0], 1);
    }, $buffer);

    // Pass 2: unclosed forms (common in the legacy markup).
    $buffer = preg_replace_callback('/<form\b[^>]*>/i', function ($m) use ($hidden) {
        if (stripos($m[0], 'data-xtrac-csrf') !== false || stripos($m[0], 'name="xtrac_csrf"') !== false) {
            return $m[0];
        }
        return preg_replace('/<form\b/i', '<form data-xtrac-csrf="1"', $m[0], 1) . $hidden;
    }, $buffer);

    return $buffer;
});

require_once __DIR__ . '/menu.php';
require_once __DIR__ . '/dispatch.php';

// --- Page header ---
include 'config/header.php';

// --- Load the current user's profile ---
require_once '../link/connect.php';
$stmt = mysqli_prepare($conn, "SELECT * FROM user_login WHERE username = ?");
mysqli_stmt_bind_param($stmt, 's', $_SESSION['username']);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$fname = ''; $categ = ''; $calphone = ''; $caladdress = ''; $calemail = '';
$gender = ''; $appcode = '';
while ($row = mysqli_fetch_array($result)) {
    $fname = $row['fname'];
    $categ = $row['dept'];
    $calphone = $row['phone'];
    $caladdress = $row['con_add'];
    $calemail = $row['email'];
    $gender = $row['sex'];
    $appcode = $row['staff_id'];
}
$date = date('Y-m-d');

echo '<div class="hero-image  w3-border-grey w3-border-top ">' . "\n";

// --- Sidebar ---
xtrac_render_menu(XTRAC_ROLE, $appcode);

// --- Content pane ---
echo '<div class="w3-threequarter">' . "\n";

$list = '';
echo '<p class="w3-light-grey w3-padding-large w3-text-grey w3-hover-text-light-green" style="margin-top: -1.2%; font-size:14px;text-align:right; letter-spacing:1px"><i class="fa fa-user w3-text-grey w3-hover-text-black" style="font-size:24px;"></i> ' . htmlspecialchars($fname) . '</p>' . "\n";

// Worldmap placeholder only when no menu item was posted (original behavior).
// Unmatched/unknown list values render an empty pane, as before.
if (isset($_POST['list'])) {
    $list = $_POST['list'];

    if ($list !== '') {
        $map = xtrac_dispatch_map(XTRAC_ROLE);
        $target = isset($map[$list]) ? $map[$list] : null;

        // Conditional entries from the original chains
        if ($list === 'Tickets Listing' && $categ === 'Client') {
            $target = null;
        }

        if ($target !== null) {
            $resolved = xtrac_resolve_screen($target);
            if ($resolved !== null && file_exists($resolved)) {
                include $resolved;
            }
        }
    }
} else {
    echo '<center><img src="../images/worldmap.png" width="60%" style="opacity:0.7;"></center>' . "\n";
}

echo '</div>' . "\n";
echo '<div class="w3-quarter"> </div>' . "\n";
echo '</div>' . "\n";

echo '<div class="w3-row-padding">' . "\n";
echo '  <div class="w3-col w3-container m4 l4"></div>' . "\n";
echo '   <div class="w3-col w3-container m5 l5"> </div>' . "\n";
echo '    <div class="w3-col w3-container m5 l5"></div>' . "\n";
echo '     <div class="w3-col w3-container m4 l4"></div>' . "\n";
echo '   </div>' . "\n";
echo '   </div>' . "\n";
echo '<div class="w3-row">' . "\n";
echo ' <div class="w3-col w3-container m1 l1"></div>' . "\n";
echo '  <div class="w3-col w3-container m10 l10"></div>' . "\n";
echo ' <div class="w3-col w3-container m1 l1"></div>' . "\n";
echo ' </div>' . "\n";
echo ' <div class="w3-row">' . "\n";
echo ' <div class="w3-col w3-container m1 l1"></div>' . "\n";
echo '  <div class="w3-col w3-container m10 l10"></div>' . "\n";
echo ' <div class="w3-col w3-container m1 l1"></div>' . "\n";
echo ' </div>' . "\n";

include 'config/footer.php';

/**
 * Resolve a dispatch target to an includable path.
 *
 * - Explicit paths (containing '/') are used as-is relative to the
 *   module CWD (e.g. ../settings/..., ../users_prof/...).
 * - Bare filenames resolve in order:
 *     1. module-local (shims + module-unique files like new_tick.php)
 *     2. shared/screens/ (consolidated screens)
 *     3. ../users_prof/ (module-unique screens shared via the legacy
 *        cross-module references, e.g. store -> users_prof assets)
 */
function xtrac_resolve_screen($file)
{
    if (strpos($file, '/') !== false) {
        return $file;
    }
    if (file_exists($file)) {
        return $file;
    }
    $shared = __DIR__ . '/screens/' . $file;
    if (file_exists($shared)) {
        return $shared;
    }
    $legacy = '../users_prof/' . $file;
    if (file_exists($legacy)) {
        return $legacy;
    }
    $store = '../store/' . $file;
    if (file_exists($store)) {
        return $store;
    }
    return $file; // missing — caller's file_exists check will report it
}
