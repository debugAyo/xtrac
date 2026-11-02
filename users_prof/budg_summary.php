
 
 <?php
$year=$_POST['year'];

$list = $_POST['list'];

if (!$year) {
echo 'Please Specify the Correct Fiscal Year';
exit();
}



 ?>
 
 <div class="w3-row-padding">
<div class="w3-col w3-padding-large w3-white w3-border"  id="printableDiv"> 
<h4 class="w3-padding-medium w3-text-light-green w3-hover-text-grey"><i class="fa fa-briefcase w3-text-light-grey w3-hover-text-light-green"></i> SUMMARIZED BUDGET</h4>
	
	<table width="100%" bgcolor="#DFEFFF" align="center" cellpadding="0" cellspacing="1">
	
		<thead class="w3-text-white">
	
			<th bgcolor="#006699" style="font-family:arial;font-size:10px;text-align:center;color:white">Budget Category</th>		
			<th bgcolor="#006699" style="font-family:arial;font-size:10px;text-align:center;color:white">Item Description</th>
			<th bgcolor="#006699" style="font-family:arial;font-size:10px;text-align:center;color:white">
			<?php $cpu='-0 year';$fyear = strtotime ($cpu , strtotime ($year) );$fyear = date ('Y' , $fyear );echo $fyear;echo '<br>&nbsp;&nbsp;FY Baseline'; ?></th>
			<th bgcolor="#006699" style="font-family:arial;font-size:10px;text-align:center;color:white">Quantity</th>
			<th bgcolor="#006699" style="font-family:arial;font-size:10px;text-align:center;color:white">Rate (<strike>N</strike>)</th>
			<th bgcolor="#006699" style="font-family:arial;font-size:10px;text-align:center;color:white"><?php echo $year .'&nbsp;Budget<br>';?>Cost (<strike>N</strike>)</th>
							
		</thead>
		<tbody>
		
			
 <?php
// echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include '../link/connect.php';


//$query = "SELECT  *, SUM(price1) FROM budgets GROUP BY desc1, fy_row1, qty1, rt1, price1, budtype HAVING year='$year' && budtype='NETWORKING DEVICES' "; 

//$query = "SELECT  *, SUM(price) FROM budgets GROUP BY desc1, fy_row, qty, rate, price, budtype HAVING year='$year' ORDER BY budcateg ASC"; 
$query = "SELECT  * FROM budgets HAVING year=? ORDER BY budcateg ASC"; 
$stmt = mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt,'s',$year);
mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
$result = mysqli_stmt_get_result($stmt);
//$num_row = mysqli_num_row($result);
// Print out result

//$row = mysqli_fetch_array($result);
//if (!$row) {
//echo 'result not available';
//exit();
//}
while($row = mysqli_fetch_array($result)){
	
	?>
	
	
	<tr>
					<td bgcolor="#FFFFFF" style="font-family:arial;font-size:10px;text-align:left"><?php echo $row['budcateg']; ?></td>
					<td bgcolor="#FFFFFF" style="font-family:arial;font-size:10px;text-align:left"><?php echo $row['desc1']; ?></td>
					<td bgcolor="#FFFFFF" style="font-family:Courier new;font-size:10px;text-align:right"><?php echo number_format($row['fy_row'],2); ?></td>
					<td bgcolor="#FFFFFF" style="font-family:Courier new;font-size:10px;text-align:center"><?php echo $row['qty']; ?></td>
					<td bgcolor="#FFFFFF" style="font-family:Courier new;font-size:10px;text-align:right"><?php echo number_format($row['rate'],2); ?></td>
					<td bgcolor="#FFFFFF" style="font-family:Courier new;font-size:10px;text-align:right"><?php echo number_format($row['price'],2); ?></td>
					

										
				</tr>
	
	
	
	
<?php	

//echo "<br />";
}


?>
 		
	



 <?php
 //echo "<hr color='#BED6D6' size='4' align='center' width='80%'>";
include '../link/connect.php';


$query = "SELECT  *, SUM(price), SUM(fy_row) FROM budgets WHERE year=? "; 
$stmt = mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt,'s',$year);
mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
$result = mysqli_stmt_get_result($stmt);
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){

$tot_fy_budgets=$row['SUM(fy_row)'];
$tot_budgets=$row['SUM(price)'];
	
	?>
	
	
	
	
<?php	

//echo "<br />";
}


?>

<?php
$sub_tot_fy = $tot_fy_budgets;
$sub_tot = $tot_budgets;
$vat = ($sub_tot) * (7.5/100);
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
<div class="w3-half">
<button class="login-btn" onclick="printDiv('printableDiv')">Print</button>
    <script>
        function printDiv(divId) {
            // Get the div content using its ID
            var divContent = document.getElementById(divId).innerHTML;
            
            // Create a new window to print the content
            var printWindow = window.open('', '', 'height=1000,width=1000');
            
            // Write the HTML content to the new window
            printWindow.document.write('<html><head><title>Summarized Budget</title>');
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