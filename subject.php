<?php
if(!isset($_COOKIE['id'])){
    header('Location: login');
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
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="https://awlyaa.education.gov.dz/public/assets/images/favicon.png">
        <title>فضاء التلاميذ: الدروس - <?php echo $_GET['id']; ?></title>
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
        <script src="https://cdn.tiny.cloud/1/1pz0lp632p1tc3y9nfmzy0wsl4c2xx0n0bidpi0s53fsc2l6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '#description',
      language: 'ar',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      content_style: "@import url('https://fonts.googleapis.com/css2?family=Alexandria&display=swap'); body { font-family: Alexandria; }",
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
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
            .dataTables_wrapper .dataTables_paginate .paginate_button a {
                border-radius: 0% !important;
                border: none !important;
            }
            popup_heading_text, notification_title, #webpushrOnBtn, webpushrheadline4, webpushrprompttext4, webpushrpromptbtnapprove4, webpushrpromptbtndeny4 {
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
<?php
include('db.php');
$sql = "SELECT * FROM students WHERE ID='$_COOKIE[id]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
if("$row[ver]" == "yes"){
    $res = "true";
}else{
    $res = "false";
}
?>
<body oncontextmenu="return <?php echo $res; ?>;" onload="lessons()" class="fix-header card-no-border">
<?php
  }}
?>

<div id="main-wrapper">
<?php include('navbar.php'); ?>
<div class="container-fluid">
<div class="card">
    <div id="bc1" class="btn-group btn-breadcrumb">
        <a href="/" class="btn btn-default text-success"><i class="fa fa-home"></i></a>
        <a href="lessons" class="btn btn-default text-warning">
            <div>الدروس</div>
        </a>
        <a href="#" class="btn btn-default text-danger">
            <div><?php echo $_GET['id']; ?></div>
        </a>
        <button class="btn btn-outline-primary" data-toggle="modal" data-backdrop="false" data-target="#addlesson"><i class="fas fa-plus"></i> إضافة درس</button>
    </div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header bg-info">
				<h4 class="mb-0 text-white"><?php echo $_GET['id']; ?></h4>
			</div>
<div class="card-body">

<div class="table-responsive">
                                <table id="lessons" data-toggle="table" data-mobile-responsive="true" class="table table-default table-striped table-bordered display" width="100%">
                                    <thead>
                                        <tr class="bg-success" style="color: white !important;">
                                            <th scope="col">#</th>
                                            <th scope="col">إسم الدرس</th>
                                            <?php if($_COOKIE['type'] == "admin"){ ?>
                                            <th scope="col">المستوى التعليمي</th>
                                            <?php } ?>
                                            <th scope="col"><?php if($_COOKIE['type'] == "admin"){ ?>الجذع/ الشعبة<?php }else{if($_COOKIE['year'] == "السنة أولى ثانوي"){echo "الجذع";}else{echo "الشعبة";}} ?></th>
                                            <th scope="col">الفصل</th>
                                            <th scope="col">التاريخ</th>
                                            <th scope="col">الوقت</th>
                                            <th scope="col">المستخدم</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="content">
                                        <tr>
                                            <td colspan="9"><span class="text-muted">الرجاء الإنتظار <i class="fa fa-spinner fa-spin"></i></span></td>
                                        </tr>
                                    </tbody>
                                </table>	
                            </div>

</div>
	    </div>
    </div>

<div class="modal fade" id="addlesson" tabindex="-1" role="dialog" aria-labelledby="addLessonLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title">إضافة درس</h5>
		</div>
		    <div class="modal-body">
<input type="hidden" id="id">
<div class="row"><div class="col-md-12"><div class="form-group row"><div class="col-md-3"><label class="control-label text-right col-md-3">إسم الدرس</label> </div><div class="col-md-9"><input class="form-control" id="name" type="text" required=""></div></div></div></div>
<br>
<div class="row"><div class="col-md-12"><div class="form-group row"><div class="col-md-3"><label class="control-label text-right col-md-3">وصف الدرس</label> </div><div class="col-md-9"><textarea class="form-control" id="description" type="text" required=""></textarea></div></div></div></div>
<br>
<div class="row"><div class="col-md-12"><div class="form-group row"><div class="col-md-3"><label class="control-label text-right col-md-3">ملف الدرس</label> </div><div class="col-md-9"><input class="form-control" type="file" id="file" accept="application/pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint"><br><br><div class="progress" id="progress2" style="display: none;"><div id="progressbar2" class="progress-bar" style="width: 25%;"></div></div><div id='preview2'></div></div></div></div></div>
<br>
<div class="row"><div class="col-md-12"><div class="form-group row"><div class="col-md-3"><label class="control-label text-right col-md-3">صور الدرس</label> </div><div class="col-md-9"><input class="form-control" type="file" id="images" accept="image/*"><br><br><div class="progress" id="progress" style="display: none;"><div id="progressbar" class="progress-bar" style="width: 25%;"></div></div><br><div class="row" id='preview'></div></div></div></div></div>
<br>
<?php if($_COOKIE['type'] == "admin"){ ?>
<div class="row"><div class="col-md-12"><div class="form-group row"><div class="col-md-3"><label class="control-label text-right col-md-3">المستوى التعليمي</label> </div><div class="col-md-9"><select onchange="play()" required id="year" class="form-control">
                                                <option value="">--إختر المستوى التعليمي--</option>
                                                <option value="السنة أولى ثانوي">السنة أولى ثانوي</option>
                                                <option value="السنة ثانية ثانوي">السنة ثانية ثانوي</option>
                                                <option value="السنة ثالثة ثانوي">السنة ثالثة ثانوي</option>
                                                </select></div></div></div></div>
<br>
<div class="row"><div class="col-md-12"><div class="form-group row"><div class="col-md-3"><label class="control-label text-right col-md-3">الجذع/ الشعبة</label> </div><div class="col-md-9"><select required id="div" class="form-control">
                                                <option value="">--إختر الجذع/ الشعبة--</option>
                                                <option id="1as1" style="display: none;" value="جذع مشترك علوم وتكنولوجيا">جذع مشترك علوم وتكنولوجيا</option>
                                                <option id="1as2" style="display: none;" value="جذع مشترك آداب">جذع مشترك آداب</option>
                                                <option id="as1" style="display: none;" value="علوم تجريبية">علوم تجريبية</option>
                                                <option id="as2" style="display: none;" value="رياضيات">رياضيات</option>
                                                <option id="as3" style="display: none;" value="تقني رياضي">تقني رياضي</option>
                                                <option id="as4" style="display: none;" value="تسيير وإقتصاد">تسيير وإقتصاد</option>
                                                <option id="as5" style="display: none;" value="آداب ولغات أجنبية">آداب ولغات أجنبية</option>
                                                <option id="as6" style="display: none;" value="آداب وفلسفة">آداب وفلسفة</option>
                                                </select></div></div></div></div>
<br>
<?php
}else{
?>
<input type="hidden" id="year" value="<?php echo $_COOKIE['year']; ?>">
<input type="hidden" id="div" value="<?php echo $_COOKIE['div']; ?>">
<?php
}
?>
<div class="row"><div class="col-md-12"><div class="form-group row"><div class="col-md-3"><label class="control-label text-right col-md-3">الفصل</label> </div><div class="col-md-9"><select required id="trim" class="form-control">
                                                <option value="">--إختر الفصل--</option>
                                                <option value="الفصل الأول">الفصل الأول</option>
                                                <option selected value="الفصل الثاني">الفصل الثاني</option>
                                                <option value="الفصل الثالث">الفصل الثالث</option>
                                                </select></div></div></div></div>
            </div>
			<div class="modal-footer">
				<button type="button" onclick="savedata()" id="savedatebtn" class="btn btn-primary">حفظ</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">إلغاء</button>		
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="viewlesson" tabindex="-1" role="dialog" aria-labelledby="viewLessonLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title"> عرض الدرس</h5>
		</div>
		    <div class="modal-body">
            <p><span style="color: #1e88e5; font-weight: bold; text-decoration: underline;">إسم الدرس:</span> <span style="color: black;" id="lname"></span></p>
            <p><span style="color: #1e88e5; font-weight: bold; text-decoration: underline;">وصف الدرس:</span><br><div id="ldes"><span class="text-muted">الرجاء الإنتظار <i class="fa fa-spinner fa-spin"></i></span></div></p>
            <p><span style="color: #1e88e5; font-weight: bold; text-decoration: underline;">ملف الدرس:</span><br><div id="lfile"><span class="text-muted">الرجاء الإنتظار <i class="fa fa-spinner fa-spin"></i></span></div></p>
            <p><span style="color: #1e88e5; font-weight: bold; text-decoration: underline;">صور الدرس:</span><br><div class="row" id="limgs"><span class="text-muted">الرجاء الإنتظار <i class="fa fa-spinner fa-spin"></i></span></div></p>
            </div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">خروج</button>		
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

function edit(id, trim, name, year, div){

$('#addlesson').modal('show');
$('#id').val(id);
$('#trim').val(trim);
$('#name').val(name);

$.ajax({
url: "viewlesson.php",
type: "POST",
data: {
id: id
},
cache: false,	
success: function(dataResult){
var dataResult = JSON.parse(dataResult);
tinymce.activeEditor.setContent(dataResult.des);
$('#preview2').html(dataResult.file);
$('#preview').html(dataResult.imgs);
}
});

$('#year').val(year);
$('#div').val(div);

}

$(document).ready(function(){
    $('#images').on('change', function() {
    document.getElementById('progress').style.display = "";
    document.getElementById('progressbar').setAttribute('style', 'width: '+Math.random() * 35+'%;');
    var file_data = $(this).prop('files')[0];   
    var form_data = new FormData();
    var ext = $(this).val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['png','jpg','jpeg']) == -1)   {
        alertify.error("يسمح فقط بصور JPG ،PNG وJPEG");
        return;
    }  
    var picsize = (file_data.size);
    if(picsize > 10000000) /*10MB*/
        {
            alertify.error("يسمح للصورة أقل من 10 ميغا بايت");
            return;
        }
    form_data.append('file', file_data);   
    $.ajax({
        url: 'upload.php',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        beforeSend: function() {
            document.getElementById('progressbar').setAttribute('style', 'width: '+Math.floor((Math.random() * 50) + 25)+'%;');
        },
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            if(dataResult.statusCode==200){
            document.getElementById('progressbar').setAttribute('style', 'width: 100%;');
            $('#preview').append('<div class="col-sm-6"><div class="card" style="width: 10rem;"><img style="-webkit-user-drag: none;" src="uploads/'+dataResult.code+'.'+dataResult.ext+'" class="card-img-top"><div class="card-body"><a download href="uploads/'+dataResult.code+'.'+dataResult.ext+'" class="btn btn-primary">تحميل</a></div></div></div>');
            document.getElementById('progress').style.display = "none";
            }else{
            document.getElementById('progressbar').setAttribute('style', 'width: 100%;');
            alertify.error(dataResult.msg);
            document.getElementById('progress').style.display = "none";
            }
        }
     });
});
})

$(document).ready(function(){
    $('#file').on('change', function() {
    document.getElementById('progress2').style.display = "";
    document.getElementById('progressbar2').setAttribute('style', 'width: '+Math.random() * 35+'%;');
    var file_data = $(this).prop('files')[0];   
    var form_data = new FormData();
    var ext = $(this).val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['docx','doc','xlsx','xls','pdf','pptx','ppt']) == -1)   {
        alertify.error("يسمح فقط بملفات PDF ،Word ،PowerPoint وExcel");
        return;
    }  
    var picsize = (file_data.size);
    if(picsize > 10000000) /*10MB*/
        {
            alertify.error("يسمح للملفات أقل من 10 ميغا بايت");
            return;
        }
    form_data.append('file', file_data);   
    $.ajax({
        url: 'upload.php',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        beforeSend: function() {
            document.getElementById('progressbar2').setAttribute('style', 'width: '+Math.floor((Math.random() * 50) + 25)+'%;');
        },
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            if(dataResult.statusCode==200){
            document.getElementById('progressbar').setAttribute('style', 'width: 100%;');
            $('#preview2').append('<a download href="uploads/'+dataResult.code+'.'+dataResult.ext+'" class="btn btn-primary">تحميل</a>');
            document.getElementById('file').style.display = "none";
            document.getElementById('progress2').style.display = "none";
            }else{
            document.getElementById('progressbar2').setAttribute('style', 'width: 100%;');
            alertify.error(dataResult.msg);
            document.getElementById('progress2').style.display = "none";
            }
        }
     });
});
})

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

function del(id, name){
alertify.confirm("هل تريد حذف "+name+" حقا؟",
  function(){
$.ajax({
		url: "dellesson.php",
		type: "POST",
        data: {
            id: id
        },
		cache: false,	
		success: function(dataResult){
		var dataResult = JSON.parse(dataResult);
		if(dataResult.statusCode==200){
            alertify.success('تم حذف الدرس بنجاح');
            location.reload();
        }else if(dataResult.statusCode==201){
            alertify.error('تعذّر حذف الدرس');
        }
        }
    });
  },
  function(){
    alertify.error('إلغاء');
  });

}

function view(id){

$('#viewlesson').modal('show');

$.ajax({
		url: "viewlesson.php",
		type: "POST",
        data: {
            id: id
        },
		cache: false,	
		success: function(dataResult){
        var dataResult = JSON.parse(dataResult);
            $("#lname").html(dataResult.name);
            if(dataResult.des != ""){
            $("#ldes").html(dataResult.des);
            }else{
            $("#ldes").html('لم يتم إضافة وصف الدرس..');
            }
            if(dataResult.file != ""){
            $("#lfile").html(dataResult.file);
            }else{
            $("#lfile").html('لم يتم إضافة ملف الدرس..');
            }
            if(dataResult.imgs != ""){
            $("#limgs").html(dataResult.imgs);
            }else{
            $("#limgs").html('لم يتم إضافة صور الدرس..');
            }
        }
    });

}

function savedata(){

var id = document.getElementById('id').value;
var uname = "<?php echo $_COOKIE['name']; ?>";
var name = document.getElementById('name').value;
var des = /*document.getElementById('description').value*/tinymce.activeEditor.getContent('#description');;
var file = document.getElementById('preview2').innerHTML;
var imgs = document.getElementById('preview').innerHTML;
var subject = "<?php echo $_GET['id']; ?>";
var year = document.getElementById('year').value;
var div = document.getElementById('div').value;
var trim = document.getElementById('trim').value;

if(name != ""){
    if(des != "" || file !="" || imgs != ""){
        if(year != ""){
            if(div != ""){
                if(trim != ""){
    $.ajax({
		url: "savelesson.php",
		type: "POST",
        data: {
            id: id,
            user: uname,
            name: name,
            des: des,
            file: file,
            imgs: imgs,
            subject: subject,
            year: year,
            div: div,
            trim: trim
        },
		cache: false,
        beforeSend: function() {
			$('#savedatebtn').html('<i class="fa fa-spinner fa-spin"></i>');
		},	
		success: function(dataResult){
		var dataResult = JSON.parse(dataResult);
		if(dataResult.statusCode==200){
            $('#savedatebtn').html('حفظ');
            alertify.success('تم حفظ الدرس بنجاح');
			$('#addlesson').modal('hide');
			location.reload();	
        }else if(dataResult.statusCode==201){
            $('#savedatebtn').html('حفظ');
            alertify.error('تعذّر حفظ الدرس');
        }
        }
    });
                }else{
                    alertify.error('الرجاء إختيار الفصل');
                }
                }else{
                    alertify.error('الرجاء إختيار الجذع/ الشعبة');
                }
                }else{
                    alertify.error('الرجاء إختيار المستوى التعليمي');
                }
    }else{
        alertify.error('الرجاء إدخال وصف الدرس أو قم برفع ملف أو صور الدرس');
    }
}else{
    alertify.error('الرجاء إدخال إسم الدرس');
}
}

function lessons(){
    $.ajax({
		url: "getlessons.php",
		type: "POST",
        data: {
            id: '<?php echo $_GET['id'] ?>',
        },
		cache: false,
		success: function(data){
		$('#content').html(data); 
        table.call();
		}
	});
}

function table(){
$('#lessons').DataTable({
    ordering: true,
    searching: true,
    paging: true,
    processing: true,
    destroy: true,
    <?php if($_COOKIE['type'] == "admin"){ ?>
    lengthChange: true,
    <?php }else{ ?>
    lengthChange: false,
    <?php } ?>
    responsive: true,
    language: {
		search: "",
		searchPlaceholder: "البحث...",
		lengthMenu: "إظهار _MENU_ ",
		info: "",
		infoEmpty: "",
		infoFiltered: "",
		infoPostFix: "",
		loadingRecords: '<span class="text-muted">الرجاء الإنتظار <i class="fa fa-spinner fa-spin"></i></span>',
		sProcessing: '<span class="text-muted">الرجاء الإنتظار <i class="fa fa-spinner fa-spin"></i></span>',				
		zeroRecords: '<span class="text-muted">لا يوجد دروس..</span>',
		emptyTable: '<span class="text-muted">لا يوجد دروس..</span>',
		paginate: {
		  first: "الأول",
		  previous: "السابق",
		  next: "التالي",
		  last: "الأخير"
		},
		aria: {
		  sortAscending: ": الترتيب التصاعدي",
		  sortDescending: ": الترتيب التنازلي"
		},
	},
	dom: "<'row'<'col-sm-10'f><'col-sm-2'B>>" +
	"<'row'<'col-sm-12'tr>>" +
	"<'row'<'col-sm-6'i><'col-sm-6'p>>",
        <?php if($_COOKIE['type'] == "admin"){ ?>
        buttons: [{
			  extend: 'excel',			  
              text: '<i class="fa fa-file-excel"></i> تحميل',
              className: 'btn-outline-info btn-sm',
 			  title: 'دروس <?php echo $_GET['id']; ?>',
			   exportOptions: {
					columns: [':not(:last-child)']
				}
            },
            {
			  extend: 'print',			  
              text: '<i class="fa fa-print"></i> طباعة',
              className: 'btn-outline-info btn-sm',
 			  title: 'دروس <?php echo $_GET['id']; ?>',
			   exportOptions: {
					columns: [':visible :not(:last-child)']
				},
               customize: function ( win ) {
					$(win.document.body).css('direction', 'rtl');			
                },
            }
		]
        <?php }else{
        ?>
        
        "dom": 'T<"clear">lfrtip',
        "tableTools": {
        "aButtons": [
            "copy",
            "save"
          ]
        }

        <?php
        } ?>
        });
}
</script>
<!-- start webpushr code --> <script>(function(w,d, s, id) {if(typeof(w.webpushr)!=='undefined') return;w.webpushr=w.webpushr||function(){(w.webpushr.q=w.webpushr.q||[]).push(arguments)};var js, fjs = d.getElementsByTagName(s)[0];js = d.createElement(s); js.id = id;js.async=1;js.src = "https://cdn.webpushr.com/app.min.js";fjs.parentNode.appendChild(js);}(window,document, 'script', 'webpushr-jssdk'));webpushr('setup',{'key':'BOaeNul9pt9rWtixsGEKsdZ8XzHFYRg6pug3Rd6aKNNePh3JG8ArFCDBxrXf6MyFQiVGRlE3lNJjjtOWCxfWrBU' });</script><!-- end webpushr code -->
                                </body>

                                </html>