<?php

$email = $_POST['email']; $pin = $_POST['pin'];

include 'connect.php';
 
$sql="SELECT * FROM additem  WHERE category='IT Infrastructure'";
$result=mysqli_query($conn,$sql);

  if(mysqli_num_rows($result)==0)
			{
		
	include 'comment.php';
		exit();
		}



$sql = "UPDATE additem SET curdate=NOW()";
		$result = mysqli_query($conn,$sql);
		

//$sql="SELECT * FROM additem  WHERE category='IT Infrastructure'";
$sql="SELECT * FROM additem";

$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);

$devid = $rows['devid'];

//$sql = "UPDATE additem SET devstat='Obsolete', recommnd='Due for Replacement' WHERE DATEDIFF(endlife,curdate)<= '6 months' && category='IT Infrastructure'";

$sql = "UPDATE additem SET devstat='Obsolete', recommnd='Due for Replacement' WHERE DATEDIFF(endlife,curdate)<= '6 months'";

		$result = mysqli_query($conn,$sql);

//$sql="SELECT * FROM additem WHERE category='IT Infrastructure'";

$sql="SELECT * FROM additem";
$result=mysqli_query($conn,$sql);

echo "<table width='1100' border='0'color='#FFFFFF' bgcolor='#DFEFFF' align='center' cellpadding='0' cellspacing='1'>
<tr bgcolor='#006699'>
<th></th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Device ID</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Name</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Category</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Manufacturer</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Serial No</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Department</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>User</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Location</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Status</th><th><p style='margin-left: 10px; margin-right: 2px; margin-top: 10px; margin-bottom: 10px'><font face='HP Simplified' size='1' color='#FFFFFF'>Recommendation</th>
</tr>";

// Define $color=1 
$color="1";

//echo '<table width="400" border="1"  align="center" cellpadding="2" cellspacing="0">';
while($rows=mysqli_fetch_array($result)){

// If $color==1 table row color = #FFC600
if($color==1){

echo "<tr bgcolor='#FFFFFF'>
<td><form action='sto_auth_fetchass.php' method='post'>
	<input type='hidden' name='email' value='<?php echo $email;?>' size='15'>
	<input type='hidden' name='pin' value='<?php echo $pin;?>' size='15'><font face='Calibri' size='1'>
	<input type='checkbox' name='select' value='".$rows['devid']."' style='font-family: Calibri; font-size: 9pt'>| <img border='0' src='images/edit.gif' width='14' height='16'>
	<input type='submit' value='Edit' name='list' style='color: #008080; border: 1px solid #FFFFFF; background-color: #FFFFFF; font-size: 9pt'>
	| <img border='0' src='images/del.gif' width='16' height='17'>
	<input type='hidden' name='email' value='<?php echo $email;?>' size='15'>
	<input type='hidden' name='pin' value='<?php echo $pin;?>' size='15'><font face='Calibri' size='1'>
	<input type='hidden' name='select' value='".$rows['devid']."' style='font-family: Calibri; font-size: 9pt'>
	<input type='submit' value='Delete' name='list' style='color: #008080; border: 1px solid #FFFFFF; background-color: #FFFFFF; font-size: 9pt'></td>
	<td><input type='text' readonly name ='dev_id' style='font-family: Calibri; font-size: 8pt; border: 1px solid #FFFFFF; background-color: #FFFFFF' value='".$rows['devid']."' size='12'></font></td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['devname']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['category']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['manuname']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['serial']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['deptmnt']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['owner']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['location']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['devstat']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['recommnd']."</form></td>
</tr>";

// Set $color==2, for switching to other color 
$color="2";
}

// When $color not equal 1, use this table row color 
else {
echo "<tr bgcolor='#DFEFFF'>
<td><form action='sto_auth_fetchass.php' method='post'>
	<input type='hidden' name='email' value='<?php echo $email;?>' size='15'>
	<input type='hidden' name='pin' value='<?php echo $pin;?>' size='15'><font face='Calibri' size='1'>
	<input type='checkbox' name='select' value='".$rows['devid']."' style='font-family: Calibri; font-size: 9pt'>| <img border='0' src='images/edit.gif' width='14' height='16'>
	<input type='submit' value='Edit' name='list' style='color: #008080; border: 1px solid #DFEFFF; background-color: #DFEFFF; font-size: 9pt'>
	| <img border='0' src='images/del.gif' width='16' height='17'>
	<input type='hidden' name='email' value='<?php echo $email;?>' size='15'>
	<input type='hidden' name='pin' value='<?php echo $pin;?>' size='15'><font face='Calibri' size='1'>
	<input type='hidden' name='select' value='".$rows['devid']."' style='font-family: Calibri; font-size: 9pt'>
	<input type='submit' value='Delete' name='list' style='color: #008080; border: 1px solid #DFEFFF; background-color: #DFEFFF; font-size: 9pt'></td>
<td><input type='text' readonly name ='dev_id' style='font-family: Calibri; font-size: 8pt; border: 1px solid #DFEFFF; background-color: #DFEFFF' value='".$rows['devid']."' size='12'></font></td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['devname']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['category']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['manuname']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['serial']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['deptmnt']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['owner']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['location']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['devstat']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='Calibri' size='1'>".$rows['recommnd']."</form></td>
</tr>";

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


//$query = "SELECT  *, COUNT(sn) FROM additem GROUP BY devtype, devstat ASC HAVING category='IT Infrastructure'"; 

$query = "SELECT  *, COUNT(sn) FROM additem GROUP BY devtype, devstat ASC"; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	<tr>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['devstat']; ?><?php echo '&nbsp'; echo $row['devtype']; ?></td>
					<td bgcolor="#FFFFFF"><font face="calibri", size="1"><?php echo $row['COUNT(sn)']; ?></td>
										
				</tr>
	
	
	
	<?php
	
	//echo "&nbsp;&nbsp;<b>Total</b>&nbsp;&nbsp; ". $row['manuname']. "&nbsp;&nbsp;". $row['devtype']. " = ". $row['COUNT(sn)'];

	//echo "<br />";
	echo "<font face='calibri', size='1'>";
	###############################################################################
	#echo "&nbsp;&nbsp;Number of &nbsp;". $row['devstat']. "&nbsp;". $row['devtype']. " = ". $row['COUNT(sn)'];
	//echo "<hr color='#BED6D6' size='1' align='left' width='100%'>";
	#################################################################################
	
	//echo "<table  width='250' border='0'color='#FFFFFF' bgcolor='#FFFFFF' align='left' cellpadding='0' cellspacing='1'>
//<tr bgcolor='#DFEFFF'>
//<th><p style='margin-left: 10px; margin-right: 2px; margin-top: 1px; margin-bottom: 1px'><font face='Calibri' size='1' color='#000000'>". $row['devstat']. "&nbsp;". $row['devtype']. "</th><th><p style='margin-left: 2px; margin-right: 2px; margin-top: 1px; margin-bottom: 1px'><font face='courier' size='1' color='#000000'><center>". $row['COUNT(sn)'] ."</th>
//</tr>";
//echo "</table>";

	

	
	//echo "<hr color='#BED6D6' size='1' align='left' width='100%'>";
?><?php	

//echo "<br />";
}



//$query = "SELECT  * FROM additem  WHERE category='IT Infrastructure'"; 

$query = "SELECT  * FROM additem"; 

$result = mysqli_query($conn,$query) or die(mysql_error());
$num_rows = mysqli_num_rows($result);
echo "<font face='Calibri' size='1'>";
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