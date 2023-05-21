<?php
if(isset($_COOKIE['id'])){
    header('Location: /');
}
if(isset($_POST['submit_frm'])){
include('db.php');
$user = $_POST['user'];
$password = $_POST['password'];
$ip = $_POST['ip'];
$date = date('Y-m-d');
$time = date('h:iA');

$sql = "SELECT * FROM students WHERE user='$user' AND password='$password' AND status='yes'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

$sqls = "UPDATE students SET ip='$ip', date='$date', time='$time', ldate='$date', ltime='$time' WHERE ID='$row[ID]'";

if ($conn->query($sqls) === TRUE) {
    if("$row[auth]" == "yes"){
  $secret = "$row[secret]";
  header('Location: otp?secret='.$secret);
    }else{
  setcookie("id", "$row[ID]", time() + (86400 * 30), "/");
  setcookie("name", "$row[name]", time() + (86400 * 30), "/");
  setcookie("year", "$row[year]", time() + (86400 * 30), "/");
  setcookie("div", "$row[div]", time() + (86400 * 30), "/");
  setcookie("type", "$row[type]", time() + (86400 * 30), "/");
  header('Location: /');
    }
} else {
  header('Location: login?false=error');
}
  }
} else {
  header('Location: login?false=user');
}
$conn->close();
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

    <head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5TZY2PZW11"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5TZY2PZW11');
</script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="ثانوية صولاج السعيد: فضاء التلاميذ">
        <meta name="author" content="Djihad Dris">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="https://awlyaa.education.gov.dz/public/assets/images/favicon.png">
        <title>فضاء التلاميذ: تسجيل الدخول</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
        <!-- Bootstrap Core CSS -->
        <!--<link href=https://awlyaa.education.gov.dz/public/assets/plugins/bootstrap/css/bootstrap.min.css rel="stylesheet">-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" rel="stylesheet">-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Alexandria&display=swap" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="effetcs%20-%20Copy.css" rel="stylesheet">
        <!-- include the style -->
        <link rel="stylesheet" href="alert/css/alertify.rtl.css" />
        <!-- include a theme -->
        <link rel="stylesheet" href="alert/css/themes/default.rtl.css" />
        <!-- include the script -->
        <script src="alert/alertify.js"></script>
        <script>
        alertify.defaults.glossary.title = 'ثانوية صولاج السعيد';
        alertify.defaults.glossary.ok = 'موافق';
        alertify.defaults.glossary.cancel = 'إلغاء';
        alertify.set('notifier','position', 'bottom-right');
        </script>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Alexandria&display=swap');
            body {
                font-family: 'IBM Plex Sans Arabic', sans-serif !important;
            }
            .hidden {
                opacity: 0;
            }
            .console-container {
                font-size: 1.2em;
                text-align: center;
            }
            .login-register {
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
                height: 100%;
                width: 100%;
                padding: 10% 0;
                position: fixed; }

            .console-underscore {
                display: inline-block;
                position: relative;
                top: -0.14em;
                left: 10px;
            }
            .login-box {
                -webkit-border-radius: 10px 10px 10px 10px;
                border-radius: 10px 10px 10px 10px;
                width: 95%;
                max-width: 510px;
                position: relative;
                -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
                box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
                text-align: center;
            }            
        </style>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
   function onSubmit() {
    if(document.getElementById('user').value != "" && document.getElementById('password').value != ""){
     document.getElementById("loginform").submit();
    }else{
     alertify.error('الرجاء إدخال إسم المستخدم وكلمة المرور');
    }
   }
</script>
    </head>

    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!--<div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>-->
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <section id="wrapper">
            <div class="login-register" style="background-image:url(https://awlyaa.education.gov.dz/public/assets/images/background/bg-2.jpg);">
                <div class="login-box card">
                    <div class="card-body animated fadeInDown">
                        <div class="form-group row">
                            <img style="width: 280px;" class="centered image" src="souledj.png" alt="ثانوية صولاج السعيد">
                        </div>
                        <br>
<?php
if(isset($_GET['false'])){
if($_GET['false'] == "error"){
?>
<div class='alert alert-warning'><span style="font-family: Alexandria !important;">تعذّر تسجيل الدخول، الرجاء التواصل مع الإدارة.</span></div>
<?php
}else if($_GET['false'] == "user"){
?>
<div class='alert alert-danger'><span style="font-family: Alexandria !important;">إسم المستخدم أو كلمة المرور خاطئة أو حسابك معطّل.</span></div>
<?php
}
}else if(isset($_GET['true'])){
?>
<div class='alert alert-success'><span style="font-family: Alexandria !important;">تم إنشاء الحساب بنجاح، يمكنك تسجيل الدخول.</span></div>
<?php
}else{
?>
<div class='alert alert-success'><span style="font-family: Alexandria !important;">ثانوية صولاج السعيد: فضاء التلاميذ</span></div>
<?php
}
?>
                        <form id="loginform" method="POST" action="">
                                    <input type="hidden" name="ip" id="ip">
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fas fa-user"></i></div>
                                                <input required type="text" id="user" name="user" class="form-control" placeholder="إسم المستخدم" required>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fas fa-lock"></i></div>
                                                <input required type="password" id="password" name="password" class="form-control" placeholder="كلمة المرور" minlength="4" maxlength="10" required>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="btn-group btn-block mx-auto" role="group">
                                        <!--<button type="submit" name="submit" class="btn btn-success waves-effect waves-light"><span class="btn-label"><i class="fas fa-home"></i></span>تسجيل الدخول</button>-->
                                        <input type="hidden" name="submit_frm" value="1">
                                        <button class="btn btn-success waves-effect waves-light" onclick='onSubmit()' type='submit'><span class="btn-label"><i class="fas fa-home"></i></span>تسجيل الدخول</button>
                                        <a href="register" class="btn btn-danger waves-effect waves-light"><span class="btn-label"><i class="fas fa-user-plus"></i></span>تسجيل جديد</a>
                                        <span onclick="show()" class="btn btn-warning waves-effect waves-light"><span class="btn-label"><i class="fas fa-envelope"></i></span>إستعادة كلمة المرور</span>
                                    </div>

                                </form>
                                </div>
                                </div>
                                </div>

                                </section>
                                <!-- ============================================================== -->
                                <!-- End Wrapper -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                                <!-- All Jquery -->
                                <!-- ============================================================== -->
                                <!--<script src="https://awlyaa.education.gov.dz/public/assets/plugins/jquery/jquery-3.4.1.min.js"></script>-->
                                <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
<script>
/*$.getJSON('https://api.db-ip.com/v2/free/self', function(data) {});*/
$.getJSON("https://api.ipify.org?format=json", function(data) {
        $("#ip").val(data.ip);
});
</script>
                                <!-- Bootstrap tether Core JavaScript -->
                                <!--<script src="https://awlyaa.education.gov.dz/public/assets/plugins/bootstrap/js/popper.min.js"></script>-->
                                <!--<script src="https://awlyaa.education.gov.dz/public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>-->
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
                                <!-- Custom JavaScript -->
<script>
function show(){
alertify.prompt("إسم المستخدم/ البريد الإلكتروني:", "",
  function(evt, value ){
if(value != ""){

$.ajax({
url: "sendmail.php",
type: "POST",
cache: false,
data:{
ue: value
},	
success: function(dataResult){
var dataResult = JSON.parse(dataResult);
if(dataResult.statusCode==200){
alertify.success(dataResult.message);
}else{
alertify.error(dataResult.message);
}
}
});

}else{
    alertify.error('الرجاء إدخال إسم المستخدم/ البريد الإلكتروني');
}
  },
  function(){
    alertify.error('Cancel');
  });
}
</script>
                                </body>

                                </html>