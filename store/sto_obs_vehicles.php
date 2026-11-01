<?php

        
   include 'connect.php';


## Remember to insert some protection against MYSQL injections ##

$dev_id = mysqli_real_escape_string($conn, $_POST['dev_id']);
$dev_name = mysqli_real_escape_string($conn, $_POST['dev_name']);
$dev_type = mysqli_real_escape_string($conn, $_POST['dev_type']);
$dev_mod = mysqli_real_escape_string($conn, $_POST['dev_mod']);
$vin = mysqli_real_escape_string($conn, $_POST['vin']);
$man_name = mysqli_real_escape_string($conn, $_POST['man_name']);
$prodt = mysqli_real_escape_string($conn, $_POST['prodt']);
$odometer = mysqli_real_escape_string($conn, $_POST['odometer']);
$log_usr = mysqli_real_escape_string($conn, $_POST['log_usr']);
$list = mysqli_real_escape_string($conn, $_POST['list']);
$reg_num = mysqli_real_escape_string($conn, $_POST['reg_num']);
//$pur_price = mysqli_real_escape_string($conn, $_POST['pur_price']);
$owner = mysqli_real_escape_string($conn, $_POST['owner']);
$dept = mysqli_real_escape_string($conn, $_POST['dept']);
$warnty = mysqli_real_escape_string($conn, $_POST['warnty']);
$location = mysqli_real_escape_string($conn, $_POST['location']);
$mk_year = mysqli_real_escape_string($conn, $_POST['mk_year']);
$cpu = mysqli_real_escape_string($conn, $_POST['cpu']);
$dev_stat = mysqli_real_escape_string($conn, $_POST['dev_stat']);
$recomm = mysqli_real_escape_string($conn, $_POST['recomm']);


$sql = "UPDATE additem SET mandate='$mk_year', devname='$dev_name', assmode='$dev_mod', prodate='$prodt', recommnd='$recomm', devstat='$dev_stat', deptmnt='$dept', location='$location', pic='$logo', endlife='$expdate' WHERE devid='$dev_id'";
		$result = mysqli_query($conn,$sql);
		$result = mysqli_query($conn,"SELECT * FROM additem WHERE devid='$dev_id'"); 
		 if(mysqli_num_rows($result) >0)
			{
		//echo 'Information Updated';
		//include 'item_prev.php';
	include 'sto_auth_fetchass.php';
		exit();
		}
?>
