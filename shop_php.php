<?php
require_once('includes/bdd.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>My Reservations</title>
		<link rel="stylesheet" href="css/song.css" />
	</head>
    
	<body>
		<h1 class="title">Reservations</h1>
			<form action="reservations.php" class="contenu" method="post">
				<?php
						$nb_produit = 0;
						$montant_total = 0;
						$req = $bdd->prepare('SELECT * FROM evenement WHERE EVE_ID =  ?');
						foreach($_POST as $cle => $valeur) 
				 {
						if (!empty($valeur) AND $valeur > 0)
					{
						$id_eve = substr($cle,4);
						$req->execute(array($id_eve));
						$donnees = $req->fetch();
						$req->closeCursor();

						$nom_eve = $donnees['EVE_NOM'];
						$id_eve = $donnees['EVE_ID'];
						$dateheure_eve = $donnees['EVE_DATEHEURE'];
						$artiste_eve = $donnees['EVE_ARTISITE'];
						$quantite_commandee_eve= $valeur;
						
						echo "<p>I'm pleased to let you know you are part of the 500 attendes for my virtual concert</p>";
						echo "<input type='hidden' name='$artiste_eve' name='$id_eve' value='$quantite_commandee_eve' />";
						echo "<p>when: $dateheure_eve</p>";
						echo "$nom_eve , x$quantite_commandee_eve ticket-s <br>";
						$nb_produit += 1;
						$montant_total += $id_eve*$quantite_commandee_eve;					
					}	
				 }
						
						if ($nb_produit == 0)						
					{
							echo "<p>Select at least one ticket</p>";
					}		
						else 
					{
							echo '<p>Tickets reserved: <strong>' . number_format($montant_total) . ' tickets</strong></p>';
							echo "<p>your zoom id is: 2367267437 and password: tanazlia</p>";
							echo "<p>The more tickets, the closer your chances of getting picked to meet Tiagz in person!</p>";
							echo "<p>take a screenshot of your login in details before leaving the page</p>";
							echo "<p>See you soon!!! 😎 </p>";
					}
				?>
			
				<p ><a href="javascript:history.back()">Return to shop...</a></p>
				<p ><a href="Your_Space_php.php">Return to your space...</a></p>
			</form>
		
	</body>
</html>



