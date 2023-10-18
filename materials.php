<option value="الرياضيات">الرياضيات</option>
<option value="اللغة العربية">اللغة العربية</option>
<option value="اللغة الفرنسية">اللغة الفرنسية</option>
<option value="اللغة الإنجليزية">اللغة الإنجليزية</option>
<option value="التاريخ والجغرافيا">التاريخ والجغرافيا</option>
<?php
if($_COOKIE['type'] == "admin" OR $_COOKIE['div'] == "علوم تجريبية" OR $_COOKIE['div'] == "رياضيات" OR $_COOKIE['div'] == "تقني رياضي" OR $_COOKIE['year'] == "السنة أولى ثانوي"){
?>
<option value="العلوم الفيزيائية">العلوم الفيزيائية</option>
<?php
}
if($_COOKIE['type'] == "admin" OR $_COOKIE['div'] == "علوم تجريبية" OR $_COOKIE['div'] == "رياضيات" OR $_COOKIE['year'] == "السنة أولى ثانوي"){
?>
<option value="العلوم الطبيعية">العلوم الطبيعية</option>
<?php
}
?>
<option value="العلوم الإسلامية">العلوم الإسلامية</option>
<?php
if($_COOKIE['type'] == "admin" OR $_COOKIE['div'] == "تسيير وإقتصاد"){
?>
<option value="الإقتصاد والمناجمنت">الإقتصاد والمناجمنت</option>
<option value="التسيير المحاسبي والمالي">التسيير المحاسبي والمالي</option>
<option value="القانون">القانون</option>
<?php
}
if($_COOKIE['type'] == "admin" OR $_COOKIE['div'] == "تقني رياضي" OR $_COOKIE['div'] == "جذع مشترك علوم وتكنولوجيا"){
?>
<option value="التكنولوجيا">التكنولوجيا</option>
<?php
}
if($_COOKIE['type'] == "admin" OR $_COOKIE['div'] == "آداب ولغات أجنبية"){
?>
<option value="اللغة الإيطالية">اللغة الإيطالية</option>
<?php
}
if($_COOKIE['type'] == "admin" OR $_COOKIE['div'] == "آداب وفلسفة" OR $_COOKIE['year'] == "السنة ثالثة ثانوي"){
?>
<option value="الفلسفة">الفلسفة</option>
<?php
}
if($_COOKIE['type'] == "admin" OR $_COOKIE['year'] == "السنة أولى ثانوي"){
?>
<option value="الإعلام الآلي">الإعلام الآلي</option>
<?php
}
?>
<option value="التربية البدنية والرياضية">التربية البدنية والرياضية</option>