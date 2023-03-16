<?php
include('db.php');
$sql = "DELETE FROM lessons WHERE ID='$_POST[id]'";
if ($conn->query($sql) === TRUE) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
mysqli_close($conn);
?>