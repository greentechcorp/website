<?php
session_start();
include 'postClass.php';
include 'public_functions.php';
$postid = $_GET['post'];

$crud = new Post();

if ($_POST) {
  $b_title = $_POST['title'];
  $b_content = $_POST['content'];
  $b_postOwnerID = $_SESSION['id'];
  $crud -> updatepost($postid, $b_content, $b_title);
	header("location:blog.php");
}
 
$result  = $crud->getpost($postid);
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
  <?php
  while ($row = $result->fetch_assoc()) {
  ?>
  <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
    <div class="container">
      <form method="post">
        <div class="row">
          <div class="col-25">
            <label for="title">Title</label>
          </div>
          <div class="col-75">
            <input type="text" id="title" name="title" placeholder="Find a catchy title..." value="<?php echo $row['postTitle'];?>">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="content">Content</label>
          </div>
          <div class="col-75">
            <textarea id="content" name="content" placeholder="Write something.." style="height:200px"><?php echo $row['postContent'];?></textarea>
          </div>
        </div>
        <div class="row">
          <input type="submit" name="submit" value="Resubmit">
        </div>
      </form>
    </div>
    <?php else: ?>
      <div class = "container">
      <div class="card">
          <h2>Login to write a post</h2>
    </div>
    </div>
    <?php endif ?>
    <?php
  }
  ?>
  <footer>
    <div class="footer">
      <p>LEGAL STUFF</p>
    </div>
  </footer>
  <script src="sticky_bar.js"></script>
</body>
</html>
