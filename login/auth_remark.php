<?php
//if (isset($_POST['submit'])) {
$myremark = $_POST['myremark'];
$appcode = $_POST['appcode'];
//}

include '../link/connect.php';
$sql = "UPDATE user_login SET reg_status = '$myremark' WHERE app_no='$appcode'";
if ($conn->query($sql) === TRUE) {
echo 'Thank you, information successfully updated';
}

?>