<!DOCTYPE html>
<html>
<title>Buba's Pokemon Go Online Kit</title>
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

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Buba's<br>Pokemon Go<br>Online Kit</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Showcase</a> 
    <a href="./add-pokemon.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Add Pokemon</a> 
    <a onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white" id="toggle">Delete Pokemon</a> 
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
    <h1 class="w3-xxxlarge"><b>Showcase</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <?php
      $servername = "localhost";
      $username = "id2643351_bubabuba";
      $password = "bubabubabuba";
      $dbname = "id2643351_bubadex";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
        die("Connection failed: ".mysqli_connect_error());
      }

      $sql = "SELECT * FROM pokecol";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        echo "<table class='w3-table-all' id='poketab'>";
        echo "<thead>";
        echo "<tr class='w3-black w3-hover-red'>";
        echo "<th onclick='sortTable(0)'>Name</th>";
        echo "<th onclick='sortTable(1)'>Type</th>";
        echo "<th>Standar Attack</th>";
        echo "<th>Special Attack</th>";
        echo "<th>CP</th>";
        echo "<th>IV</th>";
        echo "<th>HP</th>";
        echo "</tr>";
        echo "</thead>";

        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr class='w3-hover-green'>";
          echo "<td>".$row["name"]."</td>";
          echo "<td>".$row["type"]."</td>";
          echo "<td>".$row["standatt"]."</td>";
          echo "<td>".$row["specatt"]."</td>";
          echo "<td>".$row["cp"]."</td>";
          echo "<td>".$row["iv"]."</td>";
          echo "<td>".$row["hp"]."</td>";
          echo "<td style='display:none'><form action='delete.php?name=".$row['name']."'method='post'><input type='hidden' name='name' value=".$row['name']."><input type='submit' name='submit' value='Delete'></form></td>";
          echo "</tr>";
        }
        echo "</table>";
      } else {
        echo "0 results";
      }

      $conn->close();
    ?>
  </div>

  <script type="text/javascript">
    $(function() {
        $('#hide').click(function() {
                $('td:nth-child(8)').hide();                
       });

        $('#show').click(function() {
                $('td:nth-child(8)').css("display", "block");;                
       });
        $('#toggle').click(function() {
        $('td:nth-child(8)').toggle();                
       });
    });
  </script>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

<!-- Sorting -->
<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("poketab");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc"; 
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++; 
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
</body>
</html>