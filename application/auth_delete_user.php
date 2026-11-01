<?php

if (isset ($_POST['submit'])) {

$id=$_POST['id'];

}

include '../link/connect.php';

$query="SELECT * FROM user_login WHERE id='$id'";
$result = mysqli_query($conn,$query) or die(mysqli_error());

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {
	
$username = $row['username'];

}

}

$sql="DELETE FROM user_login WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {

echo 'User <b>' . $username . ' </b>Successfully Deleted.';
include '../application/user_man.php';
}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

