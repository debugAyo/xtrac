
<?php

if (isset($_POST['submit'])) {

$intro=$_POST['intro'];
$populat=$_POST['populat'];
$location=$_POST['location'];
$histry=$_POST['histry'];
$phy_size=$_POST['phy_size'];
$no_wrk=$_POST['no_wrk'];
$no_res=$_POST['no_res'];
$no_non_res=$_POST['no_non_res'];
$env_issue=$_POST['env_issue'];
$hs_cost=$_POST['hs_cost'];
$water=$_POST['water'];
$electric=$_POST['electric'];
$road=$_POST['road'];
$transport=$_POST['transport'];
$emp_pop=$_POST['emp_pop'];
$unemp_pop=$_POST['unemp_pop'];
$no_pry=$_POST['no_pry'];
$no_sec=$_POST['no_sec'];
$no_adv=$_POST['no_adv'];
$kidnap=$_POST['kidnap'];
$robbery=$_POST['robbery'];
$violence=$_POST['violence'];
$murder=$_POST['murder'];
$hosptl=$_POST['hosptl'];
$cot_hosptl=$_POST['cot_hosptl'];
$facility=$_POST['facility'];
$shopng=$_POST['shopng'];
$mosque=$_POST['mosque'];
$church=$_POST['church'];
$library=$_POST['library'];
$nd_analysis=$_POST['nd_analysis'];
}

// Function to generate six-digit random number
function generateRandomNo() {
    return rand(100000, 999999); // Generates a random number between 100000 and 999999
}
$regcode = generateRandomNo();

include '../link/connect.php';

	
$intro=$conn->real_escape_string($_POST['intro']);
$populat=$conn->real_escape_string($_POST['populat']);
$location=$conn->real_escape_string($_POST['location']);
$histry=$conn->real_escape_string($_POST['histry']);
$phy_size=$conn->real_escape_string($_POST['phy_size']);
$no_wrk=$conn->real_escape_string($_POST['no_wrk']);
$no_res=$conn->real_escape_string($_POST['no_res']);
$no_non_res=$conn->real_escape_string($_POST['no_non_res']);
$env_issue=$conn->real_escape_string($_POST['env_issue']);
$hs_cost=$conn->real_escape_string($_POST['hs_cost']);
$water=$conn->real_escape_string($_POST['water']);
$electric=$conn->real_escape_string($_POST['electric']);
$road=$conn->real_escape_string($_POST['road']);
$transport=$conn->real_escape_string($_POST['transport']);
$emp_pop=$conn->real_escape_string($_POST['emp_pop']);
$unemp_pop=$conn->real_escape_string($_POST['unemp_pop']);
$no_pry=$conn->real_escape_string($_POST['no_pry']);
$no_sec=$conn->real_escape_string($_POST['no_sec']);
$no_adv=$conn->real_escape_string($_POST['no_adv']);
$kidnap=$conn->real_escape_string($_POST['kidnap']);
$robbery=$conn->real_escape_string($_POST['robbery']);
$violence=$conn->real_escape_string($_POST['violence']);
$murder=$conn->real_escape_string($_POST['murder']);
$hosptl=$conn->real_escape_string($_POST['hosptl']);
$cot_hosptl=$conn->real_escape_string($_POST['cot_hosptl']);
$facility=$conn->real_escape_string($_POST['facility']);
$shopng=$conn->real_escape_string($_POST['shopng']);
$mosque=$conn->real_escape_string($_POST['mosque']);
$church=$conn->real_escape_string($_POST['church']);
$library=$conn->real_escape_string($_POST['library']);
$nd_analysis=$conn->real_escape_string($_POST['nd_analysis']);

$houses = implode(',', $_POST['houses']);


    // Insert data into MySQL database
	
	$sql = "INSERT INTO community_pro (regno,introducn,populatn,locatn,history,physize,workers,resident,non_resident,environ_iss,house,house_cost,water,electric,road,transport,employ,unemploy,prysch,secsch,advsch,kidnap,robbery,violence,murder,hosptal,cottage_hos,facility,shopping,mosque,church,library,need_analy) 
							 VALUES ('$regcode','$intro','$populat','$location','$histry','$phy_size','$no_wrk','$no_res','$no_non_res','$env_issue','$houses','$hs_cost','$water','$electric','$road','$transport','$emp_pop','$unemp_pop','$no_pry','$no_sec','$no_adv','$kidnap','$robbery','$violence','$murder','$hosptl','$cot_hosptl','$facility','$shopng','$mosque','$church','$library','$nd_analysis')";
	   
    if ($conn->query($sql) === TRUE) {
        echo "<h6 class='w3-text-green w3-hover-text-red w3-padding-large w3-white'>New Community Profiling was successfully created</h6><hr>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


// Close MySQL connection
$conn->close();

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Data Result</title>
</head>
<body>
<div class="w3-row-padding w3-white">
    <h3 class="w3-text-grey">Check details below</h3>


<?php
include '../link/connect.php';
    // Display recently inserted data
    $sql = "SELECT * FROM community_pro ORDER BY id DESC LIMIT 1"; // Get the last inserted row
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
		echo "Registration No: " . $row["regno"] . "<br>";
		echo "Introdution: " . $row["introducn"] . "<br>";
        echo "Population: " . $row["populatn"] . "<br>";
        echo "Location: " . $row["locatn"] . "<br>";
        echo "Favorite Houses: " . $row["house"] . "<br>";
       
    } else {
        echo "No data found";
    }
?>


</div>
<?php





















?>