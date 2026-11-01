<?php
$track_serial = $_POST['track_serial'];
if ($track_serial==$_POST['track_serial']) {
include '../link/connect.php';

$sql="SELECT * FROM additem WHERE serial='$track_serial'";
$result=mysqli_query($conn,$sql);
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

