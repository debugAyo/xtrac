<?php
/**
 * xTrac AI client — server-side OpenRouter wrapper with daily usage limits.
 *
 * The API key lives only in shared/ai/config.php (gitignored) or the
 * OPENROUTER_API_KEY env var. Browsers never talk to OpenRouter directly;
 * they only hit the PHP endpoints in this directory.
 *
 * All functions fail soft: they return array('ok' => false, 'error' => ...)
 * rather than throwing, so screens/ticket creation never break because of AI.
 */

/**
 * Load AI config once (config.php, with env override for the key).
 */
function xtrac_ai_config()
{
    static $cfg = null;
    if ($cfg !== null) {
        return $cfg;
    }
    $file = __DIR__ . '/config.php';
    $cfg = is_file($file) ? (array) require $file : array();
    $env = getenv('OPENROUTER_API_KEY');
    if ($env !== false && $env !== '') {
        $cfg['api_key'] = $env;
    }
    $cfg += array(
        'base_url' => 'https://openrouter.ai/api/v1',
        'models' => array(),
        'fallback_model' => '',
        'app_name' => 'xTrac AI',
        'site_url' => '',
        'limits' => array(),
    );
    $cfg['models'] += array(
        'chat' => 'deepseek/deepseek-chat',
        'insights' => 'deepseek/deepseek-chat',
        'triage' => 'deepseek/deepseek-chat',
    );
    $cfg['limits'] += array(
        'per_user_per_day' => 30,
        'global_per_day' => 200,
        'max_tokens' => array('chat' => 800, 'insights' => 1500, 'triage' => 300),
        'timeout' => array('chat' => 45, 'insights' => 60, 'triage' => 20),
    );
    return $cfg;
}

/**
 * Path of today's (UTC) usage counter file; creates the usage dir if needed.
 */
function xtrac_ai_usage_file()
{
    $dir = __DIR__ . '/usage';
    if (!is_dir($dir)) {
        @mkdir($dir, 0775, true);
    }
    return $dir . '/usage-' . gmdate('Y-m-d') . '.json';
}

/**
 * Read-modify-write the usage counters under an exclusive lock.
 * $fn receives the decoded state array and must return the new state array.
 */
function xtrac_ai_usage_mutate($fn)
{
    $path = xtrac_ai_usage_file();
    $fh = @fopen($path, 'c+');
    if (!$fh) {
        return null; // storage unavailable — caller fails open
    }
    flock($fh, LOCK_EX);
    $raw = stream_get_contents($fh);
    $state = json_decode($raw, true);
    if (!is_array($state) || !isset($state['global'], $state['users']) || !is_array($state['users'])) {
        $state = array('global' => 0, 'users' => array());
    }
    $state = $fn($state);
    ftruncate($fh, 0);
    rewind($fh);
    fwrite($fh, json_encode($state));
    fflush($fh);
    flock($fh, LOCK_UN);
    fclose($fh);
    return $state;
}

/**
 * Current signed-in user key for per-user counters.
 */
function xtrac_ai_user()
{
    return isset($_SESSION['username']) ? (string) $_SESSION['username'] : 'anonymous';
}

/**
 * Check whether the current user may make an AI request of $feature today.
 * @return null when allowed, or array('ok'=>false,'error'=>...,'limit'=>true)
 */
function xtrac_ai_usage_check($feature)
{
    $cfg = xtrac_ai_config();
    $lim = $cfg['limits'];
    $user = xtrac_ai_user();
    $path = xtrac_ai_usage_file();
    $fh = @fopen($path, 'r');
    if (!$fh) {
        return null;
    }
    flock($fh, LOCK_SH);
    $state = json_decode((string) stream_get_contents($fh), true);
    flock($fh, LOCK_UN);
    fclose($fh);
    if (!is_array($state) || !isset($state['global'], $state['users']) || !is_array($state['users'])) {
        $state = array('global' => 0, 'users' => array());
    }
    $used = isset($state['users'][$user]) ? (int) $state['users'][$user] : 0;
    $global = (int) $state['global'];
    if ($global >= (int) $lim['global_per_day']) {
        return array(
            'ok' => false,
            'limit' => true,
            'error' => 'Daily AI limit reached for this application ('
                . (int) $lim['global_per_day']
                . ' requests/day). It resets at midnight UTC. Ask the administrator to raise the caps in shared/ai/config.php.',
        );
    }
    if ($used >= (int) $lim['per_user_per_day']) {
        return array(
            'ok' => false,
            'limit' => true,
            'error' => 'Your daily AI limit is reached ('
                . $used . '/' . (int) $lim['per_user_per_day']
                . ' requests today). It resets at midnight UTC. Try again tomorrow or ask the administrator to raise the caps in shared/ai/config.php.',
        );
    }
    return null;
}

/**
 * Count one AI request against today's global + per-user counters.
 * Called after every request that actually reached the provider.
 */
function xtrac_ai_usage_commit()
{
    $user = xtrac_ai_user();
    xtrac_ai_usage_mutate(function ($state) use ($user) {
        $state['global'] = (int) $state['global'] + 1;
        if (!isset($state['users'][$user]) || !is_int($state['users'][$user])) {
            $state['users'][$user] = 0;
        }
        $state['users'][$user]++;
        return $state;
    });
}

/**
 * Read-only usage snapshot for display (quota lines on AI screens).
 * @return array('user'=>int,'user_limit'=>int,'global'=>int,'global_limit'=>int)
 */
function xtrac_ai_usage_snapshot()
{
    $cfg = xtrac_ai_config();
    $user = xtrac_ai_user();
    $used = 0;
    $global = 0;
    $fh = @fopen(xtrac_ai_usage_file(), 'r');
    if ($fh) {
        flock($fh, LOCK_SH);
        $state = json_decode((string) stream_get_contents($fh), true);
        flock($fh, LOCK_UN);
        fclose($fh);
        if (is_array($state)) {
            if (isset($state['users'][$user])) {
                $used = (int) $state['users'][$user];
            }
            if (isset($state['global'])) {
                $global = (int) $state['global'];
            }
        }
    }
    return array(
        'user' => $used,
        'user_limit' => (int) $cfg['limits']['per_user_per_day'],
        'global' => $global,
        'global_limit' => (int) $cfg['limits']['global_per_day'],
    );
}

/**
 * Resolve the CA bundle path: config override, else the stock Mozilla
 * cacert.pem, merged with an optional machine-local cacert.local.pem
 * (e.g. antivirus/corporate TLS roots) into a gitignored cached file.
 */
function xtrac_ai_ca_bundle()
{
    $cfg = xtrac_ai_config();
    if (!empty($cfg['ca_bundle'])) {
        return $cfg['ca_bundle'];
    }
    $stock = __DIR__ . '/cacert.pem';
    $local = __DIR__ . '/cacert.local.pem';
    if (!is_file($local)) {
        return $stock;
    }
    $dir = __DIR__ . '/usage';
    if (!is_dir($dir)) {
        @mkdir($dir, 0775, true);
    }
    $eff = $dir . '/ca-effective.pem';
    $fresh = is_file($eff)
        && filemtime($eff) >= max(filemtime($stock), filemtime($local))
        && filesize($eff) >= filesize($stock) + filesize($local);
    if (!$fresh) {
        @file_put_contents($eff, file_get_contents($stock) . "\n" . file_get_contents($local));
    }
    return is_file($eff) ? $eff : $stock;
}

/**
 * Low-level POST to OpenRouter /chat/completions.
 * @return array('ok'=>bool,'status'=>int,'text'=>string,'error'=>string)
 */
function xtrac_ai_http($cfg, $payload, $timeout)
{
    if (!function_exists('curl_init')) {
        return array('ok' => false, 'status' => 0, 'text' => '',
            'error' => 'Server PHP lacks the curl extension (required for AI calls).');
    }
    $url = rtrim($cfg['base_url'], '/') . '/chat/completions';
    $headers = array(
        'Authorization: Bearer ' . $cfg['api_key'],
        'Content-Type: application/json',
        'HTTP-Referer: ' . ($cfg['site_url'] !== '' ? $cfg['site_url'] : 'http://localhost'),
        'X-Title: ' . ($cfg['app_name'] !== '' ? $cfg['app_name'] : 'xTrac AI'),
    );
    $caBundle = xtrac_ai_ca_bundle();
    $ch = curl_init($url);
    curl_setopt_array($ch, array(
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => (int) $timeout,
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_POSTFIELDS => json_encode($payload),
    ));
    if (is_file($caBundle)) {
        curl_setopt($ch, CURLOPT_CAINFO, $caBundle);
    }
    $body = curl_exec($ch);
    $status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $cerr = curl_error($ch);
    curl_close($ch);
    if ($body === false) {
        return array('ok' => false, 'status' => 0, 'text' => '', 'error' => 'Network error: ' . $cerr);
    }
    $j = json_decode($body, true);
    if ($status < 200 || $status >= 300) {
        $msg = '';
        if (isset($j['error']['message'])) {
            $msg = (string) $j['error']['message'];
        }
        return array('ok' => false, 'status' => $status, 'text' => '', 'error' => $msg !== '' ? $msg : ('HTTP ' . $status));
    }
    $text = '';
    if (isset($j['choices'][0]['message']['content'])) {
        $text = (string) $j['choices'][0]['message']['content'];
    }
    return array('ok' => true, 'status' => $status, 'text' => $text, 'error' => '');
}

/**
 * Run one AI completion with usage limits, model fallback, and cost ceilings.
 *
 * @param string $feature  chat|insights|triage (selects model + caps)
 * @param array  $messages OpenAI-style messages array
 * @param array  $opts     optional: model, temperature
 * @return array('ok'=>bool,'text'=>string,'model'=>string,'error'=>string,'limit'=>bool)
 */
function xtrac_ai_complete($feature, $messages, $opts = array())
{
    $cfg = xtrac_ai_config();
    if (empty($cfg['api_key'])) {
        return array('ok' => false, 'text' => '', 'model' => '', 'limit' => false,
            'error' => 'AI is not configured: missing API key in shared/ai/config.php (or the OPENROUTER_API_KEY env var).');
    }
    $blocked = xtrac_ai_usage_check($feature);
    if ($blocked !== null) {
        $blocked += array('text' => '', 'model' => '');
        return $blocked;
    }
    $model = isset($cfg['models'][$feature]) ? $cfg['models'][$feature] : 'deepseek/deepseek-chat';
    if (!empty($opts['model'])) {
        $model = $opts['model'];
    }
    $maxTokens = isset($cfg['limits']['max_tokens'][$feature]) ? (int) $cfg['limits']['max_tokens'][$feature] : 800;
    $timeout = isset($cfg['limits']['timeout'][$feature]) ? (int) $cfg['limits']['timeout'][$feature] : 45;
    $payload = array(
        'model' => $model,
        'messages' => $messages,
        'max_tokens' => $maxTokens,
        'temperature' => isset($opts['temperature']) ? (float) $opts['temperature'] : 0.4,
    );
    $res = xtrac_ai_http($cfg, $payload, $timeout);
    if (!$res['ok'] && in_array($res['status'], array(429, 503), true)
        && $cfg['fallback_model'] !== '' && $cfg['fallback_model'] !== $model) {
        $payload['model'] = $cfg['fallback_model'];
        $res = xtrac_ai_http($cfg, $payload, $timeout);
    }
    // Count every request that actually reached the provider (costs/rate-limits).
    xtrac_ai_usage_commit();
    if (!$res['ok']) {
        $human = 'AI request failed';
        if ($res['status'] === 401) {
            $human = 'AI key rejected by the provider — check shared/ai/config.php.';
        } elseif ($res['status'] === 402) {
            $human = 'AI provider credits exhausted — top up your OpenRouter account.';
        } elseif ($res['status'] === 429) {
            $human = 'AI provider rate limit hit — try again in a moment.';
        } elseif ($res['status'] === 0) {
            $human = 'AI provider unreachable — check the server network.';
        }
        if ($res['error'] !== '') {
            $human .= ' (' . $res['error'] . ')';
        }
        return array('ok' => false, 'text' => '', 'model' => $payload['model'], 'limit' => false, 'error' => $human);
    }
    return array('ok' => true, 'text' => $res['text'], 'model' => $payload['model'], 'limit' => false, 'error' => '');
}

/**
 * Append an entry to today's triage JSONL log (shared/ai/usage/, gitignored).
 */
function xtrac_ai_triage_log($entry)
{
    $dir = __DIR__ . '/usage';
    if (!is_dir($dir)) {
        @mkdir($dir, 0775, true);
    }
    $entry['at'] = gmdate('c');
    $entry['user'] = xtrac_ai_user();
    @file_put_contents(
        $dir . '/triage-' . gmdate('Y-m-d') . '.jsonl',
        json_encode($entry) . "\n",
        FILE_APPEND | LOCK_EX
    );
}
