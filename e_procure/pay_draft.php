<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Second Year</title>
</head>

<body>

	<table cellpadding="0" cellspacing="0" width="768" height="300" bgcolor="#FFFFFF">
		<!-- MSTableType="layout" -->
		<tr>
	<td>&nbsp;</td>
			<td valign="top" colspan="2" height="40">
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
				<!-- MSCellFormattingTableID="3" -->
				<tr>
					<td valign="top" height="100%" width="100%">
					<!-- MSCellFormattingType="content" -->
					<p style="margin-left: 20px; margin-top: 5px"><b>
			<font face="Arial" color="#333333">&nbsp;Payment via Bank Draft</font></b></td>
				</tr>
			</table>
	</td>
		</tr>
		<tr>
			<td width="13">&nbsp;</td>
			<td valign="top" width="490" height="260">
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
				<!-- MSCellFormattingTableID="1" -->
				<tr>
					<td valign="top" width="100%" height="100%">
					<!-- MSCellFormattingType="content" -->
					<div align="center">
						<table border=0 width="450" id="table1">
<tr>
<form method="POST" name="paydraft" enctype="multipart/form-data" action="auth_vendoreg_fin.php">
<td width=141>
&nbsp;</td>
<td width=250>
&nbsp;</td>
</tr>

<tr>
<td align="center">
&nbsp;</td>
<td align="center">
<p align="left"><font face="Arial" style="font-size: 8.5pt">Detailed Evidence of 
Payment by Draft</font></td>
</tr>

<tr>
<td align="left">
<font face="Arial" style="font-size: 8.5pt">Bank Draft No.</font>:</td>
<td align="center">
<font face="Arial"><span style="font-size: 7pt">
<input name="draft_no" size="36" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
</tr>

<tr>
<td align="left">
<font face="Arial" style="font-size: 8.5pt">Your Company Name:</font></td>
<td align="center">
<font face="Arial"><span style="font-size: 7pt">
<input name="draft_no0" size="36" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
</tr>

<tr>
<td align="left">
<font face="Arial" style="font-size: 8.5pt">Recipient's Bank Name:</font></td>
<td align="center">
<font face="Arial"><span style="font-size: 7pt">
<input name="bank_name" size="36" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
</tr>

<tr><?php 
$randomfield = $_POST['randomfield'];
include 'connect.php'; 
$query = "SELECT amnt FROM vendors_info WHERE code = '$randomfield'";
$result = mysqli_query($conn,$query);
$rows = mysqli_fetch_array($result);
?>

<td align="left" height="22">
<font face="Arial" style="font-size: 8.5pt">Recipient's Account No.:</font></td>
<td align="center" height="22">
<font face="Arial"><span style="font-size: 7pt">
<input name="bank_acct" size="36" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
</tr>

<tr>
<td align="center" height="22">
<p align="left"><font face="Arial" style="font-size: 8.5pt">Expected Amount:</font></td>
<td align="center" height="22">
<font face="Arial"><span style="font-size: 7pt">
<input name="exp_amnt" value="<?php echo $rows['amnt'];?>" readonly size="36" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
</tr>

<tr>
<td align="center" height="22">
<p align="left"><font face="Arial" style="font-size: 8.5pt">Actual Amount Paid:</font></td>
<td align="center" height="22">
<font face="Arial"><span style="font-size: 7pt">
<input name="paid_amnt" size="36" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
</tr>

<tr>
<td align="center" height="22">
<p align="left"><font face="Arial" style="font-size: 8.5pt">Scan Copy of Bank 
Draft.:</font></td>
<td align="center" height="22">
<p align="left">
<input type="file" accept="image/jpeg" name="image" size="8" style="font-family: Arial; font-size: 8pt; border: 1px solid #808080; color:#333333; "></td>
</tr>

<tr>
<td align="center" colspan="2">
<input type="submit" value="Pay Now" style="border:1px solid #C0C0C0; font-family: Segoe UI; font-size: 11pt; color:#FFFFFF; background-color:#0099CC" name="reg"><input type="reset" value="Cancel" style="border:1px solid #C0C0C0; font-family: Segoe UI; font-size: 11pt; color:#333333"></td>
</tr>

</form>
</table>
						</div>
					</td>
					</tr>
			</table>
			</td>
			<td width="12">&nbsp;</td>
			<td valign="top" height="260" bgcolor="#F0F0F0" width="253">
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
				<!-- MSCellFormattingTableID="2" -->
				<tr>
					<td valign="top" width="100%" height="100%" bgcolor="#F0F0F0">
					<!-- MSCellFormattingType="content" -->
					<p align="center" style="margin-top: 40px">
			<font face="Arial" style="font-size: 9pt">
			<marquee behavior=alternate direction="up" scrollamount="3" height="171" width="253"><img border="0" src="img/draft.jpeg" width="250" height="160"><marquee behavior=scroll direction="down" scrollamount="3" height="122"><img border="0" src="img/draft.jpeg" width="250" height="160"></marquee></font></td>
					</tr>
			</table>
			</td>
		</tr>
	</table>
	
</body>

</html>