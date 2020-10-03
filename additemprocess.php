<?php
include("database.php");
$name = $_POST['name'];

$price = $_POST['price'];
$photo = $_POST['photo'];
$code = $_POST['code'];

$sql = "INSERT INTO item (name,price,code,photo) VALUES ('$name','$price','$code','$photo')";
mysql_query($sql);
header("location: indexp.php");
?>
