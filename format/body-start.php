<body>
    <div class="container">
        <div class="header">
            <a class="site-logo" href="./index.php">
                <img src="./images/logo.png">
            </a>
            <div class="nav-menu">
                <a class="<?php echo ($PAGE_TITLE == "Home") ? "nav-item active" : "nav-item"; ?>" href="./index.php"><i class="ph ph-house"></i> Home</a>
                <a class="<?php echo ($PAGE_TITLE == "Register") ? "nav-item active" : "nav-item"; ?>" href="./auth/register.php"><i class="ph ph-envelope-simple"></i> Register</a>
                <a class="<?php echo ($PAGE_TITLE == "Contact") ? "nav-item active" : "nav-item"; ?>" href="./contact.php"><i class="ph ph-envelope-simple"></i> Contact</a>
            </div>
        </div>