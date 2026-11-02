<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-info-circle fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Daily Financial Reporting</h3>	
<p class="w3-black w3-text-light-grey w3-padding-large" style="border-radius: 4px"><b>DAILY EXPENSE REPORT</b></p>

<form id="myForm"  action="" method="POST">	
<input type="hidden" name="list" value="Expense" onchange="this.form.submit()">
<select class="body-parag w3-text-grey" name="proj_id" id="proj_id"onchange="this.form.submit()">
<option value="">Select Project ID</option>
<?php
$proj_id=$_POST['proj_id'];
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM projects");
while($row = mysqli_fetch_array($result)) {

?>
<option value="<?php echo $row['id'];?>"><?php echo $row["projectid"];?></option>
<?php

}
?>
</select>
</form>
<script>
$(document).ready(function() {
  $('#proj_id').change(function() {
    $('#myForm').submit();
  });
});
</script>
</p>

<label></label>
<form action="" method="POST">	
    
<input type="date" name="doc_date" class="date" onmouseover title="Document Date">
     
<label></label>
<p>
<select class="body-parag w3-text-grey" id="task" name="task">
<option value="">Select Tasks</option>
<?php
$proj_id=$_POST['proj_id'];
require_once "../link/connect.php";

$stmt = mysqli_prepare($conn, "SELECT * FROM projschedules WHERE projectid=?");
mysqli_stmt_bind_param($stmt, 's', $proj_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
while($row = mysqli_fetch_array($result)) {
	
	/*$start_time = $row['start'];
	$end_time = $row['end'];*/

?>
<option value="<?php echo $row['id'];?>"><?php echo $row["tasks"]?></option>
<?php

}
?>
</select>
</p>
<p><label for="start-date" class="w3-text-grey">Default Allocation</label>
<select class="body-parag w3-text-grey" id="allocation" name="allocation" oninput="calculate()">
</select></p>
<h5 class="w3-light-grey w3-text-black  w3-padding-large">LABOUR COST</h5>
<label for "labour" class="w3-text-grey">Man hour</label>
<input type="number" name="man_hour" class="date" id="man_hour" onmouseover title="Labour" oninput="calculate()" value="0">
<label for "cost-labour" class="w3-text-grey">Cost per hour (N)</label>
<input type="number" name="cost_labor" class="date" id="cost_labour" onmouseover title="Labour Rate" oninput="calculate()" value="0">
<label for "cost-labour" class="w3-text-grey">Actual cost (N)</label>
<input type="text" name="actual_cost" class="date" id="actual_cost" onmouseover title="Actual Cost of Labour" oninput="calculate()" value="0" readonly>
<label for "mat_supportdoc" class="w3-text-grey">Labour Supporting Document</label>
<input type="file" class="file" name="labour_doc">
<h5 class="w3-light-grey w3-text-black  w3-padding-large">MATERIAL COST</h5>
<label for "labour" class="w3-text-grey">Description</label>
<textarea col="4" row="4" name="description"></textarea>
<label for "labour" class="w3-text-grey">Quantity</label>
<input type="number" name="mat_qty" class="date" id="mat_qty" onmouseover title="Quantity" oninput="calculate()" value="0">
<label for "cost-labour" class="w3-text-grey">Rate (N)</label>
<input type="number" name="mat_rate" class="date" id="mat_rate" onmouseover title="Rate (N)" oninput="calculate()" value="0">
<label for "cost-labour" class="w3-text-grey">Actual Price (N)</label>
<input type="text" name="actual_mat_cost" class="date" id="actual_mat_cost" onmouseover title="Actual Cost of Labour" oninput="calculate()" value="0" readonly>
<label for "mat_supportdoc" class="w3-text-grey">Material Supporting Document</label>
<input type="file" class="file" name="material_doc">
<h5 class="w3-light-grey w3-text-black w3-padding-large">LOGISTICS / EQUIPMENT</h5>
<label for "labour" class="w3-text-grey">Description</label>
<textarea col="4" row="4" name="description"></textarea>
<label for "labour" class="w3-text-grey">Quantity</label>
<input type="number" name="log_qty" class="date" id="log_qty" onmouseover title="Quantity" oninput="calculate()" value="0">
<label for "cost-labour" class="w3-text-grey">Rate (N)</label>
<input type="number" name="log_rate" class="date" id="log_rate" onmouseover title="Rate (N)" oninput="calculate()" value="0">
<label for "cost-labour" class="w3-text-grey">Actual Price (N)</label>
<input type="text" name="actual_log_cost" class="date" id="actual_log_cost" onmouseover title="Actual Cost of Labour" oninput="calculate()" value="0" readonly>
<label for "mat_supportdoc" class="w3-text-grey">Logistics Supporting Document</label>
<input type="file" class="file" name="logist_doc">
<p><center><button type="submit" name="submit" class="login-btn w3-green w3-hover-blue" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></center>
</p>
</form>
 <script>
$(document).ready(function() {
$('#task').on('change', function() {
var task_id = this.value;
$.ajax({
url: "../application/budget_categ.php",
type: "POST",
data: {
task_id: task_id
},
cache: false,
success: function(result){
$("#allocation").html(result);

}

});
}); 
});
</script>
</div>
<div class="w3-quarter">
</div>

 
<script>

 function calculate() {
	 
/*Calculating the actual cost of labour*/	 
  var man_hour,cost_labour;
  man_hour = document.getElementById('man_hour').value; 
  cost_labour = document.getElementById('cost_labour').value; 
  document.getElementById('actual_cost').value = ((man_hour)*(cost_labour)).toFixed(2);
  
/*Calculating the actual cost of materials*/
    
  var mat_qty,mat_rate;
  mat_qty = document.getElementById('mat_qty').value; 
  mat_rate = document.getElementById('mat_rate').value; 
  document.getElementById('actual_mat_cost').value = ((mat_qty)*(mat_rate)).toFixed(2);
  
 
/*Calculating the actual cost of logistics or equipment*/
    
  var log_qty,log_rate;
  log_qty = document.getElementById('log_qty').value; 
  log_rate = document.getElementById('log_rate').value; 
  document.getElementById('actual_log_cost').value = ((log_qty)*(log_rate)).toFixed(2);


  
  var tax_inc_amt, tax_code1;
  tax_inc_amt = document.getElementById('tax_inc_amt').value; 
  tax_code1 = document.getElementById('tax_code1').value; 
 /*  document.getElementById('tax_exc_amt').value = ((tax_inc_amt -(tax_inc_amt*tax_code1)/100));*/
 document.getElementById('tax_exc_amt').value = ((tax_inc_amt -(tax_code1*tax_inc_amt)/100)).toFixed(2);
    
   
  
  var tax_inc_amt;
  tax_inc_amt = document.getElementById('tax_inc_amt').value; 
  document.getElementById('bal_tax_inc_amt').value = ((tax_inc_amt));
  
  
  var tax_code1,tax_inc_amt;
  tax_code1 = document.getElementById('tax_code1').value; 
 /* document.getElementById('tax1').value = ((tax_code1*tax_inc_amt)/100); */
  document.getElementById('tax1').value = ((tax_code1*tax_inc_amt)/100).toFixed(2);
  



var pc_pct,bac_val; 
pc_pct = document.getElementById('pc_pct').value; 
bac_val = document.getElementById('bac_val').value; 
document.getElementById('pv_row').value = ((pc_pct * bac_val)*0.01); 


var ac_pct,bac_val; 
ac_pct = document.getElementById('ac_pct').value; 
bac_val = document.getElementById('bac_val').value; 
document.getElementById('ev_row').value = ((ac_pct * bac_val)*0.01);
       
var pv_row,ev_row; 
pv_row = document.getElementById('pv_row').value; 
ev_row = document.getElementById('ev_row').value; 
document.getElementById('spi_row').value = ev_row / pv_row; 

      
var ac_row,ev_row; 
ac_row = document.getElementById('ac_row').value; 
ev_row = document.getElementById('ev_row').value; 
document.getElementById('cpi_row').value = ev_row / ac_row; 

var ev_row,pv_row; 
ev_row = document.getElementById('ev_row').value; 
pv_row = document.getElementById('pv_row').value; 
document.getElementById('sv_row').value = ev_row - pv_row; 
   
var ev_row,ac_row; 
ev_row = document.getElementById('ev_row').value; 
ac_row = document.getElementById('ac_row').value; 
document.getElementById('cv_row').value = ev_row - ac_row; 

      
var cpi_row,bac_val; 
cpi_row = document.getElementById('cpi_row').value; 
bac_val = document.getElementById('bac_val').value; 
document.getElementById('eac_row').value = bac_val / cpi_row; 

var bac_val,ev_row, cpi_row; 
bac_val = document.getElementById('bac_val').value; 
ev_row = document.getElementById('ev_row').value; 
cpi_row = document.getElementById('cpi_row').value; 
document.getElementById('etc_row').value = (bac_val - ev_row) / cpi_row; 

var eac_row,bac_val; 
eac_row = document.getElementById('eac_row').value; 
bac_val = document.getElementById('bac_val').value; 
document.getElementById('vac_row').value = bac_val - eac_row; 

      
var ev_row,ac_row,bac_val; 
ev_row = document.getElementById('ev_row').value; 
bac_val = document.getElementById('bac_val').value; 
ac_row = document.getElementById('ac_row').value; 
document.getElementById('tcpi_row').value = (bac_val - ev_row) / (bac_val - ac_row); 


var qty10,rt10; 
qty10 = document.getElementById('qty10').value; 
rt10 = document.getElementById('rt10').value; 
document.getElementById('price10').value = qty10 * rt10; 

var qty11,rt11; 
qty11 = document.getElementById('qty11').value; 
rt11 = document.getElementById('rt11').value; 
document.getElementById('price11').value = qty11 * rt11; 

var qty12,rt12; 
qty12 = document.getElementById('qty12').value; 
rt12 = document.getElementById('rt12').value; 
document.getElementById('price12').value = qty12 * rt12; 

var qty13,rt13; 
qty13 = document.getElementById('qty13').value; 
rt13 = document.getElementById('rt13').value; 
document.getElementById('price13').value = qty13 * rt13; 

var qty14,rt14; 
qty14 = document.getElementById('qty14').value; 
rt14 = document.getElementById('rt14').value; 
document.getElementById('price14').value = qty14 * rt14; 

var qty15,rt15; 
qty15 = document.getElementById('qty15').value; 
rt15 = document.getElementById('rt15').value; 
document.getElementById('price15').value = qty15 * rt15; 



}

</script>
