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
		$chart_data="";
		$jsonArray = array();
		
		if ($result->num_rows > 0) {
		  
		  while($row = $result->fetch_assoc()) {
		  /*  $jsonArrayItem = array();
		    $jsonArrayItem['value'] = $row['age_grp'];
		    $jsonArrayItem['label'] = $row['age_range'];
		    */
		   
		    $age_grp[]  = $row['age_grp']  ;
            $age_range[] = $row['age_range'];
		   
		    //append the above created object into the main array.
		   /* array_push($jsonArray, $jsonArrayItem);*/
		  }
		}
		//Closing the connection to DB
		$conn->close();
		
		//header('Content-type: application/json');
		 
		//echo json_encode($jsonArray);
		echo '<br>';
	?>


<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Graph</title> 
    </head>
    <body>
        <div style="width:60%;hieght:20%;text-align:center">
            <h2 class="page-header" >Analytics Reports </h2>
            <div>Product </div>
            <canvas  id="chartjs_bar"></canvas> 
        </div>    
    </body>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($age_range); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($age_grp); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
</html>