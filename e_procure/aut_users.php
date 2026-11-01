<?php
echo '<font size=2, face=arial>';
$title = $_POST['title'];$fname = $_POST['fname'];$sex= $_POST['sex'];
$randomfield = $_POST['randomfield'];$dept = $_POST['dept'];$dt_birth = $_POST['dt_birth'];
$phone = $_POST['phone'];$dt_emp = $_POST['dt_emp'];$con_add = $_POST['con_add'];
$st_org = $_POST['st_org'];$grd = $_POST['grd'];$nxkin = $_POST['nxkin'];$nxk_tel = $_POST['nxk_tel'];
$email = $_POST['email'];
if (!$randomfield || !$dept || !$phone || !$email || !$fname)
{
echo 'Important Details Omitted.<br>';
echo 'Staff ID, Department, Phone, E-mail or Name must be have been omitted';
exit;
}

include 'connect.php';
//$conn = mysqli_connect("localhost", "root","");
//if (!$conn)
//{
//echo 'Cannot connect to database.';
//exit;
//}
//mysqli_select_db($conn,"hospital");

if ($dept = 'Engineering') {

$sql = "INSERT INTO engineering_staff (title,fname,sex,staff_id,dept,dt_birth,phone,dt_emp,con_add,st_org,grdlev,nxtkin,email,nxktel)
VALUES ('$title','$fname','$sex','$randomfield','$dept','$dt_birth','$phone','$dt_emp','$con_add','$st_org','$grd','$nxkin','$email','$nxk_tel')";
$result = mysqli_query($conn, $sql);

}
$result = mysqli_query($conn,"SELECT * FROM engineering_staff WHERE staff_id='$_POST[randomfield]'");
while ($row = mysqli_fetch_array($result))
{ 
//echo $myrow["fname"];
printf ("%s [%s]\n",$row["fname"],$row["staff_id"]);
exit();
}

if ($dept = 'Admin') {

$sql = "INSERT INTO admin_staff (title,fname,sex,staff_id,dept,dt_birth,phone,dt_emp,con_add,st_org,grdlev,nxtkin,email,nxktel)
VALUES ('$title','$fname','$sex','$randomfield','$dept','$dt_birth','$phone','$dt_emp','$con_add','$st_org','$grd','$nxkin','$email','$nxk_tel')";
$result = mysqli_query($conn, $sql);
exit();
}

$result = mysqli_query($conn,"SELECT * FROM admin_staff WHERE staff_id='$_POST[randomfield]'");
while ($row = mysqli_fetch_array($result))
{ 
//echo $myrow["fname"];
printf ("%s [%s]\n",$row["fname"],$row["staff_id"]);
exit();
}
if ($dept = 'Account') {

$sql = "INSERT INTO account_staff (title,fname,sex,staff_id,dept,dt_birth,phone,dt_emp,con_add,st_org,grdlev,nxtkin,email,nxktel)
VALUES ('$title','$fname','$sex','$randomfield','$dept','$dt_birth','$phone','$dt_emp','$con_add','$st_org','$grd','$nxkin','$email','nxk_tel')";
$result = mysqli_query($conn, $sql);
exit();
}
$result = mysqli_query($conn,"SELECT * FROM account_staff WHERE staff_id='$_POST[randomfield]'");
while ($row = mysqli_fetch_array($result))
{ 
//echo $myrow["fname"];
printf ("%s [%s]\n",$row["fname"],$row["staff_id"]);
exit();
}
if ($dept = 'Clinical') {

$sql = "INSERT INTO clinical_staff (title,fname,sex,staff_id,dept,dt_birth,phone,dt_emp,con_add,st_org,grdlev,nxtkin,email,nxktel)
VALUES ('$title','$fname','$sex','$randomfield','$dept','$dt_birth','$phone','$dt_emp','$con_add','$st_org','$grd','$nxkin','$email','nxk_tel')";
$result = mysqli_query($conn, $sql);
exit();
}
$result = mysqli_query($conn,"SELECT * FROM clinical_staff WHERE staff_id='$_POST[randomfield]'");
while ($row = mysqli_fetch_array($result))
{ 
//echo $myrow["fname"];
printf ("%s [%s]\n",$row["fname"],$row["staff_id"]);
exit();
}

if ($dept = 'Radiology') {

$sql = "INSERT INTO radiology_staff (title,fname,sex,staff_id,dept,dt_birth,phone,dt_emp,con_add,st_org,grdlev,nxtkin,email,nxktel)
VALUES ('$title','$fname','$sex','$randomfield','$dept','$dt_birth','$phone','$dt_emp','$con_add','$st_org','$grd','$nxkin','$email','nxk_tel')";
$result = mysqli_query($conn, $sql);
exit();
}

$result = mysqli_query($conn,"SELECT * FROM radiology_staff WHERE staff_id='$_POST[randomfield]'");
while ($row = mysqli_fetch_array($result))
{ 
//echo $myrow["fname"];
printf ("%s [%s]\n",$row["fname"],$row["staff_id"]);
exit();
}

if ($dept = 'Pharmaceutical') {

$sql = "INSERT INTO pharmaceutical_staff (title,fname,sex,staff_id,dept,dt_birth,phone,dt_emp,con_add,st_org,grdlev,nxtkin,email,nxktel)
VALUES ('$title','$fname','$sex','$randomfield','$dept','$dt_birth','$phone','$dt_emp','$con_add','$st_org','$grd','$nxkin','$email','nxk_tel')";
$result = mysqli_query($conn, $sql);
exit();
}
$result = mysqli_query($conn,"SELECT * FROM pharmaceutical_staff WHERE staff_id='$_POST[randomfield]'");
while ($row = mysqli_fetch_array($result))
{ 
//echo $myrow["fname"];
printf ("%s [%s]\n",$row["fname"],$row["staff_id"]);
exit();
}


if ($dept = 'Laboratory') {

$sql = "INSERT INTO laboratory_staff (title,fname,sex,staff_id,dept,dt_birth,phone,dt_emp,con_add,st_org,grdlev,nxtkin,email,nxktel)
VALUES ('$title','$fname','$sex','$randomfield','$dept','$dt_birth','$phone','$dt_emp','$con_add','$st_org','$grd','$nxkin','$email','nxk_tel')";
$result = mysqli_query($conn, $sql);
exit();
}

$result = mysqli_query($conn,"SELECT * FROM laboratory_staff WHERE staff_id='$_POST[randomfield]'");
while ($row = mysqli_fetch_array($result))
{ 
//echo $myrow["fname"];
printf ("%s [%s]\n",$row["fname"],$row["staff_id"]);
exit();
}

if ($dept = 'ICT') {

$sql = "INSERT INTO ict_staff (title,fname,sex,staff_id,dept,dt_birth,phone,dt_emp,con_add,st_org,grdlev,nxtkin,email,nxktel)
VALUES ('$title','$fname','$sex','$randomfield','$dept','$dt_birth','$phone','$dt_emp','$con_add','$st_org','$grd','$nxkin','$email','nxk_tel')";
$result = mysqli_query($conn, $sql);
exit();
}

$result = mysqli_query($conn,"SELECT * FROM ict_staff WHERE staff_id='$_POST[randomfield]'");
while ($row = mysqli_fetch_array($result))
{ 
//echo $myrow["fname"];
printf ("%s [%s]\n",$row["fname"],$row["staff_id"]);
exit();
}
if ($dept = 'Records') {

$sql = "INSERT INTO records_staff (title,fname,sex,staff_id,dept,dt_birth,phone,dt_emp,con_add,st_org,grdlev,nxtkin,email,nxktel)
VALUES ('$title','$fname','$sex','$randomfield','$dept','$dt_birth','$phone','$dt_emp','$con_add','$st_org','$grd','$nxkin','$email','nxk_tel')";
$result = mysqli_query($conn, $sql);
exit();
}
$result = mysqli_query($conn,"SELECT * FROM records_staff WHERE staff_id='$_POST[randomfield]'");
while ($row = mysqli_fetch_array($result))
{ 
//echo $myrow["fname"];
printf ("%s [%s]\n",$row["fname"],$row["staff_id"]);
exit();
}

//$sql="SELECT fname,staff_id FROM staff_details ORDER BY fname";
//$result=mysqli_query($conn,$sql);

//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
//printf ("%s [%s]\n",$row["fname"],$row["staff_id"]);

//$row=mysqli_fetch_array($result,MYSQLI_NUM);
//printf ("%s (%s)\n",$row[0],$row[1]);



//while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
//echo $row["fname"];

//}

//mysqli_close($conn);

//$result = mysqli_query($conn,"SELECT * FROM staff_details WHERE staff_id='$_POST[randomfield]'");
//while ($row = mysqli_fetch_array($result))
//{ 
//echo $myrow["fname"];
//printf ("%s [%s]\n",$row["fname"],$row["staff_id"]);
//}

?>