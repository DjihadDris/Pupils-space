<?php
include('db.php');

$id = $_POST['id'];
$user = $_POST['user'];
$fn = $_POST['fn'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$year = $_POST['year'];
$div = $_POST['div'];
$email = $_POST['email'];

$sql = "UPDATE `students` SET `user`='$user', `fn`='$fn', `name`='$name', `dob`='$dob', `gender`='$gender', `year`='$year', `div`='$div', `email`='$email' WHERE `ID`='$id'";

if ($conn->query($sql) === TRUE) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
mysqli_close($conn);
?>