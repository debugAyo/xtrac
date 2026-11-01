<?php
echo '<font face="arial" size="2">';
$email = $_POST['email']; $pin = $_POST['pin'];
$dev_id = $_POST['dev_id']; $dev_type = $_POST['dev_type']; $prt_name = $_POST['prt_name']; $maname = $_POST['maname'];  
$model = $_POST['model']; $serial = $_POST['serial']; 

if (!$dev_id || !$prt_name || !$serial){
print 'Either Device Name, ID or Serial Number is missing';
exit();
}
 
/* 
if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {  
 
          Temporary file name stored on the server 
          $tmpName = $_FILES['image']['tmp_name'];   
            
           Read the file  
          $fp     = fopen($tmpName, 'r'); 
          $logo = fread($fp, filesize($tmpName)); 
          $logo = addslashes($logo); 
          fclose($fp); 
           
 
          Create the query and insert 
           into our database. 
        
 */
include 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM parts_ass WHERE devid='$dev_id'");
        if(mysqli_num_rows($result)>0)
        {
        echo '<br>';
         //include 'item_prev.php';
             include 'sto_ass_add.php';
       exit();
       }
else
{ 

$sql = "INSERT INTO parts_ass (devid,devtype,partname,manuname,model,serial)
VALUES ('$dev_id','$dev_type','$prt_name','$maname','$model','$serial')";
$result = mysqli_query($conn, $sql);

if ($result > 0)
{
//include 'item_prev.php';
  include 'sto_ass_add.php';


}
}
?>