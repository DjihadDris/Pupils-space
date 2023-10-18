<?php
include('db.php');

$wdo = $_POST['wdo'];
$userid = $_COOKIE['id'];
$date = date('Y-m-d');

if($wdo == "insert"){
$orderid = $_POST['orderid'];
$bookid = $_POST['bookid'];
$type = $_POST['type'];
$status = $_POST['status'];
$method = $_POST['method'];
$wilaya = $_POST['wilaya'];
$commune = $_POST['commune'];
$notes = $_POST['notes'];
$phone = $_POST['phone'];
$total = $_POST['total'];

$sql = "INSERT INTO `purshases`(`orderid`, `userid`, `bookid`, `type`, `status`, `date`, `method`, `wilaya`, `commune`, `notes`, `phone`, `total`) VALUES('$orderid', '$userid', '$bookid', '$type', '$status', '$date', '$method', '$wilaya', '$commune', '$notes', '$phone', '$total')";
if (mysqli_multi_query($conn, $sql)) {
if($type == "digital"){
echo json_encode(array("statusCode"=>"waitpay"));
}elseif($type == "paper"){
echo json_encode(array("statusCode"=>"waitorder"));
}
}else{
echo json_encode(array("statusCode"=>201));
}
}elseif($wdo == "update"){
$status = $_POST['status'];
$id = $_POST['id'];

$sql = "UPDATE purshases set status='$status' WHERE ID='$_POST[id]'";
if ($conn->query($sql) === TRUE) {
echo json_encode(array("statusCode"=>200));
} else {
echo json_encode(array("statusCode"=>201));
}
}
$conn->close();
?>