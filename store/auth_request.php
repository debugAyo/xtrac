<?php
$staff_id = $_POST['staff_id'];
$request= $_POST['request'];
$categ= $_POST['categ'];
$req_descrp = $_POST['req_descrp'];
$qty = $_POST['qty'];

//$dept = $_POST['dept'];
/*$cur_loc = $_POST['cur_loc'];$new_loc = $_POST['new_loc'];*/
//$return_dt = $_POST['return_dt'];$declare = $_POST['declare'];
//$signature = $_POST['signature'];

//$password = 'test123';
 
//Hash it with BCRYPT.
//$passwordHashed = password_hash($randomfield, PASSWORD_BCRYPT);
 
//Print it out.
//echo $passwordHashed;

if (!$staff_id || !$request )
{
echo 'Important Details Omitted.<br>';
echo 'Your Request Cannot be Processed';
exit;
}

$rand_tick=(rand() );
include '../link/connect.php';

$staff_id=mysqli_real_escape_string($conn,$_POST['staff_id']);
$request=mysqli_real_escape_string($conn,$_POST['request']);
$categ = mysqli_real_escape_string($conn,$_POST['categ']);
$req_descrp=mysqli_real_escape_string($conn,$_POST['req_descrp']);
$qty=mysqli_real_escape_string($conn,$_POST['qty']);

/*$sql = "INSERT INTO req_form (staffid,dept,request,devid,curloc,newloc,checkoutdt,returndt,declaration,signature)
VALUES ('$staff_id','$dept','$request','$dev_id','$cur_loc','$new_loc','$checkout_dt','$return_dt','$declare','$signature')";*/

$sql = "INSERT INTO req_form (req_no,staffid,request,category,request_descrp,quantity,reqdate)
VALUES ('$rand_tick','$staff_id','$request','$categ','$req_descrp','$qty',NOW())";
$result = mysqli_query($conn, $sql);

if ($result > 0)
{
include 'req_ack.php';
}

?>

