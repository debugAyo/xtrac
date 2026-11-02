<?php
/**
 * AI ticket triage — called from the auth_new_tick.php success branches.
 *
 * Best-effort by design: ticket creation NEVER fails because of AI.
 * On success it (1) appends the verdict to shared/ai/usage/triage-*.jsonl
 * (gitignored) and (2) returns a small HTML notice for the page to echo.
 * On any error/cap/config problem it returns '' and does nothing visible.
 */
require_once __DIR__ . '/client.php';

/**
 * Parse a triage model reply into array(priority, category, summary) or null.
 * Lenient: strips code fences, finds the first {...} object, validates fields.
 */
function xtrac_ai_triage_parse($text)
{
    $text = (string) $text;
    $text = preg_replace('/```(?:json)?/i', '', $text);
    $start = strpos($text, '{');
    $end = strrpos($text, '}');
    if ($start === false || $end === false || $end <= $start) {
        return null;
    }
    $obj = json_decode(substr($text, $start, $end - $start + 1), true);
    if (!is_array($obj)) {
        return null;
    }
    $prio = isset($obj['priority']) ? strtolower(trim((string) $obj['priority'])) : '';
    if (!in_array($prio, array('low', 'medium', 'high', 'urgent'), true)) {
        return null;
    }
    $cat = isset($obj['category']) ? trim((string) $obj['category']) : '';
    $sum = isset($obj['summary']) ? trim((string) $obj['summary']) : '';
    if (function_exists('mb_substr')) {
        $cat = mb_substr($cat, 0, 60);
        $sum = mb_substr($sum, 0, 160);
    } else {
        $cat = substr($cat, 0, 60);
        $sum = substr($sum, 0, 160);
    }
    return array('priority' => $prio, 'category' => $cat, 'summary' => $sum);
}

/**
 * Run triage for a newly created ticket.
 *
 * @param array $fields keys: ticket_no, category, description, impact,
 *                      reported_priority, cal_name (all optional strings)
 * @return string HTML notice to echo, or '' when triage was skipped/failed
 */
function xtrac_ai_triage_hook($fields)
{
    $desc = isset($fields['description']) ? trim((string) $fields['description']) : '';
    if ($desc === '') {
        return '';
    }
    if (function_exists('mb_substr')) {
        $desc = mb_substr($desc, 0, 1500);
    } else {
        $desc = substr($desc, 0, 1500);
    }

    $system = 'You are a triage assistant for an asset-management help desk. '
        . 'You classify newly created tickets. Be decisive and terse.';
    $user = "Classify this ticket. Reply with ONLY one JSON object, no other text:\n"
        . '{"priority":"low|medium|high|urgent","category":"1-3 words","summary":"max 20 words"}\n'
        . 'Ticket category field: ' . (isset($fields['category']) ? (string) $fields['category'] : 'n/a') . "\n"
        . 'Reported priority: ' . (isset($fields['reported_priority']) ? (string) $fields['reported_priority'] : 'n/a') . "\n"
        . 'Impact: ' . (isset($fields['impact']) ? (string) $fields['impact'] : 'n/a') . "\n"
        . 'Description: ' . $desc;

    $res = xtrac_ai_complete('triage', array(
        array('role' => 'system', 'content' => $system),
        array('role' => 'user', 'content' => $user),
    ), array('temperature' => 0.0));

    if (empty($res['ok'])) {
        return '';
    }
    $verdict = xtrac_ai_triage_parse($res['text']);
    if ($verdict === null) {
        return '';
    }

    xtrac_ai_triage_log(array(
        'ticket_no' => isset($fields['ticket_no']) ? (string) $fields['ticket_no'] : '',
        'reported_priority' => isset($fields['reported_priority']) ? (string) $fields['reported_priority'] : '',
        'ai' => $verdict,
        'model' => $res['model'],
    ));

    $label = ucfirst($verdict['priority']);
    $line = 'AI triage: <b>' . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . '</b>';
    if ($verdict['category'] !== '') {
        $line .= ' — ' . htmlspecialchars($verdict['category'], ENT_QUOTES, 'UTF-8');
    }
    if ($verdict['summary'] !== '') {
        $line .= ' — ' . htmlspecialchars($verdict['summary'], ENT_QUOTES, 'UTF-8');
    }
    return '<div class="w3-panel w3-pale-green w3-border w3-margin" style="font-size:12px;">'
        . $line . '</div>';
}
