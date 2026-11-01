
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

<div align="left">
	<table cellpadding="0" cellspacing="0" width="786" height="189">
		<!-- MSTableType="layout" -->
		<tr>
	<td valign="top" width="496">
						<table border="0" width="98%" cellspacing="0">
									<tr>

											<td style="background-color: #FFFFFF" width="31%">
											&nbsp;</td>
											<td style="background-color: #FFFFFF" width="68%">
											&nbsp;</td>
									</tr>
									<tr>

											<td style="background-color: #FFFFFF" width="31%">
											<p style="margin-left: 8px">
											<span style="font-weight: 700">
											<font face="Arial" style="font-size: 9pt">
											Delete Asset here!</font></span></td>
											<td style="background-color: #FFFFFF" width="68%">
											<p align="left" style="margin-left: 5px">
											<i><font face="Arial" size="2">Use 
											this field to delete
											<font color="#FF0066">disposed</font> 
											asset's record from the database</font></i></td>
									</tr>
									<tr><form action="sto_auth_assdelete.php" method="post">
									<input type="hidden" name="email" value="<?php echo $email;?>" size="15">
										<input type="hidden" name="pin" value="<?php echo $pin;?>" size="15">

											<td style="background-color: #FFFFFF" width="31%">
											<p style="margin-left: 8px">
											&nbsp;</td>
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
										<input class="w3-input w3-border" name="dev_id" size="37"  placeholder="PEFHQ001" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
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
										<input type="submit" value="Delete" name="B5" style="font-family: Arial; font-size: 12pt; border: 1px solid #808080; color:#FFFFFF; background-color:#FF0066"><input type="reset" value="Reset" name="B6" style="font-family: Arial; font-size: 12pt; border: 1px solid #808080"></td>
									</form></tr>
									</table></td>
			<td height="189" width="290">&nbsp;</td>
		</tr>
	</table>
</div>


</body>

</html>