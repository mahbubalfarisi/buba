<!DOCTYPE html>
<html>
<title>Add Pokemon</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

  <?php
      $servername = "localhost";
      $username = "id2643351_bubabuba";
      $password = "bubabubabuba";
      $dbname = "id2643351_bubadex";

     // Create connection
     $conn = mysqli_connect($servername, $username, $password, $dbname);
     // Check connection
     if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
     }

     if (isset($_POST['submit'])) {
        $name = ($_POST['name']);
        $type = ($_POST['type']);
        $standard = ($_POST['standard']);
        $special = ($_POST['special']);
        $cp = ($_POST['cp']);
        $iv = ($_POST['iv']);
        $hp = ($_POST['hp']);

        $sql = "INSERT INTO pokecol (name, type, standatt, specatt, cp, iv, hp) VALUES ('$name', '$type', '$standard', '$special', '$cp', '$iv', '$hp')";
        echo "New record created successfully";

        if (!mysqli_query($conn, $sql)) {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
     }

     mysqli_close($conn);
  ?>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Buba's<br>Pokemon Go<br>Online Kit</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="./pokemon-go.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Showcase</a> 
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Add Pokemon</a> 
    <a href="./pokemon-go.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Delete Pokemon</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Battle Kit</a> 
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Buba's Pokemon Go Online Kit</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:20px" id="showcase">
    <h1 class="w3-xxxlarge"><b>Add Pokemon</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
  </div>
  
  <div class="w3-row-padding">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
       <div class="w3-section">
          <label>Name</label>
          <input class="w3-input w3-border" type="text" placeholder="Name" name="name" id="name"></p>
       </div>
       <div class="w3-section">
          <label>Type</label>
          <input class="w3-input w3-border" type="text" placeholder="Type" name="type" id="type"></p>
       </div>
       <div class="w3-section">
          <label>Standar Attack</label>
          <input class="w3-input w3-border" type="text" placeholder="Standard Attack" name="standard" id="standard"></p>
       </div>
       <div class="w3-section">
          <label>Special Attack</label>
          <input class="w3-input w3-border" type="text" placeholder="Special Attack" name="special" id="special"></p>
       </div>
       <div class="w3-section">
          <label>CP</label>
          <input class="w3-input w3-border" type="text" placeholder="CP" name="cp" id="cp"></p>
       </div>
       <div class="w3-section">
          <label>IV</label>
          <input class="w3-input w3-border" type="text" placeholder="IV" name="iv" id="iv"></p>
       </div>
       <div class="w3-section">
          <label>HP</label>
          <input class="w3-input w3-border" type="text" placeholder="HP" name="hp" id="hp"></p>
       </div>
       <button class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" type="submit" name="submit">
          <i class="fa fa-plus"></i> Add Pokemon
       </button>
    </form>
  </div>
</body>
</html>