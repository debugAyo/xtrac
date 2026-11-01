<?php

if (isset($_POST['submit'])) {
$classid=$_POST['classid'];
$appcode=$_POST['appcode'];
$date=$_POST['date'];
}

echo $classid.'<br />';
echo $appcode.'<br />';
echo $date.'<br />';


$chk_a = '';
$chk_b = '';
$chk_c = '';
$chk_d = '';
$chk_e = '';
$quest = '';
$opta = '';
$questno= '';
$chk_quest='';
$sta = '';
$stb = '';
$stc = '';
$std = '';
$ste = '';

if(isset($_POST['submit'], $_POST['opt_a'], $_POST['quest'], $_POST['chk_quest'], $_POST['chk_a'], $_POST['chk_b'], $_POST['chk_c'], $_POST['chk_d'], $_POST['chk_e'])) {


$chk_a = $_POST['chk_a'];
$chk_b = $_POST['chk_b'];
$chk_c = $_POST['chk_c'];
$chk_d = $_POST['chk_d'];
$chk_e = $_POST['chk_e'];
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
$ste = '';
}
if ($opta == 'B') { 
$sta = '';
$stb = 'checked';
$stc = '';
$std = '';
$ste = '';
}
if ($opta == 'C') { 
$sta = '';
$stb = '';
$stc = 'checked';
$std = '';
$ste = '';
}
if ($opta == 'D') { 
$sta = '';
$stb = '';
$stc = '';
$std = 'checked';
$ste = '';
}

if ($opta == 'E') { 
$sta = '';
$stb = '';
$stc = '';
$std = '';
$ste = 'checked';
}


include '../link/connect.php';
$classid=mysqli_real_escape_string($conn,$_POST['classid']);
$appcode=mysqli_real_escape_string($conn,$_POST['appcode']);
$date=mysqli_real_escape_string($conn,$_POST['date']);
//$result = mysqli_query($conn,"SELECT * FROM temp_ans WHERE quest_no='$chk_quest' && candi_no='$pin'");

//$result = mysqli_query($conn,"SELECT * FROM temp_exam_ans WHERE quest_no='$chk_quest' && admissionno='$appcode' && classId='$classid' && date='$date'");

$sql="SELECT exam_timetab.*,temp_exam_ans.* INNER JOIN temp_exam_ans ON exam_timetab.classId=temp_exam_ans.classId WHERE exam_timetab.subjectId=temp_exam_ans.subjectId && exam_timetab.sessionId=temp_exam_ans.sessionId && exam_timetab.termId=temp_exam_ans.termId && temp_exam_ans.classId='$classid' ORDER BY temp_exam_ans.quest_no ASC";
if(mysqli_num_rows($result) == '1') {
	
	while($row = mysqli_fetch_array($result)) 
{
 
$subjectid=$row['subjectId'];
 
$sql = "UPDATE temp_ans SET opta='$opta', sta='$sta', stb='$stb', stc='$stc', std='$std'  WHERE quest_no='$chk_quest' && admissionno='$appcode' && classId='$classid' && subjectId='$subjectid'";
	$result = mysqli_query($conn,$sql);
}

}

echo '<div align="left"><hr><h3 style="color: green; ">Preview Quiz Attempts </h3><hr></div>';

if(isset($_POST['submit'])) {
$chk_quest = $_POST['chk_quest'];
$questno = $_POST['submit'];
 
$sql="SELECT exam_timetab.*,quest_bank.* INNER JOIN quest_bank ON exam_timetab.classId=quest_bank.classId WHERE exam_timetab.subjectId=quest_bank.subjectId && exam_timetab.sessionId=quest_bank.sessionId && exam_timetab.termId=quest_bank.termId && quest_bank.classId='$classid' ORDER BY quest_bank.quest_no ASC";
while($row=mysqli_fetch_assoc($result)) {
			$img = $row['img'];
			
			if ($img > '0') {

  $image = mysqli_query($conn,"SELECT * FROM quest_bank WHERE img='".$img."' && quest_no='$questno'");
  
  $row=mysqli_fetch_assoc($image);
 

echo '<div><table cellpadding="0" cellspacing="0" width="65%"><tr><td valign="top" style="border: 0px solid #EEEEEE" bgcolor="#FFFFFF" width="65%"><a href="#"><br><left><img src="../question/math/'.$row['img'].'" alt="'.htmlspecialchars($row['course_name']).'" width="200" height="35" class="pngfix" /></br></left></a></div></td></tr></table>';
} 

$sql = "DELETE FROM temp_exam_ans WHERE quest_no='NULL' OR quest_no='' ";
if (mysqli_query($conn,$sql)) {  
	      	       
$result = mysqli_query($conn,"SELECT * FROM temp_exam_ans WHERE quest_no='$questno' && admisionno='$appcode' ORDER BY quest_no DESC");

while($row = mysqli_fetch_array($result)) 
{
 
echo "<form action='' method='POST'>";

echo "<font face='Arial' style='font-size: 11pt'>"; 
echo $row['quest_no'].'&nbsp;&nbsp;'; 
echo "<input type='hidden'  name='quest'  value='" . $row['question'] . "'  /><b>" . $row['question'] . "</b></br>"; 
echo "<input type='radio'  " . $row['sta'] . " name='opt_a'  value='A'  />  <input type='hidden'  name='chk_a'  value='" . $row['opt_a'] . "'  />" . $row['opt_a'] . "</br>"; 
echo "<input type='radio'  " . $row['stb'] . " name='opt_a'  value='B'  />  <input type='hidden'  name='chk_b'  value='" . $row['opt_b'] . "'  />" . $row['opt_b'] . "</br>"; 
echo "<input type='radio'  " . $row['stc'] . " name='opt_a'  value='C'  />  <input type='hidden'  name='chk_c'  value='" . $row['opt_c'] . "'  />" . $row['opt_c'] . "</br>"; 
echo "<input type='radio'  " . $row['std'] . " name='opt_a'  value='D'  />  <input type='hidden'  name='chk_d'  value='" . $row['opt_d'] . "'  />" . $row['opt_d'] . "</br>";
echo "<input type='radio'  " . $row['ste'] . " name='opt_a'  value='E'  />  <input type='hidden'  name='chk_e'  value='" . $row['opt_e'] . "'  />" . $row['opt_e'] . "</br>";
echo "<hr>"; 
}
}
$result = mysqli_query($conn,"SELECT * FROM temp_exam_ans WHERE admissionno='$appcode' ORDER BY id ASC"); 

while($row = mysqli_fetch_array($result)) 
{

echo "<form action='' method='POST'><input type='hidden' name='appcode' value='" . $appcode ."' ><input type='hidden' name='list' value='Question Bank'><input type='hidden'  name='chk_quest'  value='$questno'  /><input type='submit' class='login-btn w3-green' value='" . $row['quest_no'] . "'  name='submit' >"; 
}
}
echo '<br></form>';
echo '<hr>';
if ($row <= '0') {

			
	echo "<div align='left'><h3 style='color: blue; '>Change Choices / Continue to Quiz </h3></div>";
			
$result = mysqli_query($conn, "SELECT * FROM quest_bank WHERE quest_no='$questno' ");
			while($row=mysqli_fetch_assoc($result)) {
			$img = $row['img'];
			
			if ($img > '0') {

  $image = mysqli_query($conn,"SELECT * FROM quest_bank WHERE img='".$img."' && quest_no='$questno'");
  
  $row=mysqli_fetch_assoc($image);
 

echo '<div><table cellpadding="0" cellspacing="0" width="65%"><tr><td valign="top" style="border: 0px solid #EEEEEE" bgcolor="#FFFFFF" width="65%"><a href="#"><br><left><img src="../question/math/'.$row['img'].'" alt="'.htmlspecialchars($row['subjectId']).'" width="200" height="35" class="pngfix" /></br></left></a></div></td></tr></table>';
} 

$result = mysqli_query($conn,"SELECT * FROM math_quest WHERE quest_no='$questno'");

while($row = mysqli_fetch_array($result)) 
{
 
echo "<form action='auth_x_trial_new.php' method='POST'>";
echo "<font face='Arial' style='font-size: 11pt'>"; 
echo $row['quest_no'].'&nbsp;&nbsp;'; 
echo "<input type='hidden'  name='quest'  value='" . $row['question'] . "'  /><input type='hidden'  name='cor_opt'  value='" . $row['correct_opt'] . "'  /><b>" . $row['question'] . "</b></br>"; 
echo "<input type='radio'  name='opt_a'  value='A'  />  <input type='hidden'  name='chk_a'  value='" . $row['opt_a'] . "'  />" . $row['opt_a'] . "</br>"; 
echo "<input type='radio'  name='opt_a'  value='B'  />  <input type='hidden'  name='chk_b'  value='" . $row['opt_b'] . "'  />" . $row['opt_b'] . "</br>"; 
echo "<input type='radio'  name='opt_a'  value='C'  />  <input type='hidden'  name='chk_c'  value='" . $row['opt_c'] . "'  />" . $row['opt_c'] . "</br>"; 
echo "<input type='radio'  name='opt_a'  value='D'  />  <input type='hidden'  name='chk_d'  value='" . $row['opt_d'] . "'  />" . $row['opt_d'] . "</br>";
echo "<input type='radio'  name='opt_a'  value='E'  />  <input type='hidden'  name='chk_e'  value='" . $row['opt_e'] . "'  />" . $row['opt_e'] . "</br>";

echo "<hr>"; 
}
	}
 		}
 		 	}
 	$result = mysqli_query($conn,"SELECT * FROM quest_bank"); 
while($row = mysqli_fetch_array($result)) 
{

echo "<form action='' method='POST'>
<input type='hidden' name='appcode' value='". $appcode. "'>
<input type='hidden' name='list' value='Temporary Answer'>
<input type='hidden'  name='chk_quest'  value='$questno'  />
<input type='submit' class='login-btn' value='" . $row['quest_no'] . "'  name='submit' style='font-family: Arial; color: #fff; border: 0px solid #008000; cursor:pointer'>"; 
 
}


echo '</form>';
echo '<hr>';


?>

</div>
  <div class="w3-quarter"> </div>
 </div>
 </div>