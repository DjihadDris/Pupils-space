<?php
include('db.php');

$id = $_COOKIE['id'];
$day = $_POST['day'];
$m1 = $_POST['m1'];
$m2 = $_POST['m2'];
$m3 = $_POST['m3'];
$m4 = $_POST['m4'];
$m5 = $_POST['m5'];
$m6 = $_POST['m6'];
$m7 = $_POST['m7'];
$m8 = $_POST['m8'];

$sql = "UPDATE `time` SET `1$day`='$m1', `2$day`='$m2', `3$day`='$m3', `4$day`='$m4', `5$day`='$m5', `6$day`='$m6', `7$day`='$m7', `8$day`='$m8' WHERE `userid`='$id'";

if ($conn->query($sql) === TRUE) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
mysqli_close($conn);
?>