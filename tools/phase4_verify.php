<?php
// Phase 4 verification: dispatch resolution, menu smoke, security helpers.
// Usage: php phase4_verify.php <repo-root>
$root = rtrim($argv[1], '\\/');
chdir($root);

$pass = 0; $fail = 0;
function ok($cond, $label) {
    global $pass, $fail;
    if ($cond) { $pass++; } else { $fail++; echo "FAIL: $label\n"; }
}

// ---------- 1. Dispatch resolution (0 missing, all 4 roles) ----------
require $root . '/shared/dispatch.php';
require $root . '/shared/menu.php';

$roles = array(
    'super' => $root . '/users_prof',
    'admin' => $root . '/admin_prof',
    'staff' => $root . '/admin_prof',
    'store' => $root . '/store',
);

function resolve_screen_local($moduleDir, $file) {
    if (strpos($file, '/') !== false) {
        return $moduleDir . '/' . $file;
    }
    if (file_exists($moduleDir . '/' . $file)) return $moduleDir . '/' . $file;
    if (file_exists(__SHARED__ . '/screens/' . $file)) return __SHARED__ . '/screens/' . $file;
    if (file_exists(dirname($moduleDir) . '/users_prof/' . $file)) return dirname($moduleDir) . '/users_prof/' . $file;
    if (file_exists(dirname($moduleDir) . '/store/' . $file)) return dirname($moduleDir) . '/store/' . $file;
    return null;
}
define('__SHARED__', $root . '/shared');

foreach ($roles as $role => $moduleDir) {
    $map = xtrac_dispatch_map($role);
    $missing = array();
    foreach ($map as $label => $target) {
        $resolved = resolve_screen_local($moduleDir, $target);
        if ($resolved === null || !file_exists($resolved)) {
            $missing[] = "$label => $target";
        }
    }
    $count = count($map);
    echo "dispatch $role: $count targets, " . count($missing) . " missing\n";
    foreach ($missing as $m) echo "  MISSING [$role]: $m\n";
    ok(count($missing) === 0, "dispatch $role missing=" . count($missing));
}

// ---------- 2. Menu smoke (rendered buttons per role) ----------
$expected = array('super' => 39, 'admin' => 41, 'staff' => 41, 'store' => 31);
foreach ($expected as $role => $exp) {
    ob_start();
    xtrac_render_menu($role, 'SMOKETEST');
    $html = ob_get_clean();
    $n = substr_count($html, 'name="list" value=');
    echo "menu $role: $n buttons (expect $exp)\n";
    ok($n === $exp, "menu $role count=$n expected=$exp");
    ok(strpos($html, 'SMOKETEST') !== false, "menu $role appcode present");
}

// ---------- 3. Security helpers ----------
require $root . '/shared/security.php';
session_id() || session_start();

// passwords
$pw = 'S3cret!pass';
$bcrypt = password_hash($pw, PASSWORD_BCRYPT);
ok(xtrac_password_verify($pw, $bcrypt) === true, 'bcrypt verify ok');
ok(xtrac_password_verify('wrong', $bcrypt) === false, 'bcrypt wrong fails');
$md5 = md5($pw);
$new = null;
ok(xtrac_password_verify($pw, $md5, $new) === true, 'md5 verify ok');
ok(is_string($new) && password_get_info($new)['algo'] !== null, 'md5 upgrade to bcrypt');
ok(xtrac_password_verify('wrong', $md5, $new2) === false, 'md5 wrong fails');
ok(xtrac_password_verify($pw, '') === false, 'empty stored fails');
ok(xtrac_password_verify($pw, 'not-a-hash-xx') === false, 'unknown scheme fails closed');

// csrf
unset($_SESSION['xtrac_csrf']);
$tok = xtrac_csrf_token();
ok(strlen($tok) === 64 && ctype_xdigit($tok), 'token issued 64 hex');
ok(xtrac_csrf_token() === $tok, 'token stable in session');
$field = xtrac_csrf_field();
ok(strpos($field, $tok) !== false && strpos($field, 'xtrac_csrf') !== false, 'field carries token');

$_SERVER['REQUEST_METHOD'] = 'GET';
ok(xtrac_csrf_verify() === true, 'GET always passes');
$_SERVER['REQUEST_METHOD'] = 'POST';
$_POST['xtrac_csrf'] = $tok;
ok(xtrac_csrf_verify() === true, 'POST matching token passes');
$_POST['xtrac_csrf'] = 'deadbeef';
ok(xtrac_csrf_verify() === false, 'POST wrong token fails');
unset($_POST['xtrac_csrf']);
ok(xtrac_csrf_verify() === false, 'POST missing token fails');
unset($_SESSION['xtrac_csrf']);
ok(xtrac_csrf_verify() === true, 'POST without session token passes (session-scoped)');

// escape
ok(xtrac_escape('<script>"x"\'') === '&lt;script&gt;&quot;x&quot;&#039;', 'escape html+quotes');
ok(xtrac_escape(123) === '123', 'escape int cast');

// require_role exists
ok(function_exists('xtrac_require_role'), 'require_role defined');

echo "\nPASS: $pass  FAIL: $fail\n";
exit($fail ? 1 : 0);
