<h4 class="w3-text-green w3-hover-text-red"><i class="fa fa-info-circle fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Asset's Information</h4>	

<?php 

//$id = $_POST['id'];

$sql="SELECT * FROM additem WHERE devid='$dev_id'";
$result=mysqli_query($conn,$sql);

$rows=mysqli_fetch_array($result);

$id = $rows['sn'];

include '../link/connect.php';
 $image = mysqli_query($conn,"SELECT * FROM additem WHERE sn='$id'");

while($row = mysqli_fetch_assoc($image))
{

echo '<p><img src="'. $row['pic']. '" style="width:100%; height:auto; border:0px solid grey; padding:4px"></p>';

}
?>



<?php

//$sql="SELECT * FROM additem WHERE category='Consumables' && devid='$dev_id'";
$sql="SELECT * FROM additem WHERE devid='$dev_id'";
$result=mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result))
{

echo '<table width="100%" border="0px">
<tr><td><h5>Hardware Information</h5></td></tr>
<tr><th style="text-align:left; font-size:12px">Asset ID</th><td style="text-align:left; font-size:12px">'.$row["devid"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Name</th><td style="text-align:left; font-size:12px">'.$row["devname"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Manufactured / Built Date</th><td style="text-align:left; font-size:12px">'.$row["mandate"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Asset Type</th><td style="text-align:left; font-size:12px">'.$row["devtype"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Manufacturer / Developer </th><td style="text-align:left; font-size:12px">'.$row["manuname"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Model</th><td style="text-align:left; font-size:12px">'.$row["assmode"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Serial No</th><td style="text-align:left; font-size:12px">'.$row["serial"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Date Procured</th><td style="text-align:left; font-size:12px">'.$row["prodate"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Department</th><td style="text-align:left; font-size:12px">'.$row["deptmnt"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Location</th><td style="text-align:left; font-size:12px">'.$row["location"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Status</th><td style="text-align:left; font-size:12px">'.$row["devstat"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Dependency</th><td style="text-align:left; font-size:12px">'.$row["dependnt"].'</td></tr>			
<tr><th style="text-align:left; font-size:12px">Waranty</th><td style="text-align:left; font-size:12px">'.$row["waranty"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Recommendation</th><td style="text-align:left; font-size:12px">'.$row["recommnd"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Owner</th><td style="text-align:left; font-size:12px">'.$row["owner"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">End of Life</th><td style="text-align:left; font-size:12px">'.$row["endlife"].'</td>
</tr>

</table>';


}

?>
<hr style="border:2px solid #000">

<?php
echo '<h4 class="w3-text-light-green w3-hover-text-black">Software Association</h4>';

$sql="SELECT * FROM software_ass WHERE devid='$dev_id'";
$result=mysqli_query($conn,$sql);


if ($result->num_rows < 1) {
	
	echo '<p class="w3-yellow" style="font-size:12px">There is no <b>Software image</b> to display</p>';
	
	
}

while ($rows=mysqli_fetch_array($result)) {

$id = $rows['sn'];
}

include '../link/connect.php';
 $image = mysqli_query($conn,"SELECT * FROM software_ass WHERE sn='$id'");

while($row = mysqli_fetch_assoc($image))
{

echo '<p><img src="'. $row['pic']. '" style="width:100%; height:auto; border:0px solid grey; padding:4px"></p>';

}


$sql="SELECT * FROM software_ass WHERE devid='$dev_id'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows < 1) {
	
	echo '<p  style="font-size:12px">There is no <b>Software information</b> to display</p>';
	
	
}
	
	
while ($row= mysqli_fetch_array($result))
{

echo '<table width="100%" border="0px">
<tr><td><h5>Software Information</h5></td></tr>
<tr>
<th style="text-align:left; font-size:12px">Asset ID</th><td style="text-align:left; font-size:12px">'.$row["devid"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Software Name</th><td style="text-align:left; font-size:12px">'.$row["devname"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Asset Type</th><td style="text-align:left; font-size:12px">'. $row["devtype"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Sotware Version</th><td style="text-align:left; font-size:12px">'. $row["softversion"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Released Date</th><td style="text-align:left; font-size:12px">'. $row["mandate"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Procurement Date</th><td style="text-align:left; font-size:12px">'. $row["prodate"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Activation Date</th><td style="text-align:left; font-size:12px">'. $row["activationdate"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Developer </th><td style="text-align:left; font-size:12px">'. $row["manuname"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Serial No</th><td style="text-align:left; font-size:12px">'. $row["serial"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Date Procured</th><td style="text-align:left; font-size:12px">'. $row["prodate"]. '</td></tr>
<tr><td><h5>Licensing Information</h5></td></tr>

<tr><th style="text-align:left; font-size:12px">License Type </th><td style="text-align:left; font-size:12px">'. $row["licence"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Number of Users </th><td style="text-align:left; font-size:12px">'. $row["lic_users"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">License Information</th><td style="text-align:left; font-size:12px">'. $row["licinfo"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Status</th><td style="text-align:left; font-size:12px">'. $row["status"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Recommendation</th><td style="text-align:left; font-size:12px">'. $row["recommnd"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">End of Life</th><td style="text-align:left; font-size:12px">'. $row["endlife"]. '</td></tr>
<tr><td><h5>Vendor Information</h5></td></tr>
<tr><th style="text-align:left; font-size:12px">Vendor Name</th><td style="text-align:left; font-size:12px">'. $row["vendor"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Phone Contact of Vendor</th><td style="text-align:left; font-size:12px">'. $row["phone"]. '</td></tr>


</tr>
</table>';
}
	
?>


<hr style="border:2px solid #000">

<?php
echo '<h4 class="w3-text-light-green w3-hover-text-black">Parts Association</h4>';


$sql="SELECT * FROM parts_ass WHERE devid='$dev_id'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows < 1) {
	
	echo '<p class="w3-yellow" style="font-size:12px">There is no <b>Parts / Accessory image</b> to display</p>';
	
	
}
while ($rows=mysqli_fetch_array($result)) {

$id = $rows['sn'];
}
include '../link/connect.php';
 $image = mysqli_query($conn,"SELECT * FROM parts_ass WHERE sn='$id'");

while($row = mysqli_fetch_assoc($image))
{

echo '<p><img src="'. $row['pic']. '" style="width:100%; height:auto; border:0px solid grey; padding:4px"></p>';

}


$sql="SELECT * FROM parts_ass WHERE devid='$dev_id'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows < 1) {
	
	echo '<p  style="font-size:12px">There is no <b>Parts / Accessory information</b> to display</p>';
	
	
}
while ($row= mysqli_fetch_array($result))
{

echo '<table width="100%" border="0px">
<tr><td><h5>Parts Information</h5></td></tr>
<tr>
<th style="text-align:left; font-size:12px">Asset ID</th><td style="text-align:left; font-size:12px">'.$row["devid"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Software Name</th><td style="text-align:left; font-size:12px">'.$row["devname"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Asset Type</th><td style="text-align:left; font-size:12px">'. $row["devtype"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Parts Model</th><td style="text-align:left; font-size:12px">'. $row["assmode"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Manufacture Date</th><td style="text-align:left; font-size:12px">'. $row["mandate"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Procurement Date</th><td style="text-align:left; font-size:12px">'. $row["prodate"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Manufacturer </th><td style="text-align:left; font-size:12px">'. $row["manuname"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Serial No.</th><td style="text-align:left; font-size:12px">'. $row["serial"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Batch No. </th><td style="text-align:left; font-size:12px">'. $row["batchno"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Date Procured</th><td style="text-align:left; font-size:12px">'. $row["prodate"]. '</td></tr>
<tr><td><h5>Parts Description</h5></td></tr>

<tr><th style="text-align:left; font-size:12px">Parts Description</th><td style="text-align:left; font-size:12px">'. $row["descript"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Lifecycle</th><td style="text-align:left; font-size:12px">'. $row["lifecycle"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Status</th><td style="text-align:left; font-size:12px">'. $row["status"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Recommendation</th><td style="text-align:left; font-size:12px">'. $row["recommnd"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">End of Life</th><td style="text-align:left; font-size:12px">'. $row["endlife"]. '</td></tr>
<tr><td><h5>Vendor Information</h5></td></tr>
<tr><th style="text-align:left; font-size:12px">Vendor Name</th><td style="text-align:left; font-size:12px">'. $row["vendor"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Phone Contact of Vendor</th><td style="text-align:left; font-size:12px">'. $row["phone"]. '</td></tr>


</tr>
</table>';
}

?>

<hr style="border:2px solid #000">

<?php
echo '<h4 class="w3-text-light-green w3-hover-text-black">Invoice Association</h4>';


$sql="SELECT * FROM invoice_ass WHERE devid='$dev_id'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows < 1) {
	
	echo '<p class="w3-yellow" style="font-size:12px">There is no <b>Invoice image</b> to display</p>';
	
	
}
while ($rows=mysqli_fetch_array($result)) {

$id = $rows['sn'];
}
include '../link/connect.php';
 $image = mysqli_query($conn,"SELECT * FROM invoice_ass WHERE sn='$id'");

while($row = mysqli_fetch_assoc($image))
{

//echo '<p><img src="'. $row['pic']. '" style="width:100%; height:auto; border:0px solid grey; padding:4px"></p>';
echo '<iframe src="'. $row['pic']. '" width="100%" height="400px" title="W3Schools Free Online Web Tutorials"></iframe>';

}


$sql="SELECT * FROM invoice_ass WHERE devid='$dev_id'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows < 1) {
	
	echo '<p  style="font-size:12px">There is no <b>Invoice information</b> to display</p>';
	
	
}
while ($row= mysqli_fetch_array($result))
{

echo '<table width="100%" border="0px">
<tr><td><h5>Invoice Information</h5></td></tr>
<tr>
<th style="text-align:left; font-size:12px">Asset ID</th><td style="text-align:left; font-size:12px">'.$row["devid"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Order No.</th><td style="text-align:left; font-size:12px">'.$row["orderno"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Invoice No.</th><td style="text-align:left; font-size:12px">'. $row["invoiceno"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Delivery Date</th><td style="text-align:left; font-size:12px">'. $row["delvrydate"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Description of Goods / Services</th><td style="text-align:left; font-size:12px">'. $row["descript"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Date Posted</th><td style="text-align:left; font-size:12px">'. $row["curdate"]. '</td></tr>

<tr><td><h5>Vendor / Contractor Details</h5></td></tr>

<tr><th style="text-align:left; font-size:12px">Name of Vendor / Contractor </th><td style="text-align:left; font-size:12px">'. $row["vendor"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Phone Contact</th><td style="text-align:left; font-size:12px">'. $row["phone"]. '</td></tr>

<tr><td><h5>Official Information</h5></td></tr>

<tr><th style="text-align:left; font-size:12px">Posted by </th><td style="text-align:left; font-size:12px">'. $row["loguser"]. '</td></tr>


</tr>
</table>';
}

?>

<hr style="border:2px solid #000">

<?php
echo '<h4 class="w3-text-light-green w3-hover-text-black">Contract Association</h4>';


$sql="SELECT * FROM Contract_ass WHERE devid='$dev_id'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows < 1) {
	
	echo '<p class="w3-yellow" style="font-size:12px">There is no <b>Contract image</b> to display</p>';
	
	
}
while ($rows=mysqli_fetch_array($result)) {

$id = $rows['sn'];
}
include '../link/connect.php';
 $image = mysqli_query($conn,"SELECT * FROM Contract_ass WHERE sn='$id'");

while($row = mysqli_fetch_assoc($image))
{
echo '<h5>Award Letter</h5>';
//echo '<p><img src="'. $row['pic']. '" style="width:100%; height:auto; border:0px solid grey; padding:4px"></p>';
echo '<iframe src="'. $row['pic']. '" width="100%" height="400px" title="W3Schools Free Online Web Tutorials"></iframe>';

}


$sql="SELECT * FROM Contract_ass WHERE devid='$dev_id'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows < 1) {
	
	echo '<p  style="font-size:12px">There is no <b>Contract information</b> to display</p>';
	
	
}
while ($row= mysqli_fetch_array($result))
{

echo '<table width="100%" border="0px">
<tr><td><h5>Contract Information</h5></td></tr>
<tr>
<th style="text-align:left; font-size:12px">Asset ID</th><td style="text-align:left; font-size:12px">'.$row["devid"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Vendor/Contractor ID</th><td style="text-align:left; font-size:12px">'.$row["vendoregno"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Contract Title</th><td style="text-align:left; font-size:12px">'.$row["contractitle"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Support Services</th><td style="text-align:left; font-size:12px">'.$row["sla"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Delivery Date</th><td style="text-align:left; font-size:12px">'. $row["delvrydate"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Description of Goods / Services</th><td style="text-align:left; font-size:12px">'. $row["descript"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Date Posted</th><td style="text-align:left; font-size:12px">'. $row["curdate"]. '</td></tr>

<tr><td><h5>Vendor / Contractor Details</h5></td></tr>

<tr><th style="text-align:left; font-size:12px">Name of Vendor / Contractor </th><td style="text-align:left; font-size:12px">'. $row["vendor"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Phone Contact</th><td style="text-align:left; font-size:12px">'. $row["phone"]. '</td></tr>

<tr><td><h5>Official Information</h5></td></tr>

<tr><th style="text-align:left; font-size:12px">Posted by </th><td style="text-align:left; font-size:12px">'. $row["loguser"]. '</td></tr>


</tr>
</table>';
}

?>
<p><button class="login-btn"><i class="fa fa-check fx-2a"></i></button></p>