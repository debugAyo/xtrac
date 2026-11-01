<html>
<head>
</head>
<body>
<div class="w3-row-padding w3-border w3-white">
<div class="w3-col w3-center">
<h4 class="w3-text-grey w3-hover-text-red">Assets Gap Analysis</h4>

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


}
?>

</table>

<?php

$query = "SELECT  *, COUNT(sn) FROM additem GROUP BY devstat HAVING devstat='Obsolete'"; 

$result = mysqli_query($conn,$query) or die(mysql_error());

while ($row=mysqli_fetch_array($result)){

echo  "<h6 class='w3-text-grey'><b>Total Gap Displayed = </b>" . $row['COUNT(sn)']. "</h6>" ;
}

?>

</div>
</div>
</body>
</html>