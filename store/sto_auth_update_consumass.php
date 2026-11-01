<?php
echo '<font face="arial" size="2">';
$email = $_POST['email']; $pin = $_POST['pin'];
$dev_id =  $_POST['dev_id'];
$dev_name =  $_POST['dev_name'];
$dev_typ =  $_POST['dev_typ'];
$descrp =  $_POST['descrp'];
$dept =  $_POST['dept'];
$owner =  $_POST['owner'];
$manuname =  $_POST['manuname'];
$prodt =  $_POST['prodt'];
$mandt =  $_POST['mandt'];
$log_usr =  $_POST['log_usr'];
$list =  $_POST['list'];
$batch_num =  $_POST['batch_num'];
$purprice =  $_POST['purprice'];
$warnty =  $_POST['warnty'];
$location =  $_POST['location'];
$unit =  $_POST['unit'];
$qty =  $_POST['qty'];
$rate =  $_POST['rate'];
$cpu =  $_POST['cpu'];
$dev_stat =  $_POST['dev_stat'];

//$expdate = strtotime ($cpu , strtotime ($prodt) );
//$expdate = date ('Y-m-j' , $expdate );

//$curdate = date("Y-m-d");

//$diff = strtotime (   '-6 month' , strtotime ( $expdate ) ) ;
 
//$diff = date ( 'Y-m-j' , $diff );

//if ($diff <= $curdate) {


if (($devtype = 'Fuel') && ($qty <= '10')) {
$dev_stat = 'Deficient';
$recomm = 'Due for Refilling';

}
 if (($devtype = 'Fuel') && ($qty <= '25')) {
$dev_stat = 'Limited';
$recomm = 'Due for Refilling';

}
 else {
 $dev_stat = 'Sufficient';
 $recomm = 'Keep using this Item';
 }
 
 if (($devtype = 'Paper') && ($qty <= '5')) {
$dev_stat = 'Deficient';
$recomm = 'Get New Stock';

}
 if (($devtype = 'Paper') && ($qty <= '10')) {
$dev_stat = 'Limited';
$recomm = 'Get New Stock';

}
 else {
 $dev_stat = 'Sufficient';
 $recomm = 'Keep using this Item';
 }
 
  if (($devtype = 'Catridge') && ($qty <= '5')) {
$dev_stat = 'Deficient';
$recomm = 'Get New Stock';

}
 if (($devtype = 'Catridge') && ($qty <= '10')) {
$dev_stat = 'Limited';
$recomm = 'Get New Stock';

}
 else {
 $dev_stat = 'Sufficient';
 $recomm = 'Keep using this Item';
 }
 
 if (($devtype = 'Toner') && ($qty <= '5')) {
$dev_stat = 'Deficient';
$recomm = 'Get New Stock';

}
 if (($devtype = 'Toner') && ($qty <= '10')) {
$dev_stat = 'Limited';
$recomm = 'Get New Stock';

}
 else {
 $dev_stat = 'Sufficient';
 $recomm = 'Keep using this Item';
 }
if (($devtype = 'Pen') && ($qty <= '5')) {
$dev_stat = 'Deficient';
$recomm = 'Get New Stock';

}
 if (($devtype = 'Pen') && ($qty <= '10')) {
$dev_stat = 'Limited';
$recomm = 'Get New Stock';

}
 else {
 $dev_stat = 'Sufficient';
 $recomm = 'Keep using this Item';
 }

if (!$dev_id || !$batch_num){
print 'Either Device Name, ID or Serial Number is missing';
exit();
}
  
if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {  
 
          // Temporary file name stored on the server 
          $tmpName = $_FILES['image']['tmp_name'];   
            
          // Read the file  
          $fp     = fopen($tmpName, 'r'); 
          $logo = fread($fp, filesize($tmpName)); 
          $logo = addslashes($logo); 
          fclose($fp); 
           
 
          // Create the query and insert 
          // into our database. 
        
 
include 'connect.php';

$sql = "UPDATE additem SET mandate='$mandt', devtype='$dev_typ', devname='$dev_name', prodate='$prodt', recommnd='$recomm', devstat='$dev_stat', location='$location', pic='$logo', quant='$qty', rate='$rate', unit='$unit' WHERE devid='$dev_id'";
		$result = mysqli_query($conn,$sql);
		$result = mysqli_query($conn,"SELECT * FROM additem WHERE devid='$dev_id'"); 
		 if(mysqli_num_rows($result) >0)
			{
		//echo 'Information Updated';
		//include 'item_prev.php';
	include 'sto_auth_fetchass.php';
		exit();
		}
			}

?>