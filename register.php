<?php
session_start();
require_once('includes/bdd.php');
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
		<title> Register</title>		
	</head>
	
	<body>
		<form action="register_php.php" method="post">
		
		<div class="login-box">
			<h1>REGISTER AN ACCOUNT</h1>
			
		<div class="textbox">
				<i class="fas fa-user"></i>
				<label for="name"></label> 
				<input type="text" placeholder="name" name="name" id="name" required>
		</div>	
		
		<div class="textbox">
				<i class="far fa-user"></i>
				<label for="surname"></label>
				<input type="text" placeholder="surname" name="surname" id="surname" required>
		</div>
		
		<div class="textbox">
				<i class="fas fa-at"></i>
				<label for="email"></label>
				<input type="email" placeholder="email" name="email" id="email" required>
		</div>
		
		<div class="textbox">
				<i class="fas fa-user-circle"></i>
				<label for="pseudo"></label>
				<input type="text" placeholder="pseudo" name="pseudo" id="pseudo" required>
		</div>
		
		<div class="textbox">
				<i class="fas fa-lock"></i>
				<label for="password"></label>
				<input type="password" name="password" minlength="8" id="password" required placeholder="password" >
		</div>
		
		<div class="textbox">
				<i class="fas fa-lock"></i>
				<label for="password_repeat"></label>
				<input type="password" name="password_repeat" minlength="8" id="password_repeat" required placeholder="password_repeat" >
		</div>
		
		
		<input class="btn" type="submit" name="register" value="register"> 
		<br> <br> <br>
		<a class="a"href="index.php"><input class="btn" type="button" name="return" value="return"></a>
	
	</form>
 
 
		 <div class="footer">
		  <p>Copyright @ 2019 Tiagz USA, All rights reserved </p>
		  <p>(1 666 587 0987)</p>
		 </div>
	
	</body>
</html>