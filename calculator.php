<?php
if(!isset($_COOKIE['id'])){
    header('Location: login?from=calculator');
}
/*if($_COOKIE['div'] <> "علوم تجريبية" AND $_COOKIE['year'] <> "السنة ثانية ثانوي"){
    header('Location: /');
}else{*/
include('db.php');
include('coes.php');
$sql = "SELECT * FROM results WHERE userid='$_COOKIE[id]'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {}}else{
$sqls = "INSERT INTO `results`(`userid`, `arabecoe`,  `mathcoe`, `physicscoe`, `sciencecoe`, `islamiccoe`,  `hisgeocoe`, `frenchcoe`, `englishcoe`, `sportcoe`) VALUES ('$_COOKIE[id]', '$arabecoe', '$mathcoe', '$physicscoe', '$sciencecoe', '$islamiccoe', '$hisgeocoe', '$frenchcoe', '$englishcoe', '$sportcoe')";
if ($conn->query($sqls) === TRUE) {
  header('Location: calculator');
} else {
  header('Location: /');
}
  }
$conn->close();
/*}*/
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
        <title>فضاء التلاميذ: حساب المعدل</title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.js"></script>
    </head>

<body class="fix-header card-no-border" onload="save('')">

<div id="main-wrapper">
<?php include('navbar.php'); ?>
<div class="container-fluid">

<div class="card">
    <div id="bc1" class="btn-group btn-breadcrumb">
        <a href="/" class="btn btn-default text-success"><i class="fa fa-home"></i></a>
        <a href="#" class="btn btn-default text-danger">
            <div>حساب المعدل</div>
        </a>
    </div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header bg-info">
				<h4 class="mb-0 text-white">حساب المعدل</h4>
			</div>

<div class="card-body">
                <ul class="nav nav-tabs mb-3">
                <?php
                if($_COOKIE['div'] == "علوم تجريبية"){
                ?>
					<li class="nav-item">
						<a href="#tri" data-toggle="tab" aria-expanded="true" class="nav-link active">
							<span class="d-none d-lg-block">المعدل الفصلي</span>
						</a>
					</li>
                <?php
                }
                ?>
					<li class="nav-item">
						<a href="#ann" data-toggle="tab" aria-expanded="false" class="nav-link<?php if($_COOKIE['div'] <> "علوم تجريبية"){echo " active";} ?>">
							<span class="d-none d-lg-block">المعدل السنوي</span>
						</a>
					</li>
				</ul>	
<div class="tab-content tabcontent-border">
                    <div class="tab-pane<?php if($_COOKIE['div'] == "علوم تجريبية"){echo " show active";} ?>" id="tri" role="tabpanel">
                        <div class="card card-body">

<div class="alert alert-danger">
<span><b>ملاحظة:</b> يتم حفظ جميع الخانات تلقائيا بعد كل عملية تغيير في الخانة.</span>
</div>
<div class="table-responsive">
<table id="results" data-toggle="table" data-mobile-responsive="true" class="table table-default table-bordered" width="100%" style="text-align: center;">
<thead>
<tr class="bg-warning" style="/*color: white !important;*/ height: 200px;">
<th scope="col" style="text-align: center; width: 100px; line-height: 200px; font-weight: bold;">المواد</th>
<th scope="col" style="writing-mode: vertical-rl; transform: rotate(180deg); text-align: center; width: 50px; font-weight: bold;">معاملات المواد</th>
<th scope="col" style="writing-mode: vertical-rl; transform: rotate(180deg); text-align: center; width: 50px; font-weight: bold;">التقويم المستمر/20</th>
<th scope="col" style="writing-mode: vertical-rl; transform: rotate(180deg); text-align: center; width: 50px; font-weight: bold;">أعمال تطبيقية أو تعبير شفوي/20</th>
<th scope="col" style="writing-mode: vertical-rl; transform: rotate(180deg); text-align: center; width: 50px; font-weight: bold;">معدل الفروض/20</th>
<th scope="col" style="writing-mode: vertical-rl; transform: rotate(180deg); text-align: center; width: 50px; font-weight: bold;">إختبار/20</th>
<th scope="col" style="writing-mode: vertical-rl; transform: rotate(180deg); text-align: center; width: 50px; font-weight: bold;">معدل المادة/20</th>
<th scope="col" style="writing-mode: vertical-rl; transform: rotate(180deg); text-align: center; width: 50px; font-weight: bold;">الجداء</th>
</tr>
</thead>
<?php
include('db.php');
$sql = "SELECT * FROM results WHERE userid='$_COOKIE[id]'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
?>
<tbody class="table-secondary">
<tr>
<td scope="row">اللغة العربية وآدابها</td>
<td><input class="form-control" type="number" max="7" min="0" id="arabecoe" onkeyup="save('arabecoe')" value="<?php echo "$row[arabecoe]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="arabeeva" onkeyup="save('arabeeva')" step="0.25" value="<?php echo "$row[arabeeva]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="arabetp" onkeyup="save('arabetp')" step="0.25" value="<?php echo "$row[arabetp]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="arabetes" onkeyup="save('arabetes')" step="0.25" value="<?php echo "$row[arabetes]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="arabeexa" onkeyup="save('arabeexa')" step="0.25" value="<?php echo "$row[arabeexa]"; ?>"></td>
<td id="araberate">0.00</td>
<td id="arabetot">0.00</td>
</tr>
<tr>
<td scope="row">الرياضيات</td>
<td><input class="form-control" type="number" max="7" min="0" id="mathcoe" onkeyup="save('mathcoe')" value="<?php echo "$row[mathcoe]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="matheva" onkeyup="save('matheva')" step="0.25" value="<?php echo "$row[matheva]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="mathtp" onkeyup="save('mathtp')" hidden step="0.25" value="<?php echo "$row[mathtp]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="mathtes" onkeyup="save('mathtes')" step="0.25" value="<?php echo "$row[mathtes]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="mathexa" onkeyup="save('mathexa')" step="0.25" value="<?php echo "$row[mathexa]"; ?>"></td>
<td id="mathrate">0.00</td>
<td id="mathtot">0.00</td>
</tr>
<tr>
<td scope="row">العلوم الفيزيائية</td>
<td><input class="form-control" type="number" max="7" min="0" id="physicscoe" onkeyup="save('physicscoe')" value="<?php echo "$row[physicscoe]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="physicseva" onkeyup="save('physicseva')" step="0.25" value="<?php echo "$row[physicseva]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="physicstp" onkeyup="save('physicstp')" step="0.25" value="<?php echo "$row[physicstp]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="physicstes" onkeyup="save('physicstes')" step="0.25" value="<?php echo "$row[physicstes]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="physicsexa" onkeyup="save('physicsexa')" step="0.25" value="<?php echo "$row[physicsexa]"; ?>"></td>
<td id="physicsrate">0.00</td>
<td id="physicstot">0.00</td>
</tr>
<tr>
<td scope="row">علوم طبيعية وحياة</td>
<td><input class="form-control" type="number" max="7" min="0" id="sciencecoe" onkeyup="save('sciencecoe')" value="<?php echo "$row[sciencecoe]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="scienceeva" onkeyup="save('scienceeva')" step="0.25" value="<?php echo "$row[scienceeva]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="sciencetp" onkeyup="save('sciencetp')" step="0.25" value="<?php echo "$row[sciencetp]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="sciencetes" onkeyup="save('sciencetes')" step="0.25" value="<?php echo "$row[sciencetes]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="scienceexa" onkeyup="save('scienceexa')" step="0.25" value="<?php echo "$row[scienceexa]"; ?>"></td>
<td id="sciencerate">0.00</td>
<td id="sciencetot">0.00</td>
</tr>
<tr>
<td scope="row">العلوم الإسلامية</td>
<td><input class="form-control" type="number" max="7" min="0" id="islamiccoe" onkeyup="save('islamiccoe')" value="<?php echo "$row[islamiccoe]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="islamiceva" onkeyup="save('islamiceva')" step="0.25" value="<?php echo "$row[islamiceva]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="islamictp" onkeyup="save('islamictp')" hidden step="0.25" value="<?php echo "$row[islamictp]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="islamictes" onkeyup="save('islamictes')" step="0.25" value="<?php echo "$row[islamictes]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="islamicexa" onkeyup="save('islamicexa')" step="0.25" value="<?php echo "$row[islamicexa]"; ?>"></td>
<td id="islamicrate">0.00</td>
<td id="islamictot">0.00</td>
</tr>
<tr>
<td scope="row">التاريخ والجغرافيا</td>
<td><input class="form-control" type="number" max="7" min="0" id="hisgeocoe" onkeyup="save('hisgeocoe')" value="<?php echo "$row[hisgeocoe]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="hisgeoeva" onkeyup="save('hisgeoeva')" step="0.25" value="<?php echo "$row[hisgeoeva]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="hisgeotp" onkeyup="save('hisgeotp')" hidden step="0.25" value="<?php echo "$row[hisgeotp]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="hisgeotes" onkeyup="save('hisgeotes')" step="0.25" value="<?php echo "$row[hisgeotes]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="hisgeoexa" onkeyup="save('hisgeoexa')" step="0.25" value="<?php echo "$row[hisgeoexa]"; ?>"></td>
<td id="hisgeorate">0.00</td>
<td id="hisgeotot">0.00</td>
</tr>
<tr>
<td scope="row">اللغة الفرنسية</td>
<td><input class="form-control" type="number" max="7" min="0" id="frenchcoe" onkeyup="save('frenchcoe')" value="<?php echo "$row[frenchcoe]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="frencheva" onkeyup="save('frencheva')" step="0.25" value="<?php echo "$row[frencheva]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="frenchtp" onkeyup="save('frenchtp')" step="0.25" value="<?php echo "$row[frenchtp]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="frenchtes" onkeyup="save('frenchtes')" step="0.25" value="<?php echo "$row[frenchtes]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="frenchexa" onkeyup="save('frenchexa')" step="0.25" value="<?php echo "$row[frenchexa]"; ?>"></td>
<td id="frenchrate">0.00</td>
<td id="frenchtot">0.00</td>
</tr>
<tr>
<td scope="row">اللغة الإنجليزية</td>
<td><input class="form-control" type="number" max="7" min="0" id="englishcoe" onkeyup="save('englishcoe')" value="<?php echo "$row[englishcoe]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="englisheva" onkeyup="save('englisheva')" step="0.25" value="<?php echo "$row[englisheva]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="englishtp" onkeyup="save('englishtp')" step="0.25" value="<?php echo "$row[englishtp]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="englishtes" onkeyup="save('englishtes')" step="0.25" value="<?php echo "$row[englishtes]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="englishexa" onkeyup="save('englishexa')" step="0.25" value="<?php echo "$row[englishexa]"; ?>"></td>
<td id="englishrate">0.00</td>
<td id="englishtot">0.00</td>
</tr>
<tr>
<td scope="row">ت. البدنية والرياضية</td>
<td><input class="form-control" type="number" max="7" min="0" id="sportcoe" onkeyup="save('sportcoe')" value="<?php echo "$row[sportcoe]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="sporteva" onkeyup="save('sporteva')" step="0.25" value="<?php echo "$row[sporteva]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="sporttp" onkeyup="save('sporttp')" hidden step="0.25" value="<?php echo "$row[sporttp]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="sporttes" onkeyup="save('sporttes')" step="0.25" value="<?php echo "$row[sporttes]"; ?>"></td>
<td><input class="form-control" type="number" max="20" min="0" id="sportexa" onkeyup="save('sportexa')" step="0.25" value="<?php echo "$row[sportexa]"; ?>"></td>
<td id="sportrate">0.00</td>
<td id="sporttot">0.00</td>
</tr>
<tr>
<td scope="row">تثمين المطالعة</td>
<td colspan="5"><input class="form-control" type="number" max="20" min="0" id="motala3a" onkeyup="save('motala3a')" step="0.5" value="<?php echo "$row[motala3a]"; ?>"></td>
<td id="motala3arate">0.00</td>
<td id="motala3atot">0.00</td>
</tr>
<tr>
<td scope="row">تثمين المشاريع</td>
<td colspan="5"><input class="form-control" type="number" max="20" min="0" id="machari3" onkeyup="save('machari3')" step="0.5" value="<?php echo "$row[machari3]"; ?>"></td>
<td id="machari3rate">0.00</td>
<td id="machari3tot">0.00</td>
</tr>
<tr>
<td scope="row">المجاميع</td>
<td id="totcoe">0</td>
<td colspan="5"></td>
<td id="tottot">0.00</td>
</tr>
<tr>
<td scope="row" colspan="4" id="mmomayaza">معدل المواد المميزة: 0.00/20</td>
<td colspan="4" id="mtri">المعدل الفصلي: 0.00/20</td>
</tr>
</tbody>
<?php
  }}else{
?>
<tbody>
<tr>
<td colspan="8">تعذر جلب البيانات، الرجاء إعادة تسجيل الدخول</td>
</tr>
</tbody>
<?php
  }
$conn->close();
?>
</table>
</div>
<button class="btn btn-danger" onclick="savebulletin('<?php echo $_COOKIE['name']; ?>')">تحميل كشف النقاط</button>

                        </div>
                    </div>

                    <div class="tab-pane<?php if($_COOKIE['div'] <> "علوم تجريبية"){echo " show active";} ?>" id="ann" role="tabpanel">
                        <div class="card card-body">

<div class="table-responsive">
<table id="annt" data-toggle="table" data-mobile-responsive="true" class="table table-default table-bordered" width="100%" style="text-align: center;">
<thead>
<tr class="bg-warning">
<th scope="col" style="font-weight: bold;">المعدل الفصلي 1</th>
<th scope="col" style="font-weight: bold;">المعدل الفصلي 2</th>
<th scope="col" style="font-weight: bold;">المعدل الفصلي 3</th>
<th scope="col" style="font-weight: bold;">المعدل السنوي</th>
<tr>
</thead>
<tbody class="table-secondary">
<tr>
<td scope="row"><input class="form-control" type="number" max="20" min="0" id="mtri1" onkeyup="calann()" step="0.01"></td>
<td scope="row"><input class="form-control" type="number" max="20" min="0" id="mtri2" onkeyup="calann()" step="0.01"></td>
<td scope="row"><input class="form-control" type="number" max="20" min="0" id="mtri3" onkeyup="calann()" step="0.01"></td>
<td id="calann">0.00</td>
</tr>
</tbody>
</table>
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
function calann(){
var mtri1 = Number(document.getElementById('mtri1').value);
var mtri2 = Number(document.getElementById('mtri2').value);
var mtri3 = Number(document.getElementById('mtri3').value);
var mann = document.getElementById('calann');
if(mtri1 != "" || mtri1 >= 0 && mtri2 != "" || mtri2 >= 0 && mtri3 != "" || mtri2 >= 0){
mann.innerHTML = ((mtri1+mtri2+mtri3)/3).toFixed(2);
}else{
mann.innerHTML = "0.00";
}
}

function savebulletin(name){

const node = document.getElementById('results');
const width = 1200;
const height = 900;

domtoimage.toPng(node, { width, height }).then (function (dataUrl) {

var a = document.createElement('a');
a.href = dataUrl;
a.download = "كشف النقاط - "+name+".png";
document.body.appendChild(a);
a.click();
document.body.removeChild(a);

    })
    .catch(function (error) {
        console.error('Error..', error);
    });

}

function save(item){
if(item != ""){
var itemc = document.getElementById(item).value;
if(itemc != "" && itemc >= 0){
$.ajax({
url: "saveresults.php",
type: "POST",
cache: false,
data:{
item: item,
itemc: itemc
},
success: function(dataResult){
var dataResult = JSON.parse(dataResult);
if(dataResult.statusCode==200){
/*document.getElementById(item).disabled = true;*/
}else if(dataResult.statusCode==201){
alertify.error('تعذر الحفظ، الرجاء إعادة تسجيل الدخول');
}
}
});
}
}

var arabecoe = Number(document.getElementById('arabecoe').value);
var arabeeva = Number(document.getElementById('arabeeva').value);
var arabetp = Number(document.getElementById('arabetp').value);
var arabetes = Number(document.getElementById('arabetes').value);
var arabeexa = Number(document.getElementById('arabeexa').value)*2;
var araberate = document.getElementById('araberate');
var arabetot = document.getElementById('arabetot');

araberate.innerHTML = ((arabeeva+arabeexa+arabetes+arabetp)/5).toFixed(2);
arabetot.innerHTML = (araberate.innerHTML*arabecoe).toFixed(2);

var mathcoe = Number(document.getElementById('mathcoe').value);
var matheva = Number(document.getElementById('matheva').value);
var mathtp = Number(document.getElementById('mathtp').value);
var mathtes = Number(document.getElementById('mathtes').value);
var mathexa = Number(document.getElementById('mathexa').value)*2;
var mathrate = document.getElementById('mathrate');
var mathtot = document.getElementById('mathtot');

mathrate.innerHTML = ((matheva+mathexa+mathtes)/4).toFixed(2);
mathtot.innerHTML = (mathrate.innerHTML*mathcoe).toFixed(2);

var physicscoe = Number(document.getElementById('physicscoe').value);
var physicseva = Number(document.getElementById('physicseva').value);
var physicstp = Number(document.getElementById('physicstp').value);
var physicstes = Number(document.getElementById('physicstes').value);
var physicsexa = Number(document.getElementById('physicsexa').value)*2;
var physicsrate = document.getElementById('physicsrate');
var physicstot = document.getElementById('physicstot');

physicsrate.innerHTML = ((physicseva+physicsexa+physicstes+physicstp)/5).toFixed(2);
physicstot.innerHTML = (physicsrate.innerHTML*physicscoe).toFixed(2);

var sciencecoe = Number(document.getElementById('sciencecoe').value);
var scienceeva = Number(document.getElementById('scienceeva').value);
var sciencetp = Number(document.getElementById('sciencetp').value);
var sciencetes = Number(document.getElementById('sciencetes').value);
var scienceexa = Number(document.getElementById('scienceexa').value)*2;
var sciencerate = document.getElementById('sciencerate');
var sciencetot = document.getElementById('sciencetot');

sciencerate.innerHTML = ((scienceeva+scienceexa+sciencetes+sciencetp)/5).toFixed(2);
sciencetot.innerHTML = (sciencerate.innerHTML*sciencecoe).toFixed(2);

var islamiccoe = Number(document.getElementById('islamiccoe').value);
var islamiceva = Number(document.getElementById('islamiceva').value);
var islamictp = Number(document.getElementById('islamictp').value);
var islamictes = Number(document.getElementById('islamictes').value);
var islamicexa = Number(document.getElementById('islamicexa').value)*2;
var islamicrate = document.getElementById('islamicrate');
var islamictot = document.getElementById('islamictot');

islamicrate.innerHTML = ((islamiceva+islamicexa+islamictes)/4).toFixed(2);
islamictot.innerHTML = (islamicrate.innerHTML*islamiccoe).toFixed(2);

var hisgeocoe = Number(document.getElementById('hisgeocoe').value);
var hisgeoeva = Number(document.getElementById('hisgeoeva').value);
var hisgeotp = Number(document.getElementById('hisgeotp').value);
var hisgeotes = Number(document.getElementById('hisgeotes').value);
var hisgeoexa = Number(document.getElementById('hisgeoexa').value)*2;
var hisgeorate = document.getElementById('hisgeorate');
var hisgeotot = document.getElementById('hisgeotot');

hisgeorate.innerHTML = ((hisgeoeva+hisgeoexa+hisgeotes)/4).toFixed(2);
hisgeotot.innerHTML = (hisgeorate.innerHTML*hisgeocoe).toFixed(2);

var frenchcoe = Number(document.getElementById('frenchcoe').value);
var frencheva = Number(document.getElementById('frencheva').value);
var frenchtp = Number(document.getElementById('frenchtp').value);
var frenchtes = Number(document.getElementById('frenchtes').value);
var frenchexa = Number(document.getElementById('frenchexa').value)*2;
var frenchrate = document.getElementById('frenchrate');
var frenchtot = document.getElementById('frenchtot');

frenchrate.innerHTML = ((frencheva+frenchexa+frenchtes+frenchtp)/5).toFixed(2);
frenchtot.innerHTML = (frenchrate.innerHTML*frenchcoe).toFixed(2);

var englishcoe = Number(document.getElementById('englishcoe').value);
var englisheva = Number(document.getElementById('englisheva').value);
var englishtp = Number(document.getElementById('englishtp').value);
var englishtes = Number(document.getElementById('englishtes').value);
var englishexa = Number(document.getElementById('englishexa').value)*2;
var englishrate = document.getElementById('englishrate');
var englishtot = document.getElementById('englishtot');

englishrate.innerHTML = ((englisheva+englishexa+englishtes+englishtp)/5).toFixed(2);
englishtot.innerHTML = (englishrate.innerHTML*englishcoe).toFixed(2);

var sportcoe = Number(document.getElementById('sportcoe').value);
var sporteva = Number(document.getElementById('sporteva').value);
var sporttp = Number(document.getElementById('sporttp').value);
var sporttes = Number(document.getElementById('sporttes').value);
var sportexa = Number(document.getElementById('sportexa').value)*2;
var sportrate = document.getElementById('sportrate');
var sporttot = document.getElementById('sporttot');

sportrate.innerHTML = ((sporteva+sportexa+sporttes)/4).toFixed(2);
sporttot.innerHTML = (sportrate.innerHTML*sportcoe).toFixed(2);

var motala3a = Number(document.getElementById('motala3a').value);
var motala3arate = document.getElementById('motala3arate');
motala3arate.innerHTML = motala3a.toFixed(2);
var motala3atot = document.getElementById('motala3atot');
if(motala3a > 10){
motala3atot.innerHTML = (motala3a-10).toFixed(2);
}else{
motala3atot.innerHTML = "0.00";
}

var machari3 = Number(document.getElementById('machari3').value);
var machari3rate = document.getElementById('machari3rate');
machari3rate.innerHTML = machari3.toFixed(2);
var machari3tot = document.getElementById('machari3tot');
if(machari3 > 10){
machari3tot.innerHTML = (machari3-10).toFixed(2);
}else{
machari3tot.innerHTML = "0.00";
}

var totcoe = document.getElementById('totcoe');
totcoe.innerHTML = (arabecoe+mathcoe+physicscoe+sciencecoe+islamiccoe+hisgeocoe+frenchcoe+englishcoe+sportcoe);
var tottot = document.getElementById('tottot');
tottot.innerHTML = (Number(arabetot.innerHTML)+Number(mathtot.innerHTML)+Number(physicstot.innerHTML)+Number(sciencetot.innerHTML)+Number(islamictot.innerHTML)+Number(hisgeotot.innerHTML)+Number(frenchtot.innerHTML)+Number(englishtot.innerHTML)+Number(sporttot.innerHTML)+Number(motala3atot.innerHTML)+Number(machari3tot.innerHTML)).toFixed(2);

var mmomayaza = document.getElementById('mmomayaza');
var mmomayazaif = ((Number(mathtot.innerHTML)+Number(physicstot.innerHTML)+Number(sciencetot.innerHTML))/(mathcoe+physicscoe+sciencecoe)).toFixed(2);
if(mmomayazaif != "" && mmomayazaif >= 0){
mmomayaza.innerHTML = "معدل المواد المميزة: " + mmomayazaif + "/20";
}else{
mmomayaza.innerHTML = "معدل المواد المميزة: 0.00/20";
}
var mtri = document.getElementById('mtri');
var mtriif = Number((tottot.innerHTML/totcoe.innerHTML)).toFixed(2);
if(mtriif != "" && mtriif >= 0){
mtri.innerHTML = "المعدل الفصلي: " + mtriif + "/20";
}else{
mtri.innerHTML = "المعدل الفصلي: 0.00/20";
}
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