<?php include('db.php'); ?>
<?php
    $jim = new Data();
    $countproduct = $jim->countproduct();
    
    $cat = $jim->getcategory();
    class Data {
        function countproduct(){
            $count = 0;
            $cart = isset($_SESSION['cart']) ? $_SESSION['cart']:array();
            foreach($cart as $row):
                if($row['qty']!=0){
                    $count = $count + 1;
                }
            endforeach;
            
            return $count;
        }
        function getcategory(){
            $result = mysql_query("SELECT * FROM item");
            return $result;
        }
    }
?>


<?php
session_start();
require_once("dbcontrollerp.php");
$db_handle = new DBController();


if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  case "add":
    if(!empty($_POST["quantity"])) {
      $productByCode = $db_handle->runQuery("SELECT * FROM item WHERE code='" . $_GET["code"] . "'");
      $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
      
      if(!empty($_SESSION["cart_item"])) {
        if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
          foreach($_SESSION["cart_item"] as $k => $v) {
              if($productByCode[0]["code"] == $k) {
                if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                  $_SESSION["cart_item"][$k]["quantity"] = 0;
                }
                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
              }
          }
        } else {
          $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
        }
      } else {
        $_SESSION["cart_item"] = $itemArray;
      }
    }
  break;
  case "remove":
    if(!empty($_SESSION["cart_item"])) {
      foreach($_SESSION["cart_item"] as $k => $v) {
          if($_GET["code"] == $k)
            unset($_SESSION["cart_item"][$k]);        
          if(empty($_SESSION["cart_item"]))
            unset($_SESSION["cart_item"]);
      }
    }
  break;
  case "empty":
    unset($_SESSION["cart_item"]);
  break;  
}
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Unicon</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <link rel="stylesheet" type="text/css" href="style.css">

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
  #shop {
  margin-top: 2%;

  overflow: auto;
  
  font: 28px/28px "Trebuchet MS", Arial, Helvetica, sans-serif;
  text-align: center;
  text-shadow: 1px 1px #0df9eb;
  
}

#shop ul {
  display: inline-block;
  list-style: none;
  margin: 0;
  padding: 0;
 *width: 165px;
}

#shop ul li {
  float: left;
}

#shop ul li a {
  color:#4166a2;
  border-right: 1px solid #4166a2;
  padding: 0 7px;
  text-decoration: none;
}

#shop ul li.last a {
  border: 0;
}

#shop ul li a:hover {
  color:#0df9eb;
  text-shadow: none;
}

</style>
<div id="shop">
  <ul>
    <li><a href="indexp.php">Single Products</a></li>
    
    
    <li><a href="package.php">Packages</a></li>
  </ul>
</div>

<div id="searchbox" style="width: 22%;float: right;margin-top: 2%;"  >
  <form action="search.php" method="get">
    <input type="text" name="filter" placeholder="Search" style="border: 1px solid green;width: 67%;padding: 10px;border-radius:10px;text-align: center;font-family:Arial;color:darkgreen;">
  </form>

</div><br><br><br><br>
<style>
  .product-item{
    width: 20%;
  }
</style>
<div id="product-grid" style="width: 100%;">
  
  <?php

  if(isset($_POST['filter']))
  {
    $filter = $_POST['filter'];
    $product_array = $db_handle->runQuery("SELECT * FROM item where name like '%$filter%'");
                    
  }
  else
  {
    $product_array = $db_handle->runQuery("SELECT * FROM item");
  }

  if (!empty($product_array)) { 
    foreach($product_array as $key=>$value){
    ?>
    <div class="product-item">
      <form method="post" action="indexp.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
        <div class="product-image"><img src="images/<?php echo $product_array[$key]["photo"]; ?>" width="65%" height="65%"></div>
        <div><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
       
        <div class="product-price"><?php echo $product_array[$key]["price"]; ?></div>
        
      
<input type="text" name="quantity" value="1" style="border: 1px solid gray;width: 40%;padding: 7px;border-radius: 5px;text-align: center;margin-left: 2%;"><br>
<input type="submit" value="Add to Cart"  style="border: 1px solid #0df9eb;background-color: #0df9eb;color:black;padding:7px;border-radius: 5px;margin-left:2%;font-family: georgia;">

      </form>
    </div>
      <?php
        }
      }
    ?>
  </div>

<style>
#shopping-cart table{width:100%;background-color:#5bf971;}
#shopping-cart table td{background-color:white;}



</style>
<div id="shopping-cart">
<div class="txt-heading"><u>Your Order Item List</u>
  <a id="btnEmpty" href="indexp.php?action=empty" style="margin-left: 2%; color: blue">To Empty Your Cart</a>
  
</div>

<?php
if(isset($_SESSION["cart_item"])){
    $totalprice = 0;
?>  
<table cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;"><strong>Name</strong></th>
<th style="text-align:left;"><strong>Code</strong></th>
<th style="text-align:left;"><strong>Quantity</strong></th>
<th style="text-align:left;"><strong>Price</strong></th>
<th style="text-align:center;"><strong>Action</strong></th>
</tr> 
<?php   
    foreach ($_SESSION["cart_item"] as $item){
    ?>
        <tr>
        <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["name"]; ?></strong></td>
        <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["code"]; ?></td>
        <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
        <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["price"]; ?></td>
        <td style="text-align:center;border-bottom:#F0F0F0 1px solid;"><a href="indexp.php?action=remove&code=<?php echo $item["code"]; ?>" style="color:red;text-decoration: none;" class="btnRemoveAction">Remove</a></td>
        </tr>
        <?php
        $totalprice += ($item["price"]*$item["quantity"]);
    }
    ?>

<tr>
<td colspan="5" align=right><strong>Total:</strong> <?php echo $totalprice; ?></td>
</tr>
</tbody>
</table>

<!--Get Table Data-->
         <?
        $item = '';
       
       foreach($_SESSION['cart_item'] as $row):
            if($row['quantity'] != 0){
                $product = '('.$row['quantity'].') '.$row['name'];
                $item = $product.', '.$item;?>
                <?

            }
        endforeach;
        
              ?>
<style >
.feature{
  margin-left: 2%;
  width: 77%;
  color: black;

}
.feature input[type=text] {
  margin: 7px 0;
  border: 1px solid #CCC;
  color:#005dbb;
  font-family: Arial;
  font-size: 16px;


}

</style> 

        <form action="checkoutprocess.php?action=checkout" method="post">
           <? date_default_timezone_set('Asia/Rangoon');?><br>
      <div class="feature">
     

         Order Date:<input type="text" name="cdate"   value="<? echo $date = date('Y-m-d H:i:s A');?>"> 
        
        Name:<input type="text" name="cname"  class="form-control" required="required">

        Address:<input type="text" name="caddress"  class="form-control"class="form-control" required="required">

        Phone:<input type="text" name="cphone"  17px; padding: 7px;"class="form-control" required="required">
        
        Total Item:<input type="text" name="totalitem" class="form-control" value="<? echo $item?>" required="required">

        Total Price:<input type="text" name="totalprice" class="form-control" value="<? echo $totalprice?>">
             
        <input type="submit" style="background-color: #0df9eb;font-family: georgia;padding: 12px;border-radius: 5px;margin-top: 2%;"  value="Check Out" name="btncheckout" class="form-control">
       
       </div>

        </form>
       
      


<!--End of Get Table Data-->    
<?php
}
?>
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

/*shopping cart*/

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

