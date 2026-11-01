<?php
echo '<font face="arial" size="5">';
$email = $_POST['email']; $pin = $_POST['pin'];
$dev_id=$_POST['dev_id'];$dev_name=$_POST['dev_name'];$dev_type=$_POST['dev_type'];
$dev_mod=$_POST['dev_mod'];$man_name=$_POST['man_name'];$prodt=$_POST['prodt'];
$owner=$_POST['owner'];$log_usr=$_POST['log_usr'];$list=$_POST['list'];
$reg_num=$_POST['reg_num'];$purprice=$_POST['purprice'];$warnty=$_POST['warnty'];
$location=$_POST['location'];$mk_year=$_POST['mk_year'];$cpu=$_POST['cpu'];
$dev_stat=$_POST['dev_stat'];


if (!$dev_name || !$dev_id || !$reg_num){
print 'Either Building Name, ID Number is missing';
exit();
}
if (isset($_FILES['image']) && $_FILES['image']['size'] > 80000) {  

echo '<br><center>Oops! The image cannot be uploaded.<br> Image size exceeds 80kb';
exit();
}

 
          // Temporary file name stored on the server 
          $tmpName = $_FILES['image']['tmp_name'];   
            
          // Read the file  
          $fp     = fopen($tmpName, 'r'); 
          $logo = fread($fp, filesize($tmpName)); 
          $logo = addslashes($logo); 
          fclose($fp); 
           
 
          // Create the query and insert 
          // into our database. 


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
	exit();
 }
  
?>