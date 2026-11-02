<div class="w3-row-padding">
 <div class="w3-threequarter"> 
<h3><button class="login-btn w3-green">Watch E-Learning Video Contents</button></h3>
<?php

$centreid = $_POST['centreid'];

include '../link/connect.php';

			$stmt = mysqli_prepare($conn, "SELECT * FROM cbt_info WHERE id=?");
			mysqli_stmt_bind_param($stmt, 's', $centreid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			
			if ($result->num_rows > 0) {
				 echo "<table>";
    echo "<tr>";

while($row = mysqli_fetch_array($result)) 
{

$img = "<a href='#'>
<video id='".$row['sn']."' ]1 controls width='280'  style='border:10px solid grey'>
<source src='../video/".$row['img']."' type='video/mp4'  /></a> <h6 class='w3-pink w3-padding-medium' style='font-size:12px;text-align:center; font-weight:500' />" . $row['imgtitle']. "</h6>";

            echo "<td>$img</td>";

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