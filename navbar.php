<!-- change password modal -->
<div class="modal fade show" id="change_password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h6 class="m-b-0 text-white text-center">تغيير كلمة المرور</h6>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="currentPass">كلمة المرور الحالية:</label>
                        <input class="form-control" type="password" id="currentPass" minlength="4" maxlength="10" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="newPass">كلمة المرور الجديدة:</label>
                        <input class="form-control" type="password" id="newPass" minlength="4" maxlength="10" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="confirmPass">تأكيد كلمة المرور الجديدة:</label>
                        <input class="form-control" type="password" id="confirmPass" minlength="4" maxlength="10" equalTo="#newPass" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-outline-success btn-rounded" onclick="savepass()" id="changepassbtn">تأكيد التعديلات</button>
                    <button type="button" class="btn btn-outline-danger btn-rounded" data-dismiss="modal">إلغاء</button>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- auth modal -->
<div class="modal fade show" id="auth" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="card card-outline-info">

                <div class="card-header">
                    <h6 class="m-b-0 text-white text-center">المصادقة الثنائية</h6>
                </div>

                <div class="modal-body">
                <center>

<?php
include('db.php');
$sql = "SELECT * FROM students WHERE ID='$_COOKIE[id]' AND status='yes'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
if("$row[auth]" == "yes"){
?>
<button id="authbtn" class="btn btn-danger" onclick="unverify()">إلغاء التفعيل</button>
<?php
}else{
?>
<div class="alert alert-warning"><b>هام جدا: </b>
لحماية حسابك، يمكنك تفعيل خدمة المصادقة الثنائية.<br>
يرجى تحميل أي تطبيق للمصادقة الثنائية كتطبيق Google Authenticator أو authy أو freeotp.<br>
بعد تفعيل الخدمة يجب فحص QR Code من خلال تطبيق  المصادقة الثنائية.<br>
بعد تفعيل المصادقة الثنائية لا يمكنكم تسجيل الدخول إلا بعد إدخال الرمز الظاهر في التطبيق.
</div>
<div class="alert alert-danger"><b>ملاحظة: </b>بعد إلغاء تفعيل ثم تفعيل الخدمة سيتم إنشاء رمز جديد.</div>
<br>
<input type="hidden" id="authsecret">
<img id="authimg">
<br><br>
<div class="input-group mb-3">
<input id="authotp" type="number" class="form-control" placeholder="رمز التحقق">
<div class="input-group-append">
<button id="authbtn" class="btn btn-success" onclick="verify()">تفعيل</button>
</div>
</div>
<?php
}
}} else {
  header('Location: logout');
}
$conn->close();
?>

                </center>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success btn-rounded" data-dismiss="modal">خروج</button>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
$.ajax({
url: "auth/example.php",
type: "GET",
cache: false,
data:{
    type: "set"
},
success: function(dataResult){
var dataResult = JSON.parse(dataResult);
document.getElementById('authimg').setAttribute('src', dataResult.url);
document.getElementById('authsecret').value = dataResult.secret;
}
});

function verify(){
var secret = document.getElementById('authsecret').value;
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
	$('#authbtn').html('<i class="fa fa-spinner fa-spin"></i>');
},
success: function(dataResult){
var dataResult = JSON.parse(dataResult);
if(dataResult.status == 200){

$.ajax({
url: "auth/update.php",
type: "POST",
cache: false,
data:{
    type: "activate",
    secret: secret
},
success: function(dataResult){
var dataResult = JSON.parse(dataResult);
if(dataResult.status == 200){
$('#authbtn').html('تفعيل');
alertify.success('تم تفعيل المصادقة الثنائية بنجاح');
location.reload();
}else{
$('#authbtn').html('تفعيل');
alertify.error('تعذر تفعيل المصادقة الثنائية');
}
}
});

}else{
document.getElementById('authotp').disabled = false;
$('#authbtn').html('تفعيل');
alertify.error('رمز التحقق خاطئ، الرجاء إدخال الرمز الصحيح');
}
}
});
}else{
    alertify.error('الرجاء إدخال رمز التحقق الصحيح');
}
}

function unverify(){
$.ajax({
url: "auth/update.php",
type: "GET",
cache: false,
data:{
    type: "desactivate"
},
beforeSend: function() {
	$('#authbtn').html('<i class="fa fa-spinner fa-spin"></i>');
},
success: function(dataResult){
var dataResult = JSON.parse(dataResult);
if(dataResult.status == 200){
$('#authbtn').html('إلغاء التفعيل');
alertify.success('تم إلفاء تفعيل المصادقة الثنائية بنجاح');
location.reload();
}else{
$('#authbtn').html('إلغاء التفعيل');
alertify.error('تعذر إلغاء تفعيل المصادقة الثنائية');
location.reload();
}
}
});
}
</script>

<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                </b>
                <span>
                    <img style="height: 60px !important;" src="souledjno.png" class="light-logo" alt="ثانوية صولاج السعيد"></span> </a>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0 text-center">
            </ul>
			            <ul class="navbar-nav my-lg-0">
                <!-- ============================================================== -->
                <!-- Profile -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="pupil.png" style="width: 80px; height: 50px;" alt="حسابي" class="profile-pic" /> مرحبا، <?php echo $_COOKIE['name']; ?></a>
                    <div class="dropdown-menu dropdown-menu-right scale-up">
                        <ul class="dropdown-user">
                            <li><a data-toggle="modal" data-target="#auth"><i class="fas fa-lock"></i> المصادقة الثنائية</a></li>
                            <li><a data-toggle="modal" data-target="#change_password"><i class="fas fa-user-cog"></i> تغيير كلمة المرور</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="logout"><i class="fas fa-power-off"></i> تسجيل الخروج</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

    </nav>
</header>