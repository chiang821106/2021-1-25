<?php



require 'mysqlilib.php';
require 'class_page.php';
require 'libs/Smarty.class.php';

$pageRow_records = 5;
// //預設頁數
$num_pages = 1;
// //若已經有翻頁，將頁數更新
if (isset($_GET['page'])) {
    $num_pages = $_GET['page'];
    if ($num_pages < 1) {
        $num_pages = 1;
    }
}
$page_obj = new Page($db['AS'], $num_pages, $pageRow_records, "boardid", "FROM", "board")
    or die("分頁讀取失敗");
$db['AS']->query($page_obj->_SQL);


$db['AS']->query($page_obj->_SQL);
$page_p = $page_obj->PrintSelectOption();
$rows_total = $db['AS']->_num_rows;
$page_end = $page_obj->_TotalPages;

if ($num_pages > $page_end) {
    $num_pages = $page_end;
}


// //本頁開始記錄筆數 = (頁數-1)*每頁記錄筆數
$startRow_records = ($num_pages - 1) * $pageRow_records;

// //未加限制顯示筆數的SQL敘述句
$query_RecBoard = "SELECT * FROM board ORDER BY boardtime DESC";
// //加上限制顯示筆數的SQL敘述句，由本頁開始記錄筆數開始，每頁顯示預設筆數
$query_limit_RecBoard = $query_RecBoard . " LIMIT {$startRow_records}, {$pageRow_records}";
// //以加上限制顯示筆數的SQL敘述句查詢資料到 $RecBoard 中
$db['AS']->query($query_limit_RecBoard);

while ($db['AS']->next_record(1)){
    $r=$db['AS']->record;
    // print_r($r['boardsubject']);
    // print_r($r['boardsex']);
}
// json_encode($r,JSON_UNESCAPED_UNICODE);


// $info = array('name' =>'張三','sex'=>'男');
// json_encode($info);


// // 後台-管理者(撈取管理員資料表)
// public function action(Request $request){
        
//     // $grocery = User::where('role','like','%'.$request->get('dataFromServer').'%')->get();
//     // return json_encode($grocery);
   

//     // $grocery = User::all();
//     // return json_encode($grocery);

// $grocery = DB::table('users')
//            ->where(function($query)
//            {
//                $query->where('role', '=', 'admin'); 
//            })
//            ->get();
// return json_encode($grocery);

// }//

 


$smarty = new Smarty;

for ($i = 0; $i < $pageRow_records; $i++) {
    $db['AS']->next_record();
    $row[$i] = $db['AS']->record;
}


$smarty->assign("row", $row);
$smarty->assign("page", $num_pages);
$smarty->assign("page_p", $page_p);


$smarty->assign("try", "測試文測試文測試文測試文測試文");
$smarty->assign("echo", "我愛你");
// $smarty->assign("re",);
$smarty->display('index.html');