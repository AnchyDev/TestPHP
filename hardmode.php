<?php 
    $PAGE_TITLE = "HardMode";
    
    require_once('./format/head-start.php');
    require_once('./format/head-end.php');
    require_once('./format/body-start.php');

    $id = $_GET["id"];
    $name = $_GET["name"];

    $canGenerateSql = false;

    if(!empty($id) && !empty($name))
    {
        $canGenerateSql = true;
    }
?>

<div class="content">
    <form action="./hardmode.php" method="GET">
        <input type="text" id="hm-id" name="id" placeholder="Id" value="<?php echo($id) ?>"><br><br>
        <input type="text" id="hm-name" name="name" placeholder="Name" value="<?php echo($name) ?>"><br><br>
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