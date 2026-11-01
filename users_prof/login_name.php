<?php
include 'connect.php';

$login = mysqli_query($conn, "SELECT * FROM user_login WHERE username = '" . $_POST['username'] . "'");

if (mysqli_num_rows($login) == 1) {

$_SESSION['username'] = $_POST['username'];

while ($row=mysqli_fetch_array($login)) {
$fname = $row['name'];
}
}
?>