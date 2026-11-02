<?php
/**
 * xTrac AI self-test: config, usage limiter, triage parser, and (opt-in)
 * one live API call.
 *
 * Usage (repo root):
 *   php tools/ai_selftest.php                 # offline checks only
 *   php tools/ai_selftest.php --live          # + one real OpenRouter call
 *
 * This machine's PHP has no php.ini; load extensions explicitly when needed:
 *   php -d extension_dir=C:\Users\HP\Desktop\Scripts\Laravel\ext
 *       -d extension=php_curl.dll -d extension=php_openssl.dll
 *       -d extension=php_mbstring.dll tools/ai_selftest.php --live
 */
error_reporting(E_ALL);
$root = isset($argv[1]) && $argv[1][0] !== '-' ? $argv[1] : getcwd();
$live = in_array('--live', $argv, true);
chdir($root);

// Fake a session user (the limiter keys off $_SESSION['username']).
$_SESSION = array('username' => 'selftest');

require $root . '/shared/ai/client.php';
require $root . '/shared/ai/ai_triage_backend.php';

$pass = 0;
$fail = 0;
function ok($cond, $label)
{
    global $pass, $fail;
    if ($cond) {
        $pass++;
        echo "ok  $label\n";
    } else {
        $fail++;
        echo "FAIL $label\n";
    }
}

// ---------- config ----------
$cfg = xtrac_ai_config();
ok(!empty($cfg['api_key']) && strpos($cfg['api_key'], 'sk-or-') === 0, 'config has OpenRouter key');
ok($cfg['base_url'] === 'https://openrouter.ai/api/v1', 'base_url is OpenRouter v1');
ok($cfg['models']['chat'] === 'deepseek/deepseek-chat', 'chat model = deepseek/deepseek-chat');
ok($cfg['limits']['per_user_per_day'] > 0 && $cfg['limits']['global_per_day'] >= $cfg['limits']['per_user_per_day'], 'limits sane');
ok(is_file($root . '/shared/ai/cacert.pem'), 'CA bundle present');
ok(is_file(xtrac_ai_ca_bundle()), 'resolved CA bundle exists');

// ---------- limiter (backs up today's real counters, restores after) ----------
$usageFile = xtrac_ai_usage_file();
$backup = null;
if (is_file($usageFile)) {
    $backup = file_get_contents($usageFile);
}
@unlink($usageFile);

$cap = $cfg['limits']['per_user_per_day'];
ok(xtrac_ai_usage_check('chat') === null, 'under cap -> allowed');
for ($i = 0; $i < $cap; $i++) {
    xtrac_ai_usage_commit();
}
$blocked = xtrac_ai_usage_check('chat');
ok($blocked !== null && !empty($blocked['limit']), 'at per-user cap -> blocked');
ok(is_string($blocked['error']) && strpos($blocked['error'], 'daily AI limit') !== false, 'limit message is user-friendly');

$_SESSION['username'] = 'otheruser';
ok(xtrac_ai_usage_check('chat') === null, 'other user unaffected by first user cap');
$_SESSION['username'] = 'selftest';

xtrac_ai_usage_mutate(function ($s) {
    $s['global'] = $s['global'] + 5000;
    return $s;
});
$_SESSION['username'] = 'freshuser';
$g = xtrac_ai_usage_check('chat');
ok($g !== null && strpos($g['error'], 'application') !== false, 'global cap -> app-wide message');
$_SESSION['username'] = 'selftest';

$snap = xtrac_ai_usage_snapshot();
ok($snap['user'] === $cap && $snap['user_limit'] === $cap, "snapshot shows $cap/$cap");
ok($snap['global'] > 5000, 'snapshot global counted');

if ($backup !== null) {
    file_put_contents($usageFile, $backup);
} else {
    @unlink($usageFile);
}

// ---------- triage parser ----------
$p = xtrac_ai_triage_parse('{"priority":"urgent","category":"Network","summary":"Server room switch down"}');
ok($p !== null && $p['priority'] === 'urgent' && $p['category'] === 'Network', 'parses clean JSON');
$p = xtrac_ai_triage_parse("```json\n{\"priority\":\"high\",\"category\":\"Email\",\"summary\":\"Mail queue stuck\"}\n```");
ok($p !== null && $p['priority'] === 'high', 'parses fenced JSON');
$p = xtrac_ai_triage_parse('Sure! Here you go: {"priority":"medium","category":"Printer","summary":"Toner depleted"} hope that helps');
ok($p !== null && $p['priority'] === 'medium', 'parses JSON embedded in prose');
ok(xtrac_ai_triage_parse('{"priority":"critical"}') === null, 'rejects invalid priority');
ok(xtrac_ai_triage_parse('no json here') === null, 'rejects non-JSON');
$p = xtrac_ai_triage_parse('{"priority":"LOW","category":"a","summary":"b"}');
ok($p !== null && $p['priority'] === 'low', 'lowercases priority');
ok(xtrac_ai_triage_hook(array('description' => '')) === '', 'empty description -> skipped');

// ---------- live API call (opt-in) ----------
if ($live) {
    echo "\n-- live call to OpenRouter --\n";
    $res = xtrac_ai_complete('chat', array(
        array('role' => 'user', 'content' => 'Reply with exactly: PONG'),
    ), array('temperature' => 0));
    echo 'result: ' . json_encode($res) . "\n";
    ok(!empty($res['ok']) && stripos($res['text'], 'pong') !== false, 'live API call returns PONG');
    $snap2 = xtrac_ai_usage_snapshot();
    echo "usage after live call: {$snap2['user']}/{$snap2['user_limit']} (global {$snap2['global']})\n";
}

echo "\nPASS: $pass  FAIL: $fail\n";
exit($fail ? 1 : 0);
