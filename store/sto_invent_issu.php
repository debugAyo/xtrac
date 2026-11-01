<div class="w3-row-padding">
<div class="w3-col w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-info-circle fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Inventory Distribution</h3>	

			
	<?php 

	
		
		include '../link/connect.php';
			
		$sql = "SELECT * FROM req_form WHERE status='Approved'";
		$result = mysqli_query($conn, $sql);

	echo '<table class="table table-bordered" width="100%">
		<tr class="w3-light-blue">  
            <th style="padding:4px; font-size:12px;"><center>Preview</th>
			<th style="padding:4px; font-size:12px;"><center>Request No</th>
			<th style="padding:4px; font-size:12px;"><center>Category</th>
			<th style="padding:4px; font-size:12px;"><center>Specification</th>
			<th style="padding:4px; font-size:12px;"><center>Quantity</th>
			<th style="padding:4px; font-size:12px;" colspan="3"><center>Manage</th>
			
                    </tr>';
	 
	$color="1";
     while($row = mysqli_fetch_array($result))  
     {  
		$reqno = $row['req_no'];
		if($color==1){
		 
		 echo '<tr> <td bgcolor="#FFFFFF"><center>
		 <form action="" method="post">
		 <input type="checkbox" name="issue" value="1" style="border: 1px solid #008080"></form></td>  
         <td bgcolor="#FFFFFF"><font face="courier", size="1"><left>'.$row["req_no"].'</td>  
         <td bgcolor="#FFFFFF"><font face="courier", size="1"><left>'.$row["category"].'</td>
         <td bgcolor="#FFFFFF"><font face="courier", size="1"><left>'.$row["request_descrp"].'</td>
         <td bgcolor="#FFFFFF"><font face="courier", size="1"><left><form action="sto_update_invent_issue.php" method="post"><input type="text" name="qty" size="1" value="'.$row['quantity'].'"></td>
         <td bgcolor="#FFFFFF"><center><input type="hidden" name="reqno" value="'. $reqno .'" /><input type="hidden" name="remark" value="Issued"/><center><button type="submit" class="login-btn w3-green" onmouseover title="Issued"><i class="fa fa-check fa-fw w3-text-white" style="cursor:pointer;;font-size:12px" onmouseover title="Order"></i></button></form></td>
		 </tr>';  
   
		 
   $color="2";
		}
else {

 echo '<tr bgcolor="#DFEFFF"> 
 <form action="" method="post">
		 <input type="checkbox" name="issue" value="1" style="border: 1px solid #008080"></form></td>  
         <td bgcolor="#FFFFFF"><font face="courier", size="1"><left>'.$row["req_no"].'</td>  
         <td bgcolor="#FFFFFF"><font face="courier", size="1"><left>'.$row["category"].'</td>	 
         <td bgcolor="#FFFFFF"><font face="courier", size="1"><left>'.$row["request_descrp"].'</td>
         <td bgcolor="#FFFFFF"><font face="courier", size="1"><left><form action="sto_update_invent_issue.php" method="post"><input type="text" name="qty" size="1" value="'.$row['quantity'].'"></td>
         <td bgcolor="#FFFFFF"><center><input type="hidden" name="reqno" value="'. $reqno .'" /><input type="hidden" name="remark" value="Issued"/><center><button type="submit" class="login-btn w3-green" onmouseover title="Issued"><i class="fa fa-check fa-fw w3-text-white" style="cursor:pointer;font-size:12px" onmouseover title="Order"></i></button></form></td>
		 </tr>';  

		
		 
	$color="1";
}

		
	} 
	
	
						 
echo '</table>';
echo "<br />";
?>
</div>
</div>