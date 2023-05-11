<?php 
    $PAGE_TITLE = "HardMode";
    
    require_once('./format/head-start.php');

    $id = $_GET["id"];
    $name = $_GET["name"];
?>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/default.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
<script>hljs.highlightAll();</script>

<?php
    require_once('./format/head-end.php');
    require_once('./format/body-start.php');
?>

<div class="content">
    <form action="./hardmode.php" method="GET">
        <label for="hm-id">Id</label>
        <input type="text" id="hm-id" name="id"><br><br>
        <label for="hm-name">Name</label>
        <input type="text" id="hm-name" name="name"><br><br>
        <button type="submit">Create</button>
    </form>

    <div class="fs-code">
        <pre>
            <code class="language-sql">
                <?php echo("DELETE FROM hardmode_modes WHERE id={$id}"); ?>
            </code>
        </pre>
    </div>
</div>

<?php require_once('./format/body-end.php'); ?>