<?php 

 include '../link/connect.php';
 $image = mysqli_query($conn,"SELECT * FROM custom WHERE sn = '1'");
while($row = mysqli_fetch_assoc($image))
{
echo '<img src="../install/'.$row['logo'].'" width="50" height="50" style="margin-top: 0%; border: 0px solid grey; border-radius:50%; float:center">';
//echo '<img src="img_custom.php?id='.$row['id'].'" width="20" height="60">';
echo '<p style="margin-top: -0.5%; margin-left: 0%;  color: green; font-size: 17px; font-family:arial black">'. $row['name'].' </p>';
echo '<p style="margin-top: -1.5%; margin-left: 0%; font-family: arial black; color: #grey; font-size:12px">'. $row['address'].' </p>';

}

?>