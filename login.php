<?php
if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
echo "Wrong Username / Password";
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
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
</head>
<body>
  <?php include("navbar.php"); ?>
  
  <div id="login" >
    <form class="modal-content" action="authenticate.php" method="post">
      <div class="container">

        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
    
        <button type="submit" value="login">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>
    
      <div class="container" style="background-color:#f1f1f1">
        <a class="cancelbtn" href="index.php">Cancel</a>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
    
  </div>
  <script src="sticky_bar.js"></script>
</body>
</html>
