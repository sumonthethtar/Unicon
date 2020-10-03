<!DOCTYPE html>
<html>
<head>
  <title>Unicon</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style1.css">

</head>
<body>
<div id="header">
    <img src="images/unicon.png" >

       
</div><!--End of header-->

<div class="topnav" id="myTopnav">
  <a href="index.html" class="active" style="background-color:#4CAF50;">Home</a>
  <a href="about.html">About Us</a>
  <a href="gallery.html">Gallery</a>

<div class="dropdown">
    <button class="dropbtn">Services 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="theme.html">Theme party & Venue Selection</a>
      <a href="food.html">Menu & Invitation card</a>
      <a href="floral.html">Floral & Balloon Decoration</a>
      <a href="media.html">Media & Entertainment</a>
      <a href="artist.html">Artist</a>

    </div>
  </div> 

<a href="indexp.php">Shop</a>
  <a href="contact.html">Contact Us</a>
  <a href="login.php">Login</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<!--End of nav-->
<style>
  #content{
  overflow: auto;
  width: 100%;
  padding: 1%;
  margin-left:4%; 

}
#contentul img{
  width: 40%;
  height: 200px;
}
#contentul{
  width: 29%;
  border: 1px solid gray;
  border-radius: 0.5em;
  float: left;
  overflow: auto;
  margin-left: 1%;
  padding: 2%;
  float: left;
  
}
</style>
<div id="content">
    <?php
    $filter=$_GET['filter'];
    include ('database.php');
    $result=mysql_query("SELECT * FROM item where name like '%$filter%' or price like '%$filter%'");

    if($result){
        while ($row=mysql_fetch_array($result)) {
            $id=$row["id"];
            echo '<ul id="contentul">';
            echo '<div class="product-image-wrapper">
            <div class="single-products">
            <div class="productinfo text-center">
            <a href="search.php?id='.$id.'" rel="bookmark" name="'.$row['name'].'">
            <img src="images/'.$row['photo'].'" alt="'.$row['name'].'" width="250" height="250"/></a>
            </a>
            <div>';

            echo 'Name:'.$row['name'].'';?><br>
            
             <?echo 'Price:'.$row['price'].'';?><br>
             <? echo '</ul>';

        }

    }
    ?>


<!--End Search Function-->
</div>