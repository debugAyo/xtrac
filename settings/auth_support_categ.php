<?php

if (isset ($_POST['submit'])) {

$sdm_name=$_POST['sdm_name'];
$tick_name=$_POST['tick_name'];

}

if (!isset($sdm_name) || !isset($tick_name)) {
	
echo 'You can not proceed until you select the elements of "Service Delivery Manager" and "Incident Categories fields"';
exit();
}
include '../link/connect.php';

/*$query="SELECT * FROM inc_category WHERE id='$tick_name'";
$result = mysqli_query($conn,$query) or die(mysqli_error());

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {

$categ_name = $row['

}
}*/

$sdm_name=mysqli_real_escape_string($conn,$_POST['sdm_name']);
$tick_name=mysqli_real_escape_string($conn,$_POST['tick_name']);

$query="SELECT * FROM user_login WHERE fname='$sdm_name'";
$result = mysqli_query($conn,$query) or die(mysqli_error());

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {

$sdm_phone = $row['phone'];
$sdm_email = $row['email'];

}
}


$sql="UPDATE inc_category SET sdm_name='$sdm_name', sdm_phone='$sdm_phone', sdm_email='$sdm_email' WHERE id='$tick_name'"; 

$result = mysqli_query($conn, $sql);

if ($result > 0)
{

echo 'Service Delivery Manager Successfully Added.';
include 'support_categ.php';

}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>