
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
</head>

<body>

<div align="left">
	<table cellpadding="0" cellspacing="0" width="786" height="350">
		<!-- MSTableType="layout" -->
		<tr>
		<td>&nbsp;</td>
			<td height="45">&nbsp;</td>
		</tr>
		<tr>
	<td valign="top">
						<table border="0" width="100%" cellspacing="0" cellpadding="1">
									<tr><form action="auth_sto_consumass.php" enctype="multipart/form-data" method="post">
									<font face="Arial">
									<input type="hidden" name="email" value="<?php echo $email;?>" size="15">
										<input type="hidden" name="pin" value="<?php echo $pin;?>" size="15">
											</font>
											<td width="20%">
											<p style="margin-left: 8px">
											<span style="font-weight: 700">
											<font face="Arial" style="font-size: 12pt; background-color:#0000FF" color="#FFFFFF">
											&nbsp;Consumables </font></span></td>
											<td width="29%">
											&nbsp;</td>
											<td width="20%">
											&nbsp;</td>
											<td style="background-color: #FFFFFF" width="26%">
																						
											&nbsp;</td>
									</tr>
									<font color="#000000" face="arial" size="2">
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 10px" align="5">
										<font face="Arial" style="font-size: 9pt" color="#333333">
										Item ID </font></td>
										<td style="background-color: #FFFFFF" align="left" width="29%">
											<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="dev_id" size="25"  placeholder="ASSET ID" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
											<td style="background-color: #FFFFFF" width="20%">
											<p style="margin-left: 5px">
											<font face="Arial" style="font-size: 9pt">
											Asset_ Category</font></td>
											<td style="background-color: #FFFFFF" width="26%">
																						
											<font color="#000000" face="arial" size="2">
										<select class="w3-input w3-border" size="1" readonly name="list" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0">
	<option><?php echo $list;?></option>
	</select></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 10px">
										<font face="Arial" color="#333333" style="font-size: 9pt">
										Name</font></td>
										<td style="background-color: #FFFFFF" align="left" width="29%">
									<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="dev_name" size="25"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt">
										Asset Image </font>
										<font face="Arial" style="font-size: 9pt" color="#000000" size="2">
										(<font color="#0099CC">Max
										</font><font color="#DC143C">80kb</font>)</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<input class="w3-input w3-border" type="file" accept="image/jpeg" name="image" size="8" style="font-family: Arial; font-size: 9pt; border: 1px solid #C0C0C0"></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 10px">
										<font face="Arial" color="#333333" style="font-size: 9pt">
										Type</font></td>
										<td style="background-color: #FFFFFF" align="left" width="29%">
										<font color="#000000" face="arial" size="2">
										<select class="w3-input w3-border" size="1" name="dev_typ" style="font-family: Arial; font-size: 10pt; color: #000000; border: 1px solid #C0C0C0">
	<option></option>
	<option>Catridge</option>
	<option>Fuel</option>
	<option>Paper</option>
	<option>Pen</option>
	<option>Toner</option>
	</select></td>

										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="line-height: 150%; margin-left: 5px">
										<font face="Arial" style="font-size: 9pt" color="#333333">
										Description</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<textarea rows="2" name="descrp" class="w3-input w3-border" cols="20" style="font-family: Arial; font-size: 9pt"></textarea></td>
									</tr>
									<tr>
										
										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 10px">
										<font face="Arial" style="font-size: 9pt" size="2" color="#000000">
										Department </font></td>
											<td style="background-color: #FFFFFF" width="29%">
										<font color="#000000" face="arial" size="2">
										<select class="w3-input w3-border" size="1" name="dept" style="font-family: Arial; font-size: 10pt; color: #000000; border: 1px solid #C0C0C0">
	<option></option>
	<option>Admin</option>
	<option>Audit</option>
	<option>ED Office</option>
	<option>ES Office</option>
	<option>Fin &amp; Acct</option>
	<option>Corporate Services</option>
	<option>Customer Service</option>
	<option>IT</option>
	<option>Legal</option>
	<option>Maintenance</option>
	<option>MD Office</option>
	<option>Operations</option>
	<option>Procurement</option>
	<option>Security</option>
	<option>Stores</option>
	<option>Transport</option>	</select></td>

										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt" color="#333333">
										Batch Number</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="batch_num" size="16"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									</tr>
									<tr>
										
										<td style="background-color: #FFFFFF" align="left" width="21%">
										<p style="margin-left: 10px">
										<font face="Arial" style="font-size: 9pt">
										Quantity</font></td>
										<td style="background-color: #FFFFFF" align="left" width="33%">
										<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="qty1" id="qty1" size="16"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left" oninput="calculate()"></td>

										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt">
										Rate (</font><s><span style="font-size: 9pt; font-family: 'Arial'" lang="EN-GB">N</span></s><font face="Arial" style="font-size: 9pt">)</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
									<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="rate1" id="rt1" size="16"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left" oninput="calculate()"></td>
									</tr>
									<tr>
										
										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 10px">
										<font face="Arial" color="#333333" style="font-size: 9pt">
										Manufacturer</font></td>
											<td style="background-color: #FFFFFF" width="29%">
									<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="manuname" size="25"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>

										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt" color="#000000" size="2">
										Location </font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="location" size="16"  placeholder="RM-5B002" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									</tr>
										</font>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 10px">
										<font face="Arial" color="#333333" style="font-size: 9pt">
										Manufactured Date</font></td>
										<td style="background-color: #FFFFFF" align="left" width="29%">
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
})
$( function() {
$( "#datepicker1" ).datepicker();
});
</script>
</head>
  </font>
<body> 
<input id="datepicker" class="w3-input w3-border" name="mandt" size="25"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0"><font face="Arial">
</font>
 
</td>

</body>
</html></td>
									<font color="#000000" face="arial" size="2">

										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt" color="#333333">
										Procurement Date</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<input id="datepicker1" class="w3-input w3-border" name="prodt" size="25"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0"></td>
										</font>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 10px">
										<font face="Arial" style="font-size: 9pt" color="#000000" size="2">
										User</font></td>
										<td style="background-color: #FFFFFF" align="left" width="29%">
										<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="owner" size="25"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									<font color="#000000" face="arial" size="2">

										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt" color="#333333">
										Unit</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<font color="#000000" face="arial" size="2">
										<select class="w3-input w3-border" size="1" name="unit" style="font-family: Arial; font-size: 10pt; color: #000000; border: 1px solid #C0C0C0">
	<option></option>
	<option>Bundle</option>
	<option>Carton</option>
	<option>Dozen</option>
	<option>Litre</option>
	<option>Meter</option>
	<option>Piece</option>
	<option>Roll</option>
	</select></td>
										</font>
									</tr>
									<tr>
									<font color="#000000" face="arial" size="2">

										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 10px; line-height:150%">
										<font face="Arial" style="font-size: 9pt; " color="#000000" size="2">
										Warranty [year]</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<font color="#000000" face="arial" size="2">
										<select class="w3-input w3-border" size="1" name="warnty" style="font-family: Arial; font-size: 10pt; color: #000000; border: 1px solid #C0C0C0">
	<option></option>
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>
	</select></td>
										</font>
									<font color="#000000" face="arial" size="2">

										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt" color="#333333">
										Useful Life</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<font color="#000000" face="arial" size="2">
										<select size="1" class="w3-input w3-border" name="cpu" style="font-family: Arial; font-size: 10pt; color: #333333; border: 1px solid #C0C0C0">
	<option>0 year</option>
	<option>1 year</option>
	<option>2 years</option>
	<option>3 years</option>
	<option>4 years</option>
	<option>5 years</option>
	<option>6 years</option>
	<option>7 years</option>
	<option>8 years</option>
	<option>9 years</option>
	<option>10 years</option>
	</select></td>
										</font>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 10px">
										<font face="Arial" style="font-size: 9pt" color="#000000" size="2">
										Logged By</font></td>
										<td style="background-color: #FFFFFF" align="left" width="29%">
										<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="log_usr" size="25"  readonly style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left" value="<?php echo $myrow["fname"];?>"></td>
									<font color="#000000" face="arial" size="2">
										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 5px">
										<font face="Arial" color="#333333" style="font-size: 9pt">
										Status</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<font color="#000000" face="arial" size="2">
										<select class="w3-input w3-border" size="1" name="dev_stat" style="font-family: Arial; font-size: 10pt; color: #000000; border: 1px solid #C0C0C0">
	<option></option>
	<option>Deficient</option>
	<option>Excessive</option>
	<option>Limited</option>
	<option>Obsolete</option>
	<option>Sufficient</option>
	</select></td>
										</font>
									</tr>
									<tr>
									<font color="#000000" face="arial" size="2">
										
										<td style="background-color: #FFFFFF" align="left" width="21%">
										<p style="margin-left: 10px">
										&nbsp;</td>
										<td style="background-color: #FFFFFF" align="left" width="33%">
										
										&nbsp;</td>

										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt">
										Purchase Price (</font><s><span style="font-size: 9pt; font-family: 'Arial'" lang="EN-GB">N</span></s><font face="Arial" style="font-size: 9pt">)</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
									<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="purprice" id="price1" size="16"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
										</font>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="20%">
										&nbsp;</td>
										<td style="background-color: #FFFFFF" align="left" width="29%">
										&nbsp;</td>
										<td style="background-color: #FFFFFF" align="left" width="20%">
										&nbsp;</td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										
										&nbsp;</td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="20%">
										&nbsp;</td>
										<td style="background-color: #FFFFFF" align="left" width="29%">
										&nbsp;</td>
										<td style="background-color: #FFFFFF" align="left" width="20%">
										<font color="#000000" face="arial" size="2">
										<input type="submit" value="Add" name="B5" style="font-family: Arial; font-size: 12pt; border: 1px solid #808080; color:#FFFFFF; background-color:#FF0066"><input type="reset" value="Reset" name="B6" style="font-family: Arial; font-size: 12pt; border: 1px solid #808080"></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										
										&nbsp;</td>
									</form></tr>
									</table></td>
			<td height="289">&nbsp;</td>
		</tr>
		<tr>
			<td width="762"></td>
			<td height="16" width="24"></td>
		</tr>
	</table>
</div>

<script>

    function calculate() {
       
    var qty1,rt1; 
qty1 = document.getElementById('qty1').value; 
rt1 = document.getElementById('rt1').value; 
document.getElementById('price1').value = qty1 * rt1; 

      
    var qty2,rt2; 
qty2 = document.getElementById('qty2').value; 
rt2 = document.getElementById('rt2').value; 
document.getElementById('price2').value = qty2 * rt2; 

}

</script>


</body>

</html>