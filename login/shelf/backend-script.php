<?php
include('connect.php'); 
$searchTerm = $_GET['term'];
$sql = "SELECT * FROM shelf WHERE title LIKE '%".$searchTerm."%' AND status = 'on shelf' ORDER BY title ASC"; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
  $tutorialData = array(); 
  while($row = $result->fetch_assoc()) {
   $data['id']    = $row['sn']; 
   $data['value'] = $row['title'];
   array_push($tutorialData, $data);
} 
}
 echo json_encode($tutorialData);
?>
