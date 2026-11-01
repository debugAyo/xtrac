<?php


$appcode=$_POST['appcode'];


include '../link/connect.php';
if(!isset($_POST['submit'], $_POST['opt_a'], $_POST['quest'], $_POST['cor_opt'], $_POST['chk_quest'], $_POST['chk_a'], $_POST['chk_b'], $_POST['chk_c'], $_POST['chk_d'])) {

$chk_a = '';
$chk_b = '';
$chk_c = '';
$chk_d = '';
$quest = '';
$opta = '';
$questno= '';
$cor_opt= '';
$chk_quest='';
$sta = '';
$stb = '';
$stc = '';
$std = '';
}
if(isset($_POST['submit'], $_POST['opt_a'], $_POST['quest'],  $_POST['cor_opt'], $_POST['chk_quest'], $_POST['chk_a'], $_POST['chk_b'], $_POST['chk_c'], $_POST['chk_d'])) {

$chk_a = $_POST['chk_a'];
$chk_b = $_POST['chk_b'];
$chk_c = $_POST['chk_c'];
$chk_d = $_POST['chk_d'];
$quest = $_POST['quest'];
$opta = $_POST['opt_a'];
$questno= $_POST['submit'];
$cor_opt = $_POST['cor_opt'];
$chk_quest=$_POST['chk_quest'];

//echo $questno;

}

if ($opta == 'A') { 
$sta = 'checked';
$stb = '';
$stc = '';
$std = '';
}
if ($opta == 'B') { 
$sta = '';
$stb = 'checked';
$stc = '';
$std = '';
}
if ($opta == 'C') { 
$sta = '';
$stb = '';
$stc = 'checked';
$std = '';
}
if ($opta == 'D') { 
$sta = '';
$stb = '';
$stc = '';
$std = 'checked';
}

$result = mysqli_query($conn,"SELECT * FROM temp_ans WHERE quest_no='$chk_quest' && candi_no='$appcode'");
 if(mysqli_num_rows($result) !== '') {
 
 $query = "INSERT INTO temp_ans (candi_no, quest_no, question, opt_a, opt_b, opt_c, opt_d, opta, sta, stb, stc, std, correct_opt) 
 VALUES('$appcode','$chk_quest','$quest','$chk_a','$chk_b','$chk_c','$chk_d','$opta','$sta','$stb','$stc','$std','$cor_opt')";
mysqli_query($conn,$query) or die(mysqli_error());

}
else {
$sql = "UPDATE temp_ans SET opta='$opta', sta='$sta', stb='$stb', stc='$stc', std='$std'  WHERE quest_no='$chk_quest' && candi_no='$appcode'";
	$result = mysqli_query($conn,$sql);
}


//mysqli_close($conn);
?>
<?php 
include '../link/connect.php';

echo "<div align='left'>
			<hr>
					<h3 style='color: green; '>Preview Quiz Attempts </h3><hr>
</div>";



if(isset($_POST['submit'])) {
$chk_quest=$_POST['chk_quest'];
$questno = $_POST['submit'];
     
	       	       
$result = mysqli_query($conn, "SELECT * FROM math_quest WHERE quest_no='$chk_quest' ");
			while($row=mysqli_fetch_assoc($result)) {
			$img = $row['img'];
			
			if ($img > '0') {

  $image = mysqli_query($conn,"SELECT * FROM math_quest WHERE img='".$img."' && quest_no='$chk_quest'");
  
  $row=mysqli_fetch_assoc($image);
 

echo '<div><table cellpadding="0" cellspacing="0" width="65%"><tr><td valign="top" style="border: 0px solid #EEEEEE" bgcolor="#FFFFFF" width="65%"><a href="#"><br><left><img src="../question/math/'.$row['img'].'" alt="'.htmlspecialchars($row['course_name']).'" width="200" height="35" class="pngfix" /></br></left></a></div></td></tr></table>';
} 
	       
	
$sql = "DELETE FROM temp_ans WHERE quest_no='NULL' OR quest_no='' ";
if (mysqli_query($conn,$sql)) {
       	       
$result = mysqli_query($conn,"SELECT * FROM temp_ans WHERE candi_no='$appcode' && quest_no='$chk_quest' LIMIT 1");

while($row = mysqli_fetch_array($result)) 
{
 
echo "<form action='' method='POST'>";
echo "<input type='hidden' name='list' value='Question Bank' size='15'>";
echo $row['quest_no'].'&nbsp;&nbsp;'; 
echo "<font face='Arial' style='font-size: 11pt'><input type='hidden' value='" . $row['quest_no'] . "' name='questno'>"; 
echo "<input type='hidden'  name='quest'  value='" . $row['question'] . "'  /><b>" . $row['question'] . "</b></br>"; 
echo "<input type='radio'  " . $row['sta'] . " name='opt_a'  value='A'  />  <input type='hidden'  name='chk_a'  value='" . $row['opt_a'] . "'  />" . $row['opt_a'] . "</br>"; 
echo "<input type='radio'  " . $row['stb'] . " name='opt_a'  value='B'  />  <input type='hidden'  name='chk_b'  value='" . $row['opt_b'] . "'  />" . $row['opt_b'] . "</br>"; 
echo "<input type='radio'  " . $row['stc'] . " name='opt_a'  value='C'  />  <input type='hidden'  name='chk_c'  value='" . $row['opt_c'] . "'  />" . $row['opt_c'] . "</br>"; 
echo "<input type='radio'  " . $row['std'] . " name='opt_a'  value='D'  />  <input type='hidden'  name='chk_d'  value='" . $row['opt_d'] . "'  />" . $row['opt_d'] . "</br>";
echo "<hr>"; 
}
	}
		}
$result = mysqli_query($conn,"SELECT * FROM temp_ans WHERE candi_no='$appcode' ORDER BY quest_no ASC"); 
while($row = mysqli_fetch_array($result)) 
{
 
echo "<form action='' method='POST'>
<input type='hidden'  name='chk_quest'  value='" .$questno. "'  />
<input type='hidden' name='list' value='Question Bank' size='15'>
<input type='hidden' name='appcode' value='" .$appcode. "' size='1'>
<input type='submit' value='" . $row['quest_no'] . "'  name='submit' class='login-btn w3-green' style='font-family: Arial; color: #FFFFFF; border: 0px solid #EBEBEB; cursor:pointer; width:40px'>"; 


}
echo '<br></form>';

echo "<div align='left'><hr>
			
					<h3 style='color: blue; '>Change Choices / Continue to Quiz </h3>
</div>";

if ($row <= '0') {

$result = mysqli_query($conn, "SELECT * FROM math_quest WHERE quest_no='$questno' ");
			while($row=mysqli_fetch_assoc($result)) {
			$img = $row['img'];
			
			if ($img > '0') {

  $image = mysqli_query($conn,"SELECT * FROM math_quest WHERE img='".$img."' && quest_no='$questno'");
  
  $row=mysqli_fetch_assoc($image);
 

echo '<div><table cellpadding="0" cellspacing="0" width="65%"><tr><td valign="top" style="border: 0px solid #EEEEEE" bgcolor="#FFFFFF" width="65%"><a href="#"><br><left><img src="../question/math/'.$row['img'].'" alt="'.htmlspecialchars($row['course_name']).'" width="200" height="35" class="pngfix" /></br></left></a></div></td></tr></table>';
} 

$result = mysqli_query($conn,"SELECT * FROM math_quest WHERE quest_no='$questno'");

while($row = mysqli_fetch_array($result)) 
{
 
echo "<form action='' method='POST'>";
echo $row['quest_no'].'&nbsp;&nbsp;'; 
echo "<font face='Arial' style='font-size: 11pt'><input type='hidden' value='" . $row['quest_no'] . "' name='questno'>"; 
echo "<input type='hidden'  name='quest'  value='" . $row['question'] . "'  /><input type='hidden'  name='cor_opt'  value='" . $row['correct_opt'] . "'  /><b>" . $row['question'] . "</b></br>"; 
echo "<input type='radio'  name='opt_a'  value='A'  />  <input type='hidden'  name='chk_a'  value='" . $row['opt_a'] . "'  />" . $row['opt_a'] . "</br>"; 
echo "<input type='radio'  name='opt_a'  value='B'  />  <input type='hidden'  name='chk_b'  value='" . $row['opt_b'] . "'  />" . $row['opt_b'] . "</br>"; 
echo "<input type='radio'  name='opt_a'  value='C'  />  <input type='hidden'  name='chk_c'  value='" . $row['opt_c'] . "'  />" . $row['opt_c'] . "</br>"; 
echo "<input type='radio'  name='opt_a'  value='D'  />  <input type='hidden'  name='chk_d'  value='" . $row['opt_d'] . "'  />" . $row['opt_d'] . "</br>";
echo "<hr>"; 

	}
 		}
 			}
 				}
$result = mysqli_query($conn,"SELECT * FROM math_quest ORDER BY quest_no ASC"); 
while($row = mysqli_fetch_array($result)) 
{

echo "<form action='' method='POST'>
<input type='hidden'  name='chk_quest'  value='" .$questno. "'   />
<input type='hidden' name='appcode' value='" .$appcode. "' size='1'>
<input type='hidden' name='list' value='Question Bank' size='15'>
<input type='submit' class='login-btn' value='" . $row['quest_no'] . "'  name='submit' style='font-family: Arial; color: #FFF; border: 0px solid #008000; cursor:pointer; width:40px'>"; 

}

echo '</form>';
echo '<hr>';
?>
