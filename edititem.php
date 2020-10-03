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
<div id="addbody">
  <h1 style="color: #4166a2;margin-left: 2%;">Edit Category</h1>
    <?php
      include("database.php");
      $result = mysql_query("SELECT * FROM item");
      ?>
      <ul>
        <?php while($row = mysql_fetch_assoc($result)): ?>
        <li title="<?php echo $row['name'] ?>">
        [ <a href="edititemform.php?id=<?php echo $row['id'] ?>" class="edit">edit</a> ]
        <?php echo $row['name'] ?>
        </li>
        <?php endwhile; ?>
      </ul>
    <a href="cpanel.php"><input type="submit" style="background-color: #0df9eb;font-family: georgia;padding: 12px;border-radius: 5px;margin-top: 1%;margin-left: 2%;"  value="Back to Main"  class="form-control"></a>
  </div>
</div>