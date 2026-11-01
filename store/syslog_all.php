<table cellpadding="0" cellspacing="0" width="837" height="192">
	<!-- MSTableType="layout" -->
	<html>
<body>


	<tr>
		<td height="172" valign="top"> <php?
 $email = $_POST['email']; $pin = $_POST['pin']; 
 //$zon_off = $_POST['zon_off'];
 //if (!$email || !$pin || !$zone) {
 //echo "You can't view this page";
// exit();
// }

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
	<table width="90%" bgcolor="#DFEFFF" align="left" cellpadding="4" cellspacing="1">
		<thead>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Who</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>Did What?</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>From Where</th>
			<th bgcolor="#006699"><font face="calibri", size="2" color="#FFFFFF"><left>When</th>
									
		</thead>
		<tbody>
 <?php
 echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


//$query = "SELECT  * FROM logger WHERE event_date=CURDATE()"; 

$query = "SELECT  * FROM logger ";
$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	<tr>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['fname']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['action']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['ipaddr']; ?><?php echo '&nbsp'; echo $row['host']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['event_date']; ?><?php echo '&nbsp'; echo $row['event_time']; ?></td>
					
										
				</tr>
	
	
	
	<?php }?></td>
	</tr>
</table>
	</tr>
	<tr>
		<td height="20" width="837"></td>
	</tr>

