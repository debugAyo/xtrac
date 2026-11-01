<?php

$randomfield = $_POST['randomfield'];

include 'connect.php';

$result = mysqli_query($conn, "SELECT * FROM vendors_fin WHERE code='$randomfield'");  
$myrow=mysqli_fetch_array($result); 
$randomfield = $myrow['code'];
   
echo '<p style="margin-top: 20px; margin-bottom: 0px"><form method="POST" action="eVendoReg_Pay.php">
	<input type="hidden" name="randomfield" value="'.$randomfield.'" size="5">
	<input type="submit" value="Pay via USSD" name="list" style="border: 1px solid #F4F4F4; background-color: #F4F4F4; font-family: Segoe UI; font-size:12pt; color:#99CC00"></form></p>
	<p style="margin-top: 5px; margin-bottom: 0px"><form method="POST" action="eVendoReg_Pay.php"">
	<input type="hidden" name="randomfield" value="'.$randomfield.'" size="5">
	<input type="submit" value="Pay Online" name="list" style="border: 1px solid #F4F4F4; background-color: #F4F4F4; font-family: Segoe UI; font-size:12pt; color:#99CC00"></form></p>
	<p style="margin-top: 5px; margin-bottom: 5px"><form method="POST" action="eVendoReg_Pay.php"">
	<input type="hidden" name="randomfield" value="'.$randomfield.'" size="5">
	<font color="#333333">
	<input type="submit" value="Pay via PoS" name="list" style="border: 1px solid #F4F4F4; background-color: #F4F4F4; font-family: Segoe UI; font-size:12pt; color:#99CC00"></font></form></p>
	<p style="margin-top: 5px; margin-bottom: 5px"><form method="POST" action="eVendoReg_Pay.php"">
	<input type="hidden" name="randomfield" value="'.$randomfield.'" size="5">
	<font color="#333333">
	<input type="submit" value="Pay via Bankdraft" name="list" style="border: 1px solid #F4F4F4; background-color: #F4F4F4; font-family: Segoe UI; font-size:12pt; color:#99CC00"></font></form></p>';			
	
	?>