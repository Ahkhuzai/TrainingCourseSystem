<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../RegistrationModule.php';
$user = new RegistrationModule();
$smarty=new Smarty();
session_start(); 
//error_reporting(0);
if (!isset($_SESSION['user_id'])) {
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
    $user_id=$_SESSION['user_id'];
    $isAdmin=$user->isAdmin($user_id);           
    if($isAdmin)
    {   
        if (isset($_POST['create'])) {
            $ids = explode("-", $_POST['ids']);
            if(count($ids)>0)
            {
                if(isset($_SESSION['ids']))
                    unset($_SESSION['ids']);
                for($i=0;$i<count($ids)-1;$i++)
                    $_SESSION['ids'][$i]=$ids[$i];
              
                header('Location:totalTCStatistic.php');
            }
            else 
                $smarty->assign ('msg','لم تقم بإختيار اي دورة');
        }
        $smarty->display("trainingCourseSta.tpl");
    } 
    else
    {
    	header("Location:AdminLogin.php");
    }
}
?>