<?php session_start(); ?>
<?
include('database.php');
    $fullname = $_POST['cname'];   
    $contact = $_POST['cphone'];   
    $address = $_POST['caddress']; 
    $date= $_POST['cdate'];
    $item=$_POST['item'];
    
    $sql = "INSERT INTO unicon.order (name,contact,address,item,dateordered) VALUES ('$fullname','$contact','$address','$item','$date')";
    mysql_query($sql);

    header("location:psuccess.php?item=$item&&amount=$amount");

?>