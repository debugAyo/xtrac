<?php

if (isset ($_POST['submit'])) {

$staffid=$_POST['staffid'];
$id=$_POST['id'];
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

/*$query="SELECT * FROM user_login WHERE username='$username'";
$result = mysqli_query($conn,$query) or die(mysqli_error());

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {

include 'user_exist.php';

exit();
}
}
*/

$title=mysqli_real_escape_string($conn,$_POST['title']);
$dept=mysqli_real_escape_string($conn,$_POST['dept']);
$acct_type=mysqli_real_escape_string($conn,$_POST['acct_type']);
$username=mysqli_real_escape_string($conn,$_POST['username']);
$pass=mysqli_real_escape_string($conn,$_POST['pass']);
$cal_name=mysqli_real_escape_string($conn,$_POST['cal_name']);
$cal_phone=mysqli_real_escape_string($conn,$_POST['cal_phone']);
$cal_email=mysqli_real_escape_string($conn,$_POST['cal_email']);
$gender=mysqli_real_escape_string($conn,$_POST['gender']);


$sql="UPDATE user_login SET title='$title', fname='$cal_name', sex='$gender', staff_id='$staffid', dept='$dept', access_prvlg='$acct_type', phone='$cal_phone', email='$cal_email', username='$username', password='$password', img='$pass_res', date_reg=NOW() WHERE id='$id'";

$result = mysqli_query($conn, $sql);

if ($result > 0)
{

echo 'User <b>' . $username . ' </b>Successfully Updated.';
include '../application/user_man.php';
}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

