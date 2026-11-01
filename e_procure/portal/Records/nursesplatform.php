<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>eHealthCare - Physician Task Page</title>
<script src="../sample/datetimepicker_css.js"></script>
</head>

<body>

<div align="center">
	<table cellpadding="0" cellspacing="0" width="928" height="309" id="table6">
		<!-- MSTableType="layout" -->
		<tr>
			<td valign="top" style="border: 1px dotted #008000">
			<table cellpadding="0" cellspacing="0" width="16" height="26">
				<!-- MSTableType="layout" -->
				<tr>
					<td></td>
					<td height="3"></td>
				</tr>
				<tr>
					<td></td>
					<td valign="top" bgcolor="#008000" height="19">&nbsp;</td>
				</tr>
				<tr>
					<td width="2"></td>
					<td height="4" width="14"></td>
				</tr>
			</table>
	</td>
			<td></td>
			<td valign="top" style="border: 1px dotted #008000">
			<p style="margin-left: 5px; margin-top: 4px">
			<font face="Webdings" color="#FF0000">
			<a style="text-decoration: none" href="../index.php">
			<font color="#FF0000">3</font></a></font><font face="Arial" style="font-size: 9pt; font-weight: 700"><a style="text-decoration: none" href="index.php"><font color="#000000">Back</font></a></font></td>
			<td>&nbsp;</td>
			<td valign="top">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="30"></td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td height="9"></td>
			</tr>
		<tr>
			<td valign="top" bgcolor="#FFFFFF" align="left">
			<p align="center" style="margin-left: 4px">
			<font face="Webdings" color="#008000">4</font></td>
			<td valign="top" bgcolor="#FFFFFF" colspan="2">
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
				<!-- MSCellFormattingTableID="11" -->
				<tr>
					<td valign="top" height="100%">
					<!-- MSCellFormattingType="content" -->
					<p style="margin-left: 4px; margin-top: 4px">
					<font face="Arial" style="font-size: 8pt; ">
					<a href="eReg.php" style="text-decoration: none">
					<font color="#333333">Patient's Registration</font></a><font color="#333333"> 
					(IPD)</font></font></td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF" height="1" width="100%">
					<p style="margin-left: 4px; margin-top: 4px">
					<font color="#333333">
					<img alt="" width="1" height="1" src="MsSpacer.gif"></font></td>
				</tr>
			</table>
			</td>
			<td>&nbsp;</td>
			<td valign="top" rowspan="12">
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%" id="table9">
				<!-- MSCellFormattingTableID="5" -->
				<tr>
					<td valign="top" height="100%" width="100%">
					<!-- MSCellFormattingType="content" -->
					<table cellpadding="0" cellspacing="0" width="509" height="237" id="table10">
						<!-- MSTableType="layout" -->
						<tr>
	<td height="23" valign="top" colspan="3">
	<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
		<!-- MSCellFormattingTableID="2" -->
		<tr>
			<td valign="top" width="100%" height="100%">
			<!-- MSCellFormattingType="content" -->
			
						
			
</td>
			</tr>
	</table>
</td>
						</tr>
						<tr>
							<td height="32" valign="top" colspan="3" style="border: 1px dotted #808000">
							<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
								<!-- MSCellFormattingTableID="8" -->
								<tr>
									<td valign="top" width="100%" height="100%">
									<!-- MSCellFormattingType="content" -->
									<p align="center">
									<font color="#FF0000" face="Arial" style="font-size: 8pt; ">Note: </font>
									<font face="Arial" style="font-size: 8pt">
									&nbsp;Please, endeavour to confirm if 
									<font color="#008080">Patient's Registration</font> 
									and <font color="#CC0000">Antenatal Details</font> 
									exist in the Database before commencing 
									fresh registration or perform any other 
									function in respect of the patient.</font></td>
									</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td height="20"></td>
							</tr>
						<tr>
							<td valign="top" colspan="3" height="16">
							<p align="center">
									<font face="Corbel" style="font-size: 8.5pt">
									&nbsp;You can easily access Patient's Health 
							Records by providing the requested information in 
							the fields below: </font></td>
							</tr>
						<tr>
							<td>&nbsp;</td>
							<td valign="top">
					<div align="center">
						<table border=0 width="280" id="table28">
<tr>
<form method="POST" action="preview_all_recs.php">
<td width=140 height="27">
&nbsp;</td>
<td width=150 height="27">
&nbsp;</td>
</tr>
<tr>
<td width=140 bgcolor="#CC0000">
<p align="left">
<font face="Arial" style="font-size: 8pt" color="#FFFFFF">Patient 
ID Number:</font></td>
<td width=150 valign="top">
<p style="margin-left: 5px">
<font face="Arial"><span style="font-size: 7pt">
<input name="pat_id" size="20" style="float: left; border: 1px dotted #808000; ; color:#000000; font-family:Arial; font-size:8pt"></span></font></td>
</tr>

<tr>
<td valign="top" bgcolor="#C0C0C0" align="center">
<p align="left">
<font face="Arial" style="font-size: 8pt">Category:</font></td>
<td align="center">
        <p align="left" style="margin-left: 5px">
		<select size="1" name="records" style="font-family: Arial; font-size: 8pt; background-color:#ECF9F2">
		<option>select</option>
		<option value="Antenatal Rec">Antenatal Rec</option>
		<option value="General Rec">General Rec</option>
		</select></td>
</tr>

<tr>
<td colspan="2" align="center">
&nbsp;</td></tr>

<tr>
<td colspan="2" align="center">
<input type="submit" value="Get Records" style="border:1px solid #C0C0C0; font-family: Arial; font-size: 8pt" name="reg"><input type="reset" value="Reset" style="border:1px solid #C0C0C0; font-family: Tahoma; font-size: 8.5pt"></td></tr>
</form>
</table>
						</div>
</td>
							<td height="122">&nbsp;</td>
							</tr>
						<tr>
							<td width="114">&nbsp;</td>
							<td width="291">&nbsp;</td>
							<td height="24" width="104">&nbsp;</td>
						</tr>
					</table>
					</td>
				</tr>
			</table>
			</td>
			<td>&nbsp;</td>
			<td valign="top" style="border: 2px dotted #999966" rowspan="12">
					<img border="0" src="../genmed/pp1.jpg" width="171" height="235"></td>
			<td height="25"></td>
			</tr>
		<tr>
			<td valign="top" bgcolor="#F4F4F4" align="left">
			<p align="center" style="margin-left: 4px">
			<font face="Webdings" color="#008000">4</font></td>
			<td valign="top" bgcolor="#F4F4F4" colspan="2">
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
				<!-- MSCellFormattingTableID="12" -->
				<tr>
					<td valign="top" height="100%">
					<!-- MSCellFormattingType="content" -->
					<p style="margin-left: 4px; margin-top: 4px">
					<font face="Arial">
					<span style="font-size: 8pt; ">
					<a style="text-decoration: none" href="antenatal.php">
					<font color="#333333">Antenatal Registration</font></a></span></font></td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF" height="1" width="100%">
					<p style="margin-left: 4px; margin-top: 4px">
					<font color="#333333">
					<img alt="" width="1" height="1" src="MsSpacer.gif"></font></td>
				</tr>
			</table>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="25"></td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#FFFFFF" align="left">
			<p align="center" style="margin-left: 4px">
			<font face="Webdings" color="#008000">4</font></td>
			<td valign="top" bgcolor="#FFFFFF" colspan="2">
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
				<!-- MSCellFormattingTableID="13" -->
				<tr>
					<td valign="top" height="100%">
					<!-- MSCellFormattingType="content" -->
					<p style="margin-left: 4px; margin-top: 4px">
					<font face="Arial" style="font-size: 8pt">
					<a style="text-decoration: none" href="history.php">
					<font color="#333333">Hospital History</font></a><font color="#333333"> 
					(OPD)</font></font></td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF" height="1" width="100%">
					<p style="margin-left: 4px; margin-top: 4px">
					<font color="#333333">
					<img alt="" width="1" height="1" src="MsSpacer.gif"></font></td>
				</tr>
			</table>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="24"></td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#F4F4F4" align="left">
			<p align="center" style="margin-left: 4px">
			<font face="Webdings" color="#008000">4</font></td>
			<td valign="top" bgcolor="#F4F4F4" colspan="2">
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
				<!-- MSCellFormattingTableID="14" -->
				<tr>
					<td valign="top" height="100%">
					<!-- MSCellFormattingType="content" -->
					<p style="margin-left: 4px; margin-top: 4px">
					<font face="Arial" style="font-size: 8pt" color="#333333">
					<a style="text-decoration: none" href="birthcertificate.php">
<font color="#333333">Create </font></a></font>
<a style="text-decoration: none" href="birthcertificate.php">
					<font face="Arial" style="font-size: 8pt" color="#333333">
					Birth Certificate</font></a></td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF" height="1" width="100%">
					<p style="margin-left: 4px; margin-top: 4px">
					<font color="#333333">
					<img alt="" width="1" height="1" src="MsSpacer.gif"></font></td>
				</tr>
			</table>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="24"></td>
			</tr>
		<tr>
			<td valign="top" bgcolor="#FFFFFF" align="left">
			<p align="center" style="margin-left: 4px">
			<font face="Webdings" color="#008000">4</font></td>
			<td valign="top" bgcolor="#FFFFFF" colspan="2">
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%" id="table25">
				<!-- MSCellFormattingTableID="14" -->
				<tr>
					<td valign="top" height="100%">
					<!-- MSCellFormattingType="content" -->
					<p style="margin-left: 4px; margin-top: 4px">
					<a style="text-decoration: none" href="../Laboratory/lab_print_all.php">
					<font face="Arial" style="font-size: 8pt" color="#333333">
					Preview Lab Results</font></a></td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF" height="1" width="100%">
					<p style="margin-left: 4px; margin-top: 4px">
					<font color="#333333">
					<img alt="" width="1" height="1" src="MsSpacer.gif"></font></td>
				</tr>
			</table>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="24"></td>
			</tr>
		<tr>
			<td valign="top" bgcolor="#F4F4F4" rowspan="2" align="left">
			<p style="margin-left: 4px"><font face="Webdings" color="#008000">4</font></td>
			<td valign="top" bgcolor="#F4F4F4" colspan="2">
					<p style="margin-left: 4px; margin-top: 4px">
					<a style="text-decoration: none" href="../Radiology/rad_print_all.php">
					<font face="Arial" style="font-size: 8pt" color="#333333">
					Preview Patient's X-Ray </font></a></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="23"></td>
			</tr>
		<tr>
			<td valign="top" rowspan="2" colspan="2">
			<p style="margin-left: 4px; margin-top: 4px">
			<a style="text-decoration: none" href="../Genmed/delivery_recs.php">
			<font face="Arial" style="font-size: 8pt" color="#333333">
					Delivery Records </font></a></td>
			<td></td>
			<td></td>
			<td height="2"></td>
			</tr>
		<tr>
			<td valign="top" align="left">
			<p style="margin-left: 4px"><font face="Webdings" color="#008000">4</font></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="22"></td>
			</tr>
		<tr>
			<td valign="top" bgcolor="#F4F4F4" rowspan="2">
			<p style="margin-left: 4px">&nbsp;</td>
			<td valign="top" bgcolor="#F4F4F4" colspan="2">
			<p style="margin-left: 4px; margin-top: 4px">
			<a style="text-decoration: none" href="../Genmed/delivery_recs.php">
			<font face="Arial" style="font-size: 8pt" color="#333333">
					&nbsp;</font></a></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="23"></td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td height="1"></td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td height="2"></td>
			</tr>
		<tr>
			<td valign="top" bgcolor="#F4F4F4" colspan="3" rowspan="2">
			<p align="center">
					<img border="0" src="../genmed/strscope.gif" width="81" height="63"></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="44"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td height="23"></td>
		</tr>
		<tr>
			<td width="20"></td>
			<td width="5"></td>
			<td width="150"></td>
			<td width="30"></td>
			<td width="527"></td>
			<td width="17"></td>
			<td width="176"></td>
			<td height="8" width="3"></td>
		</tr>
	</table>
</div>

</body>

</html>