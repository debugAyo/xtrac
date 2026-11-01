<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Pefitam - Asset Update Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
</head>

<div align="center">
	<table cellpadding="0" cellspacing="0" width="767" height="31">
		<!-- MSTableType="layout" -->
		</table>
	<table cellpadding="0" cellspacing="0" width="796" height="828">
		<!-- MSTableType="layout" -->
	
		<tr>

	<td width="764" valign="top">
						<table border="0" width="100%" cellspacing="0">
									<tr>
							

											<td style="background-color: #FFFFFF" width="21%">
											&nbsp;</td>
											<td style="background-color: #FFFFFF" width="33%">
											&nbsp;</td>
											<td style="background-color: #FFFFFF" width="19%">
											&nbsp;</td>
											<td style="background-color: #FFFFFF" width="26%">
											&nbsp;</td>
									</tr>
									<tr>
							
									<form action="sto_auth_update_form.php" enctype="multipart/form-data" method="post">
										
									<font face="Arial">
										<input type="hidden" name="email" value="<?php echo $email;?>" size="15">
										<input type="hidden" name="pin" value="<?php echo $pin;?>" size="15">
										<input type="hidden" name="dev_id" value="<?php echo $dev_id;?>" size="15">


											</font>

											<td width="21%">
											<p style="margin-left: 8px">
											<b>
											<font face="Arial" style="font-size: 11pt">
											Update Item Data</font></b></td>
											<td width="33%">
											&nbsp;</td>
											<td width="19%">
											&nbsp;</td>
											<td width="26%">
											&nbsp;</td>
									</tr>
									<tr>
<td width="21%">
											&nbsp;</td>
											<td width="33%">
											&nbsp;</td>
											<td style="background-color: #FFFFFF" width="19%">
											<p style="line-height: 150%; margin-left: 5px">
											<font face="Arial" style="font-size: 9pt">
											Asset_ Category</font></td>
											<td style="background-color: #FFFFFF" width="26%">
																						
											<input class="w3-input w3-border" name="categ" size="25"  value="<?php echo $myrow['category'];  ?>" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									</tr>
									<td style="background-color: #FFFFFF" width="21%">
											<p style="margin-left: 8px">
										<font face="Arial" style="font-size: 9pt" color="#333333" size="2">
										Item&nbsp; ID </font></td>
											<td style="background-color: #FFFFCC" width="33%">
											<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="dev_id" size="37"  placeholder="PEFHQ001" readonly value="<?php echo $myrow['devid'];  ?>" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left; background-color:#FFFFCC"></td>
											<td style="background-color: #FFFFFF" width="19%">
											<font face="Arial" style="font-size: 9pt" color="#333333">&nbsp;Asset_ Type</font></td>
											<td style="background-color: #FFFFFF" width="26%">
											<font color="#000000" face="arial" size="2">
										<select size="1" class="w3-input w3-border" name="dev_type"  style="font-family: Arial; font-size: 10pt; color: #000000; border: 1px solid #C0C0C0">
	<option><?php echo $myrow['devtype'];  ?></option>
	<option>Access Point</option>
	<option>Antivirus</option>
	<option>Applications</option>
	<option>Blade Server</option>
	<option>Bridge</option>
	<option>Desktop</option>
	<option>Drivers</option>
	<option>Keyboard</option>
	<option>Laptop</option>
	<option>Phone</option>
	<option>Monitor</option>
	<option>Mouse</option>
	<option>Operating System</option>
	<option>Photocopier</option>
	<option>Plotter</option>
	<option>Printer</option>
	<option>Radio</option>
	<option>Router</option>
	<option>Scanner</option>
	<option>Spare Parts</option>
	<option>Switch</option>
	<option>U-Rack</option>
	</select></td>
									</tr>
									<tr>
											<td style="background-color: #FFFFFF" width="21%">
											<p style="margin-left: 5px">
											<font face="Arial" style="font-size: 9pt" color="#333333">
											Rack Mountable ?</font></td>
											<td style="background-color: #FFFFFF" width="33%">
										<font color="#000000" face="arial" size="2">
										<span style="background-color: #FFFFFF">
										<select size="1" class="w3-input w3-border" name="rackmnt" style="font-family: Arial; font-size: 10pt; color: #000000; border: 1px solid #C0C0C0; ">
	<option><?php echo $myrow['rackmount'];  ?></option>
	<option>Yes</option>
	<option>No</option>
	</select></span></td>
											<td style="background-color: #FFFFFF" width="19%">
											<p style="margin-left: 5px">
											<font face="Arial" style="font-size: 9pt" color="#333333">
											Maintenance Type</font></td>
											<td style="background-color: #FFFFFF" width="26%">
										<font color="#000000" face="arial" size="2">
										<select size="1" class="w3-input w3-border" name="maint_typ" style="font-family: Arial; font-size: 10pt; color: #000000; border: 1px solid #C0C0C0">
	<option><?php echo $myrow['maintype'];  ?></option>
	<option>Routine Maintenance</option>
	<option>Break and Fix</option>
	</select></td>
									</tr>
									<tr>
											<td style="background-color: #FFFFFF" width="21%">
											<p style="margin-left: 5px">
											<font face="Arial" style="font-size: 9pt" color="#333333">
											Item&nbsp; Image </font>
											<font face="Arial" style="font-size: 10pt; font-weight:700" color="#FF0000">
											*</font></td>
											<td style="background-color: #FFFFFF" width="33%">
										<input class="w3-input w3-border" type="file" accept="image/jpeg" name="image" size="18" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; "></td>
											<td style="background-color: #FFFFFF" width="19%">
											<p style="margin-left: 5px">
											<font face="Arial" style="font-size: 9pt" color="#333333">
											Maintenance Note</font></td>
											<td style="background-color: #FFFFFF" width="26%">
										<font face="HP Simplified">
										<span style="font-size: 9pt">
										<textarea rows="1" class="w3-input w3-border" name="maint_not" cols="20" style="font-family: Arial; font-size: 9pt; color: #666666"><?php echo $myrow['maintnote'];  ?></textarea></span></font></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="21%" height="21">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt" color="#333333">
										Item&nbsp; Name</font></td>
										<td style="background-color: #FFFFFF" align="left" width="33%" height="21">
										<input class="w3-input w3-border" name="dev_name" size="37"   value="<?php echo $myrow['devname'];  ?>" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left; background-color:#FFFFCC"></td>
											<html>
<body> 

</body>
</html>
											<td style="background-color: #FFFFFF" width="19%">
											<p style="margin-left: 5px">
											<font face="Arial" color="#333333">
											<span style="font-size: 9pt">HDs 
											(TB)</span></font></td>
											<td style="background-color: #FFFFFF" width="26%">
										<input class="w3-input w3-border" name="hd" size="25"  value="<?php echo $myrow['hardrive'];  ?>" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									</tr>
									<tr>
										
										<td style="background-color: #FFFFFF" align="left" width="21%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt; " color=#333333>
										Serial 
										Number</font></td>
										<td style="background-color: #FFFFFF" align="left" width="33%">
										<input class="w3-input w3-border" name="serial" size="37"   value="<?php echo $myrow['serial'];  ?>" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left; background-color:#FFFFCC"></td>
											<html>
<body> 

</body>
</html>
										
											<td style="background-color: #FFFFFF" width="19%">
											<p style="margin-left: 5px">
											<font face="Arial" color="#333333">
											<span style="font-size: 9pt">RAM 
											(GB)</span></font></td>

											<td style="background-color: #FFFFFF" width="26%">
										<input class="w3-input w3-border" name="ram" size="25" value="<?php echo $myrow['ramsize'];  ?>"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>

											<html>
<body> 

</body>
</html>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="21%" height="21">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt" color="#333333">Manufacturer 
										Name</font></td>
										<td style="background-color: #FFFFFF" align="left" width="33%" height="21">
										<input class="w3-input w3-border" name="man_name" size="37" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left; background-color:#FFFFCC" value="<?php echo $myrow['manuname'];  ?>"></td>
										<td style="background-color: #FFFFFF" align="left" width="19%" height="21">
										<p style="margin-left: 5px">
										<font face="Arial" color="#333333">
										<span style="font-size: 9pt">CPU Model / 
										Speed</span></font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%" height="21">
										<input class="w3-input w3-border" name="cpu_mod" size="25"  value="<?php echo $myrow['cpumode'];  ?>" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									</tr>
									<tr>
										<font color="#000000" face="arial" size="2">
										
											<td style="background-color: #FFFFFF" width="21%">
											<p style="margin-left: 5px">
											<font face="Arial" style="font-size: 9pt">
											Manufactured Date</font></td>
											<td style="background-color: #FFFFFF" width="33%">
										<html>
<head>
  <meta http-equiv="Content-Language" content="en-us">
  <font face="Arial">
  <meta charset="utf-8">
  <title>datepicker demo</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="../../../../resources/demos/style.css">
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
<input id="datepicker" class="w3-input w3-border" name="mandt" size="37"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; background-color:#FFFFCC"  value="<?php echo $myrow['mandate'];  ?>"><font face="Arial">
</font>
 
</td>

</body>
</html></font>
										<td style="background-color: #FFFFFF" align="left" width="19%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt" color="#333333">
										No of
										Cores/CPU</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<input class="w3-input w3-border" name="cor_cpu" size="25"  value="<?php echo $myrow['corecpu'];  ?>" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="21%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt; " color=#333333>
										MAC Address</font></td>
										<td style="background-color: #FFFFFF" align="left" width="33%">
										<input class="w3-input w3-border" name="mac" size="37"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left; background-color:#FFFFCC" value="<?php echo $myrow['macaddr'];  ?>"></td>
										<td style="background-color: #FFFFFF" align="left" width="19%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt">
										Asset Model</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<input class="w3-input w3-border" name="dev_mod" size="25" value="<?php echo $myrow['assmode'];  ?>" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left; background-color:#FFFFCC"></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="21%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt" color="#333333">
										IP Address </font></td>
										<td style="background-color: #FFFFFF" align="left" width="33%">
										<input class="w3-input w3-border" name="ipaddr" size="37"  placeholder="192.168.0.1" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left; " maxlength="15" value="<?php echo $myrow['ipaddress'];  ?>"></td>
										<td style="background-color: #FFFFFF" align="left" width="19%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt" color="#333333">
										Purchased Price (</font><s><span style="font-size: 9pt; font-family: 'Arial'" lang="EN-GB">N</span></s><font face="Arial" style="font-size: 9pt" color="#333333">)</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<input class="w3-input w3-border" name="pur_price" size="25"    value="<?php echo $myrow['purprice'];  ?>" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left; background-color:#FFFFCC"></td>
									</tr>
									<tr>
										<font color="#000000" face="arial" size="2">
										<td style="background-color: #FFFFFF" align="left" width="21%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt; " color=#333333>
										Warranty [year]</font></td>
										<td style="background-color: #FFFFFF" align="left" width="33%">
										<font color="#000000" face="arial" size="2">
										<span style="background-color: #FFFFFF">
										<select size="1" class="w3-input w3-border" name="warnty" style="font-family: Arial; font-size: 10pt; color: #000000; border: 1px solid #C0C0C0; ">
	<option><?php echo $myrow['waranty'];  ?></option>
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>
	</select></span></td>
										<td style="background-color: #FFFFFF" align="left" width="19%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt" color="#333333">
										Current Price (</font><s><span style="font-size: 9pt; font-family: 'Arial'" lang="EN-GB">N</span></s><font face="Arial" style="font-size: 9pt" color="#333333">)</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<input class="w3-input w3-border" name="cur_price"  size="25" value="<?php echo $myrow['curprice'];  ?>" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
										</font>
									</tr>
									<tr>
										<font color="#000000" face="arial" size="2">
										<td style="background-color: #FFFFFF" align="left" width="21%">
										<p style="margin-left: 5px" align="5">
										</font>
										<font face="Arial" style="font-size: 9pt" color="#333333">Date 
										of Procurement</font></td>
										<html>
										<td style="background-color: #FFFFFF" align="left" width="33%">
										<font face="Arial">
										<script>
  $( function() {

    $( "#datepicker2" ).datepicker();
  } );
  </script>
</head>
										</font>
<body>
</body>
										<font color="#000000" face="arial" size="2">
<input id="datepicker2" class="w3-input w3-border" size="37" style="border:1px solid #C0C0C0; font-family:Arial; font-size:10pt; background-color:#FFFFCC" name="prodt"  value="<?php echo $myrow['prodate'];  ?>"></font><body><font face="Arial"> 
</body>
										</font>
</html></td>
										<td style="background-color: #FFFFFF" align="left" width="19%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt" color="#333333">
										Item Version</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<input class="w3-input w3-border" name="dev_version" size="25"  value="<?php echo $myrow['deversion'];  ?>" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
										</font>
									</tr>
									<tr>
										<font color="#000000" face="arial" size="2">
										<td style="background-color: #FFFFFF" align="left" width="21%">
										<p align="5" style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt" color="#333333">
										Item Status</font></td>
										<html>
										<html>
										<td style="background-color: #FFFFFF" align="left" width="33%">
										<font color="#000000" face="arial" size="2">
										<select size="1" class="w3-input w3-border" name="dev_stat"  style="font-family: Arial; font-size: 10pt; color: #000000; border: 1px solid #C0C0C0">
	<option><?php echo $myrow['devstat'];  ?></option>
	<option>Active</option>
	<option>Defective</option>
	<option>Being Serviced</option>
	<option>Obsolete</option>
	<option>Stored</option>
	</select></td>
</html>
										<td style="background-color: #FFFFFF" align="left" width="19%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt" color="#333333">
										Current Version</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="cur_version"  size="25"  value="<?php echo $myrow['curversion'];  ?>" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
</html>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="21%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt" color="#333333" size="2">
										Department </font></td>
										<td style="background-color: #FFFFFF" align="left" width="33%">
										<font color="#000000" face="arial" size="2">
										<select size="1" class="w3-input w3-border" name="dept" style="font-family: Arial; font-size: 10pt; color: #000000; border: 1px solid #C0C0C0">
	<option><?php echo $myrow['deptmnt'];  ?></option>
	<option>Admin</option>
	<option>Audit</option>
	<option>Depot</option>
	<option>ES Office</option>
	<option>Fin & Acct</option>
	<option>Corporate Services</option>
	<option>Customer Service</option>
	<option>IT</option>
	<option>Legal</option>
	<option>Operations</option>
	<option>Procurement</option>
	<option>Security</option>
	<option>Stores</option>
	</select></td>
	
										<td style="background-color: #FFFFFF" align="left" width="19%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt" color="#333333">
										Vendor's Name</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<input class="w3-input w3-border" name="vendor" size="25"   value="<?php echo $myrow['vendor'];  ?>" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left; background-color:#FFFFCC"></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="21%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt" color="#333333">
										Location </font></td>
										<td style="background-color: #FFFFFF" align="left" width="33%">
										<input class="w3-input w3-border" name="location" size="37" value="<?php echo $myrow['location'];  ?>" placeholder="RM-5B002" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left"></td>
										<td style="background-color: #FFFFFF" align="left" width="19%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt" color="#333333" size="2">
										Phone No.</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="phone" size="25" value="<?php echo $myrow['phone'];  ?>" style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left; background-color:#FFFFCC"></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="19%" height="21">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt">
										Life Cycle of Item </font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%" height="21">
										<font color="#000000" face="arial" size="2">
										<select size="1" class="w3-input w3-border" name="cpu" style="font-family: Arial; font-size: 10pt; color: #000000; border: 1px solid #C0C0C0">
	
	
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
										<td style="background-color: #FFFFFF" align="left" width="19%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt">
										Owner</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="owner" size="25"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left" value="<?php echo $myrow['owner'];  ?>"></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="19%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt">
										Dependency</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<font color="#000000" face="arial" size="2">
										<input class="w3-input w3-border" name="depend" size="25"  style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left" value="<?php echo $myrow['dependnt'];  ?>"></td>
										<td style="background-color: #FFFFFF" align="left" width="19%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt">
										Recommendation</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
											<font color="#000000" face="arial" size="2">
										<select size="1" class="w3-input w3-border" name="recomm" style="font-family: Arial; font-size: 10pt; color: #000000; border: 1px solid #C0C0C0">
	<option></option>
	<option><?php echo $myrow['recommnd'];  ?></option>
	<option>To be Disposed</option>
	<option>To be Repaired</option>
	<option>To be Replaced</option>
	</select></td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="19%">
										<p style="margin-left: 5px">
										<font face="Arial" style="font-size: 9pt">
										Logged By</font></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										<input class="w3-input w3-border" name="log_usr" size="25"   style="font-family: Arial; font-size: 10pt; border: 1px solid #C0C0C0; float:left" value="<?php echo $myrow["loguser"];?>"></td>
										<td style="background-color: #FFFFFF" align="left" width="19%">
										&nbsp;</td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										&nbsp;</td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="21%">
										&nbsp;</td>
										<td style="background-color: #FFFFFF" align="left" width="33%">
										&nbsp;</td>
										<td style="background-color: #FFFFFF" align="left" width="19%">
										&nbsp;</td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										&nbsp;</td>
									</tr>
									<tr>
										
											<td style="background-color: #FFFFFF" width="21%">
											&nbsp;</td>
											<td style="background-color: #FFFFFF" width="33%">
										<html>
<body> 
 
</td>

</body>
</html>
										<td style="background-color: #FFFFFF" align="left" width="19%">
										&nbsp;</td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										&nbsp;</td>
									</tr>
									<tr>
										<td style="background-color: #FFFFFF" align="left" width="21%">
										&nbsp;</td>
										<td style="background-color: #FFFFFF" align="center" width="52%" colspan="2">
										<font color="#000000" face="arial" size="2">
										<input type="submit" value="Update" name="submit" style="font-family: Arial; font-size: 12pt; border: 1px solid #808080; color:#FFFFFF; background-color:#FF0066"><input type="reset" value="Reset" name="B6" style="font-family: Arial; font-size: 12pt; border: 1px solid #808080"></td>
										<td style="background-color: #FFFFFF" align="left" width="26%">
										&nbsp;</td>
									</form></tr>
									</table></td>
		<td height="828" width="32">&nbsp;</td>
		</tr>
	</table>
	<p></div>