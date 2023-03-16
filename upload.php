<?php
/*$valid_extensions = array('jpeg','jpg','png','docx','doc','xlsx','xls','pdf','pptx','ppt');*/
    if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    } else {
        $code=mt_rand(10,100000);/* rename the file name*/
        $size= $_FILES['file']['size'];
        $ext = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
        $result = move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $code.'.'.$ext);
        echo json_encode(array("statusCode"=>200 ,'code'=>$code, 'ext'=>$ext));
    }
?>