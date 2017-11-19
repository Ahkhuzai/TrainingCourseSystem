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
    $smarty->assign('hours',$result['duration']);
    $smarty->assign('abstract',$result['abstract']);
    $smarty->assign('goals',$result['goals']);
    $smarty->display("ICsingleTC.tpl");
}
?>