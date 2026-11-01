
<?php 
$year=$_POST['year'];
$view_type=$_POST['view_type'];
echo '<font face="arial" size="2">';

if (!$year || !$view_type) {
echo 'Please Specify the Correct Fiscal Year or View Type';
exit();
}

if ($view_type == 'Comprehensive Budget') {
include '../link/connect.php';
include("det_budget.php"); 
exit();
} 
if ($view_type == 'Summarized Budget') {
include '../link/connect.php';
include("auth_budget_refr.php"); 
exit();
} 
echo '</font>';

if ($view_type == 'Editable Budget') {
include '../link/connect.php';
include("budget_edit.php"); 
exit();
} 
?>
