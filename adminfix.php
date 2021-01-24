<?php 


session_start();
if (!isset($_SESSION['loginMember']) || ($_SESSION['loginMember'] == "")) {
    header("Location:index.php");
}
if (isset($_GET['logout']) && ($_GET['logout'] == 'true')) {
    unset($_SESSION['loginMember']);
    header("Location:index.php");
}

require 'mysqlilib.php';
require 'libs/Smarty.class.php';

$id = $_GET['id'];

$sql = "SELECT * FROM board WHERE boardid = $id";
$result = $db['AS']->query($sql);
$check = mysqli_num_rows($result);

if ($check == 0) {
    echo "<script>alert('查無此資料');";
    echo "history.go(-1);";
    echo "</script>";
} else {
    while ($db['AS']->next_record()) {
        $row = $db['AS']->record;
    }
}




$smarty = new Smarty;
$smarty->assign("boardid", $row["boardid"]);
$smarty->assign("boardname", $row["boardname"]);
$smarty->assign("boardsex", $row["boardsex"]);
$smarty->assign("boardsubject", $row["boardsubject"]);
$smarty->assign("boardcontent", $row["boardcontent"]);
$smarty->assign("boardtime", $row["boardtime"]);
$smarty->assign("checked", $row["checked"]);

$smarty->assign("try", "測試文測試文測試文測試文測試文");
// $smarty->assign("re",);
$smarty->display('adminfix.html');