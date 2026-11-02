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

$sdm_name=$_POST['sdm_name'];
$tick_name=$_POST['tick_name'];

$query="SELECT * FROM user_login WHERE fname=?";
$stmt = mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt,'s',$sdm_name);
mysqli_stmt_execute($stmt) or die(mysqli_error());
$result = mysqli_stmt_get_result($stmt);

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {

$sdm_phone = $row['phone'];
$sdm_email = $row['email'];

}
}


$sql="UPDATE inc_category SET sdm_name=?, sdm_phone=?, sdm_email=? WHERE id=?"; 

$stmt = mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($stmt,'ssss',$sdm_name,$sdm_phone,$sdm_email,$tick_name);
$result = mysqli_stmt_execute($stmt);

if ($result)
{

echo 'Service Delivery Manager Successfully Added.';
include 'support_categ.php';

}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>