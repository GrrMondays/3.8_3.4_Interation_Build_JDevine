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
		<title> Among Music | Music </title>
		<meta charset="UTF-8">
		<meta name="description" content="Graemme's databases that holds music data that him and his 
		close circle of family and friends are able to login into.">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="keywords" content="Graemme, Electronic Music, Among Music">
		<meta name="author" content="Johno Devine">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="stylesheet.css"/>
		<link rel="icon" type="image/x-icon" href="images/icon.ico">
		<!-- style because this page will be able to scroll-->
		<style>
			body{
				overflow-y: scroll;
			}
		</style>
	</head>
	<body>
		<!-- checks if the user is an admin or user-->
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
		<p class="musictitle"> Songs by Title & Artist Descending </p>
		<a href="music2.php"><p class="musicswitch"> Songs by Genre & Artist Ascending </p></a>
		<!-- total time text -->
		<?php
				require "13CSI_Assesment_Database_mysqli.php";
						
				$TotalQuery = ("SELECT  SUM(`Seconds`) OVER() as 'Total_Duration' from SongDetails");
							
				$result = mysqli_query($conn,$TotalQuery);
						
				$output = mysqli_fetch_array($result);
				echo "<p class='totaltime'> Total Time: " . $output['Total_Duration']. "s </p>";
					
						?>
		<!-- php for the query-->
				<?php
					require "13CSI_Assesment_Database_mysqli.php";
					$query = ("SELECT s.Song_ID, s.Title, g.Genre as 'Genre1', y.Genre as 'Genre2', f.Genre as 'Genre3', a.Artist as 'Artist1', n.Artist as 'Artist2', l.Album, l.Image, s.Size, s.Seconds 
								From SongDetails AS s 
								INNER JOIN Album l ON s.Album_FK = l.Album_ID 
								JOIN Song2Genre j ON s.Song_ID = j.Song_ID 
								JOIN Genre g ON g.Genre_FK = j.Genre_FK 
								JOIN Genre y ON y.Genre_FK = j.Genre2_FK 
								JOIN Genre f ON f.Genre_FK = j.Genre3_FK 
								JOIN Song2Artist e ON s.Song_ID = e.Song_ID 
								JOIN Artist a ON a.Artist_FK = e.Artist_FK 
								JOIN Artist n ON n.Artist_FK = e.Artist2_FK 
								ORDER BY s.Title DESC, a.Artist DESC");
					$result = mysqli_query($conn,$query);
					if (!$result){
						echo "failed: try again later";
					}
					else{
						while($output = mysqli_fetch_array($result))
						{
				?>
					<!-- will loop this layout for each song-->
					<div class="flip-card">
					  <div class="flip-card-inner">
						<div class="flip-card-front">
						  <img src="images/<?php echo $output['Image']; ?>" alt="Album Cover" style="width:200px;height:200px;">
						</div>
						<div class="flip-card-back">
						  <h1><?php echo $output['Title']; ?></h1> 
							<p> -------- </p>
							<p> Album: </p>
						  <p><?php echo $output['Album']; ?></p> 
							<p> -------- </p>
							<p> Artist(s): </p>
							<p>  <?php echo $output['Artist1']; ?> <br> <?php echo $output['Artist2']; ?></p>
							<p> -------- </p>
							<p> Genre(s): </p>
							<p>  <?php echo $output['Genre1']; ?> <br> <?php echo $output['Genre2']; ?> <br> <?php echo $output['Genre3']; ?></p>
							<p> -------- </p>
						  <p><?php echo $output['Size']; ?> Kb | <?php echo $output['Seconds'];?>'s</p>
						</div>
					  </div>
					</div>
				<?php 
						}
					}
				?>
		<script src="main.js"></script>
	</body>
</html>

