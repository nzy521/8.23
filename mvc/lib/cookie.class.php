<?php
namespace lib;
class cookie{
    function setCookie($attr,$val,$second=0){
        if($second){
            setcookie($attr,$val,time()+$second);
        }else{
            setcookie($attr,$val);
        }
    }
    function getCookie($attr){
        return $_COOKIE[$attr];
    }

    function delCookie($attr){
        setcookie($attr,"",time()-10);
    }

    function isCookie($attr){
        return isset($_COOKIE[$attr]);
    }
}

