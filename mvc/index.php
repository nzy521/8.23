<?php
//用来记录一个口令
session_start();
header("content-type:text/html;charset=utf8;");
define("MVC",true);
//魔术常量
//echo __DIR__;//当前程序运行的目录;
//echo "<br>";
//echo __FILE__;//当前运行的文件名称/=
//__CLASS__ 当前类的名字
//__MEDTHOD__ 当前函数的名字
//__LINE__　　当前程序所在的行
//echo __LINE__;
//echo DIRECTORY_SEPARATOR;
define("APP_DIR_NAME","application");
define("APP_NAME",__DIR__.DIRECTORY_SEPARATOR.APP_DIR_NAME.DIRECTORY_SEPARATOR);
require_once "lib\start.php" ;
//模板引擎的解析->
//html文件->不解析的,直接返回客户端
//php文件->(php模块)解析成html->客户端
//缓冲区