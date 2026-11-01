<h7><center>Total Immunized by Education Level</center></h7>
<?php
		include '../link/connect.php';
		
		//$sql = "SELECT *, COUNT(id) AS age_grp FROM live_report WHERE consent='Yes' && protitle_id='$dropdown' GROUP BY age";
		
		$sql = "SELECT
    CASE
        WHEN age < 20 THEN 'Under 20'
        WHEN age BETWEEN 20 and 29 THEN '20 - 29'
        WHEN age BETWEEN 30 and 39 THEN '30 - 39'
        WHEN age BETWEEN 40 and 49 THEN '40 - 49'
        WHEN age BETWEEN 50 and 59 THEN '50 - 59'
        WHEN age BETWEEN 60 and 69 THEN '60 - 69'
        WHEN age BETWEEN 70 and 79 THEN '70 - 79'
        WHEN age >= 80 THEN 'Over 80'
        WHEN age IS NULL THEN 'Not Filled In (NULL)'
    END as age_range,
    
    COUNT(id) AS age_grp FROM live_report WHERE consent='Yes' && protitle_id='1' GROUP BY age_range";

		$result = $conn->query($sql);
		
		$jsonArray = array();
		
		if ($result->num_rows > 0) {
		  
		  while($row = $result->fetch_assoc()) {
		    $jsonArrayItem = array();
		    $jsonArrayItem['value'] = $row['age_grp'];
		   $jsonArrayItem['label'] = $row['age_range'];
		   
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
	<title>My first chart using FusionCharts Suite XT</title>
	<script type="text/javascript" src="../js/fusioncharts.js"></script>
	<script type="text/javascript" src="..js/fusioncharts.theme.fusion.js"></script>
	<script type="text/javascript">
		FusionCharts.ready(function(){
			var chartObj = new FusionCharts({
    type: 'pie2d',
    renderAt: 'chart-container',
    width: '550',
    height: '350',
    dataFormat: 'json',
    dataSource: {
        "chart": {
            "caption": "Vaccinated by Age Group",
            "subCaption": "Last year",
            "numberPrefix": "$",
            "showPercentInTooltip": "0",
            "decimals": "1",
            "useDataPlotColorForLabels": "1",
            //Theme
            "theme": "fusion"
        },
        "data":<?php echo json_encode($jsonArray); ?>
            }
}
);
			chartObj.render();
		});
	</script>
	</head>
	<body>
		<div id="chart-container">FusionCharts XT will load here!</div>
		
		
	</body>
</html>