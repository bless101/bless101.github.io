<?php
session_start();
require_once('includes/bdd.php');
require_once('includes/menu.php');

$req = $bdd->prepare('SELECT * FROM evenement');
$req->execute();
while ($donnees = $req->fetch())
	{
		$id_eve = $donnees['EVE_ID'];
		$nom_eve = $donnees['EVE_NOM'];
		$dateheure_eve = $donnees['EVE_DATEHEURE'];
		$artiste_eve = $donnees['EVE_ARTISITE'];
		$ville_eve = $donnees['EVE_VILLE'];
		$lieu_eve = $donnees['EVE_LIEU'];	
	}				
?>

				
<!DOCTYPE html>
<!-- Spécifie un document HTML 5 -->
<html>
	<head>
		<!-- Entête de la page -->

		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/shop.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" charset="utf-8"></script>
		<link rel="stylesheet" href="css/shop.css"/>
		<script src="..../js/shop.js"></script> 
		
		<title> Tiagz </title>
	</head>

	<body>
	


		<form action="shop_php.php" method="post">
 
			<h2 class="event">UPCOMING EVENTS </h2>	
	
				<tr>
					<div class="Product-card">
	
						<td><?= $nom_eve ?></td>
						</br>
						<td><p> <?= $ville_eve ?> </p></td>
						<td><p>Venue: <?= $lieu_eve ?> </p></td>
						<td><p> Date et heure: <?=$dateheure_eve ?> </p> </td>
				
						<?php
						
							$req->closeCursor();
						?>
			
						</br>
						
						<div class="product-pic">
						</div>
				
						</br>
			
						<div class="product-colors">
							<span class="black active" data-color="#1e1e1e" data-pic="url(images/tiagzredphoto.jpg)"></span>
							<span class="white"  data-color="#f5f5f5" data-pic="url(images/tiagzredphoto.jpg)"></span>	
						</div>
	
						<div class="product-info">
							</br>
							<p><div class="product-name"><?= $artiste_eve ?></div></p>
							</br>
							<td><p><input type="number" name="art-<?= $id_eve ?>" id="art-<?= $id_eve ?>" min="0" max="5" value="0" /> ticket-s</p></td>	 
					
							<?php
								if (isset($_SESSION['id_mem']))
								{
									echo '<input class="product-button" type="submit" value="RESERVE"/>';
								}	
				
								else
								{
									echo '<button><a href="register.php">Register </a></button>';
								}
				
							?>
	
				</div>
				</div>		
	
				</tr>	
		</form>


	
 
 </div>
	<script>
	$(".product-colors span").click(function(){
	  $(".product-colors span").removeClass("active");
	  $(this).addClass("active");
	  $("body").css( "background",$(this).attr("data-color"));
	  $(".product-price").css("color",$(this).attr("data-color"));
	  $(".product-button").css("color",$(this).attr("data-color"));
	  $(".product-pic").css("background-image",$(this).attr("data-pic"));
	  });
	 </script> 
	 

 
 <div class="footer">
  <p>Copyright @ 2019 Tiagz USA, All rights reserved </p>
  <p>(1 666 587 0987)</p>
 </div>
	
	
	
	</body>
</html>