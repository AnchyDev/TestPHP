<?php
    $PAGE_TITLE = "Register";
    
    require_once('../format/head-start.php');
    require_once('../format/head-end.php');
    require_once('../format/body-start.php');
?>

<div class="content">
    <form action="https://anchy.dev/TestPHP/auth/register.php" method="POST">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>

        <br><hr><br>

        <label for="username"><b>Username</b></label><br>
        <input type="text" placeholder="Enter Username" name="username" id="username" required><br><br>

        <label for="psw"><b>Password</b></label><br>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br><br>

        <label for="psw-repeat"><b>Repeat Password</b></label><br>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required><br><br>

        <br><hr><br>

        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p><br>
        <button type="submit" class="fs-nice-button">Register</button>
    </form>

    <?php
        $username = $_POST['username'];
        $password = $_POST['psw'];
        $password2 = $_POST['psw-repeat'];

        if($password !=== $password2)
        {
            echo("<b style='color: red;'>Passwords do not match!</b>");
        }
    ?>
</div>

<?php require_once('../format/body-end.php'); ?>