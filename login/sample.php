<div class="w3-row-padding">

<div class="w3-threequarter w3-border w3-padding-large">
			

 <form method="post" action="auth_update_tick.php" enctype="multipart/form-data">

										<h4><center>Ticket Management</center> <hr></h4>
									
											
										<label style="font-size: 14px"><b>Ticket No</b></label>
										<input type="text" class="" name="ticketno"  placeholder="TICKET NUMBER" value="<?php echo $tick_no;?>" style="font-size: 14px">
									
										<label style="font-size: 14px"><b>Subject</b></label>
										
										<input type="text" class="" name="tick_name" readonly  placeholder="INCIDENT TITLE" value="<?php echo $row['tickname']; ?>" style="font-size: 14px">
									
																
<?php
									
/*$query="SELECT new_ticket.id, new_ticket.ticket_no, new_ticket.tickname, new_ticket.call_name, new_ticket.call_phone, new_ticket.priority, new_ticket.impact, new_ticket.descrp, new_ticket.tickassign_name, new_ticket.tickassign_phone, new_ticket.opendate, new_ticket.call_address, new_ticket.spec, artisan_reg.name, artisan_reg.phone, artisan_reg.email, artisan_reg.spec, artisan_reg.date, artisan_reg.street_address, artisan_reg.status FROM new_ticket INNER JOIN artisan_reg ON new_ticket.spec = artisan_reg.spec WHERE new_ticket.call_name='$cal_name' && new_ticket.ticket_no='$ticketno' && artisan_reg.street_address LIKE '%$cal_address%' && new_ticket.status='Awaiting Response' && artisan_reg.status='Available'";*/

include '../link/connect.php';
$query="SELECT new_ticket.*, artisan_reg.pro_name,artisan_reg.pro_phone,artisan_reg.pro_email,artisan_reg.spec,artisan_reg.pro_locat,artisan_reg.pro_city,artisan_reg.pro_state,artisan_reg.status FROM new_ticket INNER JOIN artisan_reg ON new_ticket.spec = artisan_reg.spec WHERE new_ticket.call_name=? && new_ticket.ticket_no=? && new_ticket.status='Awaiting Response' && artisan_reg.status='Available'";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 'ss', $cal_name, $ticketno);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
while ($row = mysqli_fetch_array($result))
{	

					
?>
										<label style="font-size: 14px"><b>Affected Service</b></label>
										<select class="" name="int_service" style="font-size: 14px">
										<option style="box-sizing: inherit" value="" style="font-size: 14px"><?php echo $row['spec']; ?></option>
										</select>
						
										<label style="font-size: 14px"><b>Ticket Opened Date</b></label>
										
						   				<input type="text" id="datepicker" readonly class="" name="open_dt" value="<?php echo date('Y-m-d H:i:s') ; ?>" style="font-size: 14px">
										
										<label style="font-size: 14px"><b>Incident Documentation</b></label>
										
										<textarea rows="3" class="" name="desc" cols="20" style="font-size: 14px" readonly><?php echo $row['descrp'];?>
										
										</textarea></span>
										<label style="font-size: 14px"><b>Professional Recommendations</b></label>
										
										<textarea rows="5" class="" name="pro_rec" cols="20" style="font-size: 14px">								
										</textarea></span>
										
										<label style="font-size: 14px"><b>Impact</b></label>
																			
										<select size="1" class="" name="impct" style="font-size: 14px">
										<option><?php echo $row['impact'];?></option>
										</select>
										<label style="font-size: 14px"><b>Priority</b></label>
										
										<select size="1" class="" name="prior" style="font-size: 14px">
										<option><?php echo $row['priority'];?></option>
										</select>
									
																	
										<input type="hidden" class="" readonly readonly name="stat" value="Opened">
									
										<input type="hidden" class="" name="page_id" s placeholder="INCIDENT TITLE" value="<?php echo $row['id'];?>">
									
										<center><button type="submit" name="submit" >Add</button><button type="reset" name="submit">Reset</button><button type="submit" name="submit" >Delete</button></center>
									</form></tr>
									<?php 
											}	
												 
									  			 
									  					
									  echo '<br>'; 
									  ?>
</div>			
<div class="w3-quarter"></div>
</div>
     
