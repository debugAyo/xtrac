
 
 <php?
$year=$_POST['year'];

$view_type = $_POST['view_type'];

if (!$year) {
echo 'Please Specify the Correct Fiscal Year';
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
	<table width="750" bgcolor="#DFEFFF" align="center" cellpadding="0" cellspacing="1">
	
		<thead>
	

			<th bgcolor="#006699"><font face="Calibri", size="3" color="#FFFFFF"><left>Item Description</th>
			<th bgcolor="#006699"><font face="Calibri", size="3" color="#FFFFFF"><left></th>
			<th bgcolor="#006699"><font face="Calibri", size="3" color="#FFFFFF"><left><?php 
			$cpu='-0 year';$fyear = strtotime ($cpu , strtotime ($year) );
$fyear = date ('Y' , $fyear );echo $fyear;echo '<br>&nbsp;&nbsp;FY Baseline'; ?></th>
			<th bgcolor="#006699"><font face="Calibri", size="3" color="#FFFFFF"><left><?php echo $year .'&nbsp;Budget<br>';?>Cost (<strike>N</strike>)</th>
									
		</thead>
		<tbody>
		
			<tr>
	<td bgcolor="#FFFFFF">
	<p style="margin-left: 10px"><font face="Calibri" size="2" color="#339966">IT Infrastructure (CapEx)</td><td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333">
	<b>NETWORKING DEVICES</b></td><td bgcolor="#FFFFFF">&nbsp;</td><td bgcolor="#FFFFFF">&nbsp;</td>
				
										
				</tr>
 <?php
// echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, COUNT(sn), SUM(price1), SUM(fy_row1) FROM hard_budg GROUP BY fy_row1, price1, budtype HAVING budtype='NETWORKING DEVICES' "; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
//$sub_tot_fy_net=$row['SUM(fy_row1)'];
//$sub_tot_net=$row['SUM(price1)'];
	
	?>
	
	
	<tr>
					<td bgcolor="#FFFFFF">
					<p style="margin-left: 10px">&nbsp;</td>
					<td td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333"><?php echo $row['desc1']; ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['fy_row1'],2); ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['price1'],2); ?></td>
										
				</tr>

	
	
	
	
<?php	

//echo "<br />";
}


?>
 		
		<tr>
	<td bgcolor="#FFFFFF">
	<p style="margin-left: 10px">&nbsp;</td><td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333">
	<b>PC AND SERVERS</b></td><td bgcolor="#FFFFFF">&nbsp;</td><td bgcolor="#FFFFFF">&nbsp;</td>
				
										
				</tr>

			
		
 <?php
// echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1) FROM hard_budg GROUP BY desc1, fy_row1, qty1, rt1, price1, budtype HAVING budtype='PC AND SERVERS' "; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	
	<tr>
					<td bgcolor="#FFFFFF">
					<p style="margin-left: 10px">&nbsp;</td>
					<td td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333"><?php echo $row['desc1']; ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['fy_row1'],2); ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['price1'],2); ?></td>
										
				</tr>


	
	
	
	
<?php	

//echo "<br />";
}


?>
 <?php
 //echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1) FROM hard_budg WHERE year='$year' "; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	
	
	
	
	
<?php	

//echo "<br />";
}


?>


	
		
		<tr>
	<td bgcolor="#FFFFFF">
	<p style="margin-left: 10px">&nbsp;</td><td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333">
	<b>STORAGE AND PRINTERS</b></td><td bgcolor="#FFFFFF"></td><td bgcolor="#FFFFFF"></td>
				
										
				</tr>

			
		
 <?php
// echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1) FROM hard_budg GROUP BY desc1, fy_row1, qty1, rt1, price1, budtype HAVING budtype='STORAGE AND PRINTERS' "; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	
<tr>
					<td bgcolor="#FFFFFF">
					<p style="margin-left: 10px">&nbsp;</td>
					<td td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333"><?php echo $row['desc1']; ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['fy_row1'],2); ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['price1'],2); ?></td>
										
				</tr>

	
	
	
	
<?php	

//echo "<br />";
}


?>


	<tr>
	<td bgcolor="#FFFFFF">
	<p style="margin-left: 10px"><font face="Calibri" size="2" color="#339966">Special Project (CapEx)</td><td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333">
	<b>SPECIAL (CapEx)</b></td><td bgcolor="#FFFFFF">&nbsp;</td><td bgcolor="#FFFFFF">&nbsp;</td>
				
										
				</tr>

			
		
 <?php
// echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1), SUM(fy_row1) FROM sproj_budg GROUP BY desc1, fy_row1, qty1, rt1, price1, budtype, exp_typ1 HAVING budtype='SPECIAL PROJECT'  && exp_typ1='CapEx'"; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
$tot_fy_sproj_budg=$row['SUM(fy_row1)'];
$tot_sproj_budg=$row['SUM(price1)'];
	
	?>
	
	
	<tr>
					<td bgcolor="#FFFFFF">
					<p style="margin-left: 10px">&nbsp;</td>
					<td td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333"><?php echo $row['desc1']; ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['fy_row1'],2); ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['price1'],2); ?></td>
										
				</tr>

	
	
	
	
<?php	

//echo "<br />";
}


?>


 <?php
 //echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1), SUM(fy_row1) FROM hard_budg WHERE year='$year' "; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
$tot_fy_hard_budg =$row['SUM(fy_row1)'];
$tot_hard_budg=$row['SUM(price1)'];
	
	?>
	
	<tr>
			
		<td bgcolor="#EEEEEE"><font face="Calibri" size="2" color="#000000"><b>
		<p align="right" style="margin-top: 10px; margin-bottom: 10px"><?php echo 'TOTAL CAPITAL BUDGET'; ?></b></td>
		<td bgcolor="#EEEEEE"><font face="Calibri", size="2"><p align="right">&nbsp;</td>
		<td bgcolor="#EEEEEE"><font face="Calibri", size="2"><p align="right"><b><?php echo number_format($tot_fy_hard_budg+ $tot_fy_sproj_budg,2); ?></td>
				<td bgcolor="##EEEEEE"><p align="right"><font face="Calibri", size="2"><marquee width="112" behavior="alternate" scrollamount="3">
<b><?php echo number_format($tot_hard_budg+ $tot_sproj_budg,2); ?></marquee></td>
				
										
				</tr>
	
	
	
	
<?php	

//echo "<br />";
}


?>


 
				<tr>
	<td bgcolor="#FFFFFF">
	<p style="margin-left: 10px"><font face="Calibri" size="2" color="#339966">Infrastructure (OpEx)</td><td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333">
	<b>SERVER SOFTWARE LICENSING</b></td><td bgcolor="#FFFFFF">&nbsp;</td><td bgcolor="#FFFFFF">&nbsp;</td>
				
										
				</tr>

 <?php
// echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1), SUM(fy_row1) FROM soft_budg GROUP BY desc1, fy_row1, qty1, rt1, price1, budtype HAVING budtype='SERVER SOFTWARE' "; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	
	<tr>
					<td bgcolor="#FFFFFF">
					<p style="margin-left: 10px">&nbsp;</td>
					<td td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333"><?php echo $row['desc1']; ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['fy_row1'],2); ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['price1'],2); ?></td>
										
				</tr>

	
	
	
	
<?php	

//echo "<br />";
}


?>
 
	
	
	

	
		
			<tr>
	<td bgcolor="#FFFFFF">
	<p style="margin-left: 10px">&nbsp;</td><td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333">
	<b>SECURITY SOFTWARE LICENSING</b></td><td bgcolor="#FFFFFF">&nbsp;</td><td bgcolor="#FFFFFF">&nbsp;</td>
				
										
				</tr>


			
		
 <?php
// echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1), SUM(fy_row1) FROM soft_budg GROUP BY desc1, fy_row1, qty1, rt1, price1, budtype HAVING budtype='SECURITY SOFTWARE' "; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	
	<tr>
					<td bgcolor="#FFFFFF">
					<p style="margin-left: 10px">&nbsp;</td>
					<td td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333"><?php echo $row['desc1']; ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['fy_row1'],2); ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['price1'],2); ?></td>
										
				</tr>

	
	
	
	
<?php	

//echo "<br />";
}


?>
 <?php
 //echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1), SUM(fy_row1) FROM soft_budg WHERE year='$year' "; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	
	
	
	
	
<?php	

//echo "<br />";
}


?>


	
		
			<tr>
	<td bgcolor="#FFFFFF">
	<p style="margin-left: 10px">&nbsp;</td><td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333">
	<b>APPLICATION SOFTWARE LICENSING</b></td><td bgcolor="#FFFFFF">&nbsp;</td><td bgcolor="#FFFFFF">&nbsp;</td>
				
										
				</tr>


			
		
 <?php
// echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1), SUM(fy_row1) FROM soft_budg GROUP BY desc1, fy_row1, qty1, rt1, price1, budtype HAVING budtype='APPLICATION SOFTWARE' "; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	
	<tr>
					<td bgcolor="#FFFFFF">
					<p style="margin-left: 10px">&nbsp;</td>
					<td td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333"><?php echo $row['desc1']; ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['fy_row1'],2); ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['price1'],2); ?></td>
										
				</tr>

	
	
	
<?php	

//echo "<br />";
}


?>
 <?php
 //echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1), SUM(fy_row1) FROM soft_budg WHERE year='$year' "; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
$tot_fy_soft_budg=$row['SUM(fy_row1)'];	
$tot_soft_budg=$row['SUM(price1)'];
	?>
	
	
	
<?php	

//echo "<br />";
}


?>


			<tr>
	<td bgcolor="#FFFFFF">
	<p style="margin-left: 10px">&nbsp;</td><td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333">
	<b>STRUCTURAL</b></td><td bgcolor="#FFFFFF">&nbsp;</td><td bgcolor="#FFFFFF">&nbsp;</td>
				
										
				</tr>


			
		
 <?php
// echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1), SUM(fy_row1) FROM opex_budg GROUP BY desc1, fy_row1, qty1, rt1, price1, budtype HAVING budtype='STRUCTURAL' "; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	
	<tr>
					<td bgcolor="#FFFFFF">
					<p style="margin-left: 10px">&nbsp;</td>
					<td td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333"><?php echo $row['desc1']; ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['fy_row1'],2); ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['price1'],2); ?></td>
										
				</tr>


	
	
	
	
<?php	

//echo "<br />";
}


?>
 <?php
 //echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1), SUM(fy_row1) FROM opex_budg WHERE year='$year' "; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	
	
	
	
	
<?php	

//echo "<br />";
}


?>


	
			<tr>
	<td bgcolor="#FFFFFF">
	<p style="margin-left: 10px">&nbsp;</td><td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333">
	<b>MISCELLANEOUS</b></td><td bgcolor="#FFFFFF">&nbsp;</td><td bgcolor="#FFFFFF">&nbsp;</td>
				
										
				</tr>


			
		
 <?php
// echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1), SUM(fy_row1) FROM opex_budg GROUP BY desc1, fy_row1, qty1, rt1, price1, budtype HAVING budtype='MISCELLANEOUS' "; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	
<tr>
					<td bgcolor="#FFFFFF">
					<p style="margin-left: 10px">&nbsp;</td>
					<td td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333"><?php echo $row['desc1']; ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['fy_row1'],2); ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['price1'],2); ?></td>
										
				</tr>


	
	
	
	
<?php	

//echo "<br />";
}


?>

	<tr>
	<td bgcolor="#FFFFFF">
	<p style="margin-left: 10px">&nbsp;</td><td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333">
	<b>CONSULTING</b></td><td bgcolor="#FFFFFF">&nbsp;</td><td bgcolor="#FFFFFF">&nbsp;</td>
				
										
				</tr>

 <?php
// echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1),SUM(fy_row1) FROM opex_budg GROUP BY desc1, fy_row1, qty1, rt1, price1, budtype HAVING budtype='CONSULTANCY' "; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	
	<tr>
					<td bgcolor="#FFFFFF">
					<p style="margin-left: 10px">&nbsp;</td>
					<td td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333"><?php echo $row['desc1']; ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['fy_row1'],2); ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['price1'],2); ?></td>
										
				</tr>

	
	
	
	
<?php	

//echo "<br />";
}


?>
 
	
	
	

	
		
 <?php
 //echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1), SUM(fy_row1) FROM opex_budg WHERE year='$year' "; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	
	
	
	
	
<?php	

//echo "<br />";
}


?>


	
		
			<tr>
	<td bgcolor="#FFFFFF">
	<p style="margin-left: 10px">&nbsp;</td><td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333">
	<b>MAINTENANCE AND SUPPORT</b></td><td bgcolor="#FFFFFF">&nbsp;</td><td bgcolor="#FFFFFF">&nbsp;</td>
				
										
				</tr>

			
		
 <?php
// echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1), SUM(fy_row1) FROM opex_budg GROUP BY desc1, fy_row1, qty1, rt1, price1, budtype HAVING budtype='MAINTENANCE AND SUPPORT' "; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	
	<tr>
					<td bgcolor="#FFFFFF">
					<p style="margin-left: 10px">&nbsp;</td>
					<td td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333"><?php echo $row['desc1']; ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['fy_row1'],2); ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['price1'],2); ?></td>
										
				</tr>


	
	
	
	
<?php	

//echo "<br />";
}


?>
 <?php
 //echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1), SUM(fy_row1) FROM opex_budg WHERE year='$year' "; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
		
	
	
<?php	

//echo "<br />";
}


?>


 
		<tr>
	<td bgcolor="#FFFFFF">
	<p style="margin-left: 10px"><font face="Calibri" size="2" color="#339966">Personnel Costs</td><td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333">
	<b>PERSONNEL</b></td><td bgcolor="#FFFFFF">&nbsp;</td><td bgcolor="#FFFFFF">&nbsp;</td>
				
										
				</tr>

 <?php
// echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1), SUM(fy_row1) FROM opex_budg GROUP BY desc1, fy_row1, qty1, rt1, price1, budtype HAVING budtype='PERSONNEL' "; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	
	<tr>
					<td bgcolor="#FFFFFF">
					<p style="margin-left: 10px">&nbsp;</td>
					<td td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333"><?php echo $row['desc1']; ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['fy_row1'],2); ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['price1'],2); ?></td>
										
				</tr>


	
	
	
	
<?php	

//echo "<br />";
}


?>
 		

			<tr>
	<td bgcolor="#FFFFFF">
	<p style="margin-left: 10px">&nbsp;</td><td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333">
	<b>LEARNING AND TRAINING</b></td><td bgcolor="#FFFFFF">&nbsp;</td><td bgcolor="#FFFFFF">&nbsp;</td>
				
										
				</tr>

			
		
 <?php
// echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1), SUM(fy_row1) FROM opex_budg GROUP BY desc1, fy_row1, qty1, rt1, price1, budtype HAVING budtype='LEARNING AND TRAINING' "; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	
	
	<tr>
					<td bgcolor="#FFFFFF">
					<p style="margin-left: 10px">&nbsp;</td>
					<td td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333"><?php echo $row['desc1']; ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['fy_row1'],2); ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['price1'],2); ?></td>
										
				</tr>

	
	
	
	
<?php	

//echo "<br />";
}


?>


	<tr>
	<td bgcolor="#FFFFFF">
	<p style="margin-left: 10px"><font face="Calibri" size="2" color="#339966">Special Project (OpEx)</td><td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333">
	<b>SPECIAL OpEx</b></td><td bgcolor="#FFFFFF">&nbsp;</td><td bgcolor="#FFFFFF">&nbsp;</td>
				
										
				</tr>


			
		
 <?php
// echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1), SUM(fy_row1) FROM sproj_budg GROUP BY desc1, fy_row1, qty1, rt1, price1, budtype, exp_typ1 HAVING budtype='SPECIAL PROJECT'  && exp_typ1='OpEx'"; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){

$tot_fy_sproj_budg=$row['SUM(fy_row1)'];

$tot_sproj_opex=$row['SUM(price1)'];
	
	?>
	
	
	<tr>
					<td bgcolor="#FFFFFF">
					<p style="margin-left: 10px">&nbsp;</td>
					<td td bgcolor="#FFFFFF"><font face="Calibri" size="2" color="#333333"><?php echo $row['desc1']; ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['fy_row1'],2); ?></td>
					<td bgcolor="#FFFFFF"><p align="right"><font face="Calibri", size="2"><?php echo number_format($row['price1'],2); ?></td>
										
				</tr>

		
		
<?php	

//echo "<br />";
}


?>

 <?php
 //echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include 'connect.php';


$query = "SELECT  *, SUM(price1), SUM(fy_row1) FROM opex_budg WHERE year='$year' "; 

$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){

$tot_fy_opex_budg=$row['SUM(fy_row1)'];
$tot_opex_budg=$row['SUM(price1)'];
	
	?>
	
	
	<tr>
		<td bgcolor="#EEEEEE"><font face="Calibri", size="2"><p align="right" style="margin-top: 10px; margin-bottom: 10px"><b><?php echo 'TOTAL OPERATING BUDGET'; ?></td>
		<td bgcolor="#EEEEEE"><font face="Calibri", size="2"><p align="right"><b></td>
		<td bgcolor="#EEEEEE"><font face="Calibri", size="2"><p align="right"><b><?php echo number_format($tot_fy_opex_budg + $tot_fy_sproj_budg +$tot_fy_soft_budg ,2); ?></td>
		<td bgcolor="##EEEEEE"><p align="right"><font face="Calibri", size="2"><marquee width="112" behavior="alternate" scrollamount="3">
<b><?php echo number_format($tot_opex_budg+$tot_soft_budg+$tot_sproj_opex,2); ?></marquee></td>
				
										
				</tr>

	
	<tr>
		<td bgcolor="#FFFFFF">&nbsp;</td>
		<td bgcolor="#FFFFFF">&nbsp;</td>
		<td bgcolor="#FFFFFF">&nbsp;</td>
		<td bgcolor="#FFFFFF">&nbsp;</td>
				
										
				</tr>

	
	
	
	
	
	
<?php	

//echo "<br />";
}


?>