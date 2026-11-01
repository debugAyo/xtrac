<?php 

$reqno=$_POST['reqno'];
$remark=$_POST['remark'];
$qty=$_POST['qty'];


include '../link/connect.php';

$sql = "UPDATE req_form SET status='$remark', iss_quant='$qty' WHERE req_no='$reqno'";
if ($conn->query($sql) === TRUE) {
  include 'sto_ass_req.php';
} else {
  echo "Error updating record: " . $conn->error;
}



?>