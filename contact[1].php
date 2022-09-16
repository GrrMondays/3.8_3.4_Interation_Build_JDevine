<?php
	session_start();
	if(!isset($_SESSION['Form'])){
		header("location: login.php");
		}
	else{
		$User = $_SESSION['Form'];
	}
?>
<!DOCTYPE html>
<html>
	<!-- meta data and link to css-->
	<head> <!-- For linking my css file, meta data, website title and icon-->
		<title> Among Music | Contact </title>
		<meta charset="UTF-8">
		<meta name="description" content="Graemme's databases that holds music data that him and his 
		close circle of family and friends are able to login into.">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="keywords" content="Graemme, Electronic Music, Among Music">
		<meta name="author" content="Johno Devine">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="stylesheet.css"/>
		<link rel="icon" type="image/x-icon" href="images/icon.ico">
	</head>
	<body>
		<!-- background-->
		<div class="leftbackground"></div>
		<div class="rightbackground"></div>
		<!-- checks if the user logged in is an admin or not-->
		<?php
		if(!isset($_SESSION['Form'])){
			 ?>
			<button class="btn" onclick="window.location.href='login.php';"> <img src="images/profile.png" class="profile_img"/></button>
			<?php
		}
		elseif ($_SESSION['Form'] != 'Graeme'){
			?>
			<button class="logout_btn" onclick="window.location.href='logout.php';"> Log Out </button>
			<?php
		}

		else {
			?>
			<button class="btn" onclick="window.location.href='profile.php';"> <img src="images/profile.png" class="profile_img"/></button>
			<?php
		}
			 ?>
		<!-- burger menu-->
		<?php
			require_once("nav.php")
		?>
		<?php
				require "13CSI_Assesment_Database_pdo.php";
		?>
		<!-- Contact Form-->
		
		<h2 class='contacttitle'> Contact Us! </h2>
		<div class="contact"> 
				<form action="connect.php" method="post" name="Form" onsubmit="return validateForm()">
					<div class ="row">
						<div class= "column">
							<label for="firstname"> First Name </label>
						</div>
						<div class="column2">
							<input type="text" id="firstname" name="firstname" placeholder="First Name...">
						</div>
					</div>
					<div class ="row">
						<div class= "column">
							<label for="lastname"> Last Name </label>
						</div>
						<div class="column2">
							<input type="text" id="lastname" name="lastname" placeholder="Last Name...">
						</div>
					</div>
					<div class ="row">
						<div class= "column">
							<label for="email"> Email </label>
						</div>
						<div class="column2">
							<input type="text" id="email" name="email" placeholder="Email Address...">
						</div>
					</div>
					<div class ="row">
						<div class= "column">
							<label for="message"> Message </label>
						</div>
						<div class="column2">
							<textarea type="message" id="message" name="message" placeholder="Message..."></textarea>
						</div>
					</div>
					<div class="row">
						<input type="submit" value="Submit">
					</div>
				</form>
		</div>
		<h3> Johnathan Devine, &copy; Copyright 2022, all rights reserved </h3>
		<script src="main.js"></script>
	</body>
</html>

