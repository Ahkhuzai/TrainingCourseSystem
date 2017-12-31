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
    $ho_id=$_SESSION['ho_id'];
    $tcMan=new TrainingCourse();
    $result=$tcMan->getHandoutRequestInfo($ho_id);
    $smarty->assign('teurl',$result['ho_trainee_dir']);
    $smarty->assign('trurl',$result['ho_trainer_dir']);
    $smarty->assign('prurl',$result['presentation_dir']);
    $smarty->assign('scurl',$result['scientific_chapter']);
    $smarty->assign('trname',$result['tr_name']);
   
    if(isset($_POST['back']))
        header('Location:viewRequest.php');
    
    $smarty->display("SingleHORequest.tpl");
}
?>