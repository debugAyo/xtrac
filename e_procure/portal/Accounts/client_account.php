<?php
echo '<font size=2, face=arial>';
$category = $_POST['category'];$phone = $_POST['phone'];
if (!$category || !$phone)
{
echo 'Important Details Omitted.<br>';
echo 'Please type the correct phone number and select the right department';
exit;
}

include '../../connect.php';

if ($category == 'Payments') {
$result = mysqli_query($conn,"SELECT * FROM e_registration WHERE phone='$_POST[phone]'");
while ($myrow = mysqli_fetch_array($result))
{ 
//echo $myrow["fname"];
include 'update_client_acct.php';
}
}
if ($category == 'Claims') {
$result = mysqli_query($conn,"SELECT * FROM e_registration WHERE phone='$_POST[phone]'");
while ($myrow = mysqli_fetch_array($result))
{ 
//echo $myrow["fname"];
include 'update_client_claims.php';
}
}

?>