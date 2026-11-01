<?php
include 'link/connect.php';
//$query = mysqli_query($conn,"SELECT logo FROM custom WHERE id= ".$_GET['id']);

$query = mysqli_query($conn,"SELECT logo FROM custom WHERE id= ".$_GET['id']);

$row = mysqli_fetch_assoc($query);
header("Content-type: image/jpeg");
echo $row['logo'];

//header("Content-type: image/jpeg");
//echo $data;
?>  

