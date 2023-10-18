<?php
if(!isset($_COOKIE['id'])){
    header('Location: login?from='.$_SERVER['REQUEST_URI']);
}
include('db.php');
$sql = "SELECT * FROM time WHERE userid='$_COOKIE[id]'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {}}else{
$sqls = "INSERT INTO `time`(`userid`) VALUES ('$_COOKIE[id]')";
if ($conn->query($sqls) === TRUE) {
  header('Location: time');
} else {
  header('Location: /');
}
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
        <title>فضاء التلاميذ: التوقيت الأسبوعي</title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.js"></script>
    </head>

<body class="fix-header card-no-border">

<div id="main-wrapper">
<?php include('navbar.php'); ?>
<div class="container-fluid">
<div class="card">
    <div id="bc1" class="btn-group btn-breadcrumb">
        <a href="/" class="btn btn-default text-success"><i class="fa fa-home"></i></a>
        <a href="#" class="btn btn-default text-danger">
            <div>التوقيت الأسبوعي</div>
        </a>
        <button class="btn btn-outline-primary" data-toggle="modal" data-backdrop="false" data-target="#addtime"><i class="fas fa-edit"></i> تعديل التوقيت</button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addtime" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">التوقيت الأسبوعي</h5>
      </div>
      <div class="modal-body">
  <div class="form-group">
    <select class="form-control" id="dayName" required onchange="showtimes()">
    <option value="">--إختر اليوم--</option>
    <option value="Sunday">الأحد</option>
    <option value="Monday">الإثنين</option>
    <option value="Tuesday">الثلاثاء</option>
    <option value="Wednesday">الأربعاء</option>
    <option value="Thursday">الخميس</option>
    </select>
  </div>

<div id="showtimesDiv" style="display: none;">

<br>
<center><b><h5 class="text-info">صباحاً</h5></b></center>
<div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="التوقيت" value="الحصة الأولى (08:00 - 09:00)" id="t1" readonly>
    </div>
    <div class="col">
    <select class="form-control" id="m1" required onchange="qrcode('m1', 'm1div', 'm1a')">
    <option value="">--إختر المادة--</option>
    <?php include('materials.php'); ?>
    </select>
    </div>
    <div class="col-1" id="m1div" style="display: none;">
    <a target="_blank" id="m1a"><button class="btn btn-outline-success"><i class="fas fa-qrcode"></i></button></a>
    </div>
</div>

<div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="التوقيت" value="الحصة الثانية (09:00 - 09:55)" id="t2" readonly>
    </div>
    <div class="col">
    <select class="form-control" id="m2" required onchange="qrcode('m2', 'm2div', 'm2a')">
    <option value="">--إختر المادة--</option>
    <?php include('materials.php'); ?>
    </select>
    </div>
    <div class="col-1" id="m2div" style="display: none;">
    <a target="_blank" id="m2a"><button class="btn btn-outline-success"><i class="fas fa-qrcode"></i></button></a>
    </div>
</div>

<div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="التوقيت" value="الحصة الثالثة (10:05 - 11:00)" id="t3" readonly>
    </div>
    <div class="col">
    <select class="form-control" id="m3" required onchange="qrcode('m3', 'm3div', 'm3a')">
    <option value="">--إختر المادة--</option>
    <?php include('materials.php'); ?>
    </select>
    </div>
    <div class="col-1" id="m3div" style="display: none;">
    <a target="_blank" id="m3a"><button class="btn btn-outline-success"><i class="fas fa-qrcode"></i></button></a>
    </div>
</div>

<div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="التوقيت" value="الحصة الرابعة (11:00 - 12:00)" id="t4" readonly>
    </div>
    <div class="col">
    <select class="form-control" id="m4" required onchange="qrcode('m4', 'm4div', 'm4a')">
    <option value="">--إختر المادة--</option>
    <?php include('materials.php'); ?>
    </select>
    </div>
    <div class="col-1" id="m4div" style="display: none;">
    <a target="_blank" id="m4a"><button class="btn btn-outline-success"><i class="fas fa-qrcode"></i></button></a>
    </div>
</div>
<br>
<hr style="background-color: red;">
<br>
<center><b><h5 class="text-info">مساءً</h5></b></center>
<div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="التوقيت" value="الحصة الأولى (13:00 - 14:00)" id="t5" readonly>
    </div>
    <div class="col">
    <select class="form-control" id="m5" required onchange="qrcode('m5', 'm5div', 'm5a')">
    <option value="">--إختر المادة--</option>
    <?php include('materials.php'); ?>
    </select>
    </div>
    <div class="col-1" id="m5div" style="display: none;">
    <a target="_blank" id="m5a"><button class="btn btn-outline-success"><i class="fas fa-qrcode"></i></button></a>
    </div>
</div>

<div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="التوقيت" value="الحصة الثانية (14:00 - 14:55)" id="t6" readonly>
    </div>
    <div class="col">
    <select class="form-control" id="m6" required onchange="qrcode('m6', 'm6div', 'm6a')">
    <option value="">--إختر المادة--</option>
    <?php include('materials.php'); ?>
    </select>
    </div>
    <div class="col-1" id="m6div" style="display: none;">
    <a target="_blank" id="m6a"><button class="btn btn-outline-success"><i class="fas fa-qrcode"></i></button></a>
    </div>
</div>

<div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="التوقيت" value="الحصة الثالثة (15:05 - 16:00)" id="t7" readonly>
    </div>
    <div class="col">
    <select class="form-control" id="m7" required onchange="qrcode('m7', 'm7div', 'm7a')">
    <option value="">--إختر المادة--</option>
    <?php include('materials.php'); ?>
    </select>
    </div>
    <div class="col-1" id="m7div" style="display: none;">
    <a target="_blank" id="m7a"><button class="btn btn-outline-success"><i class="fas fa-qrcode"></i></button></a>
    </div>
</div>

<div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="التوقيت" value="الحصة الرابعة (16:00 - 17:00)" id="t8" readonly>
    </div>
    <div class="col">
    <select class="form-control" id="m8" required onchange="qrcode('m8', 'm8div', 'm8a')">
    <option value="">--إختر المادة--</option>
    <?php include('materials.php'); ?>
    </select>
    </div>
    <div class="col-1" id="m8div" style="display: none;">
    <a target="_blank" id="m8a"><button class="btn btn-outline-success"><i class="fas fa-qrcode"></i></button></a>
    </div>
</div>

</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="savetimebtn" onclick="savedata()">حفظ التعديلات</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">خروج</button>
      </div>
    </div>
  </div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header bg-info">
				<h4 class="mb-0 text-white">التوقيت الأسبوعي</h4>
			</div>
<div class="card-body">

<?php
if(isset($_GET['check'])){

$material = $_GET['check'];
$time = date('H:i:s');

if(strtotime($time) >= strtotime('17:00:00')){

$dateString = date('Y-m-d');
$timestamp = strtotime($dateString);
$timestamp += 86400;
$newDate = date('Y-m-d', $timestamp);
$timestamp2 = strtotime($newDate);
$dayName = date('l', $timestamp2);
$sentence = "غداً";

}elseif(strtotime($time) >= strtotime('00:00:00')){

$dayName = date('l');
$sentence = "اليوم";

}

if($dayName != "Friday" && $dayName != "Saturday"){
include('db.php');
$sql = "SELECT * FROM `time` WHERE (`1$dayName`='$material' OR `2$dayName`='$material' OR `3$dayName`='$material' OR `4$dayName`='$material' OR `5$dayName`='$material' OR `6$dayName`='$material' OR `7$dayName`='$material' OR `8$dayName`='$material') AND userid='$_COOKIE[id]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo "<script>var audio = new Audio('Sounds/true.mp3'); audio.play();</script><center><b><h2 class='text-success'>صحيح! أنت تدرس $material $sentence</h2><b></center>";
  }}else{
      echo "<script>var audio = new Audio('Sounds/false.mp3'); audio.play();</script><center><b><h2 class='text-danger'>خطأ! أنت لا تدرس $material $sentence</h2><b></center>";
  }
mysqli_close($conn);
}else{
echo "<script>var audio = new Audio('Sounds/false.mp3'); audio.play();</script><center><b><h2 class='text-danger'>خطأ! أنت لا تدرس $sentence</h2><b></center>";
}

}
?>

                            <div class="table-responsive">
                                <table id="time" data-toggle="table" data-mobile-responsive="true" class="table table-default table-bordered" width="100%">
                                    <thead>
                                    <tr class="bg-warning" style="color: white !important;">
                                        <th scope="col" class="text-center"></th>
                                        <th scope="col" class="text-center"><b>08:00 - 09:00</b></th>
                                        <th scope="col" class="text-center"><b>09:00 - 09:55</b></th>
                                        <th scope="col" class="text-center"><b>10:05 - 11:00</b></th>
                                        <th scope="col" class="text-center"><b>11:00 - 12:00</b></th>
                                        <th scope="col" class="text-center"><b>13:00 - 14:00</b></th>
                                        <th scope="col" class="text-center"><b>14:00 - 14:55</b></th>
                                        <th scope="col" class="text-center"><b>15:05 - 16:00</b></th>
                                        <th scope="col" class="text-center"><b>16:00 - 17:00</b></th>
                                    </tr>
                                    </thead>
                                    <tbody class="table-secondary">
<tr>
<th scope="row" class="text-center<?php if(date('l') == "Sunday"){ echo " text-danger"; } ?>"><b>الأحد</b></th>
<?php
include('db.php');
$sql = "SELECT * FROM time WHERE userid='$_COOKIE[id]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo "<td>".$row['1Sunday']."</td><td>".$row['2Sunday']."</td><td>".$row['3Sunday']."</td><td>".$row['4Sunday']."</td><td>".$row['5Sunday']."</td><td>".$row['6Sunday']."</td><td>".$row['7Sunday']."</td><td>".$row['8Sunday']."</td>";
  }}else{
      echo "<td colspan='8'>-</td>";
  }
mysqli_close($conn);
?>
</tr>

<tr>
<th scope="row" class="text-center<?php if(date('l') == "Monday"){ echo " text-danger"; } ?>"><b>الإثنين</b></th>
<?php
include('db.php');
$sql = "SELECT * FROM time WHERE userid='$_COOKIE[id]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo "<td>".$row['1Monday']."</td><td>".$row['2Monday']."</td><td>".$row['3Monday']."</td><td>".$row['4Monday']."</td><td>".$row['5Monday']."</td><td>".$row['6Monday']."</td><td>".$row['7Monday']."</td><td>".$row['8Monday']."</td>";
  }}else{
      echo "<td colspan='8'>-</td>";
  }
mysqli_close($conn);
?>
</tr>

<tr>
<th scope="row" class="text-center<?php if(date('l') == "Tuesday"){ echo " text-danger"; } ?>"><b>الثلاثاء</b></th>
<?php
include('db.php');
$sql = "SELECT * FROM time WHERE userid='$_COOKIE[id]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo "<td>".$row['1Tuesday']."</td><td>".$row['2Tuesday']."</td><td>".$row['3Tuesday']."</td><td>".$row['4Tuesday']."</td><td>".$row['5Tuesday']."</td><td>".$row['6Tuesday']."</td><td>".$row['7Tuesday']."</td><td>".$row['8Tuesday']."</td>";
  }}else{
      echo "<td colspan='8'>-</td>";
  }
mysqli_close($conn);
?>
</tr>

<tr>
<th scope="row" class="text-center<?php if(date('l') == "Wednesday"){ echo " text-danger"; } ?>"><b>الأربعاء</b></th>
<?php
include('db.php');
$sql = "SELECT * FROM time WHERE userid='$_COOKIE[id]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo "<td>".$row['1Wednesday']."</td><td>".$row['2Wednesday']."</td><td>".$row['3Wednesday']."</td><td>".$row['4Wednesday']."</td><td>".$row['5Wednesday']."</td><td>".$row['6Wednesday']."</td><td>".$row['7Wednesday']."</td><td>".$row['8Wednesday']."</td>";
  }}else{
      echo "<td colspan='8'>-</td>";
  }
mysqli_close($conn);
?>
</tr>

<tr>
<th scope="row" class="text-center<?php if(date('l') == "Thursday"){ echo " text-danger"; } ?>"><b>الخميس</b></th>
<?php
include('db.php');
$sql = "SELECT * FROM time WHERE userid='$_COOKIE[id]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo "<td>".$row['1Thursday']."</td><td>".$row['2Thursday']."</td><td>".$row['3Thursday']."</td><td>".$row['4Thursday']."</td><td>".$row['5Thursday']."</td><td>".$row['6Thursday']."</td><td>".$row['7Thursday']."</td><td>".$row['8Thursday']."</td>";
  }}else{
      echo "<td colspan='8'>-</td>";
  }
mysqli_close($conn);
?>
</tr>
                                    </tbody>
                                </table>
                            </div>
<button class="btn btn-danger" onclick="savetime()" style="width: 100%;">تحميل التوقيت الأسبوعي</button>

</div>
	    </div>
    </div>
</div>
</div>
</div>

<!-- Custom JavaScript -->
<script src="changepass.js"></script>

<script>
function qrcode(select, div, a){
var material = document.getElementById(select).value;
if(material != "" && material != "التربية البدنية والرياضية"){
    document.getElementById(div).style.display = "";
    document.getElementById(a).setAttribute("href", "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://souledj.epizy.com/time?check="+material);
}else{
    document.getElementById(div).style.display = "none";
}
}

function savetime(){

const node = document.getElementById('time');
const width = 1000;
const height = 350;

domtoimage.toPng(node, { width, height }).then (function (dataUrl) {

var a = document.createElement('a');
a.href = dataUrl;
a.download = "التوقيت الأسبوعي.png";
document.body.appendChild(a);
a.click();
document.body.removeChild(a);

    })
    .catch(function (error) {
        console.error('Error..', error);
    });

}

function savedata(){
var day = document.getElementById('dayName').value;
var m1 = document.getElementById('m1').value;
var m2 = document.getElementById('m2').value;
var m3 = document.getElementById('m3').value;
var m4 = document.getElementById('m4').value;
var m5 = document.getElementById('m5').value;
var m6 = document.getElementById('m6').value;
var m7 = document.getElementById('m7').value;
var m8 = document.getElementById('m8').value;
if(day != ""){

$.ajax({
    url: "savetime.php",
	type: "POST",
    data: {
        day: day,
        m1: m1,
        m2: m2,
        m3: m3,
        m4: m4,
        m5: m5,
        m6: m6,
        m7: m7,
        m8: m8
    },
	cache: false,
    beforeSend: function(){
        $('#savetimebtn').html('<i class="fa fa-spinner fa-spin"></i>');
        document.getElementById('savetimebtn').disabled = true;
    },
	success: function(dataResult){
        var dataResult = JSON.parse(dataResult);
        if(dataResult.statusCode==200){
            alertify.success('تمت العملية بنجاح');
            location.reload();
        }else if(dataResult.statusCode==201){
            alertify.error('تعذّر إتمام العملية');
            $('#savetimebtn').html('حفظ التعديلات');
            document.getElementById('savetimebtn').disabled = false;
        }
    }
});

}else{
alertify.error('الرجاء إختيار اليوم');
}
}

function showtimes(){
var day = document.getElementById('dayName').value;
if(day != ""){
$.ajax({
    url: "gettime.php",
	type: "POST",
    data: {
        day: day
    },
	cache: false,
	success: function(dataResult){
        var dataResult = JSON.parse(dataResult);
        if(dataResult.statusCode==200){
            document.getElementById('m1').value = dataResult.m1;
            qrcode('m1', 'm1div', 'm1a');
            document.getElementById('m2').value = dataResult.m2;
            qrcode('m2', 'm2div', 'm2a');
            document.getElementById('m3').value = dataResult.m3;
            qrcode('m3', 'm3div', 'm3a');
            document.getElementById('m4').value = dataResult.m4;
            qrcode('m4', 'm4div', 'm4a');
            document.getElementById('m5').value = dataResult.m5;
            qrcode('m5', 'm5div', 'm5a');
            document.getElementById('m6').value = dataResult.m6;
            qrcode('m6', 'm6div', 'm6a');
            document.getElementById('m7').value = dataResult.m7;
            qrcode('m7', 'm7div', 'm7a');
            document.getElementById('m8').value = dataResult.m8;
            qrcode('m8', 'm8div', 'm8a');
            document.getElementById('showtimesDiv').style.display = "";
        }else if(dataResult.statusCode==201){
            alertify.error('تعذّر إتمام العملية');
        }
    }
});
}else{
document.getElementById('showtimesDiv').style.display = "none";
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