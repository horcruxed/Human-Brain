<!DOCTYPE html>
<html>
<head>
<title> Memory quiz </title>
<link rel= "icon" href = "assets/logo2.png">
<style>
html {
  background-color:#330000;
  background-size: cover;
}

div { width: 50%; border: solid 2px darkred;}
.right { position: relative; left : 40em;}
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

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
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
	
	var qn0 = document.forms["frontal"]["q0"].value;
	if (qn0 == "o2")
		points +=10;
	else points +=0;

    var qn1 = document.forms["frontal"]["q1"].value;
    if (qn1 == "o2")
		points +=10;
	else points +=0;
	
	var qn2 = document.forms["frontal"]["q2"].value;
	if (qn2 == "o3")
		points +=10;
	else points +=0;
	
	var qn3 = document.forms["frontal"]["q3"].value;
	if (qn3 == "o2" )
		points+= 10;
	else points +=0;	
	
	var qn4 = document.forms["frontal"]["q4"].value;
	if (qn4 == "o2")
		points +=10;
	else points +=0;
	
	var qn5 = document.forms["frontal"]["q5"].value;
	if (qn5 == "o2" )
		points+= 10;
	else points +=0;
	
	var finalpts;
	finalpts = (points/60)*100;
	parseInt(finalpts);
	document.cookie = "frontal=" + finalpts;	
}
</script>
</head>
<body>

<center><h1 style= "color: black"> Frontal Lobe (Memory, Thinking)</h1></center>

<form name="frontal" method="post" action="projecthome1.php" >
<div style = "border: solid 5px black" class = "right">
<img src="assets/m22.jpg" style="width:100%" "height:50%"> <br> Was this one of the photos you saw<br><br>
<input type="radio" name="q0" value = "o1"> YES! <br>
<input type="radio" name="q0" value = "o2"> NO! <br>
</div>
<br>
<div style = "border: solid 4px black" >
<img src="assets/m29.gif" style="width:100%" "height:50%"><br>Which of these photos did you see? <br><br>
<input type="radio" name="q1" value = "o1"> <img src="assets/m31.jpg "style="width:25%">
<input type="radio" name="q1" value = "o2"> <img src="assets/m32.jpg"style="width:25%">
<input type="radio" name="q1" value = "o3"> <img src="assets/m30.jpg"style="width:25%">
</div>
<br>
<div style = "border: solid 5px black", class = "right">
<img src="assets/m17.jpg" style="width:100%" "height:50%"><br>Do you remember seeing this image? <br><br>
<input type="radio" name="q2" value = "o1"> I DON'T KNOW... <br>
<input type="radio" name="q2" value = "o2"> YES! <br>
<input type="radio" name="q2" value = "o3"> NOPE! <br>

</div>
<br>
<div style = "border: solid 4px black">
<img src="assets/m40.gif" style="width:100%" "height:50%"><br>Which of the following photos do you remember? <br><br>
<input type="radio" name="q3" value = "o1"> <img src="assets/m41.jpg "style="width:25%">
<input type="radio" name="q3" value = "o2"> <img src="assets/m42.jpg"style="width:25%">
<input type="radio" name="q3" value = "o3"> <img src="assets/m43.jpg"style="width:25%">

</div>
<br>
<div style = "border: solid 5px black", class = "right">
<img src="assets/m50.gif" style="width:100%" "height:50%"><br>Which TV show did you see?<br><br>
<input type="radio" name="q4" value = "o1"> <img src="assets/m54.jpg "style="width:25%">
<input type="radio" name="q4" value = "o2"> <img src="assets/m52.jpg"style="width:25%">
<input type="radio" name="q4" value = "o3"> <img src="assets/m53.jpg"style="width:25%">
</div>
<br>
<div style = "border: solid 4px black">
<img src="assets/m18.jpg" style="width:100%" "height:50%"> <br> Did you remember seeing any part of this photo?<br><br>
<input type="radio" name="q5" value = "o1"> I'M THINK so, but I'M NOT SURE <br>
<input type="radio" name="q5" value = "o2"> YES! <br>
<input type="radio" name="q5" value = "o3"> NO! <br>
</div>
<br>


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