<?php
$id=$_POST['id']; 
$del_opt=$_POST['del_opt']; 

if ($del_opt=='Yes') {
	
include '../link/connect.php';


$sql = "DELETE FROM budgets WHERE id='$id'";
if ($conn->query($sql) === TRUE) {

echo '<p class="w3-text-blue"> Budget Information Successfully Deleted </p>';

include 'budget.php';
}
}
else {
	echo '<p class="w3-text-red">You cannot delete this information';
	include 'budget.php';
}
?>