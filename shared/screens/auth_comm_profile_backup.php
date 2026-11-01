
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

if (isset($_POST['houses']) && is_array($_POST['houses'])) {
        
        // Escape and sanitize the selected colors to prevent SQL injection
		
        $selectedHouses = array_map(function($house) {
            return htmlspecialchars($house);
        }, $_POST['houses']);


include '../link/connect.php';

/* You can use this line of command*/
/*
$stmt = $conn -> prepare("INSERT INTO community_pro (house) VALUES (?)");
foreach ($selectedHouses as $house) {
            $stmt->bind_param("s", $house);
            $stmt->execute();
        }
*/

// OR you may also use this line of command as optional

$query = "INSERT INTO community_pro (introducn,populatn,locatn,history,physize,workers,resident,non_resident,environ_iss,house,house_cost,water,electric,road,transport,employ,unemploy,prysch,secsch,advsch,kidnap,robbery,violence,murder,hosptal,cottage_hos,facility,shopping,mosque,church,library,need_analy) 
							 VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

 // Prepare the statement
    $stmt = $conn->prepare($query);
	
     // Bind parameters and execute the statement for each color
        foreach ($selectedHouses as $house) {
			
	$stmt->bind_param("sissiiiiissiiiiiiiiiiiiiiiiiiiis", $intro,$populat,$location,$histry,$phy_size,$no_wrk,$no_res,$no_non_res,$env_issue,$house,$hs_cost,$water,$electric,$road,$transport,$emp_pop,$unemp_pop,$no_pry,$no_sec,$no_adv,$kidnap,$robbery,$violence,$murder,$hosptl,$cot_hosptl,$facility,$shopng,$mosque,$church,$library,$nd_analysis);
			     $stmt->execute();
        }
        
        // Close the statement
        $stmt->close();
        
        // Close the database connection
        $conn->close();
        
        // Confirmation message
        echo "Information have been successfully stored in the database.";
        
    } else {
        // Error message if no colors were selected
        echo "Please select at least one value.";
    }



























?>