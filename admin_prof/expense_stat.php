
<div class="w3-row-padding ">
<div class="w3-col w3-border w3-padding-xlarge">
<h4 class="w3-center">Expense Statement</h4>

<?php

if (isset ($_POST['submit']) ) {

$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
$fin_year= $_POST['fin_year'];

}

//SELECT player, SUM(score) as sum_score FROM game GROUP BY player;

include '../link/connect.php';

//$result = mysqli_query($conn, "SELECT *, SUM(tax_inclusive) as sum_total, SUM(tax_exclusive) as sum_total FROM income_acct WHERE fin_year = '$fin_year' AND date BETWEEN '$date1' AND '$date2'");

$query =  "SELECT *, SUM(tax_inclusive) as sub_total, SUM(tax_exclusive) as sum_total, SUM(tax) as sum_tax FROM expense_acct GROUP BY acct_num HAVING fin_year LIKE '%2023-06%' ORDER BY fin_year ASC";	
$result = mysqli_query($conn,$query) or die(mysqli_error());
if(mysqli_num_rows($result) > 0) {


echo '<table width="100%" class="w3-border" cellspacing="0" bgcolor="#FFF" bordercolor="#DDD">
			<tr  style="font-family: arial; font-size:12px">
			<td  width="auto" class="w3-orange w3-border-bottom w3-padding-medium"><b>Month</b></td>
			<td  width="auto" class="w3-orange w3-border-bottom w3-padding-medium"><b>Account Type</center></td>
			<td  width="auto" class="w3-orange w3-border-bottom w3-padding-medium"><b>TaxInc Price</center></td>
			<td  width="auto" class="w3-orange w3-border-bottom w3-padding-medium"><b>TaxExc Price</center></td>
			<td  width="auto" class="w3-orange w3-border-bottom w3-padding-medium"><b>Taxation</center></td>
			</tr>';

while($row = mysqli_fetch_array($result)) {


 $invdate = $row['invoice_date'];
    $newDate = date('l jS \ F Y', strtotime($invdate));


echo '<tr style="font-family: arial; font-size:11px">
            <td class="w3-border-bottom w3-padding-medium">'.$newDate.'</td>
            <td class="w3-border-bottom w3-padding-medium">'.$row['acct_num'].' </td>
			<td class="w3-border-bottom w3-padding-medium" style="font-family: arial;margin-right: 2%">'.number_format($row['tax_inclusive'],2).' </td>
			<td class="w3-border-bottom w3-padding-medium" style="font-family: arial;margin-right: 2%">'.number_format($row['tax_exclusive'],2).' </td>
			<td class="w3-border-bottom w3-padding-medium" style="font-family: arial;margin-right: 2%">'.number_format($row['sum_tax'],2).' </td>
            </tr>';
            
          


}

}	
echo '</table>';

$query =  "SELECT *, SUM(tax_inclusive) as sub_total, SUM(tax_exclusive) as sum_total, SUM(tax) as sum_tax FROM expense_acct WHERE fin_year LIKE '%2023-06%' ORDER BY fin_year ASC";	
$result = mysqli_query($conn,$query) or die(mysqli_error());
if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_array($result)) {

$total_tax = $row['sub_total'] - $row['sum_total'];
$sumtotal = $row['sum_total'];
$subtotal = $row['sub_total'];

echo '<table width="100%" class="w3-border" cellspacing="0" bgcolor="#DDD" bordercolor="#DDD">
			<tr style="font-family: arial; font-size:11px">
			<td class="w3-border-bottom w3-padding-medium" colspan="2">The breakdown of expense for '.$row['fin_year'].'
			<td  class="w3-border-bottom w3-padding-medium" style="font-family: arial;margin-right: 2%">'.number_format($subtotal,2).' </td>
			<td  class="w3-border-bottom w3-padding-medium" style="font-family: arial;margin-right: 2%"">'.number_format($sumtotal,2).' </td>
			<td  class="w3-border-bottom w3-padding-medium" style="font-family: arial;margin-right: 2%"">'.number_format($total_tax,2).' </td>

	</tr></table>';
	}
	}
?>
</div>

</div>