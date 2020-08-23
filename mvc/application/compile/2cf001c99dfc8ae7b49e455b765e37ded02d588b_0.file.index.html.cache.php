<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-19 12:23:21
  from 'D:\server\server\laomeng\8.17mvc\mvc\application\template\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3d19b94006e3_03857871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cf001c99dfc8ae7b49e455b765e37ded02d588b' => 
    array (
      0 => 'D:\\server\\server\\laomeng\\8.17mvc\\mvc\\application\\template\\index.html',
      1 => 1597839501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3d19b94006e3_03857871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13347582425f3d19b93daa99_05020632';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
11
    这是我的首页<!-- 各种模板引擎 后台处理s数据和逻辑 前台处理 样式 显示-->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <ul>
        <li><?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['v']->value["age"];?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['v']->value["sex"];?>
</li>
    </ul>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>

</html><?php }
}
