<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php echo $PAGE_TITLE; ?></title>

        <link rel="stylesheet" href="<?php echo(REMOTE_ROOT_DIR); ?>/style/style.css">

        <script src="https://unpkg.com/@phosphor-icons/web"></script>
        <script>
        function EnableCookies()
        {
            document.cookie = "allow-cookies=true; expires=Thu, 1 Dec 2024 12:00:00 UTC; path=/";
            HideCookiePrompt();
        }

        function HideCookiePrompt()
        {
            let cookieElement = document.getElementById("prompt-cookies");
            cookieElement.style.display = "none";
        }
        </script>