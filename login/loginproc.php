<?php
// Initialize session
session_start();

require_once __DIR__ . '/../shared/security.php';

// CSRF: reject cross-site login attempts when a token has been issued.
if (!xtrac_csrf_verify()) {
    header('Location: ../index_error.php');
    exit();
}

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

// Check username and password match
if ($login && mysqli_num_rows($login) == 1) {

    $row = mysqli_fetch_array($login);
    $stored = $row['password'];

    $new_hash = null;
    if (!xtrac_password_verify($password, $stored, $new_hash)) {
        header('Location: ../index_error.php');
        exit();
    }

    // Upgrade legacy MD5 credentials to bcrypt on successful login.
    if ($new_hash !== null) {
        $up = mysqli_prepare($conn, "UPDATE user_login SET password = ? WHERE username = ?");
        mysqli_stmt_bind_param($up, 'ss', $new_hash, $username);
        mysqli_stmt_execute($up);
        mysqli_stmt_close($up);
    }

    $fname = $row['fname'];
    $categ = $row['dept'];
    $calphone = $row['phone'];
    $caladdress = $row['con_add'];
    $userprv = $row['access_prvlg'];
    $event = 'Logged Into the xTrac Application from';

    // Prevent session fixation.
    session_regenerate_id(true);

    $_SESSION['username'] = $username;
    $_SESSION['fname'] = $fname;
    $_SESSION['role'] = null;

    if ($categ == 'ICT' && $userprv == 'Super Admin') {
        $_SESSION['role'] = 'super';
        header('Location:../users_prof/securedpage.php');
    } elseif ($categ == 'Administrative' && $userprv == 'Admin') {
        $_SESSION['role'] = 'admin';
        header('Location: ../admin_prof/securedpage.php');
    } elseif ($categ == 'Admin' && $userprv == 'Staff') {
        $_SESSION['role'] = 'staff';
        header('Location: ../admin_prof/staff_securedpage.php');
    } elseif ($categ == 'Store' && $userprv == 'Admin') {
        $_SESSION['role'] = 'store';
        header('Location: ../store/securedpage.php');
    } elseif ($categ == 'Store' && $userprv == 'Staff') {
        $_SESSION['role'] = 'store';
        header('Location: ../store/staff_securedpage.php');
    } elseif ($categ == 'Procurement' && $userprv == 'Admin') {
        header('Location: ../e_procure/securedpage.php');
    } elseif ($categ == 'Procurement' && $userprv == 'Staff') {
        header('Location: ../e_procure/staff_securedpage.php');
    } elseif ($categ == 'Finance and Accounting' && $userprv == 'Admin') {
        header('Location: ../fin_acct/securedpage.php');
    } elseif ($categ == 'Finance and Accounting' && $userprv == 'Staff') {
        header('Location: ../fin_acct/staff_securedpage.php');
    } else {
        // Valid credentials but no matching dashboard route.
        header('Location: ../index_error.php');
    }

    // Log the login event (after routing decision so headers can still send).
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
    // Jump to login error page
    header('Location: ../index_error.php');
    exit();
}
