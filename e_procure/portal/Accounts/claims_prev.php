<?php
$pin=$_POST['pin'];$claim_dt=$_POST['claim_dt'];$claims=$_POST['claims'];$srv_pro=$_POST['srv_pro'];

if (!($claims || $srv_pro || $claims_dt)) {

	echo 'Please, enter amount and payment date';
	exit();
	}
	
include '../../connect.php';

$sql = "INSERT INTO client_account (serial, claims, serv_pro, clm_date)
	VALUES ('$pin','$claims','$srv_pro','$claim_dt')";
	
	$result = mysqli_query($conn,$sql);
		
			$result = mysqli_query($conn,"SELECT * FROM client_account WHERE serial='$pin'");
			while ($myrow = mysqli_fetch_array($result)) {
			echo $myrow['claims'];
			}
			?>

	
	

