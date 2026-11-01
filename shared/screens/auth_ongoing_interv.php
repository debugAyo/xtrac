<?php

if (isset($_POST['submit'])) {
$proj_id=$_POST['proj_id'];
$status=$_POST['status'];
$interv=$_POST['interv'];
$interv_pro=$_POST['interv_pro'];
$descript=$_POST['descript'];
$obj_interv=$_POST['obj_interv'];
$geo_locat=$_POST['geo_locat'];
$address=$_POST['address'];
$cur_situat=$_POST['cur_situat'];
$pcnt_complete=$_POST['pcnt_complete'];
$proj_chall=$_POST['proj_chall'];
$recommd=$_POST['recommd'];
$date_report=$_POST['date_report'];


}


$ongoing_proj='ongoing_projects';
if (!file_exists($ongoing_proj)) {
mkdir($ongoing_proj, 0755);

}

if ( isset( $_FILES['evidence'] ) ) {
	
		$source_file = $_FILES['evidence']['tmp_name'];
		$dest_file = "$ongoing_proj/".$_FILES['evidence']['name'];
		$evidence_res = strtolower($dest_file);
		
	if (file_exists($evidence_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move evidence result!!");
			if($_FILES['evidence']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $ongoing_proj.'/null.pdf';

$evidence_res = 'null.pdf';
		}

// Function to generate six-digit random number

$proj_id=(rand(1000000000, 9999999999) );

include '../link/connect.php';


$proj_id=mysqli_real_escape_string($conn,$_POST['proj_id']);
$status=mysqli_real_escape_string($conn,$_POST['status']);
$interv=mysqli_real_escape_string($conn,$_POST['interv']);
$interv_pro=mysqli_real_escape_string($conn,$_POST['interv_pro']);
$descript=mysqli_real_escape_string($conn,$_POST['descript']);
$obj_interv=mysqli_real_escape_string($conn,$_POST['obj_interv']);
$geo_locat=mysqli_real_escape_string($conn,$_POST['geo_locat']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$cur_situat=mysqli_real_escape_string($conn,$_POST['cur_situat']);
$pcnt_complete=mysqli_real_escape_string($conn,$_POST['pcnt_complete']);
$proj_chall=mysqli_real_escape_string($conn,$_POST['proj_chall']);
$recommd=mysqli_real_escape_string($conn,$_POST['recommd']);
$date_report=mysqli_real_escape_string($conn,$_POST['date_report']);

	

	// SQL query to insert into database
    //$sql = "INSERT INTO ongoing_projects (projectid, status, intervention, intervention_prog, description, objectives, geolocation, address, cur_situation, perc_complete, evidence, contingent, recommend, reptime)
	 
	 $sql = "INSERT INTO projects_assessment (projectid, status, intervention, intervention_prog, description, objectives, geolocation, address, cur_situation, perc_complete, evidence, contingent, recommend, reptime)
					   VALUES ('$proj_id','$status','$interv','$interv_pro','$descript','$obj_interv','$geo_locat','$address','$cur_situat','$pcnt_complete','$evidence_res','$proj_chall','$recommd','$date_report')";

  
		
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
    <h3 class="w3-text-green w3-hover-text-red">Ongoing Project / Programme</h3>


<?php
include '../link/connect.php';
    // Display recently inserted data
	
	
	//$sql = "SELECT * FROM ongoing_projects ORDER BY id DESC LIMIT 1"; // Get the last inserted row
    $sql = "SELECT * FROM projects_assessment ORDER BY id DESC LIMIT 1"; // Get the last inserted row
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
		//$row = $result->fetch_assoc();
		while ($row = mysqli_fetch_array($result)) {
		$prolocation = $row['geolocation'];
		//$long = $row['longitude'];
		echo "<table width='100%'class='w3-padding-large w3-border'>
		
		<tr><td style='font-size:17px; text-align:left; width:20%'>Project ID<hr></td><td style='font-size:17px; text-align: left; width:90%'>" . $row["projectid"] . "<hr></td></tr>
		<tr><td style='font-size:17px; text-align:left; width:20%'>Intervention<hr></td><td style='font-size:17px; text-align: left; width:90%'>" . $row["intervention"] . "<hr></td></tr>
		<tr><td style='font-size:17px; text-align:left; width:20%'>Project Title<hr></td><td style='font-size:17px; text-align: left; width:90%'>" . $row["intervention_prog"] . "<hr></td></tr>
		<tr><td style='font-size:17px; text-align:left; width:20%'>Description<hr></td><td style='font-size:17px; text-align: left; width:90%'>" . $row["description"] . "<hr></td></tr>
		<tr><td style='font-size:17px; text-align:left; width:20%'>Objectives<hr></td><td style='font-size:17px; text-align: left; width:90%'>" . $row["objectives"] . "<hr></td></tr>
		<tr><td style='font-size:17px; text-align:left; width:20%'>Progress<hr></td><td style='font-size:17px; text-align: left; width:90%'>" . $row["cur_situation"] . "<hr></td></tr>
		<tr><td style='font-size:17px; text-align:left; width:20%'>Milestone <hr></td><td style='font-size:17px; text-align: left; width:90%'>" . $row["perc_complete"] . "%<hr></td></tr>
		<tr><td style='font-size:17px; text-align:left; width:20%'>Contingencies<hr></td><td style='font-size:17px; text-align: left; width:90%'>" . $row["contingent"] . "<hr></td></tr>
		<tr><td style='font-size:17px; text-align:left; width:25%'>Recommendations<hr></td><td style='font-size:17px; text-align: left; width:90%'>" . $row["recommend"] . "<hr></td></tr>
		<tr><td style='font-size:17px; text-align:left; width:20%'>Status</td><td style='font-size:17px; text-align: left; width:90%'>" . $row["status"] ." &nbsp;on " . $row["reptime"] ."</td></tr>
		

			
		</table>";
		
		?>
	<label>Project Location</label>
	<iframe class="w3-border-grey w3-light-grey" style="width:100%; height:400px; padding:16px; border:0px solid " src="https://maps.google.com/maps?q=<?php echo $prolocation; ?>&output=embed"></iframe>
	<label>Project Picture</label>
	<iframe class="w3-border-grey w3-light-grey" style="width:100%; height:400px; padding:16px; border:0px solid; float:center " src="<?php echo $row['evidence'];?>"/></iframe>
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