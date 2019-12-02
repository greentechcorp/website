    <div class="container">
      <form method="post">
        <div class="row">
          <div class="col-25">
            <label for="title">Title</label>
          </div>
          <div class="col-75">
            <input type="text" id="title" name="title" placeholder="Find a catchy title..." value="<?php echo $row['postTitle'];?>">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="content">Content</label>
          </div>
          <div class="col-75">
            <textarea id="content" name="content" placeholder="Write something.." style="height:200px"><?php echo $row['postContent'];?></textarea>
          </div>
        </div>
        <div class="row">
          <input type="submit" name="submit" value="Resubmit">
        </div>
      </form>
    </div>