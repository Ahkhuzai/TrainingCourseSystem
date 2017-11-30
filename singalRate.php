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

    $tcMan=new TrainingCourse();
    $result=$tcMan->getSingleTrainingCourseInfo($tt_id);
    $smarty->assign('name',$result['name']);
    $smarty->assign('start_date',$result['start_date']);
    $smarty->assign('end_date',$result['end_date']);
    $smarty->assign('hours',$result['duration']);
    $smarty->assign('abstract',$result['abstract']);
    $smarty->assign('goals',$result['goals']);
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
        // not implemented yet.
        $result=$tcMan->insertRate($tt_id,$usrId,$place,$program,$orgnization,$presentation,$presenter,$comment,$rid);
        if($result)
            $smarty->assign('added',"تم إضافة التقييم بنجاح");
        else
            $smarty->assign('msg',"حدث خطأ اثناء كثابة التقييم الرجاء المحاولة لاحقاً");
    }
    
    if(isset($_POST['back']))
        header('Location:tcForRate.php');
    
    $smarty->display("singalRate.tpl");
}
?>