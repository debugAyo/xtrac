<?php
echo '<hr style="border: 1px dashed #008000" width="100%">';
?>
<?php
$pat_id=$_POST['pat_id'];
$dt_pay=$_POST['dt_pay'];
$tym_pay=$_POST['tym_pay'];
$mode1=$_POST['mode1'];
$db=mysql_connect("localhost", "root","");
if (!$db) {
echo 'connection to database denied';
exit();
}
mysql_select_db("hospital",$db);
$sql = "SELECT * FROM receipt WHERE patient_id='$_POST[pat_id]' && datepay='$_POST[dt_pay]' && timepay=curtime() && account1='Employer' && mode1='PENDING'";
$result = mysql_query($sql);
while($rows=mysql_fetch_array($result)){
echo '<table width="650" border="0" align="center" cellpadding="0" cellspacing="1">';
echo "<tr>
<td width=80><font face=arial, size='2'><b>Date:</td><td width=550><font face=Courier New, size='1'>".$rows['datepay']."</td>
</tr><br />";
echo "<tr>
<td width=80><font face=arial, size='2'><b>Invoice No:</td><td width=550><font face=Courier New, size='1'>".$rows['invono']."</td>
</tr>";
echo "<tr>
<td width=80><font face=arial, size='2'><b>Department:</td><td width=550><font face=Courier New, size='1'>".$rows['department']."</td><td colspan=5></td>
</tr>";
echo "<tr>
<td width=80><font face=arial, size='2'><b>Cashier No:</td><td width=550><font face=Courier New, size='1'>".$rows['code']."</td><td colspan=5></td>
</tr>";
echo '<table width="650" border="1" bordercolor="green" align="center" cellpadding="0" cellspacing="1">';
echo "<tr>
<td width=150><font face=arial, size='2'><b>Received the Sum of:</td><td width=550><font face=Courier New, size='1'>".$rows['amount1']."</td>
</tr>";
echo '</table>';
echo '<table width="650" border="0"  align="center" cellpadding="0" cellspacing="1">';
echo "<tr>
<td width=150><font face=arial, size='2'><b>From:</td><td width=550><font face=Courier New, size='1'>".$rows['payname']."</td>
</tr>";
echo "<tr>
<td width=150><font face=arial, size='2'><b>As Support by:</td><td width=550><font face=Courier New, size='1'>".$rows['payname1']."</td>
</tr>";
echo "<tr>
<td width=150><font face=arial, size='2'><b>Being Payment for:</td><td width=550><font face=Courier New, size='1'>".$rows['service']."</td>
</tr>";
echo "<tr>
<td width=150><font face=arial, size='2'><b>Payment Status:</td><td width=550><font face=Courier New, size='1'>".$rows['mode1']."</td>
</tr>";
}

echo '</table>';
?>
