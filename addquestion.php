<?php
include('db.php');

$question = $_POST['question'];
$answer = $_POST['answer'];
$category = $_POST['category'];

$sql = "INSERT INTO `questions`(`question_text`, `category`) VALUES('$question', '$category')";
if (mysqli_multi_query($conn, $sql)) {
$question_id = $conn->insert_id;
$sql = "INSERT INTO `answers`(`question_id`, `answer_text`, `is_correct`) VALUES('$question_id', '$answer', '1')";
if (mysqli_multi_query($conn, $sql)) {
$question_id = $conn->insert_id;
echo json_encode(array("statusCode"=>200));
}else{
echo json_encode(array("statusCode"=>201));
}
}else{
echo json_encode(array("statusCode"=>201));
}
?>