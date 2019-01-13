<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/w3.css">
    <link rel="stylesheet" href="./css/mainstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Megrim|Montserrat:300" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="./img/favicon.ico">
	<script src="./js/bubalamp.js"></script>
	<head>
		<title>Buba</title>
    </head>
	<!-- Body -->
    <body>
    	<div id="notif" class="shownotiflamp w3-display-middle">
			<h2>Don't forget to turn the light on :)</h2>
		</div>
		<div id="homex2" class="bgimg">
			<div id="homex">
				<div class="usual">
					<?php
						require('./buba.svg');
					?>	
				</div>
				<div class="w3-center w3-container min-porto">
					<?php
						require('./buba-min.svg');
					?>
					<h3>Portfolio</h3>
					<hr>
				</div>
				<div class="w3-center min-about">
					<?php
						require('./about.svg');
					?>
					<h3>About</h3>
					<hr>
				</div>
				<div class="w3-center min-blog">
					<?php
						require('./blog.svg');
					?>
					<h3>Blog</h3>
					<hr>
				</div>
				<div class="w3-center min-contact">
					<?php
						require('./contact.svg');
					?>
					<h3>Contact</h3>
					<hr>
				</div>
		  	</div>
		</div>
	</body>
	<!-- End of Body -->
</html>