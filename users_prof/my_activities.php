
<div class="w3-row-paddding">
<div class="w3-threequarter w3-border w3-padding-xlarge">
<?php
$adm_no = $_POST['adm_no'];
include '../link/connect.php';
$date = date("m-Y");


//$sql = "SELECT * FROM class_acts WHERE admissionno = '$adm_no' && actdate LIKE '%$date%'";

/* filter result by curent month and year and preview in descending order*/

//$sql = "SELECT *, COUNT(id) FROM schedule GROUP BY pname, sname, email, platform, ctname, class, date, time HAVING email='$phone' && date LIKE '%$date%' ORDER BY date DESC";

$sql = "SELECT * FROM class_acts WHERE admissionno = '$adm_no'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0)
{

echo '<p><button class="login-btn w3-green w3-text-white"><i class="fa fa-info-circle"></i> Performance Analysis </button></p>';

while ($row = mysqli_fetch_array($result)) {
	
/*	if ($row['reg_status'] == '0') {
		$status = 'Inactive';
	}
	
if ($row['reg_status'] == '1') {
	$status = 'Active';
}

if ($status == 'Active') {
	$color='w3-text-green';
}
if ($status == 'Inactive') {
	$color='w3-text-red';
}
*/
if ($row['rate_one'] == '1') {
	$color= 'w3-text-light-grey';
}
if ($row['rate_one'] == '2') {
	$color= 'w3-text-grey';
}
if ($row['rate_one'] == '3') {
	$color= 'w3-text-black';
}
if ($row['rate_one'] == '4') {
	$color= 'w3-text-yellow';
}
if ($row['rate_one'] == '5') {
	$color= 'w3-text-orange';
}




echo '<table width="100%" cellspacing="0" > 
	
		
			<tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Date</th><td style="font-family: courier new; font-size:12px">'.$row['actdate'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Reg. No.</th><td style="font-family: courier new; font-size:12px">'.$row['admissionno'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Name</th><td style="font-family: courier new; font-size:12px">'.$row['studentname'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Class</th><td style="font-family: courier new; font-size:12px">'.$row['classroom'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Subject</th><td style="font-family: courier new; font-size:12px">'.$row['subject'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Topic</th><td style="font-family: courier new; font-size:12px">'.$row['teachingobj'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Comments</th><td style="font-family: courier new; font-size:12px">'.$row['act_rmk'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Ratings</th><td style="font-family: courier new; font-size:17px">'.$row['rate_one'].' <i class="fa fa-star '.$color.'"></i></font></td></tr>
			</tr>';

	}


echo '</table>';		
$sql = "SELECT * FROM class_acts WHERE admissionno = '$adm_no' ";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0)
{

while ($row = mysqli_fetch_array($result)) {
		
	echo '<p><iframe src="../staff_prof/'.$row['act_content'].'" width="100%" style="margin-right:0px"><hr width="80%"></iframe></p>
			<p><iframe src="../staff_prof/'.$row['act_video'].'" width="100%" style="margin-right:0px"><hr width="80%"></iframe></p>

	
	';
	
}
}
echo '<center><form action="" method="post" id="myForm">
<input type="hidden" name="list" value="Official Remark" onchange="this.form.submit()">
<input type="hidden" name="appcode" value="'.$appcode.'" onchange="this.form.submit()">	
<label>Parent, kindly comment on this update using the form field below </label>
<textarea name="par_fb" rows="4" cols="4" placeholder="Feedback from Parent to Teacher"></textarea>
<select class="w3-green w3-text-white"  id="myremark" name="myremark" onchange="this.form.submit()" style="border: 0px solid #FFF; width:20%"> 
<option value="">Remarks</option>
<option value="1">Approved</option>
<option value="0">Denied</option>
</select>
</form></center>';		
}
else{
echo '<p style="font-size: 24px;">So sorry, there is no data to display</p>';
}
?>
<script>
$(document).ready(function() {
  $('#mySelect').change(function() {
    $('#myForm').submit();
  });
});
</script>
</div>
<div class="w3-quarter w3-padding-large" >
<p style="color:black; cursor: pointer; /*font-style: italic;*/ font-size:14px; font-family: arial black" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1200">Please note that the class update is meant to create a handshake between teachers and parents regarding the class performance of their wards. </p>
<p style="color:black; cursor: pointer;" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1200">The collaboration will ensure each party's active participation on the child's mental, emotional and psychological development.</p>
</div>
</div>