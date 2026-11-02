<?php
//if (isset($_POST['submit'])) {
$myremark = $_POST['myremark'];
$appcode = $_POST['appcode'];
//}

include '../link/connect.php';
$sql = "UPDATE user_login SET reg_status = ? WHERE app_no=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 'ss', $myremark, $appcode);
if (mysqli_stmt_execute($stmt)) {
echo 'Thank you, information successfully updated';
}

?>