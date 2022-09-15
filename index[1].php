<?php
	session_start();
	if(!isset($_SESSION['Form'])){
		header("location:login.php");
		}
	else{
		$User = $_SESSION['Form'];
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head> <!-- For linking my css file, meta data, website title and icon-->
		<!-- This the head where meta data is stored-->
		<title> Among Music | Home </title>
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
		<!-- banner for the website -->
		<div class="banner"></div>
		<!-- Checks if the user is Graeme or not -->
		<?php
		if(!isset($_SESSION['Form'])){
			 ?>
			<button class="btn" onclick="window.location.href='login.php';"> <img src="images/profile.png" class="profile_img" alt="profile image"/></button>
			<?php
		}
		elseif ($_SESSION['Form'] != 'Graeme'){
			?>
			<button class="logout_btn" onclick="window.location.href='logout.php';"> Log Out </button>
			<?php
		}

		else {
			?>
			<button class="btn" onclick="window.location.href='profile.php';"> <img src="images/profile.png" class="profile_img" alt="profile image"/></button>
			<?php
		}
			 ?>
		<!-- Burger Menu code -->
		<?php
			require_once("nav.php")
		?>
		<!-- Search bar code -->
		<div class="wrap">
			<div class="search">
				<input type="text" class="searchTerm" placeholder="What are you looking for?">
				<button type="submit" class="searchButton">
					<i class="fa fa-search"> <img src="images/search.png" alt="magnifying glass"/></i>
				</button>
			</div>
		</div>
		<!-- heading -->
		<h2 class="title"> Among <span style="color: #CC0000">M</span>us<span style="color: #CC0000">ic</span></h2>
		<!-- footer -->
		<h3> Johnathan Devine, &copy; Copyright 2022, all rights reserved </h3>
		<script src="main.js"></script>
	</body>
</html>
