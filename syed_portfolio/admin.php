<!DOCTYPE html>
<html style="width:100%;height:100%;">

	<head>
		<link rel="stylesheet" href="portfolio.css"/>
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	
		<style>
			body{
			background-image: url("Images/16.jpg");
			background-size:100%;
			}
			button:hover{
			background-color:red;
			
			}
			  .bg-modal{
  width:100%;
  height:100%;
  background-color:rgba(0,0,0,0.7);
  position:absolute;
  top:0;
  display:flex;
  justify-content:center;
  align-items:center;
  display:none;
}

.modal-content{
  width:500px;
  height:300px;
  background-color:white;
  padding:20px;
  position:relative;
}

.modal-content input{
  width:100%;
  display:block;
  border-radius:4px;
  margin:15px auto;
}

.close{
  position:absolute;
  right:14px;
  transform:rotate(45deg);
  color:red;
  cursor:pointer;
}



.bg--modal{
  width:100%;
  height:100%;
  background-color:rgba(0,0,0,0.7);
  position:absolute;
  top:0;
  display:flex;
  justify-content:center;
  align-items:center;
  display:none;
}

.modal--content{
  width:500px;
  height:500px;
  background-color:white;
  padding:20px;
  position:relative;
}

.modal--content input{
  width:100%;
  display:block;
  border-radius:4px;
  margin:15px auto;
}

.closee{
  position:absolute;
  right:14px;
  transform:rotate(45deg);
  color:red;
  cursor:pointer;
}

.bg---modal{
  width:100%;
  height:100%;
  background-color:rgba(0,0,0,0.7);
  position:absolute;
  top:0;
  display:flex;
  justify-content:center;
  align-items:center;
  display:none;
}

.modal---content{
  width:500px;
  height:500px;
  background-color:white;
  padding:20px;
  position:relative;
}

.modal---content input{
  width:100%;
  display:block;
  border-radius:4px;
  margin:15px auto;
}

.closeee{
  position:absolute;
  right:14px;
  transform:rotate(45deg);
  color:red;
  cursor:pointer;
}
		</style>
		<script type="text/javascript" src="popup.js"></script>
		<title>HOME</title>
	</head>
	
	<body style="width:100%;height:100%;">
		<header>
			<nav class="nav_class">
			<img style="float:left;padding-top:10px;padding-left:10px;"src="Images/logo2.png">
				<ul style="color:rgb(111 125 135 );">
					<li><a href="Home.php">HOME</a></li>
					<li><a href="Skills.php">SKILLS</a></li>
						<li><a href="skills&knowledge.php">SKILLS & KNOWLEDGE</a></li>
							<li><a href="education.php">EDUCATION</a></li>
					<li><a href="recommendation.php">RECOMMENDATION</a></li>
					<li><a href="work.php">WORK EXP</a></li>
					<li><a href="latestwrk.php">LATEST WORK</a></li>
					<li><a href="blog.php">BLOG</a></li>
					<li><a href="hireme.php">HIRE ME</a></li>
          <li><a href="adminedit.php">EDIT</a></li>
					
          <li><a href="Home.php">LOGOUT</a></li>
					
					<li><a href="#" id="contact">CONTACT US</a></li>

				</ul>
			</nav>
		</header>
		<h1 style="text-align:center;color:white;margin-top:200px;font-family:Rajdhani;font-style:bold;font-size:56px;">Welcome to my website</h1>
		<p style="text-align:center;color:white;font-family:Roboto;font-size:30px;margin-top:1%;">It is a pleasure for me to receive your visit and <br>that my professional information is of your liking and meets what you are looking for.<br><br>

		<a href="W9S.pdf" download>	
		<button style="font-family:Rajdhani;"type="button">Download Resume</button></a></p>
		



		<!--login
       -->
       <div class="bg-modal">
			<div class="modal-content" style="color:black">
				<h2 style="float:left;">Log In<span class="close">+</span></h2>
				<form action="loginvalidate.php" method="POST" style="clear:both;">
					<label>User:</label>
					<input type="text" class="input" name="Name" id="Name">
					<label>Password</label>
					<input type="text" class="input" name="Password" id="Password">
					<button type="submit" style="float:right;">Get In</button>
				</form>
			</div>
		</div>





       <!--signup
       -->
		<div class="bg--modal">
			<div class="modal--content" style="color:black">
				<h2 style="float:left;">Sign Up<span class="closee">+</span></h2>
				<form action="process.php" method="POST" style="clear:both;">
					<label>First Name:</label>
					<input type="text" class="input" name="Name" id="Name">
					<label>Last Name:</label>
					<input type="text" class="input" name="LName" id="LName">
					<label>Email:</label>
					<input type="text" class="input" name="Email" id="Email">
					<label>User:</label>
					<input type="text" class="input" name="User" id="User">
					<label>Password:</label>
					<input type="text" class="input" name="Password" id="Password">
					<label>Repeat password:</label>
					<input type="text" class="input" name="Repeat" id="Repeat">
					<button type="submit" style="float:right;">Get In</button>
				</form>
			</div>
		</div>





		<!--contact us
       -->
		 <div class="bg---modal">
			<div class="modal---content" style="color:black">
				<h2 >Have a project you'd like to discuss?<span class="closeee">+</span></h2>

				<form name="contactform" method="post" action="mail.php">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">   
 </td>
</tr>
</table>
</form>
       

		
    </body>
</html>	