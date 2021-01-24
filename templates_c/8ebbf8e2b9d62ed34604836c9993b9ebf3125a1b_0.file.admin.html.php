<?php
/* Smarty version 3.1.36, created on 2021-01-22 14:23:53
  from 'C:\xampp\htdocs\PHP\1-22try\html\admin.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600a6f790caee9_36323626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ebbf8e2b9d62ed34604836c9993b9ebf3125a1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\1-22try\\html\\admin.html',
      1 => 1611296579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600a6f790caee9_36323626 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言版後台管理區</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="../style.css">
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
            <img class="bear" src="../images/小熊維尼.gif" alt="" width="49" height="69">
            <strong class="header">留言版後台</strong>
        </div>

        <table border="0" align="center" cellpadding="4" cellspacing="0" class="table table-success table-striped container" style="max-width:1200px;">
            <div class="row">
                <tr>
                    <td class="col">
                        <a href="../admin.php?logout=true" class="btn btn-success" id="admin" style="height:45px;line-height:30px;">管理員登出</p>
                    </td>

                    <td class="col" style="font-size:20px;position:relative;">
                        <!-- <p align="left" style="">目前資料筆數：<?php echo '<?php ';?>
echo $total_records; <?php echo '?>';?>
</p> -->
                    </td>


                    <td align="right" class="col">

                        <p class="page">
                        <form class="btn btn-info" action="admin.php" method="get">
                            選擇分頁: <select name="page" onchange="submit()" value="<?php echo '<?php ';?>
echo $page <?php echo '?>';?>
"><?php echo '<?=';?>
 $page_p <?php echo '?>';?>
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
      <div><?php echo $_smarty_tpl->tpl_vars['try']->value;?>
</div> 
    </content>


    <?php echo '<script'; ?>
>
        $(document).ready(function() {

            $(".checked").click(function() {
                alert("已經已讀囉!");
            })


            $('.check').click(function() {
                var ele = $(this);
                //抓取boardid-------
                var boardid = ele.attr("data-id");
                // alert(boardid);
                // alert(ele.attr("data-id"));
                if (confirm("是否標註為已讀?")) {
                    jQuery.ajax({
                        url: 'checked.php?id=' + boardid,
                        method: 'post',
                        data: {
                            boardid
                        },
                        success: function() {
                            alert('已經標註已讀!');
                            // 重整畫面
                            // window.history.go(0);
                            location.href = 'checked.php';
                        },
                        error: function() {
                            alert('fail');
                        }
                    })
                }
            })
        })
    <?php echo '</script'; ?>
>

</body>

</html><?php }
}
