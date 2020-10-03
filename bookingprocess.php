<?php session_start(); ?>
<?
include('database.php');
    $fullname = $_POST['cname'];   
    $email = $_POST['cemail'];   
    $phone = $_POST['cphone']; 
    $date= $_POST['cdate'];
    $time=$_POST['ctime'];
    $people = $_POST['cpeople'];
    $message = $_POST['cmessage'];
    $sql = "INSERT INTO unicon.booking (name,email,phone,date,time,people,message) VALUES ('$fullname','$email','$phone','$date','$time','$people','$message')";
    mysql_query($sql);

    header("location:bookingsuccess.php?item=$item&&amount=$amount");

?>