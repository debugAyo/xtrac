<div class="w3-row-padding">
<div class="w3-col w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-info-circle fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Requisition List</h3>	

			<?php
		
			$search=$_POST['search'];
						
			include '../link/connect.php';	
				
			$sql = "SELECT * FROM req_form WHERE req_no LIKE '%".$search."%' OR staffid LIKE '%".$search."%'";
			     
			$result = mysqli_query($conn, $sql);
	echo '<table class="table table-bordered" width="100%">
		<tr class="w3-light-blue">  
            <th style="padding:4px; font-size:12px;"><center>Preview</th>
			<th style="padding:4px; font-size:12px;"><center>Request No</th>
			<th style="padding:4px; font-size:12px;"><center>Category</th>
			<th style="padding:4px; font-size:12px;"><center>Description</th>
			<th style="padding:4px; font-size:12px;"><center>Quantity</th>
			<th style="padding:4px; font-size:12px;" colspan="4"><center>Manage</th>
			
                    </tr>';
	 
	$color="1";
     while($row = mysqli_fetch_array($result))  
     {  
		$reqno = $row['req_no'];
		if($color==1){
		 
		 echo '<tr bgcolor="#FFFFFF"> 
		 <td style="padding:4px; font-size:11px;"><form action="" method="post"><input type="hidden" name="categ" value="'. $row["category"] .'" ><input type="hidden" name="dev_name" value="'. $row["request_descrp"] .'" ><input type="hidden" name="list" value="Search"><button type="submit" class="w3-white"><i class="fa fa-search fa-fw w3-text-green" style="cursor:pointer" onmouseover title="View"></i></button></form></td>  
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer">'.$row["req_no"].'</td>  
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer">'.$row["category"].'</td>  
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer">'.$row["request_descrp"].'</td>
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:center;cursor:pointer">'.$row["quantity"].'</td> 
         <td style="padding:4px; font-size:11px;"><form action="sto_update_req_stat.php" method="post"><input type="hidden" name="reqno" value="'. $reqno .'" ><input type="hidden" name="remark" value="To be Ordered"><button type="submit" class="w3-white"><i class="fa fa-cart-plus fa-fw w3-text-blue" style="cursor:pointer" onmouseover title="Order"></i></button></form></td> 
         <td style="padding:4px; font-size:11px;"><form action="sto_update_req_stat.php" method="post"><input type="hidden" name="reqno" value="'. $reqno .'" ><input type="hidden" name="remark" value="Denied"><button type="submit" class="w3-white"><i class="fa fa-close fa-fw w3-text-red" style="cursor:pointer" onmouseover title="Denied"></i></button></form></td>
         <td style="padding:4px; font-size:11px;"><form action="sto_update_req_stat.php" method="post"><input type="hidden" name="reqno" value="'. $reqno .'" ><input type="hidden" name="remark" value="Approved"><button type="submit" class="w3-white"><i class="fa fa-check-circle fa-fw w3-text-green" style="cursor:pointer" onmouseover title="Approved"></i></button></form></td>
		 </tr>'; 
		 
   $color="2";
		}
else {

 echo '<tr bgcolor="#DFEFFF"> 
 <td style="padding:4px; font-size:11px;"><form action="" method="post"><input type="hidden" name="categ" value="'. $row["category"] .'" ><input type="hidden" name="dev_name" value="'. $row["request_descrp"] .'" ><input type="hidden" name="list" value="Search"><button type="submit" class="w3-white"><i class="fa fa-search fa-fw w3-text-green" style="cursor:pointer" onmouseover title="View"></i></button></form></td>  
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer">'.$row["req_no"].'</td>  
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer">'.$row["category"].'</td>  
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:left;cursor:pointer">'.$row["request_descrp"].'</td>
         <td style="padding:4px; font-size:11px;font-family:courier new;text-align:center;cursor:pointer">'.$row["quantity"].'</td> 
         <td style="padding:4px; font-size:11px;"><form action="sto_update_req_stat.php" method="post"><input type="hidden" name="reqno" value="'. $reqno .'" ><input type="hidden" name="remark" value="To be Ordered"><button type="submit" class="w3-white"><i class="fa fa-cart-plus fa-fw w3-text-blue" style="cursor:pointer" onmouseover title="Order"></i></button></form></td> 
         <td style="padding:4px; font-size:11px;"><form action="sto_update_req_stat.php" method="post"><input type="hidden" name="reqno" value="'. $reqno .'" ><input type="hidden" name="remark" value="Denied"><button type="submit" class="w3-white"><i class="fa fa-close fa-fw w3-text-red" style="cursor:pointer" onmouseover title="Denied"></i></button></form></td>
         <td style="padding:4px; font-size:11px;"><form action="sto_update_req_stat.php" method="post"><input type="hidden" name="reqno" value="'. $reqno .'" ><input type="hidden" name="remark" value="Approved"><button type="submit" class="w3-white"><i class="fa fa-check-circle fa-fw w3-text-green" style="cursor:pointer" onmouseover title="Approved"></i></button></form></td>
		 </tr>';
		 
	$color="1";
}

		
	} 
	
	
						 
echo '</table>';
echo "<br />";
?>
</div>
</div>