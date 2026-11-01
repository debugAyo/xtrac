<?php

if (isset ($_POST['submit'])) {
$title=$_POST['title'];
$dept=$_POST['dept'];
$acct_type=$_POST['acct_type'];
$username=$_POST['username'];
$pass=$_POST['pass'];
$confirm_pass=$_POST['confirm_pass'];
$cal_name=$_POST['cal_name'];
$cal_phone=$_POST['cal_phone'];
$cal_email=$_POST['cal_email'];
$gender=$_POST['gender'];

}


if ($pass==$confirm_pass) {
$password = md5($pass);

}

$rand_tick=(rand() );

$uploads='staff_reg';
if (!file_exists($uploads)) {
mkdir($uploads, 0755);

}

if ( isset( $_FILES['pass'] ) ) {
	
		$source_file = $_FILES['pass']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['pass']['name'];
		$pass_res = strtolower($dest_file);
		
	if (file_exists($pass_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move pass result!!");
			if($_FILES['pass']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$pass_res = 'null.pdf';
		}


include '../link/connect.php';

$query="SELECT * FROM user_login WHERE username='$username'";
$result = mysqli_query($conn,$query) or die(mysqli_error());

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {

include 'user_exist.php';

exit();
}
}

$title=mysqli_real_escape_string($conn,$_POST['title']);
$dept=mysqli_real_escape_string($conn,$_POST['dept']);
$acct_type=mysqli_real_escape_string($conn,$_POST['acct_type']);
$username=mysqli_real_escape_string($conn,$_POST['username']);
$pass=mysqli_real_escape_string($conn,$_POST['pass']);
$cal_name=mysqli_real_escape_string($conn,$_POST['cal_name']);
$cal_phone=mysqli_real_escape_string($conn,$_POST['cal_phone']);
$cal_email=mysqli_real_escape_string($conn,$_POST['cal_email']);
$gender=mysqli_real_escape_string($conn,$_POST['gender']);

$sql="INSERT INTO user_login (title,fname,sex,staff_id,dept,access_prvlg,phone,email,username,password,img,date_reg)
	VALUES('$title','$cal_name','$gender','$rand_tick','$dept','$acct_type','$cal_phone','$cal_email','$username','$password','$pass_res',NOW())";

if ($conn->query($sql) === TRUE) {

echo 'User <b>' . $username . ' </b>Successfully Created.';
include '../application/signup.php';
}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

