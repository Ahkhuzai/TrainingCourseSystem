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
    $smarty->assign('name',$result['name']);
    $smarty->assign('start_date',$result['start_date']);
    $smarty->assign('end_date',$result['end_date']);
    $smarty->assign('hours',$result['duration']);
    $smarty->assign('abstract',$result['abstract']);
    $smarty->assign('goals',$result['goals']);
    $link= $tcMan->getHandOutForTc($tt_id);
    $smarty->assign('url',$link);
    
    if(isset($_POST['apologize']))
    {
        $result= $tcMan->apologizeForTc($_SESSION['user_id'],$tt_id);
        if($result)
            $smarty->assign('added','تم تنفيذ الطلب بنجاح');
        else {
            $smarty->assign('msg','حصلت مشكلة اثناء معالجة طلبك,الرجاء المحاولة لاحقا');
        }
    }
    if(isset($_POST['back']))
        header('Location:registration.php');
    
    $smarty->display("AccRegTC.tpl");
}
?>