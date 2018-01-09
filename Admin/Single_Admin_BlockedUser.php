<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../RegistrationModule.php';
//error_reporting(0);
$smarty=new Smarty();
$trMan=new RegistrationModule();
session_start(); 

if (!isset($_SESSION['user_id'])) {
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
    	$user_id=$_SESSION['user_id'];
	$isAdmin=$trMan->isAdmin($user_id);           
    if($isAdmin)
    {   
        
    
        $te_id=$_SESSION['te_id'];
        
        if(isset($_POST['back']))
            header("Location:AdminViewBlocked.php");
        
        if (isset($_POST['removeBlock'])) {
            $res = $trMan->removeBlock($te_id);
            if($res)
            {
                echo "<script>alert('تم ازالة الحظر بنجاح')</script>";
                echo"<script>window.location='AdminViewBlocked.php';</script>";
            }
        }

        $result=$trMan->getTraineeInfo($te_id);
        $smarty->assign('name', $result['ar_name']);
        $smarty->assign('department',$result['department']);
        $smarty->assign('major',$result['major']);
        $smarty->assign('spical',$result['special']);
        $smarty->assign('phone',$result['contact_phone']);
        $smarty->assign('email',$result['email']);
        $smarty->assign('reg_status',$result['reg_status']);

        $smarty->display("Single_Admin_BlockedUser.tpl");
        
    } 
    else
    {
    	header("Location:AdminLogin.php");
    }
    
    

}
    
?>