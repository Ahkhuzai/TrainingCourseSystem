<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'Assist/Config/smarty/libs/Smarty.class.php';
require_once 'User.php';
error_reporting(0);
$smarty=new Smarty();
$user = new User();

if (isset($_SESSION)) {
    session_destroy();
}

if(isset($_POST['login']) && ($_POST['isTrainer']==='true'))
{  
    if(!empty(trim($_POST['usrName'])) && !empty(trim($_POST['usrPass'])))
    {
        $usrName=$_POST['usrName'];
        $usrPassword=md5($_POST['usrPass']);
        $isUser = $user->validateUser($usrName,$usrPassword);
        if($isUser)
        {
            $isTrainer=$user->isTrainer($user->getId());            
            if($isTrainer)
            {
                session_start();    
                $_SESSION['usrname']=$usrName;
                $_SESSION['usrpassword']= $usrPassword ;
                $_SESSION['mode']='Trainer';

                header ('Location:main.php?mode=tr');
            }
            else 
                $smarty->assign ('msg','انت غير مسجل لدينا كمتدرب ');
        }
        else 
            $smarty->assign ('msg','الرجاء التأكد من بيانات الدخول '); 
    }
    else 
        $smarty->assign ('msg','الرجاء عدم ترك الحقول فارغة'); 
}

if (isset($_POST['newUser']) && ($_POST['isTrainer'] === 'true')) {
    $usrName=$_POST['usrName'];
    $usrPassword=md5($_POST['usrPass']);
    session_start();    
    $_SESSION['usrname']=$usrName;
    $_SESSION['usrpassword']= $usrPassword ;
    $_SESSION['mode']='Trainer';
    header('Location:newUsr.php');
}

if (isset($_POST['login']))
{
    if(!empty(trim($_POST['usrName'])) && !empty(trim($_POST['usrPass'])))
    {
        $usrName=$_POST['usrName'];
        $usrPassword=md5($_POST['usrPass']);
        $isUser = $user->validateUser($usrName,$usrPassword);
        if($isUser)
        {
            session_start();    
            $_SESSION['usrname']=$usrName;
            $_SESSION['usrpassword']= $usrPassword ;
            $_SESSION['mode']='Trainee';

            header ('Location:main.php');
        }
        else 
            $smarty->assign ('msg','الرجاء التأكد من بيانات الدخول ');
    }
    else 
        $smarty->assign ('msg','الرجاء عدم ترك الحقول فارغة'); 
}   
$smarty->display("index.tpl");
?>

