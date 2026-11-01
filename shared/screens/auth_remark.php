<?php

$myremark = isset($_POST['myremark']) ? $_POST['myremark'] : '';
$appcode = isset($_POST['appcode']) ? $_POST['appcode'] : '';

include '../link/connect.php';

if (!$appcode || $myremark === '') {
    echo 'Missing application code or remark';
    exit();
}

$stmt = mysqli_prepare($conn, "UPDATE user_login SET reg_status = ? WHERE app_no = ?");
mysqli_stmt_bind_param($stmt, 'ss', $myremark, $appcode);

if (mysqli_stmt_execute($stmt)) {
    echo 'Thank you, information successfully updated';
} else {
    echo 'Update failed, please try again';
}

mysqli_stmt_close($stmt);

?>
