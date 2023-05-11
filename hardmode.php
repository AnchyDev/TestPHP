<?php 
    $PAGE_TITLE = "HardMode";
    
    require_once('./format/head-start.php');
    require_once('./format/head-end.php');
    require_once('./format/body-start.php');

    $id = $_GET["id"];
    $name = $_GET["name"];

    $canGenerateSql = false;

    if($id && $name)
    {
        $canGenerateSql = true;
    }
?>

<div class="content">
    <form action="./hardmode.php" method="GET">
        <label for="hm-id">Id</label>
        <input type="text" id="hm-id" name="id"><br><br>
        <label for="hm-name">Name</label>
        <input type="text" id="hm-name" name="name"><br><br>
        <button type="submit">Create</button>
    </form>

    <?php
    if($canGenerateSql)
    {
        echo('<div class="fs-code">');
        echo("DELETE FROM hardmode_modes WHERE id={$id}");
        echo('</div>');
    }
    ?>
</div>

<?php require_once('./format/body-end.php'); ?>