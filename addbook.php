<?php
include('db.php');

$bname = $_POST['bname'];
$bimage = $_POST['bimage'];
$bfile = $_POST['bfile'];
$bdes = $_POST['bdes'];
$bprice = $_POST['bprice'];
$bpassword = $_POST['bpassword'];

$sql = "INSERT INTO `books`(`name`, `image`, `file`, `des`, `price`, `password`) VALUES('$bname', '$bimage', '$bfile', '$bdes', '$bprice', '$bpassword')";
if (mysqli_multi_query($conn, $sql)) {
echo json_encode(array("statusCode"=>200));
}else{
echo json_encode(array("statusCode"=>201));
}
$conn->close();
?>