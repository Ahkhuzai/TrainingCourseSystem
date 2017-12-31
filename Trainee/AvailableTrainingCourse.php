<?php
include '../libs/smarty/libs/Smarty.class.php';
error_reporting(0);
$smarty=new Smarty();
session_start(); 
if (!isset($_SESSION['user_id'])) {
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
}
else 
{
    $smarty->display("AvailableTrainingCourse.tpl");
}
?>