<?php
include '../link/connect.php';
$stmt = mysqli_prepare($conn, "SELECT pic FROM additem WHERE sn=?");
mysqli_stmt_bind_param($stmt, 's', $_GET['id']);
mysqli_stmt_execute($stmt);
$query = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($query);
header("Content-type: image/jpeg");
echo $row['pic'];
//header("Content-type: image/jpeg");
//echo $data;
?>  

