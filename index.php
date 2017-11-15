<?php
include 'libs/smarty/libs/Smarty.class.php';
require_once 'User.php';
//error_reporting(0);
$smarty=new Smarty();
session_start(); 
$_SESSION['user_id']=1;
if (!isset($_SESSION['user_id'])) {
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
    $user=new User();
    $result=$user->getUserInfo($_SESSION['user_id']);
    if($result)
    {
        $_SESSION['username']= $result['username'];
        $_SESSION['password']=$result['password'];
        $smarty->display("index.tpl");
    }
    else 
    {
        $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
        $smarty->display("unAuthorized.tpl");
    }
   
}
?>