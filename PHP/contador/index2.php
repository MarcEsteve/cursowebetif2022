<form action="" >
    <input type="submit" class="button" name="insert" value="insert" />
    <input type="submit" class="button" name="select" value="select" />
</form>


<?php
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'insert':
                insert();
                break;
            case 'select':
                select();
                break;
        }
    }

    function select() {
        echo "The select function is called.";
        exit;
    }

    function insert() {
        echo "The insert function is called.";
        exit;
    }
?>