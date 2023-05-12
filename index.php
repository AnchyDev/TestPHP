<?php 
    $PAGE_TITLE = "Home";
    
    require_once('./format/head-start.php');
?>
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
<?php
    require_once('./format/head-end.php');
    require_once('./format/body-start.php');
?>

<div class="content">
    Home Content

    <?php
    if(!isset($_COOKIE['allow-cookies'])) 
    {
        echo '<div id="prompt-cookies">Would you like to enable cookies? <button onclick="EnableCookies()">Yes</button><button onclick="HideCookiePrompt()">No</button></div>';
    }
    ?>
</div>

<?php require_once('./format/body-end.php'); ?>