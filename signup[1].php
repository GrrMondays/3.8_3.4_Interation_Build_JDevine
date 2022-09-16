<?php
	session_start();
	if(!isset($_SESSION['Form'])){
		}
	else{
		$User = $_SESSION['Form'];
	}
?>
<!DOCTYPE html>
<html>
	<head> <!-- For linking my css file, meta data, website title and icon-->
		<title> Among Music | Sign Up </title>
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
		<!-- background-->
		<div class="leftbackground"></div>
		<div class="rightbackground"></div>
		<!-- admin profile or user log out-->
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
		<!-- sign up form-->
		<div class="login_text"><h2> Sign Up </h2></div>
		<div class="content"> 
				<form method="post" name="Form">
					<div class ="row">
						<div class= "column">
							<label for="add_username"> Username </label>
						</div>
						<div class="column2">
							<input type="text" id="add_username" name="add_username" placeholder="Username...">
						</div>
					</div>
					<div class ="row">
						<div class= "column">
							<label for="add_password"> Password </label>
						</div>
						<div class="column2">
							<input type="password" id="add_password" name="add_password" placeholder="Password...">
						</div>
					</div>
					
					<div class="row">
						<input type="submit" value="Sign Up!">
					</div>
					<p><a href="login.php">Want To Login?</a>
				</form>
			<!-- php for the form-->
						<?php 
							require "13CSI_Assesment_Database_mysqli.php";
						
							$UserID = isset($_POST['add_username']) ? $_POST['add_username']: "";
							$PW = isset($_POST['add_password']) ? $_POST['add_password']: "";
						
		  					$insertquery = "INSERT INTO Users( Username, Password ) VALUES( '$UserID', '$PW')";
							
							if ($UserID == "")
							{
							}
							elseif (mysqli_query($conn,$insertquery))
							{
								header("location: login.php");
							}
							else {
							}
						?>
		</div>
		<h3> Johnathan Devine, &copy; Copyright 2022, all rights reserved </h3>
		<script src="main.js"></script>
	</body>
</html>

