
<?php

if (isset($_POST['submit'])) {


$grp_id=$_POST['grp_id'];
$trng_titl=$_POST['trng_titl'];
$trng_prov=$_POST['trng_prov'];
$start_dt=$_POST['start_dt'];
$end_dt=$_POST['end_dt'];
$trng_venue=$_POST['trng_venue'];
$trng_address=$_POST['trng_address'];
$trng_obj=$_POST['trng_obj'];
$spec_req=$_POST['spec_req'];
$declaration=$_POST['declaration'];
$signatureData=$_POST['signatureData'];

/*image files*/


}

$regcode=(rand(100000, 999999) );
		
include '../link/connect.php';	


$grp_id=mysqli_real_escape_string($conn,$_POST['grp_id']);
$trng_titl=mysqli_real_escape_string($conn,$_POST['trng_titl']);
$trng_prov=mysqli_real_escape_string($conn,$_POST['trng_prov']);
$start_dt=mysqli_real_escape_string($conn,$_POST['start_dt']);
$end_dt=mysqli_real_escape_string($conn,$_POST['end_dt']);
$trng_venue=mysqli_real_escape_string($conn,$_POST['trng_venue']);
$trng_address=mysqli_real_escape_string($conn,$_POST['trng_address']);
$trng_obj=mysqli_real_escape_string($conn,$_POST['trng_obj']);
$spec_req=mysqli_real_escape_string($conn,$_POST['spec_req']);
$declaration=mysqli_real_escape_string($conn,$_POST['declaration']);
$signatureData=mysqli_real_escape_string($conn,$_POST['signatureData']);
	

	// SQL query to insert into database
    $sql = "INSERT INTO group_training (regno,grpid,trngtitl,trngprov,startdt,enddt,trngvenue,trngaddress,trngobj,specreq,declaration,signature,date_post)
						VALUES ('$regcode','$grp_id','$trng_titl','$trng_prov','$start_dt','$end_dt','$trng_venue','$trng_address','$trng_obj','$spec_req','$declaration','$signatureData',NOW())";

    if ($conn->query($sql) === TRUE) {
        /*echo "Files inserted into database successfully.";*/
    } else {
        echo "Error: " . $conn->error;
    }

    // Close database connection
    $conn->close();


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Data Result</title>
</head>
<body>
<div class="w3-row-padding">
<div class="w3-threequarter w3-white">
    <h3 class="w3-text-green w3-hover-text-red">Group Training Scheme</h3>


<?php
include '../link/connect.php';
    // Display recently inserted data
	
	$sql = "SELECT group_training.*,group_reg.regno,group_reg.groupname,group_reg.grouplead,group_reg.groupleadphone FROM group_training INNER JOIN group_reg ON group_training.grpid = group_reg.regno WHERE group_training.grpid='$grp_id' ORDER BY group_training.id DESC LIMIT 1"; // Get the last inserted row
    
	$result = $conn->query($sql);

    if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		echo "<table width='100%'class='w3-padding-large w3-border'>
		
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Reg No.</th><td style='font-size:12px; width:auto'>" . $row["grpid"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Group Name</th><td style='font-size:12px; width:auto'>" . $row["groupname"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Leader</th><td style='font-size:12px; width:auto'>" . $row["grouplead"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Leader's Phone No.</th><td style='font-size:12px; width:auto'>" . $row["groupleadphone"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Training Theme</th><td style='font-size:12px; width:auto'>" . $row["trngtitl"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Training Provider</th><td style='font-size:12px; width:auto'>" . $row["trngprov"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Dates</th><td style='font-size:12px; width:auto'>" . $row["startdt"] . " to " . $row["enddt"] . "</td></tr>
    	<tr><th class='w3-left' style='font-size:12px; width:auto'>Venue</th><td style='font-size:12px; width:auto'>" . $row["trngvenue"] . "</td></tr>
		<tr><td colspan='2'><img src='img_custom.php?id=". $row["id"] . "' style='width:400px; height:200px; padding:6px;float:center'></td></tr>		
		</p></table>";
       

	   
    } else {
        echo "No data found";
    }
?>


</div>
<div class="w3-quarter"></div>
</div>
<?php


?>
