<?php

$dev_id=$_POST['dev_id']; 
$acct_ref=$_POST['acct_ref']; 
$deprecat_month=$_POST['deprecat_month']; 
$salvage_cost=$_POST['salvage_cost'];
$deprecat_method=$_POST['deprecat_method'];


//$i = $cpu;

            //for (i = 0; i < $cpu; i++) {
                 // $deprecat_charge=( ($purprice - $salvage_cost)/$cpu);

 include '../link/connect.php';
$sql = "SELECT devid, devname, manuname, serial, lifecycle, purprice, prodate, location FROM additem WHERE devid='$dev_id'";
$result = mysqli_query($conn,$sql);
$myrow=mysqli_fetch_array($result);
$devid=$myrow['devid'];
$devname = $myrow['devname'];
$manuname = $myrow['manuname'];
$serial = $myrow['serial'];
$cpu = $myrow['lifecycle'];
$purprice = $myrow['purprice'];
$prodate= $myrow['prodate'];
$location = $myrow['location'];


$deprecat_charge=($purprice-$salvage_cost)/($cpu);

//echo $deprecat_charge;


include '../link/connect.php';

$sql = "INSERT INTO finance_acct (devid, acct_ref, devname, manuname, serial, lifecycle, purprice, prodate, curdate, location, salvage_cost, deprecat_month, deprecat_method,  deprecat_rate) 
VALUES ('$devid','$acct_ref','$devname','$manuname','$serial','$cpu','$purprice','$prodate',NOW(),'$location','$salvage_cost','$deprecat_month','$deprecat_method','$deprecat_charge')";
$result = mysqli_query($conn,$sql);

$sql = "SELECT devid, devname, manuname, serial, prodate, location, deprecat_rate FROM finance_acct WHERE curdate=NOW()";
$result = mysqli_query($conn,$sql); 
$row = mysqli_fetch_array($result);
//echo number_format($row['deprecat_rate'],2);
//include 'auth_finance_trac.php';
//exit();

	
				
?>