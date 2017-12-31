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
        header('Location:registrationRequest.php'); 
    if (isset($_POST['printRegister'])) {
        header('Location:PrintRegistrationRequest.php');
    }      
    $tt_id=$_SESSION['tt_id'];
    $sid=$_SESSION['sid'];
    $result=$tcMan->getSingleTrainingCourseInfo($tt_id);
    $smarty->assign('name',$result['tc_ar_name']);
    $smarty->assign('start_date',$result['start_date']);
    $smarty->assign('end_date',$result['end_date']);
    $smarty->assign('hours',$result['duration']);
    $smarty->assign('capacity',$result['capacity']);
    $smarty->assign('location',$result['location']);
    $smarty->assign('abstract',$result['abstract']);
    $smarty->assign('goals',$result['goals']);
   
    $smarty->assign('trname',$result['tr_ar_name']);
    if ($sid == 2) {
        $smarty->assign('url',$result['url']);
        $smarty->display("SingleRegisterAccepted.tpl");
    } else
        $smarty->display("SingleRegister.tpl");
}
else 
{
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
}
?>