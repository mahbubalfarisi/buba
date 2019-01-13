<?php
  include("./config.php");
  session_start();
  
  $error = "";
  $isErr;

  if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 
      
    $myusername = mysqli_real_escape_string($db,@$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,@$_POST['password']); 
        
    $sql = "SELECT * FROM logindata WHERE username = '$myusername' and pass = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    
    $count = mysqli_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row
          
    if($count == 1) {
      if (isset($_POST['password']) && isset($_POST['username'])) {
        if($_POST['password']==$mypassword && $_POST['username']==$myusername) {
          // session_register("myusername");
          $_SESSION['login_user'] = $myusername;

          header("location: ./bebski/");
          $_SESSION['isLogged'] = true;
        }
      }
    }  else {
      $error = "Your Username or Password is wrong, please try again.";
      $isErr = true;
    }
  }

   mysqli_close($db);
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>
  <!-- Layout -->
  <script src="./js/jquery.min.js" charset="utf-8"></script>
  <script src="./js/jquery-3.1.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>

  <!-- CSS -->
  <!-- <link href="./css/bootstrap.min.css" rel="stylesheet" > -->
  <link rel="stylesheet" href="./css/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <!-- End of CSS -->

  <!-- Meta tag -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- End of Meta tag -->

  <!-- Gambar tab browser -->
  <link rel="shortcut icon" href="./img/favicon.ico?v=2"/>
  <!-- End of Gambar tab browser -->

  <!-- Bootstrap CSS -->
  <link href="./css/bootstrap.min.css" rel="stylesheet" >
  <link href="./css/bootstrap.css" rel="stylesheet" >
  <link href="./css/bootstrap-theme.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="./css/stylelogin.css" rel="stylesheet">
    <style>
      body,h1,h2,h3,h4,h5,h6 {
          font-family: "Lato", sans-serif;
      }
      body, html {
          height: 100%;
          color: #777;
          line-height: 1.8;
      }
      body {
        overflow: hidden;
      }

      .bgimg {
          background-attachment: fixed;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          background-image: url("./img/login.png");
          min-height: 100%;
      }

      .w3-wide {
          letter-spacing: 10px;
      }
      
      .w3-hover-opacity {
          cursor: pointer;
      }

      .buba-bottom {
        position: absolute;
        bottom: 0;
      }

      .buba-input{
        padding: 8px;
        padding-left: 20px;
        display: block;
        border: 1px solid #ccc;
        width: 100%
      }

      .buba-input-box {
        border-radius: 50px;
        -moz-border-radius: 50px;
        -webkit-border-radius: 50px;
      }

      .login-container {
        width: 30%;
      }
      
      /* alert if username or password isn't correct */
      .alert {
        padding: 20px;
        background-color: #f44336;
        color: white;
        width: 60%;
        text-align: center;
        visibility: hidden;
      }

      @media only screen and (max-width: 768px) {
        .login-container {
          width: 80%;
        }

        .alert {
          width: 100%;
        }
      }

      .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
      }

      .closebtn:hover {
        color: black;
      }

      .alShow { 
        visibility: visible;
        -webkit-animation: fadein 0.5s;
        animation: fadein 0.5s;
      }

      @-webkit-keyframes fadein {
        from {bottom: 30px; opacity: 0;} 
        to {bottom: 0; opacity: 1;}
      }

      @keyframes fadein {
        from {bottom: 30px; opacity: 0;}
        to {bottom: 0; opacity: 1;}
      }

      /* bubbles */
      #bubbles {
        padding: 100px 0;
      }

      .bubble {
        width: 60px;
        height: 60px;
        background: #009688;
        position: absolute;
      }

      .x1 {
          left: 30%;
          -webkit-transform: scale(0.9);
          -moz-transform: scale(0.9);
          transform: scale(0.9);
          opacity: 0.4;
          -webkit-animation: rotatingcube 5s linear infinite, moveclouds 15s linear infinite, sideWays 4s ease-in-out infinite alternate;
          -moz-animation: rotatingcube 5s linear infinite, moveclouds 15s linear infinite, sideWays 4s ease-in-out infinite alternate;
          -o-animation: rotatingcube 5s linear infinite, moveclouds 15s linear infinite, sideWays 4s ease-in-out infinite alternate;
      }

      .x2 {
          left: 47%;
          -webkit-transform: scale(0.6);
          -moz-transform: scale(0.6);
          transform: scale(0.6);
          opacity: 0.4;
          -webkit-animation: rotatingcube 5s linear infinite, moveclouds 9s linear infinite, sideWays 2s ease-in-out infinite alternate;
          -moz-animation: rotatingcube 5s linear infinite, moveclouds 9s linear infinite, sideWays 2s ease-in-out infinite alternate;
          -o-animation: rotatingcube 5s linear infinite, moveclouds 9s linear infinite, sideWays 2s ease-in-out infinite alternate;
      }
      .x3 {
          left: 70%;
          -webkit-transform: scale(0.8);
          -moz-transform: scale(0.8);
          transform: scale(0.8);
          opacity: 0.3;
          -webkit-animation: rotatingcube 5s linear infinite, moveclouds 20s linear infinite, sideWays 4s ease-in-out infinite alternate;
          -moz-animation: rotatingcube 5s linear infinite, moveclouds 20s linear infinite, sideWays 4s ease-in-out infinite alternate;
          -o-animation: rotatingcube 5s linear infinite, moveclouds 20s linear infinite, sideWays 4s ease-in-out infinite alternate;
      }
      .x4 {
          left: 80%;
          -webkit-transform: scale(0.75);
          -moz-transform: scale(0.75);
          transform: scale(0.75);
          opacity: 0.35;
          -webkit-animation: rotatingcube 5s linear infinite, moveclouds 18s linear infinite, sideWays 2s ease-in-out infinite alternate;
          -moz-animation: rotatingcube 5s linear infinite, moveclouds 18s linear infinite, sideWays 2s ease-in-out infinite alternate;
          -o-animation: rotatingcube 5s linear infinite, moveclouds 18s linear infinite, sideWays 2s ease-in-out infinite alternate;
      }
      .x5 {
          left: 90%;
          -webkit-transform: scale(0.8);
          -moz-transform: scale(0.8);
          transform: scale(0.8);
          opacity: 0.3; 
          -webkit-animation: rotatingcube 5s linear infinite, moveclouds 7s linear infinite, sideWays 1s ease-in-out infinite alternate;
          -moz-animation: rotatingcube 5s linear infinite, moveclouds 7s linear infinite, sideWays 1s ease-in-out infinite alternate;
          -o-animation: rotatingcube 5s linear infinite, moveclouds 7s linear infinite, sideWays 1s ease-in-out infinite alternate;
      }
      .x6 {
          left: 55%;
          -webkit-transform: scale(0.8);
          -moz-transform: scale(0.8);
          transform: scale(0.8);
          opacity: 0.3; 
          -webkit-animation: rotatingcube 5s linear infinite, moveclouds 10s linear infinite, sideWays 1s ease-in-out infinite alternate;
          -moz-animation: rotatingcube 5s linear infinite, moveclouds 10s linear infinite, sideWays 1s ease-in-out infinite alternate;
          -o-animation: rotatingcube 5s linear infinite, moveclouds 10s linear infinite, sideWays 1s ease-in-out infinite alternate;
      }
      .x7 {
          left: 60%;
          -webkit-transform: scale(0.8);
          -moz-transform: scale(0.8);
          transform: scale(0.8);
          opacity: 0.3; 
          -webkit-animation: rotatingcube 5s linear infinite, moveclouds 8s linear infinite, sideWays 2s ease-in-out infinite alternate;
          -moz-animation: rotatingcube 5s linear infinite, moveclouds 8s linear infinite, sideWays 2s ease-in-out infinite alternate;
          -o-animation: rotatingcube 5s linear infinite, moveclouds 8s linear infinite, sideWays 2s ease-in-out infinite alternate;
      }
      .x8 {
          left: 40%;
          -webkit-transform: scale(0.8);
          -moz-transform: scale(0.8);
          transform: scale(0.8);
          opacity: 0.3; 
          -webkit-animation: rotatingcube 5s linear infinite, moveclouds 12s linear infinite, sideWays 1s ease-in-out infinite alternate;
          -moz-animation: rotatingcube 5s linear infinite, moveclouds 12s linear infinite, sideWays 1s ease-in-out infinite alternate;
          -o-animation: rotatingcube 5s linear infinite, moveclouds 12s linear infinite, sideWays 1s ease-in-out infinite alternate;
      }

      @-webkit-keyframes moveclouds { 
          0% { 
              top: 1000px;
          }
          100% { 
              top: -500px;
          }
      }

      @-webkit-keyframes sideWays { 
          0% { 
              margin-left:0px;
          }
          100% { 
              margin-left:50px;
          }
      }

      @-webkit-keyframes rotatingcube {
        0% { 
              transform:rotate(0deg);
          }
          100% { 
              transform:rotate(359deg);
          }
      }

      @-moz-keyframes moveclouds {     
          0% { 
              top: 1000px;
              transform:rotate(0deg);
          }

          100% { 
              top: -500px;
              transform:rotate(359deg);
          }
      }

      @-moz-keyframes sideWays {
          0% {
              margin-left:0px;
          }
          100% {
              margin-left:50px;
          }
      }

      @-moz-keyframes rotatingcube {
        0% { 
              transform:rotate(0deg);
          }
          100% { 
              transform:rotate(359deg);
          }
      }

      @-o-keyframes moveclouds {
          0% { 
              top: 1000px;
              transform:rotate(0deg);
          }
          100% { 
              top: -500px;
              transform:rotate(359deg);
          }
      }

      @-o-keyframes sideWays {
          0% {
              margin-left:0px;
          }
          100% {
              margin-left:50px;
          }
      }

      @-o-keyframes rotatingcube {
        0% { 
              transform:rotate(0deg);
          }
          100% { 
              transform:rotate(359deg);
          }
      }

    </style>
</head>

<body>
  <div class="bgimg w3-display-container">
    <!-- rotating cube bubbles -->
    <div id="bubbles">
        <div class="bubble x1"></div>
        <div class="bubble x2"></div>
        <div class="bubble x3"></div>
        <div class="bubble x4"></div>
        <div class="bubble x5"></div>
        <div class="bubble x6"></div>
        <div class="bubble x7"></div>
        <div class="bubble x8"></div>
    </div>
    <div class="w3-display-topleft" style="padding: 12px;">
      <a href="./">
        <div class="w3-btn w3-hover-black" style="color: #317283; z-index: 995;">
          <h5><b><i class="fa fa-arrow-circle-left fa-fw"></i> Home</b></h5>
        </div>
      </a>
    </div>
    <div class="w3-display-middle login-container">
      <h4 style="text-align: center;">Please login first</h4>
      <form action=" " method="POST">
        <div class="w3-row-padding" style="margin:0 -16px 0px -16px;">
          <label>Username</label>
          <input class="buba-input buba-input-box" type="text" placeholder="Your username" name="username">
          <label>Password</label>
          <input class="buba-input buba-input-box" type="password" placeholder="Your password" name="password">
        </div>
          <button id='login-button' class="w3-btn w3-teal w3-right w3-section w3-hover-black" value='Login' type="submit">Login</button>
      </form>
    </div>
    <div id="errormessage" class="alert <?php if ($isErr == true) echo 'alShow'; ?> buba-bottom">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      <?php
        echo $error;
        $isErr = false;
      ?>
    </div>
  </div>
</body>
</html>