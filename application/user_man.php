<div class="w3-ro">
<div class="w3-threequarter w3-padding-large">
<form action="" method="POST">
<button type="submit" name="list" value="Manage User" class="login-btn w3-light-blue"><i class="fa fa-pencil"></i> Manage User</button><button type="submit" name="list" value="Users Settings" class="login-btn w3-light-blue"><i class="fa fa-user"></i> Create New User</button></form>
</div></div>
 <div class="w3-row-padding" id="printableDiv">
<div class="w3-col w3-padding-large w3-white w3-border"> 
<h4 class="w3-padding-medium w3-text-light-green w3-hover-text-grey"><i class="fa fa-user w3-text-grey w3-hover-text-light-green"></i> USER MANAGEMENT CONSOLE</h4>
	
	<table width="100%" align="center" cellpadding="1" cellspacing="2">
	
		<thead class="w3-text-white w3-blue">
			<th  style="font-family:arial;font-size:11px;text-align:center;width:auto;color:white;padding:8px" colspan=3>Editor</th>
			<th  style="font-family:arial;font-size:11px;text-align:center;width:auto;color:white">Name</th>
			<th  style="font-family:arial;font-size:11px;text-align:center;width:auto;color:white">Phone No.</th>
			<th  style="font-family:arial;font-size:11px;text-align:center;width:auto;color:white">Email</th>
			<th  style="font-family:arial;font-size:11px;text-align:center;width:auto;color:white">Username</th>
			<th  style="font-family:arial;font-size:11px;text-align:center;width:auto;color:white">Department</th>
			<th  style="font-family:arial;font-size:11px;text-align:center;width:auto;color:white">Level</th>
									
		</thead>
		<tbody>
		
			
 <?php

include '../link/connect.php';

$query = "SELECT  * FROM user_login ORDER BY date_reg DESC"; 

$result = mysqli_query($conn,$query) or die(mysqli_error());

while($row = mysqli_fetch_array($result)){

	
	?>
	
	
	<tr>
					<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:11px;text-align:left;width:auto">
					<form action="" method="post"><input type="hidden" name="list" value="Edit User"><input type="hidden" name="id" value="<?php echo $row['id']; ?>"><button type="submit" name="submit" style="background-color:white;border:0px;cursor:pointer"><i class="fa fa-edit fa-2x w3-text-blue"></i></button></form></td>
					<td bgcolor="#FFFFFF" style="font-family:arial;font-size:11px;text-align:left;width:auto">
					<form action="" method="post"><input type="hidden" name="list" value="Delete User"><input type="hidden" name="id" value="<?php echo $row['id']; ?>"><button type="submit" name="submit" style="background-color:white;border:0px;cursor:pointer"><i class="fa fa-trash-o fa-2x w3-text-red"></i></button></form></td>
					<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:11px;text-align:left;width:auto">
					<form action="" method="post"><input type="hidden" name="list" value="Preview User"><input type="hidden" name="id" value="<?php echo $row['id']; ?>"><button type="submit" name="submit" style="background-color:white;border:0px;cursor:pointer"><i class="fa fa-search fa-2x w3-text-blue"></i></button></form></td>
					<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:11px;text-align:left;width:auto"><?php echo $row['fname']; ?></td>
					<td td bgcolor="#FFFFFF" style="font-family:courier new;font-size:11px;text-align:left;width:auto"><?php echo $row['phone']; ?></td>
					<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:11px;text-align:left;width:auto"><?php echo $row['email']; ?></td>
					<td td bgcolor="#FFFFFF" style="font-family:courier new;font-size:11px;text-align:left;width:auto"><?php echo $row['username']; ?></td>
					<td td bgcolor="#FFFFFF" style="font-family:courier new;font-size:11px;text-align:left;width:auto"><?php echo $row['dept']; ?></td>
					<td bgcolor="#FFFFFF" style="font-family:courier new;font-size:11px;text-align:left;width:auto"><?php echo $row['access_prvlg']; ?></td>
										
				</tr>

	
	
	
	
<?php	


}


?>

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