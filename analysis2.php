<html>
	<head>
	
	<link rel = "stylesheet" type ="text/css" href = "stylesheet.css">
	</head>
	<body>
	<center>
	<a style = "color:white" href = "analysis.html"> Back to analysis </a>
	</center>
	<center>
	<h1> Compare your scores with other people! </h1> </center>
		<?php
session_start();
if (!isset($_COOKIE["temporal"]) || !isset($_COOKIE["parietal"]) || !isset($_COOKIE["stem"]) || !isset($_COOKIE["name"]) || !isset($_COOKIE["frontal"]) )
	{
	header( "refresh:5;url=projecthome1.php" );
	echo ("You have not completed all the quizzes or signed in! Please do <br>");
	echo ("REDIRECTING TO HOME PAGE IN 5 SECONDS....!! <br><br><br>");
	}
	
else 
{
	echo "Your data sent to server<br>";
			
				$t = $_SESSION["temporal"];
				$s = $_SESSION["stem"];
				$p = $_SESSION["parietal"];
				$f = $_SESSION["frontal"];
				
				$total = 1-1 + $t + $p + $s + $f;
				$nam = $_SESSION["name"];
				$age = $_SESSION["age"];
				
			
				$con = mysqli_connect('localhost','root','','project');
				$sql = "Insert into scores values('$nam',$age,$total)";
				mysqli_query($con,$sql);
				$sql = "Select * from scores";
				$res = mysqli_query($con, $sql);
				
				echo "<table border = '2' style = 'background-color: black; color: white; border: solid 1px white;'>";
				echo "<th> Name </th> <th> Age </th> <th> Total Score </th> ";
				while ( $row = mysqli_fetch_assoc($res))
				{
						echo "<tr>";
						echo "<td>". $row['Name']."</td>";
						echo "<td>". $row['Age']."</td>";
						echo "<td>". $row['TotalScore']."</td>";
						echo "</tr>";
				}
				echo "</table>";
}
		?>
	</body>
</html>