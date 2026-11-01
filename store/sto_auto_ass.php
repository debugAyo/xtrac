
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
	<table cellpadding="0" cellspacing="0" width="786" height="550">
		<!-- MSTableType="layout" -->
		<tr>
		<td>&nbsp;</td>
			<td height="45">&nbsp;</td>
		</tr>
		<tr>
	<td valign="top">
						<table border="0" width="100%" cellspacing="0" cellpadding="1">
									<tr><form action="auth_autoass.php" enctype="multipart/form-data" method="post">
									<font face="Arial">
									<input type="hidden" name="email" value="<?php echo $email;?>" size="15">
										<input type="hidden" name="pin" value="<?php echo $pin;?>" size="15">
											</font>
											<td width="20%">
											<p style="margin-left: 8px">
											<span style="font-weight: 700">
											<font face="Arial" style="font-size: 12pt; background-color:#0000FF" color="#FFFFFF">
											&nbsp;Vehicle </font></span></td>
											<td width="29%">
											&nbsp;</td>
											<td width="20%">
											&nbsp;</td>
											<td width="26%">
																						
											&nbsp;</td>
									</tr>
									<font color="#000000" face="arial" size="2">
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="20%">
										&nbsp;</td>
										<td style="background-color: #FFFFFF" align="left" width="29%">
											&nbsp;</td>
											<td style="background-color: #FFFFFF" width="20%">
											&nbsp;</td>
											<td style="background-color: #FFFFFF" width="26%">
																						
											&nbsp;</td>
									</tr>
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
										Asset Image (<font color="#0099CC">Max
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
										<select class="w3-input w3-border" size="1" name="dev_type" style="font-family: Arial; font-size: 10pt; color: #000000; border: 1px solid #C0C0C0">
	<option></option>
	<option>Bus</option>
	<option>Car</option>
	<option>Fork Lift</option>
	<option>Mini Van</option>
	<option>Motorcycle</option>
	<option>Pick Up</option>
	<option>Scooter</option>
	<option>SUV</option>
	<option>Truck</option>
	<option>Van</option>
	</select></td>

										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 5px">
										<font face="Arial" color="#333333" style="font-size: 9pt">
										Registration Number</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="reg_num" size="16"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									</tr>
									<tr>
										
										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 10px">
										<font face="Arial" color="#333333" style="font-size: 9pt">
										Model and
										Version</font></td>
											<td style="background-color: #FFFFFF" width="29%">
									<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="dev_mod" size="25"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>

										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt">
										Purchased Price (</font><s><span style="font-size: 9pt; font-family: 'Arial'" lang="EN-GB">N</span></s><font face="Arial" style="font-size: 9pt">)</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
									<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="purprice" size="16"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									</tr>
									<tr>
										
										<td style="background-color: #FFFFFF" align="left" width="21%">
										<p style="margin-left: 10px">
										<font face="Arial" style="font-size: 9pt" size="2">
										Department </font></td>
										<td style="background-color: #FFFFFF" align="left" width="33%">
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
										<td style="background-color: #FFFFFF" align="left" width="19%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt">
										User</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="owner" size="16"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									</tr>
									<tr>
										
										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 10px">
										<font face="Arial" style="font-size: 9pt">
										Vehicle Identification No.</font></td>
											<td style="background-color: #FFFFFF" width="29%">
									<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="vin" size="25"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>

										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 5px">
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
									</tr>
									<tr>
										
										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 10px">
										<font face="Arial" color="#333333" style="font-size: 9pt">
										Manufacturer</font></td>
											<td style="background-color: #FFFFFF" width="29%">
									<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="man_name" size="25"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>

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
										Procurement Date</font></td>
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
  } );
  </script>
</head>
										</font>
<body>
<input  class="w3-input w3-border" id="datepicker" size="37" style="border:1px solid #C0C0C0; font-family:Arial; font-size:10pt" name="prodt"><font face="Arial"> 
</body>
										</font>
</html></td>
									<font color="#000000" face="arial" size="2">

										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt" color="#333333">
										Make Year</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<font color="#000000" face="arial" size="2">
										<select size="1" class="w3-input w3-border" name="mk_year" style="font-family: Arial; font-size: 10pt; color: #333333; border: 1px solid #C0C0C0">
	<option></option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>
	<option>1998</option>
	<option>1999</option>
	<option>2000</option>
	<option>2001</option>
	<option>2002</option>
	<option>2003</option>
	<option>2004</option>
	<option>2005</option>
	<option>2006</option>
	<option>2007</option>
	<option>2008</option>
	<option>2009</option>
	<option>2010</option>
	<option>2011</option>
	<option>2012</option>
	<option>2013</option>
	<option>2014</option>
	<option>2015</option>
	<option>2016</option>
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
	<option>2031</option>
	<option>2032</option>
	<option>2033</option>
	<option>2034</option>
	<option>2035</option>
	<option>2036</option>
	<option>2037</option>
	<option>2038</option>
	<option>2039</option>
	<option>2040</option>
	</select></td>
										</font>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="20%">
										<p style="margin-left: 10px">
										<font face="Arial" style="font-size: 9pt" color="#333333">
										Initial Odometer / Hour</font></td>
										<td style="background-color: #FFFFFF" align="left" width="29%">
									<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="odometer" size="25"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
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
	<option>Active</option>
	<option>Faulty</option>
	<option>Obsolete</option>
	<option>Redundant</option>
	</select></td>
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
			<td height="484">&nbsp;</td>
		</tr>
		<tr>
			<td width="762">&nbsp;</td>
			<td height="21" width="24">&nbsp;</td>
		</tr>
	</table>
</div>



</body>

</html>