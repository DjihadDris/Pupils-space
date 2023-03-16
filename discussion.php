<?php
if(!isset($_COOKIE['id'])){
    header('Location: login');
}
$name = $_COOKIE['year']."-".$_COOKIE['div'];
fopen ( "$name.html", "w" );
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
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="https://awlyaa.education.gov.dz/public/assets/images/favicon.png">
        <title>فضاء التلاميذ: الدردشة</title>
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
            popup_heading_text, notification_title, #webpushrOnBtn, webpushrheadline4, webpushrprompttext4, webpushrpromptbtnapprove4, webpushrpromptbtndeny4 {
                font-family: 'Alexandria' !important;
            }

#chatbox {
text-align: right;
margin: 0 auto;
margin-bottom: 25px;
padding: 10px;
background: #fff;
height: 300px !important;
width: 100%;
border: 1px solid #0d6efd;
overflow: auto;
}

.msgln {
margin:0 0 2px 0; 
}

@media only screen and (max-device-width: 475px) {
.navbar-header {
display: none;
}
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
    </head>

<body class="fix-header card-no-border">

<div id="main-wrapper">
<?php include('navbar.php'); ?>
<div class="container-fluid">

<div class="card">
    <div id="bc1" class="btn-group btn-breadcrumb">
        <a href="/" class="btn btn-default text-success"><i class="fa fa-home"></i></a>
        <a href="#" class="btn btn-default text-danger">
            <div>الدردشة</div>
        </a>
    </div>
</div>

<div class="alert alert-danger">
<span style="font-family: Alexandria !important;"><u>آخر الأخبار:</u></span>
<marquee direction="right" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">
<?php
include('db.php');
if($_COOKIE['type'] == "admin"){
$sqls = "SELECT * FROM lessons";
}else{
$sqls = "SELECT * FROM lessons WHERE year='$_COOKIE[year]'";
}
$results = $conn->query($sqls);
if ($results->num_rows > 0) {
  while($rows = $results->fetch_assoc()){
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family: Alexandria !important; color: black !important;"><a href="subject?id=<?php echo "$rows[subject]"; ?>" style="color: black !important;"><i class="fas fa-hand-point-left" style="color: #0d6efd;"></i> <?php if($_COOKIE['type'] == "admin"){echo "$rows[name] - $rows[subject] - $rows[year]";}else{echo "$rows[name] - $rows[subject]";} ?></a></span>
<?php
}}
$conn->close();
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family: Alexandria !important; color: black !important;"><i class="fas fa-hand-point-left" style="color: #0d6efd;"></i> فروض الفصل الثاني تجرى في الأسبوع الثاني والثالث والرابع من شهر فيفري</span>
</marquee>
</div>

<div id="wrapper">
	<div id="chatbox">
	<?php
		if (file_exists ( "$name.html" ) && filesize ( "$name.html" ) > 0) {
		$handle = fopen ( "$name.html", "r" );
		$contents = fread ( $handle, filesize ( "$name.html" ) );
		fclose ( $handle );
		echo $contents;
		}else{
        echo "<h5 style='line-height: 275px; text-align: center;'>لا توجد رسائل، كن أول من يدردش..</h5>";
        }
	?>
	</div>
<form id="formmsg">

<div class="input-group mb-3">
<input type="text" class="form-control" id="usermsg" placeholder="الرسالة">
<div class="input-group-append">
<button type="input" class="btn btn-success" type="submit">إرسال</button>
</div>
</div>

</form>
</div>

<script type="text/javascript">
$("#formmsg").submit(function(){
    var clientmsg = $("#usermsg").val();
    if(clientmsg != "" && clientmsg != " "){
    $.post("post.php", {text: clientmsg});
    document.getElementById('usermsg').value = "";
    }else{
    alertify.error('الرجاء إدخال نص الرسالة');
    }
    loadLog;
    return false;
});
function loadLog(){
    $.ajax({
        url: "<?php echo $name; ?>.html",
        cache: false,
        success: function(html){
            if(html != ""){
            $("#chatbox").html(html);
            var newscrollHeight = document.getElementById("chatbox").getAttribute("scrollHeight") + 99999;
            $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal');
            }
        },
    });
}
setInterval (loadLog, 1000);
</script>

</div>
</div>

<!-- Custom JavaScript -->
<script src="changepass.js"></script>
<!-- start webpushr code --> <script>(function(w,d, s, id) {if(typeof(w.webpushr)!=='undefined') return;w.webpushr=w.webpushr||function(){(w.webpushr.q=w.webpushr.q||[]).push(arguments)};var js, fjs = d.getElementsByTagName(s)[0];js = d.createElement(s); js.id = id;js.async=1;js.src = "https://cdn.webpushr.com/app.min.js";fjs.parentNode.appendChild(js);}(window,document, 'script', 'webpushr-jssdk'));webpushr('setup',{'key':'BOaeNul9pt9rWtixsGEKsdZ8XzHFYRg6pug3Rd6aKNNePh3JG8ArFCDBxrXf6MyFQiVGRlE3lNJjjtOWCxfWrBU' });</script><!-- end webpushr code -->

</body>

</html>