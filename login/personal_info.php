
<div class="w3-row-paddding">
<div class="w3-threequarter w3-border w3-padding-xlarge">
<?php
$appcode = $_POST['appcode'];
include '../link/connect.php';
$date = date("m-Y");


$sql = "SELECT * FROM documentation WHERE app_no = '$appcode'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0)
{

while ($row = mysqli_fetch_array($result)) {
		
	echo '<img src="../application/'.$row['passport'].'" width="25%" style="margin-right:0px"><hr width="80%">';
	
}
}
/* filter result by curent month and year and preview in descending order*/

//$sql = "SELECT *, COUNT(id) FROM schedule GROUP BY pname, sname, email, platform, ctname, class, date, time HAVING email='$phone' && date LIKE '%$date%' ORDER BY date DESC";

$sql = "SELECT * FROM user_login WHERE app_no = '$appcode'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0)
{

echo '<p><button class="login-btn w3-light-green w3-text-black"><i class="fa fa-info-circle"></i> Detailed Information </button></p>';

while ($row = mysqli_fetch_array($result)) {
	
	if ($row['reg_status'] == '0') {
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

echo '<table width="100%" cellspacing="0" > 
			
			<tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Reg No</th><td style="font-family: courier new; font-size:12px">'.$row['app_no'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Name</th><td style="font-family: courier new; font-size:12px">'.$row['name'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Category</th><td style="font-family: courier new; font-size:12px">'.$row['privilege'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Sport Type</th><td style="font-family: courier new; font-size:12px">'.$row['spec_sport'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Cub / Team</th><td style="font-family: courier new; font-size:12px">'.$row['club_name'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Email address</th><td style="font-family: courier new; font-size:14px; text-decoration:none"><a href="mailto:'.$row['email'].'" style="text-decoration:none">'.$row['email'].'</a></font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Phone No</th><td style="font-family: courier new; font-size:12px">'.$row['phone'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Address</th><td style="font-family: courier new; font-size:12px">'.$row['address'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">State of Origin</th><td style="font-family: courier new; font-size:12px">'.$row['my_state'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Local Govt.</th><td style="font-family: courier new; font-size:12px">'.$row['my_lga'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Date of Birth</th><td style="font-family: courier new; font-size:12px">'.$row['date_ob'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Marital Status</th><td style="font-family: courier new; font-size:12px">'.$row['marital'].'</font></td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Gender</th><td style="font-family: courier new; font-size:12px">'.$row['gender'].'</td>	</tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Date Registered</th><td style="font-family: courier new; font-size:12px">'.$row['regdate'].'</td></tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px">Status</th><td class="'.$color.'" style="font-family: courier new; font-size:12px">'.$status.'</td>
			
			</tr>';

	}


echo '</table>';		
$sql = "SELECT * FROM documentation WHERE app_no = '$appcode'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0)
{

while ($row = mysqli_fetch_array($result)) {
		
	echo '<p><iframe src="../application/'.$row['credential'].'" width="100%" style="margin-right:0px"><hr width="80%"></iframe></p>
			<p><iframe src="../application/'.$row['nin_cert'].'" width="100%" style="margin-right:0px"><hr width="80%"></iframe></p>
			<p><iframe src="../application/'.$row['testimonial'].'" width="100%" style="margin-right:0px"><hr width="80%"></iframe></p>
			<p><iframe src="../application/'.$row['award'].'" width="100%" style="margin-right:0px"><hr width="80%"></iframe></p>
			<p><iframe src="../application/'.$row['pay_slip'].'" width="100%" style="margin-right:0px"><hr width="80%"></iframe></p>
	
	';
	
}
}
echo '<center><form action="" method="post" id="myForm">
<input type="hidden" name="list" value="Official Remark" onchange="this.form.submit()">
<input type="hidden" name="appcode" value="'.$appcode.'" onchange="this.form.submit()">	
<select class="w3-pink w3-text-white"  id="myremark" name="myremark" onchange="this.form.submit()" style="border: 0px solid #FFF; width:20%"> 
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
<div class="w3-quarter w3-padding-large"><h3 style="color:black"><i class="fa fa-exclamation-triangle" style="font-size:27px;color:orange"></i> Please Note!</h3>
<p style="font-size:14px; color: grey">When your status shows "Inactive" it means, you have not been completely profiled. However, to correct this, you need to click on
the "Documentation" Tab, to upload all the required documents, and make the compulsory payment of N10,000 only for processing.</p><p style="font-size:14px; color: grey"> If the information submitted are consistent and in alignment with 
with the policies of the Federal Ministry of Sports Development, then you can become an "Active" candidate.</p>
</div>
</div>