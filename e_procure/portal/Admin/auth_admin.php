<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>eHealthCare - Home</title>
<script language="JavaScript">
<!--
function FP_preloadImgs() {//v1.0
 var d=document,a=arguments; if(!d.FP_imgs) d.FP_imgs=new Array();
 for(var i=0; i<a.length; i++) { d.FP_imgs[i]=new Image; d.FP_imgs[i].src=a[i]; }
}
// -->
</script>
</head>

<body onload="FP_preloadImgs(/*url*/'portal/button47.jpg', /*url*/'portal/button46.jpg', /*url*/'portal/button44.jpg', /*url*/'portal/button43.jpg', /*url*/'portal/button3E1.jpg', /*url*/'portal/button3D1.jpg', /*url*/'portal/button2F.jpg', /*url*/'portal/button2E.jpg', /*url*/'portal/button2C.jpg', /*url*/'portal/button2B.jpg')">

<div align="center">
	<table cellpadding="0" cellspacing="0" width="883" height="595">
		<!-- MSTableType="layout" -->
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td height="6"></td>
			</tr>
		<tr>
			<td valign="top" colspan="7">
			<p style="margin-left: 5px; margin-right: 25px; margin-top: 5px" align="right">
			&nbsp;</td>
			<td height="24"></td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td height="5"></td>
			</tr>
		<tr>
			<td valign="top" colspan="8" height="67">
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
				<!-- MSCellFormattingTableID="10" -->
				<tr>
					<td valign="top" height="100%" width="100%">
					<!-- MSCellFormattingType="content" -->
					<table cellpadding="0" cellspacing="0" width="880" height="64">
	<!-- MSTableType="layout" -->
	<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
		<td valign="top" width="403" rowspan="2">
					<p align="center">
					<img border="0" src="../../img/name.jpg" width="354" height="53" align="left"></td>
	<td height="31">&nbsp;</td>
	</tr>
	<tr>
		<td width="216" valign="top">
		<p style="margin-left: 15px"><?php 
	echo '<font size=1, face=Arial><right>';			
 $b = time (); 
 print date("g:i:s A D, F jS Y",$b) . "<br>";
 echo '</font>';
?>
</td>
		<td width="53">&nbsp;</td>
		<td height="33" width="208">&nbsp;</td>
	</tr>
					</table>
					</td>
				</tr>
			</table>
	</td>
			</tr>
		<tr>
			<td>&nbsp;</td>
			<td></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="27"></td>
			</tr>
		<tr>
			<td valign="top" bgcolor="#CDCDB4" colspan="8" height="20">&nbsp;</td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td height="15"></td>
			</tr>
		<tr>
			<td valign="top" colspan="8" height="253"><?php
echo '<font size=2, face=arial>';
$psswrd = $_POST['psswrd'];
$dept = $_POST['dept'];

if (!$psswrd || !$dept)
{
echo 'You cannot send empty values.';
exit;
}
include '../../connect.php';
if ($dept == Admin) {
$result = mysqli_query($conn,"SELECT * FROM admin_staff WHERE staff_id='$_POST[psswrd]'") or die("Couldn't query the user-database."); 
while ($myrow = mysqli_fetch_array($result))
{
echo '<font size=1, face=arial><b>';
echo '<p><center>Welcome!&nbsp;&nbsp;';
echo $myrow["fname"];

//echo "<b>Welcome</b> $psswrd";
echo '<p><p>';
include 'administrator.php';
}
}
if ($dept == ICT) {
$result = mysqli_query($conn,"SELECT * FROM ict_staff WHERE staff_id='$_POST[psswrd]'") or die("Couldn't query the user-database."); 
while ($myrow = mysqli_fetch_array($result))
{
echo '<font size=1, face=arial><b>';
echo '<p><center>Welcome!&nbsp;&nbsp;';
echo $myrow["fname"];

//echo "<b>Welcome</b> $psswrd";
echo '<p><p>';
include '../ict/ict.php';
}
}

if ($dept == Account) {
$result = mysqli_query($conn,"SELECT * FROM account_staff WHERE staff_id='$_POST[psswrd]'") or die("Couldn't query the user-database."); 
while ($myrow = mysqli_fetch_array($result))
{
echo '<font size=1, face=arial><b>';
echo '<p><center>Welcome!&nbsp;&nbsp;';
echo $myrow["fname"];

//echo "<b>Welcome</b> $psswrd";
echo '<p><p>';
include '../accounts/accountant.php';
}
}
if ($dept == Records) {
$result = mysqli_query($conn,"SELECT * FROM records_staff WHERE staff_id='$_POST[psswrd]'") or die("Couldn't query the user-database."); 
while ($myrow = mysqli_fetch_array($result))
{
echo '<font size=1, face=arial><b>';
echo '<p><center>Welcome!&nbsp;&nbsp;';
echo $myrow["fname"];

//echo "<b>Welcome</b> $psswrd";
echo '<p><p>';
include '../records/records.php';
}
}


echo '</font>';
exit();
?></td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td height="11"></td>
			</tr>
		<tr>
			<td valign="top" bgcolor="#00CC66" colspan="2">&nbsp;</td>
			<td valign="top" colspan="5" bgcolor="#00CC66">
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
				<!-- MSCellFormattingTableID="4" -->
				<tr>
					<td valign="top" bgcolor="#339966" height="100%" width="100%">
					<!-- MSCellFormattingType="content" -->
					<p align="left"><b><i>
					<font face="Corbel" size="4" color="#FFFFFF">
<marquee behavior="alternate">Now, it is a 
					lot easier for you to access our HealthCare services online:</marquee></font></i></b></td>
				</tr>
			</table>
			</td>
			<td height="27"></td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td height="7"></td>
			</tr>
		<tr>
			<td valign="top" rowspan="3">
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
				<!-- MSCellFormattingTableID="21" -->
				<tr>
					<td valign="top" width="100%" height="100%">
					<!-- MSCellFormattingType="content" -->
					<p align="center">
					<img border="0" src="../../img/who-logo.jpg" width="101" height="44"></td>
					</tr>
			</table>
			</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td height="14"></td>
			</tr>
		<tr>
			<td></td>
			<td>&nbsp;</td>
			<td valign="top">
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
				<!-- MSCellFormattingTableID="19" -->
				<tr>
					<td bgcolor="#666666" colspan="3" height="1">
					<img alt="" width="1" height="1" src="../../MsSpacer.gif"></td>
				</tr>
				<tr>
					<td bgcolor="#666666" width="1">
					<img alt="" width="1" height="1" src="../../MsSpacer.gif"></td>
					<td valign="top" bgcolor="#CCCCCC" width="100%">
					<!-- MSCellFormattingType="content" -->
					&nbsp;</td>
					<td bgcolor="#666666" height="100%" width="1">
					<img alt="" width="1" height="1" src="../../MsSpacer.gif"></td>
				</tr>
				<tr>
					<td bgcolor="#666666" colspan="3" height="1">
					<img alt="" width="1" height="1" src="../../MsSpacer.gif"></td>
				</tr>
			</table>
			</td>
			<td>&nbsp;</td>
			<td valign="top" colspan="2" bgcolor="#CDCDB4">
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
				<!-- MSCellFormattingTableID="18" -->
				<tr>
					<td bgcolor="#CCCCCC" colspan="3" height="1">
					<img alt="" width="1" height="1" src="../../MsSpacer.gif"></td>
				</tr>
				<tr>
					<td bgcolor="#CCCCCC" width="1">
					<img alt="" width="1" height="1" src="../../MsSpacer.gif"></td>
					<td valign="top" bgcolor="#CDCDB4" width="100%">
					<!-- MSCellFormattingType="content" -->
					<p align="center">
					<font face="Arial" style="font-size: 8pt; font-weight: 700">
					<a style="text-decoration: none" href="portal/genmed/index.php">
					<font color="#000000">Medicine &amp; Surgery</font></a></a></font><font style="font-weight: 700" color="#006699"><a style="text-decoration: none" href="consultant/index.php"><font color="#000000" face="Arial" style="font-size: 8pt">
					</font>
					</a>
					</font>
					<font face="Arial" style="font-size: 8pt; font-weight: 700" color="#006699">
					-</font><font face="Arial" style="font-size: 8pt; font-weight: 700">
					<a href="portal/Laboratory/index.php" style="text-decoration: none">
					<font color="#000000">Laboratory</font><font face="Arial" style="font-size: 8pt; font-weight: 700" color="#006699"></a></font><font style="font-size: 8pt; font-weight: 700" color="#006699"><a style="text-decoration: none" href="portal/Laboratory/index.php"><font color="#000000" face="Arial">
					</font>
					</a>
					</font>
					<font face="Arial" style="font-size: 8pt; font-weight: 700" color="#006699">
					- 
					</font> 
					<font color="#006699" style="font-size: 8pt; font-weight: 700">
					<a style="text-decoration: none" href="portal/Pharmacy/index.php">
					<font color="#000000" face="Arial">Pharmacy</font></a></font><font face="Corbel" style="font-size: 9pt; font-weight: 700" color="#006699"><font face="Arial" style="font-size: 8pt; font-weight: 700"></a></font><font style="font-size: 8pt; font-weight: 700" color="#006699"><a style="text-decoration: none" href="portal/Pharmacy/index.php"><font color="#000000" face="Arial">
					</font>
					</a>
					</font>
					<font face="Arial" style="font-size: 8pt; font-weight: 700">
					-
					</font>
					<font style="font-size: 8pt; font-weight: 700" color="#006699">
					<a style="text-decoration: none" href="portal/Billing/index.php">
					<font color="#000000" face="Arial">Billing </font></a>
					</font>
					<font face="Arial" style="font-size: 8pt; font-weight: 700">
					- 
					</font>
					<font style="font-size: 8pt; font-weight: 700" color="#006699"> 
					<a style="text-decoration: none" href="portal/Accounts/index.php">
					<font color="#000000" face="Arial">Accounts</font></a></font><font face="Arial" style="font-size: 8pt; font-weight: 700">-</font><font style="font-size: 8pt; font-weight: 700" color="#006699"><a style="text-decoration: none" href="portal/Store/index.php"><font color="#000000" face="Arial"> Store 
					</font></a>
					</font>
					<font face="Arial" style="font-size: 8pt; font-weight: 700">
					- 
					</font> 
					<font style="font-size: 8pt; font-weight: 700" color="#006699">
					<a style="text-decoration: none" href="portal/Accounts/index.php">
					<font color="#000000" face="Arial">&nbsp;</font></a></font><font face="Arial" style="font-size: 8pt; font-weight: 700"> 
					</font> 
					<font color="#006699" style="font-size: 8pt; font-weight: 700">
					<a style="text-decoration: none" href="portal/Radiology/index.php">
					<font color="#000000" face="Arial">Radiology</font></a></font></font></td>
					<td bgcolor="#CCCCCC" height="100%" width="1">
					<img alt="" width="1" height="1" src="../../MsSpacer.gif"></td>
				</tr>
				<tr>
					<td bgcolor="#CCCCCC" colspan="3" height="1">
					<img alt="" width="1" height="1" src="../../MsSpacer.gif"></td>
				</tr>
			</table>
			</td>
			<td height="29"></td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td height="3"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="30"></td>
		</tr>
		<tr>
			<td valign="top" colspan="7" align="left">
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
				<!-- MSCellFormattingTableID="6" -->
				<tr>
					<td valign="top" height="100%" width="100%">
					<!-- MSCellFormattingType="content" -->
					<p align="center"><font color="#C0C0C0"><font face="Tahoma">
					<span style="font-size: 8.5pt">O. Sunnyvic</span></font><sup><font face="Tahoma"><span style="font-size: 8.5pt"> 
					®</span></font></sup></font></td>
				</tr>
			</table>
			</td>
			<td height="17"></td>
		</tr>
		<tr>
			<td width="171">&nbsp;</td>
			<td width="1"></td>
			<td width="18">&nbsp;</td>
			<td width="154">&nbsp;</td>
			<td width="10">&nbsp;</td>
			<td valign="top" width="318">&nbsp;</td>
			<td width="206">&nbsp;</td>
			<td height="40" width="5"></td>
		</tr>
	</table>
</div>

</body>

</html>