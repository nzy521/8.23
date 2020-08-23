<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-21 02:49:45
  from 'F:\wampwamp\www\8.20mvcback\mvc\application\template\admin\reg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3f36493f71c4_23362187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7384e24158761583ede9606dc82ea00aef7326ab' => 
    array (
      0 => 'F:\\wampwamp\\www\\8.20mvcback\\mvc\\application\\template\\admin\\reg.html',
      1 => 1597977830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3f36493f71c4_23362187 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/admin.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquerymini.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/reg.js"><?php echo '</script'; ?>
>
    <style>
    </style>
    <title>致远后台管理系统</title>
</head>

<body>
    <div class="box-con">
        <div style="text-align: center; font-size: 18px;margin-bottom: 10px;">注册</div>
        <form class="form-horizontal" action="<?php echo ENTRY_ADD;?>
/admin/reg/addUser" method="POST">
            <div class="form-group">
                <label for="uname" class="col-sm-2 control-label">账号</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="uname" placeholder="账号" name="uname">
                </div>
            </div>
            <div class="form-group">
                <label for="pass" class="col-sm-2 control-label">密码</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pass" placeholder="Password" name="pass">

                </div>
            </div>
            <div class="form-group">
                <label for="pass1" class="col-sm-2 control-label">密码</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pass1" placeholder="再次输入密码" name="pass1">

                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" style="margin-left: 10px;">注册</button>
                    已经账号？请点击
                    <a href="<?php echo ENTRY_ADD;?>
/admin" class="btn btn-default" style="margin-left: 5px;">登录</a>
                </div>
                <div class="col-sm-offset-2 col-sm-10">

                </div>
            </div>
        </form>
    </div>
    <div class="entry" style="display: none;"><?php echo ENTRY_ADD;?>
</div>
    <?php echo '<script'; ?>
>
        var str = $(".entry ").html() + "/admin/reg/checkName";
        alert($("#uname").val());
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
