<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>HMO CLIENT MANAGER</title>

<div align="center">
	<table cellpadding="0" cellspacing="0" width="835" height="402">
		<!-- MSTableType="layout" -->
		<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="58">&nbsp;</td>
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
			<td valign="top" bgcolor="#DFEAEA">
			<p style="margin-left: 10px; margin-top: 10px; margin-bottom: 0">
			<font face="Arial" style="font-size: 8.5pt" color="#333333">Dear 
			valued prospective Client. Please note that, the price shown in the 
			table is the cost of purchasing your desired package for one year.
			</font></p>
			<hr color="#669999" size="1" width="80%">
			<p style="margin-left: 10px; margin-top: 10px">
			<font face="Arial" style="font-size: 8.5pt" color="#333333">Kindly 
			verify each package with proper advice or counsel from our customer 
			service </font>
			<font face="Arial" style="font-size: 8.5pt" color="#008080">help 
			lines</font><font face="Arial" style="font-size: 8.5pt" color="#333333">.
			</font></td>
			<td>&nbsp;</td>
			<td valign="top">
			<div align="center">
				<table cellpadding="0" cellspacing="0" width="527" height="38">
					<!-- MSTableType="layout" -->
					<html>

<body>
<tr>
						<td width="525" valign="top"><html>

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
$age = $d_app-$d_birth;
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
echo '<font size=2, face=arial><center>';
echo "<b>You are:</b> $s_name <alt>$o_name <p>";
echo 'Your <b>Details</b> are <b>Previewed</b> below';
echo '</font>';
echo '</td></tr>';

?>
<?php 
	
include 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM e_registration WHERE serial='$_POST[randomfield]'");
$myrow = mysqli_fetch_array($result);
echo '</font>';
?><td height="38" width="2"></td>

</body>

</html>
</tr>
<table border="0" width="96%" cellspacing="1" cellpadding="0">
	<tr>
		<td width="130" bgcolor="#DFEAEA">
		&nbsp;</td>
		<td bgcolor="#DFEAEA">&nbsp;</td>
	</tr>
	<tr><form action="portal/records/ereg.php" method="post">
		<td width="130" bgcolor="#669999">
		<p style="margin-left: 15px">
		<font face="Arial" style="font-size: 8.5pt" color="#FFFFFF">Client ID </font>
		<font face="Arial" style="font-size: 7pt; font-weight:700" color="#FFFF00">
		&gt;&gt;</font></td>
		<td bgcolor="#DFEAEA"><font face="Arial">
		<input type="text" value="<?php echo ($myrow['serial']);?>" name="pkg" readonly size="15" style="border: 1px solid #DFEAEA; font-family:Arial; font-size:8.5pt"></font></td>
	</tr>
		<tr>
		<td width="130" bgcolor="#669999">
		<p style="margin-left: 15px">
		<font face="Arial" style="font-size: 8.5pt" color="#FFFFFF">Name&nbsp; </font>
		<font face="Arial" style="font-size: 7pt; font-weight:700" color="#FFFF00">
		&gt;&gt;</font></td>
		<td bgcolor="#DFEAEA">
			<input type="text" value="<?php echo ($myrow['surname'])echo '&nbsp;&nbsp;&nbsp';echo $myrow["other"];;?>" name="price" readonly size="15" style="border: 1px solid #DFEAEA; font-family:Arial; font-size:8.5pt"></td>
	</tr>
	<tr>
		<td width="130" bgcolor="#669999">
		<p style="margin-left: 15px">
		<font face="Arial" style="font-size: 8.5pt" color="#FFFFFF">Phone No:&nbsp; </font>
		<font face="Arial" style="font-size: 7pt; font-weight:700" color="#FFFF00">
		&gt;&gt;</font></td>
		<td bgcolor="#DFEAEA">
			<input type="text" value="<?php echo ($myrow['phone'])echo '&nbsp;&nbsp;&nbsp';echo $myrow["other"];;?>" name="price" readonly size="15" style="border: 1px solid #DFEAEA; font-family:Arial; font-size:8.5pt"></td>
	</tr>
	<tr>
		<td width="130" bgcolor="#DFEAEA">
		&nbsp;</td>
		<td bgcolor="#DFEAEA">
			&nbsp;</td>
	</tr>
	<tr>
		<td width="130" bgcolor="#DFEAEA">
		&nbsp;</td>
		<td bgcolor="#DFEAEA">
<input type="submit" value="Add to Cart" style="border:1px solid #808000; font-family: Arial; font-size: 8pt; color:#FFFFFF; background-color:#006666" name="login"><input type="reset" value="Cancel" style="border:1px solid #C0C0C0; font-family: Arial; font-size: 8pt; color:#FFFFFF; background-color:#CC0000"></td>
	</form></tr>
</table>

</body>

</html>
</td>
					<td height="172">&nbsp;</td>
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
			<td width="43"></td>
			<td width="529"></td>
			<td height="11" width="38"></td>
		</tr>
				</table>
			</div>
			