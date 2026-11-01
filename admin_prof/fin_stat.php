<html>
<head>
</head>
<body>


	<div style="height: 20px;"></div>
	<div class="row">
	<div class="col-lg-2">
	</div>
	<div class="col-lg-8">
	<table width="850" bgcolor="#DFEFFF" align="center" cellpadding="4" cellspacing="1">
		<thead>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Device ID</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Account Ref</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Item Name</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Manufacturer</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Serial Number</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Date Procured</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Current Date</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Procured Cost</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Salvage Cost</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Location</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Depreciation Method</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Depreciation Charge</th>

									
		</thead>
		<tbody>
		
		<?php

$dev_id = $_POST['dev_id'];
include '../link/connect.php';

$sql="SELECT * FROM finance_acct WHERE devid='$dev_id'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result) ==0)
			{
		//echo 'Information Updated';
		//include 'item_prev.php';
	include 'comment.php';
		exit();
		}

$sql="SELECT * FROM finance_acct WHERE devid='$dev_id' and curdate=NOW()";
$result=mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)){


	
	?>
	
	<tr>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['devid']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['acct_ref']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['devname']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['manuname']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['serial']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['prodate']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['caldate']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['purprice']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['salvage_cost']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['location']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['deprecat_method']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo number_format($row['deprecat_rate'],2); ?></td>
										
				</tr>
	
	
	
<?php	

//echo "<br />";
}


?>