<?php
class index{
//动作
    function int(){
        $en = new Smarty();
        $en->setTemplateDir(TPL_PATH);
        $en->setCompileDir(COMPILE_PATH);
        $en->setCacheDir(CACHE_PATH);
        $en->caching=true;
        $en->cache_lifetime=1;

        $en->display("index.html");
    }
}