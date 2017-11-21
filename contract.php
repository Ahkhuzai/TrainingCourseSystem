<?php
include 'libs/smarty/libs/Smarty.class.php';
error_reporting(0);
$smarty=new Smarty();
session_start();
if (!isset($_SESSION['user_id'])) {
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
    }
else 
{
    if(isset($_POST['agree']))
        header("Location:addTrainingDetails.php");

    if(isset($_POST['notAgree']))
        header("Location:trainer.php");
    $smarty->display("contract.tpl");
    
}

?>