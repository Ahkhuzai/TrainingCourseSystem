<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourseModule.php';
$smarty=new Smarty();
error_reporting(0);
$tcMan=new TrainingCourseModule();
session_start(); 
if (!isset($_SESSION['user_id'])) {
    
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
        if(isset($_POST['back']))
            header('Location:prevTrainingCourse.php');
        if(isset($_POST['print']))
            header('Location:Single_Program_Print.php');
 
        $p_id=$_SESSION['p_id'];
        $result=$tcMan->getProgramInfo($p_id);
        $smarty->assign('name',$result['name']);
        $smarty->assign('abstract',$result['abstract']);
        $smarty->assign('goals',$result['goals']);
        $smarty->assign('hours',$result['hours']);            
        $smarty->display("SingleProgram.tpl"); 

    } 
?>