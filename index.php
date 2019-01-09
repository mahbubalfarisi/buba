<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/w3.css">
    <link rel="stylesheet" href="./css/mainstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Megrim|Montserrat:300" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="./img/favicon.ico">
	<style type="text/css">

	</style>

	<script type="text/javascript">
		function toglamp() {
		    var element = document.getElementById("_780833856");
   			element.classList.toggle("fillamp");
   			element.classList.toggle("fillampoff");

   			var homeel = document.getElementById("homex");
   			homeel.classList.toggle("dark");

   			var homeel2 = document.getElementById("homex2");
   			homeel2.classList.toggle("dark");
   			homeel2.classList.toggle("clickof");

   			var homeel2 = document.getElementById("notif");
   			homeel2.classList.toggle("shownotiflamp");
		};
	</script>

	<head>
		<title>Buba</title>
    </head>

		<div class="w3-container">
			<!-- Modal Contact -->
		  	<div id="modal-contact" class="w3-modal">
		    	<div class="bgimg w3-modal-content w3-animate-top w3-card-4">
		      		<header class="w3-container w3-teal"> 
		        		<span onclick="document.getElementById('modal-contact').style.display='none'" class="w3-button w3-display-topright">&times;</span>
		        		<h2>Modal Header</h2>
		      		</header>
		      		<div class="w3-container">
		        		<p>Some text..</p>
		        		<p>Some text..</p>
		      		</div>
		      		<footer class="w3-container w3-teal">
		        		<p>Modal Footer</p>
		      		</footer>
		    	</div>
		  	</div>
		  	<!-- End of Modal Contact -->

		  	<!-- Modal Porto -->
		  	<div id="modal-porto" class="w3-modal">
		    	<div class="w3-modal-content w3-animate-top w3-card-4">
		      		<header class="w3-container w3-teal"> 
		        		<span onclick="document.getElementById('modal-porto').style.display='none'" class="w3-button w3-display-topright">&times;</span>
		        		<h2>Modal Header</h2>
		      		</header>
		      		<div class="w3-container">
		        		<p>Some text..</p>
		        		<p>Some text..</p>
		      		</div>
		      		<footer class="w3-container w3-teal">
		        		<p>Modal Footer</p>
		      		</footer>
		    	</div>
		  	</div>
		  	<!-- End of Modal Porto -->
		</div>

	<!-- Body -->
    <body>
    	<div id="notif" class="shownotiflamp w3-display-middle">
			<h2>Don't forget to turn the light on :)</h2>
		</div>
		<div id="homex2">
			<div id="homex" class="bgimg w3-container w3-display-container w3-animate-opacity w3-text-black">
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
			  	<div class="usual w3-display-bottomleft w3-padding-large" style="position: fixed;">
			    	<h6>Designed by Buba</h6>
			  	</div>
		  	</div>
		</div>
	</body>
	<!-- End of Body -->
</html>