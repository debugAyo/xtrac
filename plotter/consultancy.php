<?php
	$dropdown = $_POST['dropdown'];	
		include '../link/connect.php';

$sql = "SELECT * FROM project_title WHERE id='$dropdown'";
		$result = mysqli_query($conn, $sql);
			while ($row=mysqli_fetch_array($result)) {
			
			$program = $row['protitle'];
			}
			

$sql = "SELECT * FROM logistics_report WHERE protitle='$dropdown' GROUP BY state";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0 ) {

echo '<h6>Consultants Statistical Analysis</h6>';

echo '<table width="100%" class="w3-border" cellspacing="0" bgcolor="#FFF" bordercolor="#DDD">
			<tr  style="font-family: arial; font-size:10px">
			<th  width="auto" class="w3-light-green  w3-border-bottom w3-padding-medium"><b>Location</b></th>
			<th  width="auto" class="w3-light-green  w3-border-bottom w3-padding-medium"><b>Population</b></th>
			<th  width="auto" class="w3-light-green  w3-border-bottom w3-padding-medium"><b>Target</b></th>
			<th  width="auto" class="w3-light-green  w3-border-bottom w3-padding-medium"><b>Timeline (days)</b></th>
			<th  width="auto" class="w3-light-green  w3-border-bottom w3-padding-medium"><b>Total Vaccinated</b></th>
			<th  width="auto" class="w3-light-green  w3-border-bottom w3-padding-medium"><b>Vaccinated within SOP</b></th>
			<th  width="auto" class="w3-green  w3-border-bottom w3-padding-medium"><b>% Success</b></th>
			<th  width="auto" class="w3-red  w3-border-bottom w3-padding-medium"><b>% Error</b></th>
			<th  width="auto" class="w3-orange  w3-border-bottom w3-padding-medium"><b>% Gap</b></th>
			<th  width="auto" class="w3-blue  w3-border-bottom w3-padding-medium"><b>% Vaccinated</b></th>
			<th  width="auto" class="w3-grey  w3-border-bottom w3-padding-medium"><b>Reporter</b></th>			
			</tr>';


while($row = mysqli_fetch_array($result)) {
  
  $pro_title = $row['vac_type'];
  
  			echo '<tr  style="font-family: arial; font-size:10px">
			<td  width="auto" class="w3-border-bottom w3-padding-medium"><center>'.$row['state'].'</center></td>
			<td  width="auto" class="w3-border-bottom w3-padding-medium"><center>'.number_format($row['totalpop'],2).'</center></td>
			<td  width="auto" class="w3-border-bottom w3-padding-medium"><center>'.$row['targetpop'].'</center></td>
			<td  width="auto" class="w3-border-bottom w3-padding-medium"><center>'.$row['protime'].'</center></td>
			<td  width="auto" class="w3-border-bottom w3-padding-medium"><center>'.number_format($row['totvactime'],2).'</center></td>
			<td  width="auto" class="w3-border-bottom w3-padding-medium"><center>'.number_format($row['totvacsop'],2).'</center></td>
			<td  width="auto" class="w3-border-bottom w3-padding-medium"><center>'.number_format($row['per_success'],2).'</center></td>
			<td  width="auto" class="w3-border-bottom w3-padding-medium"><center>'.number_format($row['per_error'],2).'</center></td>
			<td  width="auto" class="w3-border-bottom w3-padding-medium"><center>'.number_format($row['per_gap'],2).'</center></td>
			<td  width="auto" class="w3-border-bottom w3-padding-medium"><center>'.number_format($row['per_vac'],2).'</center></td>
			<td  width="auto" class="w3-border-bottom w3-padding-medium"><center>'.$row['reporter'].'</center></td>
			</tr>';





	}
		
echo '<br /><h7>'.$program.'</h7>';

echo '</table><br />';

}

?>

<!DOCTYPE html>
<html>
<script src="../plotter/js/Chart.min.js"></script>
<body>
<canvas id="myChart" style="width:100%;max-width:900px"></canvas>

<script>
const xValues = [100,200,300,400,500,600,700,800,900,1000];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{ 
      data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
      borderColor: "red",
      fill: false
    }, { 
      data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
      borderColor: "green",
      fill: false
    }, { 
      data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
      borderColor: "blue",
      fill: false
    }]
  },
  options: {
    legend: {display: false}
  }
});
</script>
</body>
</html>