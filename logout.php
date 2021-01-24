<?php

// $test = $_GET['logout'];
// echo $test;

// //執行登出動作，刪除session
if (isset($_GET['logout']) && ($_GET['logout'] == "true")) {
    unset($_SESSION['loginMember']);
    // echo "<script> alert('已經登出!');location.href='index.php';</script>";
    header("Location:index.php");
}

