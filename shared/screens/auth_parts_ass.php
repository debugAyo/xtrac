<?php
$ass_id=$_POST['ass_id'];
$ass_name=$_POST['ass_name'];
$ass_typ=$_POST['ass_typ'];
$ass_mode=$_POST['ass_mode'];
$man_name=$_POST['man_name'];
$ass_cat=$_POST['ass_cat'];
$batchno=$_POST['batchno'];
$descrp=$_POST['descrp'];
$procdate=$_POST['procdate'];
$purprice=$_POST['purprice'];
$serial=$_POST['serial'];
$mandt=$_POST['mandt'];
$lifecycle=$_POST['lifecycle'];
$vendor=$_POST['vendor'];
$phone=$_POST['phone'];
$log_usr=$_POST['log_usr'];

/*$part_img_res*/

if (!$ass_id || !$serial){
print 'Either Part ID or Serial Number is missing';
exit();
}

 
$uploads='asset_assoc';
if (!file_exists($uploads)) {
mkdir($uploads, 0755);

}

if ( isset( $_FILES['part_img'] ) ) {
	
		$source_file = $_FILES['part_img']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['part_img']['name'];
		$part_img_res = strtolower($dest_file);
		
	if (file_exists($part_img_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move part_img result!!");
			if($_FILES['part_img']['error'] == 0) {
			
			}
	
	}
	
}

else {

$part_img_res = 'null.pdf';
		}
$expdate = strtotime ($lifecycle , strtotime ($procdate) );
$expdate = date ('Y-m-j' , $expdate );

$curdate = date("Y-m-d");
 
//Calculate the difference.

$diff = strtotime (   '-3 month' , strtotime ( $expdate ) ) ;
 
$diff = date ( 'Y-m-j' , $diff );


if ($diff <= $curdate) {
$dev_stat = 'Obsolete';
$recomm = 'This Part or Accessory has reached its End of Life';

}
 
if ($curdate <=  $diff ) {
$dev_stat = 'Active';
$recomm = 'This Part or Accessory is still Active';

 }       


include '../link/connect.php';


## Remember to insert some protection against MYSQL injections ##

$ass_id=mysqli_real_escape_string($conn,$_POST['ass_id']);
$ass_name=mysqli_real_escape_string($conn,$_POST['ass_name']);
$ass_mode=mysqli_real_escape_string($conn,$_POST['ass_mode']);
$ass_typ=mysqli_real_escape_string($conn,$_POST['ass_typ']);
$man_name=mysqli_real_escape_string($conn,$_POST['man_name']);
$ass_cat=mysqli_real_escape_string($conn,$_POST['ass_cat']);
$batchno=mysqli_real_escape_string($conn,$_POST['batchno']);
$descrp=mysqli_real_escape_string($conn,$_POST['descrp']);
$procdate=mysqli_real_escape_string($conn,$_POST['procdate']);
$purprice=mysqli_real_escape_string($conn,$_POST['purprice']);
$serial=mysqli_real_escape_string($conn,$_POST['serial']);
$mandt  = mysqli_real_escape_string($conn,$_POST['mandt']);
$lifecycle=mysqli_real_escape_string($conn,$_POST['lifecycle']);
$vendor=mysqli_real_escape_string($conn,$_POST['vendor']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$log_usr = mysqli_real_escape_string($conn,$_POST['log_usr']);


$result = mysqli_query($conn,"SELECT * FROM parts_ass WHERE devid='$ass_id'");
        if(mysqli_num_rows($result)>0)
        {
        echo '<br>';
         //include 'item_prev.php';
             include 'parts_ass.php';
       exit();
       }
else
{ 
$sql = "INSERT INTO parts_ass (devid, devname, serial, devtype, assmode, manuname, category, batchno, descript, lifecycle, mandate, prodate, purprice, endlife, curdate, pic, status, recommnd, loguser, vendor, phone)
	VALUES 	('$ass_id','$ass_name','$serial','$ass_typ','$ass_mode','$man_name','$ass_cat','$batchno','$descrp','$lifecycle','$mandt','$procdate','$purprice','$expdate',NOW(),'$part_img_res','$dev_stat','$recomm','$log_usr','$vendor','$phone')";

if ($conn->query($sql) === TRUE) {
 echo "<h6 class='w3-green w3-text-white w3-center'>New record created successfully</h6>";
  echo '<br />';
  include 'parts_ass.php';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  
}
}
 ?>