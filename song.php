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
		<link rel="stylesheet" href="css/song.css"/>
		<title> Tiagz </title>
	</head>


	<body>		
		<?php
			include('includes/menu.php');
		?>
		
		<div class="title">Find me on...</div>
		<div class="contenu" >
				</br>
				<ul>
					<li><a href="https://open.spotify.com/artist/4DMkrFIqGXLycc4YLYTn1i"target="_blank">Spotify</a></li></br></br>
					<li><a href="https://www.youtube.com/user/ItsYmcmbTG/videos"target="_blank">Youtube</a></li></br></br>
					<li><a href="https://music.apple.com/ca/artist/tiagz/1309349994"target="_blank">Itune</a></li></br></br>
					<li><a href="https://soundcloud.com/tiagocia"target="_blank">Soundcloud</a></li></br></br>
					<li><a href="https://www.tiktok.com/@iamtiagz?lang=en"target="_blank">Tiktok</a></li></br></br>
				</ul>	
				</div>

			 
		<div class="footer">
			<p>Copyright @ 2019 Tiagz USA, All rights reserved </p>
			 <p>(1 666 587 0987)</p>
		</div>
	
	</body>
	
</html>