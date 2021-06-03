<?php
session_start();
require_once('includes/bdd.php');


$req = $bdd->prepare('SELECT * FROM membre WHERE MEM_ID = ?');
$req->execute(array($_SESSION['id_mem']));

$donnees = $req->fetch();
$req->closeCursor();

$surname = $donnees['MEM_NOM'];	
$name = $donnees['MEM_PRENOM'];	
$pseudo = $donnees['MEM_PSEUDO'];
$email = $donnees['MEM_EMAIL'];
$password = $donnees['MEM_MOTDEPASSE'];


?>

<!DOCTYPE html>
<html>
	<head>
		<!-- En-tête de la page -->

		<meta charset="utf-8" />
		
		
		<link rel="stylesheet" href="css/song.css" />
		
		
		<title>Editer mon profil </title>
	</head>
    <body>
        <h1 class="title">Edit your profile</h1>
		
	<div class="contenu">	
	
        <form action="profil_php.php" method="post">
			
			<label id="champs" for="name">Name:</label><br>
			<input type="text" name="name" id="name" value="<?= $name ?>" required  placeholder ="name"/><br><br>
			
			<label id="champs" for="surname"> Surname: </label><br>
			<input type="text" name="surname" id="surname" value="<?= $surname ?>" required autofocus placeholder ="surname"/><br><br>
			
			<label id="champs" for="pseudo">Pseudo:</label><br>
			<input type="text" name="pseudo" id="pseudo" value="<?= $pseudo ?>" required  placeholder ="pseudo"/><br><br>

			<label id="champs" >Email:</label><br>
			<input type="email" name="email" id="email" value="<?= $email ?>" required placeholder ="exemple@domaine.com"/><br><br>

			<label id="champs" for="password">New Password:</label><br>
			<input type="password" name="password" minlength="8" id="password" value="<?= $password ?>" required placeholder ="au moins 8 caractères"/><br><br>

			<label id="champs" for="password_repeat">Confirm your password:</label><br>
			<input type="password" name="password_repeat" minlength="8" id="password_repeat" value="<?= $password ?>" required  placeholder ="au moins 8 caractères"/><br><br>

			<input type="checkbox" required name="boutons" id="conditions" value="conditions" />
			<label class="soustitre" for="conditions">I have taken note of the modification of my data</label><br><br>
			
			
			<div >
				<input  type="reset" value="Annuler"/>
				<input  type="submit" value="Mettre à jour" /> <a href="Your_Space_php.php" > </a>
				<a href="delete.php"><button>Delete my account</button></a>" 
			</div>			
			<br><br>	
		
		<p><a href="Your_Space_php.php">Go back to your Space</a></p>
		
	</div>	
		
		</form>		
	</body>
</html>