
<div class="w3-row-paddding w3-white">
<p style="font-family:arial"><button class="login-btn w3-yellow w3-text-black"><i class="fa fa-tasks"></i> View Assignment </button></p>
</div>


<div class="w3-row-padding">
<div class="w3-col w3-border w3-padding-large">
<?php
$classrm=$_POST['classrm'];
$id=$_POST['id'];

include '../link/connect.php';
//$date = date("m-Y");



/* filter result by curent month and year and preview in descending order*/

//$sql = "SELECT * FROM user_login WHERE spec_sport LIKE '%$spec%' && reg_status='1'";

//$sql = "SELECT subject_list.*, learning_proof.*  FROM subject_list INNER JOIN learning_proof ON subject_list.id = learning_proof.subjectId ";

$stmt = mysqli_prepare($conn, "SELECT * FROM assignments WHERE classroom=? && id=? ORDER BY date DESC ");
mysqli_stmt_bind_param($stmt, 'ss', $classrm, $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if(mysqli_num_rows($result) >0)
{


while ($row = mysqli_fetch_array($result)) {

			
	echo '<table width="100%" cellspacing="0" > 
			<tr ><th width="20%" class="w3-border-bottom w3-border-light-blue" style="font-size:14px; padding:8px; text-align:left">Date Posted</th><td class="w3-border-bottom w3-border-light-blue" style="font-family: courier new; font-size:12px">'.$row['date'].'</font></td></tr>
			<tr ><th width="20%" class="w3-border-bottom w3-border-light-blue" style="font-size:14px; padding:8px; text-align:left">Learning Areas</th><td class="w3-border-bottom w3-border-light-blue" style="font-family: courier new; font-size:12px">'.$row['subject'].'</font></td></tr>
			<tr ><th width="20%" class="w3-border-bottom w3-border-light-blue" style="font-size:14px; padding:8px; text-align:left">Submission Deadline</th><td class="w3-border-bottom w3-border-light-blue" style="font-family: courier new; font-size:12px">'.$row['deadline'].'. '.$row['timeline'].'</font></td></tr>
			</table>';
	echo '<iframe src="../staff_prof/'.$row['home_work'].'" width="100%"></iframe>';
	}
}
else{
echo '<p style="font-size: 24px;">So sorry, there is no data to display</p>';
}
?>
</div>
</div>