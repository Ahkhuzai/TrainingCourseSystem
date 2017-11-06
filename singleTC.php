<?php
include 'libs/smarty/libs/Smarty.class.php';
//error_reporting(0);
$smarty=new Smarty();
$sid=$_GET['status'];
switch($sid)
{
    case 1: {
        $smarty->assign('url','js/singleTC_underProccesing.js');
        $smarty->display("singleTC_underProccesing.tpl");
        break;
    }
    case 2: {
        $smarty->assign('url','js/singleTC_accepted.js');
        $smarty->display("singleTC_accepted.tpl");
        break;
    }
    case 3: {
        $smarty->assign('url','js/singleTC_rejected.js');
        $smarty->display("singleTC_rejected.tpl");
        break;
    }
    case 6: {
        $smarty->assign('url','js/singleTC_complete.js');
        $smarty->display("singleTC_complete.tpl");
        break;
    }
    
    
}
?>