<?php
include "postClass.php";

$ids = $_GET['del'];
 
$del = new Post();
 
$result = $del->deletepost($ids);
 
if($result === true)
{
    header("location:blog.php");
}
else
{
    echo $result;
}
?>