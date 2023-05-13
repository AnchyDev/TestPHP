<?php
    $PAGE_TITLE = "Register";
    
    require_once('../format/head-start.php');
    require_once('../format/head-end.php');
    require_once('../format/body-start.php');
?>

<div class="content">
    <div class="panel">
        <form action="https://anchy.dev/TestPHP/auth/register.php" method="POST">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>

            <br><hr style="color: white;"><br>

            <label for="username"><b>Username</b></label><br>
            <input type="text" placeholder="Enter Username" name="username" id="username" required><br><br>

            <label for="psw"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br><br>

            <label for="psw-repeat"><b>Repeat Password</b></label><br>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required><br><br>

            <?php
                $u1 = $_POST['username'];
                $p1 = $_POST['psw'];
                $p2 = $_POST['psw-repeat'];

                function Validate($username, $password, $password2)
                {
                    if(!isset($password) || !isset($password2))
                    {
                        return "Passwords not set.";
                    }

                    if($password !== $password2)
                    {
                        return "Passwords did not match!";
                    }
                }

                $validation = Validate($u1, $p1, $p2);
                if($validation)
                {
                    echo("<b style='color: red;'>{$validation}</b>");
                    echo("<br>");
                }
            ?>

            <br><hr style="color: white;"><br>

            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p><br>
            <button type="submit" class="fs-nice-button">Register</button>
        </form>
    </div>
</div>

<?php require_once('../format/body-end.php'); ?>