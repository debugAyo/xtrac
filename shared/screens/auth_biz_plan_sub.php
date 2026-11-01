
<?php

if (isset($_POST['submit'])) {

$user_id=$_POST['user_id'];
$exec_sum=$_POST['exec_sum'];
$biz_name=$_POST['biz_name'];
$biz_locat=$_POST['biz_locat'];
$biz_mis=$_POST['biz_mis'];
$biz_desc=$_POST['biz_desc'];
$legal_str=$_POST['legal_str'];
$history=$_POST['history'];
$biz_vision=$_POST['biz_vision'];
$markt_opp=$_POST['markt_opp'];
$fin_highlt=$_POST['fin_highlt'];
$indust_descp=$_POST['indust_descp'];
$target_mrkt=$_POST['target_mrkt'];
$markt_trend=$_POST['markt_trend'];
$comp_analysis=$_POST['comp_analysis'];
$man_mem=$_POST['man_mem'];
$board_dir=$_POST['board_dir'];
$pers_plan=$_POST['pers_plan'];
$prod_descp=$_POST['prod_descp'];
$sell_point=$_POST['sell_point'];
$devop_stage=$_POST['devop_stage'];
$mart_plan=$_POST['mart_plan'];
$sales_strat=$_POST['sales_strat'];
$price_strat=$_POST['price_strat'];
$dist_plan=$_POST['dist_plan'];
$fund_req=$_POST['fund_req'];
$use_fund=$_POST['use_fund'];
$proj_exp=$_POST['proj_exp'];
$brk_analy=$_POST['brk_analy'];
$cashflow=$_POST['cashflow'];
$bal_sheet=$_POST['bal_sheet'];
$prolos_stm=$_POST['prolos_stm'];


}


	
$uploads='business_plan';
if (!file_exists($uploads)) {
mkdir($uploads, 0755);

}

if ( isset( $_FILES['cv_docs'] ) ) {
	
		$source_file = $_FILES['cv_docs']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['cv_docs']['name'];
		$cv_docs_res = strtolower($dest_file);
		
	if (file_exists($cv_docs_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move cv_docs result!!");
			if($_FILES['cv_docs']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$cv_docs_res = 'null.pdf';
		}
		
if ( isset( $_FILES['legal_docs'] ) ) {
	
		$source_file = $_FILES['legal_docs']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['legal_docs']['name'];
		$legal_docs_res = strtolower($dest_file);
		
	if (file_exists($legal_docs_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move legal_docs result!!");
			if($_FILES['legal_docs']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$legal_docs_res = 'null.pdf';
		}
		
		if ( isset( $_FILES['mrkt_docs'] ) ) {
	
		$source_file = $_FILES['mrkt_docs']['tmp_name'];
		$dest_file = "$uploads/".$_FILES['mrkt_docs']['name'];
		$mrkt_docs_res = strtolower($dest_file);
		
	if (file_exists($mrkt_docs_res)) {
			//print "The file name already exists!!";
					
			
		}
		
			
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error: Could not move mrkt_docs result!!");
			if($_FILES['mrkt_docs']['error'] == 0) {
			
			}
	
	}
	
}

else {

//$credent_res = $uploads.'/null.pdf';

$mrkt_docs_res = 'null.pdf';
		}

$regcode=(rand(100000, 999999) );
		
include '../link/connect.php';	
	
$user_id=mysqli_real_escape_string($conn,$_POST['user_id']);
$exec_sum=mysqli_real_escape_string($conn,$_POST['exec_sum']);
$biz_name=mysqli_real_escape_string($conn,$_POST['biz_name']);
$biz_locat=mysqli_real_escape_string($conn,$_POST['biz_locat']);
$biz_mis=mysqli_real_escape_string($conn,$_POST['biz_mis']);
$biz_desc=mysqli_real_escape_string($conn,$_POST['biz_desc']);
$legal_str=mysqli_real_escape_string($conn,$_POST['legal_str']);
$history=mysqli_real_escape_string($conn,$_POST['history']);
$biz_vision=mysqli_real_escape_string($conn,$_POST['biz_vision']);
$markt_opp=mysqli_real_escape_string($conn,$_POST['markt_opp']);
$fin_highlt=mysqli_real_escape_string($conn,$_POST['fin_highlt']);
$indust_descp=mysqli_real_escape_string($conn,$_POST['indust_descp']);
$target_mrkt=mysqli_real_escape_string($conn,$_POST['target_mrkt']);
$markt_trend=mysqli_real_escape_string($conn,$_POST['markt_trend']);
$comp_analysis=mysqli_real_escape_string($conn,$_POST['comp_analysis']);
$man_mem=mysqli_real_escape_string($conn,$_POST['man_mem']);
$board_dir=mysqli_real_escape_string($conn,$_POST['board_dir']);
$pers_plan=mysqli_real_escape_string($conn,$_POST['pers_plan']);
$prod_descp=mysqli_real_escape_string($conn,$_POST['prod_descp']);
$sell_point=mysqli_real_escape_string($conn,$_POST['sell_point']);
$devop_stage=mysqli_real_escape_string($conn,$_POST['devop_stage']);
$mart_plan=mysqli_real_escape_string($conn,$_POST['mart_plan']);
$sales_strat=mysqli_real_escape_string($conn,$_POST['sales_strat']);
$price_strat=mysqli_real_escape_string($conn,$_POST['price_strat']);
$dist_plan=mysqli_real_escape_string($conn,$_POST['dist_plan']);
$fund_req=mysqli_real_escape_string($conn,$_POST['fund_req']);
$use_fund=mysqli_real_escape_string($conn,$_POST['use_fund']);
$proj_exp=mysqli_real_escape_string($conn,$_POST['proj_exp']);
$brk_analy=mysqli_real_escape_string($conn,$_POST['brk_analy']);
$cashflow=mysqli_real_escape_string($conn,$_POST['cashflow']);
$bal_sheet=mysqli_real_escape_string($conn,$_POST['bal_sheet']);
$prolos_stm=mysqli_real_escape_string($conn,$_POST['prolos_stm']);
	
	

	// SQL query to insert into database
    $sql = "INSERT INTO bizplan (regno,userid,execsum,bizname,bizlocat,bizmis,bizdesc,legalstr,history,bizvision,marktopp,finhighlt,industdescp,targetmrkt,markttrend,companalysis,manmem,boarddir,persplan,proddescp,sellpoint,devopstage,martplan,salesstrat,pricestrat,distplan,fundreq,usefund,projexp,brkanaly,cashflow,balsheet,prolosstm,cvdocs,legaldocs,mrktdocs,date_sub)
					  VALUES ('$regcode','$user_id','$exec_sum','$biz_name','$biz_locat','$biz_mis','$biz_desc','$legal_str','$history','$biz_vision','$markt_opp','$fin_highlt','$indust_descp','$target_mrkt','$markt_trend','$comp_analysis','$man_mem','$board_dir','$pers_plan','$prod_descp','$sell_point','$devop_stage','$mart_plan','$sales_strat','$price_strat','$dist_plan','$fund_req','$use_fund','$proj_exp','$brk_analy','$cashflow','$bal_sheet','$prolos_stm','$cv_docs_res','$legal_docs_res','$mrkt_docs_res',NOW())";

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
    <h3 class="w3-text-green w3-hover-text-red">Business Plan</h3>


<?php
include '../link/connect.php';
    // Display recently inserted data
	
	$sql = "SELECT bizplan.*,user_reg.* FROM bizplan INNER JOIN user_reg ON bizplan.userid = user_reg.regno WHERE bizplan.userid='$user_id' ORDER BY bizplan.id DESC LIMIT 1"; // Get the last inserted row
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		echo "<table width='100%'class='w3-padding-large w3-border'>
		
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Reg No.</th><td style='font-size:12px; width:auto'>" . $row["regno"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Name</th><td style='font-size:12px; width:auto'>" . $row["calname"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Phone No.</th><td style='font-size:12px; width:auto'>" . $row["calphone"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Address</th><td style='font-size:12px; width:auto'>" . $row["caladdress"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Executive Summary</th><td style='font-size:12px; width:auto'>" . $row["execsum"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Business Name</th><td style='font-size:12px; width:auto'>" . $row["bizname"] . "</td></tr>
		<tr><th class='w3-left' style='font-size:12px; width:auto'>Business Location</th><td style='font-size:12px; width:auto'>" . $row["bizlocat"] . "</td></tr>
    	<tr><th class='w3-left' style='font-size:12px; width:auto'>Business Mission</th><td style='font-size:12px; width:auto'>" . $row["bizmis"] . "</td></tr>
		
		<tr><td colspan='2'><hr></td></tr>
		<tr><td colspan='2' style='font-size:12px; width:auto'>Attached Resume</td></tr>
		<tr><td colspan='2'><iframe src=". $row["cvdocs"] . " style='width:600px; height:200px; padding:6px; float:center'></iframe></td></tr>
		<tr><td colspan='2' style='font-size:12px; width:auto'>Attached Legal Documents</td></tr>
		<tr><td colspan='2'><iframe src=". $row["legaldocs"] . " style='width:600px; height:200px; padding:6px;float:center'></iframe></td></tr>
		<tr><td colspan='2' style='font-size:12px; width:auto'>Attached Market Analysis Document</td></tr>
		<tr><td colspan='2'><iframe src=". $row["mrktdocs"] . " style='width:600px; height:200px; padding:6px;float:center'></iframe></td></tr>
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
