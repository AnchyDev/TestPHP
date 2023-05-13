<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/TestPHP/common.php');

    $PAGE_TITLE = "Register";

    require_once(LOCAL_ROOT_DIR . '/format/head-start.php');
    require_once(LOCAL_ROOT_DIR . '/format/head-end.php');
    require_once(LOCAL_ROOT_DIR . '/format/body-start.php');
?>

<div class="content">
    <div class="panel">
        <form action="<?php echo(REMOTE_ROOT_DIR); ?>/auth/register.php" method="POST">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>

            <br><hr style="color: white;"><br>

            <label for="username"><b>Username</b></label><br>
            <input type="text" placeholder="Enter Username" name="username" id="username" required><br><br>

            <label for="psw"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br><br>

            <label for="psw-repeat"><b>Repeat Password</b></label><br>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required><br>

            <?php
                include_once(LOCAL_ROOT_DIR . '/auth/validator.php');

                if(CanValidate())
                {
                    $validation = ValidateUsernamePasswordFields('username', 'psw', 'psw-repeat');

                    if($validation->Status == ValidationStatus::Failure)
                    {
                        echo("<br>");
                        echo("<b style='color: red;'>{$validation->Message}</b>");
                        echo("<br>");
                    }
                    else if($validation->Status == ValidationStatus::Success)
                    {
                        echo("<br>");
                        echo("<b style='color: lime;'>{$validation->Message}</b>");
                        echo("<br>");
                    }
                }
            ?>

            <br><hr style="color: white;"><br>

            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p><br>
            <button type="submit" class="fs-nice-button">Register</button>
        </form>
    </div>
</div>

<?php require_once(LOCAL_ROOT_DIR . '/format/body-end.php'); ?>