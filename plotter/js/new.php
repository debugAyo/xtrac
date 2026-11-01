<?php

//$dropdown = $_POST['dropdown'];
		
		include '../link/connect.php';
		
		//$sql = "SELECT *, COUNT(id) AS platform FROM user_login WHERE consent='Yes' && protitle_id='$dropdown' GROUP BY vacsop";
		
		//$sql = "SELECT *, COUNT(id) AS complete FROM comp_projects GROUP BY status";
		
		//$result = mysqli_query($conn, "SELECT personnel_employee.photo, personnel_employee.card_no, personnel_employee.first_name, personnel_employee.email, iclock_transaction.punch_state, iclock_transaction.emp_code, iclock_transaction.punch_time  FROM personnel_employee INNER JOIN iclock_transaction ON personnel_employee.emp_code = iclock_transaction.emp_code WHERE personnel_employee.address='$class' && iclock_transaction.punch_state='0' && iclock_transaction.punch_time LIKE '%$date%' ORDER BY punch_time DESC");
		//$sql = "SELECT comp_projects.*, COUNT(comp_projects.status) AS complete_pro, ongoing_projects.projectid, ongoing_projects.status, ongoing_projects.id,  COUNT(ongoing_projects.id)  AS proj_stat FROM comp_projects INNER JOIN ongoing_projects GROUP BY comp_projects.projectid";
		
		$sql = "SELECT comp_projects.*, COUNT(id) ongoing_projects.* FROM comp_projects INNER JOIN ongoing_projects GROUP BY comp_projects.status, ongoing_projects.status,";
		
		$result = $conn->query($sql);
		
		$jsonArray = array();
		
		if ($result->num_rows > 0) {
		  
		  while($row = $result->fetch_assoc()) {
			  
			 /* if ($row['status'] == 'Completed') {
				$prostatus = $row['status'];
				
				$projstat=$row['projstat'];
				$compro=$row['status'];
				
				echo $projstat .'<br/>';
				echo $compro;
	}*/
	

		    $jsonArrayItem = array();
		    $jsonArrayItem['y'] = $row['COUNT(id)'];
		    $jsonArrayItem['a'] = $row['status'];
			///$jsonArrayItem['b'] = $row['proj_stat'];
		    //append the above created object into the main array.
		    array_push($jsonArray, $jsonArrayItem);
		  }
		}
		//Closing the connection to DB
		$conn->close();
		
		//header('Content-type: application/json');
		 
		//echo json_encode($jsonArray);
		echo '<br>';
	?>




<html>
<head>
<link rel="stylesheet" href="../plotter/css/morris.css">
<script src="../plotter/js/jquery.min.js"></script>
<script src="../plotter/js/raphael-min.js"></script>
<script src="../plotter/js/morris.min.js"></script>

</head>

<body>

<div id="newchart" style="height: 250px;"></div>

<script>
Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'newchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  
  data: <?php echo json_encode($jsonArray);?>,
  
  // The name of the data record attribute that contains x-values.
  //xkey: 'cron_time',
  
  xkey: ['y'],
  
  // A list of names of data record attributes that contain y-values.
   //ykeys: ['images_processed', 'images_failed'],
  
  ykeys: ['a'],
 
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  //labels: ['Images Processed', 'Images Failed'],
  
 labels: ['Total']
});
</script>

</body>
</html>


