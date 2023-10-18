<?php
include('db.php');
$id = $_POST['id'];
$subject = $_POST['subject'];
$trim = $_POST['trim'];
$name = $_POST['name'];
$des = $_POST['des'];
$file = $_POST['file'];
$imgs = $_POST['imgs'];
$year = $_POST['year'];
$div = $_POST['div'];
$user = $_COOKIE['name'];
$date = date("Y-m-d");
$time = date("h:iA");

$sqls = "SELECT * FROM lessons WHERE ID='$id'";
$results = $conn->query($sqls);

if ($results->num_rows > 0){
  while($rows = $results->fetch_assoc()){

$sql = "UPDATE lessons SET `trim`='$trim', `name`='$name', `description`='$des', `file`='$file', `images`='$imgs', `year`='$year', `div`='$div' WHERE `subject`='$subject' AND `user`='$user' AND `ID`='$id'";
if ($conn->query($sql) === TRUE) {
  $lessonid = $id;
  include('sendalert.php');
  echo json_encode(array("statusCode"=>200));
} else {
  echo json_encode(array("statusCode"=>201));
}

  }}else{

$sql = "INSERT INTO `lessons`(`subject`, `trim`, `name`, `description`, `file`, `images`, `year`, `div`, `user`, `date`, `time`) VALUES('$subject', '$trim', '$name', '$des', '$file', '$imgs', '$year', '$div', '$user', '$date', '$time')";
if (mysqli_multi_query($conn, $sql)) {
        $lessonid = $conn->insert_id;
        include('sendalert.php');
		echo json_encode(array("statusCode"=>200));
}else{
		echo json_encode(array("statusCode"=>201));
}

  }
mysqli_close($conn);
?>