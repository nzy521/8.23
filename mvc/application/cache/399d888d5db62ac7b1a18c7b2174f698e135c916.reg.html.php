<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-20 10:22:03
  from 'D:\server\server\laomeng\8.20mvcback\mvc\application\template\admin\reg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3e4ecb39d3a3_08336549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d6f627ae30043612a0a6f7880f0dd64a0c93e2d' => 
    array (
      0 => 'D:\\server\\server\\laomeng\\8.20mvcback\\mvc\\application\\template\\admin\\reg.html',
      1 => 1597917094,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 100,
),true)) {
function content_5f3e4ecb39d3a3_08336549 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://localhost:81/server/laomeng/8.20mvcback/mvc/application/static/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost:81/server/laomeng/8.20mvcback/mvc/application/static/css/admin/admin.css">
    <script src="http://localhost:81/server/laomeng/8.20mvcback/mvc/application/static/js/jquerymini.js"></script>
    <script src="http://localhost:81/server/laomeng/8.20mvcback/mvc/application/static/js/jquery.validate.js"></script>
    <script src="http://localhost:81/server/laomeng/8.20mvcback/mvc/application/static/js/admin/reg.js"></script>
    <style>
        .box-con {
            width: 370px;
            height: auto;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            border: 8px solid gray;
            box-shadow: 0 0 2px black;
            padding: 10px;
            transition: box-shadow 1s ease;
            transition: border 1s ease;
        }

        .box-con:hover {
            box-shadow: 0 0 2px gold;
            border: 2px solid gold;
        }
    </style>
    <title>XX后台管理系统</title>
</head>

<body>
    <div class="box-con">
        <div style="text-align: center; font-size: 18px;margin-bottom: 10px;">注册</div>
        <form class="form-horizontal" action="http://localhost:81/server/laomeng/8.20mvcback/mvc/index.php/admin/reg/addUser" method="POST">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">账号</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="uname" placeholder="账号" name="uname">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pass" placeholder="Password" name="pass">

                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pass1" placeholder="再次输入密码" name="pass1">

                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" style="margin-left: 10px;">注册</button>
                    已经账号？请点击
                    <a href="http://localhost:81/server/laomeng/8.20mvcback/mvc/index.php/admin" class="btn btn-default" style="margin-left: 5px;">登录</a>
                </div>
                <div class="col-sm-offset-2 col-sm-10">

                </div>
            </div>
        </form>
    </div>
    <div class="entry" style="display: none;">http://localhost:81/server/laomeng/8.20mvcback/mvc/index.php</div>
    <script>
        var str = $(".entry ").html() + "/admin/reg/checkName";
        alert($("#uname").val());
    </script>
</body>

</html><?php }
}
