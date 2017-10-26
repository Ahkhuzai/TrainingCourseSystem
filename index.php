<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'Assist/Config/smarty/libs/Smarty.class.php';
require_once 'User.php';

$smarty=new Smarty();
if(isset($_POST['login']) && ($_POST['isTrainer']==='true'))
{
    $user = new User();
    $usrName=$_POST['usrName'];
    $usrPassword=$_POST['usrPass'];
    $isUser = $user->validateUser($usrName,$usrPassword);
    if($isUser)
    {
        $isTrainer=$user->isTrainer($user->getId());
        echo $isTrainer;
        if($isTrainer)
            header ('Location:main.php?mode=Trainer');
        else 
            $smarty->assign ('msg','انت غير مسجل لدينا كمتدرب ');
    }
    else 
        $smarty->assign ('msg','الرجاء التأكد من بيانات الدخول ');
        
}
elseif (isset($_POST['newUser']) && ($_POST['isTrainer']==='true'))
    header ('Location:newUser.php');
else if (isset($_POST['login']))
    header ('Location:main.php?mode=Trainee');
$smarty->display("index.tpl");
?>
