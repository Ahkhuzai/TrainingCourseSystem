<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../RegistrationModule.php';
error_reporting(0);
$smarty=new Smarty();
session_start(); 
$tRegMan=new RegistrationModule();
if (!isset($_SESSION['user_id'])) {
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
    $user_id=$_SESSION['user_id'];
    $isTrainee= $tRegMan->isTrainee($user_id);
    if($isTrainee)
        $smarty->display("index.tpl");   
    else
    {
        echo '<script>alert("انت غير مسجل كمتدرب في النظام");</script>';
        echo '<script>window.location="../index.php"</script>';
    } 
}
?>