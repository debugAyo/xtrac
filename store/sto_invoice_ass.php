
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
	<table cellpadding="0" cellspacing="0" width="725" height="240">
		<!-- MSTableType="layout" -->
		<tr>
	<td></td>
	<td height="15"></td>
		</tr>
		<tr>
	<td width="549" valign="top">
						<table border="0" width="100%" cellspacing="0">
									<tr><form action="auth_sto_invass.php" enctype="multipart/form-data" method="post">
										<input type="hidden" name="email" value="<?php echo $email;?>" size="15">
										<input type="hidden" name="pin" value="<?php echo $pin;?>" size="15">											
										<td style="background-color: #FFFFFF" width="31%">
											<p style="margin-left: 8px"><b>
											<font face="Arial" style="font-size: 9pt">Add Invoice Here</font></b></td>
											<td style="background-color: #FFFFFF" width="68%">
											&nbsp;</td>
									</tr>
									<font color="#000000" face="arial" size="2">
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										<p style="margin-left: 8px" align="5">
										<font face="Arial" style="font-size: 9pt" color="#333333">
										Item ID </font></td>
										<td style="background-color: #FFFFFF" align="left" width="68%">
										<input class="w3-input w3-border" name="dev_id" size="37"  placeholder="ASSET ID" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										<p style="margin-left: 8px">
										<font face="Arial" color="#333333" style="font-size: 9pt">
										Vendor</font></td>
										<td style="background-color: #FFFFFF" align="left" width="68%">
									<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="vendor" size="37"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										<p style="margin-left: 8px">
										<font face="Arial" style="font-size: 9pt" color="#333333">
										Delivery </font>
										<font face="Arial" size="2" color="#333333" style="font-size: 9pt">
										&nbsp;</font><font face="Arial" color="#333333" style="font-size: 9pt">Date </font></td>
										<td style="background-color: #FFFFFF" align="left" width="68%">
									<html>
<head>
  <meta http-equiv="Content-Language" content="en-us">
  <font face="Arial">
  <meta charset="utf-8">
  <title>datepicker demo</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="codes/jquery-ui.js"></script>


<script>
 $( function() {
$( "#datepicker" ).datepicker();
});
</script>
</head>
  </font>
<body> 
<input id="datepicker" class="w3-input w3-border" name="sup_dt" size="37"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0"><font face="Arial">
</font>
 
</td>

</body>
</html>

									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										<p style="margin-left: 8px">
										<font face="Arial" color="#333333" style="font-size: 9pt">
										Order No</font></td>
										<td style="background-color: #FFFFFF" align="left" width="68%">
									<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="orderno" size="37"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										<p style="margin-left: 8px">
										<font face="Arial" color="#333333" style="font-size: 9pt">
										Invoice Description</font></td>
										<td style="background-color: #FFFFFF" align="left" width="68%">
										<font face="HP Simplified">
										<span style="font-size: 9pt">
										<textarea rows="1" class="w3-input w3-border" name="inv_dsc" cols="20" style="font-family: Arial; font-size: 9pt; color: #666666"></textarea></span></font></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="31%">
										<p style="margin-left: 8px">
										<font face="Arial" color="#333333" style="font-size: 9pt">
										Upload Invoice</font></td>
										<td style="background-color: #FFFFFF" align="left" width="68%">
										<input class="w3-input w3-border" type="file" name="image" size="20" style="font-family: Arial; font-size: 9pt; border: 1px solid #C0C0C0"></td>
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
			<td height="225" width="176">&nbsp;</td>
		</tr>
	</table>
</div>

</body>

</html>