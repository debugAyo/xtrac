
<?php
if (isset($_POST['submit'])) {
	
$asset_id=$_POST['asset_id'];
$ass_cat=$_POST['ass_cat'];
$ass_typ=$_POST['ass_typ'];
$asset_name=$_POST['asset_name'];
$owner=$_POST['owner'];
$vendor=$_POST['vendor'];
$descrpt=$_POST['descrpt'];
$location=$_POST['location'];
$procdate=$_POST['procdate'];
$purprice=$_POST['purprice'];
$dimension=$_POST['dimension'];
$legal_iss=$_POST['legal_iss'];
$pro_struct=$_POST['pro_struct'];
$utility=$_POST['utility'];
$landscape=$_POST['landscape'];
$deprecat=$_POST['deprecat'];
$pro_eval=$_POST['pro_eval'];
$tenancy_det=$_POST['tenancy_det'];
$pro_man=$_POST['pro_man'];
$interior=$_POST['interior'];
$exterior=$_POST['exterior'];
$end_life=$_POST['end_life'];
$dev_stat=$_POST['dev_stat']; 
$log_usr=$_POST['log_usr'];
$dept=$_POST['dept'];

}

if (!$asset_name || !$asset_id ){
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
ass_docs*
ass_pic*
maint_inst*
insure_det*
env_assess*
permit
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


if ( isset( $_FILES['insure_det'] ) ) {
	
		$source_file = $_FILES['insure_det']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['insure_det']['name'];
		$insure_det_res = strtolower($dest_file);
		
	if (file_exists($insure_det_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move insure_det result!!");
			if($_FILES['insure_det']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$insure_det_res = 'null.pdf';
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
		
if ( isset( $_FILES['env_assess'] ) ) {
	
		$source_file = $_FILES['env_assess']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['env_assess']['name'];
		$env_assess_res = strtolower($dest_file);
		
	if (file_exists($env_assess_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move env_assess result!!");
			if($_FILES['env_assess']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$env_assess_res = 'null.pdf';
		}	


if ( isset( $_FILES['permit'] ) ) {
	
		$source_file = $_FILES['permit']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['permit']['name'];
		$permit_res = strtolower($dest_file);
		
	if (file_exists($permit_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move permit result!!");
			if($_FILES['permit']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$permit_res = 'null.pdf';
		}		
		
$expdate = strtotime ($end_life , strtotime ($procdate) );
$expdate = date ('Y-m-j' , $expdate );

$curdate = date("Y-m-d");
 
//Calculate the difference.

$diff = strtotime (   '-6 month' , strtotime ( $expdate ) ) ;
 
$diff = date ( 'Y-m-j' , $diff );

include '../link/connect.php';


## Remember to insert some protection against MYSQL injections ##
	
$asset_id=mysqli_real_escape_string($conn,$_POST['asset_id']);
$ass_cat=mysqli_real_escape_string($conn,$_POST['ass_cat']);
$ass_typ=mysqli_real_escape_string($conn,$_POST['ass_typ']);
$asset_name=mysqli_real_escape_string($conn,$_POST['asset_name']);
$owner=mysqli_real_escape_string($conn,$_POST['owner']);
$vendor=mysqli_real_escape_string($conn,$_POST['vendor']);
$descrpt=mysqli_real_escape_string($conn,$_POST['descrpt']);
$location=mysqli_real_escape_string($conn,$_POST['location']);
$procdate=mysqli_real_escape_string($conn,$_POST['procdate']);
$purprice=mysqli_real_escape_string($conn,$_POST['purprice']);
$dimension=mysqli_real_escape_string($conn,$_POST['dimension']);
$legal_iss=mysqli_real_escape_string($conn,$_POST['legal_iss']);
$pro_struct=mysqli_real_escape_string($conn,$_POST['pro_struct']);
$utility=mysqli_real_escape_string($conn,$_POST['utility']);
$landscape=mysqli_real_escape_string($conn,$_POST['landscape']);
$deprecat=mysqli_real_escape_string($conn,$_POST['deprecat']);
$pro_eval=mysqli_real_escape_string($conn,$_POST['pro_eval']);
$tenancy_det=mysqli_real_escape_string($conn,$_POST['tenancy_det']);
$pro_man=mysqli_real_escape_string($conn,$_POST['pro_man']);
$interior=mysqli_real_escape_string($conn,$_POST['interior']);
$exterior=mysqli_real_escape_string($conn,$_POST['exterior']);
$end_life=mysqli_real_escape_string($conn,$_POST['end_life']);
$dev_stat=mysqli_real_escape_string($conn,$_POST['dev_stat']); 
$log_usr=mysqli_real_escape_string($conn,$_POST['log_usr']);
$dept=mysqli_real_escape_string($conn,$_POST['dept']);


$result = mysqli_query($conn,"SELECT * FROM additem WHERE devid='$asset_id'");
        if(mysqli_num_rows($result)>0)
        {
        echo '<br>';
         //include 'item_prev.php';
             include 'land_ass.php';
       exit();
       }
else
{ 

$sql = "INSERT INTO additem (devid,category,devtype,descript,vehinterior,vehexterior,devname,lifecycle,ass_dimension,vendor,legalissue,projstruct,utility,landscape,deprecation,projevaluation,tenancydet,projman,purprice,prodate,curdate,location,pic,assdoc,insprec,eqpsched,envassess,permit,endlife,devstat,owner,recommnd,loguser,deptmnt)
VALUES ('$asset_id','$ass_cat','$ass_typ','$descrpt','$interior','$exterior','$asset_name','$end_life','$dimension','$vendor','$legal_iss','$pro_struct','$utility','$landscape','$deprecat','$pro_eval','$tenancy_det','$pro_man','$purprice','$procdate',NOW(),'$location','$ass_pic_res','$ass_docs_res','$insure_det_res','$maint_inst_res','$env_assess_res','$permit_res','$expdate','$dev_stat','$owner','$recomm','$log_usr','$dept')";

/*$sql = "INSERT INTO additem (devid,category,eqpspec,devtype,descript,devname,manuname,lifecycle,serial,equip_size,equip_weight,equip_mater,powerreq,outcap,oprange,feature,vendor,procreferno,support,eqp_condition,eqp_usage,spec_location,customize,upgrade,assmode)
VALUES ('$asset_id','$eqp_categ','$eqp_spec','$eqp_adv_spec','$eqp_descrp','$asset_name','$manuname','$end_life','$serialno','$eqp_size','$eqp_weight','$eqp_mater','$power_req','$out_cap','$op_range','$feature','$vendor','$proc_ref_no','$support','$condition','$usage','$spec_locat','$customize','$upgrade','$assmode')";*/
if ($conn->query($sql) === TRUE) {
 echo "<h6 class='w3-green w3-text-white w3-center'>New record created successfully</h6>";
  echo '<br />';
  include 'land_ass.php';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  
}
}
 ?>