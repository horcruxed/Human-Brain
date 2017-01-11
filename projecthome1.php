<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" type ="text/css" href = "stylesheet.css">
<link href="https://fonts.googleapis.com/css?family=Aclonica" rel="stylesheet">
<title> Brain&Beyond Home </title>
<link rel= "icon" href = "assets/logo2.png">
<style>
 .h{
	 
	position:relative;
	
	 left:400px;
 }
 
 
</style>
</head>
<body style = "overflow:hidden">
<div style = "position: fixed" >
<ul >
  <li><a href="projecthome1.php">Home</a></li>
  <li><a href="about5.html">About Us</a></li>
  <li><a href="analysis.html">Analysis</a></li>
  <li><a href="signin.php">Sign In</a></li>
  <li><a href="char.html">Character Sketches</a></li>
</ul>
</div>
<br>
<br>
<br>
<div>
	<h1 style="font-family: 'Aclonica', sans-serif; color:white; font-size:50px;" class="h"> BRAIN AND BEYOND </h1>
	
	</div>
<center>
<div style = "border: solid 1px darkred; overflow: hidden; background-color: #000000;">
<?php
	session_start();
	
    if (isset($_COOKIE["temporal"]))
	{
		$t = $_COOKIE["temporal"];
		$_SESSION["temporal"] = $t ;
	}
	if (isset($_COOKIE["stem"]))
	{
		$t = $_COOKIE["stem"];
		$_SESSION["stem"] = $t ;
	}
	if (isset($_COOKIE["parietal"]))
	{
		$t = $_COOKIE["parietal"];
		$_SESSION["parietal"] = $t ;
	}
	if (isset($_COOKIE["frontal"]))
	{
		$t = $_COOKIE["frontal"];
		$_SESSION["frontal"] = $t ;
	}
	
	if (isset($_COOKIE["name"]))
	{
		$t = $_COOKIE["name"];
		$_SESSION["name"] = $t ;
		$t2 = $_COOKIE["age"];
		$_SESSION["age"] = $t2 ;
		echo "HI ".$_SESSION["name"]." ! You have already signed in";
	}
	else echo "PLEASE SIGN IN";
?> 
<b><p class = "YES1" > How well do you think you know your brain? </p>
<p class = "YES2">So you think your brain is the best?</p>
<p class = "YES1">You do... don't you?</p>
<p class = "YES2">How would you like to show everyone how YOU think?</p>
<p class = "YES1">Use your brain to win the game !!</p>
<p class = "YES2">On your mark!</p>
<p class = "YES1">Get that brain ready!</p></b>
<a style = "color: white;" href="#hi">LETS GO</a>
</div>
<br>
<div  id = "hi" style = "border: solid 1px darkred; background-color:#330000;">
<br>
<p style = "font-style: italic; color: white; font-size: 2em"> Hover over any part of the brain to know what part it is and what skills are associated with it. Click on the same image to test your skills in that domain!</p>
<br>
<span class = "hov1" ><a href="parietal.php"><img src = "assets/b2.png" alt= "PIC!" class = "pic1" height = "175px" width = "300px" style = " position: relative; left: 70px ;top: -70px;"/> <p class ="d1"> Parietal lobe (Language & Touch) </p></a></span>
<span class = "hov1" ><a href="frontal1.php"><img src = "assets/b1.png" alt= "PIC!" class = "pic1" height = "260px" width = "300px" style = "position: relative; left: 10px; top: 10px" /><p class ="d1"> Frontal lobe (Thinking, Memory,Behaviour & Movement) </p></a></span>
<br>
<span class = "hov1" ><a href="vishome.html"><img src = "assets/b3.png" alt= "PIC!" class = "pic1" height = "175px" width = "300px" style = "position: relative; top : -175px; "/> <p class ="d1"> Occiptal Lobe (Sight) </p></a></span>
<span class = "hov1" ><a href="temporal.php"><img src = "assets/b4.png" alt= "PIC!" class = "pic1" height = "150px" width = "300px" style = "position: relative; right: 90px; top: -130px;"    />  <p class ="d1"  > Temporal Lobe (Hearing, Learning & Feelings) </p></a></span>
<br>
<span class = "hov1" ><a href="quiz1.php"><img src = "assets/b5.png" alt= "PIC!" class = "pic1" height = "175px" width = "250px" style = "position: relative; top : -260px; left: 15px;" / >  <p class ="d1"> Cerebellum (Balance & Coordination) </p></a></span>
<span class = "hov1" ><a href="stem.php"><img src = "assets/b6.png" alt= "PIC!" class = "pic1" height = "170px" width = "250px" style = "position: relative; right: 170px; top: -190px;"  /> <p class ="d1"> Brain stem (Breathing, Heart rate & Temperature) </p></a></span>
</div>

</center>
</body>
</html>