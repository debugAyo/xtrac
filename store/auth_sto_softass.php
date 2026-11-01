 <php?
 $email = $_POST['email']; $pin = $_POST['pin']; 
 $zon_off = $_POST['zon_off'];
 if (!$email || !$pin || !$zone) {
 echo "You can't view this page";
 exit();
 }

 ?>
<html>
<head>
</head>
<body>


	<div style="height: 20px;"></div>
	<div class="row">
	<div class="col-lg-2">
	</div>
	<div class="col-lg-8">
	<table width="90%" bgcolor="#DFEFFF" align="center" cellpadding="4" cellspacing="1">
		<thead>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Item Status Description</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Model</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Dependency</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Type</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Location</th>
									
		</thead>
		<tbody>
 <?php
 echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  * FROM additem GROUP BY devname, assmode, dependnt HAVING devstat='Active' && devtype='DESKTOP' || devtype='LAPTOP'"; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	<tr>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo '&nbsp'; echo $row['devname']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['assmode']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['dependnt']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['devtype']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['location']; ?></td>
										
				</tr>
	
	
	
	<?php
	
	//echo "&nbsp;&nbsp;<b>Total</b>&nbsp;&nbsp; ". $row['manuname']. "&nbsp;&nbsp;". $row['devtype']. " = ". $row['COUNT(sn)'];

	//echo "<br />";
	echo "<font face='calibri', size='1'>";
	###############################################################################
	//echo "&nbsp;&nbsp;Number of &nbsp;". $row['devstat']. "&nbsp;". $row['devtype']. " = ". $row['COUNT(sn)'];
	//echo "<hr color='#BED6D6' size='1' align='left' width='100%'>";
	#################################################################################
	

	
?><?php	

//echo "<br />";
}


?>