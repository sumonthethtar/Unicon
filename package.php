



<style>
  #shop {
  margin-top: 2%;

  overflow: auto;
  
  font: 28px/35px "Trebuchet MS", Arial, Helvetica, sans-serif;
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
</div><br><br>



<style>
* {
  box-sizing: border-box;
}

.columns {
  float: left;
  width: 25%;
  padding: 8px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  
}


.price .header {
  
  color: black;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

.button {
  
  border: 1px solid green;
  color: black;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
border-radius: 5px;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
</style>
</head>
<body>



<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#0df9eb;">Package 1</li>
    <li class="grey">350000 kyats</li>
    <li>1 Birthday Cake </li>
    <li>Menu-Coffee & Cake</li>
    <li>10 Services</li>
    <li>1 to 15 peoples</li>
    <li class="grey" ><a href="packageform.php" class="button" style="background-color:#0df9eb;" >Add to Cart</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#aeebf6;">Package 2</li>
    <li class="grey">650000 kyats</li>
   <li>1 Birthday Cake </li>
    <li>Menu-Icecream & Cake</li>
    <li>10 Services</li>
    <li>1 to 30 peoples</li>
    <li class="grey"><a href="packageform.php" class="button" style="background-color:#aeebf6;">Add to Cart</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#0df9eb;">Package 3</li>
    <li class="grey">1000000 kyats</li>
   <li>1 Birthday Cake </li>
    <li>Menu-KFC & Cocacola</li>
    <li>10 Services</li>
    <li>1 to 40 peoples</li>
    <li class="grey"><a href="packageform.php" class="button" style="background-color:#0df9eb;">Add to Cart</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#aeebf6;">Package 4</li>
    <li class="grey">1500000 kyats</li>
    <li>1 Birthday Cake </li>
    <li>Menu-Burger & Juice</li>
    <li>10 Services</li>
    <li>1 to 50 peoples</li>
   <li class="grey"><a href="packageform.php" class="button" style="background-color:#aeebf6;">Add to Cart</a></li>
</li>
  </ul>
</div><!--End of package-->
    

</div>