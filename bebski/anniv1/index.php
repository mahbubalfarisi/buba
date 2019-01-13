<?php
   include('../../session.php');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php
			require('./script-anniv.php');
		?>
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/animate.css">
		<link rel="stylesheet" href="../css/templatemo-style.css">

		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
	</head>
	<body class="loading">
		<!-- Navigation Section -->
		<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
			<div class="container">
				<!-- navbar header -->
				<div class="navbar-header">
				   <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        <span class="icon icon-bar"></span>
				        <span class="icon icon-bar"></span>
				        <span class="icon icon-bar"></span>
				   </button>
				</div>
				<div class="collapse navbar-collapse">
				   	<ul class="nav navbar-nav navbar-right">
				        <li><a href="../" class="smoothScroll" style="color: #fff">Home</a></li>
				        <li><a href="../../logout.php" class="smoothScroll" style="color: #fff">Sign Out</a></li>
				   	</ul>
				</div>
			</div>
		</div>
		<?php
			require('./icongen.php');
		?>
		<?php
			require('./stories.php');
		?>
		<?php
			require('./video-anniv.php');
		?>
		<?php
			require('./stats.php');
		?>
		<?php
			require('./message-anniv.php');
		?>
		<?php
			require('./open-stories-anniv.php');
		?>
		<?php
			require('./footer-anniv.php');
		?>
		<script src="./js/imagesloaded.pkgd.min2.js"></script>
		<script src="./js/TweenMax.min2.js"></script>
		<script src="./js/demo2.js"></script>
	</body>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.parallax.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/custom.js"></script>
</html>
