
<?php
if (isset($_POST['submit'])) {
	
$asset_id=$_POST['asset_id'];
$ass_cat=$_POST['ass_cat'];
$ass_typ=$_POST['ass_typ'];
$asset_name=$_POST['asset_name'];
$serial_no=$_POST['serial_no'];
$descrpt=$_POST['descrpt'];
$dimension=$_POST['dimension'];
$ass_color=$_POST['ass_color'];
$manuname=$_POST['manuname'];
$ass_mode=$_POST['ass_mode'];
$manudate=$_POST['manudate'];
$ass_cond=$_POST['ass_cond'];
$procdate=$_POST['procdate'];
$purprice=$_POST['purprice'];
$purprice=$_POST['purprice'];
$vendor=$_POST['vendor'];
$location=$_POST['location'];
$spec_locat=$_POST['spec_locat'];
$warnty=$_POST['warnty'];
$owner=$_POST['owner'];
$end_life=$_POST['end_life'];
$dev_stat=$_POST['dev_stat']; 
$log_usr=$_POST['log_usr'];


}

if (!$asset_name || !$asset_id || !$serial_no){
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
		
$expdate = strtotime ($end_life , strtotime ($procdate) );
$expdate = date ('Y-m-j' , $expdate );

$curdate = date("Y-m-d");
 
//Calculate the difference.

$diff = strtotime (   '-6 month' , strtotime ( $expdate ) ) ;
 
$diff = date ( 'Y-m-j' , $diff );

include '../link/connect.php';


## Remember to insert some protection against MYSQL injections ##

$asset_id=$_POST['asset_id'];
$ass_cat=$_POST['ass_cat'];
$ass_typ=$_POST['ass_typ'];
$asset_name=$_POST['asset_name'];
$serial_no=$_POST['serial_no'];
$descrpt=$_POST['descrpt'];
$dimension=$_POST['dimension'];
$ass_color=$_POST['ass_color'];
$manuname=$_POST['manuname'];
$ass_mode=$_POST['ass_mode'];
$manudate=$_POST['manudate'];
$ass_cond=$_POST['ass_cond'];
$procdate=$_POST['procdate'];
$purprice=$_POST['purprice'];
$purprice=$_POST['purprice'];
$vendor=$_POST['vendor'];
$location=$_POST['location'];
$spec_locat=$_POST['spec_locat'];
$warnty_info=$_POST['warnty_info'];
$owner=$_POST['owner'];
$end_life=$_POST['end_life'];
$dev_stat=$_POST['dev_stat']; 
$log_usr=$_POST['log_usr'];

	 
$result = mysqli_query($conn,"SELECT * FROM additem WHERE devid='$asset_id'");
        if(mysqli_num_rows($result)>0)
        {
        echo '<br>';
         //include 'item_prev.php';
             include 'furn_ass.php';
       exit();
       }
else
{ 

$sql = "INSERT INTO additem (devid,category,devtype,devname,manuname,lifecycle,serial,assmode,descript,asscolor,ass_dimension,eqp_condition,mandate,purprice,warantyinfo,prodate,curdate,location,spec_location,pic,assdoc,servhist,eqpsched,endlife,devstat,owner,recommnd,loguser)
VALUES ('$asset_id','$ass_cat','$ass_typ','$asset_name','$manuname','$end_life','$serial_no','$ass_mode','$descrpt','$ass_color','$dimension','$ass_cond','$manudate','$purprice','$warnty_info','$procdate',NOW(),'$location','$spec_locat','$ass_pic_res','$ass_docs_res','$serv_hist_res','$maint_inst_res','$expdate','$dev_stat','$owner','$recomm','$log_usr')";

if ($conn->query($sql) === TRUE) {
 echo "<h6 class='w3-green w3-text-white w3-center'>New record created successfully</h6>";
  echo '<br />';
  include 'furn_ass.php';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  
}
}
 ?>