
<?php
if (isset($_POST['submit'])) {
	
$asset_id=$_POST['asset_id'];
$ass_cat=$_POST['ass_cat'];
$veh_categ=$_POST['veh_categ'];
$veh_type=$_POST['veh_type'];
$asset_name=$_POST['asset_name'];
$vin=$_POST['vin'];
$manuname=$_POST['manuname'];
$ass_mode=$_POST['ass_mode'];
$mk_year=$_POST['mk_year'];
$owner=$_POST['owner'];
$procdate=$_POST['procdate'];
$purprice=$_POST['purprice'];
$odometer=$_POST['odometer'];
$spec_version=$_POST['spec_version']; 
$lic_plate=$_POST['lic_plate']; 
$location=$_POST['location'];
$warnty=$_POST['warnty'];
$warnty_info=$_POST['warnty_info'];
$reg_exp_dt=$_POST['reg_exp_dt'];
$owner_info=$_POST['owner_info'];
$engine_typ=$_POST['engine_typ']; 
$fuel_typ=$_POST['fuel_typ'];
$transmit_typ=$_POST['transmit_typ']; 
$drive_typ=$_POST['drive_typ']; 
$gen_status=$_POST['gen_status'];
$nxt_sched=$_POST['nxt_sched'];
$interior=$_POST['interior'];
$exterior=$_POST['exterior']; 
$safety=$_POST['safety']; 
$insurer=$_POST['insurer']; 
$policy_no=$_POST['policy_no'];
$ins_start_dt=$_POST['ins_start_dt'];
$ins_end_dt=$_POST['ins_end_dt']; 
$prev_owner=$_POST['prev_owner'];
$accd_hist=$_POST['accd_hist']; 
$emiss_hist=$_POST['emiss_hist']; 
$end_life=$_POST['end_life'];
$veh_stat=$_POST['veh_stat']; 
$log_usr=$_POST['log_usr'];
$dept=$_POST['dept'];

}

if (!$asset_name || !$asset_id || !$vin){
print 'Asset Name, ID or Serial Number could probably be missing';
exit();
}



if ($veh_stat == 'Active') {
	$recomm = 'Keep in Use';
}
if ($veh_stat == 'Faulty') {
	$recomm = 'Replace or Repair';
}

if ($veh_stat == 'Obsolete') {
	$recomm = 'Dispose and Replace';
}

if ($veh_stat == 'Redundant') {
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
$asset_id=mysqli_real_escape_string($conn,$_POST['asset_id']);
$ass_cat=mysqli_real_escape_string($conn,$_POST['ass_cat']);
$veh_categ=mysqli_real_escape_string($conn,$_POST['veh_categ']);
$veh_type=mysqli_real_escape_string($conn,$_POST['veh_type']);
$asset_name=mysqli_real_escape_string($conn,$_POST['asset_name']);
$vin=mysqli_real_escape_string($conn,$_POST['vin']);
$manuname=mysqli_real_escape_string($conn,$_POST['manuname']);
$ass_mode=mysqli_real_escape_string($conn,$_POST['ass_mode']);
$mk_year=mysqli_real_escape_string($conn,$_POST['mk_year']);
$owner=mysqli_real_escape_string($conn,$_POST['owner']);
$procdate=mysqli_real_escape_string($conn,$_POST['procdate']);
$purprice=mysqli_real_escape_string($conn,$_POST['purprice']);
$odometer=mysqli_real_escape_string($conn,$_POST['odometer']);
$spec_version=mysqli_real_escape_string($conn,$_POST['spec_version']); 
$lic_plate=mysqli_real_escape_string($conn,$_POST['lic_plate']); 
$location=mysqli_real_escape_string($conn,$_POST['location']);
$warnty=mysqli_real_escape_string($conn,$_POST['warnty']);
$warnty_info=mysqli_real_escape_string($conn,$_POST['warnty_info']);
$reg_exp_dt=mysqli_real_escape_string($conn,$_POST['reg_exp_dt']);
$owner_info=mysqli_real_escape_string($conn,$_POST['owner_info']);
$engine_typ=mysqli_real_escape_string($conn,$_POST['engine_typ']); 
$fuel_typ=mysqli_real_escape_string($conn,$_POST['fuel_typ']);
$transmit_typ=mysqli_real_escape_string($conn,$_POST['transmit_typ']); 
$drive_typ=mysqli_real_escape_string($conn,$_POST['drive_typ']); 
$gen_status=mysqli_real_escape_string($conn,$_POST['gen_status']);
$nxt_sched=mysqli_real_escape_string($conn,$_POST['nxt_sched']);
$interior=mysqli_real_escape_string($conn,$_POST['interior']);
$exterior=mysqli_real_escape_string($conn,$_POST['exterior']); 
$safety=mysqli_real_escape_string($conn,$_POST['safety']); 
$insurer=mysqli_real_escape_string($conn,$_POST['insurer']); 
$policy_no=mysqli_real_escape_string($conn,$_POST['policy_no']);
$ins_start_dt=mysqli_real_escape_string($conn,$_POST['ins_start_dt']);
$ins_end_dt=mysqli_real_escape_string($conn,$_POST['ins_end_dt']); 
$prev_owner=mysqli_real_escape_string($conn,$_POST['prev_owner']);
$accd_hist=mysqli_real_escape_string($conn,$_POST['accd_hist']); 
$emiss_hist=mysqli_real_escape_string($conn,$_POST['emiss_hist']); 
$end_life=mysqli_real_escape_string($conn,$_POST['end_life']);
$veh_stat=mysqli_real_escape_string($conn,$_POST['veh_stat']); 
$log_usr=mysqli_real_escape_string($conn,$_POST['log_usr']);
$dept=mysqli_real_escape_string($conn,$_POST['dept']);

$result = mysqli_query($conn,"SELECT * FROM auto_categ WHERE id='$veh_categ'");
        if(mysqli_num_rows($result)>0)
        {
			while ($row=mysqli_fetch_array($result)) {
				$veh_cat=$row['cat_name'];
              }
		}
$result = mysqli_query($conn,"SELECT * FROM auto_spec_categ WHERE id='$veh_type'");
        if(mysqli_num_rows($result)>0)
       {
			while ($row=mysqli_fetch_array($result)) {
				$vehspec=$row['spec_name'];
              }
		}
	   
	 
$result = mysqli_query($conn,"SELECT * FROM additem WHERE devid='$asset_id'");
        if(mysqli_num_rows($result)>0)
        {
        echo '<br>';
         //include 'item_prev.php';
             include 'elect_ass.php';
       exit();
       }
else
{ 

$sql = "INSERT INTO additem (devid,category,eqp_category,devtype,devname,manuname,lifecycle,vehin,regnumber,assmode,odometer,makeyear,purprice,waranty,warantyinfo,prodate,curdate,deversion,ownerinfo,location,pic,assdoc,servhist,reg_expdt,enginetype,fueltyp,transmitype,drivetyp,gen_status,nxtsched,vehinterior,vehexterior,vehsafety,vehinsurer,policyno,ins_startdt,ins_enddt,prevowner,accdhist,emisshist,endlife,devstat,owner,recommnd,loguser,deptmnt)
VALUES ('$asset_id','$ass_cat','$veh_cat','$vehspec','$asset_name','$manuname','$end_life','$vin','$lic_plate','$ass_mode','$odometer','$mk_year','$purprice','$warnty','$warnty_info','$procdate',NOW(),'$spec_version','$owner_info','$location','$ass_pic_res','$ass_docs_res','$serv_hist_res','$reg_exp_dt','$engine_typ','$fuel_typ','$transmit_typ','$drive_typ','$gen_status','$nxt_sched','$interior','$exterior','$safety','$insurer','$policy_no','$ins_start_dt','$ins_end_dt','$prev_owner','$accd_hist','$emiss_hist','$expdate','$veh_stat','$owner','$recomm','$log_usr','$dept')";

if ($conn->query($sql) === TRUE) {
 echo "<h6 class='w3-green w3-text-white w3-center'>New record created successfully</h6>";
  echo '<br />';
  include 'auto_ass.php';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  
}
}
 ?>