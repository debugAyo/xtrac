<div class="w3-row-padding">
 <div class="w3-threequarter w3-center"> 
 <form action="" method="post" id="myForm">
 <input type="hidden" name="classid" value="<?php echo $classid; ?> ">
 <input type="hidden" name="appcode" value="<?php echo $appcode; ?> ">
 <input type="hidden" name="date" value="<?php echo $date; ?> ">
 <input type="hidden" name="list" value="Start">
 <h2><button type="submit" class="login-btn"><i class="fa fa-cog fa-spin"></i> Start Exam</button>
 </form></h2>
 </div>
 <div class="w3-quarter"></div>
</div>

<?php 

/*date variable will be used to query the exam_date, while $classid and $appcode will 
query the course with respect to registered styudents for that course.*/

/*this is going to be used as a combined SQL table query between "exam_timeable" and "course_reg" tables to 
check the student's prequalification for the exam. Only if this is verified before giving access to the "question_bank"*/


?>

