<?php

require_once __DIR__ . '/../shared/security.php';

$staffid=''; $id=''; $title=''; $dept=''; $acct_type=''; $username='';
$pass=''; $confirm_pass=''; $cal_name=''; $cal_phone=''; $cal_email=''; $gender='';

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


// Update the password only when one was supplied; require confirmation match.
$password = null;
if ($pass !== '' || $confirm_pass !== '') {
    if ($pass !== $confirm_pass) {
        echo 'Passwords do not match.';
        exit();
    }
    $password = password_hash($pass, PASSWORD_BCRYPT);
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

if ($password !== null) {
    $sql = "UPDATE user_login SET title=?, fname=?, sex=?, staff_id=?, dept=?, access_prvlg=?, phone=?, email=?, username=?, password=?, img=?, date_reg=NOW() WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sssssssssssi',
        $title, $cal_name, $gender, $staffid, $dept, $acct_type,
        $cal_phone, $cal_email, $username, $password, $pass_res, $id);
} else {
    $sql = "UPDATE user_login SET title=?, fname=?, sex=?, staff_id=?, dept=?, access_prvlg=?, phone=?, email=?, username=?, img=?, date_reg=NOW() WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sssssssssssi',
        $title, $cal_name, $gender, $staffid, $dept, $acct_type,
        $cal_phone, $cal_email, $username, $pass_res, $id);
}

$result = mysqli_stmt_execute($stmt);

if ($result)
{

echo 'User <b>' . htmlspecialchars($username) . ' </b>Successfully Updated.';
include '../application/user_man.php';
}

else {
    echo "Error: " . htmlspecialchars(mysqli_stmt_error($stmt));
}

mysqli_stmt_close($stmt);

?>
