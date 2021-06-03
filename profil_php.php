<?php
session_start();

if (isset($_POST['surname']) AND isset($_POST['name']) AND isset($_POST['pseudo']) AND isset($_POST['email']) AND isset($_POST['password']) AND isset($_POST['password_repeat']))
{
	require_once('includes/bdd.php');
	
	
	$req = $bdd->prepare('SELECT MEM_ID FROM membre WHERE MEM_EMAIL =  ? AND MEM_ID <> ?');
	$req->execute(array($_POST['email'],$_SESSION['id_mem']));
	$donnees = $req->fetch();
	$req->closeCursor();

	if (!$donnees)
	{		
		if ($_POST['password'] == $_POST['password_repeat'])
		{

			$req = $bdd->prepare('UPDATE membre SET MEM_NOM = :surname, MEM_PRENOM = :name, MEM_PSEUDO = :pseudo, MEM_EMAIL = :email, MEM_MOTDEPASSE = :password WHERE MEM_ID = :id');
			$req->execute(array(
				'surname' => $_POST['surname'],
				'name' => $_POST['name'],
				'pseudo' => $_POST['pseudo'],
				'email' => $_POST['email'],
				'password' => $_POST['password'],
				'id' => $_SESSION['id_mem']
				));
				
			header('Location: Your_Space_php.php');
		}
		else
		{
			echo 'Les mots de passe ne correspondent pas. <a href="javascript:history.back()">Retour</a>';
		}
		} 
		else
		{
		echo '<p>Cette adresse courriel existe déjà. <a href="javascript:history.back()">Retour</a></p>';
		}
}
		else
		{
			echo 'Vous devez remplir tous les champs. <a href="javascript:history.back()">Retour</a>';
		}
?>