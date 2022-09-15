<!DOCTYPE html>
<html>
	<head> <!-- For linking my css file, meta data, website title and icon-->
		<title> Among Music | Login </title>
		<meta charset="UTF-8">
		<meta name="description" content="Graemme's databases that holds music data that him and his 
		close circle of family and friends are able to login into.">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="keywords" content="Graemme, Electronic Music, Among Music">
		<meta name="author" content="Johno Devine">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="stylesheet.css"/>
	</head>
	<body>
		<div class="leftbackground"></div>
		<div class="rightbackground"></div>
		<button class="btn" onclick="window.location.href='login.php';"> <img src="images/profile.png" class="profile_img"/></button>
		<div id="myNav" class="overlay">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span style="color: #ff244f;">&times;</span></a>
		  <div class="overlay-content">
			<a href="index.php">Home</a>
			<a href="music.php">Music</a>
			<a href="contact.php">Contact</a>
		  </div>
		</div>
		<span style="font-size: 60px;cursor:pointer" onclick="openNav()">&#9776;</span>
		<div class="login_text"><h2> Login </h2></div>
		<div class="content"> 
				<form method="post" id="Form">
					<div class ="row">
						<div class= "column">
							<label for="username"> Username </label>
						</div>
						<div class="column2">
							<input type="text" id="username" name="username" placeholder="Username...">
						</div>
					</div>
					<div class ="row">
						<div class= "column">
							<label for="password"> Password </label>
						</div>
						<div class="column2">
							<input type="password" id="password" name="password" placeholder="Password...">
						</div>
					</div>
					
					<div class="row">
						<input type="submit" value="Log In!">
					</div>
					<p><a href="signup.php">Don't have a Login?</a>
					<h2><?php echo $error; ?></h2>
				</form>
		</div>
		<h3> Johnathan Devine, &copy; Copyright 2022, all rights reserved </h3>
		<script src="main.js"></script>
	</body>
</html>

