<div class="w3-row">
 <div class="w3-col"> 
<h3><button class="login-btn w3-light-blue">Text Downloads</button></h3>
</div>
</div>
<div class="w3-row-padding">
 <div class="w3-half w3-center w3-blue" style="border: 0px solid #FFF; width:45%; cursor:pointer; border-radius:0px">
 <form action="" method="post" id="myForm">
 <input type="hidden" name="date" value="<?php echo $date; ?> ">
 <input type="hidden" name="list" value="Elearn Video" onchange="this.form.submit()">
<i class="fa fa-pencil-square-o" style="font-size:24px;"></i> <select class="w3-blue w3-text-white"  id="subjectid" name="subjectid" style="border: 0px solid #FFF; width:80%;font-size:20px; cursor:pointer; text-transform: uppercase;"> 
<option value="">Select Subject</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM subjectable ORDER BY subjectname ASC");
while($row = mysqli_fetch_array($result)) {

?>
<option value="<?php echo $row['id'];?>"><?php echo $row["subjectname"];?></option>
<?php

}
?>
</select>
</div>
<div class="w3-half w3-center w3-blue-grey" style="border: 0px solid #FFF; width:40%; cursor:pointer; border-radius:0px">
<i class="fa fa-address-book-o" style="font-size:24px;"></i> <select class="w3-blue-grey w3-text-white"  id="classid" name="classid" onchange="this.form.submit()" style="border: 0px solid #FFF; width:80%;font-size:20px; cursor:pointer; text-transform: uppercase;"> 
<option value="">Select Class</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM classtable ORDER BY classname ASC");
while($row = mysqli_fetch_array($result)) {

?>
<option value="<?php echo $row['id'];?>"><?php echo $row["classname"];?></option>
<?php

}
?>
</select>
</form>
</form>

<script>
$(document).ready(function() {
  $('#mySelect').change(function() {
    $('#myForm').submit();
  });
});
</script>

 </div>

</div>


