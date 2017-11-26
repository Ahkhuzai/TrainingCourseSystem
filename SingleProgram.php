<?php


?>
<?php
include 'libs/smarty/libs/Smarty.class.php';
require_once 'TrainingCourse.php';

error_reporting(0);
$smarty=new Smarty();
session_start(); 
if (!isset($_SESSION['user_id'])) {
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
}
else 
{
    $tcMan = new TrainingCourse();
    $pid=$_SESSION['program_id'];
    $result=$tcMan->getSingleProgram($pid);
    $smarty->assign('name',$result['name']);
    $smarty->assign('hour',$result['hours']);
    $smarty->assign('abstract',$result['abstract']);
    $smarty->assign('goals',$result['goals']);

    $smarty->display("SingleProgram.tpl");
}

?>