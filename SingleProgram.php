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

    if(isset($_POST['back']))
        header('Location:availableTraining.php');
    if (isset($_POST['register'])) {
        $teMan = new TrainingCourse();
        $userId=$_SESSION['user_id'];
        $result=$teMan->registerForProgram($userId,$pid);
        if($result=='true')
        {
            $smarty->assign('added','تم التسجيل بنجاح');
        }
        else if($result=='-1')
            $smarty->assign('msg','تم تسجيل طلبكم مسبقا, الرجاء الذهاب لصفحة استعراض الطلبات لمتابعة حالة الطلب');
        else
            $smarty->assign('msg','حدث خطأ اثناء معالجة طلبك, الرجاء المحاولة لاحقا');   
    }
    $smarty->display("SingleProgram.tpl");
}

?>