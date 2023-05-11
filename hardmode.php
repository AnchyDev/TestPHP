<?php 
    $PAGE_TITLE = "HardMode";
    require_once('./format/head.php');

    $id = $_GET["id"];
    $name = $_GET["name"];
?>

<div class="content">
    <form action="./hardmode.php" method="GET">
        <label for="hm-id">Id</label>
        <input type="text" id="hm-id" name="id"><br><br>
        <label for="hm-name">Name</label>
        <input type="text" id="hm-name" name="name"><br><br>
        <button type="submit">Create</button>
    </form>
    <div>
        <?php echo("DELETE FROM hardmode_modes WHERE id={$id}"); ?>
    </div>
</div>

<?php require_once('./format/tail.php'); ?>