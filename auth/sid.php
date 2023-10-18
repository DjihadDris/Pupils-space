<?php
include('../db.php');

$sid = $_POST['sid'];
$sqls = "UPDATE students SET sid='$sid' WHERE ID='$_COOKIE[id]'";
if ($conn->query($sqls) === TRUE) {
  echo json_encode(array("statusCode"=>200));
} else {
  echo json_encode(array("statusCode"=>201));
}
?>