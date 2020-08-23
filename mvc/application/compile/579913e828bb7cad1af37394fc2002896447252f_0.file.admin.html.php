<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-22 03:21:25
  from 'F:\wampwamp\www\8.20mvcback\mvc\application\template\admin\admin.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f408f35baf557_42428694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '579913e828bb7cad1af37394fc2002896447252f' => 
    array (
      0 => 'F:\\wampwamp\\www\\8.20mvcback\\mvc\\application\\template\\admin\\admin.html',
      1 => 1598066304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f408f35baf557_42428694 (Smarty_Internal_Template $_smarty_tpl) {
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
admin/admin.js"><?php echo '</script'; ?>
>
    <style>

    </style>
    <title>后台管理系统</title>
</head>

<body>
<!--<?php echo '<script'; ?>
>-->
<!--    //js设置cookie-->
<!--    //获取当前时间-->
<!--    //如果cookie不加过期时间 ，cookie默认的生存周期是当浏览器打开的时候，关闭cookie就会自动删除-->
<!--    var date=new Date();-->
<!--    var time=date.getTime()+1000*30;-->
<!--    date.setTime(time);-->
<!--    document.cookie="nane=zhangsan;expires="+date.toUTCString()+"domain=localhost";-->
<!--    document.cookie="age=12";-->
<!--<?php echo '</script'; ?>
>-->

    <div class="box-con" style="width: 550px; height: 550px"  >
        <div style="text-align: center; font-size: 18px;margin-bottom: 10px;">后台管理</div>
        <form class="form-horizontal" action="admin/index/login" method="POST">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">账号</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="账号" name="uname">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pass">
                </div>
            </div>

            <div class="form-group">
                <label for="code" class="col-sm-2 control-label"> 验证码</label>
                <div class="col-sm-10">
                    <input type="text" placeholder="验证码" name="code" id="code" style="width: 40%">
            <img src="http://localhost/8.20mvcback/mvc/lib/code.class.php" alt="" onclick="this.src='http://localhost/8.20mvcback/mvc/lib/code.class.php?'+Math.random()" style="cursor: pointer" width="120">看不清楚？点击更换
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> 记住密码
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" >登录</button>
                    &nbsp;&nbsp;没有账号？请点击
                    <a href="admin/reg/add" class="" >注册</a>
                </div>
                <div class="col-sm-offset-2 col-sm-10">

                </div>
            </div>
        </form>
    </div>
</body>

</html><?php }
}
