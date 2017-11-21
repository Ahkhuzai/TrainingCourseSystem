<?php
include 'libs/smarty/libs/Smarty.class.php';


$smarty=new Smarty();
session_start(); 
error_reporting(0);
if (!isset($_SESSION['user_id'])) {
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
    $smarty->display("viewRequest.tpl");
}
?>