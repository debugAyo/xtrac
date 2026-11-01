<div class="w3-row-padding">
<div class="w3-col w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-info-circle fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Requisition Status</h3>	


<?php 
	

		include '../link/connect.php';
				
		$sql = "SELECT * FROM req_form ";
		$result = mysqli_query($conn, $sql);
						
	
       echo '<table class="table table-bordered" width="100%">
		<tr class="w3-light-blue">  
            <th style="padding:4px; font-size:12px;"><center>Preview</th>
			<th style="padding:4px; font-size:12px;"><center>Request No</th>
			<th style="padding:4px; font-size:12px;"><center>Category</th>
			<th style="padding:4px; font-size:12px;"><center>Specification</th>
			<th style="padding:4px; font-size:12px;"><center>Issued Quantity</th>
			<th style="padding:4px; font-size:12px;" colspan="4"><center>Status</th>
			
                    </tr>';

		 
	$color="1";
	
	  while($row = mysqli_fetch_array($result))  
     {  
		$reqno = $row['req_no'];
		$status = $row['status'];
		if($color==1){

		 echo '<tr bgcolor="#FFFFFF"> 
		 <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer"><form action="" method="post"><input type="hidden" name="categ" value="'. $row["category"] .'" ><input type="hidden" name="dev_name" value="'. $row["request_descrp"] .'" ><input type="hidden" name="list" value="Search"><button type="submit" class="w3-white"><i class="fa fa-search fa-fw w3-text-green" style="cursor:pointer" onmouseover title="View"></i></button></form></td>  
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer">'.$row["req_no"].'</td>  
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer">'.$row["category"].'</td>  
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer">'.$row["request_descrp"].'</td>
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:center;cursor:pointer">'.$row["iss_quant"].'</td>
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer" class="w3-hover-text-red">'.$row["status"].'</td> 
        </tr></div>';  
   		
		$color="2";
}	
else {

 echo '<tr bgcolor="#DFEFFF"> 
		 <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer"><form action="" method="post"><input type="hidden" name="categ" value="'. $row["category"] .'" ><input type="hidden" name="dev_name" value="'. $row["request_descrp"] .'" ><input type="hidden" name="list" value="Search"><button type="submit" class="w3-white"><i class="fa fa-search fa-fw w3-text-green" style="cursor:pointer" onmouseover title="View"></i></button></form></td>  
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer">'.$row["req_no"].'</td>  
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer">'.$row["category"].'</td>  
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer">'.$row["request_descrp"].'</td>
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:center;cursor:pointer">'.$row["iss_quant"].'</td>
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer" class="w3-hover-text-red">'.$row["status"].'</td> 
        </tr>';

$color="1";
}

		
	} 
	
	
						 
echo '</table>';
echo "<br />";
?>
</div>
</div>
