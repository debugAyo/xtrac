<?php

if (isset ($_POST['submit'])) {

$fin_acct_type=$_POST['fin_acct_type'];
$acct_no=$_POST['acct_no'];


}

include '../link/connect.php';

$query="SELECT * FROM acct_category WHERE acctno=?";
$stmt = mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt,'s',$acct_no);
mysqli_stmt_execute($stmt) or die(mysqli_error());
$result = mysqli_stmt_get_result($stmt);

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {

echo 'This Account Number already exists';
include 'fin_acct.php';

exit();
}
}



$fin_acct_type=$_POST['fin_acct_type'];
$acct_no=$_POST['acct_no'];

$sql="INSERT INTO acct_category (fin_acctype,acctno) 
		VALUES(?,?)";
					
$stmt = mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($stmt,'ss',$fin_acct_type,$acct_no);
if (mysqli_stmt_execute($stmt)) {

echo $fin_acct_type. 'Account Successfully Created.';
include 'fin_acct.php';

}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>