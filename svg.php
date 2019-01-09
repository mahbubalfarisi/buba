<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Megrim|Montserrat:300" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<head>
		<title>Buba</title>
    </head>

    <!-- CSS -->
    <style>
		body,h1 {font-family: "Raleway", sans-serif}
		body, html {height: 100%}
		.bgimg {
		    min-height: 100%;
		    background-position: center;
		    background-size: cover;
		    background-color: #bbbba0;
		}

		.contact, .blog, .photos, .porto {
			transition: transform .2s;
			opacity: 1;
		}

		.contact:hover {
			transform: scale(1.02);
			opacity: 1;
			z-index: 999;
		}

		.blog:hover {
			transform: scale(1.02);
			opacity: 1;
			z-index: 999;
		}

		.photos:hover {
			transform: scale(1.02);
			opacity: 1;
			z-index: 999;
		}

		.porto:hover {
			transform: scale(1.02);
			opacity: 1;
			z-index: 999;
		}

		ul, li {
			list-style-type: none;
		}

		.lightwidget {
			width:100%;
			border:0;
			display: inline-block;
			padding: 10rem;
			padding-top: 3rem;
			padding-bottom: 3rem;
			margin-bottom: 0;
		}

		.lightwidget__image {
			width: 100%;
			border:0;
			padding: 0.2rem;
		}

		.lightwidget__caption {
			display: none;
		}

		.lightwidget__photo {
			margin: 0;
		}
	</style>
	<!-- End of CSS -->

		<div class="w3-container">
			<!-- Modal Contact -->
		  	<div id="modal-contact" class="w3-modal">
		    	<div class="w3-modal-content w3-animate-top w3-card-4">
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

		  	<!-- Modal Photo -->
		  	<div id="modal-photo" class="w3-modal" style="width: 100%; height: 100%; padding-top: 0;">
			    <div class="w3-animate-top w3-card-4">
		      		<header class="w3-container" style="background-color: #317283; color: #fff; position: fixed;">
		        		<h2>Buba's Feed</h2>
		      		</header>
	        			<span onclick="document.getElementById('modal-photo').style.display='none'" class="w3-button w3-fourth w3-display-topright" style="position: fixed; background-color: #000; color: #fff; margin: 2rem">&times;</span>
		      		<div style="background-color: #d4cccd">
		        		<!-- LightWidget WIDGET -->
		        		<!-- <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/c57669c9022c5292ad20c665b64596ce.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe> -->
				    	<?php
							require('./feedinsta.php');
						?>
					</div>
		      		<footer class="w3-container w3-display-bottomleft" style="background-color: #317283; color: #fff;">
		        		<p>That's It. See more: <a href="http://www.instagram.com/buba_alf" target="blank">@buba_alf</a></p>
		      		</footer>
		    	</div>
		  	</div>
		  	<!-- End of Modal Photo -->

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
		<div class="bgimg w3-display-container w3-animate-opacity w3-text-black">
		  	<div class="w3-display-topleft w3-xlarge">
		    	<?php
					require('./header.php');
				?>
		  	</div>
		  	<div class="w3-display-middle">
				<?php
					require('./buba.svg');
				?>
		  	</div>
		  	<div class="w3-display-bottomleft w3-padding-large">
		    	<?php
					require('./ttd.svg');
				?>
				<h4>Designed by Buba</h4>
		  	</div>
		</div>
	</body>
	<!-- End of Body -->
</html>