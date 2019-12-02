<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("head.html"); ?>
</head>
<body>
  
  <?php include("navbar.php"); ?>
  
  <?php include("home.html"); ?>

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
