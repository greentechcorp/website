<ul id="nav" class="clearfix">
    <li><a href="index.php#home">Homepage</a></li>
    <li><a href="index.php#products">Products</a></li>
    <li><a href="index.php#team">Team</a></li>
    <li><a href="index.php#contact">Contact</a></li>
    <li><a href="news.html">News</a></li>
    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
    <li style="float:right" ><a href="logout.php">Logout</a></li>
    <?php else: ?>
    <li style="float:right" ><a href="login.php">Login</a></li>
    <?php endif ?>
    <li style="float:right" ><a href="blog.php">Blog</a></li>

  </ul>