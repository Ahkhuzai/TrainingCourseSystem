<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';
error_reporting(0);
session_start(); 
$smarty=new Smarty();
$user = new RegistrationModule();

if (!isset($_SESSION['user_id'])) {
    
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
    $user_id=$_SESSION['user_id'];
    $isAdmin=$user->isAdmin($user_id);           
    if($isAdmin)
    {
        $tt_id=$_SESSION['tt_id'];
        $tcMan=new TrainingCourseModule();
        $result=$tcMan->getSingleTrainingCourseInfo($tt_id);
        $smarty->assign('name',$result['tc_ar_name']);
        $smarty->assign('start_date',$result['start_date']);
        $smarty->assign('end_date',$result['end_date']);
        $smarty->assign('hours',$result['duration']);
        $smarty->assign('capacity',$result['capacity']);
        $smarty->assign('abstract',$result['abstract']);
        $smarty->assign('goals',$result['goals']);
        $smarty->assign('url',$result['url']);
        $smarty->assign('trname',$result['tr_ar_name']);

        if(isset($_POST['close']))
        {
            $result=$user->closeRegister($tt_id);
            if($result)
                 echo '<script>alert("تم اغلاق التسجيل بنجاح"); window.location = "AdminViewRequest.php";</script>';       
             else
                echo '<script>alert("لم يتم اغلاق التسجيل, الرجاء المحاولة في وقت لاحق")</script>';
        }
        if(isset($_POST['back']))
            header('Location:AdminViewRequest.php');
        
        $smarty->display("Single_Admin_tcRegister.tpl");
    }
    else
    {
        header("Location:AdminLogin.php");
    }
}
?>