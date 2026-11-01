<?php
echo '<font face="arial" size="2">';
$email = $_POST['email']; $pin = $_POST['pin'];
$dev_id = $_POST['dev_id']; $vendor = $_POST['vendor']; $sup_dt = $_POST['sup_dt']; $orderno = $_POST['orderno'];  
$inv_dsc = $_POST['inv_dsc'];  


if (!$dev_id || !$orderno || !$vendor){
print 'Either Device ID, Order Number or Vendor is missing';
exit();
}
 

if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {  
 
          //Temporary file name stored on the server 
          $tmpName = $_FILES['image']['tmp_name'];   
            
         //  Read the file  
          $fp     = fopen($tmpName, 'r'); 
          $logo = fread($fp, filesize($tmpName)); 
          $logo = addslashes($logo); 
          fclose($fp); 
           
 
         // Create the query and insert 
          // into our database. 
        
 
include 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM invoice_ass WHERE devid='$dev_id'");
        if(mysqli_num_rows($result)>0)
        {
        echo '<br>';
         //include 'item_prev.php';
             include 'sto_ass_add.php';
       exit();
       }
else
{ 

$sql = "INSERT INTO invoice_ass (devid,vendor,deldate,orderno,invoice,pic)
VALUES ('$dev_id','$vendor','$sup_dt','$orderno','$inv_dsc','$logo')";
$result = mysqli_query($conn, $sql);

if ($result > 0)
{
//include 'item_prev.php';
  include 'sto_ass_add.php';

}
}
}
?>