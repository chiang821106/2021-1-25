<?php
/* Smarty version 3.1.36, created on 2021-01-22 14:26:08
  from 'C:\xampp\htdocs\PHP\1-22try\html\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600a700056aff9_90079632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f59bb8907b374d0e289271e60899c598c1342399' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\1-22try\\html\\index.html',
      1 => 1611296767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600a700056aff9_90079632 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>留言版</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'><?php echo '</script'; ?>
>

    <!-- 管理登入判斷 -->
    <?php echo '<script'; ?>
 language="javascript">
        function checkForm() {
            if (document.formPost.username.value == "" && document.formPost.password.value == "") {
                alert("請輸入帳號及密碼!");
                return false;
            }
            if (document.formPost.username.value == "") {
                alert("帳號忘了輸入唷~");
                return false;
            }
            if (document.formPost.password.value == "") {
                alert("密碼忘了輸入唷~");
                return false;
            }
        }
    <?php echo '</script'; ?>
>
</head>

<body>
    <!-- 頁首 -->
    <header>
        <div align="center">
            <img class="bear" src="images/pig.gif" alt="" width="49" height="69">
            <strong class="header">留言版</strong>
        </div>

        <table border="0" align="center" cellpadding="4" cellspacing="0"
            class="table table-success table-striped container" style="max-width:1200px;">
            <div class="row">
                <tr>
                    <td class="col">
                        <button class="btn btn-success" id="admin">管理員登入</button>
                        <button class="btn btn-primary" id="myAddBtn">訪客留言</button>
                    </td>

                    <td class="col">
                        <!-- <p align="center">資料筆數：<?php echo '<?php ';?>
echo $total_records; <?php echo '?>';?>
</p> -->
                    </td>

                    <td align="right" class="col">

                        <p class="page">
                        <form class="btn btn-info" action="index.php" method="get">
                            選擇分頁: <select name="page" onchange="submit()" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</select>
                        </form>
                        </p>
                    </td>
                </tr>
            </div>
        </table>
    </header>

    <!-- 頁中 -->
    <content>
        <table border="0" align="center" class="table table-danger table-striped" style="max-width:1200px;"
            cellpadding="4" cellspacing="0">
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['row']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['row']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <tr>

                <?php if ($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]["boardsex"] == '男') {?>
                <td width="60" align="center">
                    <img src="images/male.gif" width="49" height="49" alt="">
                    <span><?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]["boardname"];?>
</span>
                </td>
                <?php } else { ?>
                <td width="60" align="center">
                    <img src="images/female.gif" width="49" height="49" alt="">
                    <span><?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]["boardname"];?>
</sapn>
                </td>
                <?php }?>

                <td width="60" align="center">
                    主題:
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]["boardsubject"];?>
</td>
                <td>內容:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]["boardcontent"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]["boardtime"];?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]["checked"] == 1) {?>
                <td>
                    <img src="images/love.gif" alt="" width="35" height="35">
                </td>
                <?php } else { ?>
                <td>
                    <img src="images/unlove.gif" alt="" width="35" height="35">
                </td>
                <?php }?>
            </tr>
            <?php }
}
?>
        </table>
    </content>


    <!-- 管理員登入盒子 -->
    <div class="container">
        <div class="modal fade" id="adminModal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">
                    <div class="modal-header" style="background:linear-gradient(red,yellow);">
                        <span class="text-dark" style="font-size:36px;">管理員登入</span>
                    </div>
                    <div class="modal-body">
                        <form action="admin.php" id="formPost" name="formPost" method="post" onSubmit="return checkForm();">
                            <div class="form-group form-inline">
                                <label for="username" class="col-3">帳號:</label>
                                <input type="text" class="form-control col-8" name="username" id="username">
                            </div>

                            <div class="form-group form-inline">
                                <label for="password" class="col-3">密碼:</label>&nbsp;
                                <input type="password" class="form-control col-8" name="password" id="password">
                            </div>
                            &nbsp;&nbsp;
                            <div class="modalBtn">
                                <button type="submit" class="btn btn-primary" id="adminOkBtn">登入</button>
                            </div>
                            <input name="action" type="hidden" id="action" value="add">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 訪客留言盒子 -->
    <div class="container">
        <div class="modal fade" id="myAddModal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">
                    <div class="modal-header" style="background:linear-gradient(red,yellow);">
                        <span class="text-dark" style="font-size:36px;">我要留言</span>
                    </div>
                    <div class="modal-body">
                        <form id="myForm" name="myForm">
                            <div class="form-group form-inline">
                                <label for="boardname" class="col-3">姓名:</label>
                                <input type="text" class="form-control col-8" name="boardname" id="boardname">
                            </div>

                            <div class="form-group form-inline">
                                <label for="boardsex" class="col-3">性別(請選擇):</label>
                                <select id="boardsex" type="text" class="form-control col-8" name="boardsex" value="">
                                    <option value="男" selected>男</option>
                                    <option value="女">女</option>
                                </select>
                            </div>

                            <div class="form-group form-inline">
                                <label for="boardsubject" class="col-3">主題:</label>
                                <input type="text" class="form-control col-8" name="boardsubject" id="boardsubject">
                            </div>

                            <div class="form-group form-inline">
                                <label for="boardcontent" class="col-3">內容:</label>
                                <textarea name="boardcontent" id="boardcontent" cols="30" rows="10"
                                    class="form-control col-8"></textarea>
                            </div>

                            <div class="modalBtn">
                                <button type="submit" class="btn btn-primary" id="myAddOkBtn">送出</button>
                            </div>

                            <input name="action" type="hidden" id="action" value="add">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery 開啟盒子及傳送留言資料 -->
    <?php echo '<script'; ?>
>
        $(document).ready(function () {

            // 開啟訪客留言盒子+傳遞資料到後端
            $("#myAddBtn").click(function () {
                //呼叫對話框
                $("#myAddModal").modal('show');
                // // 先清空各欄位的值
                $('#boardname').val("");
                $('#boardsex').val("");
                $('#boardsubject').val("");
                $('#boardcontent').val("");
            });
            // -------------新增 資料_對話框確認按鈕
            jQuery('#myAddOkBtn').click(function (e) {

                if (document.myForm.boardname.value != "" && document.myForm.boardsex.value != "" && document.myForm.boardsubject.value != "" && document.myForm.boardcontent.value != "") {
                    // 建立要輸入資料庫的值
                    var dataToServer = {
                        // 姓名
                        boardname: $("#boardname").prop("value"),
                        // 性別
                        boardsex: $("#boardsex").prop("value"),
                        // 主題
                        boardsubject: $("#boardsubject").prop("value"),
                        // 內容
                        boardcontent: $("#boardcontent").prop("value"),
                    };

                    e.preventDefault();


                    jQuery.ajax({
                        url: 'post.php',
                        method: 'post',
                        data: dataToServer,
                    }).then(function () {
                        //關掉對話框
                        $("#myAddModal").modal("hide");
                        alert('留言成功!');
                        // 重整畫面
                        // window.history.go(0);
                        location.href = 'index.php?page=1';
                    })
                } else if (document.myForm.boardname.value == "") {
                    alert("請輸入姓名!");
                    return false;
                } else if (document.myForm.boardsex.value == "") {
                    alert("請填選性別!");
                    return false;
                } else if (document.myForm.boardsubject.value == "") {
                    alert("請輸入主題!");
                    return false;
                } else if (document.myForm.boardcontent.value == "") {
                    alert("請輸入內容!");
                    return false;
                } else {
                    alert("您應該還有某個欄位未填唷!");
                    return false;
                }
            })

            // 開啟管理員登入盒子並清空值
            $("#admin").click(function () {
                //呼叫對話框
                $("#adminModal").modal('show');
                // // 先清空各欄位的值
                $('#username').val("");
                $('#password').val("");
            });

        })
    <?php echo '</script'; ?>
>

</body>

</html><?php }
}
