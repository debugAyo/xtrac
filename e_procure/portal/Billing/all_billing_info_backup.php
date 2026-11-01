
<head>
<meta http-equiv="Content-Language" content="en-us">
</head>

<div align="center">

<table cellpadding="0" cellspacing="0" width="771" height="499">
	<!-- MSTableType="layout" -->
	<tr>
	<td></td>
	<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td height="9"></td>
		</tr>
	<tr>
		<td></td>
		<td></td>
		<td valign="top" rowspan="2" colspan="3">
		<p align="center">
		<font face="Arial" style="font-size: 9pt" color="#006699">&nbsp;</font></td>
		<td></td>
		<td height="6"></td>
		</tr>
	<tr>
		<td></td>
	<td valign="top" rowspan="2" bgcolor="#DDEEFF">
	<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
		<!-- MSCellFormattingTableID="1" -->
		<tr>
			<td bgcolor="#E3E3D5" nowrap width="100%">
			<!-- MSCellFormattingType="header" -->
			</td>
			<td height="10" width="5">
			<img alt="" src="MsoPnl_Cnr_tr_133.gif" width="5" height="10"></td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#B4CDCD" colspan="2" height="100%">
			<!-- MSCellFormattingType="content" -->
			<p style="margin-left: 4px; margin-top: 2px">
<font color="#FF0000" face="Arial" style="font-size: 9pt">Payment Portal </font>
<font face="Webdings" style="font-size: 9pt" color="#FFFF00">.</font></td>
		</tr>
	</table>
		</td>
		<td></td>
		<td height="9"></td>
		</tr>
	<tr>
		<td></td>
		<td valign="top" bgcolor="#B4CDCD" colspan="4">&nbsp;</td>
		<td height="20"></td>
		</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td height="8"></td>
		</tr>
	<tr>
		<td></td>
		<td valign="top" rowspan="2" style="border: 1px solid #808000" colspan="2">
		<?php 
			$dept = $_POST['dept'];
			$pat_id = $_POST['pat_id'];
			if (!$dept || !$pat_id) {
			echo 'You must choose a Department';
			exit();
			}
			if ($dept == 'Pharmacy') {
			include 'pharm_bill_preview.php';
			}
			if ($dept == 'Laboratory') {
			include 'lab_bill_preview.php';
			}
			if ($dept == 'Radiology') {
			include 'rad_bill_preview.php';
			}
			if ($dept == 'Clinicals') {
			include 'cons_bill_preview.php';
			}
			
			?>

		</td>
		<td></td>
		<td></td>
		<td></td>
		<td height="1"></td>
		</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td valign="top" bgcolor="#F7F7F7" style="border: 1px solid #808000; " colspan="2">
		<table border="0" width="268" cellspacing="0" id="table1" height="192"><form action="auth_receipt.php" method="post">
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
<input name="pat_id" size="9" style="float: left; border: 1px solid #008000; color:#000000; font-size:8pt; font-family:Courier New" type="text" value="<?php echo ($myrows['serial']); ?>"></td>
				<td>
<input name="dt_pay" size="11" style="float: left; border: 1px solid #008000; color:#000000; font-size:8pt; font-family:Courier New" type="text" value="<?php echo date(" Y-m-d"); ?>"></td>
				<td height="20">
<input name="tym_pay" size="9" style="float: left; border: 1px solid #008000; color:#000000; font-size:8pt; font-family:Courier New" type="text" value="<?php echo date("H:i:s"); ?>"></td>
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
$sql = "SELECT * FROM pharm_billing WHERE patient_id = '$_POST[pat_id]'";
$result = mysql_query($sql);
$myrows=mysql_fetch_array($result);
?>
				<td>
<input name="hmo_total" size="9" style="float: left; border: 1px solid #008000; color:#000000; font-size:8pt; font-family:Courier New" type="text" value="<?php echo ($myrows['total_hmo']); ?>"></td>
				<td>
<input name="own_total" size="11" style="float: left; border: 1px solid #008000; color:#000000; font-size:8pt; font-family:Courier New" type="text" value="<?php echo ($myrows['total_own']); ?>"></td>
				<td height="20">
<input name="sum" size="9" style="float: left; border: 1px solid #008000; color:#000000; font-size:8pt; font-family:Courier New" type="text" value="<?php echo ($myrows['total']); ?>"></td>
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
				</table>
		</td>
		<td height="420"></td>
	</tr>
	<tr>
		<td width="12">&nbsp;</td>
		<td width="173">&nbsp;</td>
		<td width="296">&nbsp;</td>
		<td width="15">&nbsp;</td>
		<td width="128">&nbsp;</td>
		<td width="142">&nbsp;</td>
		<td height="26" width="5"></td>
	</tr>
</table>
</div>

