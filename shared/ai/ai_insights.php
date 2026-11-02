<?php
/**
 * AI Report Insights screen — included through shared/dashboard.php via the
 * dispatch map ('AI Insights' => '../shared/ai/ai_insights.php').
 * Pulls a few aggregates with prepared statements, then asks the model for
 * a plain-language read-out. Runs only when the user clicks "Analyze"
 * (costs one AI request, counted against their daily quota).
 */
$aiToken = xtrac_csrf_token();
$aiSnap = xtrac_ai_usage_snapshot();

// --- Aggregates (prepared; skip silently if a table is missing) ----------
$aiStats = array();
$aiTotalAssets = null;
$aiTotalUsers = null;

$q = "SELECT devstat, COUNT(*) AS c FROM additem GROUP BY devstat";
$stmt = @mysqli_prepare($conn, $q);
if ($stmt && @mysqli_stmt_execute($stmt)) {
    $r = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_assoc($r)) {
        $aiStats[(string) $row['devstat']] = (int) $row['c'];
        $aiTotalAssets = ($aiTotalAssets === null ? 0 : $aiTotalAssets) + (int) $row['c'];
    }
    mysqli_stmt_close($stmt);
}

$stmt = @mysqli_prepare($conn, "SELECT COUNT(*) AS c FROM user_login");
if ($stmt && @mysqli_stmt_execute($stmt)) {
    $r = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($r)) {
        $aiTotalUsers = (int) $row['c'];
    }
    mysqli_stmt_close($stmt);
}

$aiSummaryLines = array();
if ($aiTotalAssets !== null) {
    $aiSummaryLines[] = 'Total assets: ' . $aiTotalAssets;
    foreach ($aiStats as $status => $c) {
        $aiSummaryLines[] = '  - ' . ($status === '' ? '(no status)' : $status) . ': ' . $c;
    }
} else {
    $aiSummaryLines[] = 'Asset table unavailable (no rows or no database connection).';
}
if ($aiTotalUsers !== null) {
    $aiSummaryLines[] = 'Registered users: ' . $aiTotalUsers;
}

// --- Handle the Analyze button (CSRF already verified by dashboard) ------
$aiResult = '';
$aiError = '';
if (isset($_POST['run_insights'])) {
    $system = 'You are a business analyst for the xTrac asset-management system. '
        . 'Given system aggregates, produce a short read-out: 3-6 bullets of what stands out, '
        . 'then 2-3 concrete recommended actions. Plain text, no markdown fences, max ~200 words.';
    $user = "System aggregates:\n" . implode("\n", $aiSummaryLines)
        . "\n\nWrite the insights read-out now.";
    $res = xtrac_ai_complete('insights', array(
        array('role' => 'system', 'content' => $system),
        array('role' => 'user', 'content' => $user),
    ), array('temperature' => 0.3));
    if (empty($res['ok'])) {
        $aiError = $res['error'];
    } else {
        $aiResult = $res['text'];
        $aiSnap = xtrac_ai_usage_snapshot();
    }
}
?>
<div class="w3-container" style="max-width:900px;">
    <h4 class="w3-text-green"><i class="fa fa-lightbulb-o fa-fw w3-text-blue-grey" aria-hidden="true" style="font-size:36px;"></i> AI Report Insights</h4>
    <p class="w3-text-grey" style="font-size:12px;">
        One click turns today's system data into a short read-out and action list.
        Quota: <b><?php echo (int) $aiSnap['user']; ?>/<?php echo (int) $aiSnap['user_limit']; ?></b> requests today for you,
        <?php echo (int) $aiSnap['global']; ?>/<?php echo (int) $aiSnap['global_limit']; ?> app-wide (resets midnight UTC).
    </p>

    <div class="w3-panel w3-pale-blue w3-border" style="font-size:13px;">
        <b>Current data</b>
        <ul style="margin:4px 0 0 18px;">
            <?php foreach ($aiSummaryLines as $line) { ?>
                <li><?php echo htmlspecialchars($line, ENT_QUOTES, 'UTF-8'); ?></li>
            <?php } ?>
        </ul>
    </div>

    <form method="post" action="">
        <input type="hidden" name="run_insights" value="1">
        <button type="submit" class="w3-button w3-green"><i class="fa fa-magic"></i> Analyze with AI</button>
    </form>

    <?php if ($aiError !== '') { ?>
        <p class="w3-text-red" style="font-size:13px;"><?php echo htmlspecialchars($aiError, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php } ?>
    <?php if ($aiResult !== '') { ?>
        <div class="w3-panel w3-pale-green w3-border" style="white-space:pre-wrap; font-size:14px;">
<?php echo htmlspecialchars($aiResult, ENT_QUOTES, 'UTF-8'); ?>
        </div>
    <?php } ?>
</div>
