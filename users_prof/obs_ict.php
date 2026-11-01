<?php 

include '../link/connect.php';


## Remember to insert some protection against MYSQL injections ##

$ass_cat = mysqli_real_escape_string($conn, $_POST['ass_cat']);
$it_categ = mysqli_real_escape_string($conn,$_POST['it_categ']);
$it_spec = mysqli_real_escape_string($conn,$_POST['it_spec']);
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
//$recomm = mysqli_real_escape_string($conn,$_POST['recomm']);
$depend = mysqli_real_escape_string($conn,$_POST['depend']);
$log_usr = mysqli_real_escape_string($conn,$_POST['log_usr']);


$result = mysqli_query($conn,"SELECT * FROM additem WHERE devid='$dev_id'");
        if(mysqli_num_rows($result)>0)
        {
        echo '<br>';
         //include 'item_prev.php';
             include 'add_item.php';
       exit();
       }
else
{ 

$sql = "INSERT INTO additem (category,eqp_category,eqpspec,devtype,maintype,rackmount,maintnote,hardrive,mandate,ramsize,devname,cpumode,manuname,lifecycle,serial,corecpu,macaddr,assmode,ipaddress,purprice,waranty,curprice,prodate,curdate,deversion,devid,curversion,devstat,vendor,deptmnt,phone,location,pic,endlife,owner,recommnd,dependnt,loguser)
VALUES ('$ass_cat','$it_categ','$it_spec','$dev_type','$maint_typ','$rackmnt','$maint_not','$hd','$mandt','$ram','$dev_name','$cpu_mod','$man_name','$cpu','$serial','$cor_cpu','$mac','$dev_mod','$ipaddr','$pur_price','$warnty','$cur_price','$prodt',NOW(),'$dev_version','$dev_id','$cur_version','$dev_stat','$vendor','$dept','$phone','$location','$ass_pic_res','$expdate','$owner','$recomm','$depend','$log_usr')";
if ($conn->query($sql) === TRUE) {
 echo "<h6 class='w3-green w3-text-white w3-center'>New record created successfully</h6>";
  echo '<br />';
  include 'add_item.php';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  
}
}
 ?>