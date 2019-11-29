<?php
session_start();
if (isset($_SESSION['loggedin'])) {
	header('Location: index_logged.php');
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
				<li><a href="#home">Homepage</a></li>
				<li><a href="#products">Products</a></li>
				<li><a href="#team">Team</a></li>
				<li><a href="#maps">Map</a></li>
				<li><a href="#contact">Contact</a></li>
				<li style="float:right" ><a href="login.php">Login</a></li>
				<li style="float:right" ><a href="blog.php">Blog</a></li>
			</ul>
		<div id="home" class="section1">
			<div class="ptext">
				<span class="border">
					Insert Company Name
				</span>
			</div>
		</div>

		<section id="products" class="section section-light">
			 <?php include 'pages/products.php';?>
		</section>

		<div class="section2">
			<div class="ptext">
				<span class="border trans">
					Image Two Text
				</span>
			</div>
		</div>

		<section id="team" class="section section-dark">
			<?php include 'pages/team.php';?>
		</section>

		<div class="section3">
			<div class="ptext">
				<span class="border trans">
					Image Three Text
				</span>
			</div>
		</div>

		<section id="maps" class="section section-dark">
			 <?php include 'pages/maps.php';?>
		</section>

		<section id="contact" class="section section-light">
			<?php include 'pages/contact.php';?>
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
		
		<script src="sticky_bar.js"></script>
	</body>

</html>
