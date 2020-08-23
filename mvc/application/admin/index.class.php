<?php
if (!defined("MVC")) {
    die("非法入侵");
}
use \libs\smarty;
use \libs\db;

class index  {
    function int()
    {
//        $smarty = new Smarty();
//        $smarty->setTemplateDir(TPL_PATH);
//        $smarty->setCompileDir(COMPILE_PATH);
//        $smarty->setCacheDir(CACHE_PATH);
//        $smarty->display("admin/admin.html");
        //$this->smarty->display("admin/admin.html");
        $smarty=new smarty();
    }
    function login()
    {
        $uname = addslashes($_POST["uname"]);//对SQL语句进行转义
        $pass = md5(md5($_POST["pass"]));
        if($_POST["code"]!==$_SESSION["code"]){
            echo "验证码有误";
            return;
        }

        if(strlen($uname)<5||empty($pass)){
            echo "用户名和密码不符合规范!";
            return;
        }

        //用户表存储用户的主要信息 //如果需要更多的信息 则创建一个新的副表
//        $db = new mysqli("localhost","root","","wuif2006","3308");
//        if (mysqli_connect_error()) {
//            die("连接数据库错误！");
//        }
//        $db->query("set names utf8");
        $database=new db();
        $db=$this->db;
        $result = $db->query("select * from muc_user where uname='$uname' and pass='$pass'");
       if($result->num_rows<1){
           echo "没有相应的数据,请重新登录";
       }else{
           $_SESSION["login"]="yes";
           $_SESSION["uname"]=$uname;
           header("location:/index.php/admin/index/first");
       }
       $db->close();
    }
    function logout(){
        session_destroy();
        herder("location:/index.php/admin");
    }
    function first(){

        if (isset($_SESSION["login"])&&$_SESSION["login"]="yes"){
            $smarty=new smarty();
            $smarty->assion("uname", $_SESSION["uname"]);
            $smarty->display("admin/index.html");

        }else{
            header("location:/index.php/admin");
        }


    }

}
