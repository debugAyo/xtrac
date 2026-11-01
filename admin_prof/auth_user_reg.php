<?php

if (isset($_POST['submit'])) {

$cal_name=$_POST['cal_name'];
$cal_email=$_POST['cal_email'];
$username=$_POST['username'];
$pass=$_POST['pass'];
$confirm_pass=$_POST['confirm_pass'];
$cal_phone=$_POST['cal_phone'];
$pref_cont=$_POST['pref_cont'];
$cal_address=$_POST['cal_address'];
$grp_id=$_POST['grp_id'];
$birth_dt=$_POST['birth_dt'];
$mar_status=$_POST['mar_status'];
$gender=$_POST['gender'];


}

if ($pass==$confirm_pass) {
$password = md5($pass);

}

else {
	echo 'The registration process will be discontinued due to unmatched confirmed password'; 
exit();
}

$uploads='userreg';
if (!file_exists($uploads)) {
mkdir($uploads, 0755);

}

if ( isset( $_FILES['my_pass'] ) ) {
	
		$source_file = $_FILES['my_pass']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['my_pass']['name'];
		$my_pass_res = strtolower($dest_file);
		
	if (file_exists($my_pass_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move my_pass result!!");
			if($_FILES['my_pass']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$my_pass_res = 'null.pdf';
		}

// Function to generate six-digit random number

$regcode=(rand(100000, 999999) );

include '../link/connect.php';
	
	$query="SELECT * FROM user_reg WHERE username='$username'";
		$result = mysqli_query($conn,$query) or die(mysqli_error());

			if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {

	echo 'A user with this User ID already exists';

	exit();
		}
			}
else {
	
	$cal_name=mysqli_real_escape_string($conn, $_POST['cal_name']);
	$cal_email=mysqli_real_escape_string($conn, $_POST['cal_email']);
	$username=mysqli_real_escape_string($conn, $_POST['username']);
	$pass=mysqli_real_escape_string($conn, $_POST['pass']);
	$cal_phone=mysqli_real_escape_string($conn,$_POST['cal_phone']);
	$pref_cont=mysqli_real_escape_string($conn,$_POST['pref_cont']);
	$cal_address=mysqli_real_escape_string($conn, $_POST['cal_address']);
	$grp_id=mysqli_real_escape_string($conn, $_POST['grp_id']);
	$birth_dt=mysqli_real_escape_string($conn, $_POST['birth_dt']);
	$mar_status=mysqli_real_escape_string($conn, $_POST['mar_status']);
	$gender=mysqli_real_escape_string($conn, $_POST['gender']);
	

	// SQL query to insert into database
     $sql = "INSERT INTO user_reg (regno,calname,calemail,username,password,calphone,prefcont,caladdress,groupid,birthdt,marstatus,gender,passport) 
					   VALUES ('$regcode','$cal_name','$cal_email','$username','$password','$cal_phone','$pref_cont','$cal_address','$grp_id','$birth_dt','$mar_status','$gender','$my_pass_res')";

  

/*$sql = "INSERT INTO user_reg (regno, calname)
		VALUES ('$regcode','$cal_name')";*/
		
    if ($conn->query($sql) === TRUE) {
        /*echo "Files inserted into database successfully.";*/
    } else {
        echo "Error: " . $conn->error;
    }

    // Close database connection
    $conn->close();

}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Data Result</title>
</head>
<body>
<div class="w3-row-padding">
<div class="w3-threequarter w3-white">
    <h3 class="w3-text-green w3-hover-text-red">User Registration</h3>


<?php
include '../link/connect.php';
    // Display recently inserted data
    $sql = "SELECT * FROM user_reg ORDER BY id DESC LIMIT 1"; // Get the last inserted row
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		echo "<table width='100%'class='w3-padding-large w3-border'>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Passport</th><td><img src=". $row["passport"] . " style='width:100px; heigh:100px; padding:6px; float:right; border:1px solid #eee'></td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Reg No.</th><td style='font-size:12px; width:auto'>" . $row["regno"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Name</th><td style='font-size:12px; width:auto'>" . $row["calname"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Phone No.</th><td style='font-size:12px; width:auto'>" . $row["calphone"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Address</th><td style='font-size:12px; width:auto'>" . $row["caladdress"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Gender</th><td style='font-size:12px; width:auto'>" . $row["gender"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Email</th><td style='font-size:12px; width:auto'>" . $row["calemail"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Username</th><td style='font-size:12px; width:auto'>" . $row["username"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Group ID</th><td style='font-size:12px; width:auto'>" . $row["groupid"] . "</td></tr>

		
			
		</table>";
       
    } else {
        echo "No data found";
    }
?>
</div>
<div class="w3-quarter"></div>
</div>
<?php


?>