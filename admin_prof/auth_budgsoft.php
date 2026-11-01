<?php
$qty1=$_POST['qty1']; 
$rt1=$_POST['rt1']; 
$price1=$_POST['price1']; 
$fy_row1=$_POST['fy_row1']; 
$desc1=$_POST['desc1']; 
$year=$_POST['year'];
$bud_type=$_POST['bud_type'];


//$subtot_fy = ($fy_row1+$fy_row2+$fy_row3+$fy_row4+$fy_row5);
//$subtot_fy1 = ($fy_row6+$fy_row6+$fy_row6+$fy_row6+$fy_row10);
//$subtot_fy2= ($fy_row11+$fy_row12+$fy_row13+$fy_row14+$fy_row15);
//$subtot_os = ($price1+$price2+$price3+$price4+$price5);
//$subtot_ss = ($price6+$price7+$price8+$price9+$price10);
//$subtot_as = ($price11+$price12+$price13+$price14+$price15);

if (!$year) {
echo 'Please Select the Fiscal year for your Budget';
exit();
}

include 'connect.php';

$sql = "INSERT INTO soft_budg (year, desc1, fy_row1, qty1, rt1, price1, budtype )
			VALUES ('$year','$desc1','$fy_row1','$qty1','$rt1','$price1','$bud_type')";


$result = mysqli_query($conn, $sql);

if ($result > 0)
{
//include 'item_prev.php';
 // include 'ass_add.php';
 include 'ext_budget.php';
}

?>