
<head>
<meta http-equiv="Content-Language" content="en-us">
</head>

<div align="center">
	<table cellpadding="0" cellspacing="0" width="593" height="388">
		<!-- MSTableType="layout" -->
		<tr>
	<td></td>
	<td></td>
	<td></td>
			<td></td>
			<td height="13"></td>
			</tr>
		<tr>
			<td valign="top" align="left" bgcolor="#ECF9F2">
			<p style="margin-top: 4px">
			<font face="Arial" style="font-size: 9pt; font-weight: 700">
			Department </font><span style="font-weight: 700">
			<font style="font-size: 9pt" face="Marlett" color="#FF0000">u</font></span></td>
			<td valign="top" align="left" bgcolor="#ECF9F2">
			<p style="margin-top: 4px">
			<span style="font-weight: 700">
			<font face="Arial" style="font-size: 9pt">Cash Payment </font>
			<font style="font-size: 9pt" face="Marlett" color="#008000">u</font></span></td>
			<td valign="top" align="left" bgcolor="#ECF9F2">
			<p style="margin-top: 4px">
			<font face="Arial" style="font-size: 9pt; font-weight: 700">Expected 
			Income </font><span style="font-weight: 700">
			<font style="font-size: 9pt" face="Marlett" color="#0000FF">u</font></span></td>
			<td valign="top" bgcolor="#FFFF66">
			<p style="margin-top: 4px"><span style="font-weight: 700">
			<font face="Arial" style="font-size: 9pt">Status </font>
			<font style="font-size: 9pt" face="Marlett" color="#FF0000">u</font></span></td>
			<td height="27"></td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td height="14"></td>
			</tr>
		<tr>
			<td valign="top" colspan="4"><?php
echo '<font size=1, face=Arial>';
$db = mysql_connect("localhost", "root","");
mysql_select_db("hospital",$db);
//$query = "SELECT department, mode, SUM(owntotal), SUM(total) FROM receipt GROUP BY department, mode"; 
$query = "SELECT department, mode, SUM(owntotal), SUM(total) FROM receipt WHERE mode='CASH' && account='SELF' && (datepay BETWEEN '$_POST[date1]' AND '$_POST[date2]') GROUP BY department"; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
while($row = mysql_fetch_array($result)){
echo '<table width="650" border="1" bordercolor="green" align="center" cellpadding="0" cellspacing="1">';
echo "<tr>
<td width=100 bgcolor='#CCFF66'><font face=arial, size='2'>".$row['department']."</td><td width=80><font face=Courier New, size='1'>".$row['SUM(owntotal)']."</td><td width=80><font face=Courier New, size='1'>".$row['SUM(total)']."</td><td width=50><font face=Courier New, size='1'>".$row['mode']."</td>
</tr>";
echo '</table>';
}
?>
<?php
echo '<font size=1, face=Arial>';
$db = mysql_connect("localhost", "root","");
mysql_select_db("hospital",$db);
$query = "SELECT department, mode, SUM(owntotal), SUM(total) FROM receipt WHERE mode='CASH' && account='SELF' && (datepay BETWEEN '$_POST[date1]' AND '$_POST[date2]')"; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
while($row = mysql_fetch_array($result)){
echo '<table width="650" border="1" bordercolor="green" align="center" cellpadding="1" cellspacing="1">';
echo "<tr>
<td width=110 bgcolor=green><font face=arial, color=#ffffff, size='2'><b>All Departments</td><td width=90><font face=arial, size='2'><b>Gross Cash</td><td width=150><font face=arial, size='2'><b>Expected Income</td>
</tr><br />";
echo "<tr>
<td width=110 bgcolor=green><font face=Courier New, color='#ffffff', size='1'>Total</td><td width=90><font face=Courier New, size='1'><center>".$row['SUM(owntotal)']."</td><td width=80  bgcolor=silver><font face=Courier New, size='1'><center>".$row['SUM(total)']."</td>
</tr>";
echo '</table>';
}
?>

</td>
			<td height="50"></td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#CCFF99">
			<p style="margin-top: 4px">
			<font face="Arial" style="font-size: 9pt; font-weight: 700">
			Department </font><span style="font-weight: 700">
			<font style="font-size: 9pt" face="Marlett" color="#FF0000">u</font></span></td>
			<td valign="top" bgcolor="#CCFF99">
			<p style="margin-top: 4px">
			<span style="font-weight: 700">
			<font face="Arial" style="font-size: 9pt">Cheque Family Pay </font>
			<font style="font-size: 9pt" face="Marlett" color="#008000">u</font></span></td>
			<td valign="top" bgcolor="#CCFF99">
			<p style="margin-top: 4px">
			<font face="Arial" style="font-size: 9pt; font-weight: 700">Expected 
			Income </font><span style="font-weight: 700">
			<font style="font-size: 9pt" face="Marlett" color="#0000FF">u</font></span></td>
			<td valign="top" bgcolor="#FFFF99">
			<p style="margin-top: 4px"><span style="font-weight: 700">
			<font face="Arial" style="font-size: 9pt">Status </font>
			<font style="font-size: 9pt" face="Marlett" color="#FF0000">u</font></span></td>
			<td height="31"></td>
			</tr>
		<tr>
			<td valign="top" colspan="4"><?php
echo '<font size=1, face=Arial>';
$db = mysql_connect("localhost", "root","");
mysql_select_db("hospital",$db);
//$query = "SELECT department, mode, SUM(owntotal), SUM(total) FROM receipt GROUP BY department, mode"; 
$query = "SELECT department, mode, SUM(owntotal), SUM(total) FROM receipt WHERE mode='CHEQUE' && account='Family' && (datepay BETWEEN '$_POST[date1]' AND '$_POST[date2]') GROUP BY department"; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
while($row = mysql_fetch_array($result)){
echo '<table width="650" border="1" bordercolor="green" align="center" cellpadding="0" cellspacing="1">';
echo "<tr>
<td width=100 bgcolor='#CCFF66'><font face=arial, size='2'>".$row['department']."</td><td width=80><font face=Courier New, size='1'>".$row['SUM(owntotal)']."</td><td width=80><font face=Courier New, size='1'>".$row['SUM(total)']."</td><td width=50><font face=Courier New, size='1'>".$row['mode']."</td>
</tr>";
echo '</table>';
}
?>
<?php
echo '<font size=1, face=Arial>';
$db = mysql_connect("localhost", "root","");
mysql_select_db("hospital",$db);
$query = "SELECT department, mode, SUM(owntotal), SUM(total) FROM receipt WHERE mode='CHEQUE' && account='Family' && (datepay BETWEEN '$_POST[date1]' AND '$_POST[date2]')"; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
while($row = mysql_fetch_array($result)){
echo '<table width="650" border="1" bordercolor="green" align="center" cellpadding="1" cellspacing="1">';
echo "<tr>
<td width=110 bgcolor=green><font face=arial, color=#ffffff, size='2'><b>All Departments</td><td width=90><font face=arial, size='2'><b>Gross Cheque</td><td width=150><font face=arial, size='2'><b>Expected Income</td>
</tr><br />";
echo "<tr>
<td width=110 bgcolor=green><font face=Courier New, color='#ffffff', size='1'>Total</td><td width=90><font face=Courier New, size='1'><center>".$row['SUM(owntotal)']."</td><td width=80 bgcolor=silver><font face=Courier New, size='1'><center>".$row['SUM(total)']."</td>
</tr>";
echo '</table>';
}
echo '<br />';
?>
</td>
			<td height="50"></td>
			</tr>
		<tr>
			<td bgcolor="#ECF9F2">
			<p style="margin-top: 2px">
			<font face="Arial" style="font-size: 9pt; font-weight: 700">
			Department </font><span style="font-weight: 700">
			<font style="font-size: 9pt" face="Marlett" color="#FF0000">u</font></span></td>
			<td valign="top" bgcolor="#ECF9F2">
			<p style="margin-top: 3px">
			<span style="font-weight: 700">
			<font face="Arial" style="font-size: 9pt">Cheque Corporate Pay </font>
			<font style="font-size: 9pt" face="Marlett" color="#008000">u</font></span></td>
			<td bgcolor="#ECF9F2">
			<p style="margin-top: 3px">
			<font face="Arial" style="font-size: 9pt; font-weight: 700">Expected 
			Income </font><span style="font-weight: 700">
			<font style="font-size: 9pt" face="Marlett" color="#0000FF">u</font></span></td>
			<td bgcolor="#E6E6E6">
			<p style="margin-top: 3px"><span style="font-weight: 700">
			<font face="Arial" style="font-size: 9pt">Status </font>
			<font style="font-size: 9pt" face="Marlett" color="#FF0000">u</font></span></td>
			<td height="27"></td>
			</tr>
		<tr>
			<td valign="top" colspan="4"><?php
$query = "SELECT department, mode1, SUM(owntotal), SUM(total) FROM receipt WHERE mode1='CHEQUE' && account1='Employer' && (datepay BETWEEN '$_POST[date1]' AND '$_POST[date2]') GROUP BY department"; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
while($row = mysql_fetch_array($result)){
echo '<table width="650" border="1" bordercolor="green" align="center" cellpadding="0" cellspacing="1">';
echo "<tr>
<td width=100 bgcolor='#CCFF66'><font face=arial, size='2'>".$row['department']."</td><td width=80><font face=Courier New, size='1'>".$row['SUM(owntotal)']."</td><td width=80><font face=Courier New, size='1'>".$row['SUM(total)']."</td><td width=50><font face=Courier New, size='1'>".$row['mode1']."</td>
</tr>";
echo '</table>';
}
?>
<?php
echo '<font size=1, face=Arial>';
$db = mysql_connect("localhost", "root","");
mysql_select_db("hospital",$db);
$query = "SELECT department, mode1, SUM(owntotal), SUM(total) FROM receipt WHERE mode1='CHEQUE' && account1='Employer' && (datepay BETWEEN '$_POST[date1]' AND '$_POST[date2]')"; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
while($row = mysql_fetch_array($result)){
echo '<table width="650" border="1" bordercolor="green" align="center" cellpadding="1" cellspacing="1">';
echo "<tr><br />
<td width=110 bgcolor=green><font face=arial, color=#ffffff, size='2'><b>All Departments</td><td width=90><font face=arial, size='2'><b>Gross Cheque</td><td width=150><font face=arial, size='2'><b>Expected Income</td>
</tr>";
echo "<tr>
<td width=110 bgcolor=green><font face=Courier New, color='#ffffff', size='1'>Total</td><td width=90><font face=Courier New, size='1'><center>".$row['SUM(owntotal)']."</td><td width=80 bgcolor=silver><font face=Courier New, size='1'><center>".$row['SUM(total)']."</td>
</tr>";
echo '</table>';
}
?>
</td>
			<td height="50"></td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#66CCFF">
			<p style="margin-top: 4px">
			<font face="Arial" style="font-size: 9pt; font-weight: 700">
			Department </font><span style="font-weight: 700">
			<font style="font-size: 9pt" face="Marlett" color="#FF0000">u</font></span></td>
			<td valign="top" bgcolor="#66CCFF">
			<p style="margin-top: 4px"><span style="font-weight: 700">
			<font face="Arial" style="font-size: 9pt">Pending Incomes </font>
			<font style="font-size: 9pt" face="Marlett" color="#FFFFFF">u</font></span></td>
			<td valign="top" bgcolor="#66CCFF">
			<p style="margin-top: 4px">
			<font face="Arial" style="font-size: 9pt; font-weight: 700">Expected 
			Income </font><span style="font-weight: 700">
			<font style="font-size: 9pt" face="Marlett" color="#FFFF66">u</font></span></td>
			<td valign="top" bgcolor="#E6E6E6">
			<p style="margin-top: 4px"><span style="font-weight: 700">
			<font face="Arial" style="font-size: 9pt">Status </font>
			<font style="font-size: 9pt" face="Marlett" color="#FF0000">u</font></span></td>
			<td height="32"></td>
		</tr>
		<tr>
			<td valign="top" colspan="4"><?php
$query = "SELECT department, mode, mode1, SUM(owntotal), SUM(hmototal), SUM(total) FROM receipt WHERE mode='PENDING' || mode1='PENDING' && account='Family' || account1='Employer' || account1='HMO' && (datepay BETWEEN '$_POST[date1]' AND '$_POST[date2]') GROUP BY department"; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
while($row = mysql_fetch_array($result)){
echo '<table width="650" border="1" bordercolor="green" align="center" cellpadding="0" cellspacing="1">';
echo "<tr>
<td width=90 bgcolor='#CCFF66'><font face=arial, size='2'>".$row['department']."</td><td width=50><font face=Courier New, size='1'>".$row['SUM(owntotal)']."</td><td width=50><font face=Courier New, size='1'>".$row['SUM(hmototal)']."</td><td width=90><font face=Courier New, size='1'>".$row['SUM(total)']."</td><td width=50><font face=Courier New, size='1'>".$row['mode1']."</td>
</tr>";
echo '</table>';
}
?>
<?php
echo '<font size=1, face=Arial>';
$db = mysql_connect("localhost", "root","");
mysql_select_db("hospital",$db);
$query = "SELECT department, mode, mode1, SUM(owntotal), SUM(hmototal), SUM(total) FROM receipt WHERE mode='PENDING' || mode1='PENDING' && account='Family' || account1='Employer' || account1='HMO' && (datepay BETWEEN '$_POST[date1]' AND '$_POST[date2]')"; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
while($row = mysql_fetch_array($result)){
echo '<table width="650" border="1" bordercolor="green" align="center" cellpadding="1" cellspacing="1">';
echo "<tr><br />
<td width=110 bgcolor=green><font face=arial, color=#ffffff, size='2'><b>All Departments</td><td width=170 colspan=2><font face=arial, size='2'><b>Gross PENDING</td><td width=150><font face=arial, size='2'><b>Expected Income</td>
</tr>";
echo "<tr>
<td width=110 bgcolor=green><font face=Courier New, color='#ffffff', size='1'>Total</td><td width=90><font face=Courier New, size='1'><center>".$row['SUM(owntotal)']."</td><td width=80><font face=Courier New, size='1'>".$row['SUM(hmototal)']."</td><td width=80 bgcolor=silver><font face=Courier New, size='1'><center>".$row['SUM(total)']."</td>
</tr>";
echo '</table>';
}
?></td>
			<td height="50"></td>
		</tr>
		<tr>
			<td width="185"></td>
			<td width="176"></td>
			<td width="137"></td>
			<td width="93"></td>
			<td height="16"></td>
		</tr>
		<tr>
			<td valign="top" colspan="4" bgcolor="#FF8080">&nbsp;</td>
			<td height="28" width="2"></td>
		</tr>
	</table>
</div>