<?php
$pin=$_POST['pin'];$pay_dt=$_POST['pay_dt'];$amnt=$_POST['amnt'];

if (!($amnt || $pay_dt)) {

	echo 'Please, enter amount and payment date';
	exit();
	}
	
include '../../connect.php';

$sql = "INSERT INTO client_account (serial, payments, pay_date, cur_date)
	VALUES ('$pin','$amnt','$pay_dt','CUR_DATE')";
	
	$result = mysqli_query($conn,$sql);
		
			$result = mysqli_query($conn,"SELECT * FROM client_account WHERE serial LIKE %$pin%");
			while ($myrow = mysqli_fetch_array($result)) {
			echo $myrow['payments'];
			}
			?>

	
	

