<?php
echo '<font face="arial" size="2">';
$email = $_POST['email']; $pin = $_POST['pin'];
$dev_type = $_POST['dev_type']; $maint_typ = $_POST['maint_typ'];$rackmnt = $_POST['rackmnt']; 
$maint_not = $_POST['maint_not'];  $hd = $_POST['hd']; $mandt = $_POST['mandt']; 
$ram = $_POST['ram']; $dev_name = $_POST['dev_name']; $cpu_mod = $_POST['cpu_mod']; $man_name = $_POST['man_name']; 
$cpu = $_POST['cpu']; $serial = $_POST['serial']; $cor_cpu = $_POST['cor_cpu']; $mac = $_POST['mac']; 
$dev_mod = $_POST['dev_mod']; $ipaddr = $_POST['ipaddr']; $pur_price = $_POST['pur_price']; $warnty = $_POST['warnty']; 
$cur_price = $_POST['cur_price']; $prodt = $_POST['prodt']; $dev_version = $_POST['dev_version']; 
$dev_id = $_POST['dev_id']; $cur_version = $_POST['cur_version']; $dev_stat = $_POST['dev_stat']; 
$vendor = $_POST['vendor']; $dept = $_POST['dept']; $phone = $_POST['phone']; $location = $_POST['location'];
$owner = $_POST['owner'];$recomm = $_POST['recomm'];$depend = $_POST['depend'];$log_usr = $_POST['log_usr'];

$expdate = strtotime ($cpu , strtotime ($prodt) );
$expdate = date ('Y-m-j' , $expdate );

$curdate = date("Y-m-d");


//$expdate=date_create($expdate);
//$curdate=date_create($curdate);
//$diff = $expdate - $curdate;
//echo $diff;
//echo $diff->format("%R%a days");



//$$curdate = strtotime($curdate);
//$expdate = strtotime($expdate);
 
//Calculate the difference.
//$diff = $expdate - $curdate;

$diff = strtotime (   '-6 month' , strtotime ( $expdate ) ) ;
 
$diff = date ( 'Y-m-j' , $diff );

//$diff = date_diff($curdate,$expdate);
//$diff = $diff->format("%a");
if ($diff <= $curdate) {
$dev_stat = 'Obsolete';
$recomm = 'This item is due for replacement';

}
 
 else {
 $dev_stat = 'Active';
 $recomm = 'Keep using this Item';
 }
if (!$dev_id || !$serial){
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

$sql = "UPDATE additem SET mandate='$mandt', devname='$dev_name', assmode='$dev_mod', prodate='$prodt', recommnd='$recomm', curprice='$cur_price', curversion='$cur_version', devstat='$dev_stat', location='$location', pic='$logo', endlife='$expdate' WHERE devid='$dev_id'";
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