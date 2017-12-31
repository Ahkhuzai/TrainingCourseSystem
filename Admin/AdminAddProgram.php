<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourseModule.php';
$smarty=new Smarty();
error_reporting(0);
session_start();
$tcMan = new TrainingCourseModule();

if(isset($_SESSION['user_id']))
{
    if(isset($_POST['back']))
        header('Location:AdminMain.php');
    
    if(isset($_POST['addProgram']))
    {
        if(!EMPTY(trim($_POST['Tname'])) && !EMPTY(trim($_POST['engname'])) && !EMPTY(trim($_POST['abstract'])) && !EMPTY(trim($_POST['Goals'])) && !EMPTY(trim($_POST['Hours'])))
        {
            $name=$_POST['Tname'];
            $eng_name=$_POST['engname'];
            $abstract=$_POST['abstract'];
            $goals=$_POST['Goals'];
            $hours=$_POST['Hours'];
            $result=$tcMan->AddProgram($name,$eng_name,$abstract,$goals,$hours);
            if($result)
                $smarty->assign('added','تمت اضافة البرنامج بنجاح');
            else
                $smarty->assign('msg','حدث خطأ اثناء تنفيذ طلبك,الرجاء المحاولة لاحقا');
        }
        else 
            $smarty->assign('msg','الرجاء اكمال كافة الحقول');
            
    }
    $smarty->display("AdminAddProgram.tpl");
}
else 
{
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
}
?>