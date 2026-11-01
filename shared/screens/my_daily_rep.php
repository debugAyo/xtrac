<div class="w3-row-paddding">
<div class="w3-threequarter w3-border w3-padding-xlarge">
<?php
//$classid=$_POST['classid'];
$appcode=$_POST['appcode'];

include '../link/connect.php';
$date = date("m-Y");

$sql = "SELECT * FROM activities WHERE admissionno='$appcode' ORDER BY date ASC ";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) >0)
{
	echo '<table width="100%" cellspacing="0" > 
	<tr>
			<th  class="w3-light-blue w3-text-black" width="auto" style="padding:10px; text-align: left; font-size:12px">Events</th>
			<th  class="w3-light-blue w3-text-black" width="auto" style="padding:10px; text-align: left; font-size:12px">Date</th>
			<th  class="w3-light-blue w3-text-black" width="auto" style="padding:10px; text-align: left; font-size:12px">Time</th>
			<th  class="w3-purple w3-text-black" width="auto" ><i class="fa fa-tasks" style="padding:5px; text-align: left; font-size:17px; color: white"></i></th>
			</tr>';

echo '<p><button class="login-btn w3-blue w3-text-white"><i class="fa fa-info-circle"></i> My Activities Report </button></p>';

while ($row = mysqli_fetch_array($result)) {
$myclass = $row['classroom'];
echo '<tr>
			<td style="font-family: courier new; font-size:12px">'.$row['class_act'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['repdate'].' </font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['reptime'].'</font></td>
			<td style="font-family: courier new; font-size:12px"><center><form action="" method="post"><input type="hidden" name="list" value="View Assignment"><input type="hidden" name="classrm" value="'.$myclass.'"><input type="hidden" name="id" value="'.$row['id'].'"><button type="submit" style="border: 0px; background-color:white; cursor:pointer"><i class="fa fa fa-ellipsis-v" style="color: green; font-size: 17px"></i></button></form></center></td>
			</tr>';

	}


echo '</table>';		
}

$sql = "SELECT * FROM food_menu_rep WHERE admissionno='$appcode' ORDER BY date ASC";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) >0)
{
	echo '<table width="100%" cellspacing="0" > 
	<tr>
			<th  class="w3-light-blue w3-text-black" width="auto" style="padding:10px; text-align: left; font-size:12px">Report Date</th>
			<th  class="w3-light-blue w3-text-black" width="auto" style="padding:10px; text-align: left; font-size:12px">Menu</th>
			<th  class="w3-light-blue w3-text-black" width="auto" style="padding:10px; text-align: left; font-size:12px">Meal</th>
			<th  class="w3-light-blue w3-text-black" width="auto" style="padding:10px; text-align: left; font-size:12px">Timeline</th>
			<th  class="w3-purple w3-text-black" width="auto" ><i class="fa fa-tasks" style="padding:10px; text-align: left; font-size:17px; color: white"></i></th>
			</tr>';

echo '<p><button class="login-btn w3-blue w3-text-white"><i class="fa fa-info-circle"></i> My Meal Report </button></p>';
while ($row = mysqli_fetch_array($result)) {

echo '<tr>
			<td style="font-family: courier new; font-size:12px">'.$row['weekday'].', '.$row['date'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['menutime'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['menutype'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['reptime'].'</font></td>
			<td style="font-family: courier new; font-size:12px"><center><form action="" method="post"><input type="hidden" name="list" value="View Assignment"><input type="hidden" name="classrm" value="'.$myclass.'"><input type="hidden" name="id" value="'.$row['id'].'"><button type="submit" style="border: 0px; background-color:white; cursor:pointer"><i class="fa fa fa-ellipsis-v" style="color: green; font-size: 17px"></i></button></form></center></td>
			</tr>';

	}

echo '</table>';

}

else {
	
	echo 'There is no result to display yet';	
}
?>

</div>
<div class="w3-quarter w3-padding-xlarge"></div>
</div>