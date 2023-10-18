<?php
if($_POST['user'] != "" || $_POST['email'] != "" || $_POST['fn'] != "" || $_POST['name'] != "" || $_POST['dob'] != "" || $_POST['gender'] != "" || $_POST['year'] != "" || $_POST['div'] != ""){
$date = date('Y-m-d');
$time = date('h:iA');
$user = "";
if($_POST['user'] != ""){
    $user = "VALUES ('$_COOKIE[id]', 'إسم المستخدم', '$_POST[user]', 'في الإنتظار', '$date', '$time')";
}else{
    $user = "VALUES ('', '', '', '', '', '')";
}

$email = "";
if($_POST['email'] != ""){
    $email = "VALUES ('$_COOKIE[id]', 'البريد الإلكتروني', '$_POST[email]', 'في الإنتظار', '$date', '$time')";
}else{
    $email = "VALUES ('', '', '', '', '', '')";
}

$fn = "";
if($_POST['fn'] != ""){
    $fn = "VALUES ('$_COOKIE[id]', 'اللقب', '$_POST[fn]', 'في الإنتظار', '$date', '$time')";
}else{
    $fn = "VALUES ('', '', '', '', '', '')";
}

$name = "";
if($_POST['name'] != ""){
    $name = "VALUES ('$_COOKIE[id]', 'الإسم', '$_POST[name]', 'في الإنتظار', '$date', '$time')";
}else{
    $name = "VALUES ('', '', '', '', '', '')";
}

$dob = "";
if($_POST['dob'] != ""){
    $dob = "VALUES ('$_COOKIE[id]', 'تاريخ الميلاد', '$_POST[dob]', 'في الإنتظار', '$date', '$time')";
}else{
    $dob = "VALUES ('', '', '', '', '', '')";
}

$gender = "";
if($_POST['gender'] != ""){
    $gender = "VALUES ('$_COOKIE[id]', 'الجنس', '$_POST[gender]', 'في الإنتظار', '$date', '$time')";
}else{
    $gender = "VALUES ('', '', '', '', '', '')";
}

$year = "";
if($_POST['year'] != ""){
    $year = "VALUES ('$_COOKIE[id]', 'المستوى التعليمي', '$_POST[year]', 'في الإنتظار', '$date', '$time')";
}else{
    $year = "VALUES ('', '', '', '', '', '')";
}

$div = "";
if($_POST['div'] != ""){
    $div = "VALUES ('$_COOKIE[id]', 'الجذع/ الشعبة', '$_POST[div]', 'في الإنتظار', '$date', '$time')";
}else{
    $div = "VALUES ('', '', '', '', '', '')";
}

include('db.php');
if($_POST['user'] != ""){
$sql .= "INSERT INTO `cororders`(`userid`, `order`, `cor`, `status`, `date`, `time`) $user;";
}
if($_POST['email'] != ""){
$sql .= "INSERT INTO `cororders`(`userid`, `order`, `cor`, `status`, `date`, `time`) $email;";
}
if($_POST['fn'] != ""){
$sql .= "INSERT INTO `cororders`(`userid`, `order`, `cor`, `status`, `date`, `time`) $fn;";
}
if($_POST['name'] != ""){
$sql .= "INSERT INTO `cororders`(`userid`, `order`, `cor`, `status`, `date`, `time`) $name;";
}
if($_POST['dob'] != ""){
$sql .= "INSERT INTO `cororders`(`userid`, `order`, `cor`, `status`, `date`, `time`) $dob;";
}
if($_POST['gender'] != ""){
$sql .= "INSERT INTO `cororders`(`userid`, `order`, `cor`, `status`, `date`, `time`) $gender;";
}
if($_POST['year'] != ""){
$sql .= "INSERT INTO `cororders`(`userid`, `order`, `cor`, `status`, `date`, `time`) $year;";
}
if($_POST['div'] != ""){
$sql .= "INSERT INTO `cororders`(`userid`, `order`, `cor`, `status`, `date`, `time`) $div;";
}

if (mysqli_multi_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
mysqli_close($conn);
}else{
    echo json_encode(array("statusCode"=>202));
}
?>