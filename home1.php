<!DOCTYPE html>
<html>
<title>Home_Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  font-family: "Lato", cursive;
}

.sidepanel  {
  width: 0;
  position: fixed;
  z-index: 1;
  height: 300px;
  top: 0;
  left: 0;
  background-color: lightblue;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidepanel a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display:block;
  transition: 0.3s;
}

.sidepanel a:hover {
  color: green;
}

.sidepanel .closebtn {
  position:absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color:black;
  color: silver;
  padding: 5px 9px;
  border:none;
}

.openbtn:hover {
  background-color:#444;
 
 
}
}
</style>
</head>

<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="login_user.php">#Login</a>
  <a href="about.php">#About</a>
  <a href="events.php">#Live Events</a>
</div>

<button class="openbtn" onclick="openNav()">☰</button>  


<script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 800px;
  position: relative;
  margin:auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}



.active {
  background-color:black;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<center>
<br>
<body style="background:url(https://images.pexels.com/photos/304664/pexels-photo-304664.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);background-repeat:no-repeat;background-size:100% 150%">
<center>
<br>
<img src="http://www.hindigraphics.in/wp-content/uploads/2019/03/da.png" alt="" height = "100" width = "100">


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <center><center><img src="https://www.thecottagejournal.com/wp-content/uploads/2018/02/sue-charles-5-696x497.jpg" style="width:65%"></center>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
   <center><img src="https://afremov.com/images/product/image_83.jpeg" style="width:60%"></center>
  <div class="text"></div>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
   <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSrYoEpONOoCS8Jcz1AFJO0Ev2eTmxO5JW-wjWm5vRBEJH1qNY-" style="width:65%"></center>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS6jQKb9AdpkDXN_sNphm0uSDJmmTX5tSEDc1q3w3FKPetEsTpV" style="width:65%"></center>

  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <center><img src="https://cdn11.bigcommerce.com/s-x49po/images/stencil/1280x1280/products/15534/26842/1473332212541_beautifull_flowers__65698.1473396880.jpg?c=2&imbypass=on" style="width:65%"></center>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <center><img src="https://i.ytimg.com/vi/ekDgVWNtwxQ/hqdefault.jpg" style="width:70%"></center>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <center><img src="https://www.thecottagejournal.com/wp-content/uploads/2018/02/sue-charles-5-696x497.jpg" style="width:70%"></center>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <center><img src="https://afremov.com/images/product/image_83.jpeg" style="width:70%"></center>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <center><img src="https://cdn.shopify.com/s/files/1/0071/1167/1926/products/product-image-734858638_grande.jpg?v=1541762263" style="width:70%"></center>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <center><img src="https://image.made-in-china.com/43f34j00RKatElyJVTkQ/Beautiful-Peacock-Animals-Oil-Paintings.jpg" style="width:70%"></center>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <center><img src="https://i.pinimg.com/originals/25/43/31/2543316da5d8250262cba14a8dbceb65.jpg" style="width:70%"></center>
  <div class="text"></div>
</div>


<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="//Z" style="width:70%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  position: relative;
  left:65%;
  width: 20%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color:red;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
}

.container:hover .overlay {
  bottom: 0;
  height: 100%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>
</head>
<body>

