<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>eProcure - Vendor Reg</title>
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

<body topmargin="1" bgcolor="#F0F0F0">

<div align="center">
	<table cellpadding="0" cellspacing="0" width="1090" height="587" bgcolor="#FFFFFF">
		<!-- MSTableType="layout" -->
		<tr>
			<td>&nbsp;</td>
			<td></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="46">&nbsp;</td>
			</tr>
		<tr>
			<td>&nbsp;</td>
			<td valign="top" colspan="4" bgcolor="#9ED66B">
			<p style="margin-left: 15px; margin-top: 10px">
			<b><font face="Arial" style="font-size: 14pt" color="#FFFFFF">Vendor 
			Registration</font><font color="#FFFFFF" face="Arial" style="font-size: 9pt; "> </font>
			</b></td>
			<td valign="top" colspan="2"><?php 
			echo '<font face=arial size=1>';
$pkg=$_POST['pkg'];
if (!$pkg) {
echo 'Unauthorized! Access Denied';
exit();
}
echo '</font>';
?></td>
			<td height="32">&nbsp;</td>
			</tr>
		<tr>
			<td>&nbsp;</td>
			<td valign="top" bgcolor="#9ED66B" colspan="6">&nbsp;</td>
			<td height="32">&nbsp;</td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td height="12"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td valign="top" bgcolor="#F4F4F4">
			<p style="margin-left: 10px; margin-top:3px">
			<font color="#CC0000" face="Arial" style="font-size: 9pt">&lt;&lt;</font><font face="Arial" style="font-size: 9pt; font-weight: 700">
			<a style="text-decoration: none" href="index.php">
			<font color="#000000">Back</font></a></font></td>
			<td></td>
			<td valign="top" colspan="2">
			<p align="center"><b><font face="Segoe UI" color="#333333">VENDOR'S 
			REGISTRATION FORM</font></b></td>
			<td></td>
			<td height="21"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td height="5"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td></td>
			<td valign="top" bgcolor="#C0C0C0" colspan="5">
			<p style="margin-left: 5px; margin-top: 5px">
			<font face="Arial" style="font-size: 10pt; font-weight: 700" color="#DDE8E8">
			Company's Detail and General Information</font></td>
			<td height="26">&nbsp;</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td height="5"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td valign="top" colspan="6">
			<div align="center">
						<table border=0 width="1030" id="table1">
<tr>
<form method="POST" name="randform" action="auth_vendoreg.php">
<td width=161>
<p style="margin-left: 4px; margin-top:3px; margin-bottom:2px">
<font face="Arial" style="font-size: 8.5pt" color="#333333">Security Code:</font></td>
<td width=189>
					
<font color="#FFFFFF">
					
<input type="button" value="CLICK" onClick="randomString();" style="border:1px solid #808080; font-family: Arial; font-size: 8pt; background-color: #993333; color:#FFFFFF"></font><font face="Arial"><span style="font-size: 8pt">
</span></font>
					<input type="password" name="randomfield" readonly style="border:1px solid #808080; font-family: Arial; color: #000000; font-size: 8pt; background-color: #FFFFFF" size="6"><font face="Arial"><span style="font-size: 8pt">
</span></font>

</td>
<td width=141>
&nbsp;</td>
<td width=196>
&nbsp;</td>
<td width=120>
&nbsp;</td>
<td width=197>
&nbsp;</td>
</tr>
<tr>
<td width=161 align="left">
<p style="margin-left: 4px; margin-top: 3px; margin-bottom:2px">
<font face="Arial" style="font-size: 8.5pt" color="#333333">Name of Company:</font></td>
<td width=189 valign="top">
<font face="Arial"><span style="font-size: 7pt">
<input name="co_name" size="35" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
<td width=141>
<font face="Arial" style="font-size: 8.5pt" color="#333333">Office Contact 
Address:</font></td>
<td width=196>
<font face="Arial"><span style="font-size: 7pt">
<input name="co_office" size="35" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
<td width=120>
<font face="Arial" style="font-size: 8.5pt" color="#333333">E-Mail Address</font></td>
<td width=197>
<font face="Arial"><span style="font-size: 7pt">
<input name="co_email" size="35" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
</tr>
<tr>
<td align="left">
<p align="left" style="margin-left: 4px; margin-top: 3px; margin-bottom:2px">
<font face="Arial" style="font-size: 8.5pt" color="#333333">Website Address:</font></td>
<td align="center">
<font face="Arial"><span style="font-size: 7pt">
<input name="co_site" size="35" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
<td align="center">
<p align="left">
<font face="Arial" style="font-size: 8.5pt" color="#333333">Contact Name:</font></td>
<td align="center">
<font face="Arial"><span style="font-size: 7pt">
<input name="co_cont" size="35" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
<td valign="top" align="left">
<p style="margin-left: 0px; margin-top: 3px; margin-bottom:2px">
<font face="Arial" style="font-size: 8.5pt" color="#333333">TIN:</font></td>
<td align="center">
<p align="left">
					<input name="tin" style="border:1px solid #808080; font-family: Arial; color: #000000; font-size: 8pt; background-color: #FFFFFF" size="12"></td>
</tr>

<tr>
<td valign="top" align="left">
<p style="margin-left: 4px; margin-top: 3px; margin-bottom:2px">
<font face="Arial" style="font-size: 8.5pt" color="#333333">Time of Application :</font></td>
<td align="center">
<div style="text-align:center; margin:2px auto 1px auto;">
        <input id="demo6" maxlength="15" readonly size="22" style="border:1px solid #808080; font-family: Arial; font-size: 8pt; float:left" name="tm_app" value="<?php echo date("H:i:s"); ?>"/><font face="Arial"><span style="font-size: 8pt">
		</span></font> </td>
<td align="center">
<p align="left"><font face="Arial" style="font-size: 8.5pt" color="#333333">
Parent Company Name:</font></td>
<td align="center">
<font face="Arial"><span style="font-size: 7pt">
<input name="co_parent" size="35" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
<td align="center">
<p align="left"><font face="Arial" style="font-size: 8.5pt; " color="#333333">
Phone No:</font></td>
<td align="center">
<input name="co_phone" size="35" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></td>
</tr>

<tr>
<td valign="top" align="left">
<p style="margin-left: 4px; margin-top: 3px; margin-bottom:2px">
<font face="Arial" style="font-size: 8.5pt" color="#333333">Date of 
Application:</font></td>
<td align="center">
        <input id="demo5" maxlength="15" readonly size="15" style="border:1px solid #808080; font-family: Arial; font-size: 8pt; float:left" name="dt_app" value="<?php echo date(" Y-m-d"); ?>"/><font face="Arial"><span style="font-size: 8pt"><img src="../sample/images2/cal.gif" onclick="javascript:NewCssCal ('demo5','yyyyMMdd','arrow')" style="cursor:pointer"/></span></font></td>
<td align="center">
<p align="left"><font face="Arial" style="font-size: 8.5pt" color="#333333">
Subsidiary i:</font></td>
<td align="center">
<font face="Arial"><span style="font-size: 7pt">
<input name="sub_1" size="35" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
<td align="center">
<p align="left"><font face="Arial" style="font-size: 8.5pt" color="#333333">
Subsidiary ii:</font></td>
<td align="center">
<font face="Arial"><span style="font-size: 7pt">
<input name="sub_2" size="35" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
</tr>

<tr>
<td valign="top" align="left">
<p style="margin-left: 4px; margin-top: 3px; margin-bottom:2px">
<font face="Arial" style="font-size: 8.5pt" color="#333333">Registration 
Package:</font></td>
<td align="center">
		<p align="left">
<font face="Arial"><span style="font-size: 7pt">
<input name="reg_pkg" size="20" readonly style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt" value="<?php $pkg=$_POST['pkg']; echo $pkg; ?>"></span></font></td>
<td align="left">
<p align="left"><font face="Arial" style="font-size: 8.5pt" color="#333333">
Subscription Amount:</font></td>
<td align="left">
<font face="Arial"><span style="font-size: 7pt">
<input name="price" size="35" readonly style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt" value="<?php $price=$_POST['price']; echo $price; ?>"></span></font></td>
<td align="left">
<font face="Arial" style="font-size: 8.5pt" color="#333333">Overseas Rep:</font></td>
<td align="center">
<font face="Arial"><span style="font-size: 7pt">
<input name="oversea_rep" size="35" style="float: left; border: 1px solid #808080; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
</tr>

<tr>
<td valign="top" align="left">
<p style="margin-left: 4px; margin-top: 3px; margin-bottom:2px">
<font face="Arial" style="font-size: 8.5pt" color="#333333">Year Incorporated:</font></td>
<td align="center">
<p align="left">
					<!--webbot bot="Validation" s-data-type="Integer" s-number-separators="x" b-value-required="TRUE" i-minimum-length="4" i-maximum-length="4" s-validation-constraint="Equal to" s-validation-value="4" --><input name="yr_inc" style="border:1px solid #808080; font-family: Arial; color: #000000; font-size: 8pt; background-color: #FFFFFF" size="5" maxlength="4"></td>
<td align="center">
<p align="left"><font face="Arial" style="font-size: 8.5pt" color="#333333">No 
of Full-time Staff:</font></td>
<td align="center">
<p align="left">
					<input name="no_staff" style="border:1px solid #808080; font-family: Arial; color: #000000; font-size: 8pt; background-color: #FFFFFF" size="35"></td>
<td align="center">
<p align="left"><font face="Arial" style="font-size: 8.5pt" color="#333333">RC. 
No:</font></td>
<td align="center">
<p align="left">
					<input name="rc_no" style="border:1px solid #808080; font-family: Arial; color: #000000; font-size: 8pt; background-color: #FFFFFF" size="35"></td>
</tr>
<tr>
<td valign="top" align="left" bgcolor="#DDE8E8" colspan="6">
&nbsp;</td>
</tr>
<tr>
<td valign="top">
<p style="margin-left: 4px; margin-top:3px; margin-bottom:2px">
<font face="Arial" style="font-size: 8.5pt" color="#333333">Type of Business:</font></td>
<td align="center">
<p align="left"><font color="#333333">
<input type="checkbox" name="tob" value="Corporate / Limited" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #C0C0C0"></font><font face="Arial" style="font-size: 8.5pt" color="#333333">Corporate 
/ Limited</font></td>
<td align="center">
<p align="left"><font color="#333333">
<input type="checkbox" name="tob" value="Partnership" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #C0C0C0"></font><font face="Arial" style="font-size: 8.5pt" color="#333333"> 
Partnership </font></td>
<td align="center">
<p align="left"><font color="#333333">
<input type="checkbox" name="tob" value="ON" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #C0C0C0"></font><font face="Arial" style="font-size: 8.5pt" color="#333333"> 
Other [Specify]&nbsp; </font>
					<input name="tob" style="border:1px solid #808080; font-family: Arial; color: #000000; font-size: 8pt; background-color: #FFFFFF" size="14"></td>
<td align="center">
&nbsp;</td>
<td align="center">
&nbsp;</td>
</tr>
<tr>
<td align="left">
<p align="left" style="margin-left: 4px; margin-top: 3px; margin-bottom:2px">
<font face="Arial" style="font-size: 8.5pt" color="#333333">Nature of Business:</font></td>
<td align="center">
<p align="left"><font color="#333333">
<input type="checkbox" name="nob" value="Manufacturer" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #C0C0C0"><font face="Arial" style="font-size: 8.5pt">Manufacturer</font></font></td>
<td align="center">
<p align="left"><font color="#333333">
<input type="checkbox" name="nob" value="Authorized Agent" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #C0C0C0"></font><font face="Arial" style="font-size: 8.5pt" color="#333333">Authorized 
Agent</font></td>
<td align="center">
<p align="left"><font color="#333333">
<input type="checkbox" name="nob" value="Consulting Company" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #C0C0C0"></font><font face="Arial" style="font-size: 8.5pt" color="#333333">Consulting 
Company</font></td>
<td align="center">
<p align="left"><font color="#333333">
<input type="checkbox" name="nob" value="Trader" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #C0C0C0"><font face="Arial" style="font-size: 8.5pt">Trader</font></font></td>
<td align="center">
<p align="left"><font color="#333333">
<input type="checkbox" name="C8" value="ON" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #C0C0C0"></font><font face="Arial" style="font-size: 8.5pt" color="#333333"> 
Other [Specify]&nbsp; </font>
					<input name="nob" style="border:1px solid #808080; font-family: Arial; color: #000000; font-size: 8pt; background-color: #FFFFFF" size="14"></td>
</tr>

<tr>
<td valign="top" align="left">
&nbsp;</td>
<td align="center">
<p align="left"><font color="#333333">
<input type="checkbox" name="nob" value="Construction Company" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #C0C0C0"><font face="Arial" style="font-size: 8.5pt">Construction 
Company</font></font></td>
<td align="center">
<p align="left"><font color="#333333">
<input type="checkbox" name="nob" value="ICT Company" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #C0C0C0"><font face="Arial" style="font-size: 8.5pt">ICT 
Company</font></font></td>
<td align="center">
<p align="left"><font color="#333333">
<input type="checkbox" name="nob" value="Electrical Installations" style="font-family: Arial; font-size: 8.5pt; border: 1px solid #C0C0C0"><font face="Arial" style="font-size: 8.5pt">Electrical 
Installations Company</font></font></td>
<td align="center">
&nbsp;</td>
<td align="center">
&nbsp;</td>
</tr>

<tr>
<td valign="top" align="left">
<p style="margin-left: 4px">&nbsp;</td>
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
<input type="submit" value="Continue" style="border:1px solid #C0C0C0; font-family: Segoe UI; font-size: 11pt; color:#FFFFFF; background-color:#0099CC" name="reg"><input type="reset" value="Cancel" style="border:1px solid #C0C0C0; font-family: Segoe UI; font-size: 11pt"></td></tr>

<tr>
<td colspan="6" align="center">
&nbsp;</td></tr>
</form>
</table>
						</div>
			</td>
			<td height="329">&nbsp;</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td bgcolor="#C0C0C0"></td>
			<td bgcolor="#C0C0C0"></td>
			<td bgcolor="#C0C0C0"></td>
			<td bgcolor="#C0C0C0"></td>
			<td bgcolor="#C0C0C0"></td>
			<td height="21"></td>
			</tr>
		<tr>
			<td>&nbsp;</td>
			<td valign="top" colspan="6">
			<hr color="#9ED66B" size="4">
			<p style="margin-top: 0; margin-bottom: 0" align="center">
			<font face="Arial" style="font-size: 8pt" color="#666666">xTrac</font><font color="#666666"><sup><font face="Arial"><span style="font-size: 8pt"> 
					</span><span style="font-size: 7pt">TM</span></font></sup></font></td>
			<td height="41">&nbsp;</td>
		</tr>
		<tr>
			<td width="24"></td>
			<td width="5"></td>
			<td width="74"></td>
			<td width="28"></td>
			<td width="143"></td>
			<td width="716"></td>
			<td width="75"></td>
			<td height="17" width="25"></td>
		</tr>
	</table>
</div>

</body>

</html>