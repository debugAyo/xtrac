<?Php

if (isset ($_POST['submit'])) {

/*$tick_name=$_POST['tick_name'];
$int_service=$_POST['int_service'];
$cal_name=$_POST['cal_name'];
$cal_phone=$_POST['cal_phone'];
$submit=$_POST['submit'];
$prior=$_POST['prior'];
$cal_address = $_POST['cal_address'];


*/

$ticketno= $_POST['ticketno'];
$open_dt=$_POST['open_dt'];
$desc=$_POST['desc'];
$pro_rec=$_POST['pro_rec'];
$stat=$_POST['stat'];

}

$resolv = $desc.'<p>'. $pro_rec .'</p>';

/*$tick_no='';

	if((!empty($_POST['tick_no'])) && $stat='Opened') {
	$rand_tick=$_POST['tick_no'];
	
	}
	

else {

$rand_tick=(rand() );

}

if ($submit == 'Delete') {
include 'del_tick.php';
exit();
}*/


include '../link/connect.php';

$ticketno=$_POST['ticketno'];
$open_dt=$_POST['open_dt'];
$desc=mysqli_real_escape_string($conn,$_POST['desc']);
$pro_rec=mysqli_real_escape_string($conn,$_POST['pro_rec']);
$stat=mysqli_real_escape_string($conn,$_POST['stat']);

/*$sql="INSERT INTO new_ticket (tickname,spec,call_address,call_name,call_phone,opendate,tickassign_name,tickassign_phone,descrp,impact,priority,status,ticket_no) 
		VALUES('$intservice','$specname','$cal_address','$cal_name','$cal_phone','$open_dt','$sdmname','$sdmphone','$desc','$impct','$prior','$stat','$rand_tick')";*/
		
$sql = "UPDATE new_ticket SET opendate=?, descrp=?, tick_status='Opened' WHERE ticket_no=?";					

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 'sss', $open_dt, $resolv, $ticketno);

if (mysqli_stmt_execute($stmt)) {

	
  // include 'artisan_search.php';

   header ('location:securedpage.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>