<!DOCTYPE html>
<html lang="en">
    <head>
	    <title>
            projects by joedoe
        </title>
        <meta charset="UTF-8">
		<meta http-equiv="content-type" content="text/html"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="content" content="en"/>
        <meta name="description" content="software development projects"/>
        <meta name="keywords" content="software development, projects java, python, libGDX, C#, mySQL"/>
		<meta name="author" content="joedoe"/>
		<meta name="copyright" content="joedoe"/>
		<link rel="icon" href="img/favicon.ico" type="image/x-icon">
       	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/default.css" type="text/css">
		<link rel="stylesheet" href="css/modal.css" type="text/css">
		<link rel="stylesheet" href="css/index.css" type="text/css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="js/index.js"></script>
		<script src="js/mail.js"></script>
		<script src="js/footer.js"></script>
    </head>  
    <body>
        <header>
            <h1>
				projects <span>by joedoe</span>
			</h1>
            <!--NAVIGATION-->
            <ul id ="nav">
				<li>
					<a href="https://github.com/j-o-e-d-o-e" title="github">
						<i class="fa fa-github"></i>
					</a>
				</li>
				<li>
					<a id="mail" title="mail">		
						<i class="fa fa-envelope"></i>
					</a>
				</li>
                <li>
                    <i class="icon fa fa-navicon">
						<!--DROPDOWN-MENU-->
						<ul>
							<li>
								<input  type="checkbox" class="check" value="r" checked>
									<span id="span_r">java</span>
								</input>
							</li>
							<li>
								<input type="checkbox" class="check" value="g" checked>
									<span id="span_g">python</span>
								</input>
							</li>
							<li>
								<input type="checkbox" class="check" value="b" checked>
									<span id="span_b">c#</span>
								</input>
							</li>
							<li>
								<input type="checkbox" class="check" value="o" checked>
									<span id="span_o">misc</span>
								</input>
							</li> 
						</ul>
					</i>
                </li>       
            </ul>
        </header>
		<?php
				include "php/mail.php";
		?>
        <div id="container">
			<section class="g box" onclick="location.href='web_scraping/index.php';">
				<h2>
                    web scraping
                </h2>
				<div class="div_icon">
					<i class="fa fa-search" aria-hidden="true"></i>
                </div>
				<div class="border"></div>
				<p>
					Scraper for the social media aggregator "reddit".
				</p>
                <div class="tags_container">
					<span class="tag">python</span>
				</div>
            </section>
			<section class="r box" onclick="location.href='game_dev/index.php';">
				<h2>
                    game dev
                </h2>
				<div class="div_icon">
					<i class="fa fa-gamepad" aria-hidden="true"></i>
                </div>
				<div class="border"></div>
				<p>
					Inspired by the commodore 
					64-classics "mafia".
				</p>
				<div class="tags_container">
					<span class="tag">java</span>
					<span class="tag">libGDX</span>
				</div>
            </section>
<!--
            <section class="o box" onclick="location.href='web_server/index.php';">                
				<h2>
                    web server
                </h2>
				<div class="div_icon">
					<i class="fa fa-server" aria-hidden="true"></i>
                </div>
				<div class="border"></div>
				<p>
					This website runs on a home server.
				</p>
				<div class="tags_container">
					<span class="tag">apache</span>
					<span class="tag">raspberry</span>
				</div>					
            </section>
-->
            <section class="o box" onclick="location.href='plane_tracker/index.php';">                
				<h2>
                    plane tracker
                </h2>
				<div class="div_icon">
					<i class="fa fa-plane" aria-hidden="true"></i>
                </div>
				<div class="border"></div>
				<p>
					Pattern matching &amp object recognition.
				</p>
				<div class="tags_container">
					<span class="tag">sql</span>
					<span class="tag">raspberry</span>
					<span class="tag">python</span>	
				</div>					
            </section>
            <section class="b box" onclick="location.href='desktop_app/index.php';">
				<h2>
                    desktop app
                </h2>
				<div class="div_icon">
					<i class="fa fa-desktop" aria-hidden="true"></i>
                </div>
				<div class="border"></div>
				<p>
					Editing &amp archiving application.
				</p>
				<div class="tags_container">
					<span class="tag">c#</span>
				</div>
            </section>	
        </div>
		<?php
			include "php/footer.php";
		?>
    </body>
</html>