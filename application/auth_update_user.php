<?php
require_once __DIR__ . '/../shared/security.php';

$cal_name=''; $cal_phone=''; $cal_email=''; $cal_status=''; $username='';
$password=''; $confirm_pass=''; $gender=''; $date_ob=''; $marital=''; $id='';

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


$passwd = null;
if ($password !== '' || $confirm_pass !== '') {
    if ($password !== $confirm_pass) {
        echo 'Passwords do not match.';
        exit();
    }
    $passwd = password_hash($password, PASSWORD_BCRYPT);
}

include '../link/connect.php';

if ($passwd !== null) {
    $sql = "UPDATE user_login SET name=?,privilege=?,email=?,phone=?,username=?,password=?,date_ob=?,marital=?,gender=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sssssssssi',
        $cal_name, $cal_status, $cal_email, $cal_phone, $username,
        $passwd, $date_ob, $marital, $gender, $id);
} else {
    $sql = "UPDATE user_login SET name=?,privilege=?,email=?,phone=?,username=?,date_ob=?,marital=?,gender=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'ssssssssi',
        $cal_name, $cal_status, $cal_email, $cal_phone, $username,
        $date_ob, $marital, $gender, $id);
}

if (mysqli_stmt_execute($stmt)) {

/*the new addtions starts here */

$mssg = 'User Information Successfully Updated. Please ensure you protect your password';

$stmt2 = mysqli_prepare($conn,
    "INSERT INTO signup_feedback (call_phone,recipient,msg_content,date) VALUES(?,?,?,NOW())");
mysqli_stmt_bind_param($stmt2, 'sss', $cal_phone, $cal_email, $mssg);
if (mysqli_stmt_execute($stmt2)) {

include '../application/testing.php';
//include 'sign_mails.php';
//include 'signup_confirm_email.php';

}
mysqli_stmt_close($stmt2);

/*It also ends here */

$stmt3 = mysqli_prepare($conn, "SELECT * FROM user_login WHERE username = ?");
mysqli_stmt_bind_param($stmt3, 's', $username);
mysqli_stmt_execute($stmt3);
$result = mysqli_stmt_get_result($stmt3);

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {
$acct_typ = $row['privilege'];
$fname = $row['name'];

}

   include '../application/success_signup.php';
}
mysqli_stmt_close($stmt3);


}

else {
    echo "Error: " . htmlspecialchars(mysqli_stmt_error($stmt));
}

mysqli_stmt_close($stmt);

?>
