<!DOCTYPE html>
<html >
  <head>
    <title>Login Form</title>
<link rel = "stylesheet" type ="text/css" href = "stylesheet.css">
	<style>
</style>
  </head>
<script>
function hi()
{	
	var name1;
	name1 = prompt("Enter your name: ")
	document.cookie = "name=" + name1;	
	var age1;
	age1 = prompt("Enter your age: ")
	document.cookie = "age=" + age1;
	alert("SUCCESSFULLY SIGNED IN!!")
	window.location = "projecthome1.php";
}
</script>
<body>
<?php 
	if (isset($_COOKIE["name"]))
	{
	header( "refresh:5;url=projecthome1.php" );
	echo ("YOU HAVE ALREADY SIGNED IN<br>");
	echo ("REDIRECTING TO HOME PAGE IN 5 SECONDS....!!<br><br><br>");
	}
	session_start();
?>
<div style = "position: fixed">
<ul >
  <li><a href="projecthome1.php">Home</a></li>
  <li><a href="about5.html">About Us</a></li>
  <li><a href="analysis.html">Analysis</a></li>
  <li><a href="signin.php">Sign In</a></li>
  <li><a href="chars.html">Character Sketches</a></li>
</ul>
</div>
<br> <br><br>
<center><h1 style ="color:white"> WELCOME! Click to Sign in</h1></center>      
        <center><button onclick= "hi()" >Go</button></center>
  </body>
</html>