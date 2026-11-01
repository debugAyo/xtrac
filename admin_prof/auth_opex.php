<?php
$qty1=$_POST['qty1']; 
$rt1=$_POST['rt1']; 
$price1=$_POST['price1']; 
$fy_row1=$_POST['fy_row1']; 
$desc1=$_POST['desc1']; 
$year=$_POST['year'];
$bud_type=$_POST['bud_type'];


//$subtot_fy = ($fy_row1+$fy_row2+$fy_row3+$fy_row4+$fy_row5);
//$subtot_fy1 = ($fy_row6+$fy_row7+$fy_row8+$fy_row9+$fy_row10);
//$subtot_fy2= ($fy_row11+$fy_row12+$fy_row13+$fy_row14+$fy_row15);
//$subtot_fy3 = ($fy_row16+$fy_row17+$fy_row18+$fy_row19+$fy_row20);
//$subtot_fy4 = ($fy_row21+$fy_row22+$fy_row23+$fy_row24+$fy_row25);
//$subtot_fy5= ($fy_row26+$fy_row27+$fy_row28+$fy_row29);


//$subtot_maint = ($price1+$price2+$price3+$price4+$price5);
//$subtot_trg = ($price6+$price7+$price8+$price9+$price10);
//$subtot_con = ($price11+$price12+$price13+$price14+$price15);
//$subtot_pers = ($price16+$price17+$price18+$price19+$price20);
//$subtot_stru = ($price21+$price22+$price23+$price24+$price25);
//$subtot_misc = ($price26+$price27+$price28+$price29);



if (!$year) {
echo 'Please Select the Fiscal year for your Budget';
exit();
}

include 'connect.php';

$sql = "INSERT INTO opex_budg (year, desc1, fy_row1, qty1, rt1, price1, budtype )
			VALUES ('$year','$desc1','$fy_row1','$qty1','$rt1','$price1','$bud_type')";




$result = mysqli_query($conn, $sql);

if ($result > 0)
{
//include 'item_prev.php';
  //include 'ass_add.php';
  include 'ext_budget.php';

}

?>