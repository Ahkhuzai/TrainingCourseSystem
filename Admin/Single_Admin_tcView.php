<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourseModule.php';
$smarty=new Smarty();
error_reporting(0);
session_start();
$tcMan = new TrainingCourseModule();

if(isset($_SESSION['user_id']))
{
    if(isset($_POST['back']))
        header('Location:AdminviewTC.php');
    $sid=$_SESSION['sid']; 
    $tt_id=$_SESSION['tt_id'];

    $result=$tcMan->getSingleTrainingCourseInfo($tt_id);
    $smarty->assign('name',$result['tc_ar_name']);
    $smarty->assign('start_date',$result['start_date']);
    $smarty->assign('start_at',$result['start_at']);
    $smarty->assign('end_date',$result['end_date']);
    $smarty->assign('hours',$result['duration']);
    $smarty->assign('capacity',$result['capacity']);
    $smarty->assign('location',$result['location']);
    $smarty->assign('abstract',$result['abstract']);
    $smarty->assign('goals',$result['goals']);
    $smarty->assign('url',$result['url']);
    $smarty->assign('trname',$result['tr_ar_name']);
    
    switch($sid)
    {
        case 2: {
            $smarty->display("SingleAcceptedtcView.tpl"); 
            break;       
        }
        case 9: {
            $TC_Rate=$tcMan->getSingleTCRate($tt_id);
            for($i=0;$i<count($TC_Rate['comments']);$i++)
            {
                $comments[$i]=array('comments'=>$TC_Rate['comments'][$i]);
            }
 
            $smarty->assign('comments', $comments);
            $smarty->display("SingleCompletetcView.tpl"); 
            break;
        }
        case 10: {
            $smarty->display("SingleAvailabletcView.tpl"); break;
        }
        case 11: { 
            $smarty->display("SingleUnAvailabletcView.tpl"); 
            break;
        } 
    }
    if(isset($_POST['print']))
        print_r ($_SESSION);
}
else 
{
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
}
?>