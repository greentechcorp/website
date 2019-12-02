<?php
$post = new Post();
foreach(array_reverse(getAllPublicPostsIDs()) as $id){ //reverse the array to show latest posts first
    $result  = $post->getpost($id);
    ?>
    
    <?php
    while ($row = $result->fetch_assoc()) { //fetch a result row as an associative array
    ?>
    
    <div class="card">

    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && ( ($row['postOwnerID']==$_SESSION['id'] ) || (isAdmin($_SESSION['id']))) ): ?>
        
        <?php include "dropdown.php" ?>
    <?php endif ?>

        <h2><?php echo $row['postTitle'];?></h2>
        <h5> <?php if($row['edited']):?>(edited) <?php endif ?>Posted on <?php echo $row['postDate'];?> by <?php echo getPostAuthorById($row['postOwnerID']);?></h5>
        <p><?php echo $row['postContent'];?></p>
    </div>
    <?php
    }    
}
?>