<?php
include "postClass.php";

$ids = $_GET['post'];
 
$hide = new Post();
 
$result = $hide->hidepost($ids);
 
if($result === true)
{
    header("location:blog.php");
}
else
{
    echo $result;
}
?>