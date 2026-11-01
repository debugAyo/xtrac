<html>
  <head>
    <meta charset="utf-8" />

    <script src="../ckeditor/ckeditor.js"></script>
	
	<style>
        #signatureCanvas {
            border: 1px solid grey;
            background-color: #fff;
            cursor: crosshair;
			
        }
    </style>

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
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-group fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Group Training Scheme Form</h3>	
<form id="signatureForm" action="" method="post" onchange="this.form.submit()" enctype="multipart/form-data">
<input type="hidden" name="list" value="Group Training Scheme Form" onchange="this.form.submit()">


<label for "group-id">Group ID</label>
<input type="text" name="grp_id" placeholder="Group ID">

<h3>Training Details</h3>
<label for "group-id">Training Program Title</label>
<input type="text" name="trng_titl" placeholder="Training Program Title">
<label for "group-id">Training Provider/Organization</label>
<input type="text" name="trng_prov" placeholder="Training Provider/Organization">
<label for "group-id">Training Dates</label>
<input type="date" name="start_dt" class="date" placeholder="Start Date">
<input type="date" name="end_dt" class="date" placeholder="End Date">

<h3>Training Location</h3>
<label for "trg-venue">Venue</label>
<input type="text" name="trng_venue" placeholder="Venue">
<label for "trg-addr">Address</label>
<input type="text" name="trng_address" placeholder="Address">

<h3>Training Objectives</h3>
<textarea cols="4" rows="3" name="trng_obj" placeholder="Objectives of the Training (Please describe what the group hopes to achieve from this training)"></textarea>

<h3>Additional Information</h3>
<textarea cols="4" rows="3" name="spec_req" placeholder="Special Requirements or Accommodations Needed (if any)"></textarea>

<h3>Declaration and Signature</h3>
<label for "declare">Declaration</label>
<textarea cols="4" rows="3" name="declaration" readonly>By signing below, we certify that all information provided in this application is true and accurate to the best of our knowledge.</textarea>

<h3>Signature</h3>

    <p>Signature of Group Leader/Contact Person</p>
       <center><canvas id="signatureCanvas" width="400" height="200"></canvas></center><br><br>
              <input type="hidden" id="signatureData" name="signatureData">
     
     <script>
        // Get the canvas element and context
        const canvas = document.getElementById('signatureCanvas');
        const ctx = canvas.getContext('2d');

        // Variables to keep track of mouse movements
        let isDrawing = false;
        let lastX = 0;
        let lastY = 0;

        // Event listeners for mouse movements
        canvas.addEventListener('mousedown', (e) => {
            isDrawing = true;
            [lastX, lastY] = [e.offsetX, e.offsetY];
        });

        canvas.addEventListener('mousemove', (e) => {
            if (isDrawing) {
                drawLine(lastX, lastY, e.offsetX, e.offsetY);
                [lastX, lastY] = [e.offsetX, e.offsetY];
            }
        });

        canvas.addEventListener('mouseup', () => {
            isDrawing = false;
        });

        canvas.addEventListener('mouseout', () => {
            isDrawing = false;
        });

        // Function to draw a line
        function drawLine(x1, y1, x2, y2) {
            ctx.beginPath();
            ctx.moveTo(x1, y1);
            ctx.lineTo(x2, y2);
            ctx.stroke();
            ctx.closePath();
        }

        // Function to clear the canvas
        function clearCanvas() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        }

        // Function to get base64 data of the signature and set it in the hidden input field
        function saveSignature() {
            const signatureData = canvas.toDataURL(); // Get the data URL of the canvas
            document.getElementById('signatureData').value = signatureData;
        }
    </script>



<center><button type="submit" name="submit" class="login-btn w3-green w3-hover-blue" style="border-radius:50%" onclick="saveSignature()" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button name="cancel" id="clear" onclick="clearCanvas()" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></center>
	
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