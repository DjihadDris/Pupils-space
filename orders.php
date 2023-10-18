<?php
if(!isset($_COOKIE['id'])){
    header('Location: login?from=orders');
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
        <title>فضاء التلاميذ: الطلبات</title>
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
            <div>الطلبات</div>
        </a>
    </div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header bg-info">
				<h4 class="mb-0 text-white">الطلبات</h4>
			</div>
<div class="card-body">

                <ul class="nav nav-tabs mb-3">
					<li class="nav-item">
						<a href="#cors" data-toggle="tab" aria-expanded="true" class="nav-link active">
							<span class="d-none d-lg-block"><i class="fas fa-edit"></i> طلبات التصحيح</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="#vers" data-toggle="tab" aria-expanded="false" class="nav-link">
							<span class="d-none d-lg-block"><i class="fas fa-check"></i> طلبات التوثيق</span>
						</a>
					</li>
                    <li class="nav-item">
						<a href="#book" data-toggle="tab" aria-expanded="false" class="nav-link">
							<span class="d-none d-lg-block"><i class="fas fa-money-bill"></i> طلبات شراء الكتب</span>
						</a>
					</li>
				</ul>	

<div class="tab-content tabcontent-border">
                    <div class="tab-pane show active" id="cors" role="tabpanel">
                        <div class="card card-body">	
						
                            <div class="table-responsive">
                                <table id="cors" data-toggle="table" data-mobile-responsive="true" class="table table-default table-striped table-bordered" width="100%">
                                    <thead>
                                    <tr class="bg-success" style="color: white !important;">
                                        <th scope="col">#</th>
                                        <th scope="col">اللقب</th>
                                        <th scope="col">الإسم</th>
                                        <th scope="col">تاريخ الميلاد</th>
                                        <th scope="col">الطلب</th>
                                        <th scope="col">التصحيح</th>
                                        <th scope="col">حالة الطلب</th>
                                        <th scope="col">التاريخ</th>
                                        <th scope="col">الوقت</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
<?php
include('db.php');
$i = 1;
$sql = "SELECT * FROM cororders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

$sqls = "SELECT * FROM students WHERE ID='$row[userid]'";
$results = $conn->query($sqls);

if ($results->num_rows > 0) {
  // output data of each row
  while($rows = $results->fetch_assoc()) {
?>
                                    <tr>
                                        <th scope="row"><?php echo $i;$i++; ?></th>
                                        <td><?php echo "$rows[fn]"; ?></td>
                                        <td><?php echo "$rows[name]"; ?></td>
                                        <td><?php echo "$rows[dob]"; ?></td>
                                        <td>تصحيح <?php echo "$row[order]"; ?></td>
                                        <td><?php echo "$row[cor]"; ?></td>
							            <td><?php echo "$row[status]"; ?></td>
                                        <td><?php echo "$row[date]"; ?></td>
                                        <td><?php echo "$row[time]"; ?></td>
                                        <td>
<div class="dropdown">
  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">العمليات</button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" onclick="cor('yes', '<?php echo "$row[ID]"; ?>')"><i class="fas fa-check"></i> تم</a>
    <a class="dropdown-item" onclick="cor('wait', '<?php echo "$row[ID]"; ?>')"><i class="fas fa-history"></i> في الإنتظار</a>
    <a class="dropdown-item" onclick="cor('no', '<?php echo "$row[ID]"; ?>')"><i class="fas fa-close"></i> إلغاء</a>
    <a class="dropdown-item" onclick="delorder('<?php echo "$row[ID]"; ?>')"><i class="fas fa-trash"></i> حذف</a>
  </div>
</div>
                                        </td>
                                    </tr>
<?php
  }}
  }}else{
      echo "<tr><td colspan='10'>لا توجد طلبات..</td></tr>";
  }
mysqli_close($conn);
?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
					
					
                    <div class="tab-pane" id="vers" role="tabpanel">
                        <div class="card card-body">

                            <div class="table-responsive">
                                <table data-toggle="table" data-mobile-responsive="true" class="table table-default table-striped table-bordered" width="100%">
                                    <thead>
                                    <tr class="bg-success" style="color: white !important;">
                                            <th scope="col">#</th>
                                            <th scope="col">إسم المستخدم</th>
                                            <th scope="col">اللقب</th>
                                            <th scope="col">الإسم</th>
                                            <th scope="col">الجنس</th>
                                            <th scope="col">تاريخ الميلاد</th>
                                            <th scope="col">المستوى التعليمي</th>
                                            <th scope="col">الجذع/ الشعبة</th>
                                            <th scope="col">البريد الإلكتروني</th>
                                            <th scope="col">وضعية الحساب</th>
                                            <th scope="col">نوع الحساب</th>
                                            <th scope="col">آخر تسجيل دخول</th>
                                            <th scope="col">آخر دخول</th>
                                            <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
<?php
include('db.php');
$i = 1;
$sql = "SELECT * FROM students WHERE ver='wait'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
                                    <tr>
                                        <th scope="row"><?php echo $i;$i++; ?></th>
                                        <td><?php echo "$row[user]"; ?></td>
                                        <td><?php echo "$row[fn]"; ?></td>
                                        <td><?php echo "$row[name]"; ?></td>
                                        <td><?php echo "$row[gender]"; ?></td>
                                        <td><?php echo "$row[dob]"; ?></td>
                                        <td><?php echo "$row[year]"; ?></td>
                                        <td><?php echo "$row[div]"; ?></td>
                                        <td><?php echo "$row[email]"; ?></td>
                                        <td><?php if("$row[status]" == "yes"){echo "مفعل";}else{echo "غير مفعل";} ?></td>
                                        <td><?php if("$row[type]" == "admin"){echo "مشرف";}else{echo "تلميذ";} ?></td>
                                        <td><?php echo "$row[time] في $row[date]"; ?></td>
                                        <td><?php echo "$row[ltime] في $row[ldate]"; ?></td>
                                        <td>
<div class="dropdown">
  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">العمليات</button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" onclick="ver('ver', '<?php echo "$row[ID]"; ?>')"><i class="fas fa-check"></i> توثيق</a>
    <a class="dropdown-item" onclick="ver('unver', '<?php echo "$row[ID]"; ?>')"><i class="fas fa-close"></i> إلغاء التوثيق</a>
  </div>
</div>
                                        </td>
                                    </tr>
<?php
  }}else{
      echo "<tr><td colspan='14'>لا توجد طلبات..</td></tr>";
  }
mysqli_close($conn);
?>
                                    </tbody>
                                </table>		
                            </div>

                        </div>
                    </div>			



<div class="tab-pane" id="book" role="tabpanel">
                        <div class="card card-body">	
						
                            <div class="table-responsive">
                                <table id="cors" data-toggle="table" data-mobile-responsive="true" class="table table-default table-striped table-bordered" width="100%">
                                    <thead>
                                    <tr class="bg-success" style="color: white !important;">
                                        <th scope="col">#</th>
                                        <th scope="col">رقم الطلب</th>
                                        <th scope="col">اللقب</th>
                                        <th scope="col">الإسم</th>
                                        <th scope="col">البريد الإلكتروني</th>
                                        <th scope="col">رقم الهاتف</th>
                                        <th scope="col">إسم الكتاب</th>
                                        <th scope="col">سعر الكتاب</th>
                                        <th scope="col">السعر الإجمالي</th>
                                        <th scope="col">نوع الكتاب</th>
                                        <th scope="col">طريقة الدفع</th>
                                        <th scope="col">الولاية</th>
                                        <th scope="col">البلدية</th>
                                        <th scope="col">ملاحظات</th>
                                        <th scope="col">تاريخ الطلب</th>
                                        <th scope="col">حالة الطلب</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
<?php
include('db.php');
$i = 1;
$sql = "SELECT * FROM purshases";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

$sqls = "SELECT * FROM students WHERE ID='$row[userid]'";
$results = $conn->query($sqls);

if ($results->num_rows > 0) {
  // output data of each row
  while($rows = $results->fetch_assoc()) {
?>
                                    <tr>
                                        <th scope="row"><?php echo $i;$i++; ?></th>
                                        <td><?php echo "$row[orderid]"; ?></td>
                                        <td><?php echo "$rows[fn]"; ?></td>
                                        <td><?php echo "$rows[name]"; ?></td>
                                        <td><a target="_blank" href="mailto:<?php echo "$rows[email]"; ?>"><?php echo "$rows[email]"; ?></a></td>
                                        <td><a target="_blank" href="tel:<?php echo "$row[phone]"; ?>"><?php echo "$row[phone]"; ?></a></td>
<?php
$sqlt = "SELECT * FROM books WHERE ID='$row[bookid]'";
$resultt = $conn->query($sqlt);

if ($resultt->num_rows > 0) {
  // output data of each row
  while($rowt = $resultt->fetch_assoc()) {
?>
                                        <td><?php echo "$rowt[name]"; ?></td>
                                        <td><?php echo "$rowt[price]"; ?>.00 دج</td>
<?php
  }}else{
?>
                                        <td colspan="2">لم يتم العثور على الكتاب</td>
<?php
  }
?>
                                        <td><?php if("$row[method]" == "EDAHABIA" || "$row[method]" == "CIB"){echo ("$row[total]"+"25").".00";}elseif("$row[method]" == "DELIVERED"){echo "$row[total]";} ?> دج</td>
                                        <td><?php if("$row[type]" == "paper"){echo "النسخة الورقية";}elseif("$row[type]" == "digital"){echo "النسخة الإلكترونية";} ?></td>
                                        <td><?php if("$row[method]" == "EDAHABIA"){echo "البطاقة الذهبية EDAHABIA";}elseif("$row[method]" == "CIB"){echo "البطاقة البنكية CIB";}elseif("$row[method]" == "DELIVERED"){echo "الدفع عند الإستلام";} ?></td>
                                        <td><?php echo "$row[wilaya]"; ?></td>
                                        <td><?php echo "$row[commune]"; ?></td>
                                        <td><?php echo "$row[notes]"; ?></td>
                                        <td><?php echo "$row[date]"; ?></td>
							            <td><?php if("$row[status]" == "waitorder"){echo "<span class='badge text-bg-danger'>في إنتظار التوصيل</span>";}elseif("$row[status]" == "waitpay"){echo "<span class='badge text-bg-danger'>في إنتظار الدفع</span>";}elseif("$row[status]" == "paid"){echo "<span class='badge text-bg-success'>مدفوع</span>";}elseif("$row[status]" == "ok"){echo "<span class='badge text-bg-success'>تم التوصيل</span>";} ?></td>
                                        <td>
<div class="dropdown">
  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">العمليات</button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<?php
if("$row[method]" == "DELIVERED" AND "$row[status]" == "waitorder"){
?>
    <a class="dropdown-item" onclick="update('ok', '<?php echo "$row[ID]"; ?>')"><i class="fas fa-check"></i> تم التوصيل</a>
    <a class="dropdown-item" onclick="composeSMS('<?php echo "$row[phone]"; ?>')"><i class="fas fa-paper-plane"></i> إرسال رسالة</a>
<?php
}
?>
<?php
if(("$row[method]" == "EDAHABIA" OR "$row[method]" == "CIB") AND "$row[status]" == "waitpay"){
?>
    <a class="dropdown-item" onclick="update('paid', '<?php echo "$row[ID]"; ?>')"><i class="fas fa-check"></i> تم الدفع</a>
    <a class="dropdown-item" onclick="composeSMS('<?php echo "$row[phone]"; ?>')"><i class="fas fa-paper-plane"></i> إرسال رسالة</a>
<?php
}
?>
<?php
if("$row[status]" == "ok" OR "$row[status]" == "paid"){
?>
    <a class="dropdown-item" onclick="update('wait<?php if("$row[method]" == "EDAHABIA" OR "$row[method]" == "CIB"){echo "pay";}else{echo "order";} ?>', '<?php echo "$row[ID]"; ?>')"><i class="fas fa-history"></i> في الإنتظار</a>
<?php
}
?>
    <a class="dropdown-item" onclick="delborder('<?php echo "$row[ID]"; ?>')"><i class="fas fa-trash"></i> حذف</a>
  </div>
</div>
                                        </td>
                                    </tr>
<?php
  }}
  }}else{
      echo "<tr><td colspan='16'>لا توجد طلبات..</td></tr>";
  }
mysqli_close($conn);
?>
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
function composeSMS(recipient) {
  var message = "السلام عليكم، معك إدارة فضاء التلاميذ لتأكيد طلب شراء الكتاب";
  window.location.href = "sms:" + recipient + "?body=" + encodeURIComponent(message);
}

function update(status, id){
$.ajax({
    type: "POST",
    url: "updatebook.php",
    data: {
        wdo: "update",
        status: status,
        id: id
    },
    success: function(dataResult) {
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

function delborder(id){
    $.ajax({
		url: "actions.php",
		type: "POST",
        data: {
            type: 'delborder',
            id: id
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

function delorder(id){
    $.ajax({
		url: "actions.php",
		type: "POST",
        data: {
            type: 'delorder',
            id: id
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

function cor(st, id){
    if(st == "yes"){
        var send = "تم";
    }else if(st == "no"){
        var send = "ملغى";
    }else{
        var send = "في الإنتظار";
    }
    $.ajax({
		url: "actions.php",
		type: "POST",
        data: {
            type: 'cor',
            id: id,
            cor: send
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