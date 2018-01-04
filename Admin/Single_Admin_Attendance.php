<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourseModule.php';
$smarty=new Smarty();
error_reporting(0);
session_start();
$tcMan = new TrainingCourseModule();

if(isset($_SESSION['user_id']))
{   
    	$user_id=$_SESSION['user_id'];
	$isAdmin=$user->isAdmin($user_id);           
    if($isAdmin)
    {   
        if(isset($_POST['back']))
        header('Location:AdminviewAttendance.php');
    
    
        $tt_id=$_SESSION['tt_id'];
        $result=$tcMan->getSingleTrainingCourseInfo($tt_id);
        $smarty->assign('name',$result['tc_ar_name']);
        $smarty->assign('start_date',$result['start_date']);
        $smarty->assign('end_date',$result['end_date']);
        $smarty->assign('trname',$result['tr_ar_name']);
        $smarty->display("Single_Admin_Attendance.tpl");
    } 
    else
    {
    	header("Location:AdminLogin.php");
    }
}
else 
{
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
}
?>