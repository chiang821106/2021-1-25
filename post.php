<?php

// 接收前端傳遞的值
$boardname = $_POST['boardname'];
$boardsex = $_POST['boardsex'];
$boardsubject = $_POST['boardsubject'];
$boardcontent = $_POST['boardcontent'];


require_once("mysqlilib.php");

$sql = "INSERT INTO board(boardname,boardsex,boardsubject,boardcontent,boardtime) VALUES ('$boardname','$boardsex','$boardsubject','$boardcontent',NOW())";
$db['AS']->query($sql);


// $query_insert = "INSERT INTO board (boardname ,boardsex ,boardsubject ,boardcontent,boardtime) VALUES (?, ?, ?, ?,NOW())";
// //預備語法
// $stmt = $db['AS']->prepare($query_insert);
// $stmt->bind_param(
//     "ssss",$boardname,$boardsex,$boardsubject,$boardcontent
// );
// $stmt->execute();
// $stmt->close();
$db['AS']->close();

?>

