<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
    $PAGE_TITLE = "Home";
    
    require_once($LOCAL_ROOT_DIR . '/format/head-start.php');
    require_once($LOCAL_ROOT_DIR . '/format/head-end.php');
    require_once($LOCAL_ROOT_DIR . '/format/body-start.php');
?>

<div class="content">
    Home Content
</div>

<?php require_once($LOCAL_ROOT_DIR . '/format/body-end.php'); ?>