<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../RegistrationModule.php';
$user = new RegistrationModule();
$smarty=new Smarty();
session_start(); 
error_reporting(0);
if (!isset($_SESSION['user_id'])) {
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
    if(isset($_POST['back']))
        header('Location:Trainee.php');
    $user_id=$_SESSION['user_id'];
    $isAdmin=$user->isAdmin($user_id);           
    if($isAdmin)
    {   
        $smarty->display("AdminViewBlocked.tpl");
    } 
    else
    {
    	header("Location:AdminLogin.php");
    }
 
    
}
?>