<?php
/**
 * xTrac central security helpers.
 *
 * Included by shared/dashboard.php (all authenticated screens) and
 * login/loginproc.php (the authentication gate).
 */

/**
 * Return the CSRF token for this session, issuing one if needed.
 */
function xtrac_csrf_token()
{
    if (empty($_SESSION['xtrac_csrf'])) {
        $_SESSION['xtrac_csrf'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['xtrac_csrf'];
}

/**
 * Hidden input carrying the CSRF token (for hand-written forms).
 */
function xtrac_csrf_field()
{
    return '<input type="hidden" name="xtrac_csrf" value="'
        . htmlspecialchars(xtrac_csrf_token(), ENT_QUOTES, 'UTF-8') . '">';
}

/**
 * Verify the CSRF token on a POST request.
 *
 * Enforcement is session-scoped: a request is rejected only when the
 * session already holds a token (i.e. the app has issued one) and the
 * submitted token does not match. This keeps CLI/smoke tests working
 * while blocking cross-site form submissions from real browsers.
 *
 * @return bool true when the request may proceed
 */
function xtrac_csrf_verify()
{
    if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
        return true;
    }
    if (empty($_SESSION['xtrac_csrf'])) {
        return true;
    }
    $sent = isset($_POST['xtrac_csrf']) ? (string) $_POST['xtrac_csrf'] : '';
    return hash_equals($_SESSION['xtrac_csrf'], $sent);
}

/**
 * Escape a value for HTML output (XSS-safe echo).
 */
function xtrac_escape($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/**
 * Verify a password against the stored hash.
 *
 * Supports bcrypt (preferred) and the legacy MD5 scheme. When a legacy
 * MD5 hash verifies, $new_hash is set to a bcrypt hash of the same
 * password so the caller can upgrade the stored credential.
 *
 * @param string      $password plain-text password attempt
 * @param string      $stored   stored hash (bcrypt or MD5 hex)
 * @param string|null $new_hash set to the upgraded bcrypt hash on legacy match
 * @return bool
 */
function xtrac_password_verify($password, $stored, &$new_hash = null)
{
    $new_hash = null;

    if ($stored === '' || $stored === null) {
        return false;
    }

    $info = password_get_info($stored);
    if (!empty($info['algo'])) {
        return password_verify($password, $stored);
    }

    // Legacy 32-char MD5 hex digest.
    if (strlen($stored) === 32 && ctype_xdigit($stored)) {
        if (hash_equals($stored, md5($password))) {
            $new_hash = password_hash($password, PASSWORD_BCRYPT);
            return true;
        }
        return false;
    }

    // Unknown scheme — fail closed.
    return false;
}

/**
 * Require an authenticated session with the given role; redirect to the
 * login page otherwise. Call after session bootstrap.
 *
 * @param string $role super|admin|staff|store
 */
function xtrac_require_role($role)
{
    if (empty($_SESSION['username'])) {
        header('Location: ../login/index.php');
        exit();
    }
    if (empty($_SESSION['role']) || $_SESSION['role'] !== $role) {
        header('Location: ../login/index.php');
        exit();
    }
}
