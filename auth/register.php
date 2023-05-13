<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $PAGE_TITLE = "Register";
    
    require_once('./format/head-start.php');
    require_once('./format/head-end.php');
    require_once('./format/body-start.php');
?>

<div class="content">
    <form action="/auth/register.php" method="POST">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
        <hr>

        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <button type="submit" class="fs-nice-button">Register</button>
    </form>

    <?php
        $username = $_POST['username'];
        $password = $_POST['psw'];
        $password2 = $_POST['psw-repeat'];

        echo("{$username} : {$psw} : {$psw-repeat}")
    ?>
</div>

<?php require_once('./format/body-end.php'); ?>