
<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-building-o fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Add Facility</h3>	
<form action="" enctype="multipart/form-data" method="post">
<input type="hidden" name="list"  value="Buildings Form">
<label for "asset-cat">Asset Category</label> 
<input type="text" name="ass_cat"  value="<?php echo $list;?>" readonly>					
<label for "item-id">Item ID</label> 
<input type="text" name="dev_id" class="w3-text-grey" placeholder="ASSET ID">
<label for "dev-name">Asset Name</label>								
<input type="text" name="dev_name" class="w3-text-grey" placeholder="Asset Name">
<label for "dev-image">Asset Image (Max 800kb)</label>
<input type="file" class="file" name="ass_pic" class="w3-text-grey">
<p><label for "ass-type">Asset Type</label>									
<select  name="dev_type" class="w3-text-grey">
	<option>Select Asset Type</option>
	<option>Classroom</option>
	<option>Equipment House</option>
	<option>Guest House</option>
	<option>Hall</option>"
	<option>Lecture Theatre</option>
	<option>Library Apartment</option>
	<option>Office Complex</option>
	<option>Plaza</option>
	<option>Residential</option>
	<option>Warehouse</option>
	<option>Worship Centre</option>
	</select></p>
<label for "reg-no">Registration Number</label>
<input type="text" name="reg_num" class="w3-text-grey" placeholder="Facility Registration No.">
<p><label for "struc-type">Structural Type</label>
<select  name="dev_mod" class="w3-text-grey">
	<option>Select Facility Model</option>
	<option>Bungalow</option>
	<option>Duplex</option>
	<option>Mansion</option>
	<option>2 Storeys</option>
	<option>3 Storeys</option>
	<option>4 Storeys</option>
	<option>5 Storeys</option>
	<option>6 Storeys</option>
	<option>7 Storeys</option>
	<option>8 Storeys</option>
	<option>9 Storeys</option>
	<option>10 Storeys</option>
	<option>High Rising</option>
	</select></p>
<label for "struc-type">Purchased Price (<s><span lang="EN-GB">N</span></s>)</label>
<input type="text" name="purprice" class="w3-text-grey" placeholder="Facility Purchase Price" >
<label for "warrant">Warranty [year]</label>	
<input type="number" class="date" name="warnty" class="w3-text-grey" placeholder="Warranty">								
<label for "contractor">Contractor</label>
<input type="text" name="man_name" class="w3-text-grey" placeholder="Contractor Name" >
<label for "asset-locat">Location </label>
<input type="text" name="location" class="w3-text-grey" placeholder="Facility Location">
<label for "build-year">Built Year </label>
<input  type="date" class="date" name="mk_year" class="w3-text-grey">
<label for "comm-date">Procurement / Commission Date</label>
<input  type="date" class="date" name="prodt" class="w3-text-grey">
<label for "cur-owner">Current Owner</label>						
<input type="text" name="owner" class="w3-text-grey" placeholder="Current Owner">
<label for="department">Department</label>
<select name="dept" class="w3-text-grey">
<option value="">Select Department</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM department");
while($row = mysqli_fetch_array($result)) {

?>
<option><?php echo $row["dept"];?></option>
<?php

}
?>
</select></p>
<p><label for "end-life">Useful Life (Years)</label>	
<select  name="cpu" class="w3-text-grey">
	<option>Select Useful Life Limit</option>
	<option>0 year</option>
	<option>1 year</option>
	<option>2 years</option>
	<option>3 years</option>
	<option>4 years</option>
	<option>5 years</option>
	<option>6 years</option>
	<option>7 years</option>
	<option>8 years</option>
	<option>9 years</option>
	<option>10 years</option>
	<option>15 years</option>
	<option>20 years</option>
	<option>25 years</option>
	<option>30 years</option>
	<option>35 years</option>
	<option>40 years</option>
	<option>50 years</option>
	<option>60 years</option>
	<option>70 years</option>
	<option>80 years</option>
	<option>90 years</option>
	<option>100 years</option>
	<option>150 years</option>
	<option>200 years</option>
	<option>250 years</option>
	<option>300 years</option>
	</select></p>
<input type="hidden" name="log_usr" class="w3-text-grey" value="<?php echo $fname;?>">
<p><label for "status">Status</label>	
<select name="dev_stat" class="w3-text-grey" >
	<option>Select Facility Status</option>
	<option>Active</option>
	<option>Faulty</option>
	<option>Obsolete</option>
	<option>Redundant</option>
	</select></p>
<p align="center"><button type="submit" name="submit" class="login-btn w3-light-green w3-hover-green" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></p></form>
</div>
<div class="w3-quarter"></div>
</div>