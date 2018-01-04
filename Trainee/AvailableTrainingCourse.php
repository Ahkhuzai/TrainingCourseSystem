<?php
include '../libs/smarty/libs/Smarty.class.php';
include_once '../RegistrationModule.php';
$trMan = new RegistrationModule();
error_reporting(0);
$smarty=new Smarty();
session_start(); 
if (!isset($_SESSION['user_id'])) {
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
}
else 
{
    $user_id=$_SESSION['user_id'];
    $isBlocked=$trMan->isBlock($user_id);
    if (!$isBlocked)
        $smarty->display("AvailableTrainingCourse.tpl");
    else {
        $smarty->assign('msg',"انت محظور من التسجيل بسبب التغيب عن ثلاث دورات تدريبية أو اكثر");
        $smarty->display("Blocked.tpl");
    }
}
?>