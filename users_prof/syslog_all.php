<div class="w3-row-padding">
<div class="w3-col w3-white w3-padding-large w3-border" id="printableDiv"> 
<h4 class="w3-border-bottom w3-border-grey w3-padding-medium w3-text-light-green w3-hover-text-red">Events Log</h4>
 <?php
include '../link/connect.php';


//$query = "SELECT  * FROM logger WHERE event_date=CURDATE()"; 

$query = "SELECT  * FROM logger ORDER BY event_date DESC, event_time DESC ";
$result = mysqli_query($conn,$query) or die(mysqli_error());
//$num_row = mysqli_num_row($result);
// Print out result
while($row = mysqli_fetch_array($result)){
	
	?>
	<p style="font-family:courier new;font-size:10px">
	<?php echo $row['fname'] . '&nbsp'.  $row['action'] . '&nbsp'. $row['ipaddr'] . '&nbsp'. $row['host'] . '&nbsp'. 'on'. '&nbsp'. $row['event_date']. '&nbsp'. 'at'. '&nbsp'. $row['event_time'] .'<br/>'; ?>
	
	</p>
	
	
	<?php }?>

</div></div>
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
            printWindow.document.write('<html><head><title>Print Div</title>');
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