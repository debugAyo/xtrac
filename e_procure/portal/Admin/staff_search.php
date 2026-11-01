<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>HMO Client Manager - Staff Search</title>
</head>

<body background="../../img/wallpaper.jpg" style="background-attachment: fixed">

<div align="center">
	<table cellpadding="0" cellspacing="0" width="417" height="293" bgcolor="#FFFFFF">
		<!-- MSTableType="layout" -->
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="25">&nbsp;</td>
			</tr>
		<tr>
			<td valign="top" colspan="2" bgcolor="#008080">
			<p align="left" style="margin-left: 10px; margin-top: 10px">
			<font style="font-size: 9pt" color="#FFFFFF" face="Arial">HMO CLIENT 
			MANAGER </font></td>
			<td>&nbsp;</td>
			<td height="37">&nbsp;</td>
			</tr>
		<tr>
			<td valign="top" colspan="4" height="25" bgcolor="#008080">
			<p align="center">
			&nbsp;</td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td height="10"></td>
		</tr>
		<tr>
			<td></td>
			<td valign="top" colspan="2">
<input type="button" value="Print" onClick="window.print()" style="border-style:solid; border-width:1px; font-family: Corbel; font-size: 8pt"></td>
			<td height="19"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td height="13"></td>
			</tr>
		<tr>
			<td>&nbsp;</td>
			<td valign="top" colspan="2">
			<div align="center">
			<table cellpadding="0" cellspacing="0" width="388" height="2">
				<!-- MSTableType="layout" -->
				<tr>
					<td width=386 align="center" style="border: 1px solid #008000" height="2"><?php
echo '<font size=2, face=arial>';
$dept = $_POST['dept'];$phone = $_POST['phone'];
if (!$dept || !$phone)
{
echo 'Important Details Omitted.<br>';
echo 'Please type the correct phone number and select the right department';
exit;
}

include '../../connect.php';
//$conn = mysqli_connect("localhost", "root","");
//if (!$conn)
//{
//echo 'Cannot connect to database.';
//exit;
//}
//mysqli_select_db($conn,"hospital");


if ($dept == 'Admin') {
$result = mysqli_query($conn,"SELECT * FROM admin_staff WHERE phone='$_POST[phone]' && dept='$_POST[dept]'");
while ($myrow = mysqli_fetch_array($result))
{ 

//printf ("%s [%s]\n",$row["fname"],$row["staff_id"]);
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Staff PIN:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["staff_id"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Name:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["title"];
echo '&nbsp;&nbsp';
echo $myrow["fname"];
echo '</td></tr>';

echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Department:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["dept"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Phone No:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["phone"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Level:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["grdlev"];

echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">E-mail:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["email"];
echo '</td></tr>';
echo '</font>';

exit();
}


}



if ($dept == 'Account') {

$sql = "INSERT INTO account_staff (title,fname,sex,staff_id,dept,dt_birth,phone,dt_emp,con_add,st_org,grdlev,nxtkin,email,nxktel)
VALUES ('$title','$fname','$sex','$randomfield','$dept','$dt_birth','$phone','$dt_emp','$con_add','$st_org','$grd','$nxkin','$email','nxk_tel')";
$result = mysqli_query($conn, $sql);
//exit();
}
$result = mysqli_query($conn,"SELECT * FROM account_staff WHERE staff_id='$_POST[randomfield]'");
while ($myrow = mysqli_fetch_array($result))
{ 
//echo $myrow["fname"];
//printf ("%s [%s]\n",$row["fname"],$row["staff_id"]);

echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Staff PIN:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["staff_id"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Name:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["title"];
echo '&nbsp;&nbsp';
echo $myrow["fname"];
echo '</td></tr>';

echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Department:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["dept"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Phone No:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["phone"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Level:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["grdlev"];

echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">E-mail:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["email"];
echo '</td></tr>';
echo '</font>';

exit();
}
if ($dept == 'ICT') {

$sql = "INSERT INTO ict_staff (title,fname,sex,staff_id,dept,dt_birth,phone,dt_emp,con_add,st_org,grdlev,nxtkin,email,nxktel)
VALUES ('$title','$fname','$sex','$randomfield','$dept','$dt_birth','$phone','$dt_emp','$con_add','$st_org','$grd','$nxkin','$email','nxk_tel')";
$result = mysqli_query($conn, $sql);
//exit();
}

$result = mysqli_query($conn,"SELECT * FROM ict_staff WHERE staff_id='$_POST[randomfield]'");
while ($myrow = mysqli_fetch_array($result))
{ 
//echo $myrow["fname"];
//printf ("%s [%s]\n",$row["fname"],$row["staff_id"]);

echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Staff PIN:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["staff_id"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Name:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["title"];
echo '&nbsp;&nbsp';
echo $myrow["fname"];
echo '</td></tr>';

echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Department:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["dept"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Phone No:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["phone"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Level:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["grdlev"];

echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">E-mail:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["email"];
echo '</td></tr>';
echo '</font>';

exit();
}
if ($dept == 'Records') {

$sql = "INSERT INTO records_staff (title,fname,sex,staff_id,dept,dt_birth,phone,dt_emp,con_add,st_org,grdlev,nxtkin,email,nxktel)
VALUES ('$title','$fname','$sex','$randomfield','$dept','$dt_birth','$phone','$dt_emp','$con_add','$st_org','$grd','$nxkin','$email','nxk_tel')";
$result = mysqli_query($conn, $sql);
//exit();
}
$result = mysqli_query($conn,"SELECT * FROM records_staff WHERE staff_id='$_POST[randomfield]'");
while ($myrow = mysqli_fetch_array($result))
{ 
//echo $myrow["fname"];
//printf ("%s [%s]\n",$row["fname"],$row["staff_id"]);

echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Staff PIN:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["staff_id"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Name:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["title"];
echo '&nbsp;&nbsp';
echo $myrow["fname"];
echo '</td></tr>';

echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Department:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["dept"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Phone No:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["phone"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Level:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["grdlev"];

echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">E-mail:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["email"];
echo '</td></tr>';
echo '</font>';

exit();
}

//$sql="SELECT fname,staff_id FROM staff_details ORDER BY fname";
//$result=mysqli_query($conn,$sql);

//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
//printf ("%s [%s]\n",$row["fname"],$row["staff_id"]);

//$row=mysqli_fetch_array($result,MYSQLI_NUM);
//printf ("%s (%s)\n",$row[0],$row[1]);



//while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
//echo $row["fname"];

//}

//mysqli_close($conn);

//$result = mysqli_query($conn,"SELECT * FROM staff_details WHERE staff_id='$_POST[randomfield]'");
//while ($row = mysqli_fetch_array($result))
//{ 
//echo $myrow["fname"];
//printf ("%s [%s]\n",$row["fname"],$row["staff_id"]);
//}

?></td>
				</tr>
			</table>
			</div>
			<p>&nbsp;</td>
			<td height="117">&nbsp;</td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td height="14"></td>
		</tr>
		<tr>
			<td></td>
			<td valign="top" colspan="2">
&nbsp;</td>
			<td height="19"></td>
		</tr>
		<tr>
			<td width="14"></td>
			<td width="173"></td>
			<td width="217"></td>
			<td height="14" width="13"></td>
		</tr>
	</table>
</div>

</body>

</html>
