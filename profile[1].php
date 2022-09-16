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
		<!-- background-->
		<div class="leftbackground"></div>
		<div class="rightbackground"></div>
		<!-- profile button-->
		<button class="btn" onclick="window.location.href='profile.php';"> <img src="images/profile.png" class="profile_img"/></button>
		<!-- burger menu-->
		<?php
			require_once("nav.php")
		?>
			<div class="profilecontent">
				<div class="section1">
					<!-- update user table-->
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
							<label for="new_username"> New Username </label>
						</div>
						<div class="column2">
							<input type="text" id="new_username" name="new_username" placeholder="New Username...">
						</div>
					</div>
					
					<div class="row">
						<input type="submit" value="Update!">
					</div>
				</form>
					<!-- php for update table-->
					<?php
						require "13CSI_Assesment_Database_mysqli.php";
						
						$ExistingUserID = isset($_POST["old_username"]) ? $_POST["old_username"]: "";
						$NewUserID = isset($_POST["new_username"]) ? $_POST["new_username"]: "";
						
						$UpdateQuery = "UPDATE Users SET Username = '$NewUserID' WHERE Username = '$ExistingUserID'";
						if ($ExistingUserID == "")
							{
								echo "";
							}
						elseif (mysqli_query($conn,$UpdateQuery))
							  {
								  echo "<h3>Record Updated</h3>";
							  }
						else
							  {
								  echo "<h3>Error!</h3>";
							  }
					?>
				</div>
				<div class="section2">
					<!-- delete user form-->
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
					<!-- delete user table php-->
					<?php
						require "13CSI_Assesment_Database_mysqli.php";
						
						$UserID = isset($_POST["delete_username"]) ? $_POST["delete_username"]: "";
						
						$DeleteQuery = "DELETE FROM Users WHERE Username = '$UserID'";
						if ($UserID == "")
							{
								echo "";
							}
						elseif (mysqli_query($conn,$DeleteQuery))
							  {
								  echo "<h3>Record Deleted</h3>";
							  }
						else
							  {
								  echo "<h3>Error!</h3>";
							  }
					?>
				</div>
				<div class="section3">
					<!-- user display table-->
					<div class="UserDisplay" id="UserTitle">USERS</div><div class="PasswordDisplay" id="PasswordTitle">Passwords</div>
					<!-- php for user display-->
					<?php
						require "13CSI_Assesment_Database_mysqli.php";
						
						$query = ("SELECT * FROM Users");
							
						$result = mysqli_query($conn,$query);
						
						while ($output = mysqli_fetch_array($result))
						{
							 echo "<div class='UserDisplay'>" . $output['Username'] . "</div>";
							echo "<div class='PasswordDisplay'>" . $output['Password'] . "</div>";
						}
						
						?>
				</div>
				<button class="btn_logout" onclick="window.location.href='logout.php';"> Log Out </button>
			</div>
		<h3> Johnathan Devine, &copy; Copyright 2022, all rights reserved </h3>
		<script src="main.js"></script>
	</body>
</html>

