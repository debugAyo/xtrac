<div class="w3-row" id="printableDiv">
<div class="w3-col w3-white w3-padding-large w3-border">
<h3 class="w3-text-light-green w3-hover-text-grey"><i class="fa fa-file-invoice fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Invoice Details Preview</h3>

<?php

include '../link/connect.php';

$sql = "SELECT sn, devid, vendor, deldate, orderno, invoice FROM invoice_ass";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    include 'comment.php';
    exit();
}

echo "<table width='100%' >
<tr class='w3-light-blue'>
<th style='padding:2px; font-size:10px;'>Device ID</th><th style='padding:2px; font-size:10px'>Vendor</th><th style='padding:2px; font-size:10px'>Delivery Date</th><th style='padding:2px; font-size:10px'>Order No</th><th style='padding:2px; font-size:10px'>Invoice No</th>
</tr>";

$color = "1";

while ($rows = mysqli_fetch_array($result)) {

    if ($color == 1) {
        $bgcolor = "#FFFFFF";
        $color = "2";
    } else {
        $bgcolor = "#DFEFFF";
        $color = "1";
    }

    echo "<tr bgcolor='" . $bgcolor . "'>
    <td><form action='' method='post'>
    <input type='hidden' name='list' value='Track Asset ID' onchange='this.form.submit()'>
    <input type='hidden' readonly name='dev_id' value='" . $rows['devid'] . "' style='font-size:10px'><button type='submit' class='login-btn w3-white w3-text-blue'><i class='fa fa-search'></i></button></form></td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>" . $rows['vendor'] . "</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>" . $rows['deldate'] . "</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>" . $rows['orderno'] . "</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>" . $rows['invoice'] . "</td>
    </tr>";
}

echo '</table>';
echo "<br />";

$query = "SELECT * FROM invoice_ass";
$result = mysqli_query($conn, $query);
$num_rows = mysqli_num_rows($result);

echo "<b>Total Invoice Records Displayed:</b> $num_rows \n";
echo '<br><br>';

?>
</div>
</div>
<br />
<div class="w3-row-padding">
<div class="w3-col">
<button class="login-btn" onclick="printDiv('printableDiv')">Print</button>
    <script>
        function printDiv(divId) {
            var divContent = document.getElementById(divId).innerHTML;
            var printWindow = window.open('', '', 'height=1000,width=1000');
            printWindow.document.write('<html><head><title>Print Div</title>');
            printWindow.document.write('</head><body>');
            printWindow.document.write(divContent);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.onload = function () {
                printWindow.focus();
                printWindow.print();
                printWindow.close();
            };
        }
    </script>
</div>
</div>
</div>
