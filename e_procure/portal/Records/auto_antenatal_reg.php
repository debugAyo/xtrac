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
<table cellpadding="0" cellspacing="0" width="650" height="371">
	<!-- MSTableType="layout" -->
	<tr>
		<td>&nbsp;</td>
		<td valign="top" bgcolor="#ECF9F2" colspan="2">
		<p align="center">
		<img border="0" src="med_logo.gif" width="50" height="59"></td>
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
$hus_job = $_POST['hus_job'];
$dt_book = $_POST['dt_book'];
$grav = $_POST['grav'];
$par = $_POST['par'];
$elemp = $_POST['elemp'];
$edeeo = $_POST['edeeo'];
$fam_hist = $_POST['fam_hist'];
$prev_preg = $_POST['prev_preg'];
$yr1 = $_POST['yr1'];
$yr2 = $_POST['yr2'];
$dur1 = $_POST['dur1'];
$dur2 = $_POST['dur2'];
$mod_del1 = $_POST['mod_del1'];
$mod_del2 = $_POST['mod_del2'];
$wt1 = $_POST['wt1'];
$wt2 = $_POST['wt2'];
$seks1 = $_POST['seks1'];
$seks2 = $_POST['seks2'];
$ali_dea1 = $_POST['ali_dea1'];
$ali_dea2 = $_POST['ali_dea2'];

if (!$pat_id || !$dt_book)
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
$sql = "INSERT INTO e_antenatalreg (patient_id, date_book, hus_work, gravida, parity, lmp, edo, famhistory, prepreg, year1, year2, durat1, durat2, model1, model2, weight1, weight2, sex1, sex2, alived1, alived2)
VALUES ('$pat_id','$dt_book','$hus_job','$grav','$par','$elemp','$edeeo','$fam_hist','$prev_preg','$yr1','$yr2','$dur1','$dur2','$mod_del1','$mod_del2','$wt1','$wt2','$seks1','$seks2','$ali_dea1','$ali_dea2')";
$result = mysql_query($sql);
echo '<font size=2, face=corbel><center>';
echo 'Your <b>Details</b> are <b>Previewed</b> below';
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
		<td valign="top" colspan="2"><table border=0 width="650" id="table1">
						<tr>
							<td width=630 align="center" style="border: 0px solid #008000"><?php
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
echo '<table width="630" border="0" align="center" cellpadding="0" cellspacing="1">';
echo "<tr bgcolor='#FFFF99'>
<td><font face=arial, size='2'><center><b>Patient's ID</td><td colspan=2><font face=arial, size='2'><center><b>Fullname</td><td><font face=arial, size='2'><center><b>Phone No</b></td><td><font face=arial, size='2'><center><b>Occupation</b></td><td><font face=arial, size='2'><center><b>Address</b></td><td><font face=arial, size='2'><center><b>Age</b></td>
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
		<td height="41">&nbsp;</td>
		</tr>
	<tr>
		<td>&nbsp;</td>
		<td valign="top" colspan="2" bgcolor="#ECF9F2"><table border=0 width="650" id="table3">
						<tr>
							<td width=630 align="center" style="border:0px solid #008000"><?php

$result = mysql_query("SELECT * FROM e_antenatalreg WHERE patient_id='$_POST[pat_id]'",$db);
while ($myrow = mysql_fetch_array($result))
{ 
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">ANC No:</font></td>
							<td width=200 style="border: 1px solid #008000">';
echo '<font size=2, face=Courier New>';
echo $myrow["sn"] + $myrow["patient_id"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Date of Booking:</font></td>
							<td width=200 style="border: 1px solid #008000">';
echo '<font size=2, face=Courier New>';
echo $myrow["date_book"];
echo '</td></tr>';
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Husband Work:</font></td>
							<td width=200 style="border: 1px solid #008000">';
echo '<font size=2, face=Courier New>';
echo $myrow["hus_work"];
echo '</td></tr>';

echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">GRAVIDA:</font></td>
							<td width=200 style="border: 1px solid #008000">';
echo '<font size=2, face=Courier New>';
echo $myrow["gravida"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">PARITY:</font></td>
							<td width=200 style="border: 1px solid #008000">';
echo '<font size=2, face=Courier New>';
echo $myrow["parity"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">LMP:</font></td>
							<td width=200 style="border: 1px solid #008000">';
echo '<font size=2, face=Courier New>';
echo $myrow["lmp"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">EDO:</font></td>
							<td width=200 style="border: 1px solid #008000">';
echo '<font size=2, face=Courier New>';
echo $myrow["edo"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Family History:</font></td>
							<td width=200 style="border: 1px solid #008000">';
echo '<font size=2, face=Courier New>';
echo $myrow["famhistory"];
echo '</td></tr>';
echo '<tr><td width=160 style="border: 1px solid #008000"><span style="font-weight: 700">
							<font face="arial" color="#333333" style="font-size: 8.5pt">
							</font></span><font face="arial" style="font-weight: 700; font-size: 8.5pt" color="#333333">Previous Pregnancies:</font></td>
							<td width=200 style="border: 1px solid #008000">';
echo '<font size=2, face=Courier New>';
echo $myrow["prepreg"];
echo '</font>';
echo '</td></tr>';
}
?>

</td>
		</tr>
</table>
		</td>
		<td height="88">&nbsp;</td>
		</tr>
	<tr>
		<td></td>
		<td valign="top" colspan="2" bgcolor="#CCFF33">
		<p align="center">
		<font face="Arial" style="font-size: 9pt; font-weight: 700">Previous 
		Pregnancies</font></td>
		<td height="16"></td>
		</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td height="5"></td>
		</tr>
	<tr>
		<td>&nbsp;</td>
		<td valign="top" colspan="2" bgcolor="#ECF9F2">
		<table border="0" width="100%" id="table2">
			<tr>
				<td width="40" align="center" bgcolor="#B4CDCD">
				<font face="Arial" style="font-size: 8pt; font-weight: 700">Year</font></td>
				<td width="42" align="center" bgcolor="#B4CDCD">
				<font face="Arial" style="font-size: 8pt; font-weight: 700">
				Duration</font></td>
				<td width="130" align="center" bgcolor="#B4CDCD">
				<font face="Arial" style="font-size: 8pt; font-weight: 700">Mode 
				of Delivery</font></td>
				<td width="57" align="center" bgcolor="#B4CDCD">
				<font face="Arial" style="font-size: 8pt; font-weight: 700">
				Weight</font></td>
				<td width="43" align="center" bgcolor="#B4CDCD">
				<font face="Arial" style="font-size: 8pt; font-weight: 700">Sex</font></td>
				<td align="center" bgcolor="#B4CDCD">
				<font face="Arial" style="font-size: 8pt; font-weight: 700">
				Alive/Dead</font></td>
			</tr>
			<tr><?php
echo '<font size=2, face=arial>';
$db = mysql_connect("localhost", "root","");
if (!$db)
{
echo 'Cannot connect to database.';
exit;
}
mysql_select_db("hospital",$db);
$result = mysql_query("SELECT * FROM e_antenatalreg WHERE patient_id='$_POST[pat_id]'",$db);
while ($myrow = mysql_fetch_array($result))
{ 
echo '<tr><td width=40 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["year1"];
echo '<td width=40 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["durat1"];
echo '<td width=40 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["model1"];
echo '<td width=40 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["weight1"];
echo '<td width=40 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["sex1"];
echo '<td width=40 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["alived1"];
echo '</td></tr>';
echo '<tr><td width=40 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["year2"];
echo '<td width=40 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["durat2"];
echo '<td width=40 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["model2"];
echo '<td width=40 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["weight2"];
echo '<td width=40 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["sex2"];
echo '<td width=40 style="border: 1px solid #008000">';
echo '<font size=2, face=arial>';
echo $myrow["alived2"];
echo '</td></tr>';
				}
				?>
			</tr>
		</table>
		</td>
		<td height="66">&nbsp;</td>
		</tr>
	<tr><form action=index.php method=post>
		<td width="41">&nbsp;</td>
		<td valign="top" width="87" bgcolor="#B4CDCD">
<input type="button" value="Print" onClick="window.print()" style="border-style:solid; border-width:1px; font-family: Corbel; font-size: 8pt"><input type="submit" value="Back" name="B1" style="font-family: Arial; font-size: 8pt; border: 1px solid #000000"></td>
		</form><td valign="top" bgcolor="#B4CDCD" width="351">
		&nbsp;</td>
		<td width="37" height="31">&nbsp;</td>
		</tr>
</table>
</div>
</body>

</html>