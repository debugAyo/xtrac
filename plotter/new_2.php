	<?php
		
		include '../link/connect.php';
			
	$sql = "SELECT *, COUNT(id) AS beneficiaries FROM projects_assessment GROUP BY status, intervention_prog";
		
		$result = $conn->query($sql);
		
		$jsonArray = array();
		
		if ($result->num_rows > 0) {
		  
		  while($row = $result->fetch_assoc()) {
			
	//echo '<br /> This project has impacted'  . $row['affect_pop'] . 'Communities';
	
			$jsonArrayItem = array();
		    $jsonArrayItem['y'] = $row['intervention_prog'] .' - '.   $row['status'];
		    $jsonArrayItem['a'] = $row['affect_pop'];
		    //append the above created object into the main array.
		    array_push($jsonArray, $jsonArrayItem);
		
		 }
	}
		
		//Closing the connection to DB
		$conn->close();
		
		//header('Content-type: application/json');
		 
		//echo json_encode($jsonArray);
		echo '<br />' ;
	?>





<html>
<head>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>

<body>

<div id="myfirstchart" style="height: 250px;"></div>

<script>
Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
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
  
 labels: ['Population Impacted']
});
</script>

</body>
</html>

