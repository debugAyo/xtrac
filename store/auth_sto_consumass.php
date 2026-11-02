<?php

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
$qty1 =  $_POST['qty1'];
$rate1 =  $_POST['rate1'];
$cpu =  $_POST['cpu'];
$dev_stat =  $_POST['dev_stat'];

// You can use the below formular with string 'year', 'month, 'day', as the case may be, provided 
// the input value of $cpu does not already contain that string. 

//$expdate = strtotime ($cpu .'year' , strtotime ($prodt) );

$expdate = strtotime ($cpu , strtotime ($prodt) );
$expdate = date ('Y-m-j' , $expdate );

$curdate = date("Y-m-d");
 
//Calculate the difference.
//$diff = $expdate - $curdate;

$diff = strtotime (   '-6 month' , strtotime ( $expdate ) ) ;
 
$diff = date ( 'Y-m-j' , $diff );

//$diff = date_diff($curdate,$expdate);
//$diff = $diff->format("%a");

if ($diff <= $curdate) {
$dev_stat = 'Obsolete';
$recomm = 'Replace this Item';

}
 else {
 
//if ($diff > $curdate) {

 $dev_stat = 'Active';
 $recomm = 'Retain this Item';
 }



if (!$dev_name || !$dev_id || !$batch_num){
print 'Either Device Name, ID or Serial Number is missing';
exit();
}

include '../link/connect.php';

## Remember to insert some protection against MYSQL injections ##

$qty1 = mysqli_real_escape_string($conn, $_POST['qty1']);
$rate1 = mysqli_real_escape_string($conn, $_POST['rate1']);
$owner = mysqli_real_escape_string($conn, $_POST['owner']);
$log_usr = mysqli_real_escape_string($conn, $_POST['log_usr']);

//$dev_stat = mysqli_real_escape_string($conn, $_POST['dev_stat']);
//$recomm = mysqli_real_escape_string($conn, $_POST['recomm']);
//$expdate = mysqli_real_escape_string($conn, $_POST['expdate']);
//$curdate = mysqli_real_escape_string($conn, $_POST['curdate']);



$stmt = mysqli_prepare($conn, "SELECT * FROM additem WHERE devid=?");
mysqli_stmt_bind_param($stmt, 's', $dev_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($result)>0)
        {
        echo '<br>';
        //echo "Duplication of asset ID is highly prohibited";

       // echo '<br>';
         //include 'item_prev.php';
             //include 'add_item.php';
             include 'consum_ass.php';
       exit();
       }
else
{ 

//$sql = "INSERT INTO additem (category,devtype,devname,manuname,deptmnt,lifecycle,batchnumber,mandate,unit,quant,descript,purprice,waranty,prodate,curdate,devid,devstat,recommnd,location,pic,endlife,owner,loguser)
//VALUES ('$list','$dev_typ','$dev_name','$manuname','$dept','$cpu','$batch_num','$mandt','$unit','$qty','$descrp','$purprice','$warnty','$prodt',CURDATE(),'$dev_id','Active','Retain this Item','$location','$logo','$expdate','$owner','$log_usr')";

$stmt = mysqli_prepare($conn, "INSERT INTO additem (category,devid,devtype,devname,manuname,deptmnt,lifecycle,batchnumber,mandate,unit,quant,rate,descript,purprice,waranty,prodate,curdate,devstat,recommnd,location,endlife,pic)
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW(),?,?,?,?,?)");
mysqli_stmt_bind_param($stmt, 'sssssssssssssssssssss', $list, $dev_id, $dev_typ, $dev_name, $manuname, $dept, $cpu, $batch_num, $mandt, $unit, $qty, $rate, $descrp, $purprice, $warnty, $prodt, $dev_stat, $recomm, $location, $expdate, $logo);

if (mysqli_stmt_execute($stmt))


{
//include 'item_prev.php';
  include 'sto_ass_add.php';

//}
}
}

  
?>