<?php
if(isset($_COOKIE['id'])){
    header('Location: /');
}
if(isset($_POST['submit'])){
include('db.php');
$user = $_POST['user'];
$name = $_POST['name'];
$fn = $_POST['fn'];
$year = $_POST['year'];
$div = $_POST['div'];
$email = $_POST['email'];
$password = $_POST['password'];
$ip = $_POST['ip'];
$date = date('Y-m-d');
$time = date('h:i');

$sql .= "INSERT INTO `students`(`user`,`name`,`fn`,`dob`,`gender`,`year`,`div`,`email`,`password`,`status`,`ip`,`date`,`time`,`ver`,`type`,`ldate`,`ltime`,`sid`) VALUES ('$user', '$name', '$fn', '', '', '$year', '$div', '$email', '$password', 'yes', '$ip', '$date', '$time', 'no', 'student', '$date', '$time', '');";

if (mysqli_multi_query($conn, $sql)) {
  header('Location: login?true');
} else {
  header('Location: register?false');
}

mysqli_close($conn);
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
        <meta name="google-site-verification" content="zoT5Rf9AiWTOzuI6a90el_rX4Q9JeTw92Z6ZFavesug" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="فضاء التلاميذ">
        <meta name="author" content="Djihad Dris">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="favicon.png">
        <title>فضاء التلاميذ: تسجيل جديد</title>
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
        alertify.defaults.glossary.title = 'فضاء التلاميذ';
        alertify.defaults.glossary.ok = 'موافق';
        alertify.defaults.glossary.cancel = 'إلغاء';
        alertify.set('notifier','position', 'bottom-right');
        </script>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Alexandria&display=swap');
            body {
                font-family: 'IBM Plex Sans Arabic', sans-serif !important;
                overflow-x: auto !important;
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
?>
<div class='alert alert-warning'><span style="font-family: Alexandria !important;">تعذّر التسجيل، الرجاء التواصل مع الإدارة.</span></div>
<?php
}else{
?>
<div class='alert alert-danger'><span style="font-family: Alexandria !important;"><u>ملاحظة هامة:</u> يؤدي التصريح بمعلومات خاطئة لا أساس لها من الصحة إلى إلغاء تفعيل حساب المستخدم نهائيا.</span></div>
<?php
}
?>
                        <form method="POST" onsubmit="return verify()">
                                    <input type="hidden" name="ip" id="ip">
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fas fa-user"></i></div>
                                                <input required type="text" name="user" class="form-control" placeholder="إسم المستخدم" required>
                                                <input required type="text" name="fn" class="form-control" placeholder="اللقب" required>
                                                <input required type="text" name="name" class="form-control" placeholder="الإسم" required>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fas fa-layer-group"></i></div>
                                                <select onchange="play()" required name="year" id="year" class="form-control" required>
                                                <option value="">--إختر المستوى التعليمي--</option>
                                                <option value="السنة أولى ثانوي">السنة أولى ثانوي</option>
                                                <option value="السنة ثانية ثانوي">السنة ثانية ثانوي</option>
                                                <option value="السنة ثالثة ثانوي">السنة ثالثة ثانوي</option>
                                                </select>
                                                <select required name="div" id="div" class="form-control" required>
                                                <option value="">--إختر الجذع/ الشعبة--</option>
                                                <option id="1as1" style="display: none;" value="جذع مشترك علوم وتكنولوجيا">جذع مشترك علوم وتكنولوجيا</option>
                                                <option id="1as2" style="display: none;" value="جذع مشترك آداب">جذع مشترك آداب</option>
                                                <option id="as1" style="display: none;" value="علوم تجريبية">علوم تجريبية</option>
                                                <option id="as2" style="display: none;" value="رياضيات">رياضيات</option>
                                                <option id="as3" style="display: none;" value="تقني رياضي">تقني رياضي</option>
                                                <option id="as4" style="display: none;" value="تسيير وإقتصاد">تسيير وإقتصاد</option>
                                                <option id="as5" style="display: none;" value="آداب ولغات أجنبية">آداب ولغات أجنبية</option>
                                                <option id="as6" style="display: none;" value="آداب وفلسفة">آداب وفلسفة</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fas fa-envelope"></i></div>
                                                <input type="email" name="email" class="form-control" placeholder="البريد الإلكتروني">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fas fa-lock"></i></div>
                                                <input required type="password" id="fpass" name="password" class="form-control" placeholder="كلمة المرور" minlength="4" maxlength="10" required>
                                                <input required type="password" id="spass" class="form-control" placeholder="تأكيد كلمة المرور" minlength="4" maxlength="10" required>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="btn-group btn-block mx-auto" role="group">
                                    <button type="submit" name="submit" class="btn btn-success waves-effect waves-light"><span class="btn-label"><i class="fas fa-user-plus"></i></span>التسجيل</button>
                                        <a href="login" class="btn btn-danger waves-effect waves-light"><span class="btn-label"><i class="fas fa-home"></i></span>تسجيل الدخول</a>
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
$.getJSON("https://api.ipify.org?format=json", function(data) {
        $("#ip").val(data.ip);
    })
</script>
                                <!-- Bootstrap tether Core JavaScript -->
                                <!--<script src="https://awlyaa.education.gov.dz/public/assets/plugins/bootstrap/js/popper.min.js"></script>-->
                                <!--<script src="https://awlyaa.education.gov.dz/public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>-->
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
                                <!-- Custom JavaScript -->
                                <script>
                                function verify(){
                                    var fpass = document.getElementById('fpass').value;
                                    var spass = document.getElementById('spass').value;
                                    if(fpass == spass){
                                        return true;
                                    }else{
                                        alertify.error('تحقق من كلمة المرور');
                                        return false;
                                    }
                                }
                                function play(){
                                    var val = document.getElementById('year').value;
                                    var div = document.getElementById('div');
                                    var oas1 = document.getElementById('1as1');
                                    var oas2 = document.getElementById('1as2');
                                    var as1 = document.getElementById('as1');
                                    var as2 = document.getElementById('as2');
                                    var as3 = document.getElementById('as3');
                                    var as4 = document.getElementById('as4');
                                    var as5 = document.getElementById('as5');
                                    var as6 = document.getElementById('as6');
                                    if(val == "السنة أولى ثانوي"){
                                        div.value = "";
                                        oas1.style.display = "";
                                        oas2.style.display = "";
                                        as1.style.display = "none";
                                        as2.style.display = "none";
                                        as3.style.display = "none";
                                        as4.style.display = "none";
                                        as5.style.display = "none";
                                        as6.style.display = "none";
                                    }else if(val == "السنة ثانية ثانوي" || val == "السنة ثالثة ثانوي"){
                                        div.value = "";
                                        oas1.style.display = "none";
                                        oas2.style.display = "none";
                                        as1.style.display = "";
                                        as2.style.display = "";
                                        as3.style.display = "";
                                        as4.style.display = "";
                                        as5.style.display = "";
                                        as6.style.display = "";
                                    }else{
                                        div.value = "";
                                        oas1.style.display = "none";
                                        oas2.style.display = "none";
                                        as1.style.display = "none";
                                        as2.style.display = "none";
                                        as3.style.display = "none";
                                        as4.style.display = "none";
                                        as5.style.display = "none";
                                        as6.style.display = "none";
                                    }
                                }
                                </script>
                                </body>

                                </html>