<?php
include 'libs/smarty/libs/Smarty.class.php';


$smarty=new Smarty();
session_start(); 
if (!isset($_SESSION['user_id'])) {
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
    if(isset($_SESSION['tt_id']))
    {
        switch($_SESSION['status'])
        {
        case 1: {header("Location: UPsingleTC.php"); break;}
        case 2: {header("Location: APsingleTC.php"); break;}
        case 3: {header("Location: RJsingleTC.php"); break;}
        case 6: {header("Location: ICsingleTC.php"); break;}
        }
    }
    else
    $smarty->display("viewRequest.tpl");
}
?>