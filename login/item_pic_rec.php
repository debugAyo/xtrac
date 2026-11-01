<?php
include '../link/connect.php';
$query = mysqli_query($conn,"SELECT pic FROM additem WHERE sn=".$_GET['id']);
$row = mysqli_fetch_assoc($query);
header("Content-type: image/jpeg");
echo $row['pic'];
//header("Content-type: image/jpeg");
//echo $data;
?>  

