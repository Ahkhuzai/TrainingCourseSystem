<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourse.php';
$smarty=new Smarty();
error_reporting(0);
session_start();
$tcMan = new TrainingCourse();

if(isset($_SESSION['user_id']))
{
    if(isset($_POST['back']))
        header('Location:viewRequest.php');
        $sid=$_SESSION['sid']; 
        $tt_id=$_SESSION['tt_id'];
        $result=$tcMan->getSingleTrainingCourseInfo($tt_id);
        $smarty->assign('name',$result['tc_ar_name']);
        $smarty->assign('start_date',$result['start_date']);
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
            $smarty->display("SingleTCRequest.tpl"); 
            break;       
        }
        case 1: {
            $smarty->display("SingleTCRequest_UP.tpl"); 
            break;
        }
        case 11: {
            $smarty->display("SingleTCRequest_Av_Un.tpl"); break;
        }
        case 13: { 
            $smarty->display("SingleTCRequest_Av_Un.tpl"); 
            break;
        }
        case 6: { 
            header("Location:SingleTCRequest_InComplete.php"); 
            break;
        } 
    }
}
else 
{
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
}
?>