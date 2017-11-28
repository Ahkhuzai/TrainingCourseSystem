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
    $cer_app=$_SESSION['cer_app'];
    $tcMan=new TrainingCourse();
    $result=$tcMan->getSingleTrainingCourseInfo($tt_id);
    $smarty->assign('name',$result['name']);
    $smarty->assign('start_date',$result['start_date']);
    $smarty->assign('end_date',$result['end_date']);
    $smarty->assign('hours',$result['duration']);
    $smarty->assign('abstract',$result['abstract']);
    $smarty->assign('goals',$result['goals']);
  
    if($cer_app==0)
        $smarty->assign('certificate','الشهادة غير جاهزة بعد');
    else 
        $smarty->assign('certificate','<a href="uploads/handouts/tc/task_table.pdf"> لتحميل الشهادة - اضغط هنا</a>');
    
    if(isset($_POST['back']))
        header('Location:oldRegister.php');
    
    $smarty->display("oldSingleReg.tpl");
}
?>