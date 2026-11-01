<?php
if (isset ($_POST['randomfield']) || ($_POST['fir_yr']) || ($_POST['fir_sales']) || ($_POST['sec_yr']) || ($_POST['sec_sales']) || ($_POST['thr_yr']) || ($_POST['thr_sales']) ||
   ($_POST['bank_name']) || ($_POST['bank_acct']) || ($_POST['bank_addr'])) {
   
$randomfield = $_POST['randomfield'];
$fir_yr = $_POST['fir_yr'];
$fir_sales = $_POST['fir_sales']; 
$sec_yr = $_POST['sec_yr'];
$sec_sales = $_POST['sec_sales'];
$thr_yr = $_POST['thr_yr'];
$thr_sales = $_POST['thr_sales'];
$bank_name = $_POST['bank_name'];
$bank_acct = $_POST['bank_acct'];
$bank_addr = $_POST['bank_addr'];

if (!$randomfield) {
echo 'Please Click on the Button marked "CLICK", <br /> Insert the correct TIN and RC Number to Continue';
exit();
}
	}
###################################################################

include 'connect.php';
$randomfield = mysqli_real_escape_string($conn,$_POST['randomfield']);
$fir_yr = mysqli_real_escape_string($conn,$_POST['fir_yr']);
$fir_sales = mysqli_real_escape_string($conn,$_POST['fir_sales']); 
$sec_yr = mysqli_real_escape_string($conn,$_POST['sec_yr']);
$sec_sales = mysqli_real_escape_string($conn,$_POST['sec_sales']);
$thr_yr = mysqli_real_escape_string($conn,$_POST['thr_yr']);
$thr_sales = mysqli_real_escape_string($conn,$_POST['thr_sales']);
$bank_name = mysqli_real_escape_string($conn,$_POST['bank_name']);
$bank_acct = mysqli_real_escape_string($conn,$_POST['bank_acct']);
$bank_addr = mysqli_real_escape_string($conn,$_POST['bank_addr']);

$sql = "INSERT INTO vendors_fin (code, yr_one, sales_one, yr_two, sales_two, yr_thr, sales_thr, bank_name, bank_acct, bank_addr) 
		VALUES ('$randomfield','$fir_yr','$fir_sales','$sec_yr','$sec_sales','$thr_yr','$thr_sales','$bank_name','$bank_acct','$bank_addr')";
$result = mysqli_query($conn,$sql);

if ($result > 0)
{
//header ('Location: eVendoReg_Tech.php');
$query = "SELECT code FROM vendors_fin WHERE code='$randomfield'";
$result = mysqli_query($conn, $query);
$rows = mysqli_fetch_array($result);
$randomfield = $rows['code'];

//echo $randomfield;

//header ('Location: eVendoReg_Tech.php');

include 'eVendoReg_pay.php';

}
?>