
 <div class="w3-row-padding" id="printableDiv">
<div class="w3-threequarter w3-padding-large w3-white w3-border"> 
<h4 class="w3-padding-medium w3-text-light-green w3-hover-text-grey"><i class="fa fa-user w3-text-grey w3-hover-text-light-green"></i> USER'S DETAILS</h4>
	

		
			
 <?php
$id = $_POST['id'];

include '../link/connect.php';

$query = "SELECT  * FROM user_login WHERE id=?"; 

$stmt = mysqli_prepare($conn,$query);
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt) or die(mysqli_error());
$result = mysqli_stmt_get_result($stmt);

while($row = mysqli_fetch_array($result)){

	
	?>
			<p align="center">
			<table width="100%" cellpadding="1" cellspacing="2">
			<tr><th></th><td><img src="../users_prof/<?php echo $row['img']; ?>"  style="width:30%;float:right;border-radius:5px"></td></tr>
			<hr>
			<tr><td colspan="2"><hr style="border: 8px solid green;border-radius: 2px;"></td></tr>
			<tr><th  style="font-family:arial;font-size:14px;text-align:left;width:auto;color:black">Name</th><td bgcolor="#FFFFFF" style="font-family:arial;font-size:14px;text-align:left;width:auto"><?php echo $row['title']  .'&nbsp'. $row['fname']; ?></td></tr>
			<tr><th  style="font-family:arial;font-size:14px;text-align:left;width:auto;color:black">Phone No.</th><td td bgcolor="#FFFFFF" style="font-family:arial;font-size:14px;text-align:left;width:auto"><?php echo $row['phone']; ?></td></tr>
			<tr><th  style="font-family:arial;font-size:14px;text-align:left;width:auto;color:black">Email</th><td bgcolor="#FFFFFF" style="font-family:arial;font-size:14px;text-align:left;width:auto"><?php echo $row['email']; ?></td></tr>
			<tr><th  style="font-family:arial;font-size:14px;text-align:left;width:auto;color:black">Username</th><td td bgcolor="#FFFFFF" style="font-family:arial;font-size:14px;text-align:left;width:auto"><?php echo $row['username']; ?></td></tr>
			<tr><th  style="font-family:arial;font-size:14px;text-align:left;width:auto;color:black">Department</th><td td bgcolor="#FFFFFF" style="font-family:arial;font-size:14px;text-align:left;width:auto"><?php echo $row['dept']; ?></td></tr>
			<tr><th  style="font-family:arial;font-size:14px;text-align:left;width:auto;color:black">Level</th><td bgcolor="#FFFFFF" style="font-family:arial;font-size:14px;text-align:left;width:auto"><?php echo $row['access_prvlg']; ?></td></tr>
			<tr><th  style="font-family:arial;font-size:14px;text-align:left;width:auto;color:black">ID</th><td bgcolor="#FFFFFF" style="font-family:arial;font-size:14px;text-align:left;width:auto"><?php echo $row['staff_id']; ?></td></tr>	
	

	
	
	
	
<?php	


}


?>

</table></p>
</div>
<div class="w3-quarter"></div>
</div>
<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-border w3-padding-large">
<button class="login-btn" onclick="printDiv('printableDiv')">Print</button>
    <script>
        function printDiv(divId) {
            // Get the div content using its ID
            var divContent = document.getElementById(divId).innerHTML;
            
            // Create a new window to print the content
            var printWindow = window.open('', '', 'height=1000,width=1000');
            
            // Write the HTML content to the new window
            printWindow.document.write('<html><head><title>Details of User</title>');
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