
<head>
<meta http-equiv="Content-Language" content="en-us">
</head>

<div align="center">

<table cellpadding="0" cellspacing="0" width="831" height="501">
	<!-- MSTableType="layout" -->
	<tr>
	<td></td>
	<td></td>
		<td></td>
		<td></td>
		<td height="9"></td>
		</tr>
	<tr>
		<td></td>
		<td></td>
		<td valign="top" rowspan="2">
		<p align="center">
		<font face="Arial" style="font-size: 9pt" color="#006699">&nbsp;</font></td>
		<td></td>
		<td height="6"></td>
		</tr>
	<tr>
		<td></td>
	<td valign="top" rowspan="2" bgcolor="#DDEEFF">
	<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
		<!-- MSCellFormattingTableID="1" -->
		<tr>
			<td bgcolor="#E3E3D5" nowrap width="100%">
			<!-- MSCellFormattingType="header" -->
			</td>
			<td height="10" width="5">
			<img alt="" src="MsoPnl_Cnr_tr_133.gif" width="5" height="10"></td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#B4CDCD" colspan="2" height="100%">
			<!-- MSCellFormattingType="content" -->
			<p style="margin-left: 4px; margin-top: 2px">
<font color="#FF0000" face="Arial" style="font-size: 9pt">Payment Portal </font>
<font face="Webdings" style="font-size: 9pt" color="#FFFF00">.</font></td>
		</tr>
	</table>
		</td>
		<td></td>
		<td height="10"></td>
	</tr>
	<tr>
		<td></td>
		<td valign="top" bgcolor="#B4CDCD" colspan="2">&nbsp;</td>
		<td height="21"></td>
		</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td height="8"></td>
		</tr>
	<tr>
		<td>&nbsp;</td>
		<td valign="top" style="border-style:solid; border-width:1px; " colspan="3">
		<?php 
			$dept = $_POST['dept'];
			$pat_id = $_POST['pat_id'];
			if (!$dept || !$pat_id) {
			echo 'You must choose a Department';
			exit();
			}
			if ($dept == 'Pharmacy') {
			include 'pharm_bill_preview.php';
			}
			if ($dept == 'Laboratory') {
			include 'lab_bill_preview.php';
			}
			if ($dept == 'Radiology') {
			include 'rad_bill_preview.php';
			}
			if ($dept == 'Clinicals') {
			include 'cons_bill_preview.php';
			}
			
			?>

		</td>
		<td height="421">&nbsp;</td>
		</tr>
	<tr>
		<td width="12">&nbsp;</td>
		<td width="173">&nbsp;</td>
		<td width="439">&nbsp;</td>
		<td width="189">&nbsp;</td>
		<td height="26" width="18">&nbsp;</td>
		</tr>
</table>
</div>

