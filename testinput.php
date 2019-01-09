<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Add New Pokemon</title>
      <link rel="shortcut icon" href="../favicon.ico">
      <link rel="stylesheet" type="text/css" href="./css/base.css" />
      <link rel="stylesheet" type="text/css" href="./css/w3.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <?php
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "bubadex";

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
   </body>
</html>