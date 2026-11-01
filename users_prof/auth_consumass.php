<?php

$dev_id =  $_POST['dev_id'];
$dev_name =  $_POST['dev_name'];
$consum_categ = $_POST['consum_categ'];
$consum_spec = $_POST['consum_spec'];
$dev_typ =  $_POST['dev_typ'];
$descrp =  $_POST['descrp'];
$dept =  $_POST['dept'];
$owner =  $_POST['owner'];
$manuname =  $_POST['manuname'];
$prodt =  $_POST['prodt'];
$mandt =  $_POST['mandt'];
$log_usr =  $_POST['log_usr'];
$ass_cat =  $_POST['ass_cat'];
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
	
	$ass_pic_res = 'null.pdf';
		}
include '../link/connect.php';

## Remember to insert some protection against MYSQL injections ##

$dev_id = mysqli_real_escape_string($conn, $_POST['dev_id']);
$dev_name = mysqli_real_escape_string($conn, $_POST['dev_name']);
$consum_categ = mysqli_real_escape_string($conn,$_POST['consum_categ']);
$consum_spec = mysqli_real_escape_string($conn,$_POST['consum_spec']);
$dev_typ = mysqli_real_escape_string($conn, $_POST['dev_typ']);
$descrp =  mysqli_real_escape_string($conn,$_POST['descrp']);
$mandt =  mysqli_real_escape_string($conn,$_POST['mandt']);
$batch_num =  mysqli_real_escape_string($conn,$_POST['batch_num']);
$unit =  mysqli_real_escape_string($conn,$_POST['unit']);
$qty1 = mysqli_real_escape_string($conn, $_POST['qty1']);
$rate1 = mysqli_real_escape_string($conn, $_POST['rate1']);
$dept = mysqli_real_escape_string($conn, $_POST['dept']);
$owner = mysqli_real_escape_string($conn, $_POST['owner']);
$manuname = mysqli_real_escape_string($conn, $_POST['manuname']);
$prodt = mysqli_real_escape_string($conn, $_POST['prodt']);
$log_usr = mysqli_real_escape_string($conn, $_POST['log_usr']);
$ass_cat = mysqli_real_escape_string($conn, $_POST['ass_cat']);
$purprice = mysqli_real_escape_string($conn, $_POST['purprice']);
$warnty = mysqli_real_escape_string($conn, $_POST['warnty']);
$location = mysqli_real_escape_string($conn, $_POST['location']);
$cpu = mysqli_real_escape_string($conn, $_POST['cpu']);

//$dev_stat = mysqli_real_escape_string($conn, $_POST['dev_stat']);
//$recomm = mysqli_real_escape_string($conn, $_POST['recomm']);
//$expdate = mysqli_real_escape_string($conn, $_POST['expdate']);
//$curdate = mysqli_real_escape_string($conn, $_POST['curdate']);



$result = mysqli_query($conn,"SELECT * FROM additem WHERE devid='$dev_id'");
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

$sql = "INSERT INTO additem (category,devid,eqp_category,eqpspec,devtype,devname,manuname,deptmnt,lifecycle,batchnumber,mandate,unit,quant,rate,descript,purprice,waranty,prodate,curdate,devstat,recommnd,location,endlife,pic)
VALUES ('$ass_cat','$dev_id','$consum_categ','$consum_spec','$dev_typ','$dev_name','$manuname','$dept','$cpu','$batch_num','$mandt','$unit','$qty1','$rate1','$descrp','$purprice','$warnty','$prodt',NOW(),'$dev_stat','$recomm','$location','$expdate','$ass_pic_res')";

$result = mysqli_query($conn, $sql);

if ($result > 0)


{
//include 'item_prev.php';

  echo '<h6 class="w3-text-green">Thank you! Asset successfully added to the database</h6>';
    include 'asset_categ.php';

//}
}
}

  
?>