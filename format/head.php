<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $PAGE_TITLE; ?></title>
        <link rel="stylesheet" href="./style/style.css">
        <script src="https://unpkg.com/@phosphor-icons/web"></script>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <a class="site-logo" href="./index.php">
                    <img src="./images/logo.png">
                    <div class="fs-header">
                        AnchyDev
                    </div>
                </a>
                <div class="nav-menu">
                    <a class="<?php echo ($PAGE_TITLE == "Home") ? "nav-item active" : "nav-item"; ?>" href="./index.php"><i class="ph ph-house"></i> Home</a>
                    <a class="<?php echo ($PAGE_TITLE == "Contact") ? "nav-item active" : "nav-item"; ?>" href="./contact.php"><i class="ph ph-envelope-simple"></i> Contact</a>
                </div>
            </div>