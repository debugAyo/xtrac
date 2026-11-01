<?php $dev_id = $_POST['dev_id'];?>

<?php 

$list = $_POST['list'];
if ($list == 'Delete') {
include 'sto_auth_assdelete.php';
//exit();
}

?>		
<?php 
		
 
			$list=$_POST['list'];
			if ($list=='Edit Item') {
			include '../link/connect.php';
									
							$sql = "SELECT * FROM additem WHERE devid='$dev_id'";
								$result = mysqli_query($conn,$sql);
							if(mysqli_num_rows($result)==0)
        {
        
         echo '<br><p style="margin-left: 40px"> This <b>Item </b>Does Not Exist Here</p>';
        include 'comment.php';
       exit();
       }
		
			}
			
			if ($list=='Edit Software Assoc') {
			include 'connect.php';
									
							$sql = "SELECT * FROM software_ass WHERE devid='$dev_id'";
							$result = mysqli_query($conn,$sql);
							
							if(mysqli_num_rows($result)==0)
        {
        echo '<br><br><p style="margin-left: 40px"> No <b>Software </b> has been linked to this Item</p>';
        include 'comment.php';
       exit();
       }

							
							while ($myrow = mysqli_fetch_array($result)) {
							
			include 'soft_update.php';
			exit();
			}
			}
			
			if ($list=='Edit Invoice Assoc') {
			
			include '../link/connect.php';
									
							$sql = "SELECT * FROM invoice_ass WHERE devid='$dev_id'";
							$result = mysqli_query($conn,$sql);
							
							if(mysqli_num_rows($result)==0)
        {
        echo '<br><br><p style="margin-left: 40px"> No <b>Invoice</b> has been linked to this Item</p>';
         include 'comment.php';
       exit();
       }

							
							while ($myrow = mysqli_fetch_array($result)) {
							
			include 'invoice_update.php';
			exit();
			}

			}
			
			if ($list=='Edit Parts Assoc') {
			include 'connect.php';
									
							$sql = "SELECT * FROM parts_ass WHERE devid='$dev_id'";
							$result = mysqli_query($conn,$sql);
							
							if(mysqli_num_rows($result)==0)
        {
        echo '<br><p style="margin-left: 40px"> No <b>Spare part(s)</b> has been linked to this Item</p>';

        include 'comment.php';
        
       exit();
       }
while ($myrow = mysqli_fetch_array($result)) {
							
			include 'parts_update.php';
			exit();
			}
			}
			if ($list=='Edit Contract Assoc') {
			
			include '../link/connect.php';
									
							$sql = "SELECT * FROM contract_ass WHERE devid='$dev_id'";
							$result = mysqli_query($conn,$sql);
							if(mysqli_num_rows($result)==0)
        {
         echo '<br><p style="margin-left: 40px"> No <b>Contractual</b> Evidence has been linked to this Item</p>';

         include 'comment.php';
         
       exit();
       }

							while ($myrow = mysqli_fetch_array($result)) {
							
			include 'contract_update.php';
			exit();
			}
			}
			if ($list=='Add New Asset') {
			include 'add_item.php';
			exit();
			}
				else {	
					

								

									$dev_id = $_POST['dev_id'];
									if (!$dev_id) {
									echo 'Device ID is missing';
									exit();
									}
									include 'connect.php';
									
							$sql = "SELECT * FROM additem WHERE devid='$dev_id'";
							$result = mysqli_query($conn,$sql);
							if(mysqli_num_rows($result)==0)
        {
        
        echo '<br><p style="margin-left: 40px"> This <b>Item </b>Does Not Exist Here</p>';
        include 'comment.php';
         
       //exit();
       }

$sql = "SELECT * FROM additem WHERE devid='$dev_id'";
$result = mysqli_query($conn,$sql);
while ($myrow = mysqli_fetch_array($result)) {
							
							$categ = $myrow['category'];
						
							
			if ($categ=='IT Infrastructure')	{
						
				include 'sto_update_form.php';
			exit();
			}
				if ($categ=='Consumables')	{
						
				include 'sto_consum_update_form.php';
			exit();
			}
			if ($categ=='Vehicles')	{	
				
			include 'sto_auto_update_form.php';
			exit();
			}
			if ($categ=='Buildings')	{		
					
			include 'sto_build_update_form.php';
			exit();
			}
			if ($categ=='Electronics Appliances')	{		
					
			include 'sto_elect_update_form.php';
			exit();
			}
			if ($categ=='Furniture')	{		
					
			include 'sto_furn_update_form.php';
			exit();
			}
			if ($categ=='Plant and Equipment')	{		
					
			include 'sto_plant_update_form.php';
			exit();
			}
			if ($categ=='Lands')	{		
					
			include 'sto_land_update_form.php';
			exit();
			}
			}
				}			
				
				?>

