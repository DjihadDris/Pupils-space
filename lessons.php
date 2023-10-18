<?php
if(!isset($_COOKIE['id'])){
    header('Location: login?from=lessons');
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
        <title>فضاء التلاميذ: الدروس</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.1/css/all.css">
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
            .dataTables_wrapper .dataTables_paginate .paginate_button a {
                border-radius: 0% !important;
                border: none !important;
            }
            popup_heading_text, notification_title, #webpushrOnBtn, #webpushrOffBtn, webpushrheadline4, webpushrprompttext4, webpushrpromptbtnapprove4, webpushrpromptbtndeny4 {
                font-family: 'Alexandria' !important;
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
    </head>

<body class="fix-header card-no-border">

<div id="main-wrapper">
<?php include('navbar.php'); ?>
<div class="container-fluid">
<div class="card">
    <div id="bc1" class="btn-group btn-breadcrumb">
        <a href="/" class="btn btn-default text-success"><i class="fa fa-home"></i></a>
        <a href="#" class="btn btn-default text-danger">
            <div>الدروس</div>
        </a>
    </div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header bg-info">
				<h4 class="mb-0 text-white">الدروس</h4>
			</div>
<div class="card-body">
<div class="card card-body">		

<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <div class="col">
        <a href="subject?id=الرياضيات">
          <div class="card shadow-sm">      
<img class="bd-placeholder-img card-img-top" src="scovers/img1.png" width="100%" height="200">
          </div>
        </a>
        </div>

        <div class="col">
        <a href="subject?id=اللغة العربية">
          <div class="card shadow-sm">      
<img class="bd-placeholder-img card-img-top" src="scovers/img2.png" width="100%" height="200">
          </div>
        </a>
        </div>

        <div class="col">
        <a href="subject?id=اللغة الفرنسية">
          <div class="card shadow-sm">      
<img class="bd-placeholder-img card-img-top" src="scovers/img3.png" width="100%" height="200">
          </div>
        </a>
        </div>

        <div class="col">
        <a href="subject?id=اللغة الإنجليزية">
          <div class="card shadow-sm">      
<img class="bd-placeholder-img card-img-top" src="scovers/img4.png" width="100%" height="200">
          </div>
        </a>
        </div>

        <div class="col">
        <a href="subject?id=التاريخ والجغرافيا">
          <div class="card shadow-sm">      
<img class="bd-placeholder-img card-img-top" src="scovers/img5.png" width="100%" height="200">
          </div>
        </a>
        </div>
<?php
if($_COOKIE['type'] == "admin" OR $_COOKIE['div'] == "علوم تجريبية" OR $_COOKIE['div'] == "رياضيات" OR $_COOKIE['div'] == "تقني رياضي" OR $_COOKIE['year'] == "السنة أولى ثانوي"){
?>
        <div class="col">
        <a href="subject?id=العلوم الفيزيائية">
          <div class="card shadow-sm">      
<img class="bd-placeholder-img card-img-top" src="scovers/img6.png" width="100%" height="200">
          </div>
        </a>
        </div>
<?php
}
if($_COOKIE['type'] == "admin" OR $_COOKIE['div'] == "علوم تجريبية" OR $_COOKIE['div'] == "رياضيات" OR $_COOKIE['year'] == "السنة أولى ثانوي"){
?>
        <div class="col">
        <a href="subject?id=العلوم الطبيعية">
          <div class="card shadow-sm">      
<img class="bd-placeholder-img card-img-top" src="scovers/img7.png" width="100%" height="200">
          </div>
        </a>
        </div>
<?php
}
?>
        <div class="col">
        <a href="subject?id=العلوم الإسلامية">
          <div class="card shadow-sm">      
<img class="bd-placeholder-img card-img-top" src="scovers/img8.png" width="100%" height="200">
          </div>
        </a>
        </div>
<?php
if($_COOKIE['type'] == "admin" OR $_COOKIE['div'] == "تسيير وإقتصاد"){
?>
        <div class="col">
        <a href="subject?id=الإقتصاد والمناجمنت">
          <div class="card shadow-sm">      
<img class="bd-placeholder-img card-img-top" src="scovers/img9.png" width="100%" height="200">
          </div>
        </a>
        </div>

        <div class="col">
        <a href="subject?id=التسيير المحاسبي والمالي">
          <div class="card shadow-sm">      
<img class="bd-placeholder-img card-img-top" src="scovers/img10.png" width="100%" height="200">
          </div>
        </a>
        </div>

        <div class="col">
        <a href="subject?id=القانون">
          <div class="card shadow-sm">      
<img class="bd-placeholder-img card-img-top" src="scovers/img11.png" width="100%" height="200">
          </div>
        </a>
        </div>
<?php
}
if($_COOKIE['type'] == "admin" OR $_COOKIE['div'] == "تقني رياضي" OR $_COOKIE['div'] == "جذع مشترك علوم وتكنولوجيا"){
?>
        <div class="col">
        <a href="subject?id=التكنولوجيا">
          <div class="card shadow-sm">      
<img class="bd-placeholder-img card-img-top" src="scovers/img12.png" width="100%" height="200">
          </div>
        </a>
        </div>
<?php
}
if($_COOKIE['type'] == "admin" OR $_COOKIE['div'] == "آداب ولغات أجنبية"){
?>
        <div class="col">
        <a href="subject?id=اللغة الإيطالية">
          <div class="card shadow-sm">      
<img class="bd-placeholder-img card-img-top" src="scovers/img13.png" width="100%" height="200">
          </div>
        </a>
        </div>
<?php
}
if($_COOKIE['type'] == "admin" OR $_COOKIE['div'] == "آداب وفلسفة" OR $_COOKIE['year'] == "السنة ثالثة ثانوي"){
?>
        <div class="col">
        <a href="subject?id=الفلسفة">
          <div class="card shadow-sm">      
<img class="bd-placeholder-img card-img-top" src="scovers/img14.png" width="100%" height="200">
          </div>
        </a>
        </div>
<?php
}
if($_COOKIE['type'] == "admin" OR $_COOKIE['year'] == "السنة أولى ثانوي"){
?>
        <div class="col">
        <a href="subject?id=الإعلام الآلي">
          <div class="card shadow-sm">      
<img class="bd-placeholder-img card-img-top" src="scovers/img15.png" width="100%" height="200">
          </div>
        </a>
        </div>
<?php
}
?>
      </div>
    </div>
  </div>

</div>
</div>
		</div>
	</div>
</div>

</div>
</div>

<!-- Custom JavaScript -->
<script src="changepass.js"></script>

<script>
function ver(ver, id){
    if(ver == "ver"){
        var send = "yes";
    }else{
        var send = "no";
    }
    $.ajax({
		url: "actions.php",
		type: "POST",
        data: {
            type: 'ver',
            id: id,
            ver: send
        },
		cache: false,
		success: function(dataResult){
		var dataResult = JSON.parse(dataResult);
		if(dataResult.statusCode==200){
            alertify.success('تمت العملية بنجاح');
            location.reload();
        }else if(dataResult.statusCode==201){
            alertify.error('تعذّر إتمام العملية');
        }
        }
    });
}
</script>
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