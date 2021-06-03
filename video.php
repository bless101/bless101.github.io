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
		<meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
		<title>Tiagz</title>
		<meta name="description" content=" awesome video channel.">
		<meta name="viewport" content=width="device-width, initial-scale">
		<link rel="stylesheet" href="css/video.css"/>
		<script src="https://kit.fontawesome.com/f1b6953b88.js" crossorigin="anonymous"></script>
	</head>
	
	<body>
		<div class="wrapper">
	
			<section class="top_section">
				<header>
					<h1>Tiagz</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					<a href="https://youtu.be/BLeIHkKqB0U" target="_blank"><button>Watch Now</button></a>
				</header>
			</section> <!--End Header Section-->
			
			<section id="content_section1">
				<div class="playlist-one">
					<h4 class="playlist-title"> My  Songs</h4>
					<div class="videos">
					
						<div class="video" style="background-image:url(./images/tiagzz.jpg)">
							<a href="https://www.youtube.com/watch?v=BLeIHkKqB0U"><i class="fas fa-play-circle"></i></a>
						</div>

						<div class="video" style="background-image:url(images/tiagzz2.jpg)">
							<a href="https://www.youtube.com/watch?v=M5ZxOsuU5tQ"><i class="fas fa-play-circle"></i></a>
						</div>
						
						<div class="video" style="background-image:url(images/tiagzz3.jpg)">
							<a href="https://www.youtube.com/watch?v=Ljux9mkZJf8"><i class="fas fa-play-circle"></i></a>
						</div>
						
						<div class="video" style="background-image:url(images/tiagzz4.jpg)">
							<a href="https://www.youtube.com/watch?v=W1Hcxco7E8M"><i class="fas fa-play-circle"></i></a>
							
						</div>
						
						<div class="video" style="background-image:url(images/tiagzz5.jpg)">
							<a href="https://www.youtube.com/watch?v=AF4TPAABuc0"><i class="fas fa-play-circle"></i></a>
						</div>
						
						<div class="video" style="background-image:url(images/tiagzz6.jpg)">
							<a href="https://www.youtube.com/watch?v=gMGCkk7t9-s"><i class="fas fa-play-circle"></i></a>
						</div>
						
						<div class="video" style="background-image:url(images/tiagzz7.jpg)">
							<a href="https://www.youtube.com/watch?v=xKdPk-KAMnA"><i class="fas fa-play-circle"></i></a>
						</div>
						
						<div class="video" style="background-image:url(images/tiagzz8.jpg)">
							<a href="https://www.youtube.com/watch?v=yUthNnWUAHc"><i class="fas fa-play-circle"></i></a>
						</div>	
						
					</div>	
				</div>
			</section>
				
				<section id="content_section2">
				<div class="playlist-two">
					<h4 class="playlist-title"> Vlogs</h4>
					<div class="videos">
						<div class="video" style="background-image:url(./images/vlog1.jpg)">
							<a href="https://www.youtube.com/watch?v=tLFcr3mk-1E&t=147s"><i class="fas fa-play-circle"></i></a>
						</div>

						<div class="video" style="background-image:url(images/vlog2.jpg)">
							<a href="https://www.youtube.com/watch?v=IkVcdOwllpc"><i class="fas fa-play-circle"></i></a>
						</div>
						
						<div class="video" style="background-image:url(images/vlog3.jpg)">
							<a href="https://www.youtube.com/watch?v=7TPj_yTWBu0"><i class="fas fa-play-circle"></i></a>
						</div>
						
						<div class="video" style="background-image:url(images/vlog4.jpg)">
							<a href="https://www.youtube.com/watch?v=_aHmTgURMHE"><i class="fas fa-play-circle"></i></a>
						</div>
						
						<div class="video" style="background-image:url(images/vlog5.jpg)">
							<a href="https://www.youtube.com/watch?v=uHsDstteLPg"><i class="fas fa-play-circle"></i></a>
						</div>
						
						<div class="video" style="background-image:url(images/vlog6.jpg)">
							<a href="https://www.youtube.com/watch?v=c2FSnSlQadY"><i class="fas fa-play-circle"></i></a>
						</div>
						
						<div class="video" style="background-image:url(images/vlog7.jpg)">
							<a href="https://www.youtube.com/watch?v=19-Aiq25pUQ"><i class="fas fa-play-circle"></i></a>
						</div>

						<div class="video" style="background-image:url(images/vlog8.jpg)">
							<a href="https://www.youtube.com/watch?v=WrANeuncnf4"><i class="fas fa-play-circle"></i></a>
						</div>	
						
					</div>	
				</div>
			</section>
		</div> 
 
<script type="text/javascript" src="./jquery/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="./venobox/venobox.min"></script>
 
 
 <div class="footer">
  <p>Copyright @ 2019 Tiagz USA, All rights reserved </p>
  <p>(1 666 587 0987)</p>
 </div>
 
 
	</body>
</html>