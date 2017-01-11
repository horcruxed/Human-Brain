<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    background-color: black; color: white;
}
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 750px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/7 etc) */
.numbertext {
  color: black;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.active {
  background-color: #717171;
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

a { color: inherit; 
text-decoration:none;
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
<body>
<?php
session_start();
if (isset($_COOKIE["frontal"]))
	{
	header( "refresh:5;url=projecthome1.php" );
	echo ("YOU HAVE ALREADY COMPLETED THIS QUIZ and you scored ".$_SESSION["frontal"]." points"."<br>");
	echo ("REDIRECTING TO HOME PAGE IN 5 SECONDS....!!<br><br><br>");
	}
?>
   

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 7</div>
  <img src="assets/m1.jpg" style="width:100%">
  <div class="text">Let's start</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 7</div>
  <img src="assets/m12.jpg" style="width:100%">
  <div class="text">CHECK THIS</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 7</div>
  <img src="assets/m3.jpg" style="width:100%">
  <div class="text">REMEMBER THIS</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 7</div>
  <img src="assets/m4.jpg" style="width:100%">
  <div class="text">FOCUS</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 7</div>
  <img src="assets/m5.jpg" style="width:100%">
  <div class="text">SEE CAREFULLY</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 7</div>
  <img src="assets/m6.jpg" style="width:100%">
  <div class="text">HOPE YOU REMEMBER</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 7</div>
  <img src="assets/m8.jpg" style="width:100%">
  <div class="text">GREAT !</div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="assets/m14.jpg" style="width:100%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
<center>Do not press on start until you have seen all the 7 images, so that your memory can be tested accurately</center>
<button class="button" onclick="showSlides()">Game on</button>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <button class="button" id="myAnchor" ><a href="frontal.php">START</a></button>
</div>

<script>
var slideIndex = 0;


function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 5 seconds
}
function myFunction() {
    document.getElementById("myAnchor").href="frontal.php";
	 document.getElementById("myAnchor").target = "_blank";
	}
</script>

 <a id="myAnchor" href="frontal.php"></a>
</body>
</html>

