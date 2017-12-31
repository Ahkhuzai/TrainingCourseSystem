<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourse.php';
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
    $smarty->assign('tr_name',$result['tr_ar_name']);
    $smarty->assign('start_date',$result['start_date']);
    $smarty->assign('end_date',$result['end_date']);
    if(isset($_POST['send']))
    {
     
        $usrId=$_SESSION['user_id'];
        $rid=$_SESSION['r_id'];
        $place=$_POST['place_rate'];
        $program=$_POST['Program_rate'];
        $orgnization=$_POST['orgnization_rate'];
        $presentation=$_POST['presentation_rate'];
        $presenter=$_POST['Presenter_rate'];
        $comment=$_POST['comments'];
        $result=$tcMan->insertRate($tt_id,$usrId,$place,$program,$orgnization,$presentation,$presenter,$comment,$rid);
        if ($result) {
            echo '<script>alert("تم إضافة التقييم بنجاح")</script>';
            echo '<script>window.location="'.'rateTrainingCourse.php'.'"; </script>';
        } else
            $smarty->assign('msg', "حدث خطأ اثناء كثابة التقييم الرجاء المحاولة لاحقاً");
    }
    
    if(isset($_POST['back']))
        header('Location:rateTrainingCourse.php');
    
    $smarty->display("SingleRate.tpl");
}
?>