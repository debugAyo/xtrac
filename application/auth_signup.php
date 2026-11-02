<?php

require_once __DIR__ . '/../shared/security.php';

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


if (!isset($pass) || !isset($confirm_pass) || $pass !== $confirm_pass) {
    echo 'Passwords do not match.';
    exit();
}
$password = password_hash($pass, PASSWORD_BCRYPT);

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

$stmt = mysqli_prepare($conn, "SELECT * FROM user_login WHERE username = ?");
mysqli_stmt_bind_param($stmt, 's', $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {

include 'user_exist.php';

exit();
}
}
mysqli_stmt_close($stmt);

$title=isset($_POST['title']) ? $_POST['title'] : $title;
$dept=isset($_POST['dept']) ? $_POST['dept'] : $dept;
$acct_type=isset($_POST['acct_type']) ? $_POST['acct_type'] : $acct_type;
$username=isset($_POST['username']) ? $_POST['username'] : $username;
$cal_name=isset($_POST['cal_name']) ? $_POST['cal_name'] : $cal_name;
$cal_phone=isset($_POST['cal_phone']) ? $_POST['cal_phone'] : $cal_phone;
$cal_email=isset($_POST['cal_email']) ? $_POST['cal_email'] : $cal_email;
$gender=isset($_POST['gender']) ? $_POST['gender'] : $gender;

$sql = "INSERT INTO user_login (title,fname,sex,staff_id,dept,access_prvlg,phone,email,username,password,img,date_reg)
	VALUES(?,?,?,?,?,?,?,?,?,?,?,NOW())";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 'sssssssssss',
    $title, $cal_name, $gender, $rand_tick, $dept, $acct_type,
    $cal_phone, $cal_email, $username, $password, $pass_res);

if (mysqli_stmt_execute($stmt)) {

echo 'User <b>' . htmlspecialchars($username) . ' </b>Successfully Created.';
include '../application/signup.php';
}

else {
    echo "Error: " . htmlspecialchars(mysqli_stmt_error($stmt));
}

mysqli_stmt_close($stmt);

?>
