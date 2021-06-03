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
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
		<link rel="stylesheet" href="css/style.css"/>
		<title> Tiagz </title>
	</head>

	<body >
		<div id="entete"> Tiagz </div>	
		
			<div class="contenu2">
			
				<audio id="myaudio">
					<source src="./videos/abcd.mp3" type="audio/mpeg">
				</audio>

				<button type="button" id="playBtn">
					<i class="fas fa-play-circle"></i>
				</button>

				<button type="button" id="pauseBtn">
					<i class="fas fa-pause-circle"></i>
				</button>

				<div class="songIcons">
				   <i id="a" class="fas fa-music"></i>
					<i id="b" class="fas fa-music"></i>
					<i id="c" class="fas fa-music"></i>
					<i id="d" class="fas fa-music"></i>
					<i id="e" class="fas fa-music"></i>
				</div>

			</div>

		<a  href="video.php"><button class="more">I want more!!!</button></a>

		<div id="contenu"> 
			<p id="hello" data-label="
				Lorem ipsum dolor sit amet, consectetur adipiscing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi

			"></p>
			<script>
				const htmlP = document.getElementById("hello");
				const txt = htmlP.dataset.label;
				let i = 0 ;
				function showLetters()
				{
				  let timeOut ;
				  if(i < txt.length)
				{
				 htmlP.innerHTML += `<span>${txt[i]}</span>` ;
				 timeOut = setTimeout(showLetters,50)
				 i++
				}
				else
				{
				 clearTimeout(timeOut);
				 console.log("end")
				}
				}
				showLetters();
			</script>

			<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
			
				<script>
					$(document).ready(() => {
					// when we click on play button do this ===>>
							$("#playBtn").on("click", () => {
							$("#myaudio")[0].play();
							$("#playBtn").fadeOut(400);
							$("#pauseBtn").fadeIn(400);
							$(".contenu2").css({
								"border-radius": "0%"
							});

							// add anim class
							$(".songIcons").addClass("animClass");
						});
						
						// when we click on pause button do this ===>>
							$("#pauseBtn").on("click", () => {
							$("#myaudio")[0].pause();
							$("#playBtn").fadeIn(400);
							$("#pauseBtn").fadeOut(400);
							$(".contenu2").css({
								"border-radius": "50%"
							});
							// remove anim class
							$(".songIcons").removeClass("animClass");
						});
						// when audio file is end do this ===>
						$("#myaudio").on("ended", () => {
							$("#myaudio")[0].pause();
							$("#pauseBtn").fadeOut(400);
							$("#playBtn").fadeIn(400);
							$(".contenu2").css({
								"border-radius": "50%"
							});
							// remove anim class
							$(".songIcons").removeClass("animClass");
						});
					});
				</script>




		</div>

			<div class="footer">
			  <p>Copyright @ 2019 Tiagz USA, All rights reserved </p>
			  <p>(1 666 587 0987)</p>
			 </div>


	</body>
	
</html>	