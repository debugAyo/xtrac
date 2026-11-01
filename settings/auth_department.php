<?php

if (isset ($_POST['submit'])) {

$dept=$_POST['dept'];

}

include '../link/connect.php';

$query="SELECT * FROM department WHERE dept='$dept'";
$result = mysqli_query($conn,$query) or die(mysqli_error());

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {

echo 'This department already exists';
include 'department.php';

exit();
}
}


$dept=mysqli_real_escape_string($conn,$_POST['dept']);

$sql="INSERT INTO department (dept) 
		VALUES('$dept')";
					

if ($conn->query($sql) === TRUE) {

echo 'Department Successfully Created.';
include 'department.php';

}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>