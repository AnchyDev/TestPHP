<?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    define('REMOTE_ROOT_DIR', '/TestPHP');
    define('LOCAL_ROOT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/TestPHP');
?>