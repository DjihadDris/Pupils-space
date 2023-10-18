<?php
include('db.php');
$type = $_POST['type'];
if($type == "grade"){
$sql = "UPDATE students SET type='$_POST[grade]' WHERE ID='$_POST[id]'";
if ($conn->query($sql) === TRUE) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
mysqli_close($conn);
}else if($type == "status"){
$sql = "UPDATE students SET status='$_POST[status]' WHERE ID='$_POST[id]'";
if ($conn->query($sql) === TRUE) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
mysqli_close($conn);
}else if($type == "ver"){
$sql = "UPDATE students SET ver='$_POST[ver]' WHERE ID='$_POST[id]'";
if ($conn->query($sql) === TRUE) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
mysqli_close($conn);
}else if($type == "delete"){
$sql = "DELETE FROM students WHERE ID='$_POST[id]'";
if ($conn->query($sql) === TRUE) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
mysqli_close($conn);
}else if($type == "cor"){
$sql = "UPDATE cororders set status='$_POST[cor]' WHERE ID='$_POST[id]'";
if ($conn->query($sql) === TRUE) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
mysqli_close($conn);
}else if($type == "delorder"){
$sql = "DELETE FROM cororders WHERE ID='$_POST[id]'";
if ($conn->query($sql) === TRUE) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
mysqli_close($conn);
}else if($type == "delborder"){
$sql = "DELETE FROM purshases WHERE ID='$_POST[id]'";
if ($conn->query($sql) === TRUE) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
mysqli_close($conn);
}
?>