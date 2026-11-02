<?php 

include '../link/connect.php';


## Remember to insert some protection against MYSQL injections ##

$ass_cat = $_POST['ass_cat'];
$dev_type = $_POST['dev_type'];
$maint_typ  = $_POST['maint_typ'];
$rackmnt = $_POST['rackmnt'];
$maint_not  = $_POST['maint_not'];
$hd = $_POST['hd'];
$mandt  = $_POST['mandt'];
$ram = $_POST['ram'];
$dev_name  = $_POST['dev_name'];
$cpu_mod  = $_POST['cpu_mod'];
$man_name  = $_POST['man_name'];
$cpu = $_POST['cpu'];
$serial  = $_POST['serial'];
$cor_cpu = $_POST['cor_cpu'];
$mac  = $_POST['mac'];
$dev_mod = $_POST['dev_mod'];
$ipaddr  = $_POST['ipaddr'];
$pur_price  = $_POST['pur_price'];
$warnty  = $_POST['warnty'];
$cur_price = $_POST['cur_price'];
$prodt  = $_POST['prodt'];
$dev_version = $_POST['dev_version'];
$dev_id  = $_POST['dev_id'];
$cur_version = $_POST['cur_version'];
$dev_stat  = $_POST['dev_stat'];
$vendor = $_POST['vendor'];
$dept  = $_POST['dept'];
$phone = $_POST['phone'];
$location  = $_POST['location'];
$owner = $_POST['owner'];
//$recomm = mysqli_real_escape_string($conn,$_POST['recomm']);
$depend = $_POST['depend'];
$log_usr = $_POST['log_usr'];


$stmt = mysqli_prepare($conn,"SELECT * FROM additem WHERE devid=?");
mysqli_stmt_bind_param($stmt,'s',$dev_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($result)>0)
        {
        echo '<br>';
         //include 'item_prev.php';
             include 'add_item.php';
       exit();
       }
else
{ 

$sql = "INSERT INTO additem (category,devtype,maintype,rackmount,maintnote,hardrive,mandate,ramsize,devname,cpumode,manuname,lifecycle,serial,corecpu,macaddr,assmode,ipaddress,purprice,waranty,curprice,prodate,curdate,deversion,devid,curversion,devstat,vendor,deptmnt,phone,location,pic,endlife,owner,recommnd,dependnt,loguser)
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW(),?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($stmt,'sssssssssssssssssssssssssssssssssss',$ass_cat,$dev_type,$maint_typ,$rackmnt,$maint_not,$hd,$mandt,$ram,$dev_name,$cpu_mod,$man_name,$cpu,$serial,$cor_cpu,$mac,$dev_mod,$ipaddr,$pur_price,$warnty,$cur_price,$prodt,$dev_version,$dev_id,$cur_version,$dev_stat,$vendor,$dept,$phone,$location,$ass_pic_res,$expdate,$owner,$recomm,$depend,$log_usr);
if (mysqli_stmt_execute($stmt)) {
  echo "<h6 class='w3-green w3-text-white w3-center'>New record created successfully</h6>";
  echo '<br />';
  include 'add_item.php';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  
}
}
 ?>