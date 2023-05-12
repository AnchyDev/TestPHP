            <?php
                if(!isset($_COOKIE['allow-cookies'])) 
                {
                    echo '<div id="prompt-cookies" class="p-cookies">Would you like to enable cookies? <button onclick="EnableCookies()">Yes</button><button onclick="HideCookiePrompt()">No</button></div>';
                }
            ?>
            <div class="footer">
                All Rights Reserved &copy; AnchyDev
            </div>
        </div>
    </body>
</html>