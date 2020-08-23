<?php
namespace lib;
header("content-type:text/html;charset=utf8");
if(!defined("MVC")){
    die("访问路径不合法!");
}
class route{
    //模块
    private static $m;
    //控制
    private static $c;
    //方法
    private static $a;
    function __construct()
    {

    }

   private function getInfo(){
      $path = (isset($_SERVER["PATH_INFO"]))?substr($_SERVER["PATH_INFO"],1):"index/index/int";
        $patharr=explode("/",$path);
        self::$m=empty($patharr[0])?"index":$patharr[0];
        self::$c=empty($patharr[1])?"index":$patharr[1];
        self::$a=empty($patharr[2])?"int":$patharr[2];
        //echo self::$m.'/'.self::$c.'/'.self::$a;
    }
    function run(){
        $this->getInfo();
        //echo self::$m;
        $mpath = APP_NAME.self::$m;
        //echo $mpath;
        if(is_dir($mpath)){
           $curl = $mpath.DIRECTORY_SEPARATOR.self::$c.".class.php";
           if(is_file($curl)){
               include_once $curl;
               if(class_exists(self::$c)){
                   $classname = self::$c;
                   $obj = new $classname();
                   if(method_exists($obj,self::$a)){
                       $method = self::$a;
                        $obj->$method();
                   }else{
                       die ("this action not exists");
                   }
               }else{
                   die( "this class is not exists");
               }
           }else{
              die("this classfile is not exists");
           }
        }else{
            die("this module is not exists");
        }
    }
}