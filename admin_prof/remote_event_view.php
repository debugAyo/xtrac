<div class="w3-row">
 <div class="w3-threequarter"> 
<h3 style="margin-left:1%"><button class="login-btn w3-light-blue w3-text-white"><i class="fa fa-file-image-o" style="font-size:24px; color:yellow"></i> E-Surveillance</button></h3>
</div>
</div>
<div class="w3-row-padding">
 <div class="w3-half w3-center w3-white w3-border w3-border-green" style="border: 0px solid green; width:45%; cursor:pointer; border-radius:0px">
 <form action="" method="post" id="myForm">
 <input type="hidden" name="date" value="<?php echo $date; ?> ">
 <input type="hidden" name="list" value="Remote View" onchange="this.form.submit()">
<i class="fa fa-address-book-o w3-text-green" style="font-size:24px;"></i> 
<select class="w3-white w3-text-green"  id="centreid" name="centreid" onchange="this.form.submit()" style="border: 0px solid #FFF; width:80%;font-size:20px; cursor:pointer; text-transform: uppercase;"> 
<option value="">Select CENTRE ID</option>
<?php
require_once "../link/connect.php";
$result = mysqli_query($conn,"SELECT * FROM cbt_info ORDER BY centre_id ASC");
while($row = mysqli_fetch_array($result)) {

?>
<option value="<?php echo $row['id'];?>"><?php echo $row["centre_id"];?></option>
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


