<?php

if (isset ($_POST['submit'])) {

$acct_type=$_POST['acct_type'];

}

include '../link/connect.php';

$query="SELECT * FROM acct_priv WHERE acctype='$acct_type'";
$result = mysqli_query($conn,$query) or die(mysqli_error());

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {

echo 'This Account Type already exists';
include 'acct_prvg_levels.php';
exit();
}
}


$acct_type=mysqli_real_escape_string($conn,$_POST['acct_type']);

$sql="INSERT INTO acct_priv (acctype) 
		VALUES('$acct_type')";
					

if ($conn->query($sql) === TRUE) {

echo 'Account Privilege Type Successfully Created.';
include 'acct_prvg_levels.php';

}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>