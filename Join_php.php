<?php
session_start();
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
		<title> Join.php</title>
	</head>


	<body>
		<!-- Corps de la page -->

	
		<?php
			if (isset($_POST['pseudo']) AND isset($_POST['password'])) 
			{	
				require_once('includes/bdd.php');
				
				
				$req = $bdd->prepare('SELECT MEM_ID, MEM_MOTDEPASSE FROM membre WHERE MEM_PSEUDO =  ?');
				$req->execute(array($_POST['pseudo']));
				$donnees = $req->fetch();
				$req->closeCursor();
				
				if (!$donnees)
				{
					echo '<p>Vous n\'êtes pas encore enregistré? <a href="join.php">Cliquez ici...</a></p>';
				} 
				else
				{
					if ($_POST['password'] == $donnees['MEM_MOTDEPASSE'])
					{
					session_start();
					$_SESSION['id_mem'] = $donnees['MEM_ID'];
					header('Location: Your_Space_php.php');		
					}
					
					else
					{
						echo '<p>wrong password or pseudo. <a href="javascript:history.back()">Retour</a></p>';
					}
				}
			} 
			
		?>

	</body>
</html>
