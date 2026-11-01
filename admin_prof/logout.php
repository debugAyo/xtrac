<?php
// Inialize session
session_start();
// Delete certain session

if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip = $_SERVER['REMOTE_ADDR'];
    $hostname = gethostbyaddr($ip);
  }
  include '../link/connect.php';
$result = mysqli_query($conn,"SELECT * FROM user_login WHERE username = '" . $_SESSION['username'] . "'");
while($row = mysqli_fetch_array($result)) {
$fname = $row['fname'];  
$event = 'Logged Out of the xTrac Application from';
}

$sql = "INSERT INTO logger (fname,action,ipaddr,host,event_date,event_time) VALUES('$fname','$event','$ip','$hostname',CURDATE(),CURTIME())";
$result = mysqli_query($conn, $sql);
if ($result > 0)
{
unset($_SESSION['username']);
// Delete all session variables
// session_destroy();
// Jump to login page
header('Location: ../index.php');

}
?>
