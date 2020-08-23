<?php
use libs\code;
class main {
    function __construct(){
        global $config;
        //smarty配置
        $smarty = new \Smarty();
        $templateDir=isset($config["smarty"]["templateDir"])?$config["smarty"]["templateDir"]:"template";
        $compileDir=isset($config["smarty"]["compileDir"])?$config["smarty"]["compileDir"]:"compile";
        $cacheDir=isset($config["smarty"]["cacheDir"])?$config["smarty"]["cacheDir"]:"cache";
        $smarty->setTemplateDir(TPL_PATH);
        $smarty->setCompileDir(COMPILE_PATH);
        $smarty->setCacheDir(CACHE_PATH);
        $this->smarty=$smarty;

//数据库配置
        $host=isset($config["database"]["host"])?$config["database"]["host"]:"localhost";
        $username=isset($config["database"]["username"])?$config["database"]["username"]:"root";
        $password=isset($config["database"]["password"])?$config["database"]["password"]:"";
        $dbname=isset($config["database"]["dbname"])?$config["database"]["dbname"]:"";
        $port=isset($config["database"]["port"])?$config["database"]["port"]:3308;

        $db= new mysqli($host,$username,$password,$dbname,$port);
        if($db->connect_error){
            echo "数据库连接出错";
        }
        $db->query("set names utf8");
        $this->db=$db;
    }
}