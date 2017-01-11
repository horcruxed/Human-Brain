<!DOCTYPE html>
<html>
<head>
<title> Temporal quiz </title>
<link rel= "icon" href = "logo2.png">
<link rel = "stylesheet" type ="text/css" href = "stylesheet.css">
<style>
div { width: 50%; border: solid 2px darkred;}
.right { position: relative; left : 40em;}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: DimGrey;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<script>
  function play(){
       var audio = document.getElementById("audio");
       audio.play();
                 }
	  function play2(){
       var audio = document.getElementById("audio2");
       audio.play();
                 }
				 
	function pause(){
       var audio = document.getElementById("audio2");
       audio.pause();
                 }
				 
	function play3(){
       var audio = document.getElementById("audio3");
       audio.play();
                 }
				 
	function pause3(){
       var audio = document.getElementById("audio3");
       audio.pause();
                 }
var points = 0;
function validateForm() {
	
	
	var qn0 = document.forms["temporal"]["q0"].value;
	if (qn0 == "o1")
		points+= 6;
	else if (qn0 == "o2")
		points+= 8;
	else if (qn0 == "o3")
		points+= 10;
	else if (qn0 == "o4")
		points+= 2;
	else points+=0
	
    var qn1 = document.forms["temporal"]["q1"].value;
    if (qn1 == "enthu" )
		points+= 10;
	else if  (qn1== "shock")
		points+=6;
	else if  (qn1== "hungry")
		points+=8;
	else if  (qn1== "attract")
		points+=8;
	else points +=0;
	
	var qn2 = document.forms["temporal"]["q2"].value;
	if (qn2== "terrified")
		points+= 10;
	else if (qn2== "scared")
		points+= 8;
	else if (qn2== "aggressive")
		points+= 6;
	else if (qn2== "excited")
		points+= 4;
	else if (qn2== "indifferent")
		points+= 2;
	else points +=0;
	
	var qn3 = document.forms["temporal"]["q3"].value;
	if (qn3.toLowerCase() == "sad" )
		points+= 10;
	else points +=0;	
	
	var qn4 = document.forms["temporal"]["q4"].value;
	if (qn4 == "peace")
		points+= 10;
	else if (qn4 == "freedom")
		points+= 8;
	else if (qn4 == "happy")
		points+= 6;
	else if (qn4 == "indifferent")
		points+= 2;
	else points +=0;
	
	var qn5 = document.forms["temporal"]["q5"].value;
	if (qn5 == "guitar" )
		points+= 10;
	else points +=0;
	
	var qn6 = document.forms["temporal"]["q6"].value;
	if (qn6 == "o1")
		points+= 9;
	else if (qn6 == "o2")
		points+= 10;
	else if (qn6 == "o3")
		points+= 7;
	else if (qn6 == "o4")
		points+= 3;
	else if (qn6 == "o5")
		points+= 4;
	else points+=0;
	
	var qn7 = document.forms["temporal"]["q7"].value;
	if (qn7.toLowerCase() == "negative" )
		points+= 10;
	else points +=0;

	var qn8 = document.forms["temporal"]["q8"].value;
	if (qn8 == "happy")
		points+= 9;
	else if (qn8 == "loved")
		points+= 10;
	else if (qn8 == "sad")
		points+= 5;
	else if (qn8 == "idc")
		points+= 2;
	else points +=0;

	var qn9 = document.forms["temporal"]["q9"].value;
	if (qn9 == "confused")
		points+= 10;
	else if (qn9 == "good")
		points+= 8;
	else if (qn9 == "bad")
		points+= 5;
	else if (qn9 == "idc")
		points+= 2;
	else points +=0;
	document.cookie = "temporal=" + points;	
}
</script>
</head>
<body>
<?php
session_start();
if (isset($_COOKIE["temporal"]))
	{
	header( "refresh:5;url=projecthome1.php" );
	echo ("YOU HAVE ALREADY COMPLETED THIS QUIZ and you scored ".$_SESSION["temporal"]." points"."<br>");
	echo ("REDIRECTING TO HOME PAGE IN 5 SECONDS....!!<br><br><br>");
	}
?>
<center><h1 style= "color: white"> Temporal Lobe (Hearing, Learning & Feelings) </h1></center>
<form name="temporal" method="post" action="projecthome1.php" >
<div style = "border: solid 1px darkred" class = "right">
You're at the bank, cashing a check, when two armed robbers in ski masks charge in the room. You duck behind the nearby counter before you hear them demand that everyone put their hands up. You're phone is in your pocket. The exit is pretty close to where you are sitting... So what do you do? <br><br>
<input type="radio" name="q0" value = "o1"> Grab the nearest object and ATTACKKKKK! <br>
<input type="radio" name="q0" value = "o2"> Text someone and leave immediately <br>
<input type="radio" name="q0" value = "o3"> Quietly crawl and go outside and call 911! <br>
<input type="radio" name="q0" value = "o4"> Crawl out quietly, do nothing and get far away <br>
</div>
<br>
<div style = "border: solid 1px darkred">
Which of these options do you <b>feel (not think of)</b> when I say <span style = "color:orange">ORANGE </span> <br>
<select name = "q1">
  <option> NONE </option>
  <option value="enthu">Enthusiastic, Joyous, Happy, Patriotic</option>
  <option value="shock">Shocked, Startled</option>
  <option value="hugry">Hungry</option>
  <option value="attract"> Attracted</option>
</select>
</div>
<br>
<div style = "border: solid 1px darkred", class = "right">
If someone was to come near you and point a gun to your head, what would you feel? <br>
<input type="radio" name="q2" value = "scared"> Scared <br>
<input type="radio" name="q2" value = "terrified"> Terrified<br>
<input type="radio" name="q2" value = "aggressive"> Aggresive <br>
<input type="radio" name="q2" value = "excited"> Excited <br>
<input type="radio" name="q2" value = "indifferent"> Indifferent<br>
</div>
<br>
<div style = "border: solid 1px darkred">
<input type="button" value="PLAY SOUND"  onclick="play()">
<br>
<audio id="audio" src="assets/cat.mp3" ></audio>
Is the cat happy or sad? (give single word happy/sad)<br>
<input type="text" name="q3" autocomplete ="off">
</div>
<br>
<div style = "border: solid 1px darkred", class = "right">
<img src = "assets/pigeon.jpg"><br>
What does this picture signify in terms of feelings?<br>
<input type="radio" name="q4" value = "peace"> Peace and Love <br>
<input type="radio" name="q4" value = "freedom"> Freedom<br>
<input type="radio" name="q4" value = "happy"> Happy <br>
<input type="radio" name="q4" value = "indifference"> Indifference <br>
</div>
<br>
<div style = "border: solid 1px darkred">
<input type="button" value="PLAY SOUND"  onclick="play2()">
<input type="button" value="PAUSE SOUND"  onclick="pause()">
<audio id="audio2" src="assets/guitar.m4r" ></audio>
<br>
What is the most predominant instrument here?<br> <br>
<select name = "q5">
  <option> NONE </option>
  <option value="drums">Drums</option>
  <option value="guitar">Guitar</option>
  <option value="flute">Flute</option>
  <option value="xylo">Xylophone</option>
</select>
</div>
<br>
<div style = "border: solid 1px darkred" class = "right">
There is a sick puppy in a black car with its heat on full blast, in the middle of a black paved parking lot when it is more than 40 deg Celcius outside, the sun is out, and there is no wind at all. What would you do? <br> <br>
<input type="radio" name="q6" value = "o1"> I would break open the car with a conveniently placed sledge hammer. <br>
<input type="radio" name="q6" value = "o2"> I would go and look for the owner of the car. <br>
<input type="radio" name="q6" value = "o3"> Aww poor puppy!! Don't worry i'll call 911! <br>
<input type="radio" name="q6" value = "o4"> Nothing...I hate puppies/ I would just walk along, and ignore the car. <br>
<input type="radio" name="q6" value = "o5"> I would wait until the owner comes back. <br>
</div>
<br>
<div style = "border: solid 1px darkred">
<input type="button" value="PLAY SOUND"  onclick="play3()">
<input type="button" value="PAUSE SOUND"  onclick="pause3()">
<audio id="audio3" src="assets/audio3_cut.mp3" ></audio>
<br>
Would this song likely be played at a positive occassion (birth/wedding) or a negative one(death)? Enter positive or negative. <br> <br>
<input type="text" name="q7" autocomplete ="off">
</div>
<br>

<div style = "border: solid 1px darkred" class = "right">
<img src = "assets/bou.jpg"><br>
How would you feel if someone gave you this?<br>
<input type="radio" name="q8" value = "happy"> Happy <br>
<input type="radio" name="q8" value = "loved"> Loved/Wanted <br>
<input type="radio" name="q8" value = "sad"> Sad/Disappointed <br>
<input type="radio" name="q8" value = "idc"> I wouldn't care <br>
</div>
<br>
<div style = "border: solid 1px darkred">
How did this quiz make you feel?<br>
<input type="radio" name="q9" value = "confused"> Confused <br>
<input type="radio" name="q9" value = "good"> Good <br>
<input type="radio" name="q9" value = "bad"> Bad <br>
<input type="radio" name="q9" value = "idc"> I don't care <br>
</div>

<center>
<br>
<center><h6>CLICKING ON FIND SCORE WILL AUTOMATICALLY STORE YOUR SCORES</h6></center>
<button class="button" style="vertical-align:middle" onclick="validateForm()"><span>SCORE </span></button>
</form>
<br>
<a href="projecthome1.php">Go to HOME page:</a>
</center>
</body>
</html>