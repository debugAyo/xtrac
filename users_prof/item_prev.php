<?php



include '../link/connect.php';
 
$sql="SELECT * FROM additem  WHERE category='IT Infrastructure'";
$result=mysqli_query($conn,$sql);

  if(mysqli_num_rows($result)==0)
			{
		
	include 'comment.php';
		exit();
		}



$sql = "UPDATE additem SET curdate=NOW()";
		$result = mysqli_query($conn,$sql);
		

$sql="SELECT * FROM additem  WHERE category='IT Infrastructure'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);

$devid = $rows['devid'];

$sql = "UPDATE additem SET devstat='Obsolete', recommnd='This item is due for replacement' WHERE DATEDIFF(endlife,curdate)<= '2 months' && category='IT Infrastructure'";
//$sql = "UPDATE additem SET devstat='Obsolete'";
		$result = mysqli_query($conn,$sql);

$sql="SELECT * FROM additem WHERE category='IT Infrastructure'";
$result=mysqli_query($conn,$sql);

echo "<table width='2500' border='0'color='#FFFFFF' bgcolor='#DFEFFF' align='center' cellpadding='0' cellspacing='1'>
<tr bgcolor='#006699'>
<th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Device ID</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Name</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Manufactured Date</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Device Type</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Manufacturer</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Serial No</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Date Procured</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Department</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Owner</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>End of Life</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Location</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Date Logged</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Status</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Model</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Waranty</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Recommendation</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Logged</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Image</th>
</tr>";

// Define $color=1 
$color="1";

//echo '<table width="400" border="1"  align="center" cellpadding="2" cellspacing="0">';
while($rows=mysqli_fetch_array($result)){

// If $color==1 table row color = #FFC600
if($color==1){

echo "<tr bgcolor='#FFFFFF'>
<td><form action='auth_trac.php' method='post'><input type='hidden' name='email' value='$email' size='15'>
	<input type='hidden' name='pin' value='$pin' size='15'><font face='calibri' size='1'><input type='text' readonly name ='dev_id' style='font-family: Arial; font-size: 8pt' value='".$rows['devid']."' size='8'></font><input type='submit' value='Track' name='list' style='border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family:Arial; font-size:8pt; color:#669999'></form></td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['devname']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['mandate']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['devtype']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['manuname']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['serial']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['prodate']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['deptmnt']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['owner']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['endlife']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['location']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['curdate']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['devstat']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['assmode']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['waranty']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['recommnd']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['loguser']."</td><td><form action='item_img.php' method='post'><font face='calibri' size='1'><input type='hidden' readonly name ='id' style='font-family: Arial; font-size: 8pt' value='".$rows['sn']."' size='8'></font><input type='submit' value='View Image' name='list' style='border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family:Arial; font-size:8pt; color:#669999'></form></td>
</tr>";

// Set $color==2, for switching to other color 
$color="2";
}

// When $color not equal 1, use this table row color 
else {
echo "<tr bgcolor='#DFEFFF'>

<td><form action='auth_trac.php' method='post'><input type='hidden' name='email' value='$email' size='15'>
<input type='hidden' name='pin' value='$pin' size='15'><font face='calibri' size='1'><input type='text' readonly name ='dev_id' style='font-family: Arial; font-size: 8pt' value='".$rows['devid']."' size='8'></font><input type='submit' value='Track' name='list' style='border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family:Arial; font-size:8pt; color:#669999'></form></td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['devname']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['mandate']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['devtype']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['manuname']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['serial']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['prodate']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['deptmnt']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['owner']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['endlife']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['location']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['curdate']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['devstat']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['assmode']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['waranty']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['recommnd']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['loguser']."</td><td><form action='item_img.php' method='post'><font face='calibri' size='1'><input type='hidden' readonly name ='id' style='font-family: Arial; font-size: 8pt' value='".$rows['sn']."' size='8'></font><input type='submit' value='View Image' name='list' style='border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family:Arial; font-size:8pt; color:#669999'></form></td></tr>";




// Set $color back to 1 
$color="1";
}

}


echo '</table>';
echo "<br />";

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
	<table width="20%" bgcolor="#DFEFFF" align="left" cellpadding="4" cellspacing="1">
		<thead>
			<th bgcolor="#D9F1CD"><font face="calibri" size="2"><left>Item Status Description</th>
			<th bgcolor="#D9F1CD"><font face="calibri" size="2"><left>Units</th>
									
		</thead>
		<tbody>
 <?php
 echo "<hr color='#BED6D6' size='4' align='left' width='100%'>";
include 'connect.php';


$query = "SELECT  *, COUNT(sn) FROM additem GROUP BY devtype, devstat HAVING category='IT Infrastructure'"; 

$result = mysqli_query($conn,$query) or die(mysqli_error());

while($row = mysqli_fetch_array($result)){
	
	?>
	
	<tr>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['devstat']; ?><?php echo '&nbsp'; echo $row['devtype']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['COUNT(sn)']; ?></td>
										
				</tr>
	
	
	
	<?php
	
	
	echo "<font face='calibri', size='1'>";

	

?><?php	


}



$query = "SELECT  * FROM additem  WHERE category='IT Infrastructure'"; 

$result = mysqli_query($conn,$query) or die(mysql_error());
$num_rows = mysqli_num_rows($result);
echo "<font face='calibri' size='1'>";
echo '<br>';
echo "&nbsp;&nbsp;";
echo "<b>Total Assets Displayed:</b>";
echo "</font>";

echo "<span style='background-color: #FFFFFF'><font face='calibri' size='2' color='#009900'>";

echo "$num_rows \n";
echo "</font>";
echo '<br><br>';
exit();


?>