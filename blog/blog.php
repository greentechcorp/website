<?php
session_start();
include 'postClass.php';
include 'public_functions.php';
$post   = new Post();

if ($_POST) {
  $title = $_POST['title'];
  $content = $_POST['content'];
  $postOwnerID = $_SESSION['id'];
  $post -> insertpost($title, $content,$postOwnerID);
	header("location:blog.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("../../website/head.html"); ?>
</head>
<body>
  <?php include("../../website/navbar.php"); ?>

  <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
    <?php include("postSubmission.html"); ?>
  <?php else: ?>
    <?php include("needToLogin.html"); ?>
  <?php endif ?>
  <div class="row">
  <div class="leftcolumn">

  <?php include("displayPost.php"); ?>
</div>
  <?php include("social.html");?>
  </div>
  
  <footer>
    <div class="footer">
      <p>LEGAL STUFF</p>
    </div>
  </footer>  
  <script>
  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
      document.getElementById("nav").style.top = "0";
  } 
  else {
      document.getElementById("nav").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
  }
  </script>
</body>
</html>
