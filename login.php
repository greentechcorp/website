<?php
if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
echo "Wrong Username / Password";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("head.html"); ?>
</head>
<body>
  <?php include("navbar.php"); ?>
  
  <?php include("login/form.html"); ?>

</body>
</html>
