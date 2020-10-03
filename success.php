<?php session_start(); ?>
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

<div class="col-sm-9 padding-right" style="margin-left: 7%;color: green;margin-top: 3%;">
          <div class="alert alert-success">
            <h3 class="text-center"><i class="fa fa-check-circle fa-lg"></i>Your order is success &hearts; &hearts; &hearts;</h3>
              <h3 class="text-center">Your Ordered Item: <?php echo $showitem=$_GET['item'];?></h3>
                      <h3 class="text-center">Total Amount: <?php echo $showamount=$_GET['amount'];?></h3>
              <h3 class="text-center">Thank you so much!</h3>
              <? unset($_SESSION['cart_item']); ?>
   
                    </div>
                    
        </div>
      </div>
    </div>
    </div>
  </section>




</body>
</html>