<?php 

require_once("mysqlilib.php");


if (isset($_POST["action"]) && ($_POST["action"] == "update")) {

    $boardid = $_POST['boardid'];
    $boardname = $_POST["boardname"];
    $boardsex = $_POST["boardsex"];
    $boardsubject = $_POST["boardsubject"];
    $boardcontent = $_POST["boardcontent"];

    $query_update = "UPDATE board SET boardname='$boardname', boardsex='$boardsex', boardsubject='$boardsubject', boardcontent='$boardcontent' WHERE boardid='$boardid'";
    $db['AS']->query($query_update);
    //重新導向回到主畫面
    header("Location: admin.php");
}