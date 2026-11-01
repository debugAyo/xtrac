
<head>
<meta http-equiv="Content-Language" content="en-us">
</head>

<body background="../../img/wallpaper.jpg">

<div align="center">
	<table cellpadding="0" cellspacing="0" width="414" height="290" bgcolor="#FFFFFF">
		<!-- MSTableType="layout" -->
		<tr>
			<td>&nbsp;</td>
			<td valign="top">
			<p align="center">
			<img border="0" src="../../img/name.jpg" width="204" height="54"></td>
			<td height="62">&nbsp;</td>
		</tr>
		<tr>
			<td valign="top" colspan="3" height="25">
			<p align="center">
			<img border="0" src="../../img/bar.jpg" width="414" height="25"></td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td height="14"></td>
			</tr>
		<tr>
			<td></td>
			<td valign="top">
<input type="button" value="Print" onClick="window.print()" style="border-style:solid; border-width:1px; font-family: Corbel; font-size: 8pt"></td>
			<td height="21"></td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td height="14"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td valign="top">
			<div align="center">
			<table cellpadding="0" cellspacing="0" width="388" height="2">
				<!-- MSTableType="layout" -->
				<tr>
					<td width=386 align="center" style="border: 1px solid #008000" height="2"><?php
echo '<font size=2, face=arial>';
$title = $_POST['title'];$fname = $_POST['fname'];$sex= $_POST['sex'];
$randomfield = $_POST['randomfield'];$dept = $_POST['dept'];$dt_birth = $_POST['dt_birth'];
$phone = $_POST['phone'];$dt_emp = $_POST['dt_emp'];$con_add = $_POST['con_add'];
$st_org = $_POST['st_org'];$grd = $_POST['grd'];$nxkin = $_POST['nxkin'];$nxk_tel = $_POST['nxk_tel'];
$email = $_POST['email'];
if (!$randomfield || !$dept || !$phone || !$email || !$fname)
{
echo 'Important Details Omitted.<br>';
echo 'Staff ID, Department, Phone, E-mail or Name must be have been omitted';
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

$sql = "INSERT INTO admin_staff (title,fname,sex,staff_id,dept,dt_birth,phone,dt_emp,con_add,st_org,grdlev,nxtkin,email,nxktel)
VALUES ('$title','$fname','$sex','$randomfield','$dept','$dt_birth','$phone','$dt_emp','$con_add','$st_org','$grd','$nxkin','$email','$nxk_tel')";
$result = mysqli_query($conn, $sql);
//exit();
}

$result = mysqli_query($conn,"SELECT * FROM admin_staff WHERE staff_id='$_POST[randomfield]'");
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
			<td width="9">&nbsp;</td>
			<td width="398">&nbsp;</td>
			<td height="37" width="7">&nbsp;</td>
		</tr>
	</table>
</div>
