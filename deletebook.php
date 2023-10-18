<?php
include('db.php');

if($_COOKIE['type'] == "admin"){
$bookid = $_GET['bookid'];
$sql = "DELETE FROM books WHERE ID='$bookid'";
    if ($conn->query($sql) === TRUE) {
		header('Location: books');
	} 
	else {
		header('Location: books');
	}
mysqli_close($conn);
}else{
    header('Location: logout');
}
?>