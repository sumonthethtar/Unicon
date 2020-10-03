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
  <a href="index.php" class="active" style="background-color:#4CAF50;">Home</a>
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
#cpanelcontent p{
border: 1px solid none;
  background-color:#aeebf6;
  width: 28%;
  padding: 1%;
 margin-left: 2%;
  
  
}

#cpanelcontent p a{
  text-decoration: none;
  color:black;
  font-size: 17px;
}

#cpanelcontent{
  width: 100%;
  
}
</style>
<div id="cpanelcontent"  >

 

  <h1 style="text-align: center;color: #4166a2;">Admin Dashboard</h1>
  
  
  <p><a href="additem.php ">Add Item</a></p>
  <p><a href="deleteitem.php">Delete Item</a></p>
  <p><a href="edititem.php">Edit Item</a></p>
  <p><a href="orderlist.php">Order Item List</a></p>
  <p><a href="booking.php">Booking List</a></p>
 <p><a href="register.php">Register List</a></p>

</div>
<style>
#footer {
  
font: 10px/18px "Trebuchet MS", Arial, Helvetica, sans-serif;
padding: 20px;
text-align: center;
 }

#footer ul {
  display: inline-block;
  list-style: none;
  margin: 0;
  padding: 0;
 
}

#footer ul li {
  float: left;
}

#footer ul li a {
  color: blue;
  border-right: 2px solid blue;
  padding: 0 10px;
  text-decoration: none;
}

#footer ul li.last a {
  border: 0;
}
#footer ul li a:hover {
  color:green;
  text-shadow: none;
}

#footer span {
  display: block;
  color: blue;
}


</style>

<div id="footer">
    <ul>
                
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="service.html">Services</a></li>
                <li><a href="indexp.php">Shop</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
    
    <span>&copy copyright by Unicon(Birthday party planner) </span>

  </div>



</body>
</html>