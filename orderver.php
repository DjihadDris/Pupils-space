<?php
include('db.php');
$date = date('Y-m-d');
$time = date('h:iA');
$sql = "UPDATE students SET ver='wait', date='$date', time='$time' WHERE ID='$_COOKIE[id]'";

if ($conn->query($sql) === TRUE) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
mysqli_close($conn);
?>