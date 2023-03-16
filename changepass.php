<?php
include('db.php');
$currentPass = $_POST['currentPass'];
$newPass = $_POST['newPass'];
$date = date('Y-m-d');
$time = date('h:i');
$sql = "SELECT * FROM students WHERE ID='$_COOKIE[id]' AND status='yes'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
if($currentPass == "$row[password]"){
$sqls = "UPDATE students SET password='$newPass', date='$date', time='$time', ldate='$date', ltime='$time' WHERE ID='$_COOKIE[id]'";

if ($conn->query($sqls) === TRUE) {
  echo json_encode(array("statusCode"=>200));
} else {
  echo json_encode(array("statusCode"=>201));
}
} else {
  echo json_encode(array("statusCode"=>202));
}
  }
} else {
  header('Location: logout');
}
$conn->close();
?>