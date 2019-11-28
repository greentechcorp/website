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
            <button class="btn" style="border-left:1px solid #0d8bf2">
                <i scr="img/3dots.png"></i>
            </button>
            <div class="dropdown-content" method='post' action=''>
                <a href="reedit.php?post=<?php echo $id;?>">Edit post</a>
                <a href="delete.php?del=<?php echo $id;?>">Delete post</a>
            </div>
            </div>
    <?php endif ?>

        <h2><?php echo $row['postTitle'];?></h2>
        <h5> Posted On <?php echo $row['postDate'];?>
        <?php if($row['edited']):?>
        (edited)
        <?php endif ?>
        </h5>
        <p><?php echo $row['postContent'];?></p>
        <p>By <?php echo getPostAuthorById($row['postOwnerID']);?></p>
    </div>
    
    
    <?php
    }    
}
?>
