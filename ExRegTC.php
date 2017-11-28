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
    
    
    if(isset($_POST['re_register']))
    {
        $result=$tcMan->registerForTC($userId,$tt_id,$rid);
        if($result=='true')
        {
            $smarty->assign('added','تم التسجيل بنجاح');
        }
        else if($result=='-1')
            $smarty->assign('msg','تم تسجيل طلبكم مسبقا, الرجاء الذهاب لصفحة استعراض الطلبات لمتابعة حالة الطلب');
        else
            $smarty->assign('msg','حدث خطأ اثناء معالجة طلبك, الرجاء المحاولة لاحقا'); 
    }
    if(isset($_POST['back']))
        header('Location:registration.php');
    
    $smarty->display("ExRegTC.tpl");
}
?>