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
input[type=text] {
  border: 1px solid #4166a2;
  color:black;
  padding: 10px;
  border-radius: 5px;
  cursor: pointer;
  width: 35%;

  
}
</style>

<div id="addbody" style="margin-left: 2%;">
  <h1 style="color: #4166a2;">Edit Category</h1>
    <?php
      include("database.php");
      $id = $_GET['id'];
      $result = mysql_query("SELECT * FROM item WHERE id = $id");
        $row = mysql_fetch_assoc($result);
        ?>
    <form action="edititemprocess.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

    <label for="itemname">Item Name</label><br>
    <input type="text" name="itemname" value="<?php echo $row['name'] ?>"><br>
    
    
    
    <label for="price">Price</label><br>
    <input type="text" name="price" value="<?php echo $row['price'] ?>"><br>
  
    

    <input type="submit" style="background-color: #0df9eb;font-family: georgia;padding: 12px;border-radius: 5px;;"  value="Edit"  class="form-control"></a>
    </form>
    
   <a href="cpanel.php"><input type="submit" style="background-color: #0df9eb;font-family: georgia;padding: 12px;border-radius: 5px;margin-top: 1%;"  value="Back to Main"  class="form-control"></a>

  </div>
</div>
