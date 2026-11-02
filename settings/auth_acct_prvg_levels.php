<?php

if (isset ($_POST['submit'])) {

$acct_type=$_POST['acct_type'];

}

include '../link/connect.php';

$query="SELECT * FROM acct_priv WHERE acctype=?";
$stmt = mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt,'s',$acct_type);
mysqli_stmt_execute($stmt) or die(mysqli_error());
$result = mysqli_stmt_get_result($stmt);

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {

echo 'This Account Type already exists';
include 'acct_prvg_levels.php';
exit();
}
}


$acct_type=$_POST['acct_type'];

$sql="INSERT INTO acct_priv (acctype) 
		VALUES(?)";
					
$stmt = mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($stmt,'s',$acct_type);
if (mysqli_stmt_execute($stmt)) {

echo 'Account Privilege Type Successfully Created.';
include 'acct_prvg_levels.php';

}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>