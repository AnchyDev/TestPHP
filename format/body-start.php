<body>
    <div class="container">
        <div class="header">
            <a class="site-logo" href="<?php echo(REMOTE_ROOT_DIR); ?>/index.php">
                <img src="<?php echo(REMOTE_ROOT_DIR); ?>/images/logo.png">
            </a>
            <div class="nav-menu">
                <a class="<?php echo ($PAGE_TITLE == "Home") ? "nav-item active" : "nav-item"; ?>" href="<?php echo(REMOTE_ROOT_DIR); ?>/index.php"><i class="ph ph-house"></i> Home</a>
                <a class="<?php echo ($PAGE_TITLE == "Register") ? "nav-item active" : "nav-item"; ?>" href="<?php echo(REMOTE_ROOT_DIR); ?>/auth/register.php"><i class="ph ph-envelope-simple"></i> Register</a>
                <a class="<?php echo ($PAGE_TITLE == "Contact") ? "nav-item active" : "nav-item"; ?>" href="<?php echo(REMOTE_ROOT_DIR); ?>/contact.php"><i class="ph ph-envelope-simple"></i> Contact</a>
            </div>
        </div>