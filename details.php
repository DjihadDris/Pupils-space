<?php
if(!isset($_COOKIE['id'])){
    header('Location: login?from=details');
}else{
include('db.php');
$sql = "SELECT * FROM students WHERE ID='$_COOKIE[id]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

setcookie("name", "", time() - (86400 * 30), "/");
setcookie("year", "", time() - (86400 * 30), "/");
setcookie("div", "", time() - (86400 * 30), "/");
setcookie("type", "", time() - (86400 * 30), "/");
setcookie("name", "$row[name]", time() + (86400 * 30), "/");
setcookie("year", "$row[year]", time() + (86400 * 30), "/");
setcookie("div", "$row[div]", time() + (86400 * 30), "/");
setcookie("type", "$row[type]", time() + (86400 * 30), "/");
  }}else{
      header('Location: logout');
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
        <title>فضاء التلاميذ: بياناتي</title>
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
            <div>بياناتي</div>
        </a>
    </div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="card">

			<div class="card-header bg-info">
				<h4 class="mb-0 text-white">بياناتي</h4>
			</div>

            <div class="ribbon-wrapper card" style="cursor: pointer;">

<?php
include('db.php');
$i = 1;
$sql = "SELECT * FROM students WHERE ID='$_COOKIE[id]' AND name='$_COOKIE[name]' AND year='$_COOKIE[year]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>

				<div class="ribbon ribbon-bookmark ribbon-right ribbon-danger">بيانات الحساب</div>
					<div class="form-group row text-left">
						<div class="col-sm-4">
							<label class="control-label">إسم المستخدم:</label>
						</div>
						<div class="col-sm-4">
							<label class="text-danger"><?php echo "$row[user]"; ?></label>
						</div>
						<div class="col-sm-2">
							<label class="control-label">البريد الإلكتروني:</label>
						</div>
						<div class="col-sm-2">
							<label class="text-danger" id="emailver"><?php echo "$row[email]"; ?></label>
						</div>
					</div>

					<div class="form-group row text-left">
						<div class="col-sm-4">
							<label class="control-label">حالة الحساب:</label>
						</div>
						<div class="col-sm-4">
							<label class="text-danger"><?php if("$row[ver]" == "yes"){ echo "موثّق <img src='sbadgeb.png' width='17.5' height='17.5'>"; }else if("$row[ver]" == "wait"){ echo "في إنتظار التوثيق"; }else{ echo "غير موثّق <i class='fas fa-badge'></i>"; } ?></label>
						</div>
                        <div class="col-sm-2">
							<label class="control-label">آخر تسجيل دخول:</label>
						</div>
						<div class="col-sm-2">
							<label class="text-danger" id="emailver"><?php echo "$row[time] في $row[date]"; ?></label>
						</div>
					</div>
				</div>

<?php if("$row[ver]" <> "yes" && "$row[ver]" <> "wait"){ ?>
                    <div class="form-actions">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12 float-left">
											<button type="button" class="float-left btn btn-success" onclick="ver()" id="orderverbtn"> <i class="fas fa-paper-plane"></i> طلب توثيق الحساب</button>
								</div>
							</div>
						</div>
					</div>
<?php } ?>


			<div class="ribbon-wrapper card" style="cursor: pointer;">
				<div class="ribbon ribbon-bookmark ribbon-right ribbon-primary">بيانات التلميذ</div>
					<div class="form-group row text-left">
						<div class="col-sm-4">
							<label class="control-label">اللقب:</label>
						</div>
						<div class="col-sm-4">
							<label class="text-danger"><?php echo "$row[fn]"; ?></label>
						</div>
						<div class="col-sm-2">
							<label class="control-label">الإسم:</label>
						</div>
						<div class="col-sm-2">
							<label class="text-danger"><?php echo "$row[name]"; ?></label>
						</div>
					</div>
					
                    <div class="form-group row text-left">
						<div class="col-sm-4">
							<label class="control-label">الجنس:</label>
						</div>
						<div class="col-sm-4">
							<label class="text-danger" id="genderver"><?php echo "$row[gender]"; ?></label>
						</div>
						<div class="col-sm-2">
							<label class=" control-label">تاريخ الميلاد:</label>
						</div>
						<div class="col-sm-2">
							<label class="text-danger" id="dobver"><?php echo "$row[dob]"; ?></label>
						</div>
					</div>

					<div class="form-group row text-left">
						<div class="col-sm-4">
							<label class="control-label">المستوى التعليمي:</label>
						</div>
						<div class="col-sm-4">
							<label class="text-danger"><?php echo "$row[year]"; ?></label>
						</div>
						<div class="col-sm-2">
							<label class=" control-label">الجذع/ الشعبة:</label>
						</div>
						<div class="col-sm-2">
							<label class="text-danger"><?php echo "$row[div]"; ?></label>
						</div>
					</div>

					
<?php
  }}else{
      echo "الرجاء تسجيل الخروج وإعادة تسجيل الدخول.";
  }
  mysqli_close($conn);
?>
				</div>

<div class="form-actions">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12 float-left">
											<button type="button" class="float-left btn btn-warning" data-toggle="modal" data-target="#editModal"> <i class="fas fa-edit"></i> طلب تصحيح البيانات</button>
								</div>
							</div>
						</div>
					</div>


            <div class="ribbon-wrapper card" style="cursor: pointer;">

				<div class="ribbon ribbon-bookmark ribbon-right ribbon-info">طلبات التصحيح</div>

<div class="table-responsive">
				<table data-toggle="table" data-mobile-responsive="true" class="table table-default table-striped table-bordered" width="100%">
					<thead>
						<tr class="bg-success" style="color: white !important;">
                            <th scope="col">#</th>
							<th scope="col">الطلب</th>
                            <th scope="col">التصحيح</th>
							<th scope="col">حالة الطلب</th>
                            <th scope="col">التاريخ</th>
						</tr>
					</thead>
					<tbody>
<?php
include('db.php');
$i = 1;
$sql = "SELECT * FROM cororders WHERE userid='$_COOKIE[id]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
						<tr>
                            <th scope="row"><?php echo $i;$i++; ?></th>
							<td>تصحيح <?php echo "$row[order]"; ?></td>
                            <td><?php echo "$row[cor]"; ?></td>
							<td><?php echo "$row[status]"; ?></td>
                            <td><?php echo "$row[date]"; ?></td>
						</tr>
<?php
  }}else{
      echo "<tr><td colspan='5'>لا توجد طلبات..</td></tr>";
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

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title">طلب تصحيح البيانات</h5>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class='col-md-12'>
<div class='console-container alert alert-danger text-center'><span id='text'>
الرجاء التأكد من إدخال معلومات صحيحة وفي الحقل الصحيح.
<br>
يتم حظر حسابك إذا قمت بتقديم أكثر من طلب واحد لنفس الحقل.
</span></div>
					<div class='form-group row'>
						<select class="form-control" id="requestEdit" required onchange="selecteddata()">
                                <option value="">--إختر الحقل المراد تعديله--</option>
							<optgroup label="بيانات الحساب">
								<option value="user" id="user">إسم المستخدم</option>
								<option value="email" id="email">البريد الإلكتروني</option>
							</optgroup>
                            <optgroup label="بيانات التلميذ">
								<option value="fn" id="fn">اللقب</option>
								<option value="name" id="name">الإسم</option>
								<option value="dob" id="dob">تاريخ الميلاد</option>
								<option value="gender" id="gender">الجنس</option>
								<option value="year" id="year">المستوى التعليمي</option>
								<option value="div" id="div">الجذع/ الشعبة</option>
							</optgroup>
						</select>
					</div>
				</div>
			</div>
			<div id="selectedFields"></div>
			</div>
			<div class="modal-footer">
				<button type="submit" onclick="savedata()" id="requestEditBtn" class="btn btn-primary">إرسال الطلب</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">إلغاء العملية</button>				
			</div>

		</div>
	</div>
</div>    </div>
</div>
                                <!-- Custom JavaScript -->
                                <script src="changepass.js"></script>
                                <script>
                                function selecteddata(){
                                    var select = document.getElementById('requestEdit');
                                    var selectedFields = document.getElementById('selectedFields');
                                    if(select.value != ""){
                                        if(selectedFields.textContent.includes($('#'+select.value).html())){
                                            $("#"+select.value+'div').remove();
                                            select.value = "";
                                        }else{
                                        $('#selectedFields').append('<div id="'+select.value+'div"><br><div class="row"><div class="col-md-12"><div class="form-group row"><div class="col-md-3"><label class="control-label text-right col-md-3">' + $('#'+select.value).html() + '</label> </div><div class="col-md-9"><input class="form-control" id="'+select.value+'input" type="text" required></div></div></div></div></div>');
                                        select.value = "";
                                        }
                                    }
                                }

                                function ver(){
                                    var emailver = document.getElementById('emailver').innerHTML;
                                    var genderver = document.getElementById('genderver').innerHTML;
                                    var dobver = document.getElementById('dobver').innerHTML;
                                    if(emailver != "" && genderver != "" && dobver != ""){
        $.ajax({
			url: "orderver.php",
			type: "POST",
			cache: false,
            beforeSend: function() {
				$('#orderverbtn').html('<i class="fa fa-spinner fa-spin"></i>');
                document.getElementById('orderverbtn').disabled = true;
			},
			success: function(dataResult){
				var dataResult = JSON.parse(dataResult);
				if(dataResult.statusCode==200){
					/*$('#orderverbtn').html('<i class="fas fa-paper-plane"></i> طلب توثيق الحساب');*/
					location.reload();		
				}else if(dataResult.statusCode==201){
                    $('#orderverbtn').html('<i class="fas fa-paper-plane"></i> طلب توثيق الحساب');
                    document.getElementById('orderverbtn').disabled = false;
                    alertify.error('تعذّر إرسال الطلب، الرجاء التواصل مع الإدارة');	
                }
			}
		});
                                    }else{
                                        alertify.alert('الرجاء التأكد من وجود البريد الإلكتروني، الجنس وكذا تاريخ الميلاد حتى تتمكن من إرسال طلب التوثيق.');
                                    }
                                }
                                
                                function savedata(){
                                    var select = document.getElementById('requestEdit').value;
                                    var inputs = document.getElementById('selectedFields').innerHTML;
                                    if(inputs != ""){
                                        if(selectedFields.textContent.includes("إسم المستخدم")){
                                            var user = document.getElementById("userinput").value;
                                        }else{
                                            var user = "";
                                        }
                                        if(selectedFields.textContent.includes("البريد الإلكتروني")){
                                            var email = document.getElementById("emailinput").value;
                                        }else{
                                            var email = "";
                                        }
                                        if(selectedFields.textContent.includes("اللقب")){
                                            var fn = document.getElementById("fninput").value;
                                        }else{
                                            var fn = "";
                                        }
                                        if(selectedFields.textContent.includes("الإسم")){
                                            var name = document.getElementById("nameinput").value;
                                        }else{
                                            var name = "";
                                        }
                                        if(selectedFields.textContent.includes("تاريخ الميلاد")){
                                            var dob = document.getElementById("dobinput").value;
                                        }else{
                                            var dob = "";
                                        }
                                        if(selectedFields.textContent.includes("الجنس")){
                                            var gender = document.getElementById("genderinput").value;
                                        }else{
                                            var gender = "";
                                        }
                                        if(selectedFields.textContent.includes("المستوى التعليمي")){
                                            var year = document.getElementById("yearinput").value;
                                        }else{
                                            var year = "";
                                        }
                                        if(selectedFields.textContent.includes("الجذع/ الشعبة")){
                                            var div = document.getElementById("divinput").value;
                                        }else{
                                            var div = "";
                                        }
        $.ajax({
			url: "ordercor.php",
			type: "POST",
			cache: false,
			data:{
                user: user,
				email: email,
                fn: fn,
                name: name,
                dob: dob,
                gender: gender,
                year: year,
                div: div
			},
            beforeSend: function() {
				$('#requestEditBtn').html('<i class="fa fa-spinner fa-spin"></i>');
                document.getElementById('requestEditBtn').disabled = true;
			},		
			success: function(dataResult){
				var dataResult = JSON.parse(dataResult);
				if(dataResult.statusCode==200){
					location.reload();			
				}else if(dataResult.statusCode==201){
                    $('#requestEditBtn').html('تقديم الطلب');
                    alertify.error('تعذّر إرسال الطلب، الرجاء التواصل مع الإدارة');
                    document.getElementById('requestEditBtn').disabled = false;
                }else if(dataResult.statusCode==202){
                    $('#requestEditBtn').html('تقديم الطلب');
                    alertify.error('الرجاء إدخال التصحيح في الحقل المراد تعديله');
                    document.getElementById('requestEditBtn').disabled = false;
                }else{
                    location.reload();
                }
			}
		});
                                    }else{
                                        alertify.error('الرجاء إختيار الحقل المراد تعديله');
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