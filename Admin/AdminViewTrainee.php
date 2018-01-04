<?php
include '../libs/smarty/libs/Smarty.class.php';
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
    {   $info = $user->getUserInfo($user_id);
        $smarty->assign('username',$info['username']);
        $smarty->display("AdminViewTrainee.tpl");
    } 
    else
    {
    	header("Location:AdminLogin.php");
    }
 
    
}
?>