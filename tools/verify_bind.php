<?php
// Verifies: for each mysqli_prepare + bind_param pair, placeholder count == type length == var count
$files = $argv;
array_shift($files);
$fail = 0;
foreach ($files as $f) {
    $src = file_get_contents($f);
    // strip block comments and full-line // comments (leave inline code intact)
    $src = preg_replace('~/\*.*?\*/~s', '', $src);
    $lines = explode("\n", $src);
    $clean = [];
    foreach ($lines as $l) {
        $t = ltrim($l);
        $clean[] = (strpos($t, '//') === 0) ? '' : $l;
    }
    $code = implode("\n", $clean);
    if (!preg_match_all('/mysqli_prepare\(\s*\$conn\s*,\s*(["\'])(.*?)\1\s*\)\s*;/s', $code, $ms, PREG_OFFSET_CAPTURE | PREG_SET_ORDER)) {
        echo basename($f) . ": no prepares\n";
        continue;
    }
    foreach ($ms as $m) {
        $sql = $m[2][0];
        $after = substr($code, $m[0][1] + strlen($m[0][0]));
        if (!preg_match('/mysqli_stmt_bind_param\(\s*\$\w+\s*,\s*[\'"]([^\'"]*)[\'"]\s*,\s*(.+?)\s*\)\s*;/s', $after, $bm)) {
            echo "NO BIND after prepare at " . basename($f) . "\n";
            $fail++;
            continue;
        }
        $q = substr_count($sql, '?');
        $types = $bm[1];
        $vars = array_map('trim', explode(',', $bm[2]));
        if ($q !== strlen($types) || $q !== count($vars)) {
            echo "MISMATCH " . basename($f) . ": q=$q types=" . strlen($types) . " vars=" . count($vars) . "\n";
            $fail++;
        } else {
            echo "OK " . basename($f) . " q=$q\n";
        }
    }
}
echo $fail ? "FAILURES: $fail\n" : "ALL OK\n";
