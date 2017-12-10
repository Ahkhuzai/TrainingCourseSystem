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
    $ho_id=$_SESSION['ho_id'];
    $tcMan=new TrainingCourse();
    $result=$tcMan->getHandoutRequestInfo($ho_id);
    $smarty->assign('teurl',$result['ho_trainee_dir']);
    $smarty->assign('trurl',$result['ho_trainer_dir']);
    $smarty->assign('prurl',$result['presentation_dir']);
    $smarty->assign('scurl',$result['scientific_chapter']);
    $smarty->assign('trname',$result['tr_name']);
   
    if(isset($_POST['reject']))
    {
        $result= $tcMan->HandleHORequest($ho_id,1);
        if($result)
            echo '<script>alert("تم رفض عن الطلب بنجاح"); window.location = "AdminViewRequest.php";</script>';       
         else
            echo '<script>alert("لم يتم رفض الطلب, الرجاء المحاولة في وقت لاحق")</script>';
    }
    
    if(isset($_POST['accept']))
    {
        $result= $tcMan->HandleHORequest($ho_id,2);
        if($result)
            echo '<script>alert(" تم قبول عن الطلب بنجاح وسيتم ابلاغ مقدم الطلب بذلك"); window.location = "AdminViewRequest.php";</script>';
         else
            echo '<script>alert("لم يتم قبول الطلب, الرجاء المحاولة في وقت لاحق")</script>';
    }
    
    if(isset($_POST['back']))
        header('Location:AdminViewRequest.php');
    
    $smarty->display("Single_Admin_hoRequest.tpl");
}
?>