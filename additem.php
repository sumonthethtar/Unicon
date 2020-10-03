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
#addbody{
  width: 50%;
  margin-left: 3%;


}

#photo{
  width: 30%;
  border: none;
  background-color: #4166a2;
  border: 1px solid #4166a2;
}

#itemcontent{
  overflow: auto;
  width: 100%;
  padding: 2%;
 

}
#btnadd{
  margin-top: 5%;
  width: 16%;
  background-color: #0df9eb;
  padding: 1%;
  font-family: 'georgia';
  color:black;
  

}


input[type=text] {
  border: 1px solid #4166a2;
  color:black;
  padding: 10px;
  border-radius: 5px;
  cursor: pointer;
  width: 70%;
  
}
</style>
<div id="addbody">
  <h1 style="color: #4166a2">Add New Item</h1>
    <?php
      include("database.php");
    ?>
    <form action="additemprocess.php" method="post">
      
      <label for="itemname">Item Name</label><br>
      <input type="text" name="name" id="name" ><br>

      <label>Code</label><br>
      <input type="text" name="code" ><br>

      

   
      
      <label>Price</label><br>
      <input type="text" name="price"><br>

      <label>Photo</label><br>
      <input type="file" name="photo" id="photo"><br><br>
      
     

      
      <input type="submit" style="background-color: #0df9eb;font-family: georgia;padding: 12px;border-radius: 5px;margin-top: 2%;"  value="Add Item"  class="form-control">

      <input type="Reset" style="background-color: #0df9eb;font-family: georgia;padding: 12px;border-radius: 5px;margin-top: 2%;margin-left: 2%;"  value="Reset"  class="form-control">

      
    </form>
     <a href="cpanel.php"><input type="submit" style="background-color: #0df9eb;font-family: georgia;padding: 12px;border-radius: 5px;margin-top: 3%;"  value="Back to Main"  class="form-control"></a>

  </div>
</div>
<div id="itemcontent">
  <h2 style="color: #4166a2;margin-top: 0;text-align: center;">All  Item List</h2>
    <table class="table" width="100%" cellpadding="2" cellspacing="2" style="text-align: center;font-size: 17px;">
      <thead style="background-color: #63f536;color: black;">
        <th style="width: 10%;">Name</th>
        <th style="width: 10%;">Code</th>
        <th style="width: 10%;">Price</th>
        
       
      </thead>
      <tbody>
  <?php
    include("database.php");
    $result = mysql_query("SELECT * FROM unicon.item");
        ?>
    <?php while($row = mysql_fetch_assoc($result)): ?>

         <tr style="background-color: lightgray;">
          <td style="width: 10%;"><?php echo $row['name']; ?></td>
          <td style="width: 10%;"><?php echo $row['code']; ?></td>
          <td style="width: 10%;"><?php echo $row['price']; ?></td>

        
        
      </tr>
      </tbody>
        <?php endwhile; ?> 

    </table>
  

</div><!--Body Content End-->