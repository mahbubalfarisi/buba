<!DOCTYPE html>
<html>
  <title>About</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/w3.css">
  <link rel="stylesheet" href="./css/mainstyle.css">
  <link href="https://fonts.googleapis.com/css?family=Megrim|Montserrat:300" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <body class="w3-light-grey">

    <!-- !PAGE CONTENT! -->
    <div class="w3-main">
      <div class="w3-container w3-padding-16">
        <a href="./">
            <div class="w3-button w3-display-topleft" style="position: fixed; margin: 1rem 4rem; color: #fff; background-color: #317283; z-index: 995">
              <h5><b><i class="fa fa-arrow-circle-left fa-fw"></i> Home</b></h5>
            </div>
        </a>
      </div>
      <!-- Header -->
      <header class="w3-container w3-padding-16" style="padding-left: 64px; margin-top: 4rem;">
        <h3><b><i class="fa fa-users fa-fw"></i> About Me</b></h3>
      </header>

      <div class="w3-row-padding w3-margin-bottom" style="padding-left: 64px; padding-right: 64px;">
        <div class="w3-quarter">
          <div class="w3-container w3-teal w3-text-white w3-padding-16 w3-card-4">
            <div>
              <img src="./img/buba.jpg" style="width: 100%;">
            </div>
          </div>
        </div>
        <div class="w3-threequarter">
          <div class="w3-container w3-row-padding w3-white w3-padding-16" style="text-align: justify; padding-right: 40px; padding-left: 40px;">
            <h6>Dear you. Let me introduce myself.</h6>
            <h6>My name is <b>Mahbub Haq Al Farisi</b> and you can call me <b>Buba</b>. I am a web designer, front-end web developer, smartphone enthusiast, and a student who currently lived in Bandung, Indonesia.</h6>
            <h6>If you ask about me to my friends, they will tell you that I am a detail oriented, have INTJ personality, perfectionist, neat, clean, fragrant, love korean and calm music, love to play piano, love to eat shrimp, and a Danz Base player. I'll put on my UwU face when I see my girlfriend, Eunha, hamsters, and cats.</h6>
            <hr>
            <h6><b>Umm... Give me fried shrimp for more. I really appreciate your effort.</b></h6>
          </div>
        </div>
      </div>

      <header class="w3-container" style="padding-left: 64px; padding-top: 50px;">
        <h3><b><i class="fa fa-instagram fa-fw"></i> Photos</b></h3>
      </header>
    
      <div class="w3-row-padding w3-margin-bottom" style="padding-left: 64px; padding-right: 64px;">
        <?php
          require('./feedinsta.php');
        ?>
        <hr>
      </div>

      <!-- End page content -->
    </div>

  </body>
</html>