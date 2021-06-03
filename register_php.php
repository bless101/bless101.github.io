<?php
session_start();
?>
<!DOCTYPE html>
<!-- Spécifie un document HTML 5 -->

<html>
	<head>
		<!-- En-tête de la page -->

		<meta charset="utf-8" />
		
		<title>register.php</title>
	</head>
	
	<body>
	
	<?php



if (isset($_POST['name']) AND isset($_POST['surname']) AND isset($_POST['email']) AND isset($_POST['pseudo']) AND isset($_POST['password']) )
				
			{
				require_once('includes/bdd.php');

				$req = $bdd->prepare('SELECT MEM_ID FROM membre WHERE MEM_EMAIL =  ?');
				$req->execute(array($_POST['email']));
				$donnees = $req->fetch();
				$req->closeCursor();	

				if (!$donnees)
				{	

					if ($_POST['password'] == $_POST['password_repeat'])
					{
						
						
						$req = $bdd->prepare('INSERT INTO membre (MEM_NOM, MEM_PRENOM, MEM_EMAIL, MEM_PSEUDO, MEM_MOTDEPASSE) VALUES(:name, :surname, :email, :pseudo, :password)');

						$req->execute(array(
						
							'name' => $_POST['name'],

							'surname' => $_POST['surname'],

							'email' => $_POST['email'],	
								
							'pseudo' => $_POST['pseudo'],

							'password' => $_POST['password'],
							
							));
							
						
						header('Location: join.php');
					} 
						else			
						{
							echo '<p>Les mots de passe ne correspondent pas. <a href="javascript:history.back()">Retour</a></p>';
						}
				} 
						else
						{
						echo '<p>Cette adresse courriel existe déjà. <a href="javascript:history.back()">Retour</a></p>';
						}
					
			} 
					


		?>
	
	</body>	
  </html>