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
// Include database connection settings

include '../link/connect.php';
// Retrieve username and password from database according to user's input

$login = mysqli_query($conn, "SELECT * FROM user_login WHERE username = '" . $_POST['username'] . "' && password = '" . md5($_POST['password']) . "'");

// Check username and password match

if (mysqli_num_rows($login) == 1) {

// Set username session variable


while ($row=mysqli_fetch_array($login)) {
$fname = $row['fname'];
$categ = $row['dept'];
$calphone = $row['phone'];
$caladdress = $row['con_add'];
$event = 'Logged Into the xTrac Application from';
//$classno=$row['classId'];
}

$_SESSION['username'] = $_POST['username'];
$sql = "INSERT INTO logger (fname,action,ipaddr,host,event_date,event_time) VALUES('$fname','$event','$ip','$hostname',CURDATE(),CURTIME())";
$result = mysqli_query($conn, $sql);

if ($categ=='ICT') {

header('Location:../users_prof/securedpage.php');

}

if ($categ=='Admin') {
	
header('Location: ../admin_prof/securedpage.php');
}

if ($categ=='Store') {
header('Location: ../store/securedpage.php');
}

if ($categ=='Procurement') {
header('Location: ../e_procure/securedpage.php');
}

if ($categ=='Finance') {
header('Location: ../fin_acct/securedpage.php');
}
}
/*// Jump to secured page
header('Location: securedpage.php');
}*/


else {
// Jump to login page
header('Location: ../index_error.php');
}

?>