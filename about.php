<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About - Buba</title>
  <link rel="stylesheet" href="./css/w3.css">
  <link rel="stylesheet" href="./css/mainstyle.css">
  <link href="https://fonts.googleapis.com/css?family=Megrim|Montserrat:300" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="./img/favicon.ico">

  <style type="text/css">
.centered-top-container, .centered-top-placeholder {
    background: #ffffff;
}

.centered-top-placeholder {
    display: none;
}

article, aside, details, figcaption, figure, footer, header, hgroup, main, nav, section, summary {
    display: block;
}

.centered-bottom, .centered-top {
    width: 922px;
}

.centered-top {
    -webkit-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    padding-bottom: 24px;
    padding-top: 36px;
}
.centered-bottom, .centered-top {
    margin: 0 auto;
}
.centered-top {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    position: relative;
}
.centered-top {
    padding-bottom: 12px;
    padding-top: 12px;
}
.centered-bottom, .centered-top {
    max-width: 100%;
}

.back-button-container, .hamburger-menu-container {
    margin-right: 48px;
}
</style>
  <body>
  <!-- !PAGE CONTENT! -->
  <div class="centered-top-placeholder"></div>
    <header class="centered-top-container" role="banner">
      <div class=" w3-container centered-top">
        <div class="hamburger-menu-container">
          <a href="./">
            <div class="w3-button" style="color: #317283; z-index: 995">
              <h5><b><i class="fa fa-arrow-circle-left fa-fw"></i> Home</b></h5>
            </div>
          </a>
          <div class="blog-name">
            <h3><b><i class="fa fa-users fa-fw"></i> About Me</b></h3>
          </div>
        </div>
      </div>
    </header>

    <div class="w3-main centered-bottom" id="main" role="main" tabindex="-1">
      <div class="w3-container w3-padding-16">

        <div class="w3-col m4 w3-hide-small">
          <div class="w3-container w3-text-white" style="padding: 0">
            <div>
              <img src="./img/buba.jpg" style="width: 100%;">
            </div>
          </div>
        </div>
        <div class="w3-col m8">
          <div class="w3-container w3-white" style="text-align: justify;">
            <h6>Dear you.</h6>
            <h6>My name is <b>Mahbub Haq Al Farisi</b> and you can call me <b>Buba</b>. I am a front-end web developer, smartphone enthusiast, and a student who currently lived in Bandung, Indonesia.</h6>
            <h6>Keywords that describe me: INTJ, piano, shrimp, Danz Base, Eunha, design, web, hamsters, and cats.</h6>
            <hr>
            <h6><b>Umm... Give me fried shrimp for more. I really appreciate your effort.</b></h6>
          </div>
        </div>
      </div>

      <div class="w3-container w3-padding-16" style="padding-top: 50px;">
        <h3><b><i class="fa fa-instagram fa-fw"></i> Instagram Account</b></h3>
        <h5>I'am an active Instagram user, so you can contact me there.</h5>
      </div>
    
      <div class="w3-row-padding w3-margin-bottom">
        <?php
          require('./feedinsta.php');
        ?>
        <hr>
      </div>

      <!-- End page content -->
    </div>

  </body>
</html>