<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../RegistrationModule.php';
error_reporting(0);
session_start(); 
$smarty=new Smarty();
$user = new RegistrationModule();

if (!isset($_SESSION['user_id'])) {
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
	$user_id=$_SESSION['user_id'];
	$isAdmin=$user->isAdmin($user_id);           
    if($isAdmin)
    {   $info = $user->getUserInfo($user_id);
        $smarty->assign('username',$info['username']);
        $smarty->display("Handouts.tpl");
    } 
    else
    {
    	header("Location:AdminLogin.php");
    }
}
?>