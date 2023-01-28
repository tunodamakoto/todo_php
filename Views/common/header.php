<header class="header">
    <div class="header-inner">
        <h1 class="header-logo"><a href="home.php"><svg><use xlink:href="<?php echo HOME_URL; ?>Views/img/file.svg#logo"></use></svg></a></h1>
        <?php if(!$user): ?>
            <ul class="header-menu">
                <li><a href="sign-in.php">Login</a></li>
                <li><a href="sign-up.php">Register</a></li>
            </ul>
        <?php else: ?>
            <ul class="header-menu">
                <li><a href="create.php">Create Card</a></li>
                <li><a href="sign-out.php">Logout</a></li>
            </ul>
        <?php endif; ?>
    </div>
</header>