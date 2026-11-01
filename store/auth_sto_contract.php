<?php
echo '<font face="arial" size="2">';
$email = $_POST['email']; $pin = $_POST['pin'];
$dev_id = $_POST['dev_id']; $contract = $_POST['contract']; $contractor = $_POST['contractor']; $address = $_POST['address'];  
$phone = $_POST['phone']; $email = $_POST['email']; $supprt = $_POST['supprt'];     


if (!$dev_id || !$contract || !$contractor){
print "Either Device ID, Contract or Contractor's Details is missing";
exit();
}
 

if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {  
 
         //Temporary file name stored on the server 
          $tmpName = $_FILES['image']['tmp_name'];   
            
          //Read the file  
          $fp     = fopen($tmpName, 'r'); 
          $logo = fread($fp, filesize($tmpName)); 
          $logo = addslashes($logo); 
          fclose($fp); 
           
 
         // Create the query and insert 
          // into our database. 
        

 
include 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM contract_ass WHERE devid='$dev_id'");
        if(mysqli_num_rows($result)>0)
        {
        echo '<br>';
         //include 'item_prev.php';
             include 'sto_ass_add.php';
       exit();
       }
else
{    


$sql = "INSERT INTO contract_ass (devid,cont_dsc,company,address,phone,email,support,pic)
VALUES ('$dev_id','$contract','$contractor','$address','$phone','$email','$supprt','$logo')";
$result = mysqli_query($conn, $sql);

if ($result > 0)
{
//include 'item_prev.php';
  include 'sto_ass_add.php';

}
}
}
?>