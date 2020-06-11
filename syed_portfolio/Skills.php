<!DOCTYPE html>
<html style="width:100%;height:100%;">
	<head>
		<link rel="stylesheet" href="portfolio.css"/>
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">		
		<style>
			body{
			background-color:rgb(5	15	24	);
			background-size:100%;
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
			
			}
		</style>
		<script type="text/javascript" src="popup.js"></script>
		<title>Skills</title>
	</head>
	<body style="width:100%;height:100%">
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
					<li><a href="#" id="login">LOG IN</a></li>
					<li><a href="#" id="signup">SIGN UP</a></li>
					<li><a href="#" id="contact">CONTACT US</a></li>
				</ul>
			</nav>
		</header>
		<div class="first">
			<h1 style="color:rgb(213	221	234	);font-family:Rajdhani;font-weight:900;text-transform:uppercase;font-size: 400%">Skills & Expertise</h1>
			<p style= "color:rgb(87	103	119	);font-family:Roboto;"> Visual designer and Front End Developer</p>
			<img style = "float:left;width:400px;height:400px;"src="Images/profile1.png">
		</div>
		<div class="second">
			<p style= "color:rgb(87	103	119	);font-weight:bold;">Branding</p>
			<p style= "color:rgb(87	103	119	);font-family:Roboto;">Creating logos and posters for<br> your company</p>
			<br><br>
			<p style= "color:rgb(87	103	119	);font-weight:bold;">Designing</p>
			<p style= "color:rgb(87	103	119	);font-family:Roboto;">Maintaining the quality and<br> productivity in the works to please<br> my clients</p>
		</div>
		<div class="third">
			<p style= "color:rgb(87	103	119	);font-weight:bold;">Marketing</p>
			
			<p style= "color:rgb(87	103	119	);font-family:Roboto;">Trend designs for a better<br>experience of both images,logos <br>and websites</p>
			<br><br>
			<p style= "color:rgb(87	103	119	);font-weight:bold;">Programming</p>
			<p style= "color:rgb(87	103	119	);font-family:Roboto;">Developing applications and<br>systems that meet the needs and<br>streamline the work and</p>
			
			
			
		</div>
		<div class="footer">
			<p style= "color:rgb(204,216,224);"><strong>Smart Digital Solutins</strong></p>
			<p style= "color:rgb(87	103	119	);">&nbsp&nbsp&nbspA Front-End Developer</p>
			<img src="Images/device01.png">
			<img src="Images/device02.png">
			<img src="Images/device03.png">


		 <div class="bg-modal">
			<div class="modal-content" style="color:black">
				<h2 style="float:left;">Log In<span class="close">+</span></h2>
				<form action="loginvalidate.php" method="POST" style="clear:both;">
					<label>User:</label>
					<input type="text" class="input" name="Name" id="Name" required>
					<label>Password</label>
					<input type="text" class="input" name="Password" id="Password" required>
					<button type="submit" style="float:right;">Get In</button>
				</form>
			</div>
		</div>


		<div class="bg--modal">
			<div class="modal--content" style="color:black">
				<h2 style="float:left;">Sign Up<span class="closee">+</span></h2>
				<form action="process.php" method="POST" style="clear:both;">
					<label>First Name:</label>
					<input type="text" class="input" name="Name" id="Name" required>
					<label>Last Name:</label>
					<input type="text" class="input" name="LName" id="LName" required>
					<label>Email:</label>
					<input type="text" class="input" name="Email" id="Email" required>
					<label>User:</label>
					<input type="text" class="input" name="User" id="User" required>
					<label>Password:</label>
					<input type="text" class="input" name="Password" id="Password" required>
					<label>Repeat password:</label>
					<input type="text" class="input" name="Repeat" id="Repeat">
					<button type="submit" style="float:right;">Get In</button>
				</form>
			</div>
		</div>

		<div class="bg---modal">
			<div class="modal---content" style="color:black">
				<h2 >Have a project you'd like to discuss?<span class="closeee">+</span></h2>

				<form name="contactform" method="post"  action="mail.php">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30" required>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30" required>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30" required>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30" required>
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

<script type="text/javascript">
	function signvalidation()
	{
		var Name= document.getElementById('Name').value;
		var LName= document.getElementById('LName').value;
		var Email= document.getElementById('Email').value;
		var User= document.getElementById('User').value;
		var Password= document.getElementById('Password').value;
		var Repeat= document.getElementById('Repeat').value;


		
		if (LName.length < 4)
		{
			alert('LastName should atleast be 4 characters');
			return false;
		}
		else if (Email.length < 4)
		{
			alert('Email should atleast be 4 characters');
			return false;
		}
		else if (User.length < 4)
		{
			alert('User should atleast be 4 characters');
			return false;
		}
		
		else
		{
			return true;
		}

	}

</script>

<script type="text/javascript">
	function signvalidationn()
	{
		var Name= document.getElementById('Name').value;
		
		var Password= document.getElementById('Password').value;
		


		if(Name.length < 4)
		{
			alert('Name should atleast be 4 characters');
			return false;
		}
		
		else if (Password.length < 4)
		{
			alert('Password should atleast be 4 characters');
			return false;
		}
		
		else
		{
			return true;
		}

	}

</script>

<script type="text/javascript">
	function signvalidationnn()
	{
		var first_name= document.getElementById('first_name').value;
		var last_name= document.getElementById('last_name').value;
		var email= document.getElementById('email').value;
		var telephone= document.getElementById('telephone').value;
		


		if(first_name.length < 4)
		{
			alert('Name should atleast be 4 characters');
			return false;
		}
		else if (last_name.length < 4)
		{
			alert('LastName should atleast be 4 characters');
			return false;
		}
		else if (email.length < 4)
		{
			alert('Email should atleast be 4 characters');
			return false;
		}
		else if (telephone.length < 10)
		{
			alert('Telephone should atleast be 4 characters');
			return false;
		}
		
		else
		{
			return true;
		}

	}

       

	</body>
</html>	


