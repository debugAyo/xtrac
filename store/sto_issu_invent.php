<div class="w3-row-padding">
<div class="w3-col w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-info-circle fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Issued Inventory</h3>	

<?php 

	include '../link/connect.php';
				
		$sql = "SELECT * FROM req_form WHERE status='Issued'";
		$result = mysqli_query($conn, $sql);

	echo '<table class="table table-bordered" width="100%">
		<tr class="w3-light-blue">  
            <th style="padding:4px; font-size:12px;"><center>Preview</th>
			<th style="padding:4px; font-size:12px;"><center>Request No</th>
			<th style="padding:4px; font-size:12px;"><center>Category</th>
			<th style="padding:4px; font-size:12px;"><center>Specification</th>
			<th style="padding:4px; font-size:12px;"><center>Quantity</th>
			<th style="padding:4px; font-size:12px;" colspan="4"><center>Status</th>
			
                    </tr>';
	 
	$color="1";
     while($row = mysqli_fetch_array($result))  
     {  
		$reqno = $row['req_no'];
		if($color==1){
		 
		 echo '<tr bgcolor="#FFFFFF"> 
		 <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer"><form action="" method="post"><input type="hidden" name="categ" value="'. $row["category"] .'" ><input type="hidden" name="list" value="Search"></form></td>  
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer">'.$row["req_no"].'</td>  
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer">'.$row["category"].'</td>  
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer">'.$row["request_descrp"].'</td>
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:center;cursor:pointer">'.$row["iss_quant"].'</td>
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer">'.$row["status"].'</td> 
		 </tr>'; 
		 
   $color="2";
		}
else {

 echo '<tr bgcolor="#DFEFFF"> 
		 <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer"><form action="" method="post"><input type="hidden" name="categ" value="'. $row["category"] .'" ><input type="hidden" name="list" value="Search"></form></td>  
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer">'.$row["req_no"].'</td>  
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer">'.$row["category"].'</td>  
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer">'.$row["request_descrp"].'</td>
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:center;cursor:pointer">'.$row["iss_quant"].'</td>
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer">'.$row["status"].'</td> 
		 </tr>';
		 
	$color="1";
}

		
	} 
	
	
						 
echo '</table>';
echo "<br />";
?>
</div>
</div>
