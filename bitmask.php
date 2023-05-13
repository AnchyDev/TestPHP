<?php 
    require_once($_SERVER['DOCUMENT_ROOT'] . '/TestPHP/common.php');

    $PAGE_TITLE = "Bitmask";
    
    require_once(LOCAL_ROOT_DIR . '/format/head-start.php');
?>
<script>
    function DataTypeChanged()
    {
        let dataType = document.getElementById("dropdown-datatype");
        console.log("DataType was changed to " + dataType.value);
    }
</script>
<?php
    require_once(LOCAL_ROOT_DIR . '/format/head-end.php');
    require_once(LOCAL_ROOT_DIR . '/format/body-start.php');
?>

<div class="content">
    <label for="dropdown-datatype">Data Type</label>
    <select id="dropdown-datatype" name="dropdown-datatype" onchange="">
        <option value="uint8">UInt8</option>
        <option value="uint16">UInt16</option>
        <option value="uint32" selected>UInt32</option>
        <option value="uint64">UInt64</option>
    </select>
    Bitmask Content
</div>

<?php require_once(LOCAL_ROOT_DIR . '/format/body-end.php'); ?>