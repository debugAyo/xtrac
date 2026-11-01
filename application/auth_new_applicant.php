<?Php

if (isset ($_POST['submit'])) {

$reg_typ=$_POST['reg_typ'];
$reg_spec=$_POST['reg_spec'];
$adv_reg_spec = $_POST['adv_reg_spec'];
$cal_name=$_POST['cal_name'];
$cal_phone=$_POST['cal_phone'];
$cal_address=$_POST['cal_address'];
$cal_email=$_POST['cal_email'];
$birth_dt=$_POST['birth_dt'];
$mar_status = $_POST['mar_status'];
$gender = $_POST['gender'];
$sponsor = $_POST['sponsor'];
$fat_name = $_POST['fat_name'];
$mum_name = $_POST['mum_name'];
$nxt_kin = $_POST['nxt_kin'];
$nxt_kin_no = $_POST['nxt_kin_no'];
//$page_id=$_POST['page_id'];

}


   include '../connect.php';

$query="SELECT * FROM new_application WHERE call_phone='$cal_phone'";
$result = mysqli_query($conn,$query) or die(mysqli_error());

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {
$app_code = $row['applicat_no'];

include 'dual_attempt_apply.php';

exit();
}
}
else {

$tick_no='';

	if((!empty($_POST['tick_no'])) && $stat='Opened') {
	$rand_tick=$_POST['tick_no'];
	
	}
	

else {

$rand_tick=(rand() );

}


/*
if ($submit == 'Delete') {
include 'del_tick.php';
exit();
}
*/

include '../connect.php';

$reg_typ=mysqli_real_escape_string($conn,$_POST['reg_typ']);
$reg_spec=mysqli_real_escape_string($conn,$_POST['reg_spec']);
$adv_reg_spec = mysqli_real_escape_string($conn,$_POST['adv_reg_spec']);
$cal_name=mysqli_real_escape_string($conn,$_POST['cal_name']);
$cal_phone=mysqli_real_escape_string($conn,$_POST['cal_phone']);
$cal_address=mysqli_real_escape_string($conn,$_POST['cal_address']);
$cal_email=mysqli_real_escape_string($conn,$_POST['cal_email']);
$birth_dt=mysqli_real_escape_string($conn,$_POST['birth_dt']);
$mar_status = mysqli_real_escape_string($conn,$_POST['mar_status']);
$gender = mysqli_real_escape_string($conn,$_POST['gender']);
$sponsor = mysqli_real_escape_string($conn,$_POST['sponsor']);
$fat_name = mysqli_real_escape_string($conn,$_POST['fat_name']);
$mum_name = mysqli_real_escape_string($conn,$_POST['mum_name']);
$nxt_kin = mysqli_real_escape_string($conn,$_POST['nxt_kin']);
$nxt_kin_no = mysqli_real_escape_string($conn,$_POST['nxt_kin_no']);

$query="SELECT * FROM category WHERE id='$reg_typ'";
$result = mysqli_query($conn,$query) or die(mysqli_error());
while($row = mysqli_fetch_array($result)) {

$app_reg_typ = $row['cat_name'];

}

$query="SELECT * FROM speciality WHERE id='$reg_spec'";
$result = mysqli_query($conn,$query) or die(mysqli_error());
while($row = mysqli_fetch_array($result)) {

$app_reg_spec = $row['spec_name'];

}

$query="SELECT * FROM adv_speciality WHERE id='$adv_reg_spec'";
$result = mysqli_query($conn,$query) or die(mysqli_error());
while($row = mysqli_fetch_array($result)) {

$app_adv_reg_spec = $row['adv_spec_name'];
}

$sql="INSERT INTO new_application (regtype,regspec,adv_regspec,call_name,call_phone,call_address,call_email,fatname,mumname,nextkin,kin_num,birthdate,marital,gender,sponsor,applicat_no) 
		VALUES('$app_reg_typ','$app_reg_spec','$app_adv_reg_spec','$cal_name','$cal_phone','$cal_address','$cal_email','$fat_name','$$mum_name','$nxt_kin','$nxt_kin_no','$birth_dt','$mar_status','$gender','$sponsor','$rand_tick')";
					

if ($conn->query($sql) === TRUE) {

	//echo 'Your Information Successfully Inserted';
  //include 'success_apply.php';
  include 'doc_upload.php';
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>

