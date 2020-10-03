<?php
include("database.php");

$itemid = $_GET['id'];
$sql = "DELETE FROM item WHERE id = $itemid";
mysql_query($sql);
header("location: indexp.php");
?>