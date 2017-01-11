<!DOCTYPE html>
<html>
<head>
<title> Stem quiz </title>
<link rel= "icon" href = "logo2.png">
<link rel = "stylesheet" type ="text/css" href = "stylesheet.css">
<style>
div { width: 50%; border: solid 2px darkred;}
.centre { position: relative; left : 21em;}
.right { position: relative; left : 42em;}
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
function validateForm() {
	var points = 0;
    var qn1 = document.forms["stem"]["q1"].value;
    if (qn1 == "37") 
	{
        points+=20;
    }
	var qn2 = document.forms["stem"]["q2"].value;
    if (qn2 == "from60to100") 
	{
        points+=20;
    }
	
	var qn3 = document.forms["stem"]["q3"].value;
	if (qn3 == "13to14") 
	{
        points+=20;
    }
	var qn4 = document.forms["stem"]["q4"].value;
    if (qn4.toLowerCase() == "grey") 
	{
        points+=20;
    }
	var qn5 = document.forms["stem"]["q5"].value;
    if (qn5 == "neuron") 
	{
        points+=20;
    }
	document.cookie = "stem=" + points;	
}
</script>
</head>
<body>
<?php
session_start();
if (isset($_COOKIE["stem"]))
	{
	header( "refresh:5;url=projecthome1.php" );
	echo ("YOU HAVE ALREADY COMPLETED THIS QUIZ and you scored ".$_SESSION["stem"]." points"."<br>");
	echo ("REDIRECTING TO HOME PAGE IN 5 SECONDS....!!<br><br><br>");
	}
?>
<center><h1 style= "color: white"> Brain stem (Breathing, Heart rate & Temperature) </h1></center>
<form name="stem" method="post" action="projecthome1.php">
<div class = "left" >
<pre>
What is the normal human body temperature? <br>
(in Celcius(Enter only number)):<br>
<input type="text" name="q1" autocomplete="off">
</pre>
</div>
<br>
<div class = "centre" >
How many times does your heart beat in a minute? <br>
<input type="radio" name="q2" value = "from30to60"> 30-60<br>
<input type="radio" name="q2" value = "from40to80"> 40-80<br>
<input type="radio" name="q2" value = "from60to100"> 60-100<br>
<input type="radio" name="q2" value = "from50to90"> 50-90<br>
</div>
<br>
<div class = "right" >
How much does a human brain weigh?<br>
<input type="radio" name="q3" value = "13to14"> 1.3 to 1.4kg <br>
<input type="radio" name="q3" value = "8to10"> 0.8 to 1.0kg <br>
<input type="radio" name="q3" value = "21to25"> 2.1 to 2.5kg <br>
<input type="radio" name="q3" value = "15to17"> 1.5 to 1.7kg<br>
</div>
<br>
<div class = "left" >
<pre>
What is the color we associate with brain matter? <br>
<input type="text" name="q4" autocomplete="off">
</pre>
</div>
<div class = "right">
Which of these is like a messenger from the brain?<br>
<input type="radio" name="q5" value = "neutron"> Neutron <br>
<input type="radio" name="q5" value = "neuron"> Neuron <br>
<input type="radio" name="q5" value = "medulla"> Medulla <br>
<input type="radio" name="q5" value = "spine"> Spine <br>
</div>
<br>
<center><h6>CLICKING ON FIND SCORE WILL AUTOMATICALLY STORE YOUR SCORES</h6>
<button class="button" style="vertical-align:middle" onclick="validateForm()"><span>SCORE </span></button>
</center>
</form>
<br>
<br>
<center><a href="projecthome1.html">Go to HOME page:</a></center>
</body>
</html>