<?php
/* Smarty version 3.1.36, created on 2021-01-24 08:29:10
  from 'C:\xampp\htdocs\2021-1-22\adminfix.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600d21c6ab0541_80905667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '770cca827c53635e21f67b16da8371ef4ebef6e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\2021-1-22\\adminfix.html',
      1 => 1611252314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600d21c6ab0541_80905667 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後台管理區</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <!-- CSS only -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'><?php echo '</script'; ?>
>
</head>

<body>
    <!-- 頁首 -->
    <header>
        <div align="center">
            <img class="bear" src="images/小熊維尼.gif" alt="" width="49" height="69">
            <strong class="header">留言版後台</strong>
        </div>

        <table border="0" align="center" cellpadding="4" cellspacing="0" class="table table-success table-striped" style="max-width:1200px;">
            <tr>
                <td>
                    <a href="?logout=true" class=" btn btn-success" id="admin" style=" height:45px;line-height:30px;">管理員登出</p>
                </td>
            </tr>
        </table>
    </header>


    <!-- 頁中 -->
    <content>
        <table border="0" align="center" class="table table-success table-striped" style="max-width:1200px;" cellpadding="4" cellspacing="0">
            <form name="form1" method="post" action="edit.php">
                <tr>
                    <td colspan="2" align="center" style="font-size:24px;color:blue;">更新訪客留言版資料</td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group form-inline">
                            <label for="boardname" class="col-3">姓名:</label>
                            <input style="background-color:#CCDDFF" type="text" class="form-control col-8" name="boardname" id="boardname" value="<?php echo $_smarty_tpl->tpl_vars['boardname']->value;?>
">
                        </div>
                        <div class="form-group form-inline">
                            <label for="boardsex">性別:</label>
                            <input style="background-color:#CCDDFF" name="boardsex" type="radio" id="radio" value="男"  <?php if ($_smarty_tpl->tpl_vars['boardsex']->value == "男") {?> <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 <?php }?> >男
                            <input style="background-color:#CCDDFF" name="boardsex" type="radio" id="radio2" value="女" <?php if ($_smarty_tpl->tpl_vars['boardsex']->value == "女") {?> <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 <?php }?> >女
                        </div>
                        <div class="form-group form-inline">
                            <label for="boardsubject">標題:</label>
                            <input style="background-color:#CCDDFF" name="boardsubject" type="text" class="form-control col-8" id="boardsubject" value="<?php echo $_smarty_tpl->tpl_vars['boardsubject']->value;?>
"></p>
                        </div>
                        <div class="form-group form-inline">
                            <label for="boardcontent">內容:</label>
                            <textarea style="background-color:#CCDDFF" name="boardcontent" id="boardcontent" class="form-control col-8" cols="30" rows="10"><?php echo $_smarty_tpl->tpl_vars['boardcontent']->value;?>
</textarea>
                        </div>
                    </td>

                    <td align="right">
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <input name="boardid" type="hidden" id="boardid" value="<?php echo $_smarty_tpl->tpl_vars['boardid']->value;?>
">
                        <input name="action" type="hidden" id="action" value="update">
                        <input type="submit" name="button" id="button" value="更新資料" class="btn btn-success">
                        <input type="button" name="button3" id="button3" value="回上一頁" class="btn btn-primary" onClick="window.history.back();">
                    </td>
                </tr>
            </form>
        </table>
    </content>
</body>

</html><?php }
}
