<?php
include('db.php');
$item = $_POST['item'];
$itemc = $_POST['itemc'];
$sql = "UPDATE results SET $item='$itemc' WHERE userid='$_COOKIE[id]'";

if ($conn->query($sql) === TRUE) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
mysqli_close($conn);
?>