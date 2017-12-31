<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourse.php';
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
    $result=$tcMan->getProgramInfo($pid);
    $smarty->assign('name',$result['name']);
    $smarty->assign('hour',$result['hours']);
    $smarty->assign('abstract',$result['abstract']);
    $smarty->assign('goals',$result['goals']);

    if(isset($_POST['back']))
        header('Location:AvailableTrainingCourse.php');
    if (isset($_POST['register'])) {
        $teMan = new TrainingCourse();
        $userId=$_SESSION['user_id'];
        $result = $teMan->registerForProgram($userId,$pid);
        if($result=='true')
        {
            $smarty->assign('added','تم التسجيل بنجاح');
        }
        else if($result==-1)
            $smarty->assign('msg','حدث خطأ اثناء التسجيل في البرنامج, او من الممكن انه تم التسجيل مسبقا في البرنامج');
  
    }
    $smarty->display("SingleProgram.tpl");
}

?>