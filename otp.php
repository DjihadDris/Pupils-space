<?php
if(isset($_COOKIE['id'])){
    header('Location: /');
}else{
if(!isset($_GET['secret']) || $_GET['secret'] == ""){
    header('Location: /');
}
}

if(isset($_GET['login'])){
include('db.php');
$secret = $_GET['secret'];

$sql = "SELECT * FROM students WHERE secret='$secret' AND status='yes'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

  setcookie("id", "$row[ID]", time() + (86400 * 30), "/");
  setcookie("name", "$row[name]", time() + (86400 * 30), "/");
  setcookie("year", "$row[year]", time() + (86400 * 30), "/");
  setcookie("div", "$row[div]", time() + (86400 * 30), "/");
  setcookie("type", "$row[type]", time() + (86400 * 30), "/");
  if(isset($_GET['from'])){
      $from = $_GET['from'];
      if(isset($_GET['lessonid'])){
          $lessonid = $_GET['lessonid'];
          header('Location: '.$from.'&lessonid='.$lessonid);
      }else{
          header('Location: '.$from);
      }
  }else{
      header('Location: /');
  }

}} else {
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
        <meta name="google-site-verification" content="zoT5Rf9AiWTOzuI6a90el_rX4Q9JeTw92Z6ZFavesug" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="فضاء التلاميذ">
        <meta name="author" content="Djihad Dris">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="favicon.png">
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

        <section id="wrapper">
            <div class="login-register" style="background-image:url(https://awlyaa.education.gov.dz/public/assets/images/background/bg-2.jpg);">
                <div class="login-box card">
                    <div class="card-body animated fadeInDown">
                        <div class="form-group row">
                            <img style="width: 280px;" class="centered image" src="souledj.png" alt="فضاء التلاميذ">
                        </div>
                        <br>
                        <div class='alert alert-success'><span style="font-family: Alexandria !important;">فضاء التلاميذ</span></div>
                        
                        <form onsubmit="validate()">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fas fa-lock"></i></div>
                                        <input autofocus required type="number" id="authotp" class="form-control" placeholder="رمز التحقق" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="btn-group btn-block mx-auto" role="group">
                                <button type="submit" name="submit" class="btn btn-success waves-effect waves-light" id="authbtn"><span class="btn-label"><i class="fas fa-check"></i></span>تأكيد</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
<script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
<script>
function validate(){
event.preventDefault();
var secret = "<?php echo $_GET['secret']; ?>";
var otp = document.getElementById('authotp').value;
if(otp != "" && otp.length == 6){
$.ajax({
url: "auth/example.php",
type: "GET",
cache: false,
data:{
    type: "get",
    secret: secret,
    otp: otp
},
beforeSend: function() {
    document.getElementById('authotp').disabled = true;
    document.getElementById('authbtn').disabled = true;
	$('#authbtn').html('<i class="fa fa-spinner fa-spin"></i>');
},
success: function(dataResult){
var dataResult = JSON.parse(dataResult);
if(dataResult.status == 200){
location.href = "<?php echo $_SERVER['REQUEST_URI']; ?>&login";
/*location.href = "otp?login&secret="+secret;*/
}else{
document.getElementById('authotp').disabled = false;
document.getElementById('authbtn').disabled = false;
$('#authbtn').html('<span class="btn-label"><i class="fas fa-check"></i></span>تأكيد');
alertify.error('رمز التحقق خاطئ، الرجاء إدخال الرمز الصحيح');
}
}
});
}else{
    alertify.error('الرجاء إدخال رمز التحقق الصحيح');
}
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>