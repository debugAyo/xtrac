
<?php
if (isset($_POST['submit'])) {
	
$ass_cat=$_POST['ass_cat'];
$asset_id=$_POST['asset_id'];
$eqp_categ=$_POST['eqp_categ'];
$eqp_spec=$_POST['eqp_spec'];
$eqp_adv_spec=$_POST['eqp_adv_spec'];
$eqp_descrp=$_POST['eqp_descrp'];
$asset_name=$_POST['asset_name'];
$manuname=$_POST['manuname'];
$assmode=$_POST['assmode'];
$serialno=$_POST['serialno'];
$eqp_size=$_POST['eqp_size'];
$eqp_weight=$_POST['eqp_weight'];
$eqp_mater=$_POST['eqp_mater'];
$power_req=$_POST['power_req'];
$out_cap=$_POST['out_cap'];
$op_range=$_POST['op_range'];
$feature=$_POST['feature'];
$procdate=$_POST['procdate'];
$purprice=$_POST['purprice'];
$vendor=$_POST['vendor'];
$proc_ref_no=$_POST['proc_ref_no'];
$warnty=$_POST['warnty'];
$support=$_POST['support'];
$condition=$_POST['condition'];
$usage=$_POST['usage'];
$location=$_POST['location'];
$spec_locat=$_POST['spec_locat'];
$owner=$_POST['owner'];
$customize=$_POST['customize'];
$upgrade=$_POST['upgrade'];
$end_life=$_POST['end_life'];
$dev_stat=$_POST['dev_stat'];
$log_usr=$_POST['log_usr'];
$dept=$_POST['dept'];
}

if (!$asset_name || !$asset_id || !$serialno){
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
		
if ( isset( $_FILES['ass_doc'] ) ) {
	
		$source_file = $_FILES['ass_doc']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['ass_doc']['name'];
		$ass_doc_res = strtolower($dest_file);
		
	if (file_exists($ass_doc_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move ass_doc result!!");
			if($_FILES['ass_doc']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$ass_doc_res = 'null.pdf';
		}


if ( isset( $_FILES['eqp_manual'] ) ) {
	
		$source_file = $_FILES['eqp_manual']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['eqp_manual']['name'];
		$eqp_manual_res = strtolower($dest_file);
		
	if (file_exists($eqp_manual_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move eqp_manual result!!");
			if($_FILES['eqp_manual']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$eqp_manual_res = 'null.pdf';
		}
		
		
if ( isset( $_FILES['eqp_sched'] ) ) {
	
		$source_file = $_FILES['eqp_sched']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['eqp_sched']['name'];
		$eqp_sched_res = strtolower($dest_file);
		
	if (file_exists($eqp_sched_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move eqp_sched result!!");
			if($_FILES['eqp_sched']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$eqp_sched_res = 'null.pdf';
		}
		
if ( isset( $_FILES['eqp_op_ins'] ) ) {
	
		$source_file = $_FILES['eqp_op_ins']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['eqp_op_ins']['name'];
		$eqp_op_ins_res = strtolower($dest_file);
		
	if (file_exists($eqp_op_ins_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move eqp_op_ins result!!");
			if($_FILES['eqp_op_ins']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$eqp_op_ins_res = 'null.pdf';
		}	


if ( isset( $_FILES['certify'] ) ) {
	
		$source_file = $_FILES['certify']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['certify']['name'];
		$certify_res = strtolower($dest_file);
		
	if (file_exists($certify_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move certify result!!");
			if($_FILES['certify']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$certify_res = 'null.pdf';
		}

if ( isset( $_FILES['insp_rec'] ) ) {
	
		$source_file = $_FILES['insp_rec']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['insp_rec']['name'];
		$insp_rec_res = strtolower($dest_file);
		
	if (file_exists($insp_rec_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move insp_rec result!!");
			if($_FILES['insp_rec']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$insp_rec_res = 'null.pdf';
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

$ass_cat=mysqli_real_escape_string($conn,$_POST['ass_cat']);
$asset_id=mysqli_real_escape_string($conn,$_POST['asset_id']);
$eqp_categ=mysqli_real_escape_string($conn,$_POST['eqp_categ']);
$eqp_spec=mysqli_real_escape_string($conn,$_POST['eqp_spec']);
$eqp_adv_spec=mysqli_real_escape_string($conn,$_POST['eqp_adv_spec']);
$eqp_descrp=mysqli_real_escape_string($conn,$_POST['eqp_descrp']);
$asset_name=mysqli_real_escape_string($conn,$_POST['asset_name']);
$manuname=mysqli_real_escape_string($conn,$_POST['manuname']);
$assmode=mysqli_real_escape_string($conn,$_POST['assmode']);
$serialno=mysqli_real_escape_string($conn,$_POST['serialno']);
$eqp_size=mysqli_real_escape_string($conn,$_POST['eqp_size']);
$eqp_weight=mysqli_real_escape_string($conn,$_POST['eqp_weight']);
$eqp_mater=mysqli_real_escape_string($conn,$_POST['eqp_mater']);
$power_req=mysqli_real_escape_string($conn,$_POST['power_req']);
$out_cap=mysqli_real_escape_string($conn,$_POST['out_cap']);
$op_range=mysqli_real_escape_string($conn,$_POST['op_range']);
$feature=mysqli_real_escape_string($conn,$_POST['feature']);
$procdate=mysqli_real_escape_string($conn,$_POST['procdate']);
$purprice=mysqli_real_escape_string($conn,$_POST['purprice']);
$vendor=mysqli_real_escape_string($conn,$_POST['vendor']);
$proc_ref_no=mysqli_real_escape_string($conn,$_POST['proc_ref_no']);
$warnty=mysqli_real_escape_string($conn,$_POST['warnty']);
$support=mysqli_real_escape_string($conn,$_POST['support']);
$condition=mysqli_real_escape_string($conn,$_POST['condition']);
$usage=mysqli_real_escape_string($conn,$_POST['usage']);
$location=mysqli_real_escape_string($conn,$_POST['location']);
$spec_locat=mysqli_real_escape_string($conn,$_POST['spec_locat']);
$owner=mysqli_real_escape_string($conn,$_POST['owner']);
$customize=mysqli_real_escape_string($conn,$_POST['customize']);
$upgrade=mysqli_real_escape_string($conn,$_POST['upgrade']);
$end_life=mysqli_real_escape_string($conn,$_POST['end_life']);
$dev_stat=mysqli_real_escape_string($conn,$_POST['dev_stat']);
$log_usr=mysqli_real_escape_string($conn,$_POST['log_usr']);
$dept=mysqli_real_escape_string($conn,$_POST['dept']);


$result = mysqli_query($conn,"SELECT * FROM eqp_categ WHERE id='$eqp_categ'");
        if(mysqli_num_rows($result)>0)
        {
			while ($row=mysqli_fetch_array($result)) {
				$eqp_cat=$row['cat_name'];
              }
		}
$result = mysqli_query($conn,"SELECT * FROM eqp_spec_categ WHERE id='$eqp_spec'");
        if(mysqli_num_rows($result)>0)
       {
			while ($row=mysqli_fetch_array($result)) {
				$eqpspec=$row['spec_list'];
              }
		}
	   
	   $result = mysqli_query($conn,"SELECT * FROM eqp_adv_spec_categ WHERE id='$eqp_adv_spec'");
        if(mysqli_num_rows($result)>0)
        {
			while ($row=mysqli_fetch_array($result)) {
				$eqp_advspec=$row['type'];
              } 
		}

$result = mysqli_query($conn,"SELECT * FROM additem WHERE devid='$asset_id'");
        if(mysqli_num_rows($result)>0)
        {
        echo '<br>';
         //include 'item_prev.php';
             include 'plant_ass.php';
       exit();
       }
else
{ 

$sql = "INSERT INTO additem (devid,category,eqp_category,eqpspec,devtype,descript,devname,manuname,lifecycle,serial,equip_size,equip_weight,equip_mater,powerreq,outcap,oprange,feature,vendor,procreferno,support,eqp_condition,eqp_usage,spec_location,eqp_customize,eqp_upgrade,assmode,purprice,waranty,prodate,curdate,location,pic,assdoc,eqpmanual,eqpsched,eqpopins,eqp_certify,insprec,servhist,endlife,devstat,owner,recommnd,loguser,deptmnt)
VALUES ('$asset_id','$ass_cat','$eqp_cat','$eqpspec','$eqp_advspec','$eqp_descrp','$asset_name','$manuname','$end_life','$serialno','$eqp_size','$eqp_weight','$eqp_mater','$power_req','$out_cap','$op_range','$feature','$vendor','$proc_ref_no','$support','$condition','$usage','$spec_locat','$customize','$upgrade','$assmode','$purprice','$warnty','$procdate',NOW(),'$location','$ass_pic_res','$ass_doc_res','$eqp_manual_res','$eqp_sched_res','$eqp_op_ins_res','$certify_res','$insp_rec_res','$serv_hist_res','$expdate','$dev_stat','$owner','$recomm','$log_usr','$dept')";

/*$sql = "INSERT INTO additem (devid,category,eqpspec,devtype,descript,devname,manuname,lifecycle,serial,equip_size,equip_weight,equip_mater,powerreq,outcap,oprange,feature,vendor,procreferno,support,eqp_condition,eqp_usage,spec_location,customize,upgrade,assmode)
VALUES ('$asset_id','$eqp_categ','$eqp_spec','$eqp_adv_spec','$eqp_descrp','$asset_name','$manuname','$end_life','$serialno','$eqp_size','$eqp_weight','$eqp_mater','$power_req','$out_cap','$op_range','$feature','$vendor','$proc_ref_no','$support','$condition','$usage','$spec_locat','$customize','$upgrade','$assmode')";*/
if ($conn->query($sql) === TRUE) {
 echo "<h6 class='w3-green w3-text-white w3-center'>New record created successfully</h6>";
  echo '<br />';
  include 'plant_ass.php';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  
}
}
 ?>