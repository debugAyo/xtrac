<?php
$track_serial = $_POST['track_serial'];
if ($track_serial==$_POST['track_serial']) {
include '../link/connect.php';

$stmt = mysqli_prepare($conn, "SELECT * FROM additem WHERE serial=?");
mysqli_stmt_bind_param($stmt, 's', $track_serial);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if(mysqli_num_rows($result)==0)
			{
		
	include 'comment.php';
		//exit();
		}

$rows=mysqli_fetch_array($result);
if ($rows['devtype']== 'Desktop') {

include 'desk_serial_prev.php';
//exit();
}
else 
{
 include 'other_serial_prev.php';
 }
}
//mysqli_close();
?>			

