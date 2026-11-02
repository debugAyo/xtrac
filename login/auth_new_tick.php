<?Php

if (isset ($_POST['submit'])) {

$tick_name=$_POST['tick_name'];
$int_service=$_POST['int_service'];
$cal_name=$_POST['cal_name'];
$cal_phone=$_POST['cal_phone'];
$open_dt=$_POST['open_dt'];
$submit=$_POST['submit'];
$desc=$_POST['desc'];
$impct=$_POST['impct'];
$prior=$_POST['prior'];
$stat=$_POST['stat'];
$cal_address = $_POST['cal_address'];
}

$tick_no='';

	if((!empty($_POST['tick_no'])) && $stat='Opened') {
	$rand_tick=$_POST['tick_no'];
	
	}
	

else {

$rand_tick=(rand() );

}

if ($submit == 'Delete') {
include 'del_tick.php';
exit();
}
include '../link/connect.php';

$tick_name=$_POST['tick_name'];
$int_service=$_POST['int_service'];
$cal_address=$_POST['cal_address'];
$cal_name=$_POST['cal_name'];
$cal_phone=$_POST['cal_phone'];
$open_dt=$_POST['open_dt'];
$desc=$_POST['desc'];
$impct=$_POST['impct'];
$prior=$_POST['prior'];
$stat=$_POST['stat'];

include '../link/connect.php';

$query="SELECT * FROM category WHERE id=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 's', $tick_name);
mysqli_stmt_execute($stmt) or die(mysqli_error());
$result = mysqli_stmt_get_result($stmt);
while($row = mysqli_fetch_array($result)){
$sdmphone=$row['sdm_phone'];
$intservice = $row['cat_name'];
$sdmname = $row['sdm_name'];
$mail_to = $row['sdm_email'];


}


$query="SELECT * FROM speciality WHERE id=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 's', $int_service);
mysqli_stmt_execute($stmt) or die(mysqli_error());
$result = mysqli_stmt_get_result($stmt);
while($row = mysqli_fetch_array($result)){

$specname = $row['spec_name'];



}

include 'mails.php';

$sql="INSERT INTO new_ticket (tickname,spec,call_address,call_name,call_phone,opendate,tickassign_name,tickassign_phone,descrp,impact,priority,tick_status,ticket_no) 
		VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
					

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 'sssssssssssss', $intservice, $specname, $cal_address, $cal_name, $cal_phone, $open_dt, $sdmname, $sdmphone, $desc, $impct, $prior, $stat, $rand_tick);

if (mysqli_stmt_execute($stmt) === TRUE) {

	
  // include 'artisan_search.php';

require_once __DIR__ . '/../shared/ai/ai_triage_backend.php';
xtrac_ai_triage_hook(array(
	'ticket_no' => $rand_tick,
	'category' => isset($intservice) ? $intservice : '',
	'description' => isset($desc) ? $desc : '',
	'impact' => isset($impct) ? $impct : '',
	'reported_priority' => isset($prior) ? $prior : '',
	'cal_name' => isset($cal_name) ? $cal_name : '',
)); // log-only: this branch redirects, the HTML notice would be lost

   header ('location:securedpage.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>