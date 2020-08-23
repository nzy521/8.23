<?php
namespace libs;
class smarty
{
    function __construct()
    {
        //smarty配置
        global $config;
        $smarty = new \Smarty();
        $templateDir=isset($config["smarty"]["templateDir"])?$config["smarty"]["templateDir"]:"template";
        $compileDir=isset($config["smarty"]["compileDir"])?$config["smarty"]["compileDir"]:"compile";
        $cacheDir=isset($config["smarty"]["cacheDir"])?$config["smarty"]["cacheDir"]:"cache";
        $smarty->setTemplateDir(TPL_PATH);
        $smarty->setCompileDir(COMPILE_PATH);
        $smarty->setCacheDir(CACHE_PATH);
        $this->smarty=$smarty;
    }
    function assion($attr,$val){
        $this->smarty->assign($attr,$val);
    }

    function display($file){
        $this->smarty->display($file);
    }
}