<!DOCTYPE html>
<html>
<head>
<title>question1</title>
<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">


</head>
<style>
body{
background-image:url("assets/2278-light-color-low-poly-background-clip-art.jpg");
background-repeat:no-repeat;
background-size:cover;
}

.top{
position:absolute;
top:200px;
left:500px;
height:250px;
width:400px;
}

#a{
position:absolute;
top:460px;
left:530px;
}

#b{
position:absolute;
top:460px;
left:690px;

}

#demo:active {
  background-color: #F39C12;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

#demo {
  display: inline-block;
  padding: 10px 10px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #922B21  ;
  border: none;
  border-radius: 0px;
  box-shadow: 0 9px #999;
  position:absolute;
  right:90px;
  top:100px;
  
}

#demo:hover {background-color: #F39C12}

#analysis{
font-size:20px;
color:white;
}

.c{
height:250px;
width:200px;
background-color:#1A5276;
position:absolute;
right:100px;
top:200px;
padding: 10px;
    border: 5px solid black;
    margin: 0; 
}

#ques{
color:black;
font-size:50px;
position:absolute;
left:50px;
top:100px;
}


</style>
<body>
<?php
session_start();
if (isset($_COOKIE["cerebellum"]))
	{
	header( "refresh:3;url=projecthome1.php" );
	echo ("YOU HAVE ALREADY COMPLETED THIS QUIZ<br>");
	echo ("REDIRECTING TO HOME PAGE IN 3 SECONDS....!!<br><br><br>");
	}
?>
<a href="col1.html" >NEXT</a>
<img class="top" src="assets/top.gif">

<button input type="button" onclick ="myFunction()" id="demo">Analysis</button>
<div id="ques"style="font-family: 'Bad Script', cursive;
			 font-size:60px;"> Is the top spinning clockwise or anti-clockwise ? </div>
<div id="analysis" style="display:none;" class="c"> According to how your brain works, the top will either turn clockwise or counter clockwise. <br>
If it turns clockwise, then you use predominantly the right side of your brain and you are more  <br>
 than likely right-handed.
</div>
<button  onclick= "funct1()" id="a" >Anti-Clockwise</button>
<button  onclick= "funct2()" id="b" >Clockwise</button>
<script>
var a1 = document.getElementById('a');
var a2 = document.getElementById('b');
function myFunction()
{
document.getElementById('analysis').style.display="block";
}
function funct1(){
document.cookie="l1="+parseFloat(12.5);
document.cookie = "cerebellum=" + "T";
a1.disabled= true;
a2.disabled= true;

} 
function funct2(){
document.cookie="r1="+parseFloat(12.5);
document.cookie = "cerebellum=" + "T";
a1.disabled= true;
a2.disabled= true;
}
</script>



</body>
</html>