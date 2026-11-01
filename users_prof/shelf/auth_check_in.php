<?Php

if (isset ($_POST['submit'])) {

$tagno=$_POST['tagno'];
$pin=$_POST['pin'];
$chkin_date=$_POST['chkin_date'];
$status=$_POST['status'];
}

 include '../connect.php';

$tagno=mysqli_real_escape_string($conn,$_POST['tagno']);
$pin=mysqli_real_escape_string($conn,$_POST['pin']);
$chkin_date=mysqli_real_escape_string($conn,$_POST['chkin_date']);
$status=mysqli_real_escape_string($conn,$_POST['status']);

$result = mysqli_query($conn, "SELECT * FROM personnel_employee WHERE card_no='$pin'");
 
while($row = mysqli_fetch_array($result)) {
$cal_name = $row['first_name'];
$cal_email = $row['email'];
$class = $row['address'];
} 

$result = mysqli_query($conn, "SELECT * FROM shelf WHERE tag_no='$tagno'");
 
while($row = mysqli_fetch_array($result)) {
$title = $row['title'];
$author = $row['author'];
$locat = $row['location'];
}

 
$sql="UPDATE shelf SET status = '$status' WHERE tag_no='$tagno'";
if ($conn->query($sql) === TRUE) {


 $sql="DELETE FROM checkout WHERE name='$cal_name' AND title='$title'";
if ($conn->query($sql) === TRUE) {
echo 'Information Deleted Updated';
 header('location:../securedpage.php');
 exit();
}

}


 

?>

