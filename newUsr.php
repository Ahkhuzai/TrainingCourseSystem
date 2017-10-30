<?php
include 'Assist/Config/smarty/libs/Smarty.class.php';
require_once 'User.php';
$smarty=new Smarty();
$user = new User();
if (isset($_POST['signup'])) {
    if ($_POST['NotUqu'] == 'true') {
        $smarty->display("newUserNotUqu.tpl");
    } 
    else if ($_POST['isUqu'] == 'true') {
        $usrName=$_POST['usrName'];
        $usrPassword=md5($_POST['usrPass']);
        $isUser = $user->validateUser($usrName,$usrPassword);
        if ($isUser) {
            session_start();    
            $_SESSION['usrname']=$usrName;
            $_SESSION['usrpassword']= $usrPassword ;
            $_SESSION['mode']='Trainer';
            header('Location:newUsrUqu.php');
        } else {
            $smarty->assign('msg', 'الرجاء التأكد من بيانات الدخول ');
            $smarty->display("newUsr.tpl");      
        }
    }
}
 else
    $smarty->display("newUsr.tpl");
?>