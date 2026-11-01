<?php
$mysubject = $_POST['mysubject'];
//$list= $_POST['list'];
//echo $list;
//echo $myselect;
?>

<div class="w3-row-paddding">
<p style="font-family:arial"><button class="login-btn w3-yellow w3-text-black"><i class="fa fa-info-circle"></i> Manage My Activties </button></p>
<div class="w3-col w3-container m3 l3 w3-green">
<form id="myForm" action="" method="post">
<input type="hidden" name="list" value="No of Rows to Display" onchange="this.form.submit()">	
<select class="w3-green w3-text-white"  id="mySelect" name="myselect" onchange="this.form.submit()" style="border: 0px solid #FFF; width:95%">
<option value="">No of Rows to Display</option>
<option value="25">25</option>
<option value="50">50</option>
<option value="100">100</option>
<option value="500">500</option>

</select></form>
</div>
<div class="w3-col w3-container m3 l3 w3-purple">
<form id="myForm" action="" method="post">
<input type="hidden" name="list" value="Filter by Subject" onchange="this.form.submit()">
	
<select class="w3-purple w3-text-white"  id="mysubject" name="mysubject" onchange="this.form.submit()" style="border: 0px solid #FFF; width:95%"> 
<option value="">Filter by Subject</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM subject_list");
while($row = mysqli_fetch_array($result)) {

?>
<option value="<?php echo $row['subject_name'];?>"><?php echo $row["subject_name"];?></option>
<?php

}
?>
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
<div class="w3-col w3-container m3 l3 w3-pink">

<form id="myForm" action="" method="post">
<input type="hidden" name="list" value="Filter by Date" onchange="this.form.submit()">
<input type="date" name="mydate" id="mydate" class="date w3-pink w3-text-white" value="Filter by Date" onchange="this.form.submit()" style="border: 0px solid #FFF; width:95%">
	
</form>

</div>
<div class="w3-col w3-container m3 l3 w3-black">
<form id="myForm" action="" method="post">
<input type="hidden" name="list" value="Filter by Class" onchange="this.form.submit()">
	
<select class="w3-black w3-text-white"  id="myclass" name="myclass" onchange="this.form.submit()" style="border: 0px solid #FFF; width:95%"> 
<option value="">Filter by Class</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM class_list");
while($row = mysqli_fetch_array($result)) {

?>
<option value="<?php echo $row['class_name'];?>"><?php echo $row["class_name"];?></option>
<?php

}
?>
</select>
</form>
</div></div>


<div class="w3-row">
<div class="w3-col">
<?php
include '../link/connect.php';
$date = date("m-Y");

/* filter result by curent month and year and preview in descending order*/

$sql = "SELECT * FROM class_acts WHERE subject LIKE '%$mysubject%' && admissionno='$appcode' ORDER BY actdate DESC";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0)
{



echo '<p><table width="100%" cellspacing="0" >
			<tr>
			<th  width="auto" style="padding:10px; text-align: left; font-size:12px" class="w3-light-blue">No</th>
			<th  width="auto" style="padding:10px; text-align: left; font-size:12px" class="w3-light-blue">Name</th>
			<th  width="auto" style="padding:10px; text-align: left; font-size:12px" class="w3-light-blue">Teacher</th>
			<th  width="auto" style="padding:10px; text-align: left; font-size:12px" class="w3-light-blue">Class</th>
			<th  width="auto" style="padding:10px; text-align: left; font-size:12px" class="w3-light-blue">Subject</th>
			<th  width="auto" style="padding:10px; text-align: left; font-size:12px" class="w3-light-blue">Date</th>
						
			</tr>';

while ($row = mysqli_fetch_array($result)) {
			
	echo '<tr>
			<td style="font-family: courier new; font-size:12px">'.$row['admissionno'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['studentname'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['staffname'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['classroom'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['subject'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['actdate'].'</td>
			<td style="font-family: courier new; font-size:12px"><form action="" method="post"><input type="hidden" name="list" value="Preview"><input type="hidden" name="adm_no" value="'.$row['admissionno'].'"><button type="submit"><i class="fa fa fa-ellipsis-h"></i></button></form></td>
			</tr>';

	}

echo '</table></p>';		

			
}
else{
echo '<p style="font-size: 24px;">So sorry, there is no data to display</p>';
}
?>
</div>

</div>