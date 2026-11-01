<?php
$ass_cat=$_POST['ass_cat'];
$it_categ=$_POST['it_categ'];
$it_spec=$_POST['it_spec'];
$dev_type = $_POST['dev_type']; 
$maint_typ = $_POST['maint_typ'];
$rackmnt = $_POST['rackmnt']; 
$maint_not = $_POST['maint_not'];  
$hd = $_POST['hd']; 
$mandt = $_POST['mandt'];
$ram = $_POST['ram']; 
$dev_name = $_POST['dev_name']; 
$cpu_mod = $_POST['cpu_mod']; 
$man_name = $_POST['man_name'];
$cpu = $_POST['cpu']; 
$serial = $_POST['serial']; 
$cor_cpu = $_POST['cor_cpu']; 
$mac = $_POST['mac'];
$dev_mod = $_POST['dev_mod']; 
$ipaddr = $_POST['ipaddr']; 
$pur_price = $_POST['pur_price']; 
$warnty = $_POST['warnty']; 
$cur_price = $_POST['cur_price']; 
$prodt = $_POST['prodt']; 
$dev_version = $_POST['dev_version'];
$dev_id = $_POST['dev_id']; 
$cur_version = $_POST['cur_version']; 
$dev_stat = $_POST['dev_stat'];
$vendor = $_POST['vendor']; 
$dept = $_POST['dept']; 
$phone = $_POST['phone']; 
$location = $_POST['location'];
$owner = $_POST['owner'];
$depend = $_POST['depend'];
$log_usr = $_POST['log_usr'];

if (!$dev_name || !$dev_id || !$serial){
print 'Either Device Name, ID or Serial Number is missing';
exit();
}
 
if ($dev_stat == 'Active') {
	$recomm = 'Keep in Use';
}
if ($dev_stat == 'Faulty') {
	$recomm = 'Replace or Repair';
}

if ($dev_stat == 'Obsolete') {
	$recomm = 'Dispose and Replace';
}

if ($dev_stat == 'Redundant') {
	$recomm = 'Fit for Use';
}


//$string = $cpu;
//$lifecyc = preg_replace("/[^0-9]/", '', $string);
 
 
 
$uploads='asset_img';
if (!file_exists($uploads)) {
mkdir($uploads, 0755);

}

if ( isset( $_FILES['ass_pic'] ) ) {
	
		$source_file = $_FILES['ass_pic']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['ass_pic']['name'];
		$ass_pic_res = strtolower($dest_file);
		
	if (file_exists($ass_pic_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move ass_pic result!!");
			if($_FILES['ass_pic']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$ass_pic_res = 'null.pdf';
		}
$expdate = strtotime ($cpu , strtotime ($prodt) );
$expdate = date ('Y-m-j' , $expdate );

$curdate = date("Y-m-d");
 
//Calculate the difference.

$diff = strtotime (   '-6 month' , strtotime ( $expdate ) ) ;
 
$diff = date ( 'Y-m-j' , $diff );


if ($diff <= $curdate) {
//$dev_stat = 'Obsolete';
//$recomm = 'This Item is Due for Replacement';
include 'obs_ict.php';
exit();
}
 
if ($curdate <=  $diff ) {
//$dev_stat = 'Active';
// $recomm = 'This Item is Valid for Use';
 include 'act_ict.php';
	//exit();
 }       
?>
