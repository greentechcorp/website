<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
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
      <li><a href="#products">Products</a></li>
      <li><a href="#team">Team</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="news.html">News</a></li>
      <li style="float:right" ><a href="logout.php">Logout</a></li>
      <li style="float:right" ><a href="#">Blog</a></li>
    </ul>
  <div id="home" class="section1">
    <div class="ptext">
      <span class="border">
        Welcome back, <?=$_SESSION['name']?>!
      </span>
    </div>
  </div>

  <section id="products" class="section section-light">
    <h2>Products</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in. Distinctio provident dolorem modi cumque illo enim quidem tempora deserunt nostrum voluptate labore repellat quisquam quasi cum suscipit dolore ab consequuntur, ad porro earum temporibus. Laborum ad temporibus ex, omnis!
    </p>
  </section>

  <div class="section2">
    <div class="ptext">
      <span class="border trans">
        Image Two Text
      </span>
    </div>
  </div>

  <section id="team" class="section section-dark">
    <h2>This is us!</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in.
    </p>
  </section>

  <div class="section3">
    <div class="ptext">
      <span class="border trans">
        Image Three Text
      </span>
    </div>
  </div>

  <section id="contact" class="section section-dark">
    <h2>Contact</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in.
    </p>
  </section>

  <div class="section1">
    <div class="ptext">
      <span class="border">
        Woooooow
      </span>
    </div>
  </div>
  <footer>
    <div class="foot">
      <p>LEGAL STUFF</p>
    </div>
  </footer>
  <script src="script.js"></script>
</body>
</html>