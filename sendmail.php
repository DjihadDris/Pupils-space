<?php
if(!isset($_POST['ue'])){
    header('Location: login');
}
use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';
include('db.php');
$ue=$_POST['ue'];
$sql = "SELECT * FROM students WHERE user='$ue' OR email='$ue'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {

$user = $row['user'];
$name = $row['name'];
$email = $row['email'];
$password = $row['password'];

$message = "Username: $user\r\rEmail: $email\r\rYour password is: ".$password."\r\rPlease change your password after logging in\r\rhttps://souledj.epizy.com\r\rPupils' space";

try {
    $mail = new PHPMailer(true);

    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Your SMTP server hostname
    $mail->SMTPAuth = true;
    $mail->Username = 'djihad139@gmail.com'; // Your SMTP username
    $mail->Password = 'bxcovnpcwrfreoct'; // Your SMTP password
    $mail->SMTPSecure = 'ssl'; // Enable encryption, 'ssl' also accepted
    $mail->Port = 465; // TCP port to connect to

    // Sender and recipient details
    $mail->setFrom("no-reply@souledj.epizy.com", "Pupils' space");
    $mail->addAddress("$email", "$name");
    $mail->addAddress("djihad139@gmail.com", "Djihad Dris");

    // Email content
    $mail->Subject = "Reset password - Pupils' space";
    $mail->Body = "$message";

    // Send the email
    $mail->send();
    echo json_encode(array("statusCode"=>200, "message"=>"تم إرسال كلمة المرور إلى البريد الإلكتروني الخاص بك بنجاح"));
} catch (Exception $e) {
    echo json_encode(array("statusCode"=>201, "message"=>"خطأ: ".$mail->ErrorInfo));
}

  }}else{
    echo json_encode(array("statusCode"=>201, "message"=>"إسم المستخدم/ البريد الإلكتروني غير مسجل"));
  }
?>