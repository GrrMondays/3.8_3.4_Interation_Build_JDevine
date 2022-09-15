<!DOCTYPE html>
<html>
	<head> <!-- For linking my css file, meta data, website title and icon-->
		<title> Among Music | Home </title>
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
		<div class="banner"></div>
		<div id="myNav" class="overlay">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span style="color: #ff244f;">&times;</span></a>
		  <div class="overlay-content">
			<a href="index.php">Home</a>
			<a href="music.php">Music</a>
			<a href="contact.php">Contact</a>
		  </div>
		</div>
		<span style="font-size: 60px;cursor:pointer" onclick="openNav()">&#9776;</span>
		
		<div class="wrap">
			<div class="search">
				<input type="text" class="searchTerm" placeholder="What are you looking for?">
				<button type="submit" class="searchButton">
					<i class="fa fa-search"> <img src="images/search.png"/></i>
				</button>
			</div>
		</div>
		<h2 class="title"> Among <span style="color: #CC0000">M</span>us<span style="color: #CC0000">ic</span></h2>
		<h3> Johnathan Devine, &copy; Copyright 2022, all rights reserved </h3>
		<script src="main.js"></script>
	</body>
</html>
