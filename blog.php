<?php
session_start();
include 'postClass.php';
include 'public_functions.php';
$crud   = new Post();

if ($_POST) {
  $b_title = $_POST['title'];
  $b_content = $_POST['content'];
  $b_postOwnerID = $_SESSION['id'];
  $crud -> insertpost($b_title, $b_content,$b_postOwnerID);
	header("location:blog.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cycloop</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
  <?php include("navbar.php"); ?>

  <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
    <div class="container">
      <form method="post">
        <div class="row">
          <div class="col-25">
            <label for="title">Title</label>
          </div>
          <div class="col-75">
            <input type="text" id="title" name="title" placeholder="Find a catchy title...">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="content">Content</label>
          </div>
          <div class="col-75">
            <textarea id="content" name="content" placeholder="Write something.." style="height:200px"></textarea>
          </div>
        </div>
        <div class="row">
          <input type="submit" name="submit" value="Submit">
        </div>
      </form>
    </div>
    <?php else: ?>
      <div class = "container">
      <div class="card">
          <h2>Log in to write a post</h2>
    </div>
    </div>
    <?php endif ?>
  <div class="row">
  <div class="leftcolumn">

  <?php include("displayPost.php"); ?>
</div>
  <div class="rightcolumn">
    <div class="card">
      <h3>We are social!</h3>
      <p>Social media links</p>
    </div>
  </div>
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
