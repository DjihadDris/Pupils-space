<?php
if(!isset($_COOKIE['id'])){
    header('Location: login?from=books');
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
        <title>فضاء التلاميذ: الكتاب الرقمي</title>
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
            <div>الكتاب الرقمي</div>
        </a>
        <?php if($_COOKIE['type'] == "admin"){ ?>
        <button class="btn btn-outline-primary" data-toggle="modal" data-backdrop="false" data-target="#addbook"><i class="fas fa-add"></i> إضافة كتاب</button>
        <?php } ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addbook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">إضافة كتاب</h5>
      </div>
      <div class="modal-body">

<div class="form-group">
<label>إسم الكتاب <span style="color: red;">*</span></label>
<input class="form-control" type="text" id="bookname" required>
</div>
<br>
<div class="form-group">
<label>صورة الكتاب <span style="color: red;">*</span></label>
<input class="form-control" type="file" id="bookimg2" accept="image/*" required>
<input id="bookimg" type="hidden">
</div>
<br>
<div class="form-group">
<label>ملف الكتاب <span style="color: red;">*</span></label>
<input class="form-control" type="file" id="bookfile2" accept="application/pdf" required>
<input id="bookfile" type="hidden">
</div>
<br>
<div class="form-group">
<label>وصف الكتاب <span style="color: red;">*</span></label>
<input class="form-control" type="text" id="bookdes" required>
</div>
<br>
<div class="form-group">
<label>سعر الكتاب (دج) <span style="color: red;">*</span></label>
<input class="form-control" type="number" id="bookprice" required min="0">
</div>
<br>
<div class="form-group">
<label>كلمة المرور <span style="color: red;">*</span></label>
<input class="form-control" type="text" id="bookpassword" required>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="savebookbtn" onclick="savedata()">حفظ</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">خروج</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="buybook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">طلب الكتاب</h5>
      </div>
      <div class="modal-body">

<?php
// Generate a unique order/payment number
function generateOrderNumber() {
    $timestamp = time(); // Current timestamp
    $random = rand(1000, 9999); // Generate a random 4-digit number

    // Concatenate timestamp and random number to create a unique order number
    $orderNumber = $timestamp . $random;

    return $orderNumber;
}

$orderNumber = generateOrderNumber();
?>
<div class="alert alert-danger">
<b><u>ملاحظة:</u></b>
<p>التوصيل متوفر لـ 58 ولاية</p>
</div>
<input type="hidden" id="pbookid">
<div class="form-group">
<label>رقم الطلب</label>
<input class="form-control" type="number" id="porderid" value="<?php echo $orderNumber; ?>" required readonly>
</div>
<br>
<div class="form-group">
<label>إسم الكتاب</label>
<input class="form-control" type="text" id="pbookname" required readonly>
</div>
<br>
<div class="form-group">
<label>سعر الكتاب (دج)</label>
<input class="form-control" type="number" id="pbookprice" required readonly>
</div>
<br>
<?php
include('db.php');
$sql = "SELECT * FROM students WHERE ID='$_COOKIE[id]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
?>
<div class="form-group">
<label>اللقب والإسم</label>
<input class="form-control" type="text" id="pfnname" value="<?php echo "$row[fn] $row[name]"; ?>" required readonly>
</div>
<br>
<div class="form-group">
<label>البريد الإلكتروني</label>
<input class="form-control" type="email" id="pemail" value="<?php echo "$row[email]"; ?>" required readonly>
</div>
<br>
<?php
  }}
$conn->close();
?>
<hr class="bg-danger">
<br>
<div class="form-group">
<label>رقم الهاتف <span style="color: red;">*</span></label>
<input class="form-control" type="number" id="phonenumber" required min="0">
</div>
<br>
<div class="form-group">
<label>نوع الكتاب <span style="color: red;">*</span></label>
<select required class="form-control" id="booktype" onchange="checktype()">
<option value="">--إختر--</option>
<option value="digital">نسخة إلكترونية</option>
<option value="paper">نسخة ورقية</option>
</select>
</div>
<br>
<?php
$cities = include 'algeria_cities.php';
$distinctWilayaNames = [];

// Loop through the cities and populate the $distinctWilayaNames array with unique values.
foreach ($cities as $city) {
    $wilayaName = $city["wilaya_name"];
    if (!in_array($wilayaName, $distinctWilayaNames)) {
        $distinctWilayaNames[] = $wilayaName;
    }
}
?>
<div class="form-group">
<label>الولاية <span style="color: red;">*</span></label>
<select required class="form-control" id="wilayaname" onchange="checktype()">
<option value="">--إختر--</option>
<?php
foreach ($distinctWilayaNames as $wilayaName) {
echo "<option value='{$wilayaName}'>{$wilayaName}</option>";
}
?>
</select>
</div>
<br>
<div class="form-group">
<label>البلدية <span style="color: red;">*</span></label>
<select required class="form-control" id="communename" onchange="checktype()">
<option value="">--إختر--</option>
</select>
</div>
<div id="paymenttypediv" style="display: none;">
<br>
<div class="form-group">
<label>طريقة الدفع <span style="color: red;">*</span></label>
<select required class="form-control" id="paymenttype">
<option value="">--إختر--</option>
<option value="EDAHABIA" id="edahabiaoption" style="display: none;">البطاقة الذهبية EDAHABIA</option>
<option value="CIB" id="ciboption" style="display: none;">البطاقة البنكية CIB</option>
<option value="DELIVERED" id="deliveredoption" style="display: none;">الدفع عند الإستلام</option>
</select>
</div>
</div>
<br>
<div class="form-group">
<label>الخصم (%)</label>
<input class="form-control" type="number" id="pdiscount" value="0" readonly>
</div>
<div id="pfeesdiv" style="display: none;">
<br>
<div class="form-group">
<label>رسوم <span id="pfeeslabel"></span> (دج)</label>
<input class="form-control" type="number" id="pfees" value="" readonly>
</div>
</div>
<div id="totalpricediv" style="display: none;">
<br>
<div class="form-group">
<label>السعر الإجمالي (دج)</label>
<input class="form-control" type="number" id="totalprice" readonly>
</div>
</div>
<br>
<div class="form-group">
<label>ملاحظات</label>
<input class="form-control" type="text" id="booknotes">
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="buybookbtn" onclick="buybook()">تأكيد</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">خروج</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header bg-info">
				<h4 class="mb-0 text-white">الكتاب الرقمي</h4>
			</div>
<div class="card-body">

<h3 class="text-warning">الكتب المتاحة:</h3>
<br>
<?php
include('db.php');
$sql = "SELECT * FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<div class='row'>";
  while($row = $result->fetch_assoc()) {
?>
<div class="col-sm-2">
<div class="card" style="width: 12.5rem;">
  <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['name']; ?></h5>
    <p class="card-text"><?php echo $row['des'] ?></p>
<?php
include('db.php');
$sqls = "SELECT * FROM purshases WHERE userid='$_COOKIE[id]' AND bookid='$row[ID]'";
$results = $conn->query($sqls);

if ($results->num_rows > 0) {
  while($rows = $results->fetch_assoc()) {
      if("$rows[type]" == "digital"){
          if("$rows[status]" == "waitpay"){

// Assuming $orderTimestamp contains the timestamp of when the order was submitted.
$orderTimestamp = strtotime("$rows[date]"); // Replace this with the actual order timestamp.

// Calculate the deletion date which is 10 days from the order date.
$deletionTimestamp = strtotime("+10 days", $orderTimestamp);

// Get the current timestamp.
$currentTimestamp = time();

// Calculate the remaining days.
$remainingDays = max(0, ceil(($deletionTimestamp - $currentTimestamp) / 86400)); // 86400 seconds in a day
    echo "<h6><span class='badge text-bg-success'>حالة الطلب:</span> في إنتظار الدفع (";
if ($remainingDays === 0) {
    echo "سيتم حذف طلبك اليوم";
} elseif ($remainingDays === 1) {
    echo "سيتم حذف طلبك بعد يوم واحد فقط";
} elseif ($remainingDays === 2) {
    echo "سيتم حذف طلبك بعد يومين فقط";
} else {
    echo "سيتم حذف طلبك بعد $remainingDays أيام";
}
    echo ")</h6>";
    $total = "$rows[total]" + "25";
              echo "<br><h6><span class='badge text-bg-danger'>المبلغ:</span> $total.00 دج</h6>";
              echo '<a onclick="paybook('."'$rows[total]', '$row[name]', '$rows[orderid]', '$rows[method]'".')" class="btn btn-primary"><i class="fas fa-money-bill"></i> دفع المبلغ ('.$rows['method'].')</a>';
          }elseif("$rows[status]" == "paid"){
              echo "<h6><span class='badge text-bg-success'>حالة الطلب:</span> تم الدفع</h6>";
              echo "<br><h6><span class='badge text-bg-danger'>كلمة المرور:</span> $row[password]</h6>";
              if(isset($_GET['app'])){
              echo "<a class='btn btn-outline-primary' href='go:Book$row[ID]'><i class='fas fa-eye'></i> تصفح الكتاب</a>";
              }
          }
      }elseif("$rows[type]" == "paper"){
          if("$rows[status]" == "waitorder"){
              echo "<h6><span class='badge text-bg-success'>حالة الطلب:</span> في إنتظار التوصيل</h6>";
              echo "<br><h6><span class='badge text-bg-danger'>المبلغ:</span> $rows[total] دج</h6>";
          }elseif("$rows[status]" == "ok"){
              echo "<h6><span class='badge text-bg-success'>حالة الطلب:</span> تم التوصيل</h6>";
          }
      }
  }}else{
?>
    <h6>سعر الكتاب: <span class='text-danger'><?php echo "$row[price]"; ?>.00 دج</span></h6>
    <a class="btn btn-primary" onclick="orderbook('<?php echo "$row[ID]" ?>', '<?php echo "$row[name]" ?>', '<?php echo "$row[price]" ?>')"><i class="fas fa-paper-plane"></i> طلب الكتاب</a>
<?php
  }
  if($_COOKIE['type'] == "admin"){
?>
<a class="btn btn-outline-info" onclick="delbook('<?php echo "$row[ID]"; ?>')"><i class="fas fa-trash"></i> حذف الكتاب</a>
<?php
  }
?>
  </div>
</div>
</div>
<?php
  }
  echo "</div>";
  }else{
      echo "<h5>لا توجد كتب..</h5>";
  }
$conn->close();
?>

</div>
	    </div>
    </div>
</div>
</div>
</div>

<!-- Custom JavaScript -->
<script src="changepass.js"></script>

<script>
function delbook(id){
alertify.confirm("هل تريد حذف الكتاب حقاً؟",
  function(){
    location.href = "deletebook?bookid="+id;
  },
  function(){
    alertify.error('إلغاء');
});
}

// JavaScript to populate the "commune_name" select based on the selected "wilaya".
        document.getElementById("wilayaname").addEventListener("change", function () {
            var selectedWilaya = this.value;
            var communeSelect = document.getElementById("communename");
            communeSelect.innerHTML = '<option value="">--إختر--</option>';

            if (selectedWilaya !== "") {
                <?php
                // Create an associative array for communes for sorting.
                $communes = [];
                foreach ($cities as $city) {
                    $communes[$city["wilaya_name"]][] = $city["commune_name"];
                }

                // Loop through the sorted wilaya names and populate communes alphabetically.
                foreach ($distinctWilayaNames as $wilayaName) {
                    echo "if (selectedWilaya === '{$wilayaName}') {";
                    $sortedCommunes = $communes[$wilayaName];
                    sort($sortedCommunes);
                    foreach ($sortedCommunes as $commune) {
                        echo 'communeSelect.innerHTML += "<option value='."'{$commune}'".'>'."{$commune}".'</option>";';
                    }
                    echo "}";
                }
                ?>
            }
        });

function paybook(bookprice, bookname, orderid, method){
var fnname = document.getElementById('pfnname').value;
var email = document.getElementById('pemail').value;
var discount = document.getElementById('pdiscount').value;
location.href = "redirect?orderid="+orderid+"&fnname="+fnname+"&email="+email+"&price="+bookprice+"&bookname="+bookname+"&method="+method+"&discount="+discount;
}

function buybook(){
var orderid = document.getElementById('porderid').value;
var bookid = document.getElementById('pbookid').value;
var type = document.getElementById('booktype').value;
if(type == "digital"){
var status = "waitpay";
}else{
var status = "waitorder";
}
var bookname = document.getElementById('pbookname').value;
var bookprice = Number(document.getElementById('pbookprice').value);
var fnname = document.getElementById('pfnname').value;
var email = document.getElementById('pemail').value;
var method = document.getElementById('paymenttype').value;
var wilaya = document.getElementById('wilayaname').value;
var commune = document.getElementById('communename').value;
var notes = document.getElementById('booknotes').value;
var phone = document.getElementById('phonenumber').value;
var discount = Number(document.getElementById('pdiscount').value);
var fees = Number(document.getElementById('pfees').value);
if(method == "EDAHABIA" || method == "CIB"){
var total = ((bookprice - (bookprice * (discount / 100)))).toFixed(2);
}else if(method == "DELIVERED"){
var total = ((bookprice - (bookprice * (discount / 100))) + fees).toFixed(2);
}

if(type != "" && method != "" && wilaya != "" && commune != "" && phone != "" && total >= bookprice){
    if(phone.length == 10){
$.ajax({
    type: "POST",
    url: "updatebook.php",
    data: {
        wdo: "insert",
        orderid: orderid,
        bookid: bookid,
        type: type,
        status: status,
        method: method,
        wilaya: wilaya,
        commune: commune,
        notes: notes,
        phone: phone,
        total: total
    },
    beforeSend: function(){
        $('#buybookbtn').html('<i class="fa fa-spinner fa-spin"></i>');
        document.getElementById('buybookbtn').disabled = true;
    },
    success: function(dataResult) {
        var dataResult = JSON.parse(dataResult);
        if(dataResult.statusCode=="waitpay"){
alertify.confirm("هل تريد دفع المبلغ الآن؟",
  function(){
    location.href = "redirect?orderid="+orderid+"&fnname="+fnname+"&email="+email+"&price="+bookprice+"&bookname="+bookname+"&method="+method+"&discount="+discount;
  },
  function(){
    location.reload();
});
        }else if(dataResult.statusCode=="waitorder"){
            location.reload();
        }
    }
});
}else{
    alertify.error('رقم الهاتف خاطئ');
}
}else{
    alertify.error('الرجاء إدخال جميع المعلومات المطلوبة');
}
}

function checktype(){
    var type = document.getElementById('booktype').value;
    var totalprice = document.getElementById('totalprice');
    var totalpricediv = document.getElementById('totalpricediv');
    var fees = document.getElementById('pfees');
    var feeslabel = document.getElementById('pfeeslabel');
    var discount = Number(document.getElementById('pdiscount').value);
    var bookprice = Number(document.getElementById('pbookprice').value);
    var feesdiv = document.getElementById('pfeesdiv');
    var paymenttype = document.getElementById('paymenttype');
    var paymenttypediv = document.getElementById('paymenttypediv');
    var edahabiaoption = document.getElementById('edahabiaoption');
    var ciboption = document.getElementById('ciboption');
    var deliveredoption = document.getElementById('deliveredoption');
    var wilaya = document.getElementById('wilayaname').value;
    var commune = document.getElementById('communename').value;
    if(type == "digital"){
        feeslabel.innerHTML = "الدفع";
        fees.value = (25).toFixed(2);
        totalprice.value = ((bookprice - (bookprice * (discount / 100))) + Number(fees.value)).toFixed(2);
        feesdiv.style.display = "";
        totalpricediv.style.display = "";
        paymenttype.value = "";
        paymenttypediv.style.display = "";
        edahabiaoption.style.display = "";
        ciboption.style.display = "";
        deliveredoption.style.display = "none";
    }else if(type == "paper"){
        if(wilaya != "" && commune != ""){
        feeslabel.innerHTML = "التوصيل";
        if(wilaya == "أم البواقي" && commune == "سيقوس"){
            fees.value = (0).toFixed(2);
        }else{
            fees.value = (700).toFixed(2);
        }
        totalprice.value = (bookprice - (bookprice * (discount / 100)) + Number(fees.value)).toFixed(2);
        feesdiv.style.display = "";
        totalpricediv.style.display = "";
        }else{
        feesdiv.style.display = "none";
        totalpricediv.style.display = "none";
        }
        paymenttype.value = "";
        paymenttypediv.style.display = "";
        edahabiaoption.style.display = "none";
        ciboption.style.display = "none";
        deliveredoption.style.display = "";
    }else{
        feeslabel = "";
        fees.value = "";
        totalprice.value = "";
        feesdiv.style.display = "none";
        totalpricediv.style.display = "none";
        paymenttype.value = "";
        paymenttypediv.style.display = "none";
        edahabiaoption.style.display = "none";
        ciboption.style.display = "none";
        deliveredoption.style.display = "none";
    }
}

function orderbook(id, name, price){
    $('#pbookid').val(id);
    $('#pbookname').val(name);
    $('#pbookprice').val(Number(price).toFixed(2));
    $('#buybook').modal('show');
}

function savedata(){
var bname = document.getElementById('bookname').value;
var bimage = document.getElementById('bookimg').value;
var bfile = document.getElementById('bookfile').value;
var bdes = document.getElementById('bookdes').value;
var bprice = document.getElementById('bookprice').value;
var bpassword = document.getElementById('bookpassword').value;
if(bname != "" && bimage != "" && bfile != "" && bdes != "" && bprice != "" && bpassword != ""){
$.ajax({
    type: "POST",
    url: "addbook.php",
    data: {
        bname: bname,
        bimage: bimage,
        bfile: bfile,
        bdes: bdes,
        bprice: bprice,
        bpassword: bpassword
    },
    beforeSend: function(){
        $('#savebookbtn').html('<i class="fa fa-spinner fa-spin"></i>');
        document.getElementById('savebookbtn').disabled = true;
    },
    success: function(response) {
        alertify.success('تم إضافة الكتاب بنجاح');
        location.reload();
    }
});
}else{
    alertify.error('الرجاء إدخال إسم وصورة وملف ووصف الكتاب');
}
}

$(document).ready(function(){
    $('#bookimg2').on('change', function() {
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
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            if(dataResult.statusCode==200){
            $('#bookimg').val('uploads/'+dataResult.code+'.'+dataResult.ext);
            alertify.success('تم رفع صورة الكتاب بنجاح');
            }else{
            alertify.error(dataResult.msg);
            }
        }
     });
});
});

$(document).ready(function(){
    $('#bookfile2').on('change', function() {
    var file_data = $(this).prop('files')[0];   
    var form_data = new FormData();
    var ext = $(this).val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['pdf']) == -1)   {
        alertify.error("يسمح فقط بملفات PDF");
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
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            if(dataResult.statusCode==200){
            $('#bookfile').val('uploads/'+dataResult.code+'.'+dataResult.ext);
            alertify.success('تم رفع ملف الكتاب بنجاح');
            }else{
            alertify.error(dataResult.msg);
            }
        }
     });
});
});

    $("#question-container").on("submit", "#quizForm", function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "questions.php",
            data: $(this).serialize(),
            beforeSend: function(){
                $('#checkansbtn').html('<i class="fa fa-spinner fa-spin"></i>');
                document.getElementById('checkansbtn').disabled = true;
            },
            success: function(response) {
                /*$("#result").html(response);
                setTimeout(function(){$("#result").html('');}, 2500);*/
                alertify.message(response);
                loadQuestion(); // Load the next question
                // Update the score if the response indicates a correct answer
                if (response.includes("true")) {
                    var audio = new Audio('Sounds/true.mp3'); audio.play();
                    updateScore();
                }else if (response.includes("false")) {
                    var audio = new Audio('Sounds/false.mp3'); audio.play();
                }
            }
        });
    });
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