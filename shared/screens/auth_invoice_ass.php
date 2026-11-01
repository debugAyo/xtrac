<?php

$ass_id=$_POST['ass_id'];
$order_no=$_POST['order_no'];
$delvry_date=$_POST['delvry_date'];
$descrp=$_POST['descrp'];
$inv_no=$_POST['inv_no'];
$vendor=$_POST['vendor'];
$phone=$_POST['phone'];
$log_usr=$_POST['log_usr'];

/*$invoice_img_res*/

if (!$ass_id ){
print 'Invoice ID is missing';
exit();
}

 
$uploads='asset_assoc';
if (!file_exists($uploads)) {
mkdir($uploads, 0755);

}

if ( isset( $_FILES['invoice_img'] ) ) {
	
		$source_file = $_FILES['invoice_img']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['invoice_img']['name'];
		$invoice_img_res = strtolower($dest_file);
		
	if (file_exists($invoice_img_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move invoice_img result!!");
			if($_FILES['invoice_img']['error'] == 0) {
			
			}
	
	}
	
}

else {

$invoice_img_res = 'null.pdf';
		}

include '../link/connect.php';


## Remember to insert some protection against MYSQL injections ##

$ass_id=mysqli_real_escape_string($conn,$_POST['ass_id']);
$order_no=mysqli_real_escape_string($conn,$_POST['order_no']);
$delvry_date=mysqli_real_escape_string($conn,$_POST['delvry_date']);
$descrp=mysqli_real_escape_string($conn,$_POST['descrp']);
$inv_no=mysqli_real_escape_string($conn,$_POST['inv_no']);
$vendor=mysqli_real_escape_string($conn,$_POST['vendor']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$log_usr=mysqli_real_escape_string($conn,$_POST['log_usr']);


$result = mysqli_query($conn,"SELECT * FROM invoice_ass WHERE devid='$ass_id'");
        if(mysqli_num_rows($result)>0)
        {
        echo '<br>';
         //include 'item_prev.php';
             include 'invoice_ass.php';
       exit();
       }
else
{ 
$sql = "INSERT INTO invoice_ass (devid, orderno, delvrydate, invoiceno, descript, curdate, pic, loguser, vendor, phone)
	VALUES 	('$ass_id','$order_no','$delvry_date','$inv_no','$descrp',NOW(),'$invoice_img_res','$log_usr','$vendor','$phone')";

if ($conn->query($sql) === TRUE) {
 echo "<h6 class='w3-green w3-text-white w3-center'>New record created successfully</h6>";
  echo '<br />';
  include 'invoice_ass.php';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  
}
}
 ?>