<?Php

if (isset ($_POST['submit'])) {

$tagno=$_POST['tagno'];
$batch=$_POST['batch'];
$title=$_POST['title'];
$author=$_POST['author'];
$categ=$_POST['categ'];
$locat=$_POST['locat'];
$status=$_POST['status'];
$prodate=$_POST['prodate'];
$cost=$_POST['cost'];
$isbn=$_POST['isbn'];
}



############################################################################################
/*	
if (isset($_FILES['pic']) && $_FILES['pic']['size'] > 0) { 

$remote_file_name  

// Temporary file name stored on the server 
          $tmpName = $_FILES['img_one']['tmp_name']; 
                         
          // Read the file  
          $fp     = fopen($tmpName, 'r'); 
          $pix_one = fread($fp, filesize($tmpName)); 
          $pix_one = addslashes($pix_one); 
          fclose($fp); 
}

if (isset($_FILES['img_two']) && $_FILES['img_two']['size'] > 0) {  

// Temporary file name stored on the server 
          $tmpName = $_FILES['img_two']['tmp_name'];   
            
          // Read the file  
          $fp     = fopen($tmpName, 'r'); 
          $pix_two = fread($fp, filesize($tmpName)); 
          $pix_two = addslashes($pix_two); 
          fclose($fp); 
}
*/

##################################################################################################

//if ((isset($_POST["submitted_form"])) && ($_POST["submitted_form"] == "image_upload_form")) {

/*This script is the active and running one on this image upload file*/
	
	if (isset($_FILES['pic']) && $_FILES['pic']['size'] > 0) { 
	
	// file needs to be jpg,gif,bmp,x-png and 4 MB max
	if (($_FILES["pic"]["type"] == "image/jpeg" || $_FILES["pic"]["type"] == "image/pjpeg" || $_FILES["pic"]["type"] == "image/gif" || $_FILES["pic"]["type"] == "image/x-png") && ($_FILES["pic"]["size"] < 4000000))
	{
		
  
		// some settings
		$max_upload_width = 2592;
		$max_upload_height = 1944;
		  
		// if user chosed properly then scale down the image according to user preferances
		if(isset($_REQUEST['max_width_box']) and $_REQUEST['max_width_box']!='' and $_REQUEST['max_width_box']<=$max_upload_width){
			$max_upload_width = $_REQUEST['max_width_box'];
		}    
		if(isset($_REQUEST['max_height_box']) and $_REQUEST['max_height_box']!='' and $_REQUEST['max_height_box']<=$max_upload_height){
			$max_upload_height = $_REQUEST['max_height_box'];
		}	

		
		// if uploaded image was JPG/JPEG
		if($_FILES["pic"]["type"] == "image/jpeg" || $_FILES["pic"]["type"] == "image/pjpeg"){	
			$image_source = imagecreatefromjpeg($_FILES["pic"]["tmp_name"]);
		}		
		// if uploaded image was GIF
		if($_FILES["pic"]["type"] == "image/gif"){	
			$image_source = imagecreatefromgif($_FILES["pic"]["tmp_name"]);
		}	
		// BMP doesn't seem to be supported so remove it form above image type test (reject bmps)	
		// if uploaded image was BMP
		if($_FILES["pic"]["type"] == "image/bmp"){	
			$image_source = imagecreatefromwbmp($_FILES["pic"]["tmp_name"]);
		}			
		// if uploaded image was PNG
		if($_FILES["pic"]["type"] == "image/x-png"){
			$image_source = imagecreatefrompng($_FILES["pic"]["tmp_name"]);
		}
		

		$remote_file = "../../photo/".$_FILES["pic"]["name"];
		imagejpeg($image_source,$remote_file,100);
		chmod($remote_file,0644);
	
	$pic_file_name ="../photo/". $_FILES["pic"]["name"];
	$pic_name = strtolower($pic_file_name);
	
	################################################################################################################
	/*
	if (isset($_FILES['img_two']) && $_FILES['img_two']['size'] > 0) { 
	
	// file needs to be jpg,gif,bmp,x-png and 4 MB max
	if (($_FILES["img_two"]["type"] == "image/jpeg" || $_FILES["img_two"]["type"] == "image/pjpeg" || $_FILES["img_two"]["type"] == "image/gif" || $_FILES["img_two"]["type"] == "image/x-png") && ($_FILES["img_two"]["size"] < 4000000))
	{
		
  
		// some settings
		$max_upload_width = 2592;
		$max_upload_height = 1944;
		  
		// if user chosed properly then scale down the image according to user preferances
		if(isset($_REQUEST['max_width_box']) and $_REQUEST['max_width_box']!='' and $_REQUEST['max_width_box']<=$max_upload_width){
			$max_upload_width = $_REQUEST['max_width_box'];
		}    
		if(isset($_REQUEST['max_height_box']) and $_REQUEST['max_height_box']!='' and $_REQUEST['max_height_box']<=$max_upload_height){
			$max_upload_height = $_REQUEST['max_height_box'];
		}	

		
		// if uploaded image was JPG/JPEG
		if($_FILES["img_two"]["type"] == "image/jpeg" || $_FILES["img_two"]["type"] == "image/pjpeg"){	
			$image_source = imagecreatefromjpeg($_FILES["img_two"]["tmp_name"]);
		}		
		// if uploaded image was GIF
		if($_FILES["img_two"]["type"] == "image/gif"){	
			$image_source = imagecreatefromgif($_FILES["img_two"]["tmp_name"]);
		}	
		// BMP doesn't seem to be supported so remove it form above image type test (reject bmps)	
		// if uploaded image was BMP
		if($_FILES["img_two"]["type"] == "image/bmp"){	
			$image_source = imagecreatefromwbmp($_FILES["img_two"]["tmp_name"]);
		}			
		// if uploaded image was PNG
		if($_FILES["img_two"]["type"] == "image/x-png"){
			$image_source = imagecreatefrompng($_FILES["img_two"]["tmp_name"]);
		}
		

		$remote_file = "photo/".$_FILES["img_two"]["name"];
		imagejpeg($image_source,$remote_file,100);
		chmod($remote_file,0644);
	
	$img_two_file_name ="photo/". $_FILES["img_two"]["name"];
	$img_two_name = strtolower($img_two_file_name);
	*/
##############################################################################################	
	
}

	} 

  include '../connect.php';
   
   

$query="SELECT * FROM shelf WHERE tag_no='$tagno'";
$result = mysqli_query($conn,$query) or die(mysqli_error());

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {

include '../../application/dual_attempt_apply.php';

exit();
}
}
else {

$date = date("Y-m-d"); 

include '../connect.php';

$tagno=mysqli_real_escape_string($conn,$_POST['tagno']);
$batch=mysqli_real_escape_string($conn,$_POST['batch']);
$title=mysqli_real_escape_string($conn,$_POST['title']);
$author=mysqli_real_escape_string($conn,$_POST['author']);
$categ=mysqli_real_escape_string($conn,$_POST['categ']);
$locat=mysqli_real_escape_string($conn,$_POST['locat']);
$status=mysqli_real_escape_string($conn,$_POST['status']);
$prodate=mysqli_real_escape_string($conn,$_POST['prodate']);
$cost=mysqli_real_escape_string($conn,$_POST['cost']);
$isbn=mysqli_real_escape_string($conn,$_POST['isbn']);



$sql="INSERT INTO shelf (tag_no,batchno,title,author,category,location,pic,status,curdate,proc_date,price,isbn) 
		VALUES('$tagno','$batch','$title','$author','$categ','$locat','$pic_name','$status','$date','$prodate','$cost','$isbn')";
					

if ($conn->query($sql) === TRUE) {

//echo 'Your Information Successfully Inserted';
  //include 'success_apply.php';
  header('location:../securedpage.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>

