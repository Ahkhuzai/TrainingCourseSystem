<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../RegistrationModule.php';
$user=new RegistrationModule();
error_reporting(0);
$smarty=new Smarty();
session_start(); 
$_SESSION['user_id']=177;
if (!isset($_SESSION['user_id'])) {
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
    $result=$user->getUserInfo($_SESSION['user_id']);
    if($result)
    {
        $_SESSION['username']= $result['username'];
        $_SESSION['password']=$result['password'];
        $smarty->display("indexq.tpl");
    }
    else 
    {
        $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
        $smarty->display("unAuthorized.tpl");
    }

}
?>