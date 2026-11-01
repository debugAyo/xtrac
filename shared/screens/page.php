<html>
<head>
</head>
<body>
<div class="w3-row-padding w3-border w3-white">
<div class="w3-col w3-center">
<h4 class="w3-text-grey w3-hover-text-red">Assets Technical Report</h4>

	<div style="height: 20px;"></div>
	<div class="row">
	<div class="col-lg-2">
	</div>
	<div class="col-lg-8">
	<table width="90%" bgcolor="#DFEFFF" align="center" cellpadding="4" cellspacing="1">
		<thead>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Item Status Description</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Model</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Location</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Units</th>
									
		</thead>
		<tbody>
 <?php
 
include '../link/connect.php';


$query = "SELECT  *, COUNT(sn) FROM additem GROUP BY devtype, devstat, assmode, location HAVING devstat='Obsolete'"; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	<tr>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['devstat']; ?><?php echo '&nbsp'; echo $row['devtype']; ?></td>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['assmode']; ?></td>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['location']; ?></td>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['COUNT(sn)']; ?></td>
										
				</tr>
	
	
	
	<?php
	
	//echo "&nbsp;&nbsp;<b>Total</b>&nbsp;&nbsp; ". $row['manuname']. "&nbsp;&nbsp;". $row['devtype']. " = ". $row['COUNT(sn)'];

	//echo "<br />";
	echo "<font face='calibri', size='1'>";
	###############################################################################
	//echo "&nbsp;&nbsp;Number of &nbsp;". $row['devstat']. "&nbsp;". $row['devtype']. " = ". $row['COUNT(sn)'];
	//echo "<hr color='#BED6D6' size='1' align='left' width='100%'>";
	#################################################################################
	

	
?>
<?php	

//echo "<br />";
}


?>
<?php
 //echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include '../link/connect.php';


$query = "SELECT  *, COUNT(sn) FROM additem GROUP BY devtype, devstat, assmode, location HAVING devstat='Active'"; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	<tr>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['devstat']; ?><?php echo '&nbsp'; echo $row['devtype']; ?></td>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['assmode']; ?></td>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['location']; ?></td>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['COUNT(sn)']; ?></td>
										
				</tr>
	
	
	
	<?php
	
	//echo "&nbsp;&nbsp;<b>Total</b>&nbsp;&nbsp; ". $row['manuname']. "&nbsp;&nbsp;". $row['devtype']. " = ". $row['COUNT(sn)'];

	//echo "<br />";
	echo "<font face='calibri', size='1'>";
	###############################################################################
	//echo "&nbsp;&nbsp;Number of &nbsp;". $row['devstat']. "&nbsp;". $row['devtype']. " = ". $row['COUNT(sn)'];
	//echo "<hr color='#BED6D6' size='1' align='left' width='100%'>";
	#################################################################################
	

	
?>
<?php	

//echo "<br />";
}


?>
<?php
 //echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include '../link/connect.php';


$query = "SELECT  *, COUNT(sn) FROM additem GROUP BY devtype, devstat, assmode, location HAVING devstat='Defective'"; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	<tr>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['devstat']; ?><?php echo '&nbsp'; echo $row['devtype']; ?></td>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['assmode']; ?></td>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['location']; ?></td>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['COUNT(sn)']; ?></td>
										
				</tr>
	
	
	
	<?php
	
	//echo "&nbsp;&nbsp;<b>Total</b>&nbsp;&nbsp; ". $row['manuname']. "&nbsp;&nbsp;". $row['devtype']. " = ". $row['COUNT(sn)'];

	//echo "<br />";
	echo "<font face='calibri', size='1'>";
	###############################################################################
	//echo "&nbsp;&nbsp;Number of &nbsp;". $row['devstat']. "&nbsp;". $row['devtype']. " = ". $row['COUNT(sn)'];
	//echo "<hr color='#BED6D6' size='1' align='left' width='100%'>";
	#################################################################################
	

	
?>
<?php	

//echo "<br />";
}


?>
<?php
 //echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include '../link/connect.php';


$query = "SELECT  *, COUNT(sn) FROM additem GROUP BY devtype, devstat, assmode, location HAVING devstat='Redundant'"; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	<tr>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['devstat']; ?><?php echo '&nbsp'; echo $row['devtype']; ?></td>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['assmode']; ?></td>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['location']; ?></td>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['COUNT(sn)']; ?></td>
										
				</tr>
	
	
	
	<?php
	
	//echo "&nbsp;&nbsp;<b>Total</b>&nbsp;&nbsp; ". $row['manuname']. "&nbsp;&nbsp;". $row['devtype']. " = ". $row['COUNT(sn)'];

	//echo "<br />";
	echo "<font face='calibri', size='1'>";
	###############################################################################
	//echo "&nbsp;&nbsp;Number of &nbsp;". $row['devstat']. "&nbsp;". $row['devtype']. " = ". $row['COUNT(sn)'];
	//echo "<hr color='#BED6D6' size='1' align='left' width='100%'>";
	#################################################################################
	

	
?>
<?php	

//echo "<br />";
}


?>
<?php
 //echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include '../link/connect.php';


$query = "SELECT  *, COUNT(sn) FROM additem GROUP BY devtype, devstat, assmode, location HAVING devstat='Bad'"; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	<tr>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['devstat']; ?><?php echo '&nbsp'; echo $row['devtype']; ?></td>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['assmode']; ?></td>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['location']; ?></td>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['COUNT(sn)']; ?></td>
										
				</tr>
	
	
	
	<?php
	
	//echo "&nbsp;&nbsp;<b>Total</b>&nbsp;&nbsp; ". $row['manuname']. "&nbsp;&nbsp;". $row['devtype']. " = ". $row['COUNT(sn)'];

	//echo "<br />";
	echo "<font face='calibri', size='1'>";
	###############################################################################
	//echo "&nbsp;&nbsp;Number of &nbsp;". $row['devstat']. "&nbsp;". $row['devtype']. " = ". $row['COUNT(sn)'];
	//echo "<hr color='#BED6D6' size='1' align='left' width='100%'>";
	#################################################################################
	

	
?>
<?php	

echo "<br />";
}


?>


<html>
<head>
<body>


	<div style="height: 20px;"></div>
	<div class="row">
	<div class="col-lg-2">
	</div>
	<div class="col-lg-8">
	<table width="90%" bgcolor="#DFEFFF" align="center" cellpadding="4" cellspacing="1">
		<thead>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Asset Status</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Quantity</th>
			
									
		</thead>
		<tbody>
		
<?php
$query = "SELECT  *, COUNT(sn) FROM additem GROUP BY devstat"; 

$result = mysqli_query($conn,$query) or die(mysql_error());
while($row = mysqli_fetch_array($result)){



?>


<tr>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['devstat']; ?></td>
					<td bgcolor="#FFFFFF" align="left"><font face="calibri", size="1"><?php echo $row['COUNT(sn)']; ?></td>
										
				</tr>


				
<?php 

} 

$query = "SELECT  * FROM additem"; 

$result = mysqli_query($conn,$query) or die(mysql_error());
$num_rows = mysqli_num_rows($result);
echo "<font face='calibri' size='1'><center>";
echo '<br>';
echo "&nbsp;&nbsp;";
echo "<b>Total Assets Displayed:</b>";
echo "</font>";

echo "<span style='background-color: #FFFFFF'><font face='calibri' size='1' color='#009900'>";

echo "$num_rows \n";
echo "</font>";
echo '</table>';

?>

</div>
</div>
</body>
</html>