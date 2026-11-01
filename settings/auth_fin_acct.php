<?php

if (isset ($_POST['submit'])) {

$fin_acct_type=$_POST['fin_acct_type'];
$acct_no=$_POST['acct_no'];


}

include '../link/connect.php';

$query="SELECT * FROM acct_category WHERE acctno='$acct_no'";
$result = mysqli_query($conn,$query) or die(mysqli_error());

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {

echo 'This Account Number already exists';
include 'fin_acct.php';

exit();
}
}



$fin_acct_type=mysqli_real_escape_string($conn,$_POST['fin_acct_type']);
$acct_no=mysqli_real_escape_string($conn,$_POST['acct_no']);

$sql="INSERT INTO acct_category (fin_acctype,acctno) 
		VALUES('$fin_acct_type','$acct_no')";
					

if ($conn->query($sql) === TRUE) {

echo $fin_acct_type. 'Account Successfully Created.';
include 'fin_acct.php';

}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>