
<head>
<meta http-equiv="Content-Language" content="en-us">
</head>

<div align="center">

<table cellpadding="0" cellspacing="0" width="763" height="460">
	<!-- MSTableType="layout" -->
	<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td height="7"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td valign="top"><?php
$pat_id = $_POST['pat_id'];
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
echo '<table width="600" border="0" align="center" cellpadding="0" cellspacing="1">';
echo "<tr bgcolor='#CCCCCC'>
<td colspan=3><font face=arial, size='2' color='#000000'><center><b>Patient's Name</td><td colspan=3><font face=Courier New, size='1' color='#000000'><center>".$rows['surname']."&nbsp;".$rows['other']."</td><td></td>
</tr>";
echo "<tr bgcolor='#CCCCCC'>
<td colspan=3><font face=arial, size='2' color='#000000'><center><b>Patient's ID</td><td colspan=3><font face=Courier New, size='1' color='#000000'><center>".$rows['serial']."</td><td></td>
</tr>";
echo "<tr bgcolor='#FFFF99'>
<td><font face=arial, size='2'><center><b>Phone No</b></td><td colspan=2><font face=arial, size='2'><center><b>Occupation</b></td><td colspan=3><font face=arial, size='2'><center><b>Address</b></td>
</tr>";
echo "<tr bgcolor='#009933'>
<td><font face=Courier New, size='1' color='#ffffff'><center>".$rows['phone']."</td><td colspan=2><font face=Courier New, size='1' color='#ffffff'><center>".$rows['work']."</td><td colspan=3><font face=Courier New, size='1' color='#ffffff'><center>".$rows['patient_add']."</td>
</tr>";
echo "<tr bgcolor='#FFFF99'>
<td colspan=3><font face=arial, size='2' color='#000000'><center><b>Health Insurance Name</td><td colspan=3><font face=Courier New, size='1' color='#000000'><center>".$rows['hmo']."</td><td></td>
</tr>";
echo "<tr bgcolor='#FF4040'>
<td colspan=3><font face=arial, size='2' color='#ffffff'><center><b>Employer</td><td colspan=3><font face=Courier New, size='1' color='#ffffff'><center>".$rows['organization']."</td><td></td>
</tr>";
}

echo "</font>";
echo '</table>';
?>
<?php
mysql_select_db("hospital",$db);
//$sql = "SELECT * FROM lab_billing WHERE patient_id= '$_POST[pat_id]' && billdate = '$_POST[dt_bill]'";
$sql = "SELECT * FROM lab_billing WHERE patient_id= '$_POST[pat_id]'";
$result = mysql_query($sql);
while($rows=mysql_fetch_array($result)){
echo '<table width="600" border="0" align="center" cellpadding="0" cellspacing="1">';
echo "<tr bgcolor='#33CC33'>
<td><font face=arial, size='2'><b>Date Billed</td><td colspan=2><font face=Courier New, size='2'><center>".$rows['billdate']."</td><td><font face=arial, size='2'><center><b>Invoice No</td><td><font face=Courier New, size='2'><center>".$rows['billdate']."/".$rows['sn']."</td>
</tr><br />";
echo "<tr bgcolor='#FFFF99'>
<td><font face=arial, size='2'><center><b>Description of Service</td><td colspan=2><font face=arial, size='3'><center><b>HMO Support</td><td><font face=arial, size='2'><center><b>OWN Pay</b></td><td><font face=arial, size='2'><center><b>Subtotal</b></td>
</tr>";
echo "<tr bgcolor='#009933'>
<td><font face=Courier New, size='1' color='#ffffff'>".$rows['spservice2']."</td><td colspan=2><font face=Courier New, size='1' color='#ffffff'><center>".$rows['subtotalhmo2']."</td><td><font face=Courier New, size='1' color='#ffffff'><center>".$rows['subtotalown2']."</td><td><font face=Courier New, size='1' color='#ffffff'><center>".$rows['price2']."</td>
</tr>";
echo "<tr bgcolor='#009933'>
<td><font face=Courier New, size='1' color='#ffffff'>".$rows['spservice4']."</td><td colspan=2><font face=Courier New, size='1' color='#ffffff'><center>".$rows['subtotalhmo4']."</td><td><font face=Courier New, size='1' color='#ffffff'><center>".$rows['subtotalown4']."</td><td><font face=Courier New, size='1' color='#ffffff'><center>".$rows['price4']."</td>
</tr>";
echo "<tr bgcolor='#FF2D2D'>
<td><font face=arial, size='2' color='#ffffff'><center><b>TOTAL IN EACH CASE</td><td colspan=2><font face=arial, size='2' color='#ffffff'><center><b>Payable by HMO</td><td><font face=arial, size='2' color='#ffffff'><center><b>Payable by SELF</b></td><td><font face=arial, size='2' color='#ffffff'><center><b>GRAND Total</b></td>
</tr>";
echo "<tr bgcolor='#FFFF99'>
<td><font face=Courier New, size='1' color='#000000'></td><td colspan=2><font face=Courier New, size='1' color='#000000'><center><strike>N</strike>".$rows['total_hmo']."</td><td><font face=Courier New, size='1' color='#000000'><center><strike>N</strike>".$rows['total_own']."</td><td><font face=Courier New, size='1' color='#000000'><center><strike>N</strike>".$rows['total']."</td>
</tr>";
echo '<font face=arial, size=2 align=right>';
echo '<br />';
echo '<b>THIS IS THE SUMMARY OF YOUR BILL</b><br />';
echo '<font face=Webdings color=#FF0000>4</font>HMO PAY: <font face=Courier New size=2><strike>N</strike>'.number_format($rows['total_hmo'],2).'</font><br />';
echo '<font face=Webdings color=#006699>4</font>OWN PAY: <font face=Courier New size=2><strike>N</strike>'.number_format($rows['total_own'],2).'</font><br />';
echo '<b>GRAND TOTAL: <font face=Courier New size=2><strike>N</strike>'.number_format($rows['total'],2).'</font><br /><br />';
echo '<b>SEE BILL DETAIL BELOW</b>';
echo "<tr bgcolor='#CCCCCC'>
<td colspan=4><font face=arial, size='2'><font face=Marlett color=#FF0000>u</font></td><td <font face=Courier New, size='2'><center></td>
</tr><br />";
echo "<tr bgcolor='#33CC33'>
<td><font face=arial, size='2'><b>Department</td><td colspan=2><font face=Courier New, size='2'><center>".$rows['department']."</td><td></td><td></td>
</tr><br />";
echo "<tr bgcolor='#33CC33'>
<td><font face=arial, size='2'><b>Consultant</td><td colspan=2><font face=Courier New, size='2'><center>".$rows['docode']."</td><td></td><td></td>
</tr><br />";

echo '<table width="600" border="0" align="center" cellpadding="0" cellspacing="1">';
echo "<tr bgcolor='#FFFF99'>
<td colspan=4><font face=arial, size='2'>If you have sponsors or insurance cover, your bill will be sent to any or all of these sponsors:</td><td></td>
</tr><br />";
echo "<tr bgcolor='#CCCCCC'>
<td><font face=arial, size='2'><center><b>BILLED TO</font><font face=Webdings color=#FF0000>4</font></td><td><font face=arial, size='2'><center><b>EMPLOYER</td><td colspan=2><font face=arial, size='2'><center><b>HEALTH INSURANCE</b></td><td><font face=arial, size='2'><center><b>FAMILY</b></td>
</tr>";
echo "<tr bgcolor='#FFFF99'>
<td><font face=Courier New, size='1' color='#000000'></td><td><font face=Courier New, size='1' color='#000000'>".$rows['organization']."</td><td colspan=2><font face=Courier New, size='1' color='#000000'><center>".$rows['hmo']."</td><td><font face=Courier New, size='1' color='#000000'><center>".$rows['fam_name']."</td>
</tr><br />";
echo '</table>';
echo "</font>";
}

?></td>
		<td>&nbsp;</td>
	<td valign="top" style="border: 1px solid #808000"><table border="0" width="268" cellspacing="0" id="table1" height="192"><form action="receipt.php" method="post">
			<tr>
				<td align="center" bgcolor="#808000">
				<span style="font-weight: 700">
				<font face="Arial" style="font-size: 9pt" color="#FFFFFF">Patient ID</font></span></td>
				<td align="center" bgcolor="#CCFF66">
				<span style="font-weight: 700">
				<font face="Arial" style="font-size: 9pt">Date </font>
				<font face="Arial" style="font-size: 7pt" color="#FF0000">&#9660;</font></span></td>
				<td align="center" bgcolor="#CCFF66" height="17">
				<span style="font-weight: 700">
				<font face="Arial" style="font-size: 9pt">Time </font>
				<font face="Arial" style="font-size: 7pt" color="#FF0000">&#9660;</font></span></td>
			</tr>
			<tr><?php
mysql_select_db("hospital",$db);
$sql = "SELECT * FROM e_registration WHERE serial= '$_POST[pat_id]'";
$result = mysql_query($sql);
$myrows=mysql_fetch_array($result);
?>
<td>
<input name="pat_id" readonly size="9" style="float: left; border: 1px solid #008000; color:#000000; font-size:8pt; font-family:Courier New" type="text" value="<?php echo ($myrows['serial']); ?>"></td>
				<td>
<input name="dt_pay" readonly size="11" style="float: left; border: 1px solid #008000; color:#000000; font-size:8pt; font-family:Courier New" type="text" value="<?php echo date(" Y-m-d"); ?>"></td>
				<td height="20">
<input name="tym_pay" readonly size="9" style="float: left; border: 1px solid #008000; color:#000000; font-size:8pt; font-family:Courier New" type="text" value="<?php echo date("H:i:s"); ?>"></td>
			</tr>
			<tr>
				<td bgcolor="#FFFF99" align="center">
				<font face="Arial" style="font-size: 9pt; font-weight: 700" color="#FF0000">HMO 
				Pay </font>
				<span style="font-weight: 700">
				<font face="Arial" style="font-size: 7pt" color="#008000">&#9660;</font></span></td>
				<td bgcolor="#FFFF99" align="center">
				<font face="Arial" style="font-size: 9pt; font-weight: 700">OWN 
				Pay </font>
				<span style="font-weight: 700">
				<font face="Arial" style="font-size: 7pt" color="#008000">&#9660;</font></span></td>
				<td bgcolor="#006699" align="center" height="17">
				<font face="Arial" style="font-size: 9pt; font-weight: 700" color="#FFFFFF">
				TOTAL </font>
				<span style="font-weight: 700">
				<font face="Arial" style="font-size: 7pt" color="#CCFF66">&#9660;</font></span></td>
			</tr>
			<tr><?php
mysql_select_db("hospital",$db);
$sql = "SELECT * FROM lab_billing WHERE patient_id = '$_POST[pat_id]'";
$result = mysql_query($sql);
$myrows=mysql_fetch_array($result);
?>
				<td>
<input name="hmo_total" readonly size="9" style="float: left; border: 1px solid #008000; color:#000000; font-size:8pt; font-family:Courier New" type="text" value="<?php echo ($myrows['total_hmo']); ?>"></td>
				<td>
<input name="own_total" readonly size="11" style="float: left; border: 1px solid #008000; color:#000000; font-size:8pt; font-family:Courier New" type="text" value="<?php echo ($myrows['total_own']); ?>"></td>
				<td height="20">
<input name="sum" readonly size="9" style="float: left; border: 1px solid #008000; color:#000000; font-size:8pt; font-family:Courier New" type="text" value="<?php echo ($myrows['total']); ?>"></td>
			</tr>
			<tr>
				<td valign="top" align="center" bgcolor="#99CCFF">
				<span style="font-weight: 700">
				<font face="Arial" style="font-size: 8pt">Mode</font></span></td>
				<td valign="top" align="center" bgcolor="#99CCFF">
				<span style="font-weight: 700">
				<font face="Arial" style="font-size: 8pt"> Cheque No</font><font face="Arial" style="font-size: 9pt"> </font>
				</span>
				<td height="22" bgcolor="#99CCFF">
				<font face="Arial" style="font-size: 8pt; font-weight:700">
				Service</font><span style="font-weight: 700"><font face="Arial" style="font-size: 9pt"> </font>
				</span>
				</td>
			</tr>
			<tr>
				<td bgcolor="#DDEEFF">
				<select size="1" name="mode" style="font-family: Arial; font-size: 8pt; border: 1px solid #008000">
				<option>------</option>
				<option>CASH</option>
				<option>CHEQUE</option>
				</select></td>
				<td bgcolor="#DDEEFF">
<input name="chq_no" size="11" style="float: left; border: 1px solid #008000; color:#000000; font-size:8pt; font-family:Courier New" type="text"></td>
				<td bgcolor="#DDEEFF" height="20">
				<select size="1" name="service" style="font-family: Arial; font-size: 8pt; border: 1px solid #008000">
				<option>------</option>
				<option>CLINICALS</option>
				<option>DELIVERY</option>
				<option>DRUG</option>
				<option>LAB TEST</option>
				<option>SCAN</option>
				<option>SURGERY</option>
				</select></td>
			</tr>
			<tr>
				<td bgcolor="#CCFF66"><span style="font-weight: 700">
				<font face="Arial" style="font-size: 9pt">Remark </font>
				<font face="Times New Roman" style="font-size: 9pt" color="#FF0000">
				»</font></span></td>
				<td bgcolor="#CCFF66">
				<select size="1" name="remk" style="font-family: Arial; font-size: 8pt; border: 1px solid #008000">
				<option>------</option>
				<option>PAID BY</option>
				<option>CHARGED TO</option>
				</select></td>
				<td bgcolor="#CCFF66" height="20">
				<select size="1" name="acct" style="font-family: Arial; font-size: 8pt; border: 1px solid #008000">
				<option>------</option>
				<option>Family</option>
				<option>SELF</option>
				</select></td>
			</tr>
			<tr>
				<td valign="top"><font face="Arial" style="font-size: 8pt"> Name</font><span style="font-weight: 700"><font face="Arial" style="font-size: 9pt"> </font>
				</span></td>
				<td colspan="2" valign="top" height="20">
<input name="pay_name" size="23" style="float: left; border: 1px solid #008000; ; color:#000000; font-size:8pt; font-family:Courier New" type="text"></td>
			</tr>
			<tr>
				<td><font face="Arial" style="font-size: 8pt">Amt in words</font><span style="font-weight: 700"><font face="Arial" style="font-size: 9pt"> </font>
				</span></td>
				<td colspan="2" valign="top" height="20">
<input name="amt_wrds" size="23" style="float: left; border: 1px solid #008000; ; color:#000000; font-size:8pt; font-family:Courier New" type="text"></td>
			</tr>
			<tr>
				<td valign="top" align="center" bgcolor="#FFFF99" colspan="3">
				&nbsp;</td>
				</tr>
			<tr>
				<td valign="top" align="center" bgcolor="#FFFF99" colspan="3">
				<font face="Arial" style="font-size: 8pt">If Bill is to be
				</font><font face="Arial" style="font-size: 9pt">paid by
				<font color="#006699"><i>HMO</i> </font>or <font color="#FF0000">
				<i>Employer</i></font>, state:</font></td>
				</tr>
			<tr>
				<td valign="top" align="center" bgcolor="#E3E3D5">
				<p align="left">
				<font face="Arial" style="font-size: 8pt">Name</font></td>
				<td valign="top" align="center" bgcolor="#E3E3D5" colspan="2">
<input name="pay_name1" size="23" style="float: left; border: 1px solid #008000; ; color:#000000; font-size:8pt; font-family:Courier New" type="text"></tr>
			<tr>
				<td valign="top" align="center" bgcolor="#E3E3D5">
				<p align="left"><font face="Arial" style="font-size: 8pt">Amt in words</font><span style="font-weight: 700"><font face="Arial" style="font-size: 9pt"> </font>
				</span></td>
				<td valign="top" align="center" bgcolor="#E3E3D5" colspan="2">
<input name="amt_wrds1" size="23" style="float: left; border: 1px solid #008000; ; color:#000000; font-size:8pt; font-family:Courier New" type="text"></tr>
			<tr>
				<td valign="top" align="center" bgcolor="#99CCFF">
				<span style="font-weight: 700">
				<font face="Arial" style="font-size: 8pt">Mode</font></span></td>
				<td valign="top" align="center" bgcolor="#99CCFF">
				<span style="font-weight: 700">
				<font face="Arial" style="font-size: 8pt"> Cheque No</font><font face="Arial" style="font-size: 9pt"> </font>
				</span>
				<td height="22" bgcolor="#99CCFF">
				<p align="center">
				<font face="Arial" style="font-size: 8pt; font-weight:700">
				Service </font><span style="font-weight: 700"><font face="Arial" style="font-size: 9pt"> &nbsp;</font></span></td>
			</tr>
			<tr>
				<td valign="top" bgcolor="#DDEEFF">
				<select size="1" name="mode1" style="font-family: Arial; font-size: 8pt; border: 1px solid #008000">
				<option>------</option>
				<option>CASH</option>
				<option>CHEQUE</option>
				</select></td>
				<td valign="top" bgcolor="#DDEEFF">
				<input name="chq_no1" size="11" style="float: left; border: 1px solid #008000; color:#000000; font-size:8pt; font-family:Courier New" type="text"><td height="22" bgcolor="#DDEEFF">
				<select size="1" name="service1" style="font-family: Arial; font-size: 8pt; border: 1px solid #008000">
				<option>------</option>
				<option>CLINICALS</option>
				<option>DELIVERY</option>
				<option>DRUG</option>
				<option>LAB TEST</option>
				<option>SCAN</option>
				<option>SURGERY</option>
				</select></td>
			</tr>
			<tr>
				<td bgcolor="#CCFF66"><span style="font-weight: 700">
				<font face="Arial" style="font-size: 9pt">Remark </font>
				<font face="Times New Roman" style="font-size: 9pt" color="#FF0000">
				»</font></span></td>
				<td bgcolor="#CCFF66">
				<select size="1" name="remk1" style="font-family: Arial; font-size: 8pt; border: 1px solid #008000">
				<option>------</option>
				<option>PAID BY</option>
				<option>CHARGED TO</option>
				</select></td>
				<td bgcolor="#CCFF66" height="20">
				<select size="1" name="acct1" style="font-family: Arial; font-size: 8pt; border: 1px solid #008000">
				<option>------</option>
				<option>Employer</option>
				<option>HMO</option>
				</select></td>
			</tr>
			<tr>
				<td valign="top" bgcolor="#FF0000">
				<p style="margin-top: 2px">
				<font face="Arial" style="font-size: 8pt" color="#FFFFFF">
				Cashier's Code</font></td>
				<td valign="top">
				<input name="code" size="5" style="float: left; border: 1px solid #008000; color:#000000; font-size:8pt; font-family:Courier New" type="text"><td height="22">&nbsp;</td>
			</tr>
			<tr>
				<td valign="top" bgcolor="#FFFF99">
				<font face="Arial" style="font-size: 8pt">Billed from Dept:</font></td>
				<td valign="top">
<input name="dept" readonly size="11" style="float: left; border: 1px solid #008000; color:#000000; font-size:7pt; font-family:Courier New" type="text" value="<?php echo ($myrows['department']); ?>"><td height="22" valign="top">
<input name="inv_no" readonly size="14" style="float: left; border: 1px solid #008000; color:#000000; font-size:7pt; font-family:Courier New" type="text" value="<?php echo ($myrows['billdate']),'/',($myrows['sn']); ?>"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><font color="#FFFFFF">
<input type="submit" value="Get Receipt" style="border:1px solid #C0C0C0; font-family: Arial; font-size: 8pt; color:#FFFFFF; background-color:#006699" name="login"></font><td height="22">&nbsp;</td>
			</tr>
			<tr>
				<td width="83">&nbsp;</td>
				<td width="93">&nbsp;</td>
				<td height="56" width="86">&nbsp;</td>
			</tr>
			</form></td>
				</table></td>
		<td height="442">&nbsp;</td>
	</tr>
	<tr>
		<td width="7"></td>
		<td width="470"></td>
		<td width="8"></td>
		<td width="270"></td>
		<td height="11" width="8"></td>
	</tr>
</table>
</div>

