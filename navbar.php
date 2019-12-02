<ul id="nav" class="nav">
    <li><a href="/website/index.php#cycloop">Cycloop</a></li>
    <li><a href="/website/index.php#product">Product</a></li>
    <li><a href="/website/index.php#team">Team</a></li>
    <li><a href="/website/index.php#contact">Contact</a></li>
    <li><a href="/website/news.php">News</a></li>
    <li><a href="/website/blog/blog.php">Blog</a></li>
    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
    <li style="float:right" ><a href="/website/login/logout.php">Logout</a></li>
    <?php else: ?>
    <li style="float:right" ><a href="/website/login.php">Login</a></li>
    <?php endif ?>
</ul>