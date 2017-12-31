<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';
$smarty=new Smarty();
$tcMan=new TrainingCourseModule();
$trMan=new RegistrationModule();
session_start(); 
//error_reporting(0);
if (!isset($_SESSION['user_id'])) {
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
    if(isset($_POST['back']))
        header("Location:AdminViewTrainer.php");
    
    $tr_id=$_SESSION['tr_id'];
    $result=$trMan->getUserInfo($tr_id);
    $smarty->assign('name', $result['ar_name']);
    $smarty->assign('department',$result['department']);
    $smarty->assign('major',$result['major']);
    $smarty->assign('spical',$result['special']);
    $smarty->assign('phone',$result['contact_phone']);
    $smarty->assign('email',$result['email']);
    $totalTc=$tcMan->getTotalTrainerTC($tr_id);
    $smarty->assign('trRate',$tcMan->getTotalTrainerRate($totalTc));
    $smarty->assign('url',$result['resume']);
    $smarty->display("AdminSingleTrainer.tpl");

}
    
?>