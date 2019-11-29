<?php
$post = new Post();
foreach(array_reverse(getAllPublicIDs()) as $id){
    $result  = $post->getpost($id);
    ?>
    
    <?php
    while ($row = $result->fetch_assoc()) {
        ?>
    
    <div class="card">

    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && ( ($row['postOwnerID']==$_SESSION['id'] ) || (isAdmin($_SESSION['id']))) ): ?>
        
        <div class="dropdown">
            <button class="dropbtn"></button>
            <div id="dropdown" class="dropdown-content">
                <a href="reedit.php?post=<?php echo $id;?>">Edit post</a>
                <a href="hide.php?post=<?php echo $id;?>">Hide post</a>
                <a href="delete.php?post=<?php echo $id;?>">Delete post</a>
            </div>
        </div>
    <?php endif ?>

        <h2><?php echo $row['postTitle'];?></h2>
        <h5> <?php if($row['edited']):?>(edited) <?php endif ?>Posted on <?php echo $row['postDate'];?> by <?php echo getPostAuthorById($row['postOwnerID']);?></h5>
        <p><?php echo $row['postContent'];?></p>
    </div>
    <?php
    }    
}
?>