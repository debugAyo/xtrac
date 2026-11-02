<?php
include 'connect.php';

$stmt = mysqli_prepare($conn, "SELECT * FROM user_login WHERE username = ?");
mysqli_stmt_bind_param($stmt, 's', $_POST['username']);
mysqli_stmt_execute($stmt);
$login = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($login) == 1) {

$_SESSION['username'] = $_POST['username'];

while ($row=mysqli_fetch_array($login)) {
$fname = $row['name'];
}
}
?>