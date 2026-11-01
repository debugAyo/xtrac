<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>HMO Client Manager - l Registration</title>
<script src="../sample/datetimepicker_css.js"></script>
<script type="text/javascript" src="../Radiology/jquery-1.3.2.min.js"></script>
<script language="javascript" type="text/javascript">
function randomString() {
	var chars = "0123456789";
	var string_length = 6;
	var randomstring = '';
	for (var i=0; i<string_length; i++) {
		var rnum = Math.floor(Math.random() * chars.length);
		randomstring += chars.substring(rnum,rnum+1);
	}
	document.randform.randomfield.value = randomstring;
}
</script>

</head>

<body topmargin="1">

<p>&nbsp;</p>
<div align="center">
	<table cellpadding="0" cellspacing="0" width="804" height="386" bgcolor="#FFFFFF">
		<!-- MSTableType="layout" -->
		<tr>
			<td valign="top" colspan="3" bgcolor="#008080">
			<p style="margin-left: 15px; margin-top: 10px">
			<font color="#FFFFFF" face="Arial" style="font-size: 9pt; ">HMO CLIENT MANAGER </font></td>
			<td valign="top"><?php 
			echo '<font face=arial size=1>';
$pkg=$_POST['pkg'];
if (!$pkg) {
echo 'Unauthorized! Access Denied';
exit();
}
echo '</font>';
?></td>
			<td>&nbsp;</td>
			<td height="32"></td>
			</tr>
		<tr>
			<td valign="top" bgcolor="#008080" colspan="5">&nbsp;</td>
			<td height="32"></td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td height="12"></td>
			</tr>
		<tr>
			<td valign="top" bgcolor="#F4F4F4">
			<p style="margin-left: 10px">
			<font face="Arial" style="font-size: 9pt; font-weight: 700">
			<font color="#CC0000">&lt;&lt;</font>
			<a style="text-decoration: none" href="index.php">
			<font color="#000000">Back</font></a></font></td>
			<td></td>
			<td valign="top" colspan="2">
			<p align="center"><b><font face="Tw Cen MT Condensed">CLIENT'S 
			SUBSCRIPTION FORM</font></b></td>
			<td></td>
			<td height="21"></td>
			</tr>
		<tr>
			<td width="74"></td>
			<td width="33"></td>
			<td width="143"></td>
			<td width="492"></td>
			<td width="58"></td>
			<td height="11"></td>
			</tr>
		<tr>
			<td valign="top" colspan="5">
			<div align="center">
						<table border=0 width="800" id="table1">
<tr>
<form method="POST" name="randform" action="auto_reg.php">
<td width=92 bgcolor="#DDE8E8">
<p style="margin-left: 4px"><span style="font-weight: 700">
<font face="Arial" style="font-size: 7pt">Security Code:</font></span></td>
<td width=128 bgcolor="#DDE8E8">
					
<input type="button" value="CLICK" onClick="randomString();" style="border:1px solid #008080; font-family: Arial; font-size: 8pt; background-color: #FFFFFF; font-weight:700">
					<input type="password" name="randomfield" readonly style="border:1px solid #008080; font-family: Arial; color: #000000; font-size: 8.5pt; background-color: #FFFFFF; " size="6">

</td>
<td width=149 bgcolor="#DDE8E8">
&nbsp;</td>
<td width=126 bgcolor="#DDE8E8">
&nbsp;</td>
<td width=61 bgcolor="#DDE8E8">
&nbsp;</td>
<td width=96 bgcolor="#DDE8E8">
&nbsp;</td>
</tr>
<tr>
<td width=92 align="left" bgcolor="#DDE8E8">
<p style="margin-left: 4px; margin-top: 3px">
<span style="font-weight: 700"><font face="Arial" style="font-size: 7pt">Surname:</font></span></td>
<td width=128 valign="top">
<font face="Arial"><span style="font-size: 7pt">
<input name="s_name" size="20" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
<td width=149>
<span style="font-weight: 700"><font face="Arial" style="font-size: 7pt">
Other Name(s):</font></span></td>
<td width=126>
<font face="Arial"><span style="font-size: 7pt">
<input name="o_name" size="20" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
<td width=61>
<font face="Arial" style="font-size: 7pt; font-weight: 700">Sex:</font></td>
<td width=96>
<select size="1" name="seks" style="font-family: Arial; font-size: 8pt; border: 0px solid #008080; background-color: #DDE8E8">
<option>--</option>
<option>M</option>
<option>F</option>
</select></td>
</tr>
<tr>
<td align="left" bgcolor="#DDE8E8">
<p align="left" style="margin-left: 4px; margin-top: 3px"><span style="font-weight: 700">
<font face="Arial" style="font-size: 7pt">Place of Origin:</font></span></td>
<td align="center">
<font face="Arial"><span style="font-size: 7pt">
<input name="p_origin" size="15" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
<td align="center" bgcolor="#999966">
<p align="left"><span style="font-weight: 700">
<font face="Arial" style="font-size: 7pt" color="#FFFFFF">Client's Address:</font></span></td>
<td align="center">
<font face="Arial"><span style="font-size: 7pt">
<input name="client_add" size="20" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
<td align="center">
<p align="left"><font face="Arial" style="font-size: 7pt; font-weight: 700">Date 
of Birth:</font></td>
<td align="center">
<p align="left">
                <input id="demo6" maxlength="15" size="15" style="border:1px solid #808080; font-family: Arial; font-size: 8pt; float:left" name="d_birth"/><img src="../sample/images2/cal.gif" onclick="javascript:NewCssCal ('demo6','yyyyMMdd','arrow')" style="cursor:pointer"/></td>
</tr>

<tr>
<td valign="top" bgcolor="#CC0000" align="left">
<p style="margin-left: 4px; margin-top: 3px">
<span style="font-weight: 700">
<font face="Arial" style="font-size: 7pt" color="#FFFFFF">Time of Application :</font></span></td>
<td align="center">
<div style="text-align:center; margin:2px auto 1px auto;">
        <input id="demo6" maxlength="15" size="22" style="border:1px solid #808080; font-family: Arial; font-size: 8pt; float:left" name="t_app" value="<?php echo date("H:i:s"); ?>"/> </td>
<td align="center">
<p align="left"><span style="font-weight: 700">
<font face="Arial" style="font-size: 7pt">Occupation:</font></span></td>
<td align="center">
<font face="Arial"><span style="font-size: 7pt">
<input name="job" size="20" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
<td align="center">
<p align="left"><font face="Arial" style="font-size: 7pt; font-weight: 700">
Phone No:</font></td>
<td align="center">
<input name="p_num" size="12" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></td>
</tr>

<tr>
<td valign="top" bgcolor="#C0C0C0" align="left">
<p style="margin-left: 4px; margin-top: 3px">
<span style="font-weight: 700"><font face="Arial" style="font-size: 7pt">Date of 
Application:</font></span></td>
<td align="center">
        <input id="demo5" maxlength="15" size="15" style="border:1px solid #808080; font-family: Arial; font-size: 8pt; float:left" name="d_app" value="<?php echo date(" Y-m-d"); ?>"/><img src="../sample/images2/cal.gif" onclick="javascript:NewCssCal ('demo5','yyyyMMdd','arrow')" style="cursor:pointer"/></td>
<td align="center">
<p align="left"><span style="font-weight: 700">
<font face="Arial" style="font-size: 7pt">Next of Kin:</font></span></td>
<td align="center">
<font face="Arial"><span style="font-size: 7pt">
<input name="n_kin" size="20" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
<td align="center">
<p align="left"><span style="font-weight: 700">
<font face="Arial" style="font-size: 7pt">Address:</font></span></td>
<td align="center">
<font face="Arial"><span style="font-size: 7pt">
<input name="n_kin_add" size="20" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
</tr>

<tr>
<td valign="top" align="left" bgcolor="#DDE8E8" colspan="6">
&nbsp;</td>
</tr>

<tr>
<td valign="top" align="left" bgcolor="#DDE8E8">
<p style="margin-left: 4px; margin-top: 3px">
<span style="font-weight: 700"><font face="Arial" style="font-size: 7pt">HMO 
Package:</font></span></td>
<td align="center">
		<p align="left">
<font face="Arial"><span style="font-size: 7pt">
<input name="hmo_pkg" size="20" readonly style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt" value="<?php $pkg=$_POST['pkg']; echo $pkg; ?>"></span></font></td>
<td align="left">
<p align="left"><span style="font-weight: 700">
<font face="Arial" style="font-size: 7pt">Annual Payment:</font></span></td>
<td align="left">
<font face="Arial"><span style="font-size: 7pt">
<input name="price" size="20" readonly style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt" value="<?php $price=$_POST['price']; echo $price; ?>"></span></font></td>
<td align="left">
<span style="font-weight: 700"><font face="Arial" style="font-size: 7pt">
Employer:</font></span></td>
<td align="center">
<font face="Arial"><span style="font-size: 7pt">
<input name="organization" size="20" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
</tr>

<tr>
<td valign="top">
<p style="margin-left: 4px">
<span style="font-weight: 700"><font face="Arial" style="font-size: 7pt">Family 
Name:</font></span></td>
<td align="center">
<font face="Arial"><span style="font-size: 7pt">
<input name="fmy_name" size="20" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
<td align="center">
&nbsp;</td>
<td align="center">
&nbsp;</td>
<td align="center">
&nbsp;</td>
<td align="center">
&nbsp;</td>
</tr>

<tr>
<td valign="top" bgcolor="#008080">
&nbsp;</td>
<td align="center" bgcolor="#008080">
&nbsp;</td>
<td align="center" bgcolor="#008080">
&nbsp;</td>
<td align="center" bgcolor="#008080">
&nbsp;</td>
<td align="center" bgcolor="#008080">
&nbsp;</td>
<td align="center" bgcolor="#008080">
&nbsp;</td>
</tr>

<tr>
<td valign="top">
&nbsp;</td>
<td align="center">
&nbsp;</td>
<td align="center">
&nbsp;</td>
<td align="center">
&nbsp;</td>
<td align="center">
&nbsp;</td>
<td align="center">
&nbsp;</td>
</tr>

<tr>
<td colspan="6" align="center">
<input type="submit" value="Add to Cart" style="border:1px solid #C0C0C0; font-family: Arial; font-size: 8.5pt" name="reg"><input type="reset" value="Reset" style="border:1px solid #C0C0C0; font-family: Arial; font-size: 8.5pt"></td></tr>

<tr>
<td colspan="6" align="center">
&nbsp;</td></tr>
</form>
</table>
						</div>
			</td>
			<td width="4" height="278"></td>
			</tr>
	</table>
</div>

</body>

</html>