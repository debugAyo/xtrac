<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>HMO CLIENT MANAGER</title>

<div align="center">
	<table cellpadding="0" cellspacing="0" width="835" height="580">
		<!-- MSTableType="layout" -->
		<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="23">&nbsp;</td>
			</tr>
		<tr>
			<td valign="top" bgcolor="#008080">
			<p style="margin-left: 10px; margin-top: 10px">
			<font color="#FFFFFF" face="Arial" style="font-size: 9pt; ">HMO CLIENT MANAGER </font></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="31">&nbsp;</td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#006666" colspan="4" height="20">&nbsp;</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td height="12"></td>
		</tr>
		<tr>
			<td valign="top" colspan="4" height="22" bgcolor="#F7F7F7">&nbsp;</td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td height="7"></td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#669999">&nbsp;</td>
					<td>&nbsp;</td>
			<td valign="top" rowspan="3">
			<div align="center">
				<table cellpadding="0" cellspacing="0" width="527" height="38">
					<!-- MSTableType="layout" -->
					<html>

<body>
<tr>
	<td width="10">&nbsp;</td>

						<td width="505" valign="top" bgcolor="#669999"><html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
</head>

<body>
<p style="margin-left: 10px; margin-top: 2px; margin-bottom: 2px">

<?php
echo '<font size=2, face=tahoma>';
$randomfield = $_POST['randomfield'];
$s_name = $_POST['s_name'];
$o_name = $_POST['o_name'];
$seks= $_POST['seks'];
$p_origin = $_POST['p_origin'];
$client_add = $_POST['client_add'];
$d_birth = $_POST['d_birth'];
$t_app = $_POST['t_app'];
$job = $_POST['job'];
$p_num = $_POST['p_num'];
$d_app = $_POST['d_app'];
$n_kin = $_POST['n_kin'];
$n_kin_add = $_POST['n_kin_add'];
$age = ($d_app - $d_birth);
$organization = $_POST['organization'];
$fmy_name = $_POST['fmy_name'];
$hmo_pkg = $_POST['hmo_pkg'];
$price = $_POST['price'];
if (!$randomfield || !$s_name || !$o_name || !$seks || !$p_origin || !$client_add || !$t_app || !$p_num || !$d_app || !$n_kin || !$n_kin_add)
{
echo 'You cannot send empty values.';
exit;
}
include '../../connect.php';
$sql = "INSERT INTO e_registration (surname, other, sex, origin, client_add, maturity, time_app, work, phone, date_app, next_kin, kin_add, hmo_pkg, price, organization, fam_name, serial)
VALUES ('$s_name','$o_name','$seks','$p_origin','$client_add','$age','$t_app','$job','$p_num','$d_app','$n_kin','$n_kin_add','$hmo_pkg','$price','$organization','$fmy_name','$randomfield')";
$result = mysqli_query($conn,$sql);

echo '</td></tr>';

?>
<?php 
	
include '../../connect.php';
$result = mysqli_query($conn,"SELECT * FROM e_registration WHERE serial='$_POST[randomfield]'");
$myrow = mysqli_fetch_array($result);
echo '</font>';
?><td height="38" width="12">&nbsp;</td>

</body>

</html>
</tr>
<table border="0" width="96%" cellspacing="1" cellpadding="0">
	<tr>
		<td width="153" bgcolor="#DFEAEA">
		&nbsp;</td>
		<td bgcolor="#DFEAEA">&nbsp;</td>
	</tr>
	<tr><form action="portal/records/ereg.php" method="post">
		<td width="153" bgcolor="#DFEAEA">
		<p style="margin-left: 15px">
		&nbsp;</td>
		<td bgcolor="#DFEAEA"><font face="Arial">
		<input type="hidden" value="<?php echo ($myrow['serial']);?>" name="pin" readonly size="25" style="border: 1px solid #DFEAEA; font-family:Arial; font-size:8.5pt"></font></td>
	</tr>
		<tr>
		<td width="153" bgcolor="#DFEAEA">
		<p style="margin-left: 15px">
		<font face="Arial" style="font-size: 8.5pt">Name&nbsp;</font></td>
		<td bgcolor="#DFEAEA">
			<input type="text" value="<?php echo ($myrow['surname']); echo '&nbsp;&nbsp;&nbsp;'; echo $myrow["other"];?>" name="name" readonly size="25" style="border: 1px solid #DFEAEA; font-family:Arial; font-size:8.5pt"></td>
	</tr>
	<tr>
		<td width="153" bgcolor="#DFEAEA">
		<p style="margin-left: 15px">
		<font face="Arial" style="font-size: 8.5pt">Phone No&nbsp;</font></td>
		<td bgcolor="#DFEAEA">
			<input type="text" value="<?php echo ($myrow['phone']);?>" name="phone" readonly size="25" style="border: 1px solid #DFEAEA; font-family:Arial; font-size:8.5pt"></td>
	</tr>
	<tr>
		<td width="153" bgcolor="#DFEAEA">
		<p style="margin-left: 15px">
		<font face="Arial" style="font-size: 8.5pt">Package </font></td>
		<td bgcolor="#DFEAEA">
			<input type="text" value="<?php echo ($myrow['hmo_pkg']);?>" name="pkg" readonly size="25" style="border: 1px solid #DFEAEA; font-family:Arial; font-size:8.5pt"></td>
	</tr>
	<tr>
		<td width="153" bgcolor="#DFEAEA">
		<p style="margin-left: 15px">
		<font face="Arial" style="font-size: 8.5pt">Amount Per 
		Annum </font>
		</td>
		<td bgcolor="#DFEAEA">
			<input type="text" value="<?php echo ($myrow['price']);?>" name="price" readonly size="25" style="border: 1px solid #DFEAEA; font-family:Arial; font-size:8.5pt"></td>
	</tr>
	<tr>
		<td width="153">
		&nbsp;</td>
		<td>
			&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2">
		<p style="margin-left: 10px; margin-top: 5px; margin-bottom: 0">
		<font face="Arial" style="font-size: 8.5pt">If you choose <b>
		<font color="#CC0000">online payment</font></b>, please use the form 
		below, otherwise print the details above to pay directly through
		<font color="#0000FF"><b>cheque</b> </font>or <b><font color="#0000FF">
		bank draft</font></b> in order to complete your subscription.</font></td>
	</tr>
	<tr>
		<td width="153">
		&nbsp;</td>
		<td>
			&nbsp;</td>
	</tr>
	<tr>
		<td width="153" bgcolor="#DFEAEA">
		<p style="margin-left: 15px">
		<font face="Arial" style="font-size: 8.5pt; " color="#333333">
		Card Type</font><font face="Arial" style="font-size: 7pt; font-weight:700" color="#333333"> </font>
		<span style="font-weight: 700">
		<font face="Arial" style="font-size: 7pt" color="#CC0000">*</font></span></td>
		<td bgcolor="#DFEAEA">
<select size="1" name="card_typ" style="font-family: Arial; font-size: 8pt; border: 1px solid #DFEAEA; ">
<option>--</option>
<option>Mastercard</option>
<option>Paypal</option>
<option>Visa Card</option>
</select></td>
	</tr>
	<tr>
		<td width="153" bgcolor="#EEEEEE">
		<p style="margin-left: 15px">
		<font face="Arial" style="font-size: 8.5pt; " color="#333333">
		Name on Card</font><font face="Arial" style="font-size: 7pt; font-weight:700" color="#333333"> </font>
		<span style="font-weight: 700">
		<font face="Arial" style="font-size: 7pt" color="#CC0000">*</font></span></td>
		<td bgcolor="#EEEEEE">
			<font face="Arial">
		<input type="text" name="card_nm" size="25" style="border: 1px solid #DFEAEA; font-family:Arial; font-size:8.5pt"></font></td>
	</tr>
	<tr>
		<td width="153" bgcolor="#DFEAEA">
		<p style="margin-left: 15px">
		<font face="Arial" style="font-size: 8.5pt; " color="#333333">
		Address on Card</font><font face="Arial" style="font-size: 7pt; font-weight:700" color="#333333"> </font>
		<span style="font-weight: 700">
		<font face="Arial" style="font-size: 7pt" color="#CC0000">*</font></span></td>
		<td bgcolor="#DFEAEA">
			<font face="Arial">
		<input type="text" name="card_nm0" size="25" style="border: 1px solid #DFEAEA; font-family:Arial; font-size:8.5pt"></font></td>
	</tr>
	<tr>
		<td width="153" bgcolor="#DFEAEA">
		<p style="margin-left: 15px">
		<font face="Arial" style="font-size: 8.5pt; " color="#333333">
		Card No </font><span style="font-weight: 700">
		<font face="Arial" style="font-size: 7pt; " color="#CC0000">
		*</font></span></td>
		<td bgcolor="#DFEAEA">
			<font face="Arial">
			<!--webbot bot="Validation" s-data-type="Integer" s-number-separators="x" b-value-required="TRUE" i-minimum-length="16" i-maximum-length="16" s-validation-constraint="Equal to" s-validation-value="16" --><input type="text" name="card_no" size="25" style="border: 1px solid #DFEAEA; font-family:Arial; font-size:8.5pt" maxlength="16"></font></td>
	</tr>
	<tr>
		<td width="153" bgcolor="#EEEEEE">
		<p style="margin-left: 15px">
		<font face="Arial" style="font-size: 8.5pt; " color="#333333">
		Card Expiry Date</font><span style="font-weight: 700"><font face="Arial" style="font-size: 7pt" color="#333333">
		</font><font face="Arial" style="font-size: 7pt" color="#CC0000">*</font></span></td>
		<td bgcolor="#EEEEEE">
			<select size="1" name="exp_mnt" style="font-family: Arial; font-size: 8pt; border: 1px solid #DFEAEA; ">
<option>Month</option>
<option>Jan</option>
<option>Feb</option>
<option>Mar</option>
<option>Apr</option>
<option>May</option>
<option>Jun</option>
<option>Jul</option>
<option>Aug</option>
<option>Sep</option>
<option>Oct</option>
<option>Nov</option>
<option>Dec</option>
</select>/<select size="1" name="exp_yr" style="font-family: Arial; font-size: 8pt; border: 1px solid #DFEAEA; ">
<option>Year</option>
<option>2017</option>
<option>2018</option>
<option>2019</option>
<option>2020</option>
<option>2021</option>
<option>2022</option>
<option>2023</option>
<option>2024</option>
<option>2025</option>
<option>2026</option>
<option>2027</option>
<option>2028</option>
<option>2029</option>
<option>2030</option>
</select></td>
	</tr>
	<tr>
		<td width="153" bgcolor="#DFEAEA">
		<p style="margin-left: 15px">
		<span style="font-size: 8pt; line-height: 115%; font-family: Arial"><b>
		CVV1</b> / <b>CVV2</b></span></td>
		<td bgcolor="#DFEAEA">
			<font face="Arial">
			<!--webbot bot="Validation" s-data-type="Integer" s-number-separators="x" b-value-required="TRUE" i-minimum-length="3" i-maximum-length="3" --><input type="text" name="exp_dt0" size="3" style="border: 1px solid #DFEAEA; font-family:Arial; font-size:8.5pt" maxlength="3"></font></td>
	</tr>
	<tr>
		<td width="153" bgcolor="#DFEAEA">
		&nbsp;</td>
		<td bgcolor="#DFEAEA">
			&nbsp;</td>
	</tr>
	<tr>
		<td width="153" bgcolor="#DFEAEA">
		&nbsp;</td>
		<td bgcolor="#DFEAEA">
<input type="submit" value="Add to Cart" style="border:1px solid #808000; font-family: Arial; font-size: 8pt; color:#FFFFFF; background-color:#006666" name="login"><input type="reset" value="Cancel" style="border:1px solid #C0C0C0; font-family: Arial; font-size: 8pt; color:#FFFFFF; background-color:#CC0000"></td>
	</form></tr>
</table>

</body>

</html>
</td>
			<td height="38">&nbsp;</td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td height="20"></td>
			</tr>
		<tr>
			<td valign="top" bgcolor="#DFEAEA">
			<p style="margin-left: 10px; margin-top: 10px; margin-bottom: 0">
			<font face="Arial" style="font-size: 8.5pt" color="#333333">Dear 
			valued prospective Client. Please understand that, the price shown in the 
			table is the cost of purchasing your desired package for one year.
			</font></p>
			<hr color="#669999" size="1" width="80%">
			<p style="margin-left: 10px; margin-top: 10px">
			<font face="Arial" style="font-size: 8.5pt" color="#333333">Kindly 
			verify each package with proper advice or counsel from our customer 
			service </font>
			<font face="Arial" style="font-size: 8.5pt" color="#008080">help 
			lines</font><font face="Arial" style="font-size: 8.5pt" color="#333333">.
			</font>
			<hr color="#669999" size="1" width="80%">
			<p style="margin-left: 10px; margin-top: 10px">
			<font face="Arial" style="font-size: 8.5pt" color="#333333">Please, 
			note that your name and phone number will be required to complete 
			your subscription if you are paying through </font>
			<font face="Arial" style="font-size: 8.5pt" color="#0000FF">cheque</font><font face="Arial" style="font-size: 8.5pt" color="#333333"> 
			or </font>
			<font face="Arial" style="font-size: 8.5pt" color="#0000FF">bank 
			draft</font><font face="Arial" style="font-size: 8.5pt" color="#333333">.
			</font></td>
			<td>&nbsp;</td>
			<td height="327">&nbsp;</td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td height="21"></td>
			</tr>
		<tr>
			<td valign="top" colspan="4" height="48"><hr color="#669999" size="4">
			<p style="margin-top: 0; margin-bottom: 0" align="center">
			<font color="#669999"><font face="Arial">
					<span style="font-size: 8pt">O. Sunnyvic</span></font><sup><font face="Arial"><span style="font-size: 8pt"> 
					®</span></font></sup></font></td>
		</tr>
		<tr>
			<td width="225"></td>
			<td width="19"></td>
			<td width="529"></td>
			<td height="11" width="62"></td>
			</tr>
				</table>
			</div>
			