<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';
$user = new RegistrationModule();
$smarty=new Smarty();
error_reporting(0);
session_start();
$tcMan = new TrainingCourseModule();

if(isset($_SESSION['user_id']))
{
    $user_id=$_SESSION['user_id'];
    $isAdmin=$user->isAdmin($user_id);           
    if($isAdmin)
    {   
        if(isset($_POST['back']))
            header('Location:AdminCertificatePrint.php');
 
        $p_id=$_SESSION['p_id'];
  

        $result=$tcMan->getProgramInfo($p_id);
        $smarty->assign('name',$result['name']);
        $smarty->assign('abstract',$result['abstract']);
        $smarty->assign('goals',$result['goals']);
        $smarty->assign('hours',$result['hours']);
        $smarty->assign('trname',$result['tr_ar_name']);
        $smarty->display("ProgramCerPrint.tpl"); 
        
}
else 
{
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
}
}
?>