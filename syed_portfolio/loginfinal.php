<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="portfolio.css"/>
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

		<style>
			body{
			background-image: url("Images/16.jpg");
			background-size:100%;
			font-family: 'Raleway';
			}
			form .input{
				width:95%;
				margin-bottom:20px;;
				border-radius:20px;
				outline:none;
			}
			button:hover{
			background-color:red;
			font-family: 'Raleway';
			}
		</style>
		<title>HOME</title>
	</head>
	<body>
		<header>
			<nav class="nav_class">
			<img style="float:left;padding-top:10px;padding-left:10px;"src="Images/logo2.png">
				<ul style="color:rgb(111 125 135 );">
					<li><a href="Home.php">HOME</a></li>
					<li><a href="Skills.php">MY SKILLS1</a></li>
						<li><a href="skills&knowledge.php">MY SKILLS2</a></li>
							<li><a href="education.php">MY SKILLS3</a></li>
					<li><a href="recommendation.php">RECOMMENDATION</a></li>
					<li><a href="work.php">WORKS 1</a></li>
					<li><a href="latestwrk.php">WORKS 2</a></li>
					<li><a href="blog.php">BLOG</a></li>
					<li><a href="hireme.php">HIRE ME</a></li>
					<li><a href="loginfinal.php">LOG IN</a></li>
					<li><a href="signup1.php">SIGN UP</a></li>
				</ul>
			</nav>
		</header>

		<div class="layout_login">
			<form>
				<h1>LOG IN</h1>
				<label>User:</label></br>
				<input type="text" class="input" name="Name">	
				<label>Password:</label></br>
				<input type="text" class="input" name="Last name">
				<button type="button" style="background-color:grey;">Close</button>
				<button type="button" style="float:right;">Get In</button>
			</form>
		</div>