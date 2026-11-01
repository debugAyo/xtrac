<div class="w3-row-padding">
<div class="w3-col w3-white w3-padding-large w3-border">
<h4 class="w3-padding-medium w3-text-light-green w3-hover-text-grey"><i class="fa fa-calendar fa-fw w3-text-light-grey"></i> PHASED BUDGETING</h4>

<?php
$year = isset($_POST['year']) ? $_POST['year'] : '';

if (!$year) {
?>

<form id="phasedBudgForm" action="" method="post" onchange="this.form.submit()">
<input type="hidden" name="list" value="Phased Budgeting">
<p>
<label class="w3-text-grey">Select Fiscal Year:</label>
<select class="w3-input w3-border w3-light-blue" name="year" style="max-width:260px">
<option value="">-- Select Year --</option>
<?php
include '../link/connect.php';
$result = mysqli_query($conn, "SELECT DISTINCT year FROM budgets ORDER BY year ASC");
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['year'] . "'>" . $row['year'] . "</option>";
}
?>
</select>
</p>
</form>

<?php
    exit();
}

include '../link/connect.php';

$query = "SELECT * FROM budgets WHERE year='$year' ORDER BY budcateg ASC";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

if (mysqli_num_rows($result) == 0) {
    echo '<p style="font-size: 16px;">No budget records found for ' . htmlspecialchars($year) . '</p>';
    exit();
}

echo '<table width="100%" align="center" cellpadding="1" cellspacing="2">';
echo '<thead>
<tr class="w3-text-white">
<th bgcolor="#006699" style="font-family:arial;font-size:10px;text-align:center;color:white">Budget Category</th>
<th bgcolor="#006699" style="font-family:arial;font-size:10px;text-align:center;color:white">Item Description</th>
<th bgcolor="#006699" style="font-family:arial;font-size:10px;text-align:center;color:white">Qty</th>
<th bgcolor="#006699" style="font-family:arial;font-size:10px;text-align:center;color:white">Q1 (<strike>N</strike>)</th>
<th bgcolor="#006699" style="font-family:arial;font-size:10px;text-align:center;color:white">Q2 (<strike>N</strike>)</th>
<th bgcolor="#006699" style="font-family:arial;font-size:10px;text-align:center;color:white">Q3 (<strike>N</strike>)</th>
<th bgcolor="#006699" style="font-family:arial;font-size:10px;text-align:center;color:white">Q4 (<strike>N</strike>)</th>
<th bgcolor="#006699" style="font-family:arial;font-size:10px;text-align:center;color:white">Total (<strike>N</strike>)</th>
</tr>
</thead><tbody>';

$grand_total = 0;

while ($row = mysqli_fetch_array($result)) {
    $price = (float) $row['price'];
    $quarter = $price / 4;
    $grand_total += $price;

    echo '<tr>
    <td bgcolor="#FFFFFF" style="font-family:arial;font-size:10px;text-align:left">' . $row['budcateg'] . '</td>
    <td bgcolor="#FFFFFF" style="font-family:arial;font-size:10px;text-align:left">' . $row['desc1'] . '</td>
    <td bgcolor="#FFFFFF" style="font-family:Courier new;font-size:10px;text-align:center">' . $row['qty'] . '</td>
    <td bgcolor="#FFFFFF" style="font-family:Courier new;font-size:10px;text-align:right">' . number_format($quarter, 2) . '</td>
    <td bgcolor="#FFFFFF" style="font-family:Courier new;font-size:10px;text-align:right">' . number_format($quarter, 2) . '</td>
    <td bgcolor="#FFFFFF" style="font-family:Courier new;font-size:10px;text-align:right">' . number_format($quarter, 2) . '</td>
    <td bgcolor="#FFFFFF" style="font-family:Courier new;font-size:10px;text-align:right">' . number_format($quarter, 2) . '</td>
    <td bgcolor="#FFFFFF" style="font-family:Courier new;font-size:10px;text-align:right;color:green"><b>' . number_format($price, 2) . '</b></td>
    </tr>';
}

$vat = $grand_total * (7.5 / 100);
$grand_with_vat = $grand_total + $vat;

echo '<tr>
<td bgcolor="#EEEEEE" style="font-family:arial;font-size:10px;text-align:left;padding:8px" colspan="7"><b>' . $year . ' BUDGET TOTAL (spread evenly across 4 quarters)</b></td>
<td bgcolor="#EEEEEE" style="font-family:Courier new;font-size:10px;text-align:right"><b>' . number_format($grand_total, 2) . '</b></td>
</tr>';

echo '<tr>
<td bgcolor="#FFFFFF" style="font-family:arial;font-size:10px;text-align:left" colspan="7"><b>7.5% VAT</b></td>
<td bgcolor="#FFFFFF" style="font-family:Courier new;font-size:10px;text-align:right;color:blue"><b>' . number_format($vat, 2) . '</b></td>
</tr>';

echo '<tr>
<td bgcolor="#CBDAFG" style="font-family:arial;font-size:10px;text-align:left;padding:8px" colspan="7"><b>GRAND TOTAL (incl. VAT)</b></td>
<td bgcolor="#CBDAFG" style="font-family:Courier new;font-size:10px;text-align:right"><b>' . number_format($grand_with_vat, 2) . '</b></td>
</tr>';

echo '</tbody></table>';

?>
<br />
<button class="login-btn" onclick="history.back()">Back</button>
</div>
</div>
