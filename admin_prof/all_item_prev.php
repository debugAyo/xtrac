<div class="w3-row"  id="printableDiv">
<div class="w3-row">
<div class="w3-col w3-white w3-padding-large w3-border">
<h3 class="w3-text-light-green w3-hover-text-grey"><i class="fa fa-laptop fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  All Assets Preview</h3>	

<?php

include '../link/connect.php';
 
$sql="SELECT * FROM additem";
$result=mysqli_query($conn,$sql);

  if(mysqli_num_rows($result)==0)
			{
		
	include 'comment.php';
		exit();
		}

$sql = "UPDATE additem SET curdate=NOW()";
		$result = mysqli_query($conn,$sql);

$sql="SELECT * FROM additem";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);

$devid = $rows['devid'];

$sql = "UPDATE additem SET devstat='Obsolete', recommnd='This item is due for replacement' WHERE DATEDIFF(endlife,curdate)<= '2 months' && category='IT Infrastructure'";
$result = mysqli_query($conn,$sql);

$sql="SELECT * FROM additem";
$result=mysqli_query($conn,$sql);

echo "<table width='100%' >
<tr class='w3-light-blue'>
<th style='padding:2px; font-size:10px;'>Device ID</th><th style='padding:2px; font-size:10px'>Name</th><th style='padding:2px; font-size:10px'>Manufactured Date</th><th style='padding:2px; font-size:10px'>Device Type</th><th style='padding:2px; font-size:10px'>Serial No</th><th style='padding:2px; font-size:10px'>Date Procured</th><th style='padding:2px; font-size:10px'>Department</th><th style='padding:2px; font-size:10px'>Owner</th><th style='padding:2px; font-size:10px'>End of Life</th><th  style='padding:2px; font-size:10px'>Location</th><th style='padding:2px; font-size:10px'>Date Logged</th><th style='padding:2px; font-size:10px'>Status</th>
</tr>";

// Define $color=1 
$color="1";

while($rows=mysqli_fetch_array($result)){

// If $color==1 table row color = #FFC600
if($color==1){

echo "<tr bgcolor='#FFFFFF'>
<td><form action='' method='post'>
<input type='hidden' name='list' value='Track Asset ID' onchange='this.form.submit()'>
	<input type='hidden' readonly name ='dev_id' value='".$rows['devid']."' style='font-size:10px'><button type='submit' class='login-btn w3-white w3-text-blue'><i class='fa fa-search'></i></button></form></td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['devname']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['mandate']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['devtype']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['serial']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['prodate']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['deptmnt']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['owner']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['endlife']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['location']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['curdate']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['devstat']."</td>
</tr>";

// Set $color==2, for switching to other color 
$color="2";
}

// When $color not equal 1, use this table row color 
else {
echo "<tr bgcolor='#DFEFFF'>
<td><form action='' method='post'>
<input type='hidden' name='list' value='Track Asset ID' onchange='this.form.submit()'>
<input type='hidden' readonly name ='dev_id' value='".$rows['devid']."' style='font-size:10px'><button type='submit' class='login-btn w3-light-blue w3-text-white'><i class='fa fa-search'></i></button></form></td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['devname']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['mandate']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['devtype']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['serial']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['prodate']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['deptmnt']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['owner']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['endlife']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['location']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['curdate']."</td><td><p style='margin-left: 5px; margin-right: 1px; margin-top: 2px; margin-bottom: 1px'><font face='calibri' size='1'>".$rows['devstat']."</td></tr>";

// Set $color back to 1 
$color="1";
}

}


echo '</table>';
echo "<br />";

?>
									
</div>
</div>
<br />
<div class="w3-row-padding w3-white w3-border">
<div class="w3-half w3-padding-large">	
 <?php
 
include '../link/connect.php';

$sql = "SELECT *, COUNT(sn) AS details FROM additem GROUP BY devtype, devstat ORDER BY devtype ASC"; 
$result=mysqli_query($conn,$sql);

	echo '<table width="100%" border="0px">
	<tr class="w3-light-blue w3-padding-large">
	<th style="padding:8px; font-size:10px; text-align:left">Item Status Description</th>
	<th style="padding:2px; font-size:10px; text-align:center">Units</th>
	</tr>';

while ($row = mysqli_fetch_array($result)) {
	
	
echo '<td style="padding:2px; font-size:10px; text-align:left">' . $row['devstat'] . '&nbsp' . $row['devtype'] .'</td>
	  <td style="padding:2px; font-size:10px; text-align:center">' . $row['details'] . '</td></tr>';
	
}
echo '</table>';

$query = "SELECT  * FROM additem"; 
$result = mysqli_query($conn,$query) or die(mysql_error());
$num_rows = mysqli_num_rows($result);

echo '<br>';
echo "&nbsp;";
echo "<b>Total Assets Displayed:</b>";
echo "</font>";

echo "<span style='background-color: #FFFFFF'>";

echo "$num_rows \n";
echo "</font>";
echo '<br><br>';
//exit();


?>
</div>
<div class="w3-half w3-padding-large">
<?php

include '../link/connect.php';

$sql = "SELECT *, COUNT(sn) AS details FROM additem  GROUP BY category ORDER BY devtype ASC"; 
$result=mysqli_query($conn,$sql);

echo '<table width="100%" border="0px">
	<tr class="w3-light-blue w3-padding-large">
	<th style="padding:8px; font-size:10px; text-align:left">Asset Category</th>
	<th style="padding:2px; font-size:10px; text-align:center">Units</th>
	</tr>';

while ($row = mysqli_fetch_array($result)) {
	
	if($row['category'] == '') {
		$itemcateg = 'NaN';
	}
	else {
		
		$itemcateg = $row['category'];
	}
	
echo '<td style="padding:2px; font-size:10px; text-align:left">' . $itemcateg . '</td>
	  <td style="padding:2px; font-size:10px; text-align:center">' . $row['details'] . '</td></tr>';
	
}
echo '</table>';

$query = "SELECT  * FROM additem "; 
$result = mysqli_query($conn,$query) or die(mysql_error());
$num_rows = mysqli_num_rows($result);

echo '<br>';
echo "&nbsp;&nbsp;";
echo "<b>Total Items in the category:</b>";
echo "&nbsp;"."$num_rows \n";
echo "</font>";
echo '<br><br>';
//exit();


?>


</div>
</div>
</div>
<div class="w3-row-padding">
<div class="w3-col ">
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