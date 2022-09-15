<!-- Php involed for login form-->
<?php
	ob_start();
	session_start();
		$error = NULL;
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			require "13CSI_Assesment_Database_mysqli.php";
			$myusername = mysqli_real_escape_string($conn,$_POST['username']);
			$mypassword = mysqli_real_escape_string($conn,$_POST['password']);
			$query = "SELECT Username FROM Users WHERE Username = '$myusername' AND Password = '$mypassword'";
			$result = mysqli_query($conn,$query);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$count = mysqli_num_rows($result);
			if($count == 1) {
				$_SESSION['Form'] = $myusername;
				header("location:music.php");
			} else {
				$error = "Error! Your login name or password is wrong";
				}
		    }
	ob_end_flush();
?>
<!DOCTYPE html>
<html>
	<!-- meta data and link to css-->
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
		<link rel="icon" type="image/x-icon" href="images/icon.ico">
	</head>
	<body>
		<!-- background-->
		<div class="leftbackground"></div>
		<div class="rightbackground"></div>
		<!-- burger menu-->
		<button class="btn" onclick="window.location.href='login.php';"> <img src="images/profile.png" class="profile_img"/></button>
		<?php
			require_once("nav.php")
		?>
		<!-- login form-->
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
					<!-- link to sign up page-->
					<p><a href="signup.php">Don't have a Login?</a>
					<h2><?php echo $error; ?></h2>
				</form>
		</div>
		<h3> Johnathan Devine, &copy; Copyright 2022, all rights reserved </h3>
		<script src="main.js"></script>
	</body>
</html>

