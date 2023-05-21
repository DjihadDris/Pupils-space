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

$name = $row['name'];
$email = $row['email'];
$password = $row['password'];

$message = "كلمة المرور الخاصة بك هي: ".$password."\r\rالرجاء تغيير كلمة المرور بعد تسجيل الدخول\r\rفضاء التلاميذ";

try {
    $mail = new PHPMailer(true);

    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Your SMTP server hostname
    $mail->SMTPAuth = true;
    $mail->Username = 'djihad139@gmail.com'; // Your SMTP username
    $mail->Password = 'acxvkdwyxkityhfc'; // Your SMTP password
    $mail->SMTPSecure = 'ssl'; // Enable encryption, 'ssl' also accepted
    $mail->Port = 465; // TCP port to connect to

    // Sender and recipient details
    $mail->setFrom('no-reply@souledj.epizy.com', 'فضاء التلاميذ');
    $mail->addAddress("$email", "$name");

    // Email content
    $mail->Subject = 'إسترجاع كلمة المرور - فضاء التلاميذ';
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