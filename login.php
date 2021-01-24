<?php

//啟用session
session_start();
// 如果沒有登入session值或是session值為空時，執行下列登入動作
if (!isset($_SESSION['loginMember']) || ($_SESSION['loginMember'] == "")) {
    if (isset($_POST['username']) && ($_POST['password'])) {
        require_once('mysqlilib.php');
        //查詢admin資料表   
        $sql_query = "SELECT * FROM admin";
        $result = $db['AS']->query($sql_query);
        //取出admin表中的username/password值
        $row_result = $result->fetch_assoc();
        $username = $row_result['username'];
        $password = $row_result['password'];
        $db['AS']->close();
        //比對帳號密碼，若成功進入管理區/否則退回留言板主畫面
        if ($username == $_POST['username'] && $password == $_POST['password']) {
            $_SESSION['loginMember'] = $username;
            //使用javasrcipt導向會員中心
            echo "<script> alert('主人您好!');location.href='admin.php';</script>";
        } else {
            // header("Location:index.php");
            echo "<script> alert('帳號或密碼錯誤!');location.href='index.php';</script>";
        }
    }
} else {
    //若已經有登入session值，則前往管理區
    header("Location:index.php");
}
