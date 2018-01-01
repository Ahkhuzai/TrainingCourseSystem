<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourseModule.php';
$smarty=new Smarty();
$tcMan= new TrainingCourseModule();
error_reporting(0);
session_start(); 
if (!isset($_SESSION['user_id'])) {
    
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
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
    
    $TC_Rate=$tcMan->getSingleTCRate($tt_id);
    for($i=0;$i<count($TC_Rate['comments']);$i++)
    {
        $comments[$i]=array('comments'=>$TC_Rate['comments'][$i]);
    }
 
    $smarty->assign('comments', $comments);
    
    if(isset($_POST['back']))
        header('Location:oldTrainingCourse.php');
    
    $smarty->display("SingleOldTrainingCourse.tpl");
}
?>