<?php 
    $PAGE_TITLE = "Contact";
    require_once('./format/head.php');
?>

<div class="header">
    <a class="<?php echo ($PAGE_TITLE == "Home") ? "nav-item-active" : "nav-item"; ?>" href="./index.php">Home</a>
    <a class="<?php echo ($PAGE_TITLE == "Contact") ? "nav-item-active" : "nav-item"; ?>" href="./contact.php">Contact</a>
</div>

<div class="content">
    Content
</div>

<div class="footer">
    Footer
</div>

<?php require_once('./format/tail.php'); ?>