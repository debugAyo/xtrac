<?php
$mycateg = $_POST['mycateg'];
//$list= $_POST['list'];
//echo $list;
//echo $myselect;
?>




<div class="w3-row-paddding">
<p style="font-family:arial"><button class="login-btn w3-light-green w3-text-black"><i class="fa fa-info-circle"></i> Manage Assets </button></p>
<div class="w3-col w3-container m3 l3">
<form id="myForm" action="" method="post">
<input type="hidden" name="list" value="Track by Status" onchange="this.form.submit()">	
<select class="w3-grey w3-text-white"  id="myStatus" name="mystatus" onchange="this.form.submit()" style="border: 0px solid #FFF; width:95%">
<option value="">Track by Status</option>
<option>Active</option>
<option>Obsolete</option>
</select></form>
</div>
<div class="w3-col w3-container m3 l3"><form id="myForm" action="" method="post">
<input type="hidden" name="list" value="Track by Category" onchange="this.form.submit()">	
<select class="w3-grey w3-text-white"  id="mycateg" name="mycateg" onchange="this.form.submit()" style="border: 0px solid #FFF; width:95%"> 
<option value="">Track by Category</option>
<option>Buildings</option>
	<option>Consumables</option>
	<option>Electronics Appliances</option>
	<option>Furniture</option>
	<option>IT Infrastructure</option>
	<option>Lands</option>
	<option>Plant and Equipment</option>
	<option>Vehicles</option>
</select>
</form>

<script>
$(document).ready(function() {
  $('#myStatus').change(function() {
    $('#myForm').submit();
  });
});
</script>

</div>
<div class="w3-col w3-container m3 l3">

<form id="myForm" action="" method="post">
<input type="hidden" name="list" value="Track by ID" onchange="this.form.submit()">
<input type="text" name="mylabel" value="" class="w3-grey w3-text-white" onchange="this.form.submit()" placeholder="Track by ID" style="border: 0px solid #FFF; width:95%">
</form>

</div>
<div class="w3-col w3-container m3 l3">
</div></div>
<div class="w3-row-padding">
<div class="w3-col  w3-padding">
<?php
include '../link/connect.php';
$date = date("m-Y");

/* filter result by curent month and year and preview in descending order*/

//$sql = "SELECT * FROM user_login WHERE spec_sport LIKE '%$spec%' && reg_status='1'";

$sql = "SELECT * FROM additem WHERE category = '$mycateg' ORDER BY devname ASC";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0)
{



echo '<table width="100%" cellspacing="0" >
			<tr>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px" class="w3-light-green">Asset ID</th>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px" class="w3-light-green">Category</th>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px" class="w3-light-green">Item Name</th>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px" class="w3-light-green">Brand</th>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px" class="w3-light-green">Date Procured</th>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px" class="w3-light-green">Location</th>
			<th  width="auto" style="padding:5px; text-align: left; font-size:12px" class="w3-light-green">Status</th>
			
			</tr>';

while ($row = mysqli_fetch_array($result)) {
	
				
	echo '<tr>
			<td style="font-family: courier new; font-size:12px">'.$row['devid'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['category'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['devname'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['manuname'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['prodate'].'</font></td>
			<td style="font-family: courier new; font-size:12px">'.$row['location'].'</td>
			<td style="font-family: courier new; font-size:12px">'.$row['devstat'].'</td>
			<td style="font-family: courier new; font-size:12px"><form action="" method="post"><input type="hidden" name="list" value="Preview Asset"><input type="hidden" name="dev_id" value="'.$row['devid'].'"><button type="submit"><i class="fa fa fa-ellipsis-h"></i></button></form></td>
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