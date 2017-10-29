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

if (isset($_POST['signup'])) {
    if ($_POST['NotUqu'] == 'true') {
        $smarty->display("newUserNotUqu.tpl");
    } else if ($_POST['isUqu'] == 'true') {
        $usrName=$_POST['usrName'];
        $usrPassword=md5($_POST['usrPass']);
        $isUser = $user->validateUser($usrName,$usrPassword);
        if ($isUser) {
            $smarty->display("newUserUqu.tpl");
        } else {
            $smarty->assign('msg', 'الرجاء التأكد من بيانات الدخول ');
            $smarty->display("newUsr.tpl");      
        }
    }
}
 else
        $smarty->display("newUsr.tpl");
 
?>

