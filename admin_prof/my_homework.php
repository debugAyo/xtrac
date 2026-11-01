
<div class="w3-row-paddding">
<div class="w3-threequarter w3-border w3-padding-xlarge">
<?php
$classid=$_POST['classid'];
$appcode=$_POST['appcode'];

include '../link/connect.php';
$date = date("m-Y");


$sql = "SELECT * FROM class_list WHERE classId='$classid' ";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0)
{


while ($row = mysqli_fetch_array($result)) {
	$classrm=$row['class_name'];
}
}
/* filter result by curent month and year and preview in descending order*/

//$sql = "SELECT * FROM user_login WHERE spec_sport LIKE '%$spec%' && reg_status='1'";

//$sql = "SELECT subject_list.*, learning_proof.*  FROM subject_list INNER JOIN learning_proof ON subject_list.id = learning_proof.subjectId ";

$sql = "SELECT * FROM assignments WHERE classroom='$classrm' ORDER BY date DESC ";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) >0)
{
	echo '<table width="100%" cellspacing="0" > 
	<tr>
			<th  class="w3-light-blue" width="auto" style="padding:5px; text-align: left; font-size:12px">Date</th>
			<th  class="w3-light-blue" width="auto" style="padding:5px; text-align: left; font-size:12px">Class</th>
			<th  class="w3-light-blue" width="auto" style="padding:5px; text-align: left; font-size:12px">Learning Area</th>
			<th  class="w3-light-blue" width="auto" style="padding:5px; text-align: left; font-size:12px">Deadline</th>
			<th  class="w3-light-blue" width="auto" ><i class="fa fa-tasks" style="padding:5px; text-align: left; font-size:17px; color: white"></i></th>
			</tr>';

echo '<p><button class="login-btn w3-green w3-text-white"><i class="fa fa-info-circle"></i> My Assignment </button></p>';

while ($row = mysqli_fetch_array($result)) {
	
echo '<tr>
			<td style="font-family: courier new; font-size:12px">'.$row['date'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['classroom'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['subject'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['deadline'].' by '.$row['timeline'].'</font></td>
			<td style="font-family: courier new; font-size:12px"><form action="" method="post"><input type="hidden" name="list" value="View Assignment"><input type="hidden" name="classrm" value="'.$classrm.'"><input type="hidden" name="id" value="'.$row['id'].'"><button type="submit" style="border: 0px; background-color:white; cursor:pointer"><i class="fa fa fa-ellipsis-h" style="color: green; font-size: 17px"></i></button></form></td>
			</tr>';

	}


echo '</table>';		
}
?>