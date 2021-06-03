<?php
session_start();
require_once('includes/bdd.php');
require_once('includes/menu.php');
?>
<!DOCTYPE html>
<!-- Spécifie un document HTML 5 -->

<html>
	<head>
		<!-- Entête de la page -->
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/join.css"/>
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/f1b6953b88.js" crossorigin="anonymous"></script>
		<title> Join </title>
	</head>

	<body>
		<form action="Join_php.php" method="post">
			<div class="login-box">

				<h1>LOGIN TO YOUR ACCOUNT</h1>
				
					<div class="textbox">
						<i class="fas fa-user"></i>
						<label for="pseudo"></label> 
						<input type="text" placeholder="pseudo" name="pseudo" required>
					</div>	
			
					<div class="textbox">
						<i class="fas fa-unlock-alt"></i>
						<label for="password"></label>
						<input type="password" placeholder="password" name="password" required>
					</div>
			
						<input class="btn" type="submit" name="login" value="login"> 
	
		</form>
		
			<div id="sidemenu">
			<ul>
				<li><a class="a"href="index.php">Home</a></li>
				<li><a class="b"href="video.php">Video</a></li>
				<li><a class="c"href="song.php">Song</a></li>
				<li><a class="d"href="About_Tiagz.php">Who_is_Tiagz</a></li>
				<li><a class="e"href="Shop.php">Shop</a></li>
				<li><a class="f"href="join.php">Join</a></li>
			 </ul>
			 <div>
 
	<div class ="login">
	<a class="a"href="join.php">LOGIN</a>  <br> OR <br> <a class="a"href="register.php">REGISTER</a>
	</div>
 
 <div class="footer">
  <p>Copyright @ 2019 Tiagz USA, All rights reserved </p>
  <p>(1 666 587 0987)</p>
 </div>
	
	</body>
</html>