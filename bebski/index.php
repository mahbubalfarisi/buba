<?php
   include('../session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="Bebski Page">
<meta name="author" content="Buba">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Bebski Page</title>
<link rel="shortcut icon" href="../img/favicon.ico">
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/animate.css">
<link rel="stylesheet" href="./css/templatemo-style.css">

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- PRE LOADER -->
<div class="preloader">
     <div class="spinner">
          <span class="spinner-rotate"></span>
     </div>
</div>


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
                    <li><a href="../" class="smoothScroll">Home</a></li>
                    <li><a href="../logout.php" class="smoothScroll">Sign Out</a></li>
               </ul>
          </div>

     </div>
</div>


<!-- Home Section -->
<section id="home" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <div class="home-img"></div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <div class="home-thumb">
                         <div class="section-title">
                              <h1 class="wow fadeInUp" data-wow-delay="0.6s">Hello, <strong><?php echo $myusername; ?></strong></h1>
                              <p class="wow fadeInUp" data-wow-delay="0.9s">Please choose one of these menus</p>
                              
                              <a href="./anniv1" class="wow fadeInUp smoothScroll section-btn btn btn-success" data-wow-delay="1.4s" style="width: 100%">#1 Anniversary</a>
                              <a href="./birthday20" class="wow fadeInUp smoothScroll section-btn btn btn-success" data-wow-delay="1.4s" style="width: 100%">Kichan's 20th Birthday</a>         
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>

<!-- SCRIPTS -->
<script src="./js/jquery.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery.parallax.js"></script>
<script src="./js/smoothscroll.js"></script>
<script src="./js/wow.min.js"></script>
<script src="./js/custom.js"></script>

</body>
</html>