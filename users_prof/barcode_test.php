
<div class="w3-row-padding">
<h3 class="w3-text-green w3-hover-text-red w3-white w3-center">Auto-Generated Barcode Cards</h3>
<div class="w3-col w3-padding-large w3-white w3-border" id="printableDiv">


<?php
    
    //Include the barcode script
   echo '<font face="arial" size="1">';
    include_once 'barcode.php';
    
    //Handle if text posted
    $text = $_POST['text'];
	
	if($_POST['text']) {
		
        //Create the barcode
        
		$img			=	code128BarCode($_POST['text'], 1);
		
		
        //Start output buffer to capture the image
        //Output PNG image
        
		ob_start();
		imagepng($img);
		
		
        //Get the image from the output buffer
        
		$output_img		=	ob_get_clean();
		
		
	}
	
include '../link/connect.php';
$sql = "SELECT * FROM par_prof WHERE pin='$text'";
//$sql = "SELECT *, SUBSTRING_INDEX(fam_name, ' ', 1) AS famname FROM par_prof WHERE pin='$text'";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($result)) {
//$name = $row['fam_name'];
$formatted_id = str_pad($row["id"], 4, '0', STR_PAD_LEFT);
	
?>

<div class="w3-row-padding">
<div class="w3-half">

<?php if($_POST['text']) echo '<center><img src="../images/GAA_cards.jpg" width="100%" /><br>';
//echo '<p style="margin-top:-40%; z-index:1;text-align:center; font-size: 24px">'.$row["famname"].' Family</p>'; echo '<p style="margin-top:5%; z-index:1"><img src="data:image/png;base64,' . base64_encode($output_img) . '" /></p> '; /*echo $text1; echo '';*/ echo '<p style="margin-top:10%; z-index:1;text-align:center; "></p>'; }
echo '<p style="margin-top:-40%; z-index:1;text-align:center; font-size: 24px">'.$row["fam_name"].' </p>'; echo '<p style="margin-top:5%; z-index:1"><img src="data:image/png;base64,' . base64_encode($output_img) . '" /></p> '; /*echo $text1; echo '';*/ echo '<p style="margin-top:10%; z-index:1;text-align:center; "></p>'; }?>
</div>
<div class="w3-half"><?php if($_POST['text']) echo '<center><img src="../images/GAA_cards_back.jpg" width="100%" /><br>';
echo '<p style="margin-top:-6%; z-index:1;text-align:center; font-size: 17px;color:#ccc">'.$formatted_id.'</p>';?>
</div>
</div>	
	<?php
    
    //Include the barcode script
    
    echo '<font face="arial" size="1">';
    include_once 'barcode.php';
    
    //Handle if text posted
    $text1 = $_POST['text1'];
	
	if($_POST['text1']) {
		
        //Create the barcode
        
		$img1			=	code128BarCode($_POST['text1'], 1);
		
		
        //Start output buffer to capture the image
        //Output PNG image
        
		ob_start();
		imagepng($img1);
		
		
        //Get the image from the output buffer
        
		$output_img1		=	ob_get_clean();
		
		
	}
	
include '../link/connect.php';
$sql = "SELECT * FROM par_prof WHERE pin='$text1'";
//$sql = "SELECT *, SUBSTRING_INDEX(fam_name, ' ', 1) AS famname FROM par_prof WHERE pin='$text1'";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($result)) {
//$name = $row['fam_name']; 
$formatted_id = str_pad($row["id"], 4, '0', STR_PAD_LEFT);	
?>

	
<div class="w3-row-padding">
<div class="w3-half">
<?php if($_POST['text1'])  echo '<center><img src="../images/GAA_cards.jpg" width="100%" /><br>';
//echo '<p style="margin-top:-40%; z-index:1;text-align:center; font-size: 24px">'.$row["famname"].' Family</p>'; echo '<p style="margin-top:5%; z-index:1;"><img src="data:image/png;base64,' . base64_encode($output_img1) . '" /></p> ';  /*echo $text1; echo '';*/ echo '<p style="margin-top:10%; z-index:1;text-align:center; "></p>'; }
echo '<p style="margin-top:-40%; z-index:1;text-align:center; font-size: 24px">'.$row["fam_name"].' </p>'; echo '<p style="margin-top:5%; z-index:1;"><img src="data:image/png;base64,' . base64_encode($output_img1) . '" /></p> ';  /*echo $text1; echo '';*/ echo '<p style="margin-top:10%; z-index:1;text-align:center; "></p>'; }?>
</div>
<div class="w3-half"><?php if($_POST['text1']) echo '<center><img src="../images/GAA_cards_back.jpg" width="100%" /><br>';
echo '<p style="margin-top:-6%; z-index:1;text-align:center; font-size: 17px;color:#ccc">'.$formatted_id.'</p>';?>
</div>
</div>	
		
<?php
    
    //Include the barcode script
    echo '<font face="arial" size="1">';
    
    include_once 'barcode.php';
    
    //Handle if text posted
    $text2 = $_POST['text2'];
	
	if($_POST['text2']) {
		
        //Create the barcode
        
		$img2			=	code128BarCode($_POST['text2'], 1);
		
		
        //Start output buffer to capture the image
        //Output PNG image
        
		ob_start();
		imagepng($img2);
		
		
        //Get the image from the output buffer
        
		$output_img2		=	ob_get_clean();
		
		
	}
	
include '../link/connect.php';
$sql = "SELECT * FROM par_prof WHERE pin='$text2'";
//$sql = "SELECT *, SUBSTRING_INDEX(fam_name, ' ', 1) AS famname FROM par_prof WHERE pin='$text2'";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($result)) {
//'.$row["fam_name"].' Family	
$formatted_id = str_pad($row["id"], 4, '0', STR_PAD_LEFT);
?>

<div class="w3-row-padding">
<div class="w3-half">
<?php if($_POST['text2']) echo '<center><img src="../images/GAA_cards.jpg" width="100%" /><br>';
//echo '<p style="margin-top:-40%; z-index:1;text-align:center; font-size: 24px">'.$row["famname"].' Family</p>'; echo '<p style="margin-top:5%; z-index:1"><img src="data:image/png;base64,' . base64_encode($output_img2) . '" /></p> '; /*echo $text1; echo '';*/ echo '<p style="margin-top:10%; z-index:1;text-align:center; "></p>'; }
echo '<p style="margin-top:-40%; z-index:1;text-align:center; font-size: 24px">'.$row["fam_name"].' </p>'; echo '<p style="margin-top:5%; z-index:1"><img src="data:image/png;base64,' . base64_encode($output_img2) . '" /></p> '; /*echo $text1; echo '';*/ echo '<p style="margin-top:10%; z-index:1;text-align:center; "></p>'; }?>
</div>
<div class="w3-half"><?php if($_POST['text2']) echo '<center><img src="../images/GAA_cards_back.jpg" width="100%" /><br>';
echo '<p style="margin-top:-6%; z-index:1;text-align:center; font-size: 17px;color:#ccc">'.$formatted_id.'</p>';?>
</div>
</div>	
	
	
	<?php
    
    //Include the barcode script
    echo '<font face="arial" size="1">';
    
    include_once 'barcode.php';
    
    //Handle if text posted
    $text3 = $_POST['text3'];
	
	if($_POST['text3']) {
		
        //Create the barcode
        
		$img3			=	code128BarCode($_POST['text3'], 1);
		
		
        //Start output buffer to capture the image
        //Output PNG image
        
		ob_start();
		imagepng($img3);
		
		
        //Get the image from the output buffer
        
		$output_img3		=	ob_get_clean();
		
		
	}
	
include '../link/connect.php';
$sql = "SELECT * FROM par_prof WHERE pin='$text3'";
//$sql = "SELECT *, SUBSTRING_INDEX(fam_name, ' ', 1) AS famname FROM par_prof WHERE pin='$text3'";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($result)) {
//'.$row["fam_name"].' Family		 
$formatted_id = str_pad($row["id"], 4, '0', STR_PAD_LEFT);	
?>

<div class="w3-row-padding">
<div class="w3-half">
<?php if($_POST['text3']) echo '<center><img src="../images/GAA_cards.jpg" width="100%" /><br>';
//echo '<p style="margin-top:-40%; z-index:1;text-align:center; font-size: 24px">'.$row["famname"].' Family</p>'; echo '<p style="margin-top:5%; z-index:1"><img src="data:image/png;base64,' . base64_encode($output_img3) . '" /></p> '; /*echo $text1; echo '';*/ echo '<p style="margin-top:10%; z-index:1;text-align:center; "></p>'; }
echo '<p style="margin-top:-40%; z-index:1;text-align:center; font-size: 24px">'.$row["fam_name"].' </p>'; echo '<p style="margin-top:5%; z-index:1"><img src="data:image/png;base64,' . base64_encode($output_img3) . '" /></p> '; /*echo $text1; echo '';*/ echo '<p style="margin-top:10%; z-index:1;text-align:center; "></p>'; }?>
</div>
<div class="w3-half"><?php if($_POST['text3']) echo '<center><img src="../images/GAA_cards_back.jpg" width="100%" /><br>';
echo '<p style="margin-top:-6%; z-index:1;text-align:center; font-size: 17px;color:#ccc">'.$formatted_id.'</p>';?></div>
</div>	
	
	<?php
    
    //Include the barcode script
    echo '<font face="arial" size="1">';
    
    include_once 'barcode.php';
    
    //Handle if text posted
    $text4 = $_POST['text4'];
	
	if($_POST['text4']) {
		
        //Create the barcode
        
		$img4	=	code128BarCode($_POST['text4'], 1);
		
		
        //Start output buffer to capture the image
        //Output PNG image
        
		ob_start();
		imagepng($img4);
		
		
        //Get the image from the output buffer
        
		$output_img4	=	ob_get_clean();
		
		
	}
	
include '../link/connect.php';
$sql = "SELECT * FROM par_prof WHERE pin='$text4'";
//$sql = "SELECT *, SUBSTRING_INDEX(fam_name, ' ', 1) AS famname FROM par_prof WHERE pin='$text4'";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($result)) {
//'.$row["fam_name"].' Family		 
$formatted_id = str_pad($row["id"], 4, '0', STR_PAD_LEFT);		 
	
?>

<div class="w3-row-padding">
<div class="w3-half">
<?php if($_POST['text4']) echo '<center><img src="../images/GAA_cards.jpg" width="100%" /><br>';
//echo '<p style="margin-top:-40%; z-index:1;text-align:center; font-size: 24px">'.$row["famname"].' Family</p>'; echo '<p style="margin-top:5%; z-index:1"><img src="data:image/png;base64,' . base64_encode($output_img4) . '" /></p> '; /*echo $text1; echo '';*/ echo '<p style="margin-top:10%; z-index:1;text-align:center; "></p>'; }
echo '<p style="margin-top:-40%; z-index:1;text-align:center; font-size: 24px">'.$row["fam_name"].' </p>'; echo '<p style="margin-top:5%; z-index:1"><img src="data:image/png;base64,' . base64_encode($output_img4) . '" /></p> '; /*echo $text1; echo '';*/ echo '<p style="margin-top:10%; z-index:1;text-align:center; "></p>'; }?>
</div>
<div class="w3-half"><?php if($_POST['text4']) echo '<center><img src="../images/GAA_cards_back.jpg" width="100%" /><br>';
echo '<p style="margin-top:-6%; z-index:1;text-align:center; font-size: 17px;color:#ccc">'.$formatted_id.'</p>';?></div>
</div>


<?php
    
    //Include the barcode script
    echo '<font face="arial" size="1">';
    
    include_once 'barcode.php';
    
    //Handle if text posted
    $text5 = $_POST['text5'];
	
	if($_POST['text5']) {
		
        //Create the barcode
        
		$img5			=	code128BarCode($_POST['text5'], 1);
		
		
        //Start output buffer to capture the image
        //Output PNG image
        
		ob_start();
		imagepng($img5);
		
		
        //Get the image from the output buffer
        
		$output_img5		=	ob_get_clean();
		
		
	}
	
include '../link/connect.php';
$sql = "SELECT * FROM par_prof WHERE pin='$text5'";
//$sql = "SELECT *, SUBSTRING_INDEX(fam_name, ' ', 1) AS famname FROM par_prof WHERE pin='$text5'";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($result)) {
//'.$row["fam_name"].' Family	 
$formatted_id = str_pad($row["id"], 4, '0', STR_PAD_LEFT);	
?>

<div class="w3-row-padding">
<div class="w3-half">
<?php if($_POST['text5']) echo '<center><img src="../images/GAA_cards.jpg" width="100%" /><br>';
//echo '<p style="margin-top:-40%; z-index:1;text-align:center; font-size: 24px">'.$row["famname"].' Family</p>'; echo '<p style="margin-top:5%; z-index:1"><img src="data:image/png;base64,' . base64_encode($output_img5) . '" /></p> '; /*echo $text1; echo '';*/ echo '<p style="margin-top:10%; z-index:1;text-align:center; "></p>'; }
echo '<p style="margin-top:-40%; z-index:1;text-align:center; font-size: 24px">'.$row["fam_name"].' </p>'; echo '<p style="margin-top:5%; z-index:1"><img src="data:image/png;base64,' . base64_encode($output_img5) . '" /></p> '; /*echo $text1; echo '';*/ echo '<p style="margin-top:10%; z-index:1;text-align:center; "></p>'; }?>
</div>
<div class="w3-half"><?php if($_POST['text5']) echo '<center><img src="../images/GAA_cards_back.jpg" width="100%" /><br>';
echo '<p style="margin-top:-6%; z-index:1;text-align:center; font-size: 17px;color:#ccc">'.$formatted_id.'</p>';?>
</div>
</div>

<?php
    
    //Include the barcode script
    echo '<font face="arial" size="1">';
    
    include_once 'barcode.php';
    
    //Handle if text posted
    $text6 = $_POST['text6'];
	
	if($_POST['text6']) {
		
        //Create the barcode
        
		$img6			=	code128BarCode($_POST['text6'], 1);
		
		
        //Start output buffer to capture the image
        //Output PNG image
        
		ob_start();
		imagepng($img6);
		
		
        //Get the image from the output buffer
        
		$output_img6		=	ob_get_clean();
		
		
	}
	
	 
include '../link/connect.php';
$sql = "SELECT * FROM par_prof WHERE pin='$text6'";
//$sql = "SELECT *, SUBSTRING_INDEX(fam_name, ' ', 1) AS famname FROM par_prof WHERE pin='$text6'";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($result)) {
//'.$row["fam_name"].' Family	
$formatted_id = str_pad($row["id"], 4, '0', STR_PAD_LEFT);
?>

<div class="w3-row-padding">
<div class="w3-half">
<?php if($_POST['text6'])  echo '<center><img src="../images/GAA_cards.jpg" width="100%" /><br>';
//echo '<p style="margin-top:-40%; z-index:1;text-align:center; font-size: 24px">'.$row["famname"].' Family</p>'; echo '<p style="margin-top:5%; z-index:1"><img src="data:image/png;base64,' . base64_encode($output_img6) . '" /></p> '; /*echo $text1; echo '';*/ echo '<p style="margin-top:10%; z-index:1;text-align:center; "></p>'; }
echo '<p style="margin-top:-40%; z-index:1;text-align:center; font-size: 24px">'.$row["fam_name"].' </p>'; echo '<p style="margin-top:5%; z-index:1"><img src="data:image/png;base64,' . base64_encode($output_img6) . '" /></p> '; /*echo $text1; echo '';*/ echo '<p style="margin-top:10%; z-index:1;text-align:center; "></p>'; }?>
</div>
<div class="w3-half"><?php if($_POST['text6']) echo '<center><img src="../images/GAA_cards_back.jpg" width="100%" /><br>';
echo '<p style="margin-top:-6%; z-index:1;text-align:center; font-size: 17px;color:#ccc">'.$formatted_id.'</p>';?>
</div>
</div>	
	
	<?php
    
    //Include the barcode script
    echo '<font face="arial" size="1">';
    
    include_once 'barcode.php';
    
    //Handle if text posted
    $text7 = $_POST['text7'];
	
	if($_POST['text7']) {
		
        //Create the barcode
        
		$img7			=	code128BarCode($_POST['text7'], 1);
		
		
        //Start output buffer to capture the image
        //Output PNG image
        
		ob_start();
		imagepng($img7);
		
		
        //Get the image from the output buffer
        
		$output_img7		=	ob_get_clean();
		
		
	}
include '../link/connect.php';
$sql = "SELECT * FROM par_prof WHERE pin='$text7'";
//$sql = "SELECT *, SUBSTRING_INDEX(fam_name, ' ', 1) AS famname FROM par_prof WHERE pin='$text7'";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($result)) {
//'.$row["fam_name"].' Family	
$formatted_id = str_pad($row["id"], 4, '0', STR_PAD_LEFT);
	 
	
?>

<div class="w3-row-padding">
<div class="w3-half">
<?php if($_POST['text7']) echo '<center><img src="../images/GAA_cards.jpg" width="100%" /><br>';
//echo '<p style="margin-top:-40%; z-index:1;text-align:center; font-size: 24px">'.$row["famname"].' Family</p>'; echo '<p style="margin-top:5%; z-index:1"><img src="data:image/png;base64,' . base64_encode($output_img7) . '" /></p> '; /*echo $text1; echo '';*/ echo '<p style="margin-top:10%; z-index:1;text-align:center; "></p>'; }
echo '<p style="margin-top:-40%; z-index:1;text-align:center; font-size: 24px">'.$row["fam_name"].' </p>'; echo '<p style="margin-top:5%; z-index:1"><img src="data:image/png;base64,' . base64_encode($output_img7) . '" /></p> '; /*echo $text1; echo '';*/ echo '<p style="margin-top:10%; z-index:1;text-align:center; "></p>'; }?>
</div>
<div class="w3-half"><?php if($_POST['text7']) echo '<center><img src="../images/GAA_cards_back.jpg" width="100%" /><br>';
echo '<p style="margin-top:-6%; z-index:1;text-align:center; font-size: 17px;color:#ccc">'.$formatted_id.'</p>';?>
</div>
</div>

<?php
    
    //Include the barcode script
    echo '<font face="arial" size="1">';
    
    include_once 'barcode.php';
    
    //Handle if text posted
    $text8 = $_POST['text8'];
	
	if($_POST['text8']) {
		
        //Create the barcode
        
		$img8			=	code128BarCode($_POST['text8'], 1);
		
		
        //Start output buffer to capture the image
        //Output PNG image
        
		ob_start();
		imagepng($img8);
		
		
        //Get the image from the output buffer
        
		$output_img8	=	ob_get_clean();
		
		
	}
	
include '../link/connect.php';
$sql = "SELECT * FROM par_prof WHERE pin='$text8'";
//$sql = "SELECT *, SUBSTRING_INDEX(fam_name, ' ', 1) AS famname FROM par_prof WHERE pin='$text8'";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($result)) {
//'.$row["fam_name"].' Family	
$formatted_id = str_pad($row["id"], 4, '0', STR_PAD_LEFT); 
	
?>

<div class="w3-row-padding">
<div class="w3-half">
<?php if($_POST['text8'])  echo '<center><img src="../images/GAA_cards.jpg" width="100%" /><br>';
//echo '<p style="margin-top:-40%; z-index:1;text-align:center; font-size: 24px">'.$row["famname"].' Family</p>'; echo '<p style="margin-top:5%; z-index:1"><img src="data:image/png;base64,' . base64_encode($output_img8) . '" /></p> '; /*echo $text8; echo '';*/ echo '<p style="margin-top:10%; z-index:1;text-align:center; "></p>'; }
echo '<p style="margin-top:-40%; z-index:1;text-align:center; font-size: 24px">'.$row["fam_name"].' </p>'; echo '<p style="margin-top:5%; z-index:1"><img src="data:image/png;base64,' . base64_encode($output_img8) . '" /></p> '; /*echo $text8; echo '';*/ echo '<p style="margin-top:10%; z-index:1;text-align:center; "></p>'; }?>
</div>
<div class="w3-half"><?php if($_POST['text8']) echo '<center><img src="../images/GAA_cards_back.jpg" width="100%" /><br>';
echo '<p style="margin-top:-6%; z-index:1;text-align:center; font-size: 17px;color:#ccc">'.$formatted_id.'</p>';?>
</div>
</div>	
	<?php
    
    //Include the barcode script
    echo '<font face="arial" size="1">';
    
    include_once 'barcode.php';
    
    //Handle if text posted
    $text9 = $_POST['text9'];
	
	if($_POST['text9']) {
		
        //Create the barcode
        
		$img9			=	code128BarCode($_POST['text9'], 1);
		
		
        //Start output buffer to capture the image
        //Output PNG image
        
		ob_start();
		imagepng($img9);
		
		
        //Get the image from the output buffer
        
		$output_img9		=	ob_get_clean();
		
		
	}
	
include '../link/connect.php';
$sql = "SELECT * FROM par_prof WHERE pin='$text9'";
//$sql = "SELECT *, SUBSTRING_INDEX(fam_name, ' ', 1) AS famname FROM par_prof WHERE pin='$text9'";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($result)) {
//'.$row["fam_name"].' Family	 
$formatted_id = str_pad($row["id"], 4, '0', STR_PAD_LEFT);	
?>

<div class="w3-row-padding">
<div class="w3-half">
<?php if($_POST['text9']) echo '<center><img src="../images/GAA_cards.jpg" width="100%" /><br>';
//echo '<p style="margin-top:-40%; z-index:1;text-align:center; font-size: 24px">'.$row["famname"].' Family</p>'; echo '<p style="margin-top:5%; z-index:1"><img src="data:image/png;base64,' . base64_encode($output_img9) . '" /></p> '; /*echo $text9; echo '';*/ echo '<p style="margin-top:10%; z-index:1;text-align:center; "></p>'; }
echo '<p style="margin-top:-40%; z-index:1;text-align:center; font-size: 24px">'.$row["fam_name"].' </p>'; echo '<p style="margin-top:5%; z-index:1"><img src="data:image/png;base64,' . base64_encode($output_img9) . '" /></p> '; /*echo $text9; echo '';*/ echo '<p style="margin-top:10%; z-index:1;text-align:center; "></p>'; }?>
</div>
<div class="w3-half">
<?php if($_POST['text9']) echo '<center><img src="../images/GAA_cards_back.jpg" width="100%" /><br>';
echo '<p style="margin-top:-6%; z-index:1;text-align:center; font-size: 17px;color:#ccc">'.$formatted_id.'</p>';?>

</div>
</div>
</div></div>
<div class="w3-row-padding">
<div class="w3-half w3-padding-large">
<button onclick="printDiv('printableDiv')">Print Div</button>
    <script>
        function printDiv(divId) {
            // Get the div content using its ID
            var divContent = document.getElementById(divId).innerHTML;
            
            // Create a new window to print the content
            var printWindow = window.open('', '', 'height=1000,width=1000');
            
            // Write the HTML content to the new window
            printWindow.document.write('<html><head><title>Print Div</title>');
            printWindow.document.write('</head><body>');
            printWindow.document.write(divContent);
            printWindow.document.write('</body></html>');
            
            // Close the document to signal completion of content loading
            printWindow.document.close();
            
            // Wait for the new window content to load and then trigger print
            printWindow.onload = function () {
                printWindow.focus(); // Focus the new window
                printWindow.print(); // Trigger print dialog
                printWindow.close(); // Close the print window after printing
            };
        }
    </script>
</div>
</div>