<?php 
    require_once($_SERVER['DOCUMENT_ROOT'] . '/TestPHP/common.php');

    $PAGE_TITLE = "Bitmask";
    
    require_once(LOCAL_ROOT_DIR . '/format/head-start.php');
?>
<script>
    let currentDataType = "uint32";
    let dataTypeValues = {
        "uint8": 8,
        "uint16": 16,
        "uint32": 32,
        "uint64": 64
    }

    class BitmaskEditor extends HTMLElement 
    {
        connectedCallback()
        {
            console.log('test');
        }

        refreshItems()
        {
            let itemCount = dataTypeValues[currentDataType];

            for(let i = 0; i < itemCount; i++)
            {
                let testElement = document.createElement("b");
                testElement.innerHTML = `Element: ${i}`;
                this.appendChild(testElement);
            }
        }
    }

    customElements.define("bitmask-editor", BitmaskEditor);

    function GetBitmaskEditor()
    {
        return document.getElementsByTagName("bitmask-editor")[0];
    }

    function DataTypeChanged()
    {
        let dataTypeElement = document.getElementById("dropdown-datatype");
        currentDataType = dataTypeElement.value;

        GetBitmaskEditor().refreshItems();
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