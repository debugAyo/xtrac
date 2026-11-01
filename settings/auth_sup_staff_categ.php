<?php

if (isset ($_POST['submit'])) {

$pro_name=$_POST['pro_name'];
$int_service=$_POST['int_service'];

}

if (!isset($pro_name) || !isset($int_service)) {
	
echo 'You can not proceed until you select the "Support Staff Name" and "Area of Specialization fields"';
exit();
}

include '../link/connect.php';

$pro_name=mysqli_real_escape_string($conn,$_POST['pro_name']);
$int_service=mysqli_real_escape_string($conn,$_POST['int_service']);

$query="SELECT * FROM user_login WHERE fname='$pro_name'";
$result = mysqli_query($conn,$query) or die(mysqli_error());

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {

$pro_phone = $row['phone'];
$pro_email = $row['email'];
$pro_id = $row['staff_id'];
$pro_pic = $row['img'];


}
}

$query="SELECT * FROM inc_speciality WHERE id='$int_service'";
$result = mysqli_query($conn,$query) or die(mysqli_error());

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {

$pro_spec = $row['spec_name'];

}
}


$sql="INSERT INTO inc_artisan_reg (regno, photo, spec, pro_name, pro_phone, pro_email, date) 
		VALUES('$pro_id','$pro_pic','$pro_spec','$pro_name','$pro_phone','$pro_email',NOW())";
					

if ($conn->query($sql) === TRUE) {

{

echo 'Support Staff Successfully Added.';
include 'sup_staff_categ.php';

}
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>