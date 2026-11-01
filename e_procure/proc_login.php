<?php //include 'font_script.php';?>
<?php


include 'connect.php';

$result = mysqli_query($conn, "SELECT * FROM procurement_staff WHERE email='$email' && staff_id='$pin'");  
 $myrow=mysqli_fetch_array($result); 
 
echo '<p style="margin-top: 20px; margin-bottom: 0px"><form method="POST" action="../proc_ass_add.php">
	<input type="hidden" name="email" value='.$myrow["email"].' size="15">
	<input type="hidden" name="pin" value='.$myrow["staff_id"].' size="15">
	<input type="submit" value="Add New Asset" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family: Arial; font-size:10pt; color:#669999"></form></p>
	<p style="margin-top: 20px; margin-bottom: 0px"><form method="POST" action="../proc_ass_trac.php">
	<input type="hidden" name="email" value='.$myrow["email"].' size="15">
	<input type="hidden" name="pin" value='.$myrow["staff_id"].' size="15">
	<input type="submit" value="Assets Tracking" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family: Arial; font-size:10pt; color:#669999"></form></p>
	<p style="margin-top: 5px; margin-bottom: 5px"><form method="POST" action="">
	<input type="hidden" name="email" value='.$myrow["email"].' size="15">
	<input type="hidden" name="pin" value='.$myrow["staff_id"].' size="15">
	<font color="#333333">
	<input type="submit" value="Procurement Process" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family: Arial; font-size:10pt; color:#669999"></font></form></p>
	<p style="margin-top: 5px; margin-bottom: 5px"><form method="POST" action="../proc_proc_pol.php">
	<input type="hidden" name="email" value='.$myrow["email"].' size="15">
	<input type="hidden" name="pin" value='.$myrow["staff_id"].' size="15">
	<font color="#333333">
	<input type="submit" value="Procurement Policy" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family: Arial; font-size:10pt; color:#669999"></font></form></p>
	<p style="margin-top: 0; margin-bottom: 5px"><form method="POST" action="../proc_ass_rep.php">
	<input type="hidden" name="email" value='.$myrow["email"].' size="15">
	<input type="hidden" name="pin" value='.$myrow["staff_id"].' size="15">
	<input type="submit" value="Status Reporting" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family: Arial; font-size:10pt; color:#669999"></form></p>
	<p style="margin-top: 0; margin-bottom: 5px"><form method="POST" action="../proc_ass_req.php">
	<input type="hidden" name="email" value='.$myrow["email"].' size="15">
	<input type="hidden" name="pin" value='.$myrow["staff_id"].' size="15">
	<input type="submit" value="Request Form" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family: Arial; font-size:10pt; color:#669999"></form></p>
	<p style="margin-top: 0; margin-bottom: 5px"><form method="POST" action="../proc_gap_analysis.php">
	<input type="hidden" name="email" value='.$myrow["email"].' size="15">
	<input type="hidden" name="pin" value='.$myrow["staff_id"].' size="15">
	<input type="submit" value="Gap Analysis" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family: Arial; font-size:10pt; color:#669999"></form></p>
	<p style="margin-top: 0; margin-bottom: 5px"><form method="POST" action="../proc_need_assess.php">
	<input type="hidden" name="email" value='.$myrow["email"].' size="15">
	<input type="hidden" name="pin" value='.$myrow["staff_id"].' size="15">
	<input type="submit" value="Needs Assessment" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family: Arial; font-size:10pt; color:#669999"></form></p>
	<p style="margin-top: 0; margin-bottom: 5px"><form method="POST" action="../proc_ext_budget.php">
	<input type="hidden" name="email" value='.$myrow["email"].' size="15">
	<input type="hidden" name="pin" value='.$myrow["staff_id"].' size="15">
	<input type="submit" value="Extensive Budgeting" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family: Arial; font-size:10pt; color:#669999"></form></p>
	<p style="margin-top: 0; margin-bottom: 5px"><form method="POST" action="../logout.php">
	<input type="hidden" name="email" value='.$myrow["email"].' size="15">
	<input type="hidden" name="pin" value='.$myrow["staff_id"].' size="15">
	<input type="submit" value="Log Out" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family: Arial; font-size:10pt; color:#669999"></form></p>';			
	
	?>