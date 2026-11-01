<?php
$ass_id=$_POST['ass_id'];
$ass_name=$_POST['ass_name'];
$ass_typ=$_POST['ass_typ'];
$ass_version=$_POST['ass_version'];
$man_name=$_POST['man_name'];
$ass_cat=$_POST['ass_cat'];
$lic=$_POST['lic'];
$lic_info=$_POST['lic_info'];
$no_user_lic=$_POST['no_user_lic'];
$activ_dt=$_POST['activ_dt'];
$procdate=$_POST['procdate'];
$purprice=$_POST['purprice'];
$serial=$_POST['serial'];
$mandt=$_POST['mandt'];
$lifecycle=$_POST['lifecycle'];
$vendor=$_POST['vendor'];
$phone=$_POST['phone'];
$log_usr=$_POST['log_usr'];

/*$soft_img_res*/

if (!$ass_id || !$serial){
print 'Either Software ID or Serial Number is missing';
exit();
}

 
$uploads='asset_assoc';
if (!file_exists($uploads)) {
mkdir($uploads, 0755);

}

if ( isset( $_FILES['soft_img'] ) ) {
	
		$source_file = $_FILES['soft_img']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['soft_img']['name'];
		$soft_img_res = strtolower($dest_file);
		
	if (file_exists($soft_img_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move soft_img result!!");
			if($_FILES['soft_img']['error'] == 0) {
			
			}
	
	}
	
}

else {

$soft_img_res = 'null.pdf';
		}
$expdate = strtotime ($lifecycle , strtotime ($activ_dt) );
$expdate = date ('Y-m-j' , $expdate );

$curdate = date("Y-m-d");
 
//Calculate the difference.

$diff = strtotime (   '-3 month' , strtotime ( $expdate ) ) ;
 
$diff = date ( 'Y-m-j' , $diff );


if ($diff <= $curdate) {
$dev_stat = 'Obsolete';
$recomm = 'This Software is has reached its End of Life';

}
 
if ($curdate <=  $diff ) {
$dev_stat = 'Active';
$recomm = 'This Software is still Active';

 }       


include '../link/connect.php';


## Remember to insert some protection against MYSQL injections ##

$ass_id=mysqli_real_escape_string($conn,$_POST['ass_id']);
$ass_name=mysqli_real_escape_string($conn,$_POST['ass_name']);
$ass_version=mysqli_real_escape_string($conn,$_POST['ass_version']);
$ass_typ=mysqli_real_escape_string($conn,$_POST['ass_typ']);
$man_name=mysqli_real_escape_string($conn,$_POST['man_name']);
$ass_cat=mysqli_real_escape_string($conn,$_POST['ass_cat']);
$lic=mysqli_real_escape_string($conn,$_POST['lic']);
$lic_info=mysqli_real_escape_string($conn,$_POST['lic_info']);
$no_user_lic=mysqli_real_escape_string($conn,$_POST['no_user_lic']);
$activ_dt=mysqli_real_escape_string($conn,$_POST['activ_dt']);
$procdate=mysqli_real_escape_string($conn,$_POST['procdate']);
$purprice=mysqli_real_escape_string($conn,$_POST['purprice']);
$serial=mysqli_real_escape_string($conn,$_POST['serial']);
$mandt  = mysqli_real_escape_string($conn, $_POST['mandt']);
$lifecycle=mysqli_real_escape_string($conn,$_POST['lifecycle']);
$vendor=mysqli_real_escape_string($conn,$_POST['vendor']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$log_usr = mysqli_real_escape_string($conn,$_POST['log_usr']);


$result = mysqli_query($conn,"SELECT * FROM software_ass WHERE devid='$ass_id'");
        if(mysqli_num_rows($result)>0)
        {
        echo '<br>';
         //include 'item_prev.php';
             include 'software_ass.php';
       exit();
       }
else
{ 
$sql = "INSERT INTO software_ass (devid, devname, serial, devtype, softversion, manuname, category, licence, licinfo, lic_users, activationdate, lifecycle, mandate, prodate, purprice, endlife, curdate, pic, status, recommnd, loguser, vendor, phone)
	VALUES 	('$ass_id','$ass_name','$serial','$ass_typ','$ass_version','$man_name','$ass_cat','$lic','$lic_info','$no_user_lic','$activ_dt','$lifecycle','$mandt','$procdate','$purprice','$expdate',NOW(),'$soft_img_res','$dev_stat','$recomm','$log_usr','$vendor','$phone')";

if ($conn->query($sql) === TRUE) {
 echo "<h6 class='w3-green w3-text-white w3-center'>New record created successfully</h6>";
  echo '<br />';
  include 'software_ass.php';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  
}
}
 ?>