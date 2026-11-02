<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h4 class="w3-text-green w3-hover-text-red"><i class="fa fa-info-circle fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Asset's Information</h4>	

<?php 

//$id = $_POST['id'];

$sql="SELECT * FROM additem WHERE serial=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 's', $track_serial);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$rows=mysqli_fetch_array($result);

$id = $rows['sn'];

include '../link/connect.php';
 $stmt = mysqli_prepare($conn, "SELECT * FROM additem WHERE sn=?");
mysqli_stmt_bind_param($stmt, 's', $id);
mysqli_stmt_execute($stmt);
 $image = mysqli_stmt_get_result($stmt);

while($row = mysqli_fetch_assoc($image))
{

echo '<p><img src="'. $row['pic']. '" style="width:100%; height:auto; border:0px solid grey; padding:4px"></p>';

}
?>

<?php
$sql="SELECT * FROM additem WHERE serial=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 's', $track_serial);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
while ($row= mysqli_fetch_array($result))
{

echo '<table width="100%" border="0px">
<tr>
<th style="text-align:left; font-size:12px">Asset ID</th><td style="text-align:left; font-size:12px">'.$row["devid"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Name</th><td style="text-align:left; font-size:12px">'.$row["devname"].'</td></tr>
<tr><th style="text-align:left; font-size:12px">Manufactured Date</th><td style="text-align:left; font-size:12px">'. $row["mandate"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Asset Type</th><td style="text-align:left; font-size:12px">'. $row["devtype"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Manufacturer </th><td style="text-align:left; font-size:12px">'. $row["manuname"]. '</td></tr>


<tr><th style="text-align:left; font-size:12px">Serial No</th><td style="text-align:left; font-size:12px">'. $row["serial"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Date Procured</th><td style="text-align:left; font-size:12px">'. $row["prodate"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">CPU Model</th><td style="text-align:left; font-size:12px">'. $row["cpumode"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">CPU Speed</th><td style="text-align:left; font-size:12px">'. $row["corecpu"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">RAM Size</th><td style="text-align:left; font-size:12px">'. $row["ramsize"]. '</td></tr>

<tr><th style="text-align:left; font-size:12px">HDD Size</th><td style="text-align:left; font-size:12px">'. $row["hardrive"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Department</th><td style="text-align:left; font-size:12px">'. $row["deptmnt"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Location</th><td style="text-align:left; font-size:12px">'. $row["location"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Status</th><td style="text-align:left; font-size:12px">'. $row["devstat"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Dependency</th><td style="text-align:left; font-size:12px">'. $row["dependnt"]. '</td></tr>			

<tr><th style="text-align:left; font-size:12px">Waranty</th><td style="text-align:left; font-size:12px">'. $row["waranty"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Recommendation</th><td style="text-align:left; font-size:12px">'. $row["recommnd"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">Owner</th><td style="text-align:left; font-size:12px">'. $row["owner"]. '</td></tr>
<tr><th style="text-align:left; font-size:12px">End of Life</th><td style="text-align:left; font-size:12px">'. $row["endlife"]. '</td></tr>

</tr>
</table>';
}

?>
<p><button class="login-btn"><i class="fa fa-check fx-2a"></i></button></p>
<div class="w3-quarter">
</div>
</div>