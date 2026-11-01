<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>eHealth - Users Creator</title>
<script src="..\sample\datetimepicker_css.js"></script>
<script type="text/javascript" src="../Radiology/jquery-1.3.2.min.js"></script>
<script language="javascript" type="text/javascript">
function randomString() {
	var chars = "0123456789";
	var string_length = 4;
	var randomstring = '';
	for (var i=0; i<string_length; i++) {
		var rnum = Math.floor(Math.random() * chars.length);
		randomstring += chars.substring(rnum,rnum+1);
	}
	document.randform.randomfield.value = randomstring;
}
</script>
</head>

<body background="../../img/wallpaper.jpg">

<div align="center">
	<table cellpadding="0" cellspacing="0" background="img/wallpaper.jpg" width="979" height="547">
		<!-- MSTableType="layout" -->
		<tr>
			<td></td>
			<td></td>
			<td height="11"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td valign="top"><div align="center">
	<table cellpadding="0" cellspacing="0" width="685" height="424">
		<!-- MSTableType="layout" -->
		<tr>
			<td valign="top" bgcolor="#008080" rowspan="2">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="28">&nbsp;</td>
			</tr>
		<tr>
			<td valign="top" bgcolor="#008080" colspan="5" height="19">&nbsp;</td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td height="11"></td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#008080" colspan="6" height="47">&nbsp;</td>
		</tr>
		<tr>
			<td bgcolor="#F3F3F3"></td>
			<td bgcolor="#F3F3F3" colspan="3"></td>
			<td bgcolor="#F3F3F3"></td>
			<td bgcolor="#F3F3F3" height="21"></td>
			</tr>
		<tr><form action=aut_users.php name="randform" method=post>
			<td valign="top" bgcolor="#FFFFFF" rowspan="3" colspan="5">
			<table border="0" width="100%" cellspacing="1">
				<tr>
					<td>
					<p style="margin-left: 20px">
					<font face="Arial" style="font-size: 8.5pt">Title</font></td>
					<td width="126">
					<select size="1" name="title" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #008080">
	<option></option>
	<option>Engr</option>
	<option>Dr</option>
	<option>Mr</option>
	<option>Mrs</option>
	<option>Nur</option>
	<option>Prof</option>
	</select><body background="../../img/wallpaper.jpg"></body></td>
					<td width="118">
					&nbsp;</td>
					<td width="266">
					&nbsp;</td>
				</tr>
				<tr>
					<td>
					<p style="margin-left: 20px">
					<font face="Arial" style="font-size: 8.5pt">Full Name</font></td>
					<td width="126">
					<input type="text" name="fname" size="20" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #008080; "></td>
					<td width="118">
					<p style="margin-left: 15px">
					<font face="Arial" style="font-size: 8.5pt; font-weight: 700">
					Auto-Generate</font></td>
					<td width="266">
					
<input type="button" value="STAFF ID" onClick="randomString();" style="border:1px solid #008080; font-family: Arial; font-size: 8pt; background-color: #FFFFFF; font-weight:700">
					<input name="randomfield" style="border:1px solid #008080; font-family: DotumChe; color: #000000; font-size: 10pt; background-color: #FFFFFF; font-weight:700" size="6">

</td>
				</tr>
				<tr>
					<td height="21">
					<p style="margin-left: 20px">
					<font face="Arial" style="font-size: 8.5pt">Sex</font></td>
					<td width="126" height="21">
					<select size="1" name="sex" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #008080">
	<option></option>
	<option>Female</option>
	<option>Male</option>
	</select></td>
					<td width="118" height="21">
					<p style="margin-left: 15px">
					<font face="Arial" style="font-size: 8.5pt">Phone No.</font></td>
					<td width="266" height="21">
					<input type="text" name="phone" size="22" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #008080; "></td>
				</tr>
				<tr>
								<script>
$(function() {
	$("#dept").change(function() {
		var selectedValue=$(this).val();

	$("#ward").val($(this).find("option:selected").attr("value"))
	
	});
		});

</script>
					<td>
					<p style="margin-left: 20px">
					<font face="Arial" style="font-size: 8.5pt">Department</font></td>
					<td width="126">
					<select size="1" name="dept" id="dept" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #008080">
	<option></option>
	<option value="Account">Account</option>
	<option value="Admin">Admin</option>
	<option value="ICT">ICT</option>
	<option value="Records">Records</option>
	</select></td>
					<td width="118">
					<p style="margin-left: 15px">
					<font face="Arial" style="font-size: 8.5pt">Date of Birth</font></td>
					<td width="266">
					        <input id="demo5" maxlength="15" size="15" style="border:1px solid #008080; font-family: Arial; font-size: 8pt; float:left" name="dt_birth"/><img border="0" src="../sample/images2/cal.gif" onclick="javascript:NewCssCal ('demo5','yyyyMMdd','arrow')" style="cursor:pointer" width="16" height="16"/></td>
				</tr>
				<tr>
					<td>
					<p style="margin-left: 20px">
					<font face="Arial" style="font-size: 8.5pt">Contact Address</font></td>
					<td width="126">
					<input type="text" name="con_add" size="22" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #008080; "></td>
					<td width="118">
					<p style="margin-left: 15px">
					<font face="Arial" style="font-size: 8.5pt">Date Employed</font></td>
					<td width="266">
										        <input id="demo6" maxlength="15" size="15" style="border:1px solid #008080; font-family: Arial; font-size: 8pt; float:left" name="dt_emp"/><img border="0" src="../sample/images2/cal.gif" onclick="javascript:NewCssCal ('demo6','yyyyMMdd','arrow')" style="cursor:pointer" width="16" height="16"/></td>
					</td>
				</tr>
				<tr>
					<td>
					<p style="margin-left: 20px">
					<font face="Arial" style="font-size: 8.5pt">E-mail Address</font></td>
					<td width="126">
					<input type="text" name="email" size="22" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #008080; "></td>
					<td width="118">
					<p style="margin-left: 15px">
					<font face="Arial" style="font-size: 8.5pt">Grade/Level</font></td>
					<td width="266">
	<select size="1" name="grd" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #008080">
	<option></option>
	<option>01</option>
	<option>02</option>
	<option>03</option>
	<option>04</option>
	<option>05</option>
	<option>06</option>
	<option>07</option>
	<option>08</option>
	<option>09</option>
	<option>10</option>
	<option>11</option>
	<option>12</option>
	<option>13</option>
	<option>14</option>
	<option>15</option>
	<option>16</option>
	</select></td>
				</tr>
				<tr>
					<td>
					<p style="margin-left: 20px">
					<font face="Arial" style="font-size: 8.5pt">State of Origin</font></td>
					<td width="126">
					<select size="1" name="st_org" style="font-family: Arial; font-size: 8.5pt; border: 0px solid #008080; background-color: #339966; color:#FFFFFF">
<option>International</option>
<option>Abia</option>
<option>Adamawa</option>
<option>Akwa-Ibom</option>
<option>Anambra</option>
<option>Bauchi</option>
<option>Bayelsa</option>
<option>Benue</option>
<option>Borno</option>
<option>Cross-River</option>
<option>Delta</option>
<option>Ebonyi</option>
<option>Edo</option>
<option>Ekiti</option>
<option>Enugu</option>
<option>FCT</option>
<option>Gombe</option>
<option>Imo</option>
<option>Jigawa</option>
<option>Kaduna</option>
<option>Kano</option>
<option>Katsina</option>
<option>Kebbi</option>
<option>Kogi</option>
<option>Kwara</option>
<option>Lagos</option>
<option>Niger</option>
<option>Ogun</option>
<option>Ondo</option>
<option>Osun</option>
<option>Oyo</option>
<option>Plataeu</option>
<option>Rivers</option>
<option>Sokoto</option>
<option>Taraba</option>
<option>Yobe</option>
<option>Zamfara</option>
</select></td>
					<td width="118">
					<p style="margin-left: 15px">
					<font face="Arial" style="font-size: 8.5pt; font-weight: 700">
					Next of Kin</font></td>
					<td width="266">
					<input name="nxkin" size="22" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #008080; ; color:#C0C0C0" value="Name">
					<b>/</b>
					<input type="text" name="nxk_tel" size="15" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #008080; ; color:#C0C0C0" value="phone No"></td>
				</tr>
				<tr>
					<td height="23">&nbsp;</td>
					<td width="126" height="23">
					&nbsp;</td>
					<td width="118">
					&nbsp;</td>
					<td width="266">
					&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td width="126">
					&nbsp;</td>
					<td width="118">
					<p align="center"><font color="#FFFFFF">
					<input type="submit" value="Create" name="B1" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #808080; color:#FFFFFF; font-weight:bold; background-color:#CC0000"></font><input type="reset" value="Reset" name="B2" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #808080"></td>
					<td width="266">
					&nbsp;</td>
				</form></tr>
			</table>
			</td>
			<td bgcolor="#FFFFFF" height="46">&nbsp;</td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF" height="71">&nbsp;</td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF" height="42">&nbsp;</td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF"></td>
			<td bgcolor="#FFFFFF"></td>
			<td bgcolor="#FFFFFF"></td>
			<td bgcolor="#FFFFFF"></td>
			<td bgcolor="#FFFFFF"></td>
			<td bgcolor="#FFFFFF" height="18"></td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF"></td>
			<td bgcolor="#FFFFFF"></td>
			<td bgcolor="#FFFFFF"></td>
			<td bgcolor="#FFFFFF"></td>
			<td bgcolor="#FFFFFF"></td>
			<td bgcolor="#FFFFFF" height="13"></td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF">&nbsp;</td>
			<td bgcolor="#FFFFFF" colspan="3">&nbsp;</td>
			<td bgcolor="#FFFFFF">
			<p align="right"><b><font face="Arial" size="2" color="#999966">
			HMO-CLIENT MANAGER</font></b></td>
			<td bgcolor="#FFFFFF" height="36">&nbsp;</td>
		</tr>
		<tr>
			<td bgcolor="#F3F3F3"></td>
			<td bgcolor="#F3F3F3"></td>
			<td bgcolor="#F3F3F3"></td>
			<td bgcolor="#F3F3F3"></td>
			<td bgcolor="#F3F3F3"></td>
			<td bgcolor="#F3F3F3" height="20"></td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#008080" colspan="6" height="41">
			<p align="center" style="margin-top: 10px">
			<font face="Arial" style="font-size: 8.5pt" color="#FFFFFF">
			o.sunnyvic © 2013-2016 | all rights reserved</font></td>
		</tr>
		<tr>
			<td width="48"></td>
			<td width="105"></td>
			<td width="14"></td>
			<td width="119"></td>
			<td width="354"></td>
			<td height="11" width="45"></td>
		</tr>
	</table>
</div>

			</td>
			<td height="443">&nbsp;</td>
		</tr>
		<tr>
			<td width="95">&nbsp;</td>
			<td width="787">&nbsp;</td>
			<td height="93" width="97">&nbsp;</td>
		</tr>
	</table>
</div>

</body>

</html>