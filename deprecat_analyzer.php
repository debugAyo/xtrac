
<html>

<head>
  <meta http-equiv="Content-Language" content="en-us">
  <meta charset="utf-8">
  <title>datepicker demo</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <meta http-equiv="Content-Language" content="en-us">
  <meta charset="utf-8">
  <title>datepicker demo</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <meta http-equiv="Content-Language" content="en-us">
  <meta charset="utf-8">
  <title>datepicker demo</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
<meta http-equiv="Content-Language" content="en-us">
<link rel="stylesheet" href="w3.css">
</head>

<body>

<div align="left">
	<table cellpadding="0" cellspacing="0" width="745" height="225">
		<!-- MSTableType="layout" -->
		<tr>
	<td width="42">&nbsp;</td>
	<td width="703" height="225" valign="top">
						<table border="0" width="98%" cellspacing="0">
									<tr>
											<td style="background-color: #FFFFFF" width="31%">
											&nbsp;</td>
											<td style="background-color: #FFFFFF" width="68%">
											&nbsp;</td>
									</tr>
									<tr><form action="auth_financial_report.php" method="post">
									<font face="Arial">
									<input type="hidden" name="email" value="<?php echo $email;?>" size="15">
										<input type="hidden" name="pin" value="<?php echo $pin;?>" size="15">
											</font>
											<td style="background-color: #00BCD4" width="31%">
											<p style="margin-left: 8px">
											<span style="font-weight: 700">
											<font face="Arial" color="#FFFFFF">
											Analyze Depreciation Here</font></span></td>
											<td width="68%">
											&nbsp;</td>
									</tr>
									<font color="#000000" face="arial" size="2">
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										&nbsp;</td>
										<td align="left" width="68%">
										&nbsp;</td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										<p style="margin-left: 8px" align="5">
										<font face="Arial" style="font-size: 10pt" color="#333333">
										Item ID </font></td>
										<td align="left" width="68%">
										<input name="dev_id" size="37"  class="w3-input w3-border" placeholder="PEFHQ001" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										<p style="margin-left: 8px">
										<font face="Arial" size="2" color="#333333">
										Depreciation Method</font></td>
										<td style="background-color: #FFFFFF" align="left" width="68%">
									<font color="#000000" face="arial" size="2">
										<input name="deprecat_method" size="37"  class="w3-input w3-border" readonly style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left" value="Straight Line"></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										<p style="margin-left: 8px">
										<font face="Arial" size="2" color="#333333">
										Salvage Cost</font></td>
										<td style="background-color: #FFFFFF" align="left" width="68%">
									<font color="#000000" face="arial" size="2">
										<input name="salvage_cost" size="37" class="w3-input w3-border" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										<p style="margin-left: 8px">
										<font face="Arial" size="2" color="#333333">
										Depreciation Month</font></td>
										<td style="background-color: #FFFFFF" align="left" width="68%">
										<font color="#000000" face="arial" size="2">
										<select size="1" name="deprecat_month" class="w3-input w3-border" style="font-family: Arial; font-size: 10pt; color: #000000; border: 1px solid #C0C0C0">
	<option></option>
	<option>12</option>
	</select></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										<p style="margin-left: 8px">
										<font face="Arial" size="2" color="#333333">
										Account Reference</font></td>
										<td style="background-color: #FFFFFF" align="left" width="68%">
										<font color="#000000" face="arial" size="2">
										<select size="1" name="acct_ref" class="w3-input w3-border" style="font-family: Arial; font-size: 10pt; color: #000000; border: 1px solid #C0C0C0">
	<option></option>
	<option>NIRSAL2018001</option>
	</select></td>
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
										<input type="submit" value="Analyze" name="B5" style="font-family: Arial; font-size: 12pt; border: 1px solid #808080; color:#FFFFFF; background-color:#FF0066"><input type="reset" value="Reset" name="B6" style="font-family: Arial; font-size: 12pt; border: 1px solid #808080"></td>
									</form></tr>
									</table></td>
		</tr>
	</table>
</div>

</body>

</html>