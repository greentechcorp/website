<?php
session_start();
include 'config.php';
if ( mysqli_connect_errno() ) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ($stmt = $connection->prepare('SELECT id, psswrd FROM user_login WHERE username = ?')) {
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
}

$stmt->store_result();

if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $psswrd);
	$stmt->fetch();
   if ($_POST['password'] === $psswrd) {
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['name'];
		$_SESSION['id'] = $id;
    	header('Location:/website/blog/blog.php'); //redirects to blog
	} else {
		header("location:login.php?msg=failed");
	}
} else {
	header("location:login.php?msg=failed");
}
$stmt->close();
?>