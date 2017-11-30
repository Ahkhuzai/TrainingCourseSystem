<?php
include 'libs/smarty/libs/Smarty.class.php';
require_once 'User.php';
//error_reporting(0);
$smarty=new Smarty();
$user = new User();

if (isset($_SESSION)) {
    session_destroy();
}
 session_start(); 
if(isset($_POST['login']))
{ 
    print_r($_POST);
    if(!empty(trim($_POST['usrName'])) && !empty(trim($_POST['usrPass'])))
    {
        $usrName=$_POST['usrName'];
        $usrPassword=md5($_POST['usrPass']);
        $isUser = $user->validateUser($usrName,$usrPassword);
        if($isUser)
        { 
            $_SESSION['usrname']=$usrName;
                  
        }
        else 
            $smarty->assign ('error','الرجاء التأكد من بيانات الدخول '); 
    }
    else 
        $smarty->assign ('error','الرجاء عدم ترك الحقول فارغة'); 
}
$smarty->assign ('msg','use basemA for Trainer Account OR ahkhuzai for Trainee Account - password is 2323'); 
$smarty->display("login.tpl");
?>