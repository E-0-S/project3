<?php
$servername = "localhost";
$username = "id20789876_jessep";
$password = "Qwerty123!";
$dbname = "adventuresdb";

// open MySQL connection
$conn = new mysqli($servername, $username, $password, $dbname);

// only proceed if connection is healthy
if ($conn->connect_error) {
  die("MySQL Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halifax Canoe and Kayak</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="images/paddle-white.png">
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src='js/main.js'></script>
</head>

<body>
  <nav><!-- Menu container -->
    <div id="menu" class="menu">
      <!-- Menu Icon top left -->
      <div class="container1">
        <img id="burger" src="images/hamburger.png" alt="menu">
      </div>
      <!-- Page title in nav bar  -->
      <div class="container">
        <h2>Halifax Canoe and Kayak</h2>
      </div>
      <!-- Company Logo top right  -->
      <div class="container1">
        <img id="paddle" src="images/paddle-white.png" alt="paddle">
      </div>
      <!--  Menu slide down panel -->
      <div id="panel" class="panel">
        <br><br>
        <a href="index.php">Admin</a>
        <br><br>
        <a href="index.php">Home</a>
        <br><br>
      </div>
    </div>
  </nav>
</body>

</html>

<script>
  // Hidden Menu Toggle Button
  $(document).ready(function () {
    $("#burger").click(function () {
      $("#panel").toggle(scrollY);
    });
  });
</script>