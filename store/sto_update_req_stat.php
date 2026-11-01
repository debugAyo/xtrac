<?php 

$email=$_POST['email'];
$pin=$_POST['pin'];
$reqno=$_POST['reqno'];
$remark=$_POST['remark'];



include 'connect.php';

$sql = "UPDATE req_form SET status='$remark' WHERE req_no='$reqno'";
if ($conn->query($sql) === TRUE) {
  include 'sto_ass_req.php';
} else {
  echo "Error updating record: " . $conn->error;
}



?>