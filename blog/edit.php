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
  <?php include("../../website/head.html"); ?>
</head>
<body>
  <?php include("../../website/navbar.php"); ?>
  <?php
  while ($row = $result->fetch_assoc()) { //fetch a result row as an associative array
  ?>
  <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
    <?php include("postSubmissionEdit.html"); ?>
    <?php endif ?>
    <?php
  }
  ?>
  <footer>
    <div class="footer">
      <p>LEGAL STUFF</p>
    </div>
  </footer>
</body>
</html>
