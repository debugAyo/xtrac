<?php 

 include '../link/connect.php';
 $image = mysqli_query($conn,"SELECT * FROM custom WHERE id = '1'");
while($row = mysqli_fetch_assoc($image))
{
echo '<div class="w3-row">
   <div class="w3-col w3-container m1 l1"><h5 style="margin-left: 0%"><img src="../install/'.$row['logo'].'" width="50" height="50" style="margin-top: -2%; border: 0px solid #CCCCCC"></h5></div>';
//echo '<img src="img_custom.php?id='.$row['id'].'" width="40" height="60">';
echo ' <div class="w3-col w3-container m10 l10 w3-center"><h5 style="margin-top: 0%; color: black; font-size: 17px; font-family:arial black">'. $row['name'].'</h5><p style="margin-top: -1%; font-family: arial; color: grey; font-size:12px">'. $row['address'].' </p></div>';
echo '<div class="w3-col w3-container m1 l1"></div>
<div class="w3-col w3-container m1 l1"></div>
   </div>';

}

?>


  
   
   
   