<?php

$dev_id = $_POST['dev_id']; 

if (!$dev_id){
print 'Device ID is missing';
exit();
}
 

include '../link/connect.php';
$sql = "SELECT * FROM additem WHERE devid='$dev_id'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
        {
include 'auth_delete_info.php';
exit();
       }

$sql = "DELETE FROM additem WHERE devid='$dev_id'";

if ($conn->query($sql) === TRUE) {

include 'auth_delinfo_suc.php';
   
} else {
    echo "Error deleting record: " . $conn->error;
    
}

//$conn->close();
?>



