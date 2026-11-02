<?php


$appcode=$_POST['appcode'];

include '../link/connect.php';


$chk_a = '';
$chk_b = '';
$chk_c = '';
$chk_d = '';
$quest = '';
$opta = '';
$questno= '';
$chk_quest='';
$sta = '';
$stb = '';
$stc = '';
$std = '';

if(isset($_POST['submit'], $_POST['opt_a'], $_POST['quest'], $_POST['chk_quest'], $_POST['chk_a'], $_POST['chk_b'], $_POST['chk_c'], $_POST['chk_d'])) {


$chk_a = $_POST['chk_a'];
$chk_b = $_POST['chk_b'];
$chk_c = $_POST['chk_c'];
$chk_d = $_POST['chk_d'];
$quest = $_POST['quest'];
$opta = $_POST['opt_a'];
$questno= $_POST['submit'];
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

$stmt = mysqli_prepare($conn, "SELECT * FROM temp_ans WHERE quest_no=? && candi_no=?");
mysqli_stmt_bind_param($stmt, 'ss', $chk_quest, $appcode);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if(mysqli_num_rows($result) == '1') {

$stmt = mysqli_prepare($conn, "UPDATE temp_ans SET opta=?, sta=?, stb=?, stc=?, std=?  WHERE quest_no=? && candi_no=?");
	mysqli_stmt_bind_param($stmt, 'sssssss', $opta, $sta, $stb, $stc, $std, $chk_quest, $appcode);
	mysqli_stmt_execute($stmt);
}


?>
<?php 

echo "<div align='left'>
			<hr>
					<h3 style='color: green; '>Preview Quiz Attempts </h3><hr>
</div>";
			
if(isset($_POST['submit'])) {
$chk_quest = $_POST['chk_quest'];
$questno = $_POST['submit'];

      
$stmt = mysqli_prepare($conn, "SELECT * FROM math_quest WHERE quest_no=? ");
mysqli_stmt_bind_param($stmt, 's', $questno);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

/*$query="SELECT * FROM math_quest WHERE quest_no='$questno' && session='$yr_exam' && semest='$sch_term' && class='$exm_class' && course_name='$course'";*/
			while($row=mysqli_fetch_assoc($result)) {
			$img = $row['img'];
			
			if ($img > '0') {

  $stmt = mysqli_prepare($conn, "SELECT * FROM math_quest WHERE img=? && quest_no=?");
  mysqli_stmt_bind_param($stmt, 'ss', $img, $questno);
  mysqli_stmt_execute($stmt);
  $image = mysqli_stmt_get_result($stmt);
  
  $row=mysqli_fetch_assoc($image);
 

echo '<div><table cellpadding="0" cellspacing="0" width="65%"><tr><td valign="top" style="border: 0px solid #EEEEEE" bgcolor="#FFFFFF" width="65%"><a href="#"><br><left><img src="../question/math/'.$row['img'].'" alt="'.htmlspecialchars($row['course_name']).'" width="200" height="35" class="pngfix" /></br></left></a></div></td></tr></table>';
} 

$sql = "DELETE FROM temp_ans WHERE quest_no='NULL' OR quest_no='' ";
if (mysqli_query($conn,$sql)) {  
	      	      
$stmt = mysqli_prepare($conn, "SELECT * FROM temp_ans WHERE quest_no=? && candi_no=? ORDER BY quest_no DESC");
mysqli_stmt_bind_param($stmt, 'ss', $questno, $appcode);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

while($row = mysqli_fetch_array($result)) 
{
 
echo "<form action='' method='POST'>";
echo "";
echo "<input type='hidden' name='appcode' value='" .$appcode. "' size='15'>";
echo "<input type='hidden' name='list' value='Question Bank' size='15'>";
echo "<font face='Arial' style='font-size: 11pt'>"; 
echo $row['quest_no'].'&nbsp;&nbsp;'; 
echo "<input type='hidden'  name='quest'  value='" . $row['question'] . "'  /><b>" . $row['question'] . "</b></br>"; 
echo "<input type='radio'  " . $row['sta'] . " name='opt_a'  value='A'  />  <input type='hidden'  name='chk_a'  value='" . $row['opt_a'] . "'  />" . $row['opt_a'] . "</br>"; 
echo "<input type='radio'  " . $row['stb'] . " name='opt_a'  value='B'  />  <input type='hidden'  name='chk_b'  value='" . $row['opt_b'] . "'  />" . $row['opt_b'] . "</br>"; 
echo "<input type='radio'  " . $row['stc'] . " name='opt_a'  value='C'  />  <input type='hidden'  name='chk_c'  value='" . $row['opt_c'] . "'  />" . $row['opt_c'] . "</br>"; 
echo "<input type='radio'  " . $row['std'] . " name='opt_a'  value='D'  />  <input type='hidden'  name='chk_d'  value='" . $row['opt_d'] . "'  />" . $row['opt_d'] . "</br>";
echo "<hr>"; 
}
}
$result = mysqli_query($conn,"SELECT * FROM temp_ans WHERE candi_no='$appcode' ORDER BY quest_no ASC"); 

while($row = mysqli_fetch_array($result)) 
{

echo "<form action='' method='POST'>
<input type='hidden' name='appcode' value='" .$appcode. "' size='15' />
<input type='hidden'  name='chk_quest'  value='" .$questno. "'  />
<input type='hidden' name='appcode' value='" .$appcode. "' size='1' />
<input type='submit' class='login-btn w3-green' value='" . $row['quest_no'] . "'  name='submit' style='font-family: Arial; color: #FFFFFF; border: 0px solid #EBEBEB; cursor:pointer; width:40px'>"; 
}
}
echo '<br></form>';
echo '<hr>';
if ($row <= '0') {

			
			echo "<div align='left'>
			
					<h3 style='color: blue; '>Change Choices / Continue to Quiz </h3>
</div>";
			
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

echo "<input type='hidden' name='appcode' value='" .$appcode. "' size='15'>";
echo "<input type='hidden' name='list' value='Temporary Answer' size='15'>";
echo "<font face='Arial' style='font-size: 11pt'>"; 
echo $row['quest_no'].'&nbsp;&nbsp;'; 
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
<input type='hidden' name='appcode' value='" .$appcode. "' />
<input type='hidden' name='list' value='Temporary Answer' size='15'/>
<input type='hidden'  name='chk_quest'  value='" .$questno. "'  />
<input type='hidden' name='appcode' value='" .$appcode. "' size='1'/>
<input type='submit' class='login-btn' value='" . $row['quest_no'] . "'  name='submit' style='font-family: Arial; color: #fff; border: 0px solid #008000; cursor:pointer; width:40px'>"; 
 
}


echo '</form>';
echo '<hr>';


?>