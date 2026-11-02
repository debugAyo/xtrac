
 
<?php
$year=$_POST['year'];

$list = $_POST['list'];

if (!$year) {
echo 'Please Specify the Correct Fiscal Year';
exit();
}

 

 ?>
 
 <div class="w3-row-padding" id="printableDiv">
<div class="w3-col w3-padding-large w3-white w3-border"> 
<h4 class="w3-padding-medium w3-text-light-green w3-hover-text-grey"><i class="fa fa-briefcase w3-text-light-grey w3-hover-text-light-green"></i> COMPREHENSIVE BUDGET</h4>
	
	<table width="100%" align="center" cellpadding="1" cellspacing="2">
	
		<thead class="w3-text-white">
			<th bgcolor="#006699" style="font-family:arial;font-size:10px;text-align:center;width:auto;color:white">Budget Category</th>
			<th bgcolor="#006699" style="font-family:arial;font-size:10px;text-align:center;width:auto;color:white">Items Description</th>
			<th bgcolor="#006699" style="font-family:arial;font-size:10px;text-align:center;width:auto;color:white"><?php 
			$cpu='-0 year';$fyear = strtotime ($cpu , strtotime ($year) );$fyear = date ('Y' , $fyear );echo $fyear;echo '<br>&nbsp;&nbsp;FY Baseline'; ?></th>
			<th bgcolor="#006699" style="font-family:arial;font-size:10px;text-align:center;width:auto;color:white">Qty</th>
			<th bgcolor="#006699" style="font-family:arial;font-size:10px;text-align:center;width:auto;color:white">Rate (<strike>N</strike>)</th>
			<th bgcolor="#006699" style="font-family:arial;font-size:10px;text-align:center;width:auto;color:white"><?php echo $year .'&nbsp;Budget<br>';?>Cost (<strike>N</strike>)</th>
									
		</thead>
		<tbody>
		
			<tr><td class="w3-text-grey" colspan="4" style="font-size:10px">IT Infrastructure (CapEx)</td></tr>
			<tr><td colspan="4"style="font-size:12px"><b>HARDWARE BUDGET</b></td>
				
										
				</tr>
 <?php

include '../link/connect.php';


//$query = "SELECT  * FROM budgets GROUP BY fy_row, price, budtype HAVING budcateg='Hardware Budget' ORDER BY budtype ASC"; 
$query = "SELECT  * FROM budgets HAVING budcateg='Hardware Budget' ORDER BY budtype ASC"; 

$result = mysqli_query($conn,$query) or die(mysqli_error());

while($row = mysqli_fetch_array($result)){

	
	?>
	
	
	<tr>
					<td bgcolor="#FFFFFF" style="font-family:arial;font-size:10px;text-align:left;width:auto"><?php echo $row['budtype']; ?></td>
					<td td bgcolor="#FFFFFF" style="font-family:arial;font-size:10px;text-align:left;width:auto"><?php echo $row['desc1']; ?></td>
					<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right;width:auto"><?php echo number_format($row['fy_row'],2); ?></td>
					<td td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:center;width:auto"><?php echo $row['qty']; ?></td>
					<td td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right;width:auto"><?php echo number_format($row['rate'],2); ?></td>
					<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right;width:auto"><?php echo number_format($row['price'],2); ?></td>
										
				</tr>

	
	
	
	
<?php	


}


?>

<?php

include '../link/connect.php';


$query = "SELECT  *, SUM(price), SUM(fy_row) FROM budgets WHERE year=? && budcateg='Hardware Budget'"; 
$stmt = mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt,'s',$year);
mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
$result = mysqli_stmt_get_result($stmt);

while($row = mysqli_fetch_array($result)){
$tot_fy_budgets_a =$row['SUM(fy_row)'];
$tot_budgets_a=$row['SUM(price)'];
	
	?>
	
	<tr>
			
		<td bgcolor="#EEEEEE" style="font-family:arial;font-size:10px;text-align:left" colspan="2"><b><?php echo 'TOTAL IT INFRASTRUCTURE CapEx'; ?></b></td>
		<td bgcolor="#EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"><b><?php echo number_format($tot_fy_budgets_a,2); ?></td>
		<td bgcolor="#EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"></td>
<td bgcolor="#EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"></td>
		<td bgcolor="##EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"><b><?php echo number_format($tot_budgets_a,2); ?></td>
				
										
				</tr>
	
	
	
	
<?php	

}


?>

 		
	<tr><td class="w3-text-grey" colspan="4" style="font-size:10px">Special Project (CapEx)</td></tr>
			<tr><td colspan="4" style="font-size:12px"><b>SPECIAL PROJECTS</b></td>
	</tr>

			
		
 <?php

include '../link/connect.php';


//$query = "SELECT  * FROM budgets GROUP BY desc1, fy_row, qty, rate, price, budtype, budcateg HAVING budcateg='Special Projects Budget' AND budtype='CapEx' ORDER BY budtype ASC"; 

$query = "SELECT  * FROM budgets HAVING budcateg='Special Projects Budget' AND budtype='CapEx' ORDER BY budtype ASC"; 
$result = mysqli_query($conn,$query) or die(mysqli_error());

while($row = mysqli_fetch_array($result)){

	
	?>
	
	
	<tr>
					<td bgcolor="#FFFFFF" style="font-family:arial;font-size:10px;text-align:left"><?php echo $row['budtype']; ?></td>
					<td td bgcolor="#FFFFFF" style="font-family:arial;font-size:10px;text-align:left"><?php echo $row['desc1']; ?></td>
					<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right"><?php echo number_format($row['fy_row'],2); ?></td>
					<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:center"><?php echo $row['qty']; ?></td>
					<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right"><?php echo number_format($row['rate'],2); ?></td>
					<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right"><?php echo number_format($row['price'],2); ?></td>
										
				</tr>

	
	
	
	
<?php	

}


?>


 <?php

include '../link/connect.php';


$query = "SELECT  *, SUM(price), SUM(fy_row) FROM budgets WHERE budcateg='Special Projects Budget' AND budtype='CapEx' AND year=? "; 
$stmt = mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt,'s',$year);
mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
$result = mysqli_stmt_get_result($stmt);

while($row = mysqli_fetch_array($result)){
$tot_fy_budgets_b =$row['SUM(fy_row)'];
$tot_budgets_b=$row['SUM(price)'];
	
	?>
	
	<tr>
			
		<td bgcolor="#EEEEEE" style="font-family:arial;font-size:10px;text-align:left" colspan="2"><b><?php echo 'TOTAL SPECIAL PROJECT CapEx'; ?></b></td>
		<td bgcolor="#EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"><b><?php echo number_format($tot_fy_budgets_b,2); ?></td>
		<td bgcolor="#EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"></td>
<td bgcolor="#EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"></td>
		<td bgcolor="##EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"><b><?php echo number_format($tot_budgets_b,2); ?></td>
			
										
				</tr>
	
	
	
	
<?php	

}


?>


	<tr><td class="w3-text-grey" colspan="4" style="font-size:10px">Software (OpEx)</td></tr>
			<tr><td colspan="4" style="font-size:12px"><b>SERVER SOFTWARE LICENSING</b></td></tr>

 <?php

include '../link/connect.php';
//$query = "SELECT  * FROM budgets GROUP BY fy_row, price, budtype HAVING budcateg='Software Budget' ORDER BY budtype ASC"; 
$query = "SELECT  * FROM budgets HAVING budcateg='Software Budget' ORDER BY budtype ASC"; 

$result = mysqli_query($conn,$query) or die(mysqli_error());

while($row = mysqli_fetch_array($result)){
	
	?>
	
	
	<tr>
		<td bgcolor="#FFFFFF" style="font-family:arial;font-size:10px;text-align:left"><?php echo $row['budtype']; ?></td>
		<td td bgcolor="#FFFFFF" style="font-family:arial;font-size:10px;text-align:left"><?php echo $row['desc1']; ?></td>
		<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right"><?php echo number_format($row['fy_row'],2); ?></td>
		<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:center"><?php echo $row['qty']; ?></td>
		<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right"><?php echo number_format($row['rate'],2); ?></td>
		<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right"><?php echo number_format($row['price'],2); ?></td>						
	</tr>

	
	
	
	
<?php	

}


?>
 

 <?php

include '../link/connect.php';


//$query = "SELECT  *, SUM(price), SUM(fy_row) FROM budgets WHERE year='$year' && budcateg='Software Budget'"; 
$query = "SELECT  *, SUM(price), SUM(fy_row) FROM budgets WHERE year=? && budcateg='Software Budget'"; 
$stmt = mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt,'s',$year);
mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
$result = mysqli_stmt_get_result($stmt);

while($row = mysqli_fetch_array($result)){
$tot_fy_budgets_x =$row['SUM(fy_row)'];
$tot_budgets_x=$row['SUM(price)'];

	
	?>
	
	<tr>
		<td bgcolor="#EEEEEE" style="font-family:arial;font-size:10px;text-align:left" colspan="2"><b><?php echo 'TOTAL SOFTWARE OpEx'; ?></b></td>
		<td bgcolor="#EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"><b><?php echo number_format($tot_fy_budgets_x,2); ?></td>
		<td bgcolor="#EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"></td>
<td bgcolor="#EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"></td>
		<td bgcolor="##EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"><b><?php echo number_format($tot_budgets_x,2); ?></td>
						
				</tr>
	
	
	
	
<?php	

}


?>



	<tr><td class="w3-text-grey" colspan="4" style="font-size:10px">Operational (OpEx)</td></tr>
			<tr><td colspan="4" style="font-size:12px"><b>OPERATIONAL EXPENSES</b></td></tr>

 <?php

include '../link/connect.php';
//$query = "SELECT  * FROM budgets GROUP BY fy_row, price, budtype HAVING budcateg='Software Budget' ORDER BY budtype ASC"; 
$query = "SELECT  * FROM budgets HAVING budcateg='Operational Expenses' ORDER BY budtype ASC"; 

$result = mysqli_query($conn,$query) or die(mysqli_error());

while($row = mysqli_fetch_array($result)){
	
	?>
	
	
	<tr>
		<td bgcolor="#FFFFFF" style="font-family:arial;font-size:10px;text-align:left"><?php echo $row['budtype']; ?></td>
		<td td bgcolor="#FFFFFF" style="font-family:arial;font-size:10px;text-align:left"><?php echo $row['desc1']; ?></td>
		<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right"><?php echo number_format($row['fy_row'],2); ?></td>
		<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:center"><?php echo $row['qty']; ?></td>
		<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right"><?php echo number_format($row['rate'],2); ?></td>
		<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right"><?php echo number_format($row['price'],2); ?></td>						
	</tr>

	
	
	
	
<?php	

}


?>
 

 <?php

include '../link/connect.php';


//$query = "SELECT  *, SUM(price), SUM(fy_row) FROM budgets WHERE year='$year' && budcateg='Software Budget'"; 
$query = "SELECT  *, SUM(price), SUM(fy_row) FROM budgets WHERE year=? && budcateg='Operational Expenses'"; 
$stmt = mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt,'s',$year);
mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
$result = mysqli_stmt_get_result($stmt);

while($row = mysqli_fetch_array($result)){
$tot_fy_budgets_y =$row['SUM(fy_row)'];
$tot_budgets_y=$row['SUM(price)'];

	
	?>
	
	<tr>
		<td bgcolor="#EEEEEE" style="font-family:arial;font-size:10px;text-align:left" colspan="2"><b><?php echo 'TOTAL OTHER EXPENSES OpEx'; ?></b></td>
		<td bgcolor="#EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"><b><?php echo number_format($tot_fy_budgets_y,2); ?></td>
		<td bgcolor="#EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"></td>
<td bgcolor="#EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"></td>
		<td bgcolor="##EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"><b><?php echo number_format($tot_budgets_y,2); ?></td>
						
				</tr>
	
	
	
	
<?php	

}


?>

	
	<tr><td class="w3-text-grey" colspan="4" style="font-size:10px">Special Project (OpEx)</td></tr>
			<tr><td colspan="4" style="font-size:12px"><b>SPECIAL PROJECTS</b></td>
	</tr>

			
		
 <?php

include '../link/connect.php';


//$query = "SELECT  * FROM budgets GROUP BY desc1, fy_row, qty, rate, price, budtype, budcateg HAVING budcateg='Special Projects Budget' AND budtype='CapEx' ORDER BY budtype ASC"; 

$query = "SELECT  * FROM budgets HAVING budcateg='Special Projects Budget' AND budtype='OpEx' ORDER BY budtype ASC"; 
$result = mysqli_query($conn,$query) or die(mysqli_error());

while($row = mysqli_fetch_array($result)){

	
	?>
	
	
	<tr>
					<td bgcolor="#FFFFFF" style="font-family:arial;font-size:10px;text-align:left"><?php echo $row['budtype']; ?></td>
					<td bgcolor="#FFFFFF" style="font-family:arial;font-size:10px;text-align:left"><?php echo $row['desc1']; ?></td>
					<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right"><?php echo number_format($row['fy_row'],2); ?></td>
					<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:center"><?php echo $row['qty']; ?></td>
					<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right"><?php echo number_format($row['rate'],2); ?></td>
					<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right"><?php echo number_format($row['price'],2); ?></td>
										
				</tr>

	
	
	
	
<?php	

}


?>

<?php

include '../link/connect.php';


$query = "SELECT  *, SUM(price), SUM(fy_row) FROM budgets WHERE budcateg='Special Projects Budget' AND budtype='OpEx' AND year=? "; 
$stmt = mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt,'s',$year);
mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
$result = mysqli_stmt_get_result($stmt);

while($row = mysqli_fetch_array($result)){
$tot_fy_budgets_z =$row['SUM(fy_row)'];
$tot_budgets_z=$row['SUM(price)'];
	
	?>
	
	<tr>
			
		<td bgcolor="#EEEEEE" style="font-family:arial;font-size:10px;text-align:left" colspan="2"><b><?php echo 'TOTAL SPECIAL PROJECT OpEx'; ?></b></td>
		<td bgcolor="#EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"><b><?php echo number_format($tot_fy_budgets_z,2); ?></td>
		<td bgcolor="#EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"></td>
<td bgcolor="#EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"></td>
		<td bgcolor="##EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"><b><?php echo number_format($tot_budgets_z,2); ?></td>
			
										
				</tr>
	
	
	
	
<?php	

}


?>
<?php
$sub_tot_fy = $tot_fy_budgets_a + $tot_fy_budgets_b + $tot_fy_budgets_x + $tot_fy_budgets_y + $tot_fy_budgets_z;
$sub_tot = $tot_budgets_a + $tot_budgets_b + $tot_budgets_x + $tot_budgets_y + $tot_budgets_z;
$vat = ($tot_budgets_a + $tot_budgets_b + $tot_budgets_x + $tot_budgets_y + $tot_budgets_z) * (7.5/100);
$grand_tot = $sub_tot + $vat;
?>
<tr>
<td style="font-family:arial;font-size:10px;text-align:left;colspan:6; padding:6px" >SUMMARY</td>
</tr>

<tr>
<td bgcolor="#FFFFFF" style="font-family:arial;font-size:10px;text-align:left" colspan="2"><b><?php echo 'BUDGETS SUB-TOTAL'; ?></b></td>
<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right"><b><?php echo number_format($sub_tot_fy,2); ?></td>
<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right"></td>
<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right"></td>
<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right;color:green"><b><?php echo number_format($sub_tot,2); ?></td>
</tr>

<tr>
<td bgcolor="#FFFFFF" style="font-family:arial;font-size:10px;text-align:left" colspan="4"><b><?php echo '7.5% VAT'; ?></b></td>
<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right"></td>
<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:10px;text-align:right;color:blue"><b><?php echo number_format($vat,2); ?></td>
</tr>

<tr>
<td bgcolor="#EEEEEE" style="font-family:arial;font-size:10px;text-align:left;padding:8px" colspan="4"><b><?php echo 'GRAND-TOTAL'; ?></b></td>
<td bgcolor="#EEEEEE" style="font-family:courier new;font-size:10px;text-align:right"></td>
<td bgcolor="##CBDAFG" style="font-family:courier new;font-size:10px;text-align:right"><b><?php echo number_format($grand_tot,2); ?></td>
</tr>
</table>
</div>
</div>
<div class="w3-row-padding">
<div class="w3-col w3-white w3-border w3-padding-large">
<button class="login-btn" onclick="printDiv('printableDiv')">Print</button>
    <script>
        function printDiv(divId) {
            // Get the div content using its ID
            var divContent = document.getElementById(divId).innerHTML;
            
            // Create a new window to print the content
            var printWindow = window.open('', '', 'height=1000,width=1000');
            
            // Write the HTML content to the new window
            printWindow.document.write('<html><head><title>Comprehensive Budget</title>');
            printWindow.document.write('</head><body>');
            printWindow.document.write(divContent);
            printWindow.document.write('</body></html>');
            
            // Close the document to signal completion of content loading
            printWindow.document.close();
            
            // Wait for the new window content to load and then trigger print
            printWindow.onload = function () {
                printWindow.focus(); // Focus the new window
                printWindow.print(); // Trigger print dialog
                printWindow.close(); // Close the print window after printing
            };
        }
    </script>
</div>
</div>