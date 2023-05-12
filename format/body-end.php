            <?php
                if(!isset($_COOKIE['allow-cookies'])) 
                {
                    echo '<div id="prompt-cookies" class="p-cookies">I use cookies to enhance your browser experience when you use my website. Would you like to enable cookies? <button onclick="EnableCookies()">Accept All</button><button onclick="HideCookiePrompt()">Reject All</button></div>';
                }
            ?>
            <div class="footer">
                All Rights Reserved &copy; AnchyDev
            </div>
        </div>
    </body>
</html>