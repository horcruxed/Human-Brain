<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" type ="text/css" href = "stylesheet.css">
<style>
div { width: 50%; border: solid 2px darkred;}
.right { position: relative; left : 40em;}
</style>
<script>

var i = 0;
var x = setInterval(change, 500);
function change() {
  var doc = document.getElementById("h1");
  var color = ["black", "pink", "brown", "transparent"];
  doc.style.backgroundColor = color[i];

  i = (i + 1) % color.length;
}


</script>
</head>
<body>
<center><h1 style= "color: darkred"> Cerebellum (Balance & Coordination) </h1></center>
<form name="cerebellum" method="post" action = "projecthome1.php" >

<div style = "border: solid 1px darkred" class = "right">
Choose the color of the word ( not the color in the word)<br>
<h1 style = "color: red">GREEN</h1>
<input type="radio" name="q0" style = "color: green;">RED</button>
<input type="radio" name="q0" style = "color: red;">GREEN</button>
</div>
<br>

<div style = "border: solid 1px darkred" id = "h1">
Enter the colors you see in order<br>
<input type="text" name="q1a" id = "t1" autocomplete ="off">
<input type="text" name="q1b" autocomplete ="off">
<input type="text" name="q1c" autocomplete ="off">
</div>

<center>
<br>
<center><h6>CLICKING ON FIND SCORE WILL AUTOMATICALLY STORE YOUR SCORES</h6></center>
<button onclick= "validateForm()">FIND SCORE</button>
</form>
<br>
<a href="projecthome1.php">Go to HOME page:</a>
</center>
</body>
</html>