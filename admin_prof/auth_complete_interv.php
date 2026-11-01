<?php

if (isset($_POST['submit'])) {
$proj_id=$_POST['proj_id'];
$status=$_POST['status'];
$interv=$_POST['interv'];
$interv_pro=$_POST['interv_pro'];
$descript=$_POST['descript'];
$obj_interv=$_POST['obj_interv'];
$cost=$_POST['cost'];
$geo_locat=$_POST['geo_locat'];
$address=$_POST['address'];
$histry=$_POST['histry'];
$populat=$_POST['populat'];
$cur_situat=$_POST['cur_situat'];
$utilise=$_POST['utilise'];
$date_comp=$_POST['date_comp'];


}


$comp_proj='comp_projects';
if (!file_exists($comp_proj)) {
mkdir($comp_proj, 0755);

}

if ( isset( $_FILES['evidence'] ) ) {
	
		$source_file = $_FILES['evidence']['tmp_name'];
		$dest_file = "$comp_proj/".$_FILES['evidence']['name'];
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

//$credent_res = $comp_proj.'/null.pdf';

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
$cost=mysqli_real_escape_string($conn,$_POST['cost']);
$geo_locat=mysqli_real_escape_string($conn,$_POST['geo_locat']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$histry=mysqli_real_escape_string($conn,$_POST['histry']);
$populat=mysqli_real_escape_string($conn,$_POST['populat']);
$cur_situat=mysqli_real_escape_string($conn,$_POST['cur_situat']);
$utilise=mysqli_real_escape_string($conn,$_POST['utilise']);
$date_comp=mysqli_real_escape_string($conn,$_POST['date_comp']);
	

	// SQL query to insert into database
     
	 //$sql = "INSERT INTO comp_projects (projectid, status, intervention, intervention_prog, description, objectives, proj_cost, geolocation, address, history, affect_pop, cur_situation, utilization, evidence, endtime)
	 $sql = "INSERT INTO projects_assessment (projectid, status, intervention, intervention_prog, description, objectives, proj_cost, geolocation, address, history, affect_pop, cur_situation, utilization, evidence, endtime)
					   VALUES ('$proj_id','$status','$interv','$interv_pro','$descript','$obj_interv','$cost','$geo_locat','$address','$histry','$populat','$cur_situat','$utilise','$evidence_res','$date_comp')";

  
		
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
    <h3 class="w3-text-green w3-hover-text-red">Completed Project / Programme</h3>


<?php
include '../link/connect.php';
    // Display recently inserted data
	
	//$sql = "SELECT * FROM comp_projects ORDER BY id DESC LIMIT 1";
	
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
		<tr><td style='font-size:17px; text-align:left; width:20%'>Project Cost<hr></td><td style='font-size:17px; text-align: left; width:90%'>" . $row["proj_cost"] . "<hr></td></tr>
		<tr><td style='font-size:17px; text-align:left; width:20%'>Impact<hr></td><td style='font-size:17px; text-align: left; width:90%'>" . $row["cur_situation"] . "<hr></td></tr>
		<tr><td style='font-size:17px; text-align:left; width:20%'>Utility<hr></td><td style='font-size:17px; text-align: left; width:90%'>" . $row["utilization"] . "<hr></td></tr>
		<tr><td style='font-size:17px; text-align:left; width:20%'>Status</td><td style='font-size:17px; text-align: left; width:90%'>" . $row["status"] ." &nbsp;on " . $row["endtime"] ."</td></tr>
		

			
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