<?php
include 'libs/smarty/libs/Smarty.class.php';


$smarty=new Smarty();
session_start(); 
if (!isset($_SESSION['user_id'])) {
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
    if(isset($_POST['back']))
        header('Location:APsingleTC.php');
    $smarty->display("viewTrainee.tpl");
}
?>