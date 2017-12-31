<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourse.php';
$smarty=new Smarty();
//error_reporting(0);
session_start();
$tcMan = new TrainingCourse();

if(isset($_SESSION['user_id']))
{   
    if(isset($_POST['back']))
        header('Location:AvailableTrainingCourse.php'); 
    if (isset($_POST['add'])) {
    
        $isRegister=$tcMan->IsTraineeRegistered($_SESSION['user_id'], $_SESSION['tt_id']);
        if(!$isRegister)
        {
        $result_tc = $tcMan->RegisterTraineeInTC($_SESSION['user_id'], $_SESSION['tt_id'], 1);
        if($result_tc)
                $smarty->assign ('added','تم التسجيل في الدورة بنجاح,لمتابعة الطلب يرجى الذهاب الى صفحة استعراض الطلبات');
            else
                $smarty->assign ('msg','حدث خطأ اثناء محاولة التسجيل, الرجاء المحاولة لاحقا');
        }
        else {
            $smarty->assign ('msg','لقد تم تسجيلك مسبقا في هذه الدورة, لمتابعة الطلب الخاص بك الرجاء التوجه لصفحة استعراض الطلبات');
        }
     
    }
    $tt_id=$_SESSION['tt_id'];
    $result=$tcMan->getSingleTrainingCourseInfo($tt_id);
    $smarty->assign('name',$result['tc_ar_name']);
    $smarty->assign('start_date',$result['start_date']);
    $smarty->assign('end_date',$result['end_date']);
    $smarty->assign('hours',$result['duration']);
    $smarty->assign('capacity',$result['capacity']);
    $smarty->assign('location',$result['location']);
    $smarty->assign('abstract',$result['abstract']);
    $smarty->assign('goals',$result['goals']);
    $smarty->assign('url',$result['url']);
    $smarty->assign('trname',$result['tr_ar_name']);
    
    $smarty->display("SingleTrainingCourseView.tpl");
}
else 
{
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
}
?>