<!DOCTYPE html>
<html>
<head>
<title> Parietal quiz </title>
<link rel= "icon" href = "assets/logo2.png">
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
var points = 0;
function validateForm() {
	
	
	var qn0 = document.forms["parietal"]["q0"].value;
	if (qn0 == "o2")
		points +=10;
	else points +=0;
	
    var qn1 = document.forms["parietal"]["q1"].value;
    if (qn1 == "lab")
		points +=10;
	else points +=0;
	
	var qn2 = document.forms["parietal"]["q2"].value;
	if (qn2 == "o3")
		points +=10;
	else points +=0;
	
	var qn3 = document.forms["parietal"]["q3"].value;
	if (qn3 == "o3" )
		points+= 10;
	else points +=0;	
	
	var qn4 = document.forms["parietal"]["q4"].value;
	if (qn4 == "o4")
		points +=10;
	else points +=0;
	
	var qn5 = document.forms["parietal"]["q5"].value;
	if (qn5 == "o4" )
		points+= 10;
	else points +=0;
	
	var qn6 = document.forms["parietal"]["q6"].value;
	if (qn6.toLowerCase() == "indispensable")
		points +=10;
	else points +=0;
	
	var qn7 = document.forms["parietal"]["q7"].value;
	if (qn7.toLowerCase()== "tadpole" )
		points+= 10;
	else points +=0;

	var qn8 = document.forms["parietal"]["q8"].value;
	if (qn8 == "o3")
		points +=10;
	else points +=0;

	var qn9 = document.forms["parietal"]["q9"].value;
	if (qn9 == "o4")
		points +=10;
	else points +=0;
	
	document.cookie = "parietal=" + points;	
}
</script>
</head>
<body>
<?php
session_start();
if (isset($_COOKIE["parietal"]))
	{
	header( "refresh:5;url=projecthome1.php" );
	echo ("YOU HAVE ALREADY COMPLETED THIS QUIZ and you scored ".$_SESSION["parietal"]." points"."<br>");
	echo ("REDIRECTING TO HOME PAGE IN 5 SECONDS....!!<br><br><br>");
	}
?>
<center><h1 style= "color: white"> Parietal Lobe (Language & Touch) </h1></center>
<form name="parietal" method="post" action="projecthome1.php" >
<div style = "border: solid 1px darkred" class = "right">
Which of these answers is grammatically correct?: <br> When do you study? <br><br>
<input type="radio" name="q0" value = "o1"> At school <br>
<input type="radio" name="q0" value = "o2"> In the evenings <br>
<input type="radio" name="q0" value = "o3"> In the library <br>
</div>
<br>
<div style = "border: solid 1px darkred">
Which of these is a synonym of complex? <br><br>
<select name = "q1">
  <option> NONE </option>
  <option value="deep">Deep</option>
  <option value="lab">Labyrinthine</option>
  <option value="easy">Easy</option>
  <option value="dis"> Discernible</option>
</select>
</div>
<br>
<div style = "border: solid 1px darkred", class = "right">
What do you mean by: "At a stones throw" ? <br>
<input type="radio" name="q2" value = "o1"> Very far away <br>
<input type="radio" name="q2" value = "o2"> Difficult to reach <br>
<input type="radio" name="q2" value = "o3"> Very close by <br>
<input type="radio" name="q2" value = "o4"> Causing a fight <br>
</div>
<br>
<div style = "border: solid 1px darkred">
___________ are you going to shop?<br>
Which of these does NOT make sense. <br>
<input type="radio" name="q3" value = "o1"> When <br>
<input type="radio" name="q3" value = "o2"> What <br>
<input type="radio" name="q3" value = "o3"> Who <br>
<input type="radio" name="q3" value = "o4"> Where <br>
</div>
<br>
<div style = "border: solid 1px darkred", class = "right">
Which of these is not both a verb and a noun?<br>
<input type="radio" name="q4" value = "o1"> Play <br>
<input type="radio" name="q4" value = "o2"> Post <br>
<input type="radio" name="q4" value = "o3"> Envelope <br>
<input type="radio" name="q4" value = "o4"> Hear <br>
</div>
<br>
<div style = "border: solid 1px darkred">
<br>
I don't have ________________ money. Fill in the blank space.<br> <br>
<select name = "q5">
  <option> NONE </option>
  <option value="o1">no</option>
  <option value="o2">none</option>
  <option value="o3">some</option>
  <option value="o4">any</option>
</select>
</div>
<br>
<div style = "border: solid 1px darkred" class = "right">
Unjumble the word ISDNBPINLEAES Hint: Means something which is valuable.<br>
<input type="text" name="q6" autocomplete="off">
</div>
<br>
<div style = "border: solid 1px darkred">
What do you call a baby frog?
<br>
<input type="text" name="q7" autocomplete="off">
</div>
<br>

<div style = "border: solid 1px darkred" class = "right">
Give the correct antonym for the word HUNGRY<br>
<input type="radio" name="q8" value = "o1"> Eager <br>
<input type="radio" name="q8" value = "o2"> Starved <br>
<input type="radio" name="q8" value = "o3"> Satiated <br>
<input type="radio" name="q8" value = "o4"> Hoggish <br>
</div>
<br>

<div style = "border: solid 1px darkred">
Which word has a similar meaning as climate?<br>
<input type="radio" name="q9" value = "o1"> Weathar <br>
<input type="radio" name="q9" value = "o2"> Whather <br>
<input type="radio" name="q9" value = "o3"> Whether <br>
<input type="radio" name="q9" value = "o4"> Weather <br>
</div>

<center>
<br>
<center><h6>CLICKING ON FIND SCORE WILL AUTOMATICALLY STORE YOUR SCORES</h6></center>
<center>
<button class="button" style="vertical-align:middle" onclick="validateForm()"><span>SCORE </span></button>
</form>
<br>
<a href="projecthome1.php">Go to HOME page:</a>
</center>
</body>
</html>