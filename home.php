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
  background-color: pink;
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
  color: gold;
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
<body>
<h2><center>DREAM ART</center></h2>
<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="login_user.php">Login</a>
  <a href="about.php">About</a>
  <a href="Events.php">Live Events</a>
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
<body >



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <center><img src="https://images-na.ssl-images-amazon.com/images/I/710yZURJnVL._SX425_.jpg" style="width:70%"></center>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <center><img src="https://i.etsystatic.com/7902640/r/il/1bcb50/704737539/il_794xN.704737539_krx8.jpg" style="width:70%"></center>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <center><img src="https://static.artfire.com/uploads/mfs/items/b9/52/large/b952ffaa132d09283eefcc71d91f3e03b90406bf17ed9dd52fb50d094e353864.jpg" style="width:70%"></center>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <center><img src="https://4.imimg.com/data4/SF/QS/MY-14384246/flower-paintings-0002-500x500.jpg" style="width:70%"></center>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <center><img src="https://i.ytimg.com/vi/ekDgVWNtwxQ/hqdefault.jpg" style="width:70%"></center>
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
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
