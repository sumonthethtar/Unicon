<?php session_start(); ?>
<?
include('database.php');
    $fullname = $_POST['cname'];   
    $contact = $_POST['cphone'];   
    $address = $_POST['caddress']; 
    $date= $_POST['cdate'];
    $item=$_POST['totalitem'];
    $amount = $_POST['totalprice'];
    $sql = "INSERT INTO unicon.order (name,contact,address,item,amount,dateordered) VALUES ('$fullname','$contact','$address','$item','$amount','$date')";
    mysql_query($sql);

    header("location:success.php?item=$item&&amount=$amount");

?>