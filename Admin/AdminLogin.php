<?php
include 'libs/smarty/libs/Smarty.class.php';
require_once 'RegistrationModule.php';
error_reporting(0);
$smarty=new Smarty();
$user = new RegistrationModule();
if(isset($_POST['login']))
{ 
    if(!empty(trim($_POST['usrName'])) && !empty(trim($_POST['usrPass'])))
    {
        $usrName=$_POST['usrName'];
        $usrPassword=md5($_POST['usrPass']);
        $result = $user->validateUser($usrName,$usrPassword);
        if($result)
        { 
          
            session_start(); 
            
            $_SESSION['user_id']=$result['id'];
            header("Location:AdminMain.php");
                  
        }
        else 
            $smarty->assign ('error','الرجاء التأكد من بيانات الدخول '); 
    }
    else 
        $smarty->assign ('error','الرجاء عدم ترك الحقول فارغة'); 
}
$smarty->assign ('msg','use Admin for username and admin for password'); 
$smarty->display("AdminLogin.tpl");

?>