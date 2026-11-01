<?php

$check = $_POST['check'];$pin=$_POST['pin'];
					
				if ($check == 'Please select below:') {
	echo '</b>';
	include 'note.php';
	
	}
					if ($check == 'Account Details') {
					
				echo 'Account Details</br>';
				echo '<br>';
				
				
				
echo '<font face="arial" size="1">';
include 'connect.php';

$sql = "SELECT * FROM client_account WHERE serial='$pin'";
//$sql = "SELECT *, SUM(payments), SUM(claims) FROM client_account WHERE serial='$pin'";

$result = mysqli_query($conn,$sql) or die(mysql_error());
while($rows = mysqli_fetch_array($result)){
echo '<table cellpadding="0" cellspacing="1" width="500" height="60">';
echo "<tr bgcolor='#000000'><font face=arial, size='1' color='#FFFFFF'>
<td width=200><font face=arial, size='1' color='#FFFFFF'>PAYMENTS</font></td><td width=100><font face=arial, size='1' color='#FFFFFF'>DATE</font></td><td width=200><font face=arial, size='1' color='#FFFFFF'>CLAIMS</font></td><td width=200><font face=arial, size='1' color='#FFFFFF'>PROVIDER</font></td><td width=200><font face=arial, size='1' color='#FFFFFF'>DATE</font></td>
</tr>";

echo "<tr bgcolor='#FFFFFF'><font face=arial, size='1'>
<td width=200><font face=arial, size='1'>".$rows['payments']."</font></td><td width=100 ><font face=arial, size='1'>".$rows['pay_date']."</font></td><td width=200><font face=arial, size='1'>".$rows['claims']."</font></td><td width=200><font face=arial, size='1'>".$rows['serv_pro']."</font></td><td width=100><font face=arial, size='1'>".$rows['clm_date']."</font></td>
</tr>";

echo '</table>';


}
}
//$sql = "SELECT * FROM client_account WHERE serial='$pin'";
$sql = "SELECT *, SUM(payments), SUM(claims) FROM client_account WHERE serial='$pin'";

$result = mysqli_query($conn,$sql) or die(mysql_error());
while($rows = mysqli_fetch_array($result)){
echo '<table cellpadding="0" cellspacing="1" width="500" height="60">';

echo "<tr bgcolor='#FFFFFF'><font face=arial, size='1'>
<td width=200><font face=arial, size='1'>TOTAL PAYMENTS</font></td><td width=100 ><font face=arial, size='1'>".$rows['SUM(payments)']."</font></td><td width=200><font face=arial, size='1'>TOTAL CLAIMS</font></td><td width=200><font face=arial, size='1'>".$rows['SUM(claims)']."</font></td><td width=100><font face=arial, size='1'></font></td>
</tr>";

echo '</table>';


}

?>