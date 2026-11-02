<?php
// Initialize session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../security.php';

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
}
// whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
// whether ip is from remote address
else {
    $ip = $_SERVER['REMOTE_ADDR'];
    $hostname = gethostbyaddr($ip);
}

// Include database connection settings
include '../link/connect.php';

// Retrieve username and password from database according to user's input
$username = isset($_POST['username']) ? (string) $_POST['username'] : '';
$password = isset($_POST['password']) ? (string) $_POST['password'] : '';

$stmt = mysqli_prepare($conn, "SELECT * FROM user_login WHERE username = ?");
mysqli_stmt_bind_param($stmt, 's', $username);
mysqli_stmt_execute($stmt);
$login = mysqli_stmt_get_result($stmt);

// Check username and password match (scheme-agnostic: bcrypt or legacy MD5)
if ($login && mysqli_num_rows($login) == 1) {

    $row = mysqli_fetch_array($login);
    $stored = $row['password'];

    $new_hash = null;
    if (!xtrac_password_verify($password, $stored, $new_hash)) {
        header('Location: index.php');
        exit();
    }

    // Upgrade legacy MD5 credentials to bcrypt on successful login.
    if ($new_hash !== null) {
        $up = mysqli_prepare($conn, "UPDATE user_login SET password = ? WHERE username = ?");
        mysqli_stmt_bind_param($up, 'ss', $new_hash, $username);
        mysqli_stmt_execute($up);
        mysqli_stmt_close($up);
    }

    $fname = $row['name'];
    $categ = $row['privilege'];
    $calphone = $row['phone'];
    $caladdress = $row['address'];
    $event = 'Logged Into the xTrac';

    session_regenerate_id(true);
    $_SESSION['username'] = $username;

    if ($categ=='Manager') {
        header('Location:../admin/securedpage.php');
    } elseif ($categ=='Client') {
        header('Location: securedpage.php');
    } elseif ($categ=='Freelancer') {
        header('Location: ../staff/freelance.php');
    }

    $stmt2 = mysqli_prepare($conn,
        "INSERT INTO logger (fname,action,ipaddr,host,event_date,event_time) VALUES(?,?,?,?,CURDATE(),CURTIME())");
    $host = isset($hostname) ? $hostname : '';
    mysqli_stmt_bind_param($stmt2, 'ssss', $fname, $event, $ip, $host);
    mysqli_stmt_execute($stmt2);
    mysqli_stmt_close($stmt2);
    mysqli_stmt_close($stmt);
    exit();
} else {
    mysqli_stmt_close($stmt);
    // Jump to login page
    header('Location: index.php');
    exit();
}
