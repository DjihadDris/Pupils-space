<?php
if(!isset($_COOKIE['id'])){
    header('Location: login?from=quiz');
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
        <title>فضاء التلاميذ: إختبار الحفظ</title>
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
            <div>إختبار الحفظ</div>
        </a>
        <?php if($_COOKIE['type'] == "admin"){ ?>
        <button class="btn btn-outline-primary" data-toggle="modal" data-backdrop="false" data-target="#addquestion"><i class="fas fa-add"></i> إضافة سؤال</button>
        <?php } ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addquestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">إضافة سؤال</h5>
      </div>
      <div class="modal-body">

<div class="form-group">
<label>السؤال <span style="color: red;">*</span></label>
<input class="form-control" type="text" id="questioninput" required onkeydown="handleKeyPress(event, 'answerinput')">
</div>
<br>
<div class="form-group">
<label>الإجابة <span style="color: red;">*</span></label>
<input class="form-control" type="text" id="answerinput" required onkeydown="handleKeyPress(event, 'categoryselect')">
</div>
<br>
<div class="form-group">
<label>الوحدة التعلمية <span style="color: red;">*</span></label>
<select required id="categoryselect" class="form-control">
<option value="">--إختر--</option>
<option value="1">الوحدة التعلمية الأولى</option>
<option value="2">الوحدة التعلمية الثانية</option>
<option value="3">الوحدة التعلمية الثالثة</option>
</select>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="savequestionbtn" onclick="savedata()">حفظ</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">خروج</button>
      </div>
    </div>
  </div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header bg-info">
				<h4 class="mb-0 text-white">إختبار الحفظ (مجموع النقاط: <span id="score">0</span>)</h4>
			</div>
<div class="card-body">

<select id="catselect" onchange="loadQuestion()" class="form-control" style="">
<option value="">--إختر الوحدة التعلمية--</option>
<option value="1">الوحدة التعلمية الأولى</option>
<option value="2">الوحدة التعلمية الثانية</option>
<option value="3">الوحدة التعلمية الثالثة</option>
</select>
<br>
<div id="quiz">
<center><h2><div id="result"></div></h2></center>
<div id="question-container">
<!-- The question and answers will be loaded here dynamically -->
<center><h2><i class="fa fa-spinner fa-spin"></i> الرجاء الإنتظار</h2></center>
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
function handleKeyPress(event, nextInputId) {
  if (event.key === 'Enter') {
    event.preventDefault(); // Prevent the default behavior (form submission)
    if(nextInputId == "answerinput"){
        document.getElementById(nextInputId).focus(); // Focus on the next input
    }else{
        savedata();
    }
  }
}

function savedata(){
var question = document.getElementById('questioninput').value;
var answer = document.getElementById('answerinput').value;
var category = document.getElementById('categoryselect').value;
if(question != "" && answer != "" && category != ""){
$.ajax({
    type: "POST",
    url: "addquestion.php",
    data: {
        question: question,
        answer: answer,
        category: category
    },
    beforeSend: function(){
        $('#savequestionbtn').html('<i class="fa fa-spinner fa-spin"></i>');
        document.getElementById('savequestionbtn').disabled = true;
    },
    success: function(response) {
        alertify.success('تم إضافة السؤال بنجاح');
        loadQuestion(); // Load the next question
        $('#savequestionbtn').html('حفظ');
        document.getElementById('savequestionbtn').disabled = false;
        /*$('#addquestion').modal('hide');*/
        document.getElementById('questioninput').value = "";
        document.getElementById('answerinput').value = "";
        document.getElementById("questioninput").focus();
        /*document.getElementById('categoryselect').value = "";*/
    }
});
}else{
    alertify.error('الرجاء إدخال السؤال، الإجابة والوحدة التعلمية');
    document.getElementById('questioninput').focus();
}
}

function loadQuestion() {
$("#question-container").html('<center><h2><i class="fa fa-spinner fa-spin"></i> الرجاء الإنتظار</h2></center>');
var category = document.getElementById('catselect').value;
/*if(category != ""){*/
$.ajax({
    type: "GET",
    url: "questions.php",
    data: {
        category: category
    },
    success: function(response) {
        $("#question-container").html(response);
    }
});
/*}else{
    $("#question-container").html('<center><h2><i class="fa fa-spinner fa-spin"></i> الرجاء الإنتظار</h2></center>');
}*/
}

$(document).ready(function() {
    loadQuestion(); // Load the first question on page load
    

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

    // Function to update the score
    function updateScore() {
        // Increment the score by 1 (you can modify this logic if needed)
        var currentScore = parseInt($("#score").text());
        $("#score").text(currentScore + 1);
    }
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