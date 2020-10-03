<?php
include("database.php");
$id = $_POST['id'];
$itemname = $_POST['itemname'];

$price = $_POST['price'];

$sql = "UPDATE item SET name='$itemname',price='$price' WHERE id = $id";
mysql_query($sql);
header("location: indexp.php");
?>