<?php
include('db.php');
$id = $_POST['id'];
$sql = "SELECT * FROM lessons WHERE ID='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
		echo json_encode(array("statusCode"=>200, "name"=>"$row[name]", "des"=>"$row[description]", "file"=>"$row[file]", "imgs"=>"$row[images]"));
	}}else {
		echo json_encode(array("statusCode"=>201));
	}
mysqli_close($conn);
?>