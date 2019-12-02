<?php
include '..\..\website\login\config.php';

function getPostAuthorById($user_id)
{
    global $connection;
	$sql = "SELECT fullName FROM user_login WHERE id=$user_id";
	$result = mysqli_query($connection, $sql);
	if ($result) {
		// returns full name
		return mysqli_fetch_assoc($result)['fullName'];
	} else {
		return null;
	}
}

function getAllPublicPostsIDs(){
	global $connection;
	$sql = "SELECT postID FROM blog_posts WHERE public = 1";
	$result = mysqli_query($connection, $sql);
	while($row = mysqli_fetch_assoc($result)) {
    $ids[] = $row['postID'];
	}
	return $ids;
}

function isAdmin($user_id)
{
	global $connection;
	$sql = "SELECT admin FROM user_login WHERE id=$user_id";
	$result = mysqli_query($connection, $sql);
	return mysqli_fetch_assoc($result)['admin'] == true;
}
?>