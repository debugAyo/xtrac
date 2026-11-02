<?php

if (isset ($_POST['submit'])) {

$dept=$_POST['dept'];

}

include '../link/connect.php';

$query="SELECT * FROM department WHERE dept=?";
$stmt = mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt,'s',$dept);
mysqli_stmt_execute($stmt) or die(mysqli_error());
$result = mysqli_stmt_get_result($stmt);

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {

echo 'This department already exists';
include 'department.php';

exit();
}
}


$dept=$_POST['dept'];

$sql="INSERT INTO department (dept) 
		VALUES(?)";
					
$stmt = mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($stmt,'s',$dept);
if (mysqli_stmt_execute($stmt)) {

echo 'Department Successfully Created.';
include 'department.php';

}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>