
<?php

if (isset($_POST['submit'])) {

$grp_id=$_POST['grp_id'];
$loan_purp=$_POST['loan_purp'];
$loan_amt=$_POST['loan_amt'];
$duration=$_POST['duration'];
$month_inc=$_POST['month_inc'];
$month_exp=$_POST['month_exp'];
$grp_acct_name=$_POST['grp_acct_name'];
$grp_acct_no=$_POST['grp_acct_no'];
$proj_name=$_POST['proj_name'];
$proj_descrp=$_POST['proj_descrp'];
$proj_address=$_POST['proj_address'];
$proj_structure=$_POST['proj_structure'];
$declaration=$_POST['declaration'];

/*image files*/


}


	
$uploads='group_loan';
if (!file_exists($uploads)) {
mkdir($uploads, 0755);

}

if ( isset( $_FILES['lead_sign'] ) ) {
	
		$source_file = $_FILES['lead_sign']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['lead_sign']['name'];
		$lead_sign_res = strtolower($dest_file);
		
	if (file_exists($lead_sign_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move lead_sign result!!");
			if($_FILES['lead_sign']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$lead_sign_res = 'null.pdf';
		}
		
if ( isset( $_FILES['grp_sign'] ) ) {
	
		$source_file = $_FILES['grp_sign']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['grp_sign']['name'];
		$grp_sign_res = strtolower($dest_file);
		
	if (file_exists($grp_sign_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move grp_sign result!!");
			if($_FILES['grp_sign']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$grp_sign_res = 'null.pdf';
		}
		
$regcode=(rand(100000, 999999) );
		
include '../link/connect.php';	
	
$grp_id=mysqli_real_escape_string($conn,$_POST['grp_id']);
$loan_purp=mysqli_real_escape_string($conn,$_POST['loan_purp']);
$loan_amt=mysqli_real_escape_string($conn,$_POST['loan_amt']);
$duration=mysqli_real_escape_string($conn,$_POST['duration']);
$month_inc=mysqli_real_escape_string($conn,$_POST['month_inc']);
$month_exp=mysqli_real_escape_string($conn,$_POST['month_exp']);
$grp_acct_name=mysqli_real_escape_string($conn,$_POST['grp_acct_name']);
$grp_acct_no=mysqli_real_escape_string($conn,$_POST['grp_acct_no']);
$proj_name=mysqli_real_escape_string($conn,$_POST['proj_name']);
$proj_descrp=mysqli_real_escape_string($conn,$_POST['proj_descrp']);
$proj_address=mysqli_real_escape_string($conn,$_POST['proj_address']);
$proj_structure=mysqli_real_escape_string($conn,$_POST['proj_structure']);
$declaration=mysqli_real_escape_string($conn,$_POST['declaration']);

	// SQL query to insert into database
    $sql = "INSERT INTO group_loan (regno,grpid,loanpurp,loanamt,duration,monthinc,monthexp,grpacctname,grpacctno,projname,projdescrp,projaddress,projstructure,declaration,leadsign,grpsign,appdate)
			VALUES ('$regcode','$grp_id','$loan_purp','$loan_amt','$duration','$month_inc','$month_exp','$grp_acct_name','$grp_acct_no','$proj_name','$proj_descrp','$proj_address','$proj_structure','$declaration','$lead_sign_res','$grp_sign_res',NOW())";

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
    <h3 class="w3-text-green w3-hover-text-red">Group Loan Application</h3>


<?php
include '../link/connect.php';
    // Display recently inserted data
	
	$sql = "SELECT group_loan.*,group_reg.* FROM group_loan INNER JOIN group_reg ON group_loan.grpid = group_reg.regno WHERE group_loan.grpid='$grp_id' ORDER BY group_loan.id DESC LIMIT 1"; // Get the last inserted row
    
	$result = $conn->query($sql);

    if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		echo "<table width='100%'class='w3-padding-large w3-border'>
		
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Reg No.</th><td style='font-size:12px; width:auto'>" . $row["grpid"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Group Name</th><td style='font-size:12px; width:auto'>" . $row["groupname"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Leader</th><td style='font-size:12px; width:auto'>" . $row["grouplead"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Leader's Phone No.</th><td style='font-size:12px; width:auto'>" . $row["groupleadphone"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Loan Purpose</th><td style='font-size:12px; width:auto'>" . $row["loanpurp"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Loan Amount</th><td style='font-size:12px; width:auto'>" . $row["loanamt"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Duration in months</th><td style='font-size:12px; width:auto'>" . $row["duration"] . "</td></tr>
    	<tr><th class='w3-left' style='font-size:12px; width:auto'>Monthly Income</th><td style='font-size:12px; width:auto'>" . $row["monthinc"] . "</td></tr>
		
		<tr><td colspan='2'><hr></td></tr>
		<tr><td colspan='2' style='font-size:12px; width:auto'>Attached Resume</td></tr>
		<tr><td colspan='2'><iframe src=". $row["leadsign"] . " style='width:600px; height:200px; padding:6px; float:center'></iframe></td></tr>
		<tr><td colspan='2' style='font-size:12px; width:auto'>Attached Legal Documents</td></tr>
		<tr><td colspan='2'><iframe src=". $row["grpsign"] . " style='width:600px; height:200px; padding:6px;float:center'></iframe></td></tr>
		</p>	</table>";
       
    } else {
        echo "No data found";
    }
?>
</div>
<div class="w3-quarter"></div>
</div>
<?php


?>
