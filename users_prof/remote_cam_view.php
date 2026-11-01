<div class="w3-row">
 <div class="w3-threequarter"> 
<h3><button class="login-btn w3-blue"><i class="fa fa-file-video-o" style="font-size:24px; color:yellow"></i> Watch Live Events</button></h3>
<?php

$centreid = $_POST['centreid'];

include '../link/connect.php';

			$result = mysqli_query($conn, "SELECT * FROM cbt_info WHERE id='$centreid'");
			
			if ($result->num_rows > 0) {
				 echo "<table>";
    echo "<tr>";

while($row = mysqli_fetch_array($result)) 
{

/*$img = "<a href='#'>
<video id='".$row['id']."' ]1 controls width='280'  style='border:10px solid grey'>
<source src='../video/".$row['img']."' type='video/mp4'  /></a> <h6 class='w3-pink w3-padding-medium' style='font-size:12px;text-align:center; font-weight:500' />" . $row['imgtitle']. "</h6>";

            echo "<td>$img</td>";
*/

$rem_cam="<a href='https://".$row['ddns_hostname'].":".$row['port_no']."'style='text-decoration:none;' target='_blank'>".$row['centre_name']." ".$row['physical_address']."</a>";
echo "<td>$rem_cam</td>";

   } 
     
echo "</tr>"; 

    echo "</table>"; 
   

} 
  
else {
    echo "<p class='w3-red w3-padding-large'>Oops! The application says, 'Sorry there are no eLearning Videos to Display yet'</p>";
}

// Close connection
//$conn->close();


?>

</div>
</div>