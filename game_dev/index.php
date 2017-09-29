<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
			include "../php/projects_head.php";
		?>
        <meta name="description" content="software development projects: game dev"/>
		<link rel="stylesheet" href="../css/slides.css" type="text/css">
		<link rel="stylesheet" href="css/game_dev.css" type="text/css">
		<script src="../js/slides.js"></script>
    </head>  
    <body onload="getSlide(1);">
		<?php
			include "../php/projects_header.php";
			include "../php/mail.php";
		?>
		<section class="r box">
			<h2>
				game dev
			</h2>
			<div class="div_icon">
				<i class="fa fa-gamepad" aria-hidden="true"></i>
			</div>
			<?php
				include "../php/projects_nav_box.php";
			?>
			<div id="project">
				<p>
					Play "The Assassin" on 
					<a href="https://gamejolt.com/games/the_assassin/280607">gamejolt.com</a> or 
					<a href="https://joedoe.itch.io/the-assassin">itch.io</a>!
				</p>
				<div id="slideshow">
					<div class="slide">
						<img src="img/start.PNG">	
					</div>
					<div class="slide">
						<img src="img/city.PNG">
					</div>
					<div class="slide">
						<img src="img/place.PNG">
					</div>
					<div class="slide">
						<img src="img/fight.PNG">
					</div>
					<a id="prev" onclick="changeSlide(-1)">&#10094;</a>
					<a id="next" onclick="changeSlide(1)">&#10095;</a>
				</div><br>
				<div style="text-align:center">
					<span class="dot" onclick="getSlide(1)"></span> 
					<span class="dot" onclick="getSlide(2)"></span> 
					<span class="dot" onclick="getSlide(3)"></span>
					<span class="dot" onclick="getSlide(4)"></span> 
				</div>	
			</div>
			<div id="info">
				<h3>
					description
				</h3>
				<p>
					This minigame uses the game-development application framework "libGDX" &amp its ai-module for enemy steering/pathfinding.
					The overall goal is to develop some open-world rpg. Next step is to implement a sneak mode.
				</p>
				<p>				
					The chart below provides an overview of its classes &amp their interactions. For maps creation, the editor "Tiled" was used.
					For html deployment, google web toolkit was used. The game is published on gamejolt.com &amp itch.io.
				</p>
				<h3>
					specifications
				</h3>
				<ul>
					<li>
						libGDX
					</li>
					<li>
						java
					</li>
					<li>
						Tiled
					</li>
				</ul>
				</h3>
				<h3>
					links/materials
				</h3>
				<ul>
					<li>
						<a href="https://joedoe.itch.io/the-assassin">itch.io</a>
					</li>
					<li>
						<a href="https://gamejolt.com/games/the_assassin/280607">gamejolt.com</a>
					</li>
					<li>
						<a href="https://github.com/J-o-e-D-o-e/the_assassin">github.com</a>
					</li>
					<li>
						<a href="downloads/overview.pdf" target="_blank">overview</a>
					</li>
				</ul>
			</div>
		</section>
		<?php
			include "../php/footer.php";
		?>
    </body>
</html>