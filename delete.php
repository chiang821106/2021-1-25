<?php

require_once("mysqlilib.php");

// 執行刪除動作
if (isset($_POST['action']) && ($_POST['action'] == 'delete')) {

    $boardid = $_POST['boardid'];
    $sql_query = "DELETE FROM board WHERE boardid=$boardid";
    $db['AS']->query($sql_query);
    //返回後台區
    header("Location:admin.php");
}
