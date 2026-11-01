<?php

include '../link/connect.php';
$query = mysqli_query($conn,"SELECT signature FROM group_training WHERE id= ".$_GET['id']);
$row = mysqli_fetch_assoc($query);
header("Content-type: image/jpeg");
echo $row['signature'];

?>  

