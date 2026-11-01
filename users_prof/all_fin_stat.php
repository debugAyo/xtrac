<div class="w3-row-padding">
<div class="w3-col w3-padding-large w3-white w3-border"> 
<h4 class="w3-border-bottom w3-border-grey w3-padding-medium w3-text-light-green w3-hover-text-grey"><i class="fa fa-calculator w3-text-grey w3-hover-text-light-green"></i> Assets Depreciation Listing</h4>
	<table width="100%" bgcolor="#DFEFFF" align="center" cellpadding="0" cellspacing="1">
		<tr class="w3-light-blue w3-text-black" style="font-size:10px; font-family:arial">
			<th><left>Device ID</th>
			<th><left>Account Ref</th>
			<th><left>Item Name</th>
			<th><left>Date Procured</th>
			<th><left>Procured Cost</th>
			<th><left>Salvage Cost</th>
			<th><left>Asset Location</th>
			<th><left>Depreciation Charge/Annum</th>

									
		</tr>
		<tbody>
		
		<?php


include '../link/connect.php';

$sql="SELECT * FROM finance_acct";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result) ==0)
			{
		//echo 'Information Updated';
		//include 'item_prev.php';
	include 'comment.php';
		exit();
		}

$sql="SELECT * FROM finance_acct";
$result=mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)){


	
	?>
	
	<tr>
					<td bgcolor="#FFFFFF"><font face="courier new", size="1"><?php echo $row['devid']; ?></td>
					<td bgcolor="#FFFFFF"><font face="courier new", size="1"><?php echo $row['acct_ref']; ?></td>
					<td bgcolor="#FFFFFF"><font face="courier new", size="1"><?php echo $row['devname']; ?></td>
					<td bgcolor="#FFFFFF"><font face="courier new", size="1"><?php echo $row['prodate']; ?></td>
					<td bgcolor="#FFFFFF"><font face="courier new", size="1"><?php echo $row['purprice']; ?></td>
					<td bgcolor="#FFFFFF"><font face="courier new", size="1"><?php echo $row['salvage_cost']; ?></td>
					<td bgcolor="#FFFFFF"><font face="courier new", size="1"><?php echo $row['location']; ?></td>
					<td bgcolor="#FFFFFF"><font face="courier new", size="1"><?php echo number_format($row['deprecat_rate'],2); ?></td>
										
				</tr>
				
	
	
	
<?php	

//echo "<br />";
}


?>
</table>
</div>
</div>