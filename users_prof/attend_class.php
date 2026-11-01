<div class="w3-row-padding">
 <div class="w3-col"> 
<h3><button class="login-btn w3-green">Experience Virtual Classroom</button></h3>
<?php

$classid = $_POST['classid'];
$subjectid = $_POST['subjectid'];

include '../link/connect.php';

			$result = mysqli_query($conn, "SELECT * FROM online_class WHERE classId='$classid' && course_name='$subjectid'");
			
			if ($result->num_rows > 0) {
				
echo "<p><table>";
				 			 
    echo "<tr>
	<th class='w3-light-blue w3-text-black' width='auto' style='padding:10px; text-align: left; font-size:12px'>Title</th>
	<th class='w3-light-blue w3-text-black' width='auto' style='padding:10px; text-align: left; font-size:12px'>Class Link</th>
	<th class='w3-light-blue w3-text-black' width='auto' style='padding:10px; text-align: left; font-size:12px'>Class Date</th>
	<th class='w3-light-blue w3-text-black' width='auto' style='padding:10px; text-align: left; font-size:12px'>Class Time</th>
	</tr>";

while($row = mysqli_fetch_array($result)) 
{

$link = "<a href='".$row['virtual_link']."' style='font-size:17px;text-decoration:none'>".$row['virtual_link']." </a> ";

            echo "<td style='font-size:14px;'>" .$row['linktitle']."</td>
			<td style='font-family:courier new; font-size:14px;color:grey'>$link</td>
			<td style='font-size:14px; text-align:right'>" .$row['sched_date']."</td>
			<td style='font-size:14px; text-align:right'>" .$row['sched_time']."</td>";

   
     
echo "</tr>"; 

}     
echo "</table></p>"; 
   

} 
  
else {
    echo "<p class='w3-red w3-padding-large'>Oops! The application says, 'Sorry there are no eLearning Videos to Display yet'</p>";
}

// Close connection
//$conn->close();


?>

</div>
</div>