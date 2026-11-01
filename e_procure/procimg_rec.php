<?php
include 'connect.php';
$query = mysqli_query($conn,"SELECT img FROM procurement_staff WHERE sn=".$_GET['id']);
$row = mysqli_fetch_assoc($query);
header("Content-type: image/jpeg");
echo $row['img'];

//header("Content-type: image/jpeg");
//echo $data;
?>  

