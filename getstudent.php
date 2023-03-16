<?php
include('db.php');
$id = $_POST['id'];
$sql = "SELECT * FROM students WHERE ID='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
		echo json_encode(array("statusCode"=>200, "user"=>"$row[user]", "fn"=>"$row[fn]", "name"=>"$row[name]", "dob"=>"$row[dob]", "gender"=>"$row[gender]", "year"=>"$row[year]", "div"=>"$row[div]", "email"=>"$row[email]"));
	}}else {
		echo json_encode(array("statusCode"=>201));
	}
mysqli_close($conn);
?>