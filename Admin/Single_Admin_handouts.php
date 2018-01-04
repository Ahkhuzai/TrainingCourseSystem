<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../RegistrationModule.php';
require_once '../TrainingCourseModule.php';
$smarty=new Smarty();
error_reporting(0);
session_start(); 
if (!isset($_SESSION['user_id'])) {
    
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
    $user_id=$_SESSION['user_id'];
    $isAdmin=$user->isAdmin($user_id);           
    if($isAdmin)
    {   
        $ho_id=$_SESSION['ho_id'];
        $tcMan=new TrainingCourseModule();
        $trMan=new RegistrationModule();

        $result=$tcMan->getHandoutRequestInfo($ho_id);
        $smarty->assign('teurl',$result['ho_trainee_dir']);
        $smarty->assign('trurl',$result['ho_trainer_dir']);
        $smarty->assign('prurl',$result['presentation_dir']);
        $smarty->assign('scurl',$result['scientific_chapter']);
        $smarty->assign('trname',$result['tr_ar_name']);

        if(isset($_POST['back']))
            header('Location:Handouts.php');

        $smarty->display("Single_Admin_handouts.tpl");
    } 
    else
    {
        header("Location:AdminLogin.php");
    }
    
}
?>