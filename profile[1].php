<!DOCTYPE html>
<html>
	<head> <!-- For linking my css file, meta data, website title and icon-->
		<title> Among Music | Profile </title>
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
		<button class="btn" onclick="window.location.href='profile.php';"> <img src="images/profile.png" class="profile_img"/></button>
		
		<div id="myNav" class="overlay">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span style="color: #ff244f;">&times;</span></a>
		  <div class="overlay-content">
			<a href="index.php">Home</a>
			<a href="music.php">Music</a>
			<a href="contact.php">Contact</a>
		  </div>
		</div>
		<span style="font-size: 60px;cursor:pointer" onclick="openNav()">&#9776;</span>
			<div class="profilecontent">
				<div class="section1">
					<form method="post" id="UpdateUser">
					<div class ="row">
						<div class= "column">
							<label for="old_username"> Username </label>
						</div>
						<div class="column2">
							<input type="text" id="old_username" name="old_username" placeholder="Old Username...">
						</div>
					</div>
					<div class ="row">
						<div class= "column">
							<label for="new_username"> Password </label>
						</div>
						<div class="column2">
							<input type="text" id="new_username" name="new_username" placeholder="New Username...">
						</div>
					</div>
					
					<div class="row">
						<input type="submit" value="Update!">
					</div>
				</form>
				</div>
				<div class="section2">
					<form method="post" id="DeleteUser">
					<div class ="row">
						<div class= "column">
							<label for="delete_username"> Username </label>
						</div>
						<div class="column2">
							<input type="text" id="delete_username" name="delete_username" placeholder="Username...">
						</div>
					</div>
					<div class="row">
						<input type="submit" value="Delete!">
					</div>
				</form>
					
				</div>
				<div class="section3">
					<div class="UserDisplay" id="UserTitle">USERS</div><div class="PasswordDisplay" id="PasswordTitle">Passwords</div>
	
				</div>
				<button class="btn_logout" onclick="window.location.href='logout.php';"> Log Out </button>
			</div>		
		<h3> Johnathan Devine, &copy; Copyright 2022, all rights reserved </h3>
		<script src="main.js"></script>
	</body>
</html>

