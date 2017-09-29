<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
			include "../php/projects_head.php";
		?>
        <meta name="description" content="software development projects: web server"/>
    </head>  
    <body>
		<?php
			include "../php/projects_header.php";
			include "../php/mail.php";
		?>
		<section class="o box">
			<h2>
				web server
			</h2>
			<div class="div_icon">
				<i class="fa fa-server" aria-hidden="true"></i>
			</div>
			<nav class="nav_box"></nav>
			<div id="info" style="display: block;">
				<h3>
					description
				</h3>
				<p>
					This website runs on a raspberry pi using the apache http server.
					Due to its location in a residential area, the ip-address changes from time to time.
					In order to keep the name-server automatically updated, the dynamic dns-provider "no-ip" is used.
				</p>
				<p>
					For front-end development, html/css as well javascript &amp its libraries jquery and ajax are used.
					For back-end development, php is used. 
				</p>
				<h3>
					specifications
				</h3>
				<ul>
					<li>
						apache http server
					</li>
					<li>
						html/css
					</li>
					<li>
						javascript/jquery/ajax
					</li>
					<li>
						php
					</li>
					<li>
						raspberry pi 2 model b
					</li>
				</ul>
				</h3>
			</div>
			</div>
		</section>
		<?php
			include "../php/footer.php";
		?>
    </body>
</html>