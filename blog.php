<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Insert Company Name</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <ul id="nav" class="clearfix">
      <li><a href="index.php">Homepage</a></li>
      <li><a href="index.php#products">Products</a></li>
      <li><a href="index.php#team">Team</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="news.html">News</a></li>
      <li style="float:right" ><a href="logout.php">Logout</a></li>
      <li style="float:right" ><a href="#">Blog</a></li>
    </ul>

    <div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div>
    </div>
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
  <script src="sticky_bar.js"></script>
</body>
</html>
