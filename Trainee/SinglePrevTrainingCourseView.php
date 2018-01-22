<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourseModule.php';
require_once '../DAL/RegistrationRepo.php';
$smarty=new Smarty();
error_reporting(0);
session_start();
$tcMan = new TrainingCourseModule();
$reg = new RegistrationRepo();
if(isset($_SESSION['user_id']))
{

    if(isset($_POST['back']))
        header('Location:prevTrainingCourse.php');
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
        $resultReg=$reg->fetchByID($_SESSION['r_id']);
        if ($resultReg['certificate_approved'] == 1) {
        $cer_status = "تم اعتماد الشهادة";
        $smarty->assign('btn_status','');
    } else {
        $cer_status = "لم يتم اعتماد الشهادة";
        $smarty->assign('btn_status', 'disabled');
    }
    if(isset($_POST['print'])&& $resultReg['certificate_approved'] == 1)
            header('Location:printCertificate.php');
    else if(isset($_POST['print'])&& $resultReg['certificate_approved'] == 0)
        echo "<script>alert('لم يتم اعتمادالشهادة بعد')</script>";
    $smarty->assign('cer_status',$cer_status);
    $smarty->display("SinglePrevTrainingCourseView.tpl");

}
else 
{
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
}
?>