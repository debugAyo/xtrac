<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-calculator fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Calculated Depreciation</h3>	

<?php

$dev_id=$_POST['dev_id']; 
$acct_ref=$_POST['acct_ref']; 
$deprecat_month=$_POST['deprecat_month']; 
$salvage_cost=$_POST['salvage_cost'];
$deprecat_method=$_POST['deprecat_method'];


//$i = $cpu;

            //for (i = 0; i < $cpu; i++) {
                 // $deprecat_charge=( ($purprice - $salvage_cost)/$cpu);

 include '../link/connect.php';
$sql = "SELECT devid, devname, manuname, serial, lifecycle, purprice, prodate, location FROM additem WHERE devid='$dev_id'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$devid=$row['devid'];
$devname = $row['devname'];
$manuname = $row['manuname'];
$serial = $row['serial'];
$cpu = $row['lifecycle'];
$purprice = $row['purprice'];
$prodate= $row['prodate'];
$location = $row['location'];


function stripAlphabeticValues($input) {
    // Use preg_replace to remove all alphabetic characters
    return preg_replace('/[a-zA-Z]/', '', $input);
}

// Example usage
//$inputString = "Hello123World456!";
//$result = stripAlphabeticValues($inputString);

$cpu = $row['lifecycle'];
$use_life = stripAlphabeticValues($cpu);

/*echo "Original String: " . $cpu . "\n";
echo "Stripped String: " . $use_life . "\n";*/


$deprecat_charge=($purprice-$salvage_cost)/($use_life);

//echo $deprecat_charge;


include '../link/connect.php';

$sql = "INSERT INTO finance_acct (devid, acct_ref, devname, manuname, serial, cpu, purprice, prodate, caldate, location, salvage_cost, deprecat_month, deprecat_method,  deprecat_rate) 
VALUES ('$devid','$acct_ref','$devname','$manuname','$serial','$cpu','$purprice','$prodate',NOW(),'$location','$salvage_cost','$deprecat_month','$deprecat_method','$deprecat_charge')";
$result = mysqli_query($conn,$sql);

$sql = "SELECT devid, devname, manuname, serial, prodate, caldate, location, deprecat_rate FROM finance_acct WHERE caldate=NOW()";
$result = mysqli_query($conn,$sql); 
$row = mysqli_fetch_array($result);
echo '<p>The Calculated Depreciation Charges for Asset named ' . $row['devname'] . ' with ID: ' . $row['devid'] . ' as at ' . $row['caldate'] . ' is: ';

echo '<b>'.'N'. number_format($row['deprecat_rate'],2) . '</b></p>';

echo '<p>It was procured at the rate of ' . '<b>' . 'N'.  number_format($purprice,2) . '</b>' . ' on ' . $row['prodate'] . '</p>';


//include 'auth_finance_trac.php';

//exit();

	
				
?>
</div></div>