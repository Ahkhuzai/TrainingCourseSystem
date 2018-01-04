<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../RegistrationModule.php';

$regMan=new RegistrationModule();
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
        $smarty->assign('display','none');
        if(isset($_POST['back']))
            header("Location:Trainee.php");
        if(isset($_POST['search']))
        {

            $te_uqu=$_POST['trainee'];
            $tePersonaInfo=$regMan->getUserInfoByUqu($te_uqu);
            if($tePersonaInfo)
            {
                $smarty->assign('display','');
                $_SESSION['TraineeID']=$tePersonaInfo['id'];
                $result=$regMan->getTraineeInfo($tePersonaInfo['id']);
                $smarty->assign('name', $result['ar_name']);
                $smarty->assign('department',$result['department']);
                $smarty->assign('major',$result['major']);
                $smarty->assign('spical',$result['special']);
                $smarty->assign('phone',$result['contact_phone']);
                $smarty->assign('email',$result['email']);
                $smarty->assign('reg_status',$result['reg_status']);
            }
            else
            {
                $smarty->assign('msg', "رقم المنسوب خاطئ او فارغ");
            }      
        }
        $smarty->display("AdminRegisterTrainee.tpl");
    } 
    else
    {
    	header("Location:AdminLogin.php");
    }
    
}
    
?>