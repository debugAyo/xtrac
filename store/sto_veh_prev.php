
<head>
<meta http-equiv="Content-Language" content="en-us">
</head>

<div align="left">
	<table cellpadding="0" cellspacing="0" width="783" height="249">
		<!-- MSTableType="layout" -->
		<tr>
			<td valign="top">
</td>
			<td height="44">&nbsp;</td>
		</tr>
		<tr>
			<td></td>
			<td height="21"></td>
		</tr>
		<tr>
			<td valign="top">
			<div align="center">
				<table cellpadding="0" cellspacing="0" width="587" height="149">
					<!-- MSTableType="layout" -->
					<tr>
						<td>&nbsp;</td>
						<td valign="top">
						<p style="margin-top: 10px"><?php 
echo '<font size=2, face=tahoma>';
//$id = $_POST['id'];

$sql="SELECT * FROM additem WHERE devid='$dev_id'";
$result=mysqli_query($conn,$sql);

$rows=mysqli_fetch_array($result);

$id = $rows['sn'];

//$password = 'test123';
 
//Hash it with BCRYPT.
//$passwordHashed = password_hash($pin, PASSWORD_BCRYPT);
//$emailHashed = password_hash($email, PASSWORD_BCRYPT);
 
//Print it out.
//echo $passwordHashed;
			include 'connect.php';
 $image = mysqli_query($conn,"SELECT * FROM additem WHERE sn='$id'");
// $image = mysqli_query($conn,"SELECT * FROM e_registration WHERE sn='31'");
while($row = mysqli_fetch_assoc($image))
{
//echo '<br>';
//echo '<img src="img.php?id='.$row["id"].'" width="150" height="150">';
echo '<p style="margin-left: 15px"; margin-top: 20px">';
echo '<left><img src="item_pic_rec.php?id='.$row["sn"].'" width="200" height="180" style="border: 0px solid #CCCCCC"></left></p>';
echo '<br>';
}
?>

<?php
$sql="SELECT * FROM additem WHERE devid='$dev_id'";
$result=mysqli_query($conn,$sql);
while ($myrow = mysqli_fetch_array($result))
{


echo '<tr><td bgcolor="#EEEEEE" width=180 style="border: 0px solid #999999"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 10pt">
							</font></span><p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font face="arial" style="font-weight: 700; font-size: 10pt" color="#333333">Device ID</font></td>
							<td bgcolor="#EEEEEE" width=350 style="border: 0px solid #999999">';
echo '<p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font size=2, face=arial>';
echo $myrow["devid"];
echo '</td></tr>';
echo '<tr><td width=180 style="border: 0px solid #999999"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 10pt">
							</font></span><p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font face="arial" style="font-weight: 700; font-size: 10pt" color="#333333">Name</font></td>
							<td width=350 style="border: 0px solid #999999">';
echo '<p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font size=2, face=arial>';
echo $myrow["devname"];
echo '</td></tr>';
echo '<tr><td bgcolor="#EEEEEE" width=180 style="border: 0px solid #999999"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 10pt">
							</font></span><p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font face="arial" style="font-weight: 700; font-size: 10pt" color="#333333">Make Year</font></td>
							<td bgcolor="#EEEEEE" width=350 style="border: 0px solid #999999">';
echo '<p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font size=2, face=arial>';
echo $myrow["makeyear"];
echo '</td></tr>';
echo '<tr><td width=180 style="border: 0px solid #999999"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 10pt">
							</font></span><p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font face="arial" style="font-weight: 700; font-size: 10pt" color="#333333">Vehicle Type</font></td>
							<td width=350 style="border: 0px solid #999999">';
echo '<p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font size=2, face=arial>';
echo $myrow["devtype"];

echo '</td></tr>';
echo '<tr><td bgcolor="#EEEEEE" width=180 style="border: 0px solid #999999"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 10pt">
							</font></span><p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font face="arial" style="font-weight: 700; font-size: 10pt" color="#333333">Manufacturer</font></td>
							<td bgcolor="#EEEEEE" width=350 style="border: 0px solid #999999">';
echo '<p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font size=2, face=arial>';
echo $myrow["manuname"];
echo '</td></tr>';
echo '<tr><td width=180 style="border: 0px solid #999999"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 10pt">
							</font></span><p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font face="arial" style="font-weight: 700; font-size: 10pt" color="#333333">VIN</font></td>
							<td width=350 style="border: 0px solid #999999">';
echo '<p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font size=2, face=arial>';
echo $myrow["vehin"];
echo '</td></tr>';
echo '<tr><td bgcolor="#EEEEEE" width=180 style="border: 0px solid #999999"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 10pt">
							</font></span><p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font face="arial" style="font-weight: 700; font-size: 10pt" color="#333333">Date Procured</font></td>
							<td bgcolor="#EEEEEE" width=350 style="border: 0px solid #999999">';
echo '<p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font size=2, face=arial>';
echo $myrow["prodate"];
echo '</td></tr>';
echo '<tr><td width=180 style="border: 0px solid #999999"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 10pt">
							</font></span><p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font face="arial" style="font-weight: 700; font-size: 10pt" color="#333333">Model</font></td>
							<td width=350 style="border: 0px solid #999999">';
echo '<p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font size=2, face=arial>';
echo $myrow["assmode"];
echo '</td></tr>';
echo '<tr><td bgcolor="#EEEEEE" width=180 style="border: 0px solid #999999"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 10pt">
							</font></span><p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font face="arial" style="font-weight: 700; font-size: 10pt" color="#333333">Department</font></td>
							<td bgcolor="#EEEEEE" width=350 style="border: 0px solid #999999">';
echo '<p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font size=2, face=arial>';
echo $myrow["deptmnt"];
echo '</td></tr>';
echo '<tr><td width=180 style="border: 0px solid #999999"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 10pt">
							</font></span><p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font face="arial" style="font-weight: 700; font-size: 10pt" color="#333333">Location</font></td>
							<td width=350 style="border: 0px solid #999999">';
echo '<p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font size=2, face=arial>';
echo $myrow["location"];
echo '</td></tr>';
echo '<tr><td bgcolor="#EEEEEE" width=180 style="border: 0px solid #999999"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 10pt">
							</font></span><p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font face="arial" style="font-weight: 700; font-size: 10pt" color="#333333">Status</font></td>
							<td bgcolor="#EEEEEE" =350 style="border: 0px solid #999999">';
echo '<p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font size=2, face=arial>';
echo $myrow["devstat"];
echo '</td></tr>';

echo '<tr><td width=180 style="border: 0px solid #999999"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 10pt">
							</font></span><p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font face="arial" style="font-weight: 700; font-size: 10pt" color="#333333">Waranty</font></td>
							<td width=350 style="border: 0px solid #999999">';
echo '<p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font size=2, face=arial>';
echo $myrow["waranty"];
echo '</td></tr>';
echo '<tr><td bgcolor="#EEEEEE" width=180 style="border: 0px solid #999999"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 10pt">
							</font></span><p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font face="arial" style="font-weight: 700; font-size: 10pt" color="#333333">Recommendation</font></td>
							<td bgcolor="#EEEEEE" width=350 style="border: 0px solid #999999">';
echo '<p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font size=2, face=arial>';
echo $myrow["recommnd"];
echo '</td></tr>';

echo '<tr><td width=180 style="border: 0px solid #999999"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 10pt">
							</font></span><p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font face="arial" style="font-weight: 700; font-size: 10pt" color="#333333">Owner</font></td>
							<td width=350 style="border: 0px solid #999999">';
echo '<p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font size=2, face=arial>';
echo $myrow["owner"];
echo '</td></tr>';
echo '<tr><td bgcolor="#EEEEEE" width=180 style="border: 0px solid #999999"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 10pt">
							</font></span><p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font face="arial" style="font-weight: 700; font-size: 10pt" color="#333333">End of Life</font></td>
							<td bgcolor="#EEEEEE" width=350 style="border: 0px solid #999999">';
echo '<p style="margin-left: 10px; margin-right: 2px; margin-top: 2px; margin-bottom: 2px"><font size=2, face=arial>';
echo $myrow["endlife"];
echo '</td></tr>';



echo '</font>';
}

?></td>
						<td height="122">&nbsp;</td>
						</tr>
					<tr>
						<td width="27">&nbsp;</td>
						<td width="536">&nbsp;</td>
						<td height="27" width="24">&nbsp;</td>
					</tr>
				</table>
			</div>
			</td>
			<td height="162">&nbsp;</td>
		</tr>
		<tr>
			<td width="754">&nbsp;</td>
			<td height="22" width="29">&nbsp;</td>
		</tr>
	</table>
</div>
