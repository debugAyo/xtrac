<?php

if (isset($_POST['submit'])) {

$interv=$_POST['interv'];
$interv_prog=$_POST['interv_prog'];
$descript=$_POST['descript'];
$proj_obj=$_POST['proj_obj'];
$proj_scope=$_POST['proj_scope'];
$proj_own=$_POST['proj_own'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$address=$_POST['address'];
$history=$_POST['history'];
$affect_pop=$_POST['affect_pop'];
$prospect=$_POST['prospect'];
$impact=$_POST['impact'];
$date_start=$_POST['date_start'];
$date_end=$_POST['date_end'];


}


$projreg='projects';
if (!file_exists($projreg)) {
mkdir($projreg, 0755);

}

if ( isset( $_FILES['pic_evid'] ) ) {
	
		$source_file = $_FILES['pic_evid']['tmp_name'];
		$dest_file = "$projreg/".$_FILES['pic_evid']['name'];
		$pic_evid_res = strtolower($dest_file);
		
	if (file_exists($pic_evid_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move pic_evid result!!");
			if($_FILES['pic_evid']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $projreg.'/null.pdf';

$pic_evid_res = 'null.pdf';
		}

// Function to generate six-digit random number

$proj_id=(rand(1000000000, 9999999999) );

include '../link/connect.php';

$interv=mysqli_real_escape_string($conn,$_POST['interv']);
$interv_prog=mysqli_real_escape_string($conn,$_POST['interv_prog']);
$descript=mysqli_real_escape_string($conn,$_POST['descript']);
$proj_obj=mysqli_real_escape_string($conn,$_POST['proj_obj']);
$proj_scope=mysqli_real_escape_string($conn,$_POST['proj_scope']);
$proj_own=mysqli_real_escape_string($conn,$_POST['proj_own']);
$latitude=mysqli_real_escape_string($conn,$_POST['latitude']);
$longitude=mysqli_real_escape_string($conn,$_POST['longitude']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$history=mysqli_real_escape_string($conn,$_POST['history']);
$affect_pop=mysqli_real_escape_string($conn,$_POST['affect_pop']);
$prospect=mysqli_real_escape_string($conn,$_POST['prospect']);
$impact=mysqli_real_escape_string($conn,$_POST['impact']);
$date_start=mysqli_real_escape_string($conn,$_POST['date_start']);
$date_end=mysqli_real_escape_string($conn,$_POST['date_end']);
	
$sql = "SELECT * FROM interventions WHERE id='$interv'"; // Get the last inserted row
    $result = $conn->query($sql);
	while ($row=mysqli_fetch_array($result)) {
		$interv_name = $row['intervention'];
	}
		
	$sql = "SELECT * FROM intervention_prog WHERE id='$interv_prog'"; // Get the last inserted row
    $result = $conn->query($sql);
	while ($row=mysqli_fetch_array($result)) {
		$interv_spec_name = $row['programme'];
	}
	// SQL query to insert into database
     $sql = "INSERT INTO projects (projectid, interv_prog, projtitle, description, objectives, scope, projowner, projlocation, latitude, longitude, history, pic_evid, affect_pop, prospect, impact, starttime, endtime)
					   VALUES ('$proj_id','$interv_name','$interv_spec_name','$descript','$proj_obj','$proj_scope','$proj_own','$address','$latitude','$longitude','$history','$pic_evid_res','$affect_pop','$prospect','$impact','$date_start','$date_end')";

  
		
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
    <h3 class="w3-text-green w3-hover-text-red">Project / Programme Registration</h3>


<?php
include '../link/connect.php';
    // Display recently inserted data
	
	
	
    $sql = "SELECT * FROM projects ORDER BY id DESC LIMIT 1"; // Get the last inserted row
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
		//$row = $result->fetch_assoc();
		while ($row = mysqli_fetch_array($result)) {
		$lat = $row['latitude'];
		$long = $row['longitude'];
		echo "<table width='100%'class='w3-padding-large w3-border'>
		
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Project ID.</th><td style='font-size:12px; width:auto'>" . $row["projectid"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Intervention</th><td style='font-size:12px; width:auto'>" . $row["interv_prog"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Project Title</th><td style='font-size:12px; width:auto'>" . $row["projtitle"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Description</th><td style='font-size:12px; width:auto'>" . $row["description"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Objectives</th><td style='font-size:12px; width:auto'>" . $row["objectives"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Scope</th><td style='font-size:12px; width:auto'>" . $row["scope"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Location</th><td style='font-size:12px; width:auto'>" . $row["projlocation"] . "</td></tr>
		

			
		</table>";
		
		?>
	<iframe class="w3-border-grey w3-light-blue" style="width:100%; height:400px; padding:16px; border:0px solid " src="https://maps.google.com/maps?q=<?php echo $lat; ?>,<?php echo $long; ?>&output=embed"></iframe>
<?php		  
    }

	}	else {
        echo "No data found";
    }
?>
</div>
<div class="w3-quarter"></div>
</div>
<?php


?>