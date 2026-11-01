
<?php
if (isset($_POST['submit'])) {
	
$dev_id=$_POST['dev_id'];
$ass_cat=$_POST['ass_cat'];
$eqp_categ=$_POST['eqp_categ'];
$eqp_spec=$_POST['eqp_spec'];
$eqp_adv_spec=$_POST['eqp_adv_spec'];
$asset_name=$_POST['asset_name'];
$descript=$_POST['descript'];
$manuname=$_POST['manuname'];
$assmode=$_POST['assmode'];
$serial_no=$_POST['serial_no'];
$ass_dim=$_POST['ass_dim'];
$ass_color=$_POST['ass_color'];
$ass_mater=$_POST['ass_mater'];
$power_req=$_POST['power_req'];
$power_rate=$_POST['power_rate'];
$feature=$_POST['feature'];
$procdate=$_POST['procdate'];
$purprice=$_POST['purprice'];
$vendor=$_POST['vendor'];
$warnty=$_POST['warnty'];
$condition=$_POST['condition'];
$usage=$_POST['usage'];
$location=$_POST['location'];
$spec_locat=$_POST['spec_locat'];
$owner=$_POST['owner'];
$end_life=$_POST['end_life'];
$dev_stat=$_POST['dev_stat'];
$log_usr=$_POST['log_usr'];

}

if (!$asset_name || !$dev_id || !$serial_no){
print 'Asset Name, ID or Serial Number could probably be missing';
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

/*
$manual*
$maint_inst*
$operate_ins*
$ass_docs*
$ass_pic*
*/

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
		
if ( isset( $_FILES['ass_docs'] ) ) {
	
		$source_file = $_FILES['ass_docs']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['ass_docs']['name'];
		$ass_docs_res = strtolower($dest_file);
		
	if (file_exists($ass_docs_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move ass_docs result!!");
			if($_FILES['ass_docs']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$ass_docs_res = 'null.pdf';
		}


if ( isset( $_FILES['manual'] ) ) {
	
		$source_file = $_FILES['manual']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['manual']['name'];
		$manual_res = strtolower($dest_file);
		
	if (file_exists($manual_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move manual result!!");
			if($_FILES['manual']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$manual_res = 'null.pdf';
		}
		
		
if ( isset( $_FILES['maint_inst'] ) ) {
	
		$source_file = $_FILES['maint_inst']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['maint_inst']['name'];
		$maint_inst_res = strtolower($dest_file);
		
	if (file_exists($maint_inst_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move eqp_sched result!!");
			if($_FILES['maint_inst']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$maint_inst_res = 'null.pdf';
		}
		
if ( isset( $_FILES['operate_ins'] ) ) {
	
		$source_file = $_FILES['operate_ins']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['operate_ins']['name'];
		$operate_ins_res = strtolower($dest_file);
		
	if (file_exists($operate_ins_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move operate_ins result!!");
			if($_FILES['operate_ins']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$operate_ins_res = 'null.pdf';
		}	


if ( isset( $_FILES['serv_hist'] ) ) {
	
		$source_file = $_FILES['serv_hist']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['serv_hist']['name'];
		$serv_hist_res = strtolower($dest_file);
		
	if (file_exists($serv_hist_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move serv_hist result!!");
			if($_FILES['serv_hist']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$serv_hist_res = 'null.pdf';
		}		
		
$expdate = strtotime ($end_life , strtotime ($procdate) );
$expdate = date ('Y-m-j' , $expdate );

$curdate = date("Y-m-d");
 
//Calculate the difference.

$diff = strtotime (   '-6 month' , strtotime ( $expdate ) ) ;
 
$diff = date ( 'Y-m-j' , $diff );

include '../link/connect.php';


## Remember to insert some protection against MYSQL injections ##

$dev_id=mysqli_real_escape_string($conn,$_POST['dev_id']);
$ass_cat=mysqli_real_escape_string($conn,$_POST['ass_cat']);
$eqp_categ=mysqli_real_escape_string($conn,$_POST['eqp_categ']);
$eqp_spec=mysqli_real_escape_string($conn,$_POST['eqp_spec']);
$eqp_adv_spec=mysqli_real_escape_string($conn,$_POST['eqp_adv_spec']);
$asset_name=mysqli_real_escape_string($conn,$_POST['asset_name']);
$descript=mysqli_real_escape_string($conn,$_POST['descript']);
$manuname=mysqli_real_escape_string($conn,$_POST['manuname']);
$vendor=mysqli_real_escape_string($conn,$_POST['vendor']);
$assmode=mysqli_real_escape_string($conn,$_POST['assmode']);
$serial_no=mysqli_real_escape_string($conn,$_POST['serial_no']);
$ass_dim=mysqli_real_escape_string($conn,$_POST['ass_dim']);
$ass_color=mysqli_real_escape_string($conn,$_POST['ass_color']);
$ass_mater=mysqli_real_escape_string($conn,$_POST['ass_mater']);
$power_req=mysqli_real_escape_string($conn,$_POST['power_req']);
$power_rate=mysqli_real_escape_string($conn,$_POST['power_rate']);
$feature=mysqli_real_escape_string($conn,$_POST['feature']);
$procdate=mysqli_real_escape_string($conn,$_POST['procdate']);
$purprice=mysqli_real_escape_string($conn,$_POST['purprice']);
$vendor=mysqli_real_escape_string($conn,$_POST['vendor']);
$warnty=mysqli_real_escape_string($conn,$_POST['warnty']);
$condition=mysqli_real_escape_string($conn,$_POST['condition']);
$usage=mysqli_real_escape_string($conn,$_POST['usage']);
$location=mysqli_real_escape_string($conn,$_POST['location']);
$spec_locat=mysqli_real_escape_string($conn,$_POST['spec_locat']);
$owner=mysqli_real_escape_string($conn,$_POST['owner']);
$end_life=mysqli_real_escape_string($conn,$_POST['end_life']);
$dev_stat=mysqli_real_escape_string($conn,$_POST['dev_stat']);
$log_usr=mysqli_real_escape_string($conn,$_POST['log_usr']);


$result = mysqli_query($conn,"SELECT * FROM elec_categ WHERE id='$eqp_categ'");
        if(mysqli_num_rows($result)>0)
        {
			while ($row=mysqli_fetch_array($result)) {
				$eqp_cat=$row['cat_name'];
              }
		}
$result = mysqli_query($conn,"SELECT * FROM elec_spec_categ WHERE id='$eqp_spec'");
        if(mysqli_num_rows($result)>0)
       {
			while ($row=mysqli_fetch_array($result)) {
				$eqpspec=$row['spec_name'];
              }
		}
	   
	   $result = mysqli_query($conn,"SELECT * FROM elec_adv_spec_categ WHERE id='$eqp_adv_spec'");
        if(mysqli_num_rows($result)>0)
        {
			while ($row=mysqli_fetch_array($result)) {
				$eqp_advspec=$row['type'];
              } 
		}

$result = mysqli_query($conn,"SELECT * FROM additem WHERE devid='$dev_id'");
        if(mysqli_num_rows($result)>0)
        {
        echo '<br>';
         //include 'item_prev.php';
             include 'elect_ass.php';
       exit();
       }
else
{ 

$sql = "INSERT INTO additem (devid,category,eqp_category,eqpspec,devtype,descript,devname,manuname,lifecycle,serial,equip_mater,powerreq,powerate,asscolor,feature,ass_dimension,vendor,eqp_condition,eqp_usage,spec_location,assmode,purprice,waranty,prodate,curdate,location,pic,assdoc,eqpmanual,eqpsched,eqpopins,servhist,endlife,devstat,owner,recommnd,loguser)
VALUES ('$dev_id','$ass_cat','$eqp_cat','$eqpspec','$eqp_advspec','$descript','$asset_name','$manuname','$end_life','$serial_no','$ass_mater','$power_req','$power_rate','$ass_color','$feature','$ass_dim','$vendor','$condition','$usage','$spec_locat','$assmode','$purprice','$warnty','$procdate',NOW(),'$location','$ass_pic_res','$ass_docs_res','$manual_res','$maint_inst_res','$operate_ins_res','$serv_hist_res','$expdate','$dev_stat','$owner','$recomm','$log_usr')";

/*$sql = "INSERT INTO additem (devid,category,eqpspec,devtype,descript,devname,manuname,lifecycle,serial,equip_size,equip_weight,equip_mater,powerreq,outcap,oprange,feature,vendor,procreferno,support,eqp_condition,eqp_usage,spec_location,customize,upgrade,assmode)
VALUES ('$asset_id','$eqp_categ','$eqp_spec','$eqp_adv_spec','$eqp_descrp','$asset_name','$manuname','$end_life','$serialno','$eqp_size','$eqp_weight','$eqp_mater','$power_req','$out_cap','$op_range','$feature','$vendor','$proc_ref_no','$support','$condition','$usage','$spec_locat','$customize','$upgrade','$assmode')";*/
if ($conn->query($sql) === TRUE) {
 echo "<h6 class='w3-green w3-text-white w3-center'>New record created successfully</h6>";
  echo '<br />';
  include 'elect_ass.php';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  
}
}
 ?>