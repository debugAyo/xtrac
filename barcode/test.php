<?php
    
    //Include the barcode script
    
    include_once 'barcode.php';
    
    //Handle if text posted
    $text = $_POST['text'];
	$text1 = $_POST['text1'];
	$text2 = $_POST['text2'];
	$text3 = $_POST['text3'];
	$text4 = $_POST['text4'];
	$text5 = $_POST['text5'];
	$text6 = $_POST['text6'];
	$text7 = $_POST['text7'];
	$text8 = $_POST['text8'];
	$text9 = $_POST['text9'];
	if($_POST['text']||$_POST['text1'] ||$_POST['text2']||$_POST['text3']||$_POST['text4']||$_POST['text5']||$_POST['text6']||$_POST['text7']||$_POST['text8']||$_POST['text9']) {
		
        //Create the barcode
        
		$img			=	code128BarCode($_POST['text'], 1);
		$img1			=	code128BarCode($_POST['text1'], 1);
		$img2			=	code128BarCode($_POST['text2'], 1);
		$img3			=	code128BarCode($_POST['text3'], 1);
		$img4			=	code128BarCode($_POST['text4'], 1);
		$img5			=	code128BarCode($_POST['text5'], 1);
		$img6			=	code128BarCode($_POST['text6'], 1);
		$img7			=	code128BarCode($_POST['text7'], 1);
		$img8			=	code128BarCode($_POST['text8'], 1);
		$img9			=	code128BarCode($_POST['text9'], 1);
		
        //Start output buffer to capture the image
        //Output PNG image
        
		ob_start();
		imagepng($img);
		ob_start();
		imagepng($img1);
		ob_start();
		imagepng($img2);
		ob_start();
		imagepng($img3);
		ob_start();
		imagepng($img4);
		ob_start();
		imagepng($img5);
		ob_start();
		imagepng($img6);
		ob_start();
		imagepng($img7);
		ob_start();
		imagepng($img8);
		ob_start();
		imagepng($img9);
		
        //Get the image from the output buffer
        
		$output_img		=	ob_get_clean();
		$output_img1	=   ob_get_clean();
		$output_img2	=	ob_get_clean();
		$output_img3	=   ob_get_clean();
		$output_img4	=	ob_get_clean();
		$output_img5	=   ob_get_clean();
		$output_img6	=	ob_get_clean();
		$output_img7	=   ob_get_clean();
		$output_img8	=	ob_get_clean();
		$output_img9	=   ob_get_clean();
		
	}
	
	 
	
?>

	
	


<?php if($_POST['text']) echo '<center><img src="data:image/png;base64,' . base64_encode($output_img) . '" /><br> '; echo $text; echo '<hr width="50%">';?>
<?php if($_POST['text1']) echo '<center><img src="data:image/png;base64,' . base64_encode($output_img1) . '" /><br> '; echo $text1; echo '<hr width="50%">';?>
<?php if($_POST['text2']) echo '<center><img src="data:image/png;base64,' . base64_encode($output_img2) . '" /><br> '; echo $text2; echo '<hr width="50%">';?>
<?php if($_POST['text3']) echo '<center><img src="data:image/png;base64,' . base64_encode($output_img3) . '" /><br> '; echo $text3; echo '<hr width="50%">';?>
<?php if($_POST['text4']) echo '<center><img src="data:image/png;base64,' . base64_encode($output_img4) . '" /><br> '; echo $text4; echo '<hr width="50%">';?>
<?php if($_POST['text5']) echo '<center><img src="data:image/png;base64,' . base64_encode($output_img5) . '" /><br> '; echo $text5; echo '<hr width="50%">';?>
<?php if($_POST['text6']) echo '<center><img src="data:image/png;base64,' . base64_encode($output_img6) . '" /><br> '; echo $text6; echo '<hr width="50%">';?>
<?php if($_POST['text7']) echo '<center><img src="data:image/png;base64,' . base64_encode($output_img7) . '" /><br> '; echo $text7; echo '<hr width="50%">';?>
<?php if($_POST['text8']) echo '<center><img src="data:image/png;base64,' . base64_encode($output_img8) . '" /><br> '; echo $text8; echo '<hr width="50%">';?>
<?php if($_POST['text9']) echo '<center><img src="data:image/png;base64,' . base64_encode($output_img9) . '" /><br> '; echo $text9; echo '<hr width="50%">';?>