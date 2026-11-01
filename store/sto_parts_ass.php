
<html>

<head>
  <meta http-equiv="Content-Language" content="en-us">
  <meta charset="utf-8">
  <title>datepicker demo</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
<meta http-equiv="Content-Language" content="en-us">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
</head>

<body>

<div align="center">
	<table cellpadding="0" cellspacing="0" width="725" height="247">
		<!-- MSTableType="layout" -->
		<tr>
	<td>&nbsp;</td>
	<td height="22">&nbsp;</td>
		</tr>
		<tr>
	<td width="681" valign="top">
						<table border="0" width="98%" cellspacing="0">
									<tr><form action="auth_sto_partass.php" method="post">
									<input type="hidden" name="email" value="<?php echo $email;?>" size="15">
										<input type="hidden" name="pin" value="<?php echo $pin;?>" size="15">

											<td style="background-color: #FFFFFF" width="31%">
											<p style="margin-left: 8px">
											<font face="Arial" style="font-size: 9pt; font-weight: 700">Add Spare Parts Here</font></td>
											<td style="background-color: #FFFFFF" width="68%">
											&nbsp;</td>
									</tr>
									<font color="#000000" face="arial" size="2">
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										<p style="margin-left: 8px" align="5">
										<font face="Arial" style="font-size: 10pt" color="#333333">
										Item ID </font></td>
										<td style="background-color: #FFFFFF" align="left" width="68%">
										<input class="w3-input w3-border" name="dev_id" size="37"  placeholder="ASSET ID" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										<p style="margin-left: 8px">
										<font face="Arial" color="#333333" style="font-size: 10pt">
										Type</font></td>
										<td style="background-color: #FFFFFF" align="left" width="68%">
										<font color="#000000" face="arial" size="2">
										<select size="1" class="w3-input w3-border" name="dev_type" style="font-family: Arial; font-size: 10pt; color: #000000; border: 1px solid #C0C0C0">
	<option></option>
	<option>Spare Parts</option>
	</select></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										<p style="margin-left: 8px">
										<font face="Arial" size="2" color="#333333">
										Parts Name</font></td>
										<td style="background-color: #FFFFFF" align="left" width="68%">
										<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="prt_name" size="37"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										<p style="margin-left: 8px">
										<font face="Arial" color="#333333" style="font-size: 10pt">
										Manufacturer</font></td>
										<td style="background-color: #FFFFFF" align="left" width="68%">
										<input class="w3-input w3-border" name="maname" size="37" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										<p style="margin-left: 8px">
										<font face="Arial" color="#333333" style="font-size: 10pt">
										Model</font></td>
										<td style="background-color: #FFFFFF" align="left" width="68%">
										<input class="w3-input w3-border" name="model" size="37" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										<p style="margin-left: 8px">
										<font face="Arial" color="#333333" style="font-size: 10pt">
										Serial No.</font></td>
										<td style="background-color: #FFFFFF" align="left" width="68%">
										<input class="w3-input w3-border" name="serial" size="37" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										<p style="line-height: 150%; margin-left: 8px">
										<font face="Arial" color="#333333" style="font-size: 10pt" size="2">
										Batch No.</font></td>
										<td style="background-color: #FFFFFF" align="left" width="68%">
										<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="batchno" size="37" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										&nbsp;</td>
										<td style="background-color: #FFFFFF" align="left" width="68%">
										&nbsp;</td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										&nbsp;</td>
										<td style="background-color: #FFFFFF" align="left" width="68%">
										<font color="#000000" face="arial" size="2">
										<input type="submit" value="Add" name="B5" style="font-family: Arial; font-size: 12pt; border: 1px solid #808080; color:#FFFFFF; background-color:#FF0066"><input type="reset" value="Reset" name="B6" style="font-family: Arial; font-size: 12pt; border: 1px solid #808080"></td>
									</form></tr>
									</table></td>
			<td height="225" width="44">&nbsp;</td>
		</tr>
	</table>
</div>


</body>

</html>