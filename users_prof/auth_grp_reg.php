
<?php

if (isset($_POST['submit'])) {

$grp_name=$_POST['grp_name'];
$grp_lead=$_POST['grp_lead'];
$grp_lead_phone=$_POST['grp_lead_phone'];
$grp_exco=$_POST['grp_exco'];
$grp_desc=$_POST['grp_desc'];
$grp_type=$_POST['grp_type'];
$grp_purp=$_POST['grp_purp'];
$grp_size=$_POST['grp_size'];
$age_range=$_POST['age_range'];
$male_gender=$_POST['male_gender'];
$fmale_gender=$_POST['fmale_gender'];
$local=$_POST['local'];
$region=$_POST['region'];
$nation=$_POST['nation'];
$act_descp=$_POST['act_descp'];
$grp_obj=$_POST['grp_obj'];
$comm_opt=$_POST['comm_opt'];
$add_info=$_POST['add_info'];


}

$uploads='groupreg';
if (!file_exists($uploads)) {
mkdir($uploads, 0755);

}

if ( isset( $_FILES['lead_pass'] ) ) {
	
		$source_file = $_FILES['lead_pass']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['lead_pass']['name'];
		$lead_pass_res = strtolower($dest_file);
		
	if (file_exists($lead_pass_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move lead_pass result!!");
			if($_FILES['lead_pass']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$lead_pass_res = 'null.pdf';
		}


if ( isset( $_FILES['exco_pass'] ) ) {
	
		$source_file = $_FILES['exco_pass']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['exco_pass']['name'];
		$exco_pass_res = strtolower($dest_file);
		
		
	if (file_exists($exco_pass_res)) {
			//print "The file name already exists!!";
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move pass result!!");
			if($_FILES['exco_pass']['error'] == 0) {
			
			}
	
	}
	
}

else {

$exco_pass_res = 'null.pdf';

	}
// Function to generate six-digit random number
function generateRandomNo() {
    return rand(100000, 999999); // Generates a random number between 100000 and 999999

$regcode = generateRandomNo();
		
include '../link/connect.php';
	
	$grp_name=$conn->real_escape_string($_POST['grp_name']);
	$grp_lead=$conn->real_escape_string($_POST['grp_lead']);
	$grp_lead_phone=$conn->real_escape_string($_POST['grp_lead_phone']);
	$grp_exco=$conn->real_escape_string($_POST['grp_exco']);
	$grp_desc=$conn->real_escape_string($_POST['grp_desc']);
	$grp_type=$conn->real_escape_string($_POST['grp_type']);
	$grp_purp=$conn->real_escape_string($_POST['grp_purp']);
	$grp_size=$conn->real_escape_string($_POST['grp_size']);
	$age_range=$conn->real_escape_string($_POST['age_range']);
	$male_gender=$conn->real_escape_string($_POST['male_gender']);
	$fmale_gender=$conn->real_escape_string($_POST['fmale_gender']);
	$local=$conn->real_escape_string($_POST['local']);
	$region=$conn->real_escape_string($_POST['region']);
	$nation=$conn->real_escape_string($_POST['nation']);
	$act_descp=$conn->real_escape_string($_POST['act_descp']);
	$grp_obj=$conn->real_escape_string($_POST['grp_obj']);
	$comm_opt=$conn->real_escape_string($_POST['comm_opt']);
	$add_info=$conn->real_escape_string($_POST['add_info']);
	
    /*$fileContentEsc = $conn->real_escape_string($fileContent);
    $imageContentEsc = $conn->real_escape_string($imageContent);*/
	
	// SQL query to insert into database
    $sql = "INSERT INTO group_reg (regno,groupname,grouplead,groupleadphone,groupexco,groupdescrptn,grouptype,grouppurp,groupsize,agerange,malegender,fmalegender,local,region,nation,actdescrptn,groupobj,commoption,addinfo,leadpassport,excopassport) 
					   VALUES ('$regcode','$grp_name','$grp_lead','$grp_lead_phone','$grp_exco','$grp_desc','$grp_type','$grp_purp','$grp_size','$age_range','$male_gender','$fmale_gender','$local','$region','$nation','$act_descp','$grp_obj','$comm_opt','$add_info','$lead_pass_res','$exco_pass_res')";

    if ($conn->query($sql) === TRUE) {
        echo "Files inserted into database successfully.";
    } else {
        echo "Error: " . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Data Result</title>
</head>
<body>
<div class="w3-row-padding">
<div class="w3-threequarter w3-white">
    <h3 class="w3-text-green w3-hover-text-red">Group Registration</h3>


<?php
include '../link/connect.php';
    // Display recently inserted data
    $sql = "SELECT * FROM group_reg ORDER BY id DESC LIMIT 1"; // Get the last inserted row
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		echo "<table width='100%'class='w3-padding-large w3-border'>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Reg No.</th><td style='font-size:12px; width:auto'>" . $row["regno"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Group Name</th><td style='font-size:12px; width:auto'>" . $row["groupname"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Leader</th><td style='font-size:12px; width:auto'>" . $row["grouplead"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Leader's No.</th><td style='font-size:12px; width:auto'>" . $row["groupleadphone"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Executives</th><td style='font-size:12px; width:auto'>" . $row["groupexco"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Description</th><td style='font-size:12px; width:auto'>" . $row["groupdescrptn"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Group Type</th><td style='font-size:12px; width:auto'>" . $row["grouptype"] . "</td></tr>
		
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Group Purpose</th><td style='font-size:12px; width:auto'>" . $row["grouppurp"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Group Size</th><td style='font-size:12px; width:auto'>" . $row["groupsize"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Age Range</th><td style='font-size:12px; width:auto'>" . $row["agerange"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Male</th><td style='font-size:12px; width:auto'>" . $row["malegender"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Female</th><td style='font-size:12px; width:auto'>" . $row["fmalegender"] . "</td></tr>
		
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Local</th><td style='font-size:12px; width:auto'>" . $row["local"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Region</th><td style='font-size:12px; width:auto'>" . $row["region"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Nation</th><td style='font-size:12px; width:auto'>" . $row["nation"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Activities</th><td style='font-size:12px; width:auto'>" . $row["actdescrptn"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Objectives</th><td style='font-size:12px; width:auto'>" . $row["groupobj"] . "</td></tr>
		
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Communications</th><td style='font-size:12px; width:auto'>" . $row["commoption"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Other Information</th><td style='font-size:12px; width:auto'>" . $row["addinfo"] . "</td></tr>
		
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Lead Passport</th><td><img src=". $row["leadpassport"] . " style='width:200px; heigh:200px; padding:8px;'></td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Exco Passports</th><td><img src=". $row["excopassport"] . " style='width:200px; heigh:200px; padding:8px;'></td></tr>
		
		
		
		</table>";
       
    } else {
        echo "No data found";
    }
?>
</div>
<div class="w3-quarter"></div>
</div>
<?php


?>