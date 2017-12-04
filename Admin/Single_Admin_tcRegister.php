<?php
include 'libs/smarty/libs/Smarty.class.php';
require_once 'TrainingCourse.php';
$smarty=new Smarty();
error_reporting(0);
session_start(); 
if (!isset($_SESSION['user_id'])) {
    
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
    $tt_id=$_SESSION['tt_id'];
    $tcMan=new TrainingCourse();
    $result=$tcMan->getSingleTrainingCourseInfo($tt_id);
    $smarty->assign('name',$result['tc_ar_name']);
    $smarty->assign('start_date',$result['start_date']);
    $smarty->assign('end_date',$result['end_date']);
    $smarty->assign('hours',$result['duration']);
    $smarty->assign('capacity',$result['capacity']);
    $smarty->assign('abstract',$result['abstract']);
    $smarty->assign('goals',$result['goals']);
    $smarty->assign('url',$result['url']);
    $smarty->assign('trname',$result['tr_ar_name']);
    if(isset($_POST['reject']))
    {
        if($result)
            echo '<script>alert("تم رفض عن الطلب بنجاح"); window.location = "AdminViewRequest.php";</script>';
         else
            echo '<script>alert("لم يتم رفض الطلب, الرجاء المحاولة في وقت لاحق")</script>';
       
    }
    if(isset($_POST['back']))
        header('Location:AdminViewRequest.php');
    
    $smarty->display("Single_Admin_tcRegister.tpl");
}
?>