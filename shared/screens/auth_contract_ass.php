<?php

$ass_id=$_POST['ass_id'];
$vendreg_no=$_POST['vendreg_no'];
$delvry_date=$_POST['delvry_date'];
$cont_title=$_POST['cont_title'];
$descrp=$_POST['descrp'];
$supportsrv=$_POST['supportsrv'];
$vendor=$_POST['vendor'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$log_usr=$_POST['log_usr'];

/*$contract_img_res*/

if (!$ass_id ){
print 'Contract ID is missing';
exit();
}

 
$uploads='asset_assoc';
if (!file_exists($uploads)) {
mkdir($uploads, 0755);

}

if ( isset( $_FILES['contract_img'] ) ) {
	
		$source_file = $_FILES['contract_img']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['contract_img']['name'];
		$contract_img_res = strtolower($dest_file);
		
	if (file_exists($contract_img_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move contract_img result!!");
			if($_FILES['contract_img']['error'] == 0) {
			
			}
	
	}
	
}

else {

$contract_img_res = 'null.pdf';
		}

include '../link/connect.php';


## Remember to insert some protection against MYSQL injections ##

$ass_id=mysqli_real_escape_string($conn,$_POST['ass_id']);
$vendreg_no=mysqli_real_escape_string($conn,$_POST['vendreg_no']);
$delvry_date=mysqli_real_escape_string($conn,$_POST['delvry_date']);
$cont_title=mysqli_real_escape_string($conn,$_POST['cont_title']);
$descrp=mysqli_real_escape_string($conn,$_POST['descrp']);
$supportsrv=mysqli_real_escape_string($conn,$_POST['supportsrv']);
$vendor=mysqli_real_escape_string($conn,$_POST['vendor']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$log_usr=mysqli_real_escape_string($conn,$_POST['log_usr']);


$result = mysqli_query($conn,"SELECT * FROM contract_ass WHERE devid='$ass_id'");
        if(mysqli_num_rows($result)>0)
        {
        echo '<br>';
         //include 'item_prev.php';
             include 'contract_ass.php';
       exit();
       }
else
{ 
$sql = "INSERT INTO contract_ass (devid, vendoregno, delvrydate, contractitle, descript, sla, curdate, pic, loguser, vendor, phone, address, email)
	VALUES 	('$ass_id','$vendreg_no','$delvry_date','$cont_title','$descrp','$supportsrv',NOW(),'$contract_img_res','$log_usr','$vendor','$phone','$address','$email')";

if ($conn->query($sql) === TRUE) {
 echo "<h6 class='w3-green w3-text-white w3-center'>New record created successfully</h6>";
  echo '<br />';
  include 'contract_ass.php';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  
}
}
 ?>