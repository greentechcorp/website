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
  <?php include("../../website/navbarFooterScript.html"); ?>

</body>
</html>
