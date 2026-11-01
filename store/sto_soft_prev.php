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


	<div style="height: 20px; width:800px"></div>
	<div class="row">
	<div class="col-lg-2">
	</div>
	<div class="col-lg-8">
	<table width="800" bgcolor="#FFFFFF" align="left" cellpadding="1" cellspacing="1">
		<thead>
			<th bgcolor="#006699" width="350"><font face="calibri", size="2" color="#FFFFFF"><left>Item Status Description</th>
			<th bgcolor="#006699" width="100"><font face="calibri", size="2" color="#FFFFFF"><left>Model</th>
			<th bgcolor="#006699" width="400"><font face="calibri", size="2" color="#FFFFFF"><left>Dependency</th>
			<th bgcolor="#006699" width="100"><font face="calibri", size="2" color="#FFFFFF"><left>Type</th>
			<th bgcolor="#006699" width="300"><font face="calibri", size="2" color="#FFFFFF"><left>Location</th>
									
		</thead>
		<tbody>
 <?php
 //echo "<hr color='#BED6D6' size='4' align='left' width='850'>";
include 'connect.php';


$query = "SELECT  * FROM additem GROUP BY devname, assmode, dependnt HAVING devstat='Active' && devtype='DESKTOP' || devtype='LAPTOP' || devtype='SERVER'"; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	<tr>
					<td bgcolor="#FFFFFF" width="350"><font face="calibri", size="1"><?php echo '&nbsp'; echo $row['devname']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['assmode']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['dependnt']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['devtype']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['location']; ?></td>
										
				</tr>
	
	
	
	<?php
	
		
?><?php	

//echo "<br />";

}
exit();

?>