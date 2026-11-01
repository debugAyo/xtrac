<?php
if (isset($_POST['submit'])) {
$cal_name=$_POST['cal_name'];
$cal_phone=$_POST['cal_phone'];
$cal_email=$_POST['cal_email'];
$cal_status=$_POST['cal_status'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirm_pass=$_POST['confirm_pass'];
$gender=$_POST['gender'];
$date_ob=$_POST['date_ob'];
$marital=$_POST['marital'];
$id=$_POST['id'];
}


if ($password==$confirm_pass) {
$passwd = md5($password);

}

include '../link/connect.php';

$cal_name=mysqli_real_escape_string($conn,$_POST['cal_name']);
$cal_phone=mysqli_real_escape_string($conn,$_POST['cal_phone']);
$cal_email=mysqli_real_escape_string($conn,$_POST['cal_email']);
$cal_status=mysqli_real_escape_string($conn,$_POST['cal_status']);
$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$gender=mysqli_real_escape_string($conn,$_POST['gender']);
$date_ob=mysqli_real_escape_string($conn,$_POST['date_ob']);
$marital=mysqli_real_escape_string($conn,$_POST['marital']);

$sql = "UPDATE user_login SET name='$cal_name',privilege='$cal_status',email='$cal_email',phone='$cal_phone',username='$username',password='$passwd',date_ob='$date_ob',marital='$marital',gender='$gender' WHERE id='$id'";	 
if ($conn->query($sql) === TRUE) {

/*the new addtions starts here */

$mssg = 'User Information Successfully Updated. Please ensure you protect your password';

$sql = "INSERT INTO signup_feedback (call_phone,recipient,msg_content,date) VALUES('$cal_phone','$cal_email','$mssg',NOW())";
if ($conn->query($sql) === TRUE) {

include '../application/testing.php';
//include 'sign_mails.php';
//include 'signup_confirm_email.php';

}

/*It also ends here */

$query="SELECT * FROM user_login WHERE username='$username'";
$result = mysqli_query($conn,$query) or die(mysqli_error());

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {
$acct_typ = $row['privilege'];
$fname = $row['name'];

}

   include '../application/success_signup.php';
}
     
    
} 

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>