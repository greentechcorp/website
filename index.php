<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cycloop</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script scr='navbarfooter.js'></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <?php include("navbar.php"); ?>
  
  <div id="cycloop" class="section1">
    <div class="ptext">
      <span class="border">
        CYCLOOP
      </span>
    </div>
  </div>

  <?php include("product.html"); ?>

  <?php include("team.html"); ?>

  <?php include("contact.html"); ?>
  <script>
  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
      document.getElementById("nav").style.top = "0";
      document.getElementById("contact").style.bottom = "-50px";
  } 
  else {
      document.getElementById("contact").style.bottom = "0";
      document.getElementById("nav").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
  }
  </script>
</body>
</html>
