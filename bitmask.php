<?php 
    require_once($_SERVER['DOCUMENT_ROOT'] . '/TestPHP/common.php');

    $PAGE_TITLE = "Bitmask";
    
    require_once(LOCAL_ROOT_DIR . '/format/head-start.php');
?>
<script>
    class BitmaskEditor extends HTMLElement 
    {
        connectedCallback()
        {
            console.log('test');
        }

        refreshItems()
        {
            console.log("refreshed");
        }
    }

    customElements.define("bitmask-editor", BitmaskEditor);

    let currentDataType = "uint32";
    function DataTypeChanged()
    {
        let dataTypeElement = document.getElementById("dropdown-datatype");
        currentDataType = dataTypeElement.value;

        let bitmaskEditorElement = document.getElementById("bitmask-editor");
        bitmaskEditorElement.refreshItems();
    }
</script>
<?php
    require_once(LOCAL_ROOT_DIR . '/format/head-end.php');
    require_once(LOCAL_ROOT_DIR . '/format/body-start.php');
?>

<div class="content">
    <label for="dropdown-datatype">Data Type </label>
    <select id="dropdown-datatype" name="dropdown-datatype" onchange="DataTypeChanged()">
        <option value="uint8">UInt8</option>
        <option value="uint16">UInt16</option>
        <option value="uint32" selected>UInt32</option>
        <option value="uint64">UInt64</option>
    </select>
    <div id="bitmask-editor">
        <bitmask-editor>
        </bitmask-editor>
    </div>
</div>

<?php require_once(LOCAL_ROOT_DIR . '/format/body-end.php'); ?>