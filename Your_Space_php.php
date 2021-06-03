<?php
session_start();
require_once('includes/bdd.php');

$req = $bdd->prepare('SELECT MEM_NOM, MEM_PRENOM, MEM_PSEUDO FROM membre WHERE MEM_ID = ?');
$req->execute(array($_SESSION['id_mem'])); 

$donnees = $req->fetch();
$req->closeCursor();

$name = $donnees['MEM_PRENOM'];
$surname = $donnees['MEM_NOM'];
$pseudo = $donnees['MEM_PSEUDO'];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/song.css" />
		<title>Your Space</title>
	</head>
	
    <body id="membre">				
		<div class="title">Member Space</div>
 
		</br>
		<div class="contenu">
		<ul>
			<p>Hey !</p>
			<li><a href="profil.php">Edit your profile</a></li>
			<li><a href="index.php">Listen to my lastest tracks</a></li>
			<li><a href="song.php">Connect with me</a></li>
			<li><a href="shop.php">Reserve an online event</a></li>
			<li><a href="disconnect.php">...log out</a></li>	
		</ul>	
		</div>
	</body>
</html>