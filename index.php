<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Insert Company Name</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <?php include("navbar.php"); ?>
  
  <div id="home" class="section1">
    <div class="ptext">
      <span class="border">
        Insert Company Name
      </span>
    </div>
  </div>

  <?php include("products.html"); ?>

  <?php include("team.html"); ?>

  <div class="section1">
    <div class="ptext">
      <span class="border">
        Woooooow
      </span>
    </div>
  </div>

  <?php include("contact.html"); ?>

  <script src="sticky_bar.js"></script>
</body>
</html>
