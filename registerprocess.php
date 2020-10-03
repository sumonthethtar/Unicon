<?php session_start(); ?>
<?
include('database.php');
      
    $email = $_POST['cemail'];   
    
    $sql = "INSERT INTO unicon.register (email) VALUES ('$email')";
    mysql_query($sql);

    header("location:registersuccess.php?item=$item&&amount=$amount");

?>