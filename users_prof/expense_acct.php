
<div class="w3-row-padding w3-border w3-white">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-info-circle fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Daily Financial Reporting</h3>	
<div class="w3-col w3-black w3-text-light-grey" style="border-radius: 4px"><b>EXPENSE ACCOUNT</b></div>
<div class="w3-col w3-white">
<form id="myForm"  action="" method="POST">	
<input type="hidden" name="list" value="Expense" onchange="this.form.submit()">
<select class="body-parag w3-text-grey" name="proj_id" id="proj_id" onchange="this.form.submit()">
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
<div class="w3-col w3-container m4 l4">
<label></label>
<label></label>
<!-- using onfocus="(this.type='date')" -->
    <input type="text" name="doc_date" style="font-family: courier new; font-size:12px" onmouseover title="Document Date" placeholder="Document Date"
        onfocus="(this.type='date')"
        onblur="(this.type='text')">
<label></label>


<select name="total_income" id="total_income"  style="font-family: courier new; font-size:12px" oninput="calculate()" hidden>
<?php 
$proj_id=$_POST['proj_id'];
include '../link/connect.php';
/*$sql = "SELECT * FROM trial_bal_acct";*/

$sql = "SELECT * FROM proj_budget WHERE id='$proj_id'";
$result=mysqli_query($conn, $sql);
while ($row=mysqli_fetch_array($result) ) {


?>

<option value="<?php echo $row['budget'];?>"><?php echo $row['budget'];?></option>

<?php

}
?>

</select>

<select name="acct_no" onmouseover title="Account No" style="font-family: courier new; font-size:12px">
<option>Select Account Type</option>
<?php 
include '../link/connect.php';
/*$sql = "SELECT * FROM trial_bal_acct";*/

$sql = "SELECT * FROM acct_config ORDER BY exp_categ ASC";
$result=mysqli_query($conn, $sql);
while ($row=mysqli_fetch_array($result) ) {

/*$acct_no = $row['acct_no'];*/

?>

<option><?php echo $row['exp_categ'];?></option>

<?php

}
?>

</select>

<label></label>
<input type="text" name="tax_inc_amt" id="tax_inc_amt" style="font-family: courier new; font-size:12px" value="" onmouseover title="Tax Inclusive Amount" placeholder="Tax Incusive Amount" oninput="calculate()">
</div>
<div class="w3-col w3-container m4 l4">
<label></label>
<input type="text" name="suplier" id="suplier"  style="font-family: courier new; font-size:12px" onmouseover title="Supplier" value="" placeholder="Supplier"> 

<label></label>
<select name="tax_code1" id="tax_code1" onmouseover title="Tax Code" style="font-family: courier new; font-size:12px" oninput="calculate()">
<option>Select Tax 1 Code</option>
<?php 
include '../link/connect.php';
$sql = "SELECT * FROM sales_tax";
$result=mysqli_query($conn, $sql);
while ($row=mysqli_fetch_array($result) ) {

/*$code1 = $row['code'];
$val1 = $row['percentage'];*/

?>

<option value="<?php echo $row['percentage'];?>"><?php echo $row['code'];?></option>
<?php

}
?>

</select>

<label></label>
<!-- using onfocus="(this.type='date')" -->
    <input type="text" name="pay_date" style="font-family: courier new; font-size:12px" onmouseover title="Payment Date" placeholder="Payment Date"
        onfocus="(this.type='date')"
        onblur="(this.type='text')">
</div>
<div class="w3-col w3-container m4 l4">

<label></label>
<input type="text" name="refer" id="refer"  style="font-family: courier new; font-size:12px" value="" onmouseover title="Reference" placeholder="Reference"> 

<label></label>
<select name="bank_code" onmouseover title="Bank Code" style="font-family: courier new; font-size:12px">
<option>Select Bank Code</option>
<?php 
include '../link/connect.php';
$sql = "SELECT * FROM bank_acct_setup";
$result=mysqli_query($conn, $sql);
while ($row=mysqli_fetch_array($result) ) {

/*$code3 = $row['code'];
$val3 = $row['descrp'];*/


?>

<option value="<?php $row['descrp']; ?>"><?php echo $row['code'];?></option>
<?php

}
?>

</select>

<label></label>
<!-- using onfocus="(this.type='month')" -->
    <input type="text" name="fin_year" placeholder="Financial Year" onmouseover title="Financial Year" class="date" style="font-family: courier new; font-size:12px"
        onfocus="(this.type='month')"
        onblur="(this.type='month')">

</div></div></div>

<div class="w3-row-padding w3-white  w3-border">
<div class="w3-col">

<textarea rows="5" name="descrp" cols="20" style="font-family: courier new; font-size:12px" onmouseover title="Description" placeholder="Description"></textarea>


</div>
</div>

<div class="w3-row-padding w3-border w3-white">
<div class="w3-col w3-black" style="border-radius: 4px"><b>OUTSTANDING BALANCE</b></div>
<div class="w3-col">

	
<div class="w3-quarter">

<label></label>
<input type="text" name="out_bal" id="out_bal" value="" style="font-family: courier new; font-size:12px" onmouseover title="Outstanding Balance" placeholder="Outstanding Balance" oninput="calculate()"> 

</div>

<div class="w3-quarter">

<label></label>
<input type="text" name="tax_exc_amt" id="tax_exc_amt" style="font-family: courier new; font-size:12px" value="" onmouseover title="Tax Exclusive Amount" placeholder="Tax Exclusive Amount" oninput="calculate()">

</div>

<div class="w3-quarter">

<label></label>
<input type="text" name="tax1" id="tax1" style="font-family: courier new; font-size:12px" value="" onmouseover title="Sales Tax" placeholder="Sales Tax 1"  oninput="calculate()">

</div>

<div class="w3-quarter">
<label></label>
<input type="text" name="bal_tax_inc_amt" id="bal_tax_inc_amt" style="font-family: courier new; font-size:12px" value="" onmouseover title="Tax Inclusive Amount" placeholder="Tax Incusive Amount" oninput="calculate()">

</div><p><center><button type="submit" name="submit" class="login-btn w3-green w3-hover-blue" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></center>
</p></form></form>
</div></div>


<script>

    function calculate() {
    
  var tax_inc_amt, tax_code1;
  tax_inc_amt = document.getElementById('tax_inc_amt').value; 
  tax_code1 = document.getElementById('tax_code1').value; 
 /*  document.getElementById('tax_exc_amt').value = ((tax_inc_amt -(tax_inc_amt*tax_code1)/100));*/
 document.getElementById('tax_exc_amt').value = ((tax_inc_amt -(tax_code1*tax_inc_amt)/100)).toFixed(2);
    
    
  var total_income,tax_inc_amt;
  total_income = document.getElementById('total_income').value; 
  tax_inc_amt = document.getElementById('tax_inc_amt').value; 
  document.getElementById('out_bal').value = ((total_income - tax_inc_amt));
  
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
