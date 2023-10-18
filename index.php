<?php
if(!isset($_COOKIE['id'])){
    header('Location: login');
}
include('db.php');

$date = date('Y-m-d');
$time = date('h:iA');

$sql = "SELECT * FROM students WHERE ID='$_COOKIE[id]' AND status='yes'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

$sqls = "UPDATE students SET ldate='$date', ltime='$time' WHERE ID='$_COOKIE[id]'";
if ($conn->query($sqls) === TRUE) {
setcookie("name", "", time() - (86400 * 30), "/");
setcookie("year", "", time() - (86400 * 30), "/");
setcookie("div", "", time() - (86400 * 30), "/");
setcookie("type", "", time() - (86400 * 30), "/");
setcookie("name", "$row[name]", time() + (86400 * 30), "/");
setcookie("year", "$row[year]", time() + (86400 * 30), "/");
setcookie("div", "$row[div]", time() + (86400 * 30), "/");
setcookie("type", "$row[type]", time() + (86400 * 30), "/");
} else {
  header('Location: logout');
}

  }}else{
      header('Location: logout');
  }
$conn->close();
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
        <title>فضاء التلاميذ</title>
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
        <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
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
        @import url('https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap');
            body {
                font-family: 'Readex Pro', sans-serif !important;
            }
            a{
                text-decoration: none;
            }
            .card-header {
                padding: 0.75rem 1.25rem;
                margin-bottom: 0;
                background-color: rgba(0,0,0,.03);
                border-bottom: 1px solid rgba(0,0,0,.125);
            }
            .card-header:first-child {
                border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
            }
            popup_heading_text, notification_title, #webpushrOnBtn, #webpushrOffBtn, webpushrheadline4, webpushrprompttext4, webpushrpromptbtnapprove4, webpushrpromptbtndeny4 {
                font-family: 'Alexandria' !important;
            }

@media only screen and (max-device-width: 475px) {
.navbar-header {
display: none;
}
}

.new-bdg {
    position: absolute;
    top: -5px;
    right: -5px;
    left: 200px;
    font-size: medium;
}
        </style>
<!--Form Validation CSS -->
    <link href="https://ostad.education.gov.dz/public/assets/css/colors/blue.css" id="theme" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
<!-- ============================================================== -->
    <script src="https://ostad.education.gov.dz/public/assets/plugins/DataTables/DataTables-1.10.21/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://ostad.education.gov.dz/public/assets/plugins/DataTables/DataTables-1.10.21/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="https://ostad.education.gov.dz/public/assets/plugins/DataTables/Buttons-1.6.2/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="https://ostad.education.gov.dz/public/assets/plugins/jszip/jszip.min.js" type="text/javascript"></script>	
    <script src="https://ostad.education.gov.dz/public/assets/plugins/DataTables/Buttons-1.6.2/js/buttons.print.min.js" type="text/javascript"></script>
    <script src="https://ostad.education.gov.dz/public/assets/plugins/DataTables/Buttons-1.6.2/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="https://ostad.education.gov.dz/public/assets/plugins/DataTables/Responsive-2.2.5/js/dataTables.responsive.min.js" type="text/javascript"></script>
    <script src="https://ostad.education.gov.dz/public/assets/plugins/DataTables/Responsive-2.2.5/js/responsive.bootstrap.min.js" type="text/javascript"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="https://ostad.education.gov.dz/public/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="https://ostad.education.gov.dz/public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ostad.education.gov.dz/public/assets/plugins/sweetalert/sweetalert2.min.js"></script>
    <script src="https://ostad.education.gov.dz/public/assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="https://ostad.education.gov.dz/public/assets/js/waves.js"></script>
    <script src="https://ostad.education.gov.dz/public/assets/js/axios.min.js"></script>
    <!--stickey kit -->
    <script src="https://ostad.education.gov.dz/public/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="https://ostad.education.gov.dz/public/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="https://ostad.education.gov.dz/public/assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
    <script src="https://ostad.education.gov.dz/public/assets/plugins/icheck/icheck.min.js"></script>
    <script src="https://ostad.education.gov.dz/public/assets/plugins/icheck/icheck.init.js"></script>
    <script src="https://ostad.education.gov.dz/public/assets/plugins/select2/js/select2.min.js"></script>
    <script src="https://ostad.education.gov.dz/public/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    </head>

<body class="fix-header card-no-border">

<div id="main-wrapper">
<?php include('navbar.php'); ?>
<div class="container-fluid">
<div class="alert alert-success" role="alert">
  <h5 style="font-family: Readex Pro !important;" class="alert-heading">إعلان</h5>
  <ol>
  <li><p style="font-family: Readex Pro !important;">تم إطلاق التطبيق الخاص بأجهزة الأندرويد بنجاح، يمكنكم تحميله الآن!</p></li>
  <ul>
  <li><p style="font-family: Readex Pro !important;">أجهزة سامسونج:</p></li>
  <a target="_blank" href="https://galaxy.store/Souledj"><img src="GalaxyStore_Arabic.png" width="175" height="50"></a>
  <br>
  <li><p style="font-family: Readex Pro !important;" class="mb-0">باقي الأجهزة: <a target="_blank" download href="https://apk.e-droid.net/apk/app1477587.apk">من هنا</a></p></li>
  </ul>
  
  <li><p style="font-family: Readex Pro !important;">يمكنكم الإنضمام إلى <b>Telegram Bot</b> الخاص بفضاء التلاميذ: <a target="_blank" download href="https://t.me/Souledj_bot">من هنا</a></p></li>
  </ol>
</div>
<div class="alert alert-danger">
<p style="font-family: Alexandria !important;" class="alert-heading">آخر الأخبار</p>
<marquee direction="right" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">
<!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family: Readex Pro !important; color: black !important;"><i class="fas fa-hand-point-left" style="color: #0d6efd;"></i> فروض الفصل الثاني تجرى في الأسبوع الثاني أو الثالث من شهر فيفري</span>-->
<?php
include('db.php');
if($_COOKIE['type'] == "admin"){
$sqls = "SELECT * FROM lessons ORDER BY ID DESC";
}else{
$sqls = "SELECT * FROM lessons WHERE year='$_COOKIE[year]' ORDER BY ID DESC";
}
$results = $conn->query($sqls);
if ($results->num_rows > 0) {
  while($rows = $results->fetch_assoc()){
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family: Readex Pro !important; color: black !important;"><a href="subject?id=<?php echo "$rows[subject]"; ?>&lessonid=<?php echo "$rows[ID]"; ?>" style="color: black !important;"><i class="fas fa-hand-point-left" style="color: #0d6efd;"></i> <?php if($_COOKIE['type'] == "admin"){echo "$rows[name] - $rows[subject] - $rows[year]";}else{echo "$rows[name] - $rows[subject]";} ?></a></span>
<?php
}}
$conn->close();
?>
</marquee>
</div>
<div class="card-header">
<div class="row">
        <!-- Column -->
        <a class="col-lg-4 col-md-4" href="details">
            <div class="ribbon-wrapper-reverse card">
                <div class="ribbon ribbon-corner ribbon-success"><i class="fas fa-check-circle"></i></div>
                <div class="d-flex flex-row">
                    <div class="round align-self-center round-success"><i class="fas fa-info"></i></div>
                    <div class="m-l-10 align-self-center">
                        <h2 class="text-center text-success">بياناتي</h2>
                        <hr class="m-3">
                        <h6 class="text-muted text-center">عرض بيانات الحساب والتلميذ مع طلب التصحيح</h6>
                    </div>
                </div>
            </div>
        </a>
        <!-- Column -->
        <a class="col-lg-4 col-md-4" href="students">
            <div class="ribbon-wrapper-reverse card">
                <div class="ribbon ribbon-corner ribbon-danger"><i class="fa fa-check-circle"></i></div>
                <div class="d-flex flex-row">
                    <div class="round align-self-center round-danger"><i class="fas fa-users"></i></div>
                    <div class="m-l-10 align-self-center">
                        <h2 class="text-center text-danger">التلاميذ</h2>
                        <hr class="m-3">
                        <?php if($_COOKIE['type'] == "admin"){ ?>
                        <h6 class="text-muted text-center">عرض قوائم بيانات التلاميذ</h6>
                        <?php }else{ ?>
                        <h6 class="text-muted text-center">عرض قوائم بيانات تلاميذ <?php echo $_COOKIE['year']; ?> <?php if($_COOKIE['year'] <> "السنة أولى ثانوي"){echo "شعبة ";} echo $_COOKIE['div']; ?></h6>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </a>
        <!-- Column -->
        <a class="col-lg-4 col-md-4" href="lessons">
            <div class="ribbon-wrapper-reverse card">
                <div class="ribbon ribbon-corner ribbon-warning"><i class="fa fa-check-circle"></i></div>
                <div class="d-flex flex-row">
                    <div class="round align-self-center round-warning"><i class="fas fa-folder-open"></i></div>
                    <div class="m-l-10 align-self-center">
                        <h2 class="text-center text-warning">الدروس</h2>
                        <hr class="m-3">
                        <?php if($_COOKIE['type'] == "admin"){ ?>
                        <h6 class="text-muted text-center">عرض الدروس المضافة من قبل التلاميذ في مختلف المواد</h6>
                        <?php }else{ ?>
                        <h6 class="text-muted text-center">عرض الدروس المضافة من قبل تلاميذ <?php echo $_COOKIE['year']; ?> <?php if($_COOKIE['year'] <> "السنة أولى ثانوي"){echo "شعبة ";} echo $_COOKIE['div']; ?> في مختلف المواد</h6>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </a>
        <!-- Column -->
        <a class="col-lg-4 col-md-4" href="discussion">
            <div class="ribbon-wrapper-reverse card">
                <div class="ribbon ribbon-corner ribbon-info"><i class="fa fa-check-circle"></i></div>
                <div class="d-flex flex-row">
                    <div class="round align-self-center round-info"><i class="fas fa-comments"></i></div>
                    <div class="m-l-10 align-self-center">
                        <h2 class="text-center text-primary">الدردشة</h2>
                        <hr class="m-3">
                        <?php if($_COOKIE['type'] == "admin"){ ?>
                        <h6 class="text-muted text-center">التواصل مع تلاميذ الأقسام</h6>
                        <?php }else{ ?>
                        <h6 class="text-muted text-center">التواصل مع تلاميذ أقسام <?php echo $_COOKIE['year']; ?> <?php if($_COOKIE['year'] <> "السنة أولى ثانوي"){echo "شعبة ";} echo $_COOKIE['div']; ?></h6>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </a>
        <!-- Column -->
		<a class="col-lg-4 col-md-4" href="calculator">
            <div class="ribbon-wrapper-reverse card">
                <div class="ribbon ribbon-corner ribbon-primary"><i class="fa fa-check-circle"></i></div>
                <div class="d-flex flex-row">
                    <div class="round align-self-center round-primary"><i class="fas fa-calculator"></i></div>
                    <div class="m-l-10 align-self-center">
                        <h2 class="text-center text-info">حساب المعدل</h2>
                        <hr class="m-3">
                        <h6 class="text-muted text-center">حساب المعدل الفصلي والمعدل السنوي</h6>
                    </div>
                </div>
            </div>
        </a>
        <!-- Column -->
        <a class="col-lg-4 col-md-4" href="time">
            <div class="ribbon-wrapper-reverse card">
                <div class="ribbon ribbon-corner ribbon-success"><i class="fas fa-check-circle"></i></div>
                <div class="d-flex flex-row">
                    <div class="round align-self-center round-success"><i class="fas fa-table"></i></div>
                    <div class="m-l-10 align-self-center">
                        <h2 class="text-center text-success">التوقيت الأسبوعي</h2>
                        <hr class="m-3">
                        <h6 class="text-muted text-center">عرض التوقيت الأسبوعي مع إمكانية تعديله</h6>
                    </div>
                </div>
            </div>
        </a>
<?php
if(($_COOKIE['year'] == "السنة ثالثة ثانوي" AND $_COOKIE['div'] == "علوم تجريبية") OR $_COOKIE['type'] == "admin"){
?>
        <!-- Column -->
        <a class="col-lg-4 col-md-4" href="quiz">
            <div class="ribbon-wrapper-reverse card">
                <div class="ribbon ribbon-corner ribbon-danger"><i class="fas fa-check-circle"></i></div>
                <div class="d-flex flex-row">
                    <div class="round align-self-center round-danger"><i class="fas fa-edit"></i></div>
                    <div class="m-l-10 align-self-center">
                        <h2 class="text-center text-danger">إختبار الحفظ</h2>
                        <hr class="m-3">
                        <h6 class="text-muted text-center">معرفة مدى حفظك لتواريخ، شخصيات ومصطلحات مادتي التاريخ والجغرافيا</h6>
                    </div>
                </div>
            </div>
        </a>
        <!-- Column -->
        <a class="col-lg-4 col-md-4" href="books">
            <div class="ribbon-wrapper-reverse card">
                <div class="ribbon ribbon-corner ribbon-warning"><i class="fa fa-check-circle"></i></div>
                <div class="d-flex flex-row">
                    <div class="round align-self-center round-warning"><i class="fas fa-book"></i></div>
                    <div class="m-l-10 align-self-center">
                        <h2 class="text-center text-warning">الكتاب الرقمي</h2>
                        <hr class="m-3">
                        <h6 class="text-muted text-center">تصفح الكتب الرقمية الإلكترونية المتاحة</h6>
                    </div>
                </div>
            </div>
        </a>
<?php
}
?>
        <?php if($_COOKIE['type'] == "admin"){ ?>
        <!-- Column -->
        <a class="col-lg-4 col-md-4" href="orders">
            <div class="ribbon-wrapper-reverse card">
                <div class="ribbon ribbon-corner ribbon-info"><i class="fa fa-check-circle"></i></div>
<?php
include('db.php');

$query1 = "SELECT * FROM cororders WHERE status='في الإنتظار'";
$query2 = "SELECT * FROM students WHERE ver='wait'";
$query3 = "SELECT * FROM purshases WHERE status='waitorder' OR status='waitpay'";
$result1 = mysqli_query($conn, $query1);
$result2 = mysqli_query($conn, $query2);
$result3 = mysqli_query($conn, $query3);
$num_rows1 = mysqli_num_rows($result1);
$num_rows2 = mysqli_num_rows($result2);
$num_rows3 = mysqli_num_rows($result3);
if($num_rows1 > 0 OR $num_rows2 > 0 OR $num_rows3 > 0){
?>
<span class="badge badge-danger btn-rounded new-bdg">
<?php
echo ($num_rows1+$num_rows2+$num_rows3);
?>
</span>
<?php
}
mysqli_close($conn);
?>
                <div class="d-flex flex-row">
                    <div class="round align-self-center round-info"><i class="fas fa-list"></i></div>
                    <div class="m-l-10 align-self-center">
                        <h2 class="text-center text-info">الطلبات</h2>
                        <hr class="m-3">
                        <h6 class="text-muted text-center">طلبات تصحيح البيانات وطلبات توثيق الحسابات وطلبات شراء الكتب</h6>
                    </div>
                </div>
            </div>
        </a>
        <?php } ?>
</div>
</div>
</div>
</div>

<!-- Custom JavaScript -->
<script src="changepass.js"></script>
<!-- start webpushr code --> <script>(function(w,d, s, id) {if(typeof(w.webpushr)!=='undefined') return;w.webpushr=w.webpushr||function(){(w.webpushr.q=w.webpushr.q||[]).push(arguments)};var js, fjs = d.getElementsByTagName(s)[0];js = d.createElement(s); js.id = id;js.async=1;js.src = "https://cdn.webpushr.com/app.min.js";fjs.parentNode.appendChild(js);}(window,document, 'script', 'webpushr-jssdk'));webpushr('setup',{'key':'BOaeNul9pt9rWtixsGEKsdZ8XzHFYRg6pug3Rd6aKNNePh3JG8ArFCDBxrXf6MyFQiVGRlE3lNJjjtOWCxfWrBU' });
webpushr('fetch_id',function (sid) {
    $.ajax({
		url: "auth/sid.php",
		type: "POST",
        data: {
            sid: sid
        },
		cache: false,
		success: function(dataResult){
		var dataResult = JSON.parse(dataResult);
		if(dataResult.statusCode==201){
            alertify.error('تم منع الإشعارات');
            location.href = "logout";
        }
        }
    });
});</script><!-- end webpushr code -->

</body>

</html>