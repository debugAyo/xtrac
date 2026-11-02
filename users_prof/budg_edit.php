<div class="w3-row-padding">
<div class="w3-threequarter w3-padding-large w3-white w3-border"> 
<h4 class="w3-padding-medium w3-text-light-green w3-hover-text-grey"><i class="fa fa-edit w3-text-grey w3-hover-text-light-green"></i> BUDGET EDIT FORM</h4>

<?php 
if (isset($_POST['submit'])) {
	$id=$_POST['id'];
}

include '../link/connect.php';
$sql="SELECT * FROM budgets WHERE id=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 's', $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
while ($row=mysqli_fetch_array($result)) {

?>
<form action="" method="post">
<input type="hidden" name="list"  value="Budget Edit Form">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">
<input type="text" name="bud_categ" value="<?php echo $row['budcateg'];?>">
<label>SELECT YEAR <i class="fa fa-asterisk w3-text-red"></i></label>
<input type="month" name="year" class="date" value="<?php echo $row['year'];?>"> 
<p><label>Budget Type</label>
<select name="bud_type" >
	<option><?php echo $row['budtype'];?></option>
	
	</select>
	</p>
<label for "descrp">Description</label>
<textarea rows="3" placeholder="Describe Item with detailed specification" name="desc1" cols="4" ><?php echo $row['desc1'];?></textarea>
<label for "fy">Fiscal Year Baseline</label>
<input type="number" name="fy_row1" id="fy_row1" class="date" placeholder="FY Baseline" oninput="calculate()" value="<?php echo $row['fy_row'];?>">	
<label for "qty">Quantity</label>									
<input type="number" name="qty1" id="qty1" class="date"  placeholder="Quantity" oninput="calculate()" value="<?php echo $row['qty'];?>">
<label for "rate">Rate (<strike>N</strike>)</label>
<input type="number" name="rt1" id="rt1" class="date"  placeholder="Rate" oninput="calculate()" value="<?php echo $row['rate'];?>">
<label for "price">Price (<strike>N</strike>)</label>
<input type="number" name="price1" id="price1" class="date" placeholder="Price" value="<?php echo $row['price'];?>" >
<p align="center"><button type="submit" name="submit" class="login-btn w3-light-green w3-hover-green" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></p>

</form>
<?php

}

?>									
</div>

</body>
<script>

    function calculate() {
       
    var qty1,rt1; 
qty1 = document.getElementById('qty1').value; 
rt1 = document.getElementById('rt1').value; 
document.getElementById('price1').value = qty1 * rt1; 

      
    var qty2,rt2; 
qty2 = document.getElementById('qty2').value; 
rt2 = document.getElementById('rt2').value; 
document.getElementById('price2').value = qty2 * rt2; 

var qty3,rt3; 
qty3 = document.getElementById('qty3').value; 
rt3 = document.getElementById('rt3').value; 
document.getElementById('price3').value = qty3 * rt3; 
   
   var qty4,rt4; 
qty4 = document.getElementById('qty4').value; 
rt4 = document.getElementById('rt4').value; 
document.getElementById('price4').value = qty4 * rt4; 

      
    var qty5,rt5; 
qty5 = document.getElementById('qty5').value; 
rt5 = document.getElementById('rt5').value; 
document.getElementById('price5').value = qty5 * rt5; 

var qty6,rt6; 
qty6 = document.getElementById('qty6').value; 
rt6 = document.getElementById('rt6').value; 
document.getElementById('price6').value = qty6 * rt6; 

   var qty7,rt7; 
qty7 = document.getElementById('qty7').value; 
rt7 = document.getElementById('rt7').value; 
document.getElementById('price7').value = qty7 * rt7; 

      
    var qty8,rt8; 
qty8 = document.getElementById('qty8').value; 
rt8 = document.getElementById('rt8').value; 
document.getElementById('price8').value = qty8 * rt8; 

var qty9,rt9; 
qty9 = document.getElementById('qty9').value; 
rt9 = document.getElementById('rt9').value; 
document.getElementById('price9').value = qty9 * rt9; 

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

