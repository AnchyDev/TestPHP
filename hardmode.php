<?php 
    $PAGE_TITLE = "HardMode";
    require_once('./format/head.php');

    $name = $_GET["name"];

    if($name)
    {
        echo "<script type='text/javascript'>alert('$name');</script>";
    }
?>

<div class="content">
    <form action="./hardmode.php" method="GET">
        <label for="hm-name">Name</label>
        <input type="text" id="hm-name" name="name"><br><br>
        <button type="submit">Create</button>
    </form>
    <div>
        <?php echo($name); ?>
    </div>
</div>

<?php require_once('./format/tail.php'); ?>