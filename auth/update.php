<?php
include('../db.php');

$sql = "SELECT * FROM students WHERE ID='$_COOKIE[id]' AND status='yes'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {

if($_POST['type'] == "activate"){
$secret = $_POST['secret'];
$sqls = "UPDATE students SET auth='yes', secret='$secret' WHERE ID='$_COOKIE[id]'";
if ($conn->query($sqls) === TRUE) {
  echo json_encode(array("status"=>200));
} else {
  echo json_encode(array("status"=>201));
}
}else{
$sqls = "UPDATE students SET auth='no', secret='$secret' WHERE ID='$_COOKIE[id]'";

if ($conn->query($sqls) === TRUE) {
  echo json_encode(array("status"=>200));
} else {
  echo json_encode(array("status"=>201));
}
}

}} else {
  header('Location: logout');
}
$conn->close();
?>