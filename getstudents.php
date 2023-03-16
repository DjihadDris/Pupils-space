<?php
if(isset($_COOKIE['id'])){
include('db.php');
$i = 1;
if($_COOKIE['type'] == "admin"){
$sql = "SELECT * FROM students WHERE ID<>'1' AND ID<>'$_COOKIE[id]'";
}else{
$sql = "SELECT * FROM students WHERE year='$_COOKIE[year]' AND ID<>'1' AND ID<>'$_COOKIE[id]'";
}
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
<tr <?php if("$row[name]" == $_COOKIE['name'] AND "$row[ID]" == $_COOKIE['id']){ ?> class="table-warning" <?php } ?>>
<td scope="row"><?php echo $i;$i++; ?></td>
<td onclick="copyurl('<?php echo "$row[user]"; ?>')"><?php echo "$row[user]"; ?></td>
<td><?php echo "$row[fn]"; ?></td>
<td><?php echo "$row[name]"; ?></td>
<td><?php echo "$row[gender]"; ?></td>
<td><?php echo "$row[dob]"; ?></td>
<?php if($_COOKIE['type'] == "admin"){ ?>
<td><?php echo "$row[year]"; ?></td>
<?php } ?>
<td><?php echo "$row[div]"; ?></td>
<?php if($_COOKIE['type'] == "admin"){ ?>
<td><?php echo "$row[email]"; ?></td>
<td id="<?php echo "$row[ID]"."$row[password]"; ?>" onclick="showpass('<?php echo "$row[ID]"."$row[password]"; ?>', '<?php echo "$row[password]"; ?>')">****</td>
<td><?php if("$row[status]" == "yes"){echo "مفعل";}else{echo "غير مفعل";} ?></td>
<?php } ?>
<td><?php if("$row[ver]" == "yes"){echo "موثّق";}else if("$row[ver]" == "wait"){echo "في إنتظار التوثيق";}else{echo "غير موثّق";} ?></td>
<?php if($_COOKIE['type'] == "admin"){ ?>
<td><?php if("$row[type]" == "admin"){echo "مشرف";}else{echo "تلميذ";} ?></td>
<td><?php echo "$row[time] في $row[date]"; ?></td>
<td><?php echo "$row[ltime] في $row[ldate]"; ?></td>
<td><?php echo "$row[ip]"; ?></td>
<td>
<div class="dropdown">
  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">العمليات</button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" onclick="edit('<?php echo "$row[ID]"; ?>')" data-toggle="modal" data-target="#editModal"><i class="fas fa-edit"></i> تعديل</a>
    <?php if($_COOKIE['id'] == 1 AND "$row[type]" <> "admin"){ ?><a class="dropdown-item" onclick="grade('up', '<?php echo "$row[ID]"; ?>')"><i class="fas fa-up-long"></i> ترقية</a><?php } ?>
    <?php if($_COOKIE['id'] == 1 AND "$row[type]" == "admin"){ ?><a class="dropdown-item" onclick="grade('down', '<?php echo "$row[ID]"; ?>')"><i class="fas fa-down-long"></i> إلفاء الترقية</a><?php } ?>
    <?php if("$row[status]" <> "yes"){ ?><a class="dropdown-item" onclick="status('ac', '<?php echo "$row[ID]"; ?>')"><i class="fas fa-check"></i> تفعيل</a><?php } ?>
    <?php if("$row[status]" == "yes"){ ?><a class="dropdown-item" onclick="status('unac', '<?php echo "$row[ID]"; ?>')"><i class="fas fa-close"></i> إلغاء التفعيل</a><?php } ?>
    <?php if("$row[ver]" <> "yes"){ ?><a class="dropdown-item" onclick="ver('ver', '<?php echo "$row[ID]"; ?>')"><i class="fas fa-check"></i> توثيق</a><?php } ?>
    <?php if("$row[ver]" == "yes" OR "$row[ver]" == "wait"){ ?><a class="dropdown-item" onclick="ver('unver', '<?php echo "$row[ID]"; ?>')"><i class="fas fa-close"></i> إلغاء التوثيق</a><?php } ?>
    <?php if($_COOKIE['id'] == 1){ ?><a class="dropdown-item" onclick="del('<?php echo "$row[ID]"; ?>', '<?php echo "$row[fn]"; ?>', '<?php echo "$row[name]"; ?>')"><i class="fas fa-trash"></i> حذف</a><?php } ?>
  </div>
</div>
</td>
<?php } ?>
</tr>
<?php
}}else{
echo "<tr><td colspan='17'><span class='text-muted'>لا يوجد تلاميذ..</span></td></tr>";
}
}
?>