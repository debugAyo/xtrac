<?php

$dev_id=$_POST['dev_id'];$dev_name=$_POST['dev_name'];$dev_type=$_POST['dev_type'];
$dev_mod=$_POST['dev_mod'];$man_name=$_POST['man_name'];$prodt=$_POST['prodt'];
$owner=$_POST['owner'];$log_usr=$_POST['log_usr'];$ass_cat=$_POST['ass_cat'];
$reg_num=$_POST['reg_num'];$purprice=$_POST['purprice'];$warnty=$_POST['warnty'];
$location=$_POST['location'];$mk_year=$_POST['mk_year'];$cpu=$_POST['cpu'];
$dev_stat=$_POST['dev_stat'];


if (!$dev_name || !$dev_id || !$reg_num){
print 'Either Building Name, ID Number is missing';
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
include 'obs_build.php';
exit();
}
 
if ($curdate <=  $diff ) {
//$dev_stat = 'Active';
// $recomm = 'This Item is Valid for Use';
 include 'act_build.php';
	//exit();
 }
  
?>