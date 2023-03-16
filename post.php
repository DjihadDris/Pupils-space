<?php
session_start();
if(isset($_COOKIE['name'])){
    $text = $_POST['text'];
    $name = $_COOKIE['year']."-".$_COOKIE['div'];
    $cb = fopen("$name.html", 'a');
    fwrite($cb, "<div class='msgln'>(".date("Y-m-d")." - ".date("h:iA").") <b>".$_COOKIE['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
    fclose($cb);
}
?>