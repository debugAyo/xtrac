<html>
  <head>
    <meta charset="utf-8" />
    <script src="../ckeditor/ckeditor.js"></script>
    <style>
      .button {
        background-color: #155DE9;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        font-family: 'Arial';
      }
    </style>
    <script type="text/javascript">
      window.onload = () => {
        CKEDITOR.replace("grp_exco");
      };

      function sendText() {
        window.parent.postMessage(CKEDITOR.instances.CK1.getData(), "*");
      }
    </script>
  </head>
  <body>

<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-group fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Group Loan Application Form</h3>	
<form id="myForm" action="" method="post" onchange="this.form.submit()" enctype="multipart/form-data">
<input type="hidden" name="list" value="Group Loan Application Form" onchange="this.form.submit()">

<label for "grp-id">Group ID</label>
<input type="text" name="grp_id" minlength="5" maxlength="6" Placeholder="Group ID">
<h3>Loan Details</h3>
<label for "loan-purp">Loan Purpose</label>
<textarea cols="4" rows="4" name="loan_purp" Placeholder="Loan Purpose"></textarea>
<label for "loan-amt">Loan Amount Requested</label>
<input type="number" name="loan_amt" class="date" Placeholder="Loan Amount">
<label for "loan-term">Loan Repayment Term</label>
<input type="number" name="duration" class="date" Placeholder="Duration (in months)">
<h3>Group Financial Information</h3>
<label for "month-inc">Monthly Income of the Group</label>
<input type="currency" name="month_inc" class="date" Placeholder="Total Monthly Income">
<label for "month-exp">Monthly Expenses of the Group</label>
<input type="currency" name="month_exp" class="date" Placeholder="Monthly Expenses of the Group">

<h3>Group Bank Account Information</h3>
<label for "grp-account-name">Bank Name</label>
<input type="currency" name="grp_acct_name" class="date" Placeholder="Bank Name">
<label for "grp-account">Bank Account</label>
<input type="currency" name="grp_acct_no" class="date" Placeholder="Bank Account">

<h3>Proposed Business/Project Details (if applicable)</h3>
<label for "proj-name">Project Name</label>
<input type="text" name="proj_name" class="date" Placeholder="Project Name">
<label for "proj-descrp">Project Description</label>
<textarea name="proj_descrp" Placeholder="Project Description"></textarea>
<label for "proj-name">Project Address</label>
<input type="text" name="proj_address" Placeholder="Project Address">
<label for "proj-structure">Project Ownership Structure</label>
<input type="text" name="proj_structure" Placeholder="Project Ownership Structure">

<h3>Declaration and Signatures</h3>
<label for "declaration">Declaration</label>
<textarea name="declaration" Placeholder="Declaration" readonly>By signing below, we certify that all information provided in this application is true and accurate to the best of our knowledge.</textarea>
<h3>Signatures</h3>
<label for "sign">Signature of Group Leader/Contact Person</label>
<input type="file" name="lead_sign" class="date">
<label for "sign">Signature of Group Member</label>
<input type="file" name="grp_sign" class="date">

<center><button type="submit" name="submit" class="login-btn w3-green w3-hover-blue" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></center>
	
</form>

</div>
<div class="w3-quarter">
</div>
</div>
<script>
$w.onReady(function () {
  $w("#myHtmlComponent").onMessage((event) => {
    $w("#myText").html = event.data;
  });
});
</script>

<script>
$(document).ready(function() {
$('#task').on('change', function() {
var task_id = this.value;
$.ajax({
url: "../application/task_categ.php",
type: "POST",
data: {
task_id: task_id
},
cache: false,
success: function(result){
$("#start-timeline").html(result);

}

});
}); 
});
</script>

<script>
$(document).ready(function() {
$('#subtask').on('change', function() {
var subtask_id = this.value;
$.ajax({
url: "../application/subtask_categ.php",
type: "POST",
data: {
subtask_id: subtask_id
},
cache: false,
success: function(result){
$("#task-boq-spec").html(result);

}

});
}); 
});
</script>