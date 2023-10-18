<?php
if(isset($_COOKIE['id'])){
include('db.php');
$i = 1;
if($_COOKIE['type'] == "admin"){
$sql = "SELECT * FROM lessons WHERE `subject`='$_POST[id]' ORDER BY ID DESC";
}else{
$sql = "SELECT * FROM lessons WHERE `subject`='$_POST[id]' AND `year`='$_COOKIE[year]' AND `div`='$_COOKIE[div]' ORDER BY ID DESC";
}
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
<tr <?php if("$row[name]" == $_COOKIE['name'] AND "$row[ID]" == $_COOKIE['id']){ ?> class="table-warning" <?php } ?>>
<td scope="row"><?php echo $i;$i++; ?></td>
<td onclick="navigator.clipboard.writeText('https://souledj.epizy.com/subject?id=<?php echo "$_POST[id]"; ?>&lessonid=<?php echo "$row[ID]"; ?>'); alertify.success('تم نسخ رابط الدرس بنجاح')""><?php echo "$row[name]"; ?></td>
<?php if($_COOKIE['type'] == "admin"){ ?>
<td><?php echo "$row[year]"; ?></td>
<td><?php echo "$row[div]"; ?></td>
<?php } ?>
<td><?php echo "$row[trim]"; ?></td>
<td><?php echo "$row[date]"; ?></td>
<td><?php echo "$row[time]"; ?></td>
<td><?php if("$row[user]" == "Djihad"){echo "مدير الموقع";}else{echo "$row[user]";} ?></td>
<td>
<?php if($_COOKIE['type'] == "admin"){ ?>
<div class="dropdown">
  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">العمليات</button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" onclick="view('<?php echo "$row[ID]"; ?>')"><i class="fas fa-eye"></i> عرض</a>
    <a class="dropdown-item" target="_blank" download href="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://souledj.epizy.com/subject?lessonid=<?php echo "$row[ID]"; ?>"><i class="fas fa-qrcode"></i> QR Code</a>
    <a class="dropdown-item" onclick="navigator.clipboard.writeText('https://souledj.epizy.com/subject?id=<?php echo "$_POST[id]"; ?>&lessonid=<?php echo "$row[ID]"; ?>'); alertify.success('تم نسخ رابط الدرس بنجاح')"><i class="fas fa-copy"></i> نسخ الرابط</a>
    <a class="dropdown-item" onclick="edit('<?php echo "$row[ID]"; ?>', '<?php echo "$row[trim]"; ?>', '<?php echo "$row[name]"; ?>', '<?php echo "$row[year]"; ?>', '<?php echo "$row[div]"; ?>')"><i class="fas fa-edit"></i> تعديل</a>
    <a class="dropdown-item" onclick="del('<?php echo "$row[ID]"; ?>', '<?php echo "$row[name]"; ?>')"><i class="fas fa-trash"></i> حذف</a>
  </div>
</div>
<?php }else{ if($_COOKIE['name'] == "$row[user]"){ ?>
<div class="dropdown">
  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">العمليات</button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" onclick="view('<?php echo "$row[ID]"; ?>')"><i class="fas fa-eye"></i> عرض</a>
    <a class="dropdown-item" target="_blank" download href="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://souledj.epizy.com/subject?lessonid=<?php echo "$row[ID]"; ?>"><i class="fas fa-qrcode"></i> QR Code</a>
    <a class="dropdown-item" onclick="navigator.clipboard.writeText('https://souledj.epizy.com/subject?id=<?php echo "$_POST[id]"; ?>&lessonid=<?php echo "$row[ID]"; ?>'); alertify.success('تم نسخ رابط الدرس بنجاح')"><i class="fas fa-copy"></i> نسخ الرابط</a>
    <a class="dropdown-item" onclick="edit('<?php echo "$row[ID]"; ?>', '<?php echo "$row[trim]"; ?>', '<?php echo "$row[name]"; ?>', '<?php echo "$row[year]"; ?>', '<?php echo "$row[div]"; ?>')"><i class="fas fa-edit"></i> تعديل</a>
    <a class="dropdown-item" onclick="del('<?php echo "$row[ID]"; ?>', '<?php echo "$row[name]"; ?>')"><i class="fas fa-trash"></i> حذف</a>
  </div>
</div>
<?php }else{ ?>
    <button class="btn btn-warning" onclick="view('<?php echo "$row[ID]"; ?>')"><i class="fas fa-eye"></i> عرض</button>
    <a class="dropdown-item" target="_blank" download href="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://souledj.epizy.com/subject?lessonid=<?php echo "$row[ID]"; ?>"><i class="fas fa-qrcode"></i> QR Code</a>
    <a class="dropdown-item" onclick="navigator.clipboard.writeText('https://souledj.epizy.com/subject?id=<?php echo "$_POST[id]"; ?>&lessonid=<?php echo "$row[ID]"; ?>'); alertify.success('تم نسخ رابط الدرس بنجاح')"><i class="fas fa-copy"></i> نسخ الرابط</a>
<?php } } ?>
</td>
</tr>
<?php
}}else{
echo "<tr><td colspan='9'><span class='text-muted'>لا توجد دروس..</span></td></tr>";
}
}
?>