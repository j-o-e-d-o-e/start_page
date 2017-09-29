<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
			include "../php/projects_head.php";
		?>
        <meta name="description" content="software development projects: web scraping"/>
        <link rel="stylesheet" href="css/scraping.css" type="text/css">
		<script src="js/scraping.js"></script>
    </head>  
    <body onload="startScraper();">
		<?php
			include "../php/projects_header.php";
			include "../php/mail.php";
		?>
		<section class="g box">
			<h2>
				web scraping
			</h2>
			<div class="div_icon">
				<i class="fa fa-search" aria-hidden="true"></i>
			</div>
			<?php
				include "../php/projects_nav_box.php";
			?>
			<div id="project">
				<h3 id="label">subreddits to choose:</h3>			
				<form class="ui-widget" id="r_form" onsubmit="return false">
					<table id="radios">
						<tr>
							<td><input type="radio" name="subreddit" value="java"> java</input></td>
							<td><input type="radio" name="subreddit" value="programming" checked> programming</input></td>
							<td><input type="radio" name="subreddit" value="python"> python</input></td>
						</tr>
						<tr>
							<td><input type="radio" name="subreddit" value="learnjava"> learnjava</input></td>
							<td><input type="radio" name="subreddit" value="learnprogramming"> learnprogramming</input></td>
							<td><input type="radio" name="subreddit" value="learnpython"> learnpython</input></td>
						</tr>
					</table>
				</form>
				<div id="output"></div>
			</div>
			<div id="info">
				<h3>
					description
				</h3>
				<p>
					This scraper returns the top ten submissions from one of the six suggested programming-related subreddits.
				</p>
				<p>
					Technically, it sends a get-request via jquery/ajax to php which forwards the string to python returning a json-object.
					It uses the reddit-api (praw) &amp is authorized via OAuth.
				</p>
				<h3>
					specifications
				</h3>
				<ul>
					<li>
						praw
					</li>
					<li>
						python
					</li>
				</ul>
				</h3>
				<h3>
					links/materials
				</h3>
				<ul>
					<li>
						<a href="https://github.com/j-o-e-d-o-e/web_scraping">github.com</a>
					</li>
				</ul>
			</div>
		</section>
		<?php
			include "../php/footer.php";
		?>
    </body>
</html>