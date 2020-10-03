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
  .container{
    margin-top: 17%;
  }
</style>

<div class="bg-img">
  <form action="registerprocess.php?action=register" method="post" class="container">
    
    <p style="color:blue;">If you register with email,you will know promotion & discount informations.</p>
    <h2 style="color:green; ">Register Now</h2>


    <input type="text"placeholder="Enter Email....." name="cemail" required="required">

  
    <input type="password" placeholder="Enter Password...." name="psw"required="required">

    <button type="submit" class="btn">Register</button>
  </form>
</div>
<!--End of header-->

<style>
.feature {
  position: relative;
  width: 18%;
  float: left;
  border: 1px solid #0df9eb;
  border-radius: 1em;
  margin-left: 2%;
  margin-top: 2%;
  
}

.image {
  display: inline;
  width: 91%;
}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: #008CBA;
 
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
  
}

.feature:hover .overlay {
  bottom: 0;
  height: 100%;
}

.text {
  color: white;
  font-size: 16px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>
<h1 text align="center" style="color:#4166a2;">What We Offer</h1>

<div class="feature">
  <img src="images/theme.png" class="image">
  <div class="overlay">
    <div class="text">Children might also have favorite cartoon characters or superheroes that they want to include at their parties.</div>
  </div>
</div>

<div class="feature">
  <img src="images/venue.png" class="image">
  <div class="overlay">
    <div class="text">With a wide variety of venues we offer,you can surely make your event as exciting as possible.</div>
  </div>
</div>

<div class="feature">
  <img src="images/drink.png" class="image">
  <div class="overlay">
    <div class="text">We have 4 menus.They are coffee & cake,cake & icecream and burger & juice and KFC & cocacola.</div>
  </div>
</div>

<div class="feature">
  <img src="images/invi.png" class="image">
  <div class="overlay">
    <div class="text">At Unicon,you can get any amount of impressive and informative invitation cards for your event.</div>
  </div>
</div>

<div class="feature">
  <img src="images/floral.png" class="image">
  <div class="overlay">
    <div class="text">Need flower or floral compositions for a birthday party?Our floral team can help you!</div>
  </div>
</div>
<div class="feature">
  <img src="images/balloon.png" class="image">
  <div class="overlay">
    <div class="text">The best way to lighten up a  birthday party is by balloons.If you want customized bunches as decorations, we also provide them. </div>
  </div>
</div>
<div class="feature">
  <img src="images/photo.png" class="image">
  <div class="overlay">
    <div class="text">Let us provide you with quality photography and videography for your event to make it memorable.</div>
  </div>
</div>
<div class="feature">
  <img src="images/ent.png" class="image">
  <div class="overlay">
    <div class="text">From live performances to the best DJs,our entertainment is limited only by our imagination.</div>
  </div>
</div>
<div class="feature">
  <img src="images/face.png" class="image">
  <div class="overlay">
    <div class="text">Kids love face painting and is a must have at all birthday parties.And,beautifully decorated nails are a fantastic memory. </div>
  </div>
</div>
<div class="feature">
  <img src="images/hair.png" class="image">
  <div class="overlay">
    <div class="text">Girls of all ages love hair braiding.Children love colors,and they want to flaunt colored hair.</div>
  </div>
</div><br><!--End of offer html and css-->

<style>
#about{
  width: 100%;
  overflow: auto;
  margin:2%;

}


.about1{
  width: 45%;
  float: left;
  margin-left: 1%;
  margin-top: 5%;
  

  
}

.about2{
  width: 45%;
  margin-top: 3%;
  float: left;
  margin-left: 2%;

}   
</style>
<div id="about" >
<div class="about1">
<h1 style="color: #4166a2">Theme Party</h1>

<p style="text-align: justify;color: #03244e;font-size: 17px;">
Birthday Party Organisers for every budget, for children of every age with a guarantee that not as single moment would be dull. We will be your partners in your child's birthday events making it an extraordinary event that would impress one and all. Being tech-savvy, we have an acute eye for looking up for the latest developments in the world and infuse them into your parties to make it an avant-garde event. Birthday parties have a special importance in each child's life and we promise to make your child's birthday party distinctive and unforgettable.</p>
</div><!--End of about1-->

<style>
.square {
  height: 200px;
  width: 200px;



 
}
</style>

 <div class="about2">
 <img src="images/theme3.jpg"  class="square" width="35%" style="margin-left: 10%;margin-bottom: 5%;">
 <img src="images/theme4.jpeg" class="square" width="35%" style="margin-left: 7%;">

 <img src="images/theme1.jpg" class="square" width="35%" style="margin-left: 10%;margin-bottom: 5%;">
 
 <img src="images/theme2.jpg" class="square" width="35%" style="margin-left: 7%;">
 </div><!--End of about 2-->
</div><!--End of about-->



<img src="images/blur.png" style=" filter: blur(8px);margin-left: 2%;background-position: center;background-repeat:no-repeat;">
 
 
</div>
<div class="bg-text" style="background-color: rgb(0,0,0);background-color: rgba(0,0,0, 0.4);color: white;font-weight: bold;border: 3px solid #f1f1f1; position: absolute;top: 360%; left: 50%;transform: 
translate(-50%, -50%);width: 60%;padding: 15px;text-align: center;">

  <h1>About Us</h1>
  <p text align="justify" style="font-size: 17px;">Our main mission is to serve our customers the best way and provide them with quality event planning as well as brilliantly organize every event we work on.Our aim to deliver enjoyable experiences to all our customers. Our first-class event planning solutions and services help us to create the best atmosphere at any event. </p>
</div><!--End of about us-->

<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 28%;
  margin-bottom: 16px;
  padding: 0 8px;
  margin: 2.5%;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.team {
  padding: 0 20px;
}

.team::after, .row::after {
  content: "";
  clear: both;
  display: table;
}


.team p{
  color: #03244e;
}
h2{
  color:#03244e;
}

.section.colorsection p,
.section.colorsection h3,
.section.db h3 {
    color: #ffffff;
}

.our-inner-taem{
    position: relative;
}

.our-inner-taem .t-top::before{
    position: absolute;
    content: "";
    width: 0px;
    right:0px;
    top: 0px;
    height: 2px;
    background-color:#0df9eb;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -ms-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
}
.our-inner-taem .t-top::after{
    position: absolute;
    content: "";
    right:0px;
    top: 0px;
    width: 2px;
    height: 0px;
    background-color:#0df9eb;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -ms-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
}


.parallax-inner-bg .section-title small{
    color: #ffffff;
}

.our-inner-taem .t-bottom::before{
    position: absolute;
    content: "";
    width: 0px;
    left: 0px;
    bottom: 0px;
    height: 2px;
    background-color:#0df9eb;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -ms-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
}

.our-inner-taem .t-bottom::after{
    position: absolute;
    content: "";
    left: 0px;
    bottom: 0px;
    width: 2px;
    height: 0px;
    background-color:#0df9eb;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -ms-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
}

.our-inner-taem:hover .t-top::before{
    width: 100%;
}
.our-inner-taem:hover .t-top::after{
    height: 100%;
}


.our-inner-taem:hover .t-bottom::before{
    width: 100%;
}
.our-inner-taem:hover .t-bottom::after{
    height: 100%;
}





</style>
<h1 text align="center" style="color:#4166a2;">Our Team</h1>
<div class="row">

  <div class="column">
    <div class="card">
    <div class="widget our-inner-taem clearfix">
              <div class="t-top"></div>
              <div class="hover-br">
       <img src="images/h4.jpg" alt="Jane" style="width:100%">
                            </div><!--hover-br-->

       <div class="team">
        <h2>Mr.Oliver</h2>
        <p class="title">CEO & Founder</p>
        <p style=>Hello everyone, I am Mr.Oliver. I am CEO and founder of the Unicon.</p>
        <p>info@oliver.com</p>
        
       </div><!--team-->
<div class="t-bottom"></div>
</div><!--widget-->

    </div><!--card-->
    </div><!--column-->


<div class="column">
    <div class="card">
    <div class="widget our-inner-taem clearfix">
              <div class="t-top"></div>
              <div class="hover-br">
       <img src="images/team1.jpg"  style="width:100%">
                            </div><!--hover-br-->

       <div class="team">
        <h2>Mrs.Grace</h2>
        <p class="title"> Admin</p>
        <p>Hello everyone, I am Mrs.Grace. I am admin of the Unicon.</p>
        <p>info@grace.com</p>
        
       </div><!--team-->
<div class="t-bottom"></div>
</div><!--widget-->

    </div><!--card-->
    </div><!--column-->
    
<div class="column">
    <div class="card">
    <div class="widget our-inner-taem clearfix">
              <div class="t-top"></div>
              <div class="hover-br">
       <img src="images/h5.jpg" alt="Jane" style="width:100%">
                            </div><!--hover-br-->

       <div class="team">
        <h2>Mr.Mike</h2>
        <p class="title">Delivery Man</p>
        <p>Hello everyone, I am Mr.Mike. I am delivery man of the Unicon.</p>
        <p>info@mike.com</p>
        
       </div><!--team-->
<div class="t-bottom"></div>
</div><!--widget-->

    </div><!--card-->
    </div><!--column-->
    
</div><!--End of roll-->

<style>
* {box-sizing: border-box}


/* Slideshow container */
.slideshow-container {
  position: relative;
  background:#aeebf6;
  margin-left: 2%;

}

/* Slides */
.mySlides {
  display: none;
  padding: 60px;
  text-align: center;


}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;

}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;


}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;


}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
    margin-left: 2%;

}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}

</style>


<h1 style="color: #4166a2;text-align: center;">What Our Clients Say</h1>
<div class="slideshow-container" style="font-size: 17px;">

<div class="mySlides">
<img src="images/t1.jpg" alt="Avatar" class="avatar" style="width: 100px;height: 100px;border-radius: 50%;margin-left: 4%;"><br>
  <q>Look no further!You are in the right place to plan your celeberation</q>
  <p class="author" style="color:#4407f3;font-size: 18px;">- Chris Fox</p>
</div>

<div class="mySlides">
<img src="images/t2.jpg" alt="Avatar" class="avatar" style="width: 100px;height: 100px;border-radius: 50%;margin-left: 4%;"><br>
  <q>I am so thankful to your team for their expertise,kidness and attention to detail that allowed me to truly enjoy my birthday day!</q>
 <p class="author" style="color:#4407f3;font-size: 18px;">- Rebecca</p>
</div>

<div class="mySlides">
<img src="images/t3.jpg" alt="Avatar" class="avatar" style="width: 100px;height: 100px;border-radius: 50%;margin-left: 4%;"><br>
  <q>Perfect decoration and perfect service for my little sister's birthday party!</q>
  <p class="author" style="color:#4407f3;font-size: 18px;">- Anna</p>
</div>

<div class="mySlides">
<img src="images/p2.png" alt="Avatar" class="avatar" style="width: 100px;height: 100px;border-radius: 50%;margin-left: 4%;"><br>
  <q>I invited these event planner to arrange a party for my best.I highly recommend it.</q>
  <p class="author" style="color:#4407f3;font-size: 18px;">- Jessica</p>
</div>

<a class="prev" onclick="plusSlides(-1)"> <</a>
<a class="next" onclick="plusSlides(1)"> ></a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
   

</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script><!--End of client-->

<style>
.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
  margin-left: 22%;

}
.form-inline input{
  vertical-align: middle;
  width: 20%;
  margin: 10px 11px 5px;
  padding: 8px;
  background-color: white;
  border: 1px solid #4166a2;
  color:blue;
  margin-right: 4%;
  border-radius: 5px;
}
#subject{
  vertical-align: middle;
  width: 70%;
  margin: 10px 11px 5px;
  padding: 8px;
  background-color: white;
  border: 1px solid #4166a2;
  color:blue;
  margin-right: 4%;
  border-radius: 4px;
}
input[type=submit] {
  background-color: #0df9eb;
  color: black;
  padding: 14px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 70%;
  
}

</style>
<h1 text align="center" style="color:#4166a2;">Book A Table</h1>
<form class="form-inline" action="bookingprocess.php?action=appointment" method="post">

 
 
<input type="name" id="name" placeholder="Name.........." name="cname">
<input type="email" id="email" placeholder="Email.........." name="cemail">
<input type="phone" id="phone" placeholder="Phone.........." name="cphone">

<input type="date" id="date" placeholder="Date.........." name="cdate">
<input type="name" id="name" placeholder="Time..........(Eg.4pm to 8pm)" name="ctime">
<input type="people" id="people" placeholder="People..........(Eg.10 people)" name="cpeople">  
<textarea id="subject" name="cmessage" placeholder="Write something.." style="height:130px"></textarea>
 <input type="submit" value="Appointment">
</form><!--End of appointment-->

   <div style="width: 100%;margin-left: 2%;margin-top: 3%;">
   <iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=kyauk%20tan%2C%20yangon%2C%20myamnar+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Add map to website</a></iframe>
   </div>


<style>
.col-container {
  display: flex;
  width: 100%;
 
  margin-left: 2%;


}
.col {
  flex: 1;
  padding:6px;

}
.col p{
  color:black;
  font-size: 13px;

}
</style>
<div class="col-container">
  <div class="col" style="background:#0df9eb">
  <img src="images/ph.png" width="10%">
  <p>CALL US</p> 
  <p>09 800456789</p>
  <p>09 700456789</p>
  </div>

  <div class="col" style="background:#aeebf6">
  <img src="images/mail.jpg" width="10%">
  <p>CONTACT US</p>   
  <p>info@unicon.com </p>  
  </div>

  <div class="col" style="background:#0df9eb">
  <img src="images/time.png " width="10%">
  <p>OPENINH HOURS</p>
  <p>Daily:7:00am - 8:00pm</p>
  </div>

  <div class="col" style="background:#aeebf6">
  <img src="images/loc.png " width="10%"> 
  <p>LOCATION</p>
  <p>No(23)Main Road</p>
  <p>Kyauktan</p>


  </div>
</div><!--End of ph, email,location-->

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
