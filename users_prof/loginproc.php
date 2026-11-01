<?php
// Inialize session
session_start();

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
//echo $ip_address;

// Include database connection settings

include '../link/connect.php';
// Retrieve username and password from database according to user's input

$login = mysqli_query($conn, "SELECT * FROM user_login WHERE username = '" . $_POST['username'] . "' && password = '" . md5($_POST['password']) . "'");

// Check username and password match

if (mysqli_num_rows($login) == 1) {

// Set username session variable


while ($row=mysqli_fetch_array($login)) {
$fname = $row['name'];
$categ = $row['privilege'];
$calphone = $row['phone'];
$caladdress = $row['address'];
$event = 'Logged Into the xTrac';
}
$sql = "INSERT INTO logger (fname,action,ipaddr,host,event_date,event_time) VALUES('$fname','$event','$ip','$hostname',CURDATE(),CURTIME())";
$result = mysqli_query($conn, $sql);
if ($result > 0)
{
	
$_SESSION['username'] = $_POST['username'];

if ($categ=='Manager') {

header('Location:../admin/securedpage.php');

}

if ($categ=='Client') {
	
header('Location: securedpage.php');
}

if ($categ=='Freelancer') {
header('Location: ../staff/freelance.php');
}
}
}
/*// Jump to secured page
header('Location: securedpage.php');
}*/


else {
// Jump to login page
header('Location: index.php');
}

?>