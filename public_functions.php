<?php
include 'config.php';

function getPostAuthorById($user_id)
{
    global $conn;
	$sql = "SELECT name FROM user_login WHERE id=$user_id";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		// return username
		return mysqli_fetch_assoc($result)['name'];
	} else {
		return null;
	}
}

function getAllPublicIDs(){
	global $conn;
	$sql = "SELECT postID FROM blog_posts WHERE public = 1";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)) {
    $ids[] = $row['postID'];
	}
	return $ids;
}

function isAdmin($user_id)
{
	global $conn;
	$sql = "SELECT admin FROM user_login WHERE id=$user_id";
	$result = mysqli_query($conn, $sql);
	return mysqli_fetch_assoc($result)['admin'] == true;
}
?>