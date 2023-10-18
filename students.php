<?php
if(!isset($_COOKIE['id'])){
    header('Location: login?from=students');
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
        <title>فضاء التلاميذ: التلاميذ</title>
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

<body onload="students('load')" class="fix-header card-no-border">

<div id="main-wrapper">
<?php include('navbar.php'); ?>
<div class="container-fluid">
<div class="card">
    <div id="bc1" class="btn-group btn-breadcrumb">
        <a href="/" class="btn btn-default text-success"><i class="fa fa-home"></i></a>
        <a href="#" class="btn btn-default text-danger">
            <div>التلاميذ</div>
        </a>
    </div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header bg-info">
				<h4 class="mb-0 text-white">التلاميذ</h4>
			</div>
<div class="card-body">
<div class="card card-body">
                            <div class="table-responsive">
                                <table id="eleves" data-toggle="table" data-mobile-responsive="true" class="table table-default table-striped table-bordered display" width="100%">
                                    <thead>
                                        <tr class="bg-success" style="color: white !important;">
                                            <th scope="col">#</th>
                                            <th scope="col">إسم المستخدم</th>
                                            <th scope="col">اللقب</th>
                                            <th scope="col">الإسم</th>
                                            <th scope="col">الجنس</th>
                                            <th scope="col">تاريخ الميلاد</th>
                                            <?php if($_COOKIE['type'] == "admin"){ ?>
                                            <th scope="col">المستوى التعليمي</th>
                                            <th scope="col"><?php if($_COOKIE['type'] == "admin"){echo "الجذع/ الشعبة";}/*else{if($_COOKIE['year'] == "السنة أولى ثانوي"){echo "الجذع";}else{echo "الشعبة";}}*/ ?></th>
                                            <?php } ?>
                                            <?php if($_COOKIE['type'] == "admin"){ ?>
                                            <th scope="col">البريد الإلكتروني</th>
                                            <th scope="col">كلمة المرور</th>
                                            <th scope="col">وضعية الحساب</th>
                                            <?php } ?>
                                            <!--<th scope="col">حالة الحساب</th>-->
                                            <?php if($_COOKIE['type'] == "admin"){ ?>
                                            <th scope="col">نوع الحساب</th>
                                            <th scope="col">آخر تسجيل دخول</th>
                                            <th scope="col">آخر دخول</th>
                                            <th scope="col">IP</th>
                                            <th scope="col"></th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody id="students">
                                        <tr>
                                            <td colspan="17"><span class="text-muted">الرجاء الإنتظار <i class="fa fa-spinner fa-spin"></i></span></td>
                                        </tr>
                                    </tbody>
                                </table>	
                            </div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title">تعديل البيانات</h5>
		</div>
		    <div class="modal-body">
            <input type="hidden" id="idedit">

<div class="row"><div class="col-md-12"><div class="form-group row"><div class="col-md-3"><label class="control-label text-right col-md-3">إسم المستخدم <span style="color: red;">*</span></label> </div><div class="col-md-9"><input class="form-control" id="useredit" type="text" required=""></div></div></div></div>
<br>
<div class="row"><div class="col-md-12"><div class="form-group row"><div class="col-md-3"><label class="control-label text-right col-md-3">اللقب <span style="color: red;">*</span></label> </div><div class="col-md-9"><input class="form-control" id="fnedit" type="text" required=""></div></div></div></div>
<br>
<div class="row"><div class="col-md-12"><div class="form-group row"><div class="col-md-3"><label class="control-label text-right col-md-3">الإسم <span style="color: red;">*</span></label> </div><div class="col-md-9"><input class="form-control" id="nameedit" type="text" required=""></div></div></div></div>
<br>
<div class="row"><div class="col-md-12"><div class="form-group row"><div class="col-md-3"><label class="control-label text-right col-md-3">الجنس <span style="color: red;">*</span></label> </div><div class="col-md-9"><select required id="genderedit" class="form-control">
                                                <option value="">--إختر الجنس--</option>
                                                <option value="ذكر">ذكر</option>
                                                <option value="أنثى">أنثى</option>
                                                </select></div></div></div></div>
<br>
<div class="row"><div class="col-md-12"><div class="form-group row"><div class="col-md-3"><label class="control-label text-right col-md-3">تاريخ الميلاد <span style="color: red;">*</span></label> </div><div class="col-md-9"><input class="form-control" id="dobedit" type="text" required=""></div></div></div></div>
<br>
<div class="row"><div class="col-md-12"><div class="form-group row"><div class="col-md-3"><label class="control-label text-right col-md-3">المستوى التعليمي <span style="color: red;">*</span></label> </div><div class="col-md-9"><select onchange="play()" required id="yearedit" class="form-control">
                                                <option value="">--إختر المستوى التعليمي--</option>
                                                <option value="السنة أولى ثانوي">السنة أولى ثانوي</option>
                                                <option value="السنة ثانية ثانوي">السنة ثانية ثانوي</option>
                                                <option value="السنة ثالثة ثانوي">السنة ثالثة ثانوي</option>
                                                </select></div></div></div></div>
<br>
<div class="row"><div class="col-md-12"><div class="form-group row"><div class="col-md-3"><label class="control-label text-right col-md-3">الجذع/ الشعبة <span style="color: red;">*</span></label> </div><div class="col-md-9"><select required id="divedit" class="form-control">
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
<div class="row"><div class="col-md-12"><div class="form-group row"><div class="col-md-3"><label class="control-label text-right col-md-3">البريد الإلكتروني <span style="color: red;">*</span></label> </div><div class="col-md-9"><input class="form-control" id="emailedit" type="text" required=""></div></div></div></div>

            </div>
			<div class="modal-footer">
				<button type="submit" onclick="savedata()" id="savedatebtn" class="btn btn-primary">حفظ التعديلات</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">إلغاء العملية</button>		
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
</div>

<!-- Custom JavaScript -->
<script src="changepass.js"></script>

<script>

function savedata(){

var id = document.getElementById('idedit').value;
var user = document.getElementById('useredit').value;
var fn = document.getElementById('fnedit').value;
var name = document.getElementById('nameedit').value;
var gender = document.getElementById('genderedit').value;
var dob = document.getElementById('dobedit').value;
var year = document.getElementById('yearedit').value;
var div = document.getElementById('divedit').value;
var email = document.getElementById('emailedit').value;

    $.ajax({
		url: "saveedits.php",
		type: "POST",
        data: {
            id: id,
            user: user,
            fn: fn,
            name: name,
            gender: gender,
            dob: dob,
            year: year,
            div: div,
            email: email
        },
		cache: false,
        beforeSend: function() {
			$('#savedatebtn').html('<i class="fa fa-spinner fa-spin"></i>');
            document.getElementById('savedatebtn').disabled = true;
		},	
		success: function(dataResult){
		var dataResult = JSON.parse(dataResult);
		if(dataResult.statusCode==200){
            $('#editModal').modal('hide');
            alertify.success('تم حفظ التعديلات بنجاح');
			/*location.reload();*/
            students('');
            document.getElementById('savedatebtn').disabled = false;
            $('#savedatebtn').html('حفظ التعديلات');
        }else if(dataResult.statusCode==201){
            $('#savedatebtn').html('حفظ التعديلات');
            alertify.error('تعذّر حفظ التعديلات');
            document.getElementById('savedatebtn').disabled = false;
        }
        }
    });
}

function copyurl(user){
    navigator.clipboard.writeText(user);
    alertify.success('تم نسخ إسم المستخدم بنجاح');
}

function showpass(id, password){
    if(document.getElementById(id).innerHTML == "****"){
    document.getElementById(id).innerHTML = password;
    }else{
    document.getElementById(id).innerHTML = "****";
    }
}

function students(load){
    $.ajax({
		url: "getstudents.php",
		type: "POST",
		cache: false,
		success: function(data){
		$('#students').html(data);
        if(load == "load"){
        table.call();
        }
		}
	});
}

function edit(id){

var user = document.getElementById('useredit');
var fn = document.getElementById('fnedit');
var name = document.getElementById('nameedit');
var gender = document.getElementById('genderedit');
var dob = document.getElementById('dobedit');
var year = document.getElementById('yearedit');
var div = document.getElementById('divedit');
var email = document.getElementById('emailedit');

$.ajax({
		url: "getstudent.php",
		type: "POST",
        data: {
            id: id
        },
		cache: false,
		success: function(dataResult){
		var dataResult = JSON.parse(dataResult);
		if(dataResult.statusCode==200){
            $('#editModal').modal('show');
            document.getElementById('idedit').value = id;
            user.value = dataResult.user;
            fn.value = dataResult.fn;
            name.value = dataResult.name;
            dob.value = dataResult.dob;
            gender.value = dataResult.gender;
            year.value = dataResult.year;
            play.call();
            setTimeout(function(){div.value = dataResult.div;}, 500);
            email.value = dataResult.email;
        }else if(dataResult.statusCode==201){
            alertify.error('تعذّر جلب البيانات');
        }
        }
    });
}

function del(id, fn, name){
    alertify.confirm("هل تريد حذف حساب "+fn+" "+name+" حقا؟",
  function(){
    $.ajax({
		url: "actions.php",
		type: "POST",
        data: {
            type: 'delete',
            id: id
        },
		cache: false,
		success: function(dataResult){
		var dataResult = JSON.parse(dataResult);
		if(dataResult.statusCode==200){
            alertify.success('تمت العملية بنجاح');
            /*location.reload();*/
            students('');
        }else if(dataResult.statusCode==201){
            alertify.error('تعذّر إتمام العملية');
        }
        }
    });
  },
  function(){
    alertify.error('إلغاء');
  });
}

function grade(grade, id){
    if(grade == "up"){
        var send = "admin";
    }else{
        var send = "student";
    }
    $.ajax({
		url: "actions.php",
		type: "POST",
        data: {
            type: 'grade',
            id: id,
            grade: send
        },
		cache: false,
		success: function(dataResult){
		var dataResult = JSON.parse(dataResult);
		if(dataResult.statusCode==200){
            alertify.success('تمت العملية بنجاح');
            /*location.reload();*/
            students('');
        }else if(dataResult.statusCode==201){
            alertify.error('تعذّر إتمام العملية');
        }
        }
    });
}

function status(status, id){
    if(status == "ac"){
        var send = "yes";
    }else{
        var send = "no";
    }
    $.ajax({
		url: "actions.php",
		type: "POST",
        data: {
            type: 'status',
            id: id,
            status: send
        },
		cache: false,
		success: function(dataResult){
		var dataResult = JSON.parse(dataResult);
		if(dataResult.statusCode==200){
            alertify.success('تمت العملية بنجاح');
            /*location.reload();*/
            students('');
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
            /*location.reload();*/
            students('');
        }else if(dataResult.statusCode==201){
            alertify.error('تعذّر إتمام العملية');
        }
        }
    });
}

function play(){
                                    var val = document.getElementById('yearedit').value;
                                    var div = document.getElementById('divedit');
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

function table(){
$('#eleves').DataTable({
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
		zeroRecords: '<span class="text-muted">لا يوجد تلاميذ..</span>',
		emptyTable: '<span class="text-muted">لا يوجد تلاميذ..</span>',
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
 			  title: 'قوائم بيانات التلاميذ',
			   exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12, 13/*, 14*/]
				    /*columns: [':not(:last-child)']*/
				}
            },
            {
			  extend: 'print',			  
              text: '<i class="fa fa-print"></i> طباعة',
              className: 'btn-outline-info btn-sm',
 			  title: 'قوائم بيانات التلاميذ',
			   exportOptions: {
					columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12, 13/*, 14*/]
                    /*columns: [':visible :not(:last-child)']*/
				},
               customize: function ( win ) {
					$(win.document.body).css('direction', 'rtl');			
                },
            }
		]
        <?php } ?>
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