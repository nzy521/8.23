<?php
header("content-type:text/html;charset=utf8;");
if(!defined("MVC")){
    die("访问路径不合法!");
}

//服务器所在路径
define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"]);

//入口文件的路径
define("ENTRY_PATH",ROOT_PATH.$_SERVER["SCRIPT_NAME"]);

//框架所在路径
define("MAIN_PATH",dirname(ENTRY_PATH).DIRECTORY_SEPARATOR);

//核心库所在的路径
define("LIBS_PATH",MAIN_PATH."lib".DIRECTORY_SEPARATOR);

//插件所在的路径
define("PLU_PATH",MAIN_PATH."plugins".DIRECTORY_SEPARATOR);
//缓存文件的路径
define("CACHE_PATH",APP_NAME."cache".DIRECTORY_SEPARATOR);
// 模板所在路径
define("TPL_PATH",APP_NAME."template".DIRECTORY_SEPARATOR);

//编译文件所在的目录
define("COMPILE_PATH",APP_NAME."compile".DIRECTORY_SEPARATOR);

//以下定义http协议访问的路径
define("HOST_ADD","http://".$_SERVER["HTTP_HOST"]);

//单入口地址
define("ENTRY_ADD",HOST_ADD.$_SERVER["SCRIPT_NAME"]);

//框架所在位置
define("MAIN_ADD",dirname(HOST_ADD.$_SERVER["SCRIPT_NAME"]).'/');

//当前应用地址
define("APP_ADD",MAIN_ADD.APP_DIR_NAME.'/');

//Smarty的所在位置
define("SMARTY_ADD",LIBS_PATH."smarty".DIRECTORY_SEPARATOR);


//静态文件的地址
define("STATIC_ADD",APP_ADD."static".'/');
//css的地址
define("CSS_ADD",STATIC_ADD."css".'/');

//js
define("JS_ADD",STATIC_ADD."js".'/');
//img
define("IMG_ADD",STATIC_ADD."img".'/');
//font
define("FONT_ADD",STATIC_ADD."font".'/');

//var_dump(CSS_ADD);
//var_dump($_SERVER);
// echo FONT_ADD;

//路由的概念
// index.php?name=XXX&age=XXX
//index.php/模块/控制/动作


//引入路由
$config=include_once APP_NAME."config.php";
//include_once LIBS_PATH."engin.class.php";
include_once LIBS_PATH."main.class.php";
include_once LIBS_PATH."route.class.php";
include_once SMARTY_ADD."Smarty.class.php";

function auto($classname){
    include_once MAIN_PATH.str_replace("\\",DIRECTORY_SEPARATOR,$classname).".class.php";
}
spl_autoload_register("auto");

$route =  new \lib\route();
$route->run();

//