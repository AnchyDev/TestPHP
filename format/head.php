<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $PAGE_TITLE; ?></title>
        <link rel="stylesheet" href="./style/style.css">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <div class="nav-menu">
                    <a class="<?php echo ($PAGE_TITLE == "Home") ? "nav-item active" : "nav-item"; ?>" href="./index.php">Home</a>
                    <a class="<?php echo ($PAGE_TITLE == "Contact") ? "nav-item active" : "nav-item"; ?>" href="./contact.php">Contact</a>
                </div>
            </div>