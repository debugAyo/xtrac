

<form method="POST" action="">
Track Requests

	<input type="submit" value="Issued Inventory" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family:Arial; font-size:9pt; color:#669999"><input type="submit" value="" name="list" style="border: 1px solid #F1F5F5; background-color: #F1F5F5; font-family:Arial; font-size:9pt; color:#669999"></td>
			</form>
			
			<?php 
			$list=$_POST['list'];
			if ($list=='Inventory Issuing') {
			include 'sto_invent_issu.php';
			exit();
			}
			if ($list=='Issued Inventory') {
			include 'sto_issu_invent.php';
			exit();
			}
					
					
			?>
			
