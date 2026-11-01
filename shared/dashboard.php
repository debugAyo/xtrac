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
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    session_unset();
    session_destroy();
    header('Location:../index.php');
    exit();
}
$_SESSION['LAST_ACTIVITY'] = time();

require_once __DIR__ . '/menu.php';
require_once __DIR__ . '/dispatch.php';

// --- Page header ---
include 'config/header.php';

// --- Load the current user's profile ---
require_once '../link/connect.php';
$result = mysqli_query($conn, "SELECT * FROM user_login WHERE username = '" . $_SESSION['username'] . "'");
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
 * - Bare filenames resolve module-local first (shims + module-unique
 *   files like new_tick.php), then shared/screens/.
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
    return $file; // missing — caller's file_exists check will report it
}
