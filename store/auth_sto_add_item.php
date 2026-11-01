<?php
echo '<font face="arial" size="2">';
$email = $_POST['email']; $pin = $_POST['pin'];
$list=$_POST['list'];$dev_type = $_POST['dev_type']; $maint_typ = $_POST['maint_typ'];$rackmnt = $_POST['rackmnt']; 
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

if (!$dev_name || !$dev_id || !$serial){
print 'Either Device Name, ID or Serial Number is missing';
exit();
}
 
//$string = $cpu;
//$lifecyc = preg_replace("/[^0-9]/", '', $string);
 
 
 
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


## Remember to insert some protection against MYSQL injections ##

$list = mysqli_real_escape_string($conn, $_POST['list']);
$dev_type = mysqli_real_escape_string($conn, $_POST['dev_type']);
$maint_typ  = mysqli_real_escape_string($conn, $_POST['maint_typ']);
$rackmnt = mysqli_real_escape_string($conn, $_POST['rackmnt']);
$maint_not  = mysqli_real_escape_string($conn, $_POST['maint_not']);
$hd = mysqli_real_escape_string($conn, $_POST['hd']);
$mandt  = mysqli_real_escape_string($conn, $_POST['mandt']);
$ram = mysqli_real_escape_string($conn, $_POST['ram']);
$dev_name  = mysqli_real_escape_string($conn, $_POST['dev_name']);
$cpu_mod  = mysqli_real_escape_string($conn, $_POST['cpu_mod']);
$man_name  = mysqli_real_escape_string($conn, $_POST['man_name']);
$cpu = mysqli_real_escape_string($conn, $_POST['cpu']);
$serial  = mysqli_real_escape_string($conn, $_POST['serial']);
$cor_cpu = mysqli_real_escape_string($conn, $_POST['cor_cpu']);
$mac  = mysqli_real_escape_string($conn, $_POST['mac']);
$dev_mod = mysqli_real_escape_string($conn, $_POST['dev_mod']);
$ipaddr  = mysqli_real_escape_string($conn, $_POST['ipaddr']);
$pur_price  = mysqli_real_escape_string($conn, $_POST['pur_price']);
$warnty  = mysqli_real_escape_string($conn, $_POST['warnty']);
$cur_price = mysqli_real_escape_string($conn, $_POST['cur_price']);
$prodt  = mysqli_real_escape_string($conn, $_POST['prodt']);
$dev_version = mysqli_real_escape_string($conn, $_POST['dev_version']);
$dev_id  = mysqli_real_escape_string($conn, $_POST['dev_id']);
$cur_version = mysqli_real_escape_string($conn, $_POST['cur_version']);
$dev_stat  = mysqli_real_escape_string($conn, $_POST['dev_stat']);
$vendor = mysqli_real_escape_string($conn, $_POST['vendor']);
$dept  = mysqli_real_escape_string($conn, $_POST['dept']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$location  = mysqli_real_escape_string($conn, $_POST['location']);
$owner = mysqli_real_escape_string($conn,$_POST['owner']);
$recomm = mysqli_real_escape_string($conn,$_POST['recomm']);
$depend = mysqli_real_escape_string($conn,$_POST['depend']);
$log_usr = mysqli_real_escape_string($conn,$_POST['log_usr']);


$result = mysqli_query($conn,"SELECT * FROM additem WHERE devid='$dev_id'");
        if(mysqli_num_rows($result)>0)
        {
        echo '<br>';
         //include 'item_prev.php';
             include 'sto_add_item.php';
       exit();
       }
else
{ 

$sql = "INSERT INTO additem (category,devtype,maintype,rackmount,maintnote,hardrive,mandate,ramsize,devname,cpumode,manuname,lifecycle,serial,corecpu,macaddr,assmode,ipaddress,purprice,waranty,curprice,prodate,curdate,deversion,devid,curversion,devstat,vendor,deptmnt,phone,location,pic,endlife,owner,recommnd,dependnt,loguser)
VALUES ('$list','$dev_type','$maint_typ','$rackmnt','$maint_not','$hd','$mandt','$ram','$dev_name','$cpu_mod','$man_name','$cpu','$serial','$cor_cpu','$mac','$dev_mod','$ipaddr','$pur_price','$warnty','$cur_price','$prodt',CURDATE(),'$dev_version','$dev_id','$cur_version','$dev_stat','$vendor','$dept','$phone','$location','$logo','$expdate','$owner','$recomm','$depend','$log_usr')";
$result = mysqli_query($conn, $sql);

if ($result > 0)
{
//include 'item_prev.php';
  include 'sto_ass_add.php';

}
}
}
?>