<?php 

 include 'link/connect.php';
 $image = mysqli_query($conn,"SELECT * FROM custom WHERE sn = '1'");
while($row = mysqli_fetch_assoc($image))
{
echo '<div class="w3-col w3-container m2 l2">
<img src="install/'.$row['logo'].'" width="150" height="40" style="margin-top: 1%; border: 0px solid grey; border-radius:0%; float:center;"></div>';

//echo '<img src="img_custom.php?id='.$row['id'].'" width="20" height="60">';
echo '<div class="w3-col w3-container m3 l3"><p style="margin-top: 3%; margin-left: 0%;  color: Black; font-size: 17px;  letter-spacing:1px">'. $row['name'].' </p></div>';
echo '<div class="w3-col w3-container m7 l7"><p style="margin-top: 1%; margin-left: 0%; color: #ccc; font-size:14px; letter-spacing:2px"><i class="fa fa-calendar w3-text-green w3-hover-text-red" style="font-size:24px"></i> '. $row['address'].' </p></div>';

}

?>