<?php
include 'libs/smarty/libs/Smarty.class.php';
$smarty=new Smarty();
session_start(); 
error_reporting(0);
if (!isset($_SESSION['user_id'])) {
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
    if(isset($_SESSION['tt_id']))
    {
        switch($_SESSION['status'])
        {
        case 1: {header("Location: UPRegTC.php"); break;}
        case 2: {header("Location: AccRegTC.php"); break;}
        case 3: {header("Location: RJRegTC.php"); break;}
        case 4: {header("Location: MisRegTC.php"); break;}
        case 5: {header("Location: ExRegTC.php"); break;}
        }
    }
    else
    $smarty->display("viewRequest.tpl");
}
?>