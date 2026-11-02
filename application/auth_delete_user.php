<?php

$id = '';

if (isset ($_POST['submit'])) {

$id=$_POST['id'];

}

include '../link/connect.php';

$stmt = mysqli_prepare($conn, "SELECT username FROM user_login WHERE id = ?");
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$username = '';
if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {
	
$username = $row['username'];

}

}
mysqli_stmt_close($stmt);

$stmt = mysqli_prepare($conn, "DELETE FROM user_login WHERE id = ?");
mysqli_stmt_bind_param($stmt, 'i', $id);

if (mysqli_stmt_execute($stmt)) {

echo 'User <b>' . htmlspecialchars($username) . ' </b>Successfully Deleted.';
include '../application/user_man.php';
}

else {
    echo "Error: " . htmlspecialchars(mysqli_stmt_error($stmt));
}

mysqli_stmt_close($stmt);


?>
