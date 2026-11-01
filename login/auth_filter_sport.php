<?php
$mysport = $_POST['mysport'];
//$list= $_POST['list'];
//echo $list;
//echo $myselect;
?>



<div class="w3-row-paddding">
<p><button class="login-btn w3-light-green w3-text-black"><i class="fa fa-info-circle"></i> Manage Users </button></p>
<div class="w3-col w3-container m3 l3">
<form id="myForm" action="" method="post">
<input type="hidden" name="list" value="Filter by State" onchange="this.form.submit()">	
<select class="w3-pink w3-text-white"  id="mySelect" name="myselect" onchange="this.form.submit()" style="border: 0px solid #FFF; width:95%">
<option value="">Filter by State</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM state");
while($row = mysqli_fetch_array($result)) {

?>
<option value="<?php echo $row['state'];?>"><?php echo $row["state"];?></option>
<?php

}
?>
</select></form>
</div>
<div class="w3-col w3-container m3 l3">
<form id="myForm" action="" method="post">
<input type="hidden" name="list" value="Filter by Gender" onchange="this.form.submit()">	
<select class="w3-pink w3-text-white"  id="mygender" name="mygender" onchange="this.form.submit()" style="border: 0px solid #FFF; width:95%"> </button>
<option value="">Filter by Gender</option>
<option>Female</option>
<option>Male</option>
</select>
</form>


<script>
$(document).ready(function() {
  $('#mySelect').change(function() {
    $('#myForm').submit();
  });
});
</script>

</div>
<div class="w3-col w3-container m3 l3">

<form id="myForm" action="" method="post">
<input type="hidden" name="list" value="Filter by Sport" onchange="this.form.submit()">
	
<select class="w3-pink w3-text-white"  id="mysport" name="mysport" onchange="this.form.submit()" style="border: 0px solid #FFF; width:95%"> 
<option value="">Filter by Sport</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM speciality WHERE category_id='1'");
while($row = mysqli_fetch_array($result)) {

?>
<option value="<?php echo $row['spec_name'];?>"><?php echo $row["spec_name"];?></option>
<?php

}
?>
</select>
</form>

</div>
<div class="w3-col w3-container m3 l3">
</div></div>
<div class="w3-row-padding">
<div class="w3-col w3-padding-large">
<?php
include '../link/connect.php';
$date = date("m-Y");

/* filter result by curent month and year and preview in descending order*/

//$sql = "SELECT * FROM user_login WHERE spec_sport LIKE '%$spec%' && reg_status='1' && gender = '$mygender'";

$sql = "SELECT * FROM user_login WHERE spec_sport = '$mysport' ORDER BY name ASC";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0)
{



echo '<table width="100%" cellspacing="0" >
			<tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px" class="w3-light-blue">Reg No</th>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px" class="w3-light-blue">Name</th>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px" class="w3-light-blue">Category</th>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px" class="w3-light-blue">Sport Type</th>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px" class="w3-light-blue">Email address</th>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px" class="w3-light-blue">Phone No</th>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px" class="w3-light-blue">Gender</th>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px" class="w3-light-blue">Status</th>
			
			</tr>';

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


			
	echo '<tr>
			<td style="font-family: courier new; font-size:12px">'.$row['app_no'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['name'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['privilege'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['spec_sport'].'</font></td>
			<td style="font-family: courier new; font-size:14px; text-decoration:none"><a href="mailto:'.$row['email'].'" style="text-decoration:none">'.$row['email'].'</a></font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['phone'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['gender'].'</td>
			<td class="'.$color.'" style="font-family: courier new; font-size:12px">'.$status.'</td>
			<td style="font-family: courier new; font-size:12px"><form action="" method="post"><input type="hidden" name="list" value="Preview"><input type="hidden" name="appcode" value="'.$row['app_no'].'"><button type="submit"><i class="fa fa fa-ellipsis-h"></i></button></form></td>
			</tr>';

	}

echo '</table>';		

			
}
else{
echo '<p style="font-size: 24px;">So sorry, there is no data to display</p>';
}
?>
</div>

</div>