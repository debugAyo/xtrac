<html>
<head>
<LINK REL="SHORTCUT ICON"
       HREF="images/pef_logo.gif">
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Pefitam -&nbsp; User Interface</title>

</head>

<body bgcolor="#EEEEEE">
<td valign="top" colspan="9" rowspan="2" style="border: 1px dotted #008080">
</td>
<div align="center">
<table cellpadding="0" cellspacing="0" width="903" height="662" bgcolor="#FFFFFF">
	<!-- MSTableType="layout" -->
	<html>

<body bgcolor="#EEEEEE">

</body></html>
	<html>

<body bgcolor="#EEEEEE">
		<tr>
	<td height="637" valign="top">
	<table cellpadding="0" cellspacing="0" width="953" height="631">
		<!-- MSTableType="layout" -->
		<tr>
			<td valign="top" style="border-bottom: 1px solid #669999; " colspan="3" height="73">
			<table cellpadding="0" cellspacing="0" width="948" height="71">
				<!-- MSTableType="layout" -->
				<tr>
					<td width="575" valign="top">
					<p style="margin-top: 15px"><?php include 'header.php'; ?></td>
				<td height="71" width="373" valign="top">
									<p style="margin-left: 2px; margin-right: 8px; margin-top: 20px" align="center">
									<font face="Arial" style="font-size: 8.5pt">
									<font color="#666666">Need help or enquiry? Call:</font><b>
									<font color="#FF0066">+</font><font color="#008000">234</font>-</b>803-855-2420</font></td>
				</tr>
			</table>
			</td>
			</tr>
		<tr>
			<td valign="top" colspan="3" height="63">
			<p style="margin-left: 15px; margin-top: 15px"><?php
include 'stodat_prev.php';
//Header ('Location:itdb/index.php');
    
?></td>
			</tr>
		<tr><form method="POST" action="sto_ass_trac.php">
	<input type="hidden" name="email" value="<?php echo $email;?>" size="15">
	<input type="hidden" name="pin" value="<?php echo $pin;?>" size="15">
			<td valign="top" bgcolor="#9ED66B">
			<p style="margin-left: 8px; margin-right: 5px; margin-top: 12px">
			<font face="Arial" style="font-size: 9pt" color="#FFFFFF">Track 
			Assets on this platform</font></td>
			<td height="52" valign="top" colspan="2" bgcolor="#F0F4F4">
			<p style="margin-top: 12px"><font color="#333333">
	<input type="submit" value="Track by Label" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family:Arial; font-size:9pt; color:#669999"><input type="submit" value="Track by Serial" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family:Arial; font-size:9pt; color:#669999"><input type="submit" value="Track by Name" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family:Arial; font-size:9pt; color:#669999"></font></td>
			</form></tr>
		<tr>
			<td valign="top" bgcolor="#F0F4F4">
<?php include 'sto_login.php';?>
			<p>&nbsp;</td>
			<td valign="top" colspan="2" height="260">
			<?php 
			$list=$_POST['list'];
			if ($list=='Track by Label') {
			include 'sto_item_search.php';
			}
			if ($list=='Track by Serial') {
			include 'sto_serial_search.php';
			}
			if ($list=='Track by Status') {
			include 'sto_status_search.php';
			}
			if ($list=='Track by Name') {
			include 'sto_name_search.php';
			}
			if ($list=='Use IP Address') {
			include 'ipaddr_search.php';
			
			}
			if ($list=='Assets Listing') {
			include 'mylisting.php';
			}
			
			?>
			</td>
			</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="32">&nbsp;</td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#9ED66B" colspan="2">&nbsp;</td>
			<td height="43" valign="top" bgcolor="#9ED66B">&nbsp;</td>
		</tr>
		<tr>
			<td width="184">&nbsp;</td>
			<td width="719">&nbsp;</td>
			<td height="108" width="50">&nbsp;</td>
		</tr>
	</table>
			</td>
		</tr>
		<tr>
			<td height="25" width="903">&nbsp;</td>
		</tr>
</body>

</html>