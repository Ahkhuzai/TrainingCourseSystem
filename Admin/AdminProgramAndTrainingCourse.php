<?php
include '../libs/smarty/libs/Smarty.class.php';
$smarty=new Smarty();
session_start(); 
error_reporting(0);
if (!isset($_SESSION['user_id'])) {
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
    if(isset($_POST['AddTc']))
        header('Location:AdminAddTrainingCourse.php');
    else if(isset($_POST['AddProgram']))
        header('Location:AdminAddProgram.php');
    else if(isset($_POST['Approve']))
        header('Location:AdminApproveTC.php');
    else if(isset($_POST['viewTC']))
        header('Location:AdminviewTC.php');
    $smarty->display("AdminProgramAndTrainingCourse.tpl");
}
?>