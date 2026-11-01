<?php
/**
 * xTrac central database configuration.
 *
 * Single source of truth for all DB connections. Every connect.php in the
 * codebase is now a thin wrapper around xtrac_connect() below.
 *
 * To point the app at a different database, edit the values here (or set the
 * XTRAC_DB_* environment variables) — no other file needs to change.
 *
 * Profiles (kept for backward compatibility with the legacy per-module DBs):
 *   main     -> primary app DB (assets, users, tickets, budgets)   [xlens]
 *   staff    -> legacy HR/login DB used by module connect copies   [deskman]
 *   shelf    -> shelf/library microservice DB                      [zkbiotime]
 *   plotter  -> chart sandbox DB                                   [test]
 *   plotter2 -> secondary chart DB (dbconnect.php)                 [nirsal]
 */

function xtrac_db_settings()
{
    $env = function ($key, $default) {
        $v = getenv($key);
        return ($v === false || $v === '') ? $default : $v;
    };

    $host = $env('XTRAC_DB_HOST', 'localhost');
    $user = $env('XTRAC_DB_USER', 'root');
    $pass = $env('XTRAC_DB_PASS', '');

    return array(
        'host'    => $host,
        'user'    => $user,
        'pass'    => $pass,
        'profiles' => array(
            'main'    => $env('XTRAC_DB_NAME',        'xlens'),
            'staff'   => $env('XTRAC_DB_STAFF_NAME',  'deskman'),
            'shelf'   => $env('XTRAC_DB_SHELF_NAME',  'zkbiotime'),
            'plotter' => $env('XTRAC_DB_PLOT_NAME',   'test'),
            'plotter2'=> $env('XTRAC_DB_PLOT2_NAME',  'nirsal'),
        ),
    );
}

/**
 * Open a mysqli connection using the central settings.
 *
 * @param string $profile One of: main, staff, shelf, plotter, plotter2.
 * @return mysqli
 */
function xtrac_connect($profile = 'main')
{
    $cfg   = xtrac_db_settings();
    $dbname = isset($cfg['profiles'][$profile]) ? $cfg['profiles'][$profile] : $cfg['profiles']['main'];

    $conn = @mysqli_connect($cfg['host'], $cfg['user'], $cfg['pass'], $dbname);

    if (!$conn) {
        // Fail loudly in development, quietly in production.
        $msg = 'Database connection failed (' . $profile . ' -> ' . $dbname . '). '
             . 'Check config/db.php or your XTRAC_DB_* environment variables.';
        if (defined('DISPLAY_DB_ERRORS') && DISPLAY_DB_ERRORS) {
            die($msg . ' mysqli error: ' . mysqli_connect_error());
        }
        die($msg);
    }

    return $conn;
}
