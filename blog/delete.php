<?php
include "postClass.php";

$ids = $_GET['post']; 
$del = new Post();
$result = $del->deletepost($ids);
 
if($result === true){
    header("location:blog.php");
}
else{
    echo $result;
}
?>