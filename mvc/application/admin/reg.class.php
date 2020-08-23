<?php
class reg
{
    function add()
    {
        $smarty = new Smarty();
        $smarty->setTemplateDir(TPL_PATH);
        $smarty->setCompileDir(COMPILE_PATH);
        $smarty->setCacheDir(CACHE_PATH);
        $smarty->display("admin/reg.html");
    }
    function addUser()
    {
        $uname = $_POST["uname"];
        //echo $uname;
        //echo "<br>";
        $pass = $_POST["pass"];
       // echo $pass;
       // echo "<br>";
        $pass1 = $_POST["pass1"];
        //echo $pass1;
        if($pass!==$pass1){
            echo "密码不一致!";
            return;
        }
        $db = new mysqli("localhost","root","","wuif2006","3308");
        if (mysqli_connect_error()) {
            die("连接数据库错误！");
        }
        $db->query("set names utf8");
        $result  = $db->query("select uname from muc_user where uname='{$uname}'");
        if($result->num_rows>0){
            echo "用户名存在";
        }else {
            $pass = md5(md5($pass));
            $db->query("insert into muc_user (uname,pass) VALUES ('{$uname}','{$pass}')");
            echo "insert into muc_user (uname,pass) VALUES ('$uname','$pass')";
            if($db->affected_rows>0) {
                echo "注册成功!";
            }
        }
    }
    function checkName(){
        $uname = $_POST["uname"];
        $db = new mysqli("localhost","root","","wuif2006","3308");
        if (mysqli_connect_error()) {
            die("连接数据库错误！");
        }
        $db->query("set names utf8");
        $result  = $db->query("select uname from muc_user where uname='{$uname}'");
        if($result->num_rows==0){
            echo "true";
        }else{
            echo "false";
        }
    }
}
