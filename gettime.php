<?php
include('db.php');
$id = $_COOKIE['id'];
$day = $_POST['day'];
$sql = "SELECT * FROM time WHERE userid='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
		echo json_encode(array("statusCode"=>200, "m1"=>$row['1'.$day], "m2"=>$row['2'.$day], "m3"=>$row['3'.$day], "m4"=>$row['4'.$day], "m5"=>$row['5'.$day], "m6"=>$row['6'.$day], "m7"=>$row['7'.$day], "m8"=>$row['8'.$day]));
	}}else {
		echo json_encode(array("statusCode"=>201));
	}
mysqli_close($conn);
?>