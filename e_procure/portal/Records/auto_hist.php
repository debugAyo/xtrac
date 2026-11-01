<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>eHealthcare - Patient Records</title>
</head>

<body>
<td valign="top" colspan="9" rowspan="2" style="border: 1px dotted #008080">
			<div align="center">
			&nbsp;</div>
</td>
<div align="center">
<table cellpadding="0" cellspacing="0" width="516" height="371">
	<!-- MSTableType="layout" -->
	<tr>
		<td>&nbsp;</td>
		<td valign="top" bgcolor="#ECF9F2" colspan="2">
		<p align="center">
		<img border="0" src="../genmed/med_logo.gif" width="50" height="59"></td>
		<td height="67">&nbsp;</td>
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
		<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
			<!-- MSCellFormattingTableID="1" -->
			<tr>
				<td valign="top" height="100%">
				<!-- MSCellFormattingType="content" -->
				<?php
echo '<font size=2, face=tahoma>';
$pat_id = $_POST['pat_id'];
$dt_adm = $_POST['dt_adm'];
$phy_surg= $_POST['phy_surg'];
$wrd_cnc = $_POST['wrd_cnc'];
$dt_disc = $_POST['dt_disc'];
$diag = $_POST['diag'];
$ref_by = $_POST['ref_by'];

if (!$pat_id || !$dt_disc || !$diag || !$ref_by)
{
echo 'You cannot send empty values.';
exit;
}
$db = mysql_connect("localhost", "root","");
if (!$db)
{
echo 'Cannot connect to database.';
exit;
}
mysql_select_db("hospital",$db);
$sql = "INSERT INTO e_history (date_adm, patientid, physician, ward, date_disc, diagnosis, referred)
VALUES ('$dt_adm','$pat_id','$phy_surg','$wrd_cnc','$dt_disc','$diag','$ref_by')";
$result = mysql_query($sql);
echo '<font size=2, face=corbel><center>';
echo "<b>Below is the Patient's Referral Proof</b>";
echo '</font>';
echo '</td></tr>';

?></td>
			</tr>
			<tr>
				<td bgcolor="#999966" height="4" width="100%">
				<img alt="" width="1" height="4" src="MsSpacer.gif"></td>
			</tr>
		</table>
		</td>
		<td height="31">&nbsp;</td>
		</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td height="13"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td valign="top" colspan="2"><table border=1 width="423" id="table1">
						<tr>
							<td width=160 align="center" style="border: 1px solid #008000">

<?php
echo '<font size=2, face=arial>';
$db = mysql_connect("localhost", "root","");
if (!$db)
{
echo 'Cannot connect to database.';
exit;
}
mysql_select_db("hospital",$db);
$sql = "SELECT * FROM e_registration WHERE serial= '$_POST[pat_id]'";
$result = mysql_query($sql);
while($rows=mysql_fetch_array($result)){
echo '<table width="450" border="0" align="center" cellpadding="0" cellspacing="1">';
echo "<tr bgcolor='#FFFF99'>
<td><font face=arial, size='1'><center><b>Patient's ID</td><td colspan=2><font face=arial, size='1'><center><b>Fullname</td><td><font face=arial, size='1'><center><b>Phone No</b></td><td><font face=arial, size='1'><center><b>Occupation</b></td><td><font face=arial, size='1'><center><b>Address</b></td><td><font face=arial, size='1'><center><b>Age</b></td>
</tr>";
echo "<tr bgcolor='#009933'>
<td><font face=Courier New, size='1' color='#ffffff'><center>".$rows['serial']."</td><td colspan=2><font face=Courier New, size='1' color='#ffffff'><center>".$rows['surname']."".$rows['other']."</td><td><font face=Courier New, size='1' color='#ffffff'><center>".$rows['phone']."</td><td><font face=Courier New, size='1' color='#ffffff'><center>".$rows['work']."</td><td><font face=Courier New, size='1' color='#ffffff'><center>".$rows['patient_add']."</td><td><font face=Courier New, size='1' color='#ffffff'><center>".$rows['maturity']."</td>
</tr>";
}
 
echo "</font>";
echo '</table>';
?>

				
</td>
		</tr>
</table>
		</td>
		<td height="53">&nbsp;</td>
		</tr>
	<tr>
		<td>&nbsp;</td>
		<td valign="top" bgcolor="#ECF9F2" colspan="2">
		<table border=1 width="423" id="table2">
						<tr>
							<td width=160 align="center" style="border: 1px solid #008000">

<?php
echo '<font size=2, face=arial>';
$db = mysql_connect("localhost", "root","");
if (!$db)
{
echo 'Cannot connect to database.';
exit;
}
mysql_select_db("hospital",$db);
$result = mysql_query("SELECT * FROM e_history WHERE patientid='$_POST[pat_id]'",$db);
while ($myrow = mysql_fetch_array($result))
{ 
echo '<tr><td width=160 style="border: 1px solid #008000" bgcolor=#0066CC><span style="font-weight: 700">
							<font face="arial" color="#ffffff" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#ffffff">Date of Admission:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=Courier New>';
echo $myrow["date_adm"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Physician or Surgeon:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=Courier New>';
echo $myrow["physician"];
echo '</td></tr>';

echo '<tr><td width=160 bgcolor="#FF8962" style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Ward or Clinic:</font></td>
							<td width=114 bgcolor="#FF8962" style="border: 1px solid #008000">';
echo '<font size=2, face=Courier New>';
echo $myrow["ward"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Date Discharged:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=Courier New>';
echo $myrow["date_disc"];
echo '</td></tr>';

echo '<tr><td width=160 bgcolor="#FF8962" style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Medical Diagnosis:</font></td>
							<td width=114 bgcolor="#FF8962" style="border: 1px solid #008000">';
echo '<font size=2, face=Courier New>';
echo $myrow["diagnosis"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Referred By:</font></td>
							<td width=114 style="border: 1px solid #008000">';
echo '<font size=2, face=Courier New>';
echo $myrow["referred"];
echo '</font>';
echo '</td></tr>';
}
?>							
</td>
		</tr>
</table>
		</td>
		<td height="163">&nbsp;</td>
		</tr>
	<tr>
		<td width="29">&nbsp;</td>
		<td valign="top" width="36" bgcolor="#CCFF66">
<input type="button" value="Print" onClick="window.print()" style="border-style:solid; border-width:1px; font-family: Corbel; font-size: 8pt"></td>
		<td valign="top" bgcolor="#CCFF66" width="424">
		<table cellpadding="0" cellspacing="0" width="51" height="21">
			<!-- MSTableType="layout" -->
			<tr>
				<td valign="top" height="19" bgcolor="#F5F5F5">
				<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
					<!-- MSCellFormattingTableID="2" -->
					<tr>
						<td bgcolor="#333333" colspan="3" height="1">
						<img alt="" width="1" height="1" src="MsSpacer.gif"></td>
					</tr>
					<tr>
						<td bgcolor="#333333" width="1">
						<img alt="" width="1" height="1" src="MsSpacer.gif"></td>
						<td valign="top" bgcolor="#F5F5F5" width="100%">
						<!-- MSCellFormattingType="content" -->
						<p align="center">
						<font style="font-size: 9pt" face="Corbel">
						<a style="text-decoration: none" href="prev_print_all.php">
						<font color="#000000">Next</font></a></font></td>
						<td bgcolor="#333333" height="100%" width="2">
						<img alt="" width="1" height="1" src="MsSpacer.gif"></td>
					</tr>
					<tr>
						<td bgcolor="#333333" colspan="3" height="1">
						<img alt="" width="1" height="1" src="MsSpacer.gif"></td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td height="2" width="51"></td>
			</tr>
		</table>
		</td>
		<td width="27" height="31">&nbsp;</td>
		</tr>
</table>
</div>
</body>

</html>