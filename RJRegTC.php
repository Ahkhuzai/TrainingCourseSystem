<?php
include 'libs/smarty/libs/Smarty.class.php';
require_once 'TrainingCourse.php';
$smarty=new Smarty();
//error_reporting(0);
session_start(); 
if (!isset($_SESSION['user_id'])) {
    
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
    $tt_id=$_SESSION['tt_id'];
    $userId=$_SESSION['user_id'];
    $rid=$_SESSION['rid'];
    $tcMan=new TrainingCourse();
    $result=$tcMan->getSingleTrainingCourseInfo($tt_id);
    $smarty->assign('name',$result['name']);
    $smarty->assign('start_date',$result['start_date']);
    $smarty->assign('end_date',$result['end_date']);
    $smarty->assign('hours',$result['duration']);
    $smarty->assign('abstract',$result['abstract']);
    $smarty->assign('goals',$result['goals']);
    
    
    if(isset($_POST['delete']))
    {
       $result=$tcMan->deleteReg($rid);
        if ($result) {
            echo '<script>alert("تم حذف الطلب بنجاح"); window.location = "registration.php";</script>';
        } else
            echo '<script>alert("لم يتم حذف طلبك, الرجاء المحاولة في وقت لاحق")</script>';
    }
    if(isset($_POST['back']))
        header('Location:registration.php');
    
    $smarty->display("RJRegTC.tpl");
}
?>