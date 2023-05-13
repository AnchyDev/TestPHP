<body>
    <div class="container">
        <div class="header">
            <a class="site-logo" href="https://anchy.dev/TestPHP/index.php">
                <img src="https://anchy.dev/TestPHP/images/logo.png">
            </a>
            <div class="nav-menu">
                <a class="<?php echo ($PAGE_TITLE == "Home") ? "nav-item active" : "nav-item"; ?>" href="https://anchy.dev/TestPHP/index.php"><i class="ph ph-house"></i> Home</a>
                <a class="<?php echo ($PAGE_TITLE == "Register") ? "nav-item active" : "nav-item"; ?>" href="https://anchy.dev/TestPHP/auth/register.php"><i class="ph ph-envelope-simple"></i> Register</a>
                <a class="<?php echo ($PAGE_TITLE == "Contact") ? "nav-item active" : "nav-item"; ?>" href="https://anchy.dev/TestPHP/contact.php"><i class="ph ph-envelope-simple"></i> Contact</a>
            </div>
        </div>