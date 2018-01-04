<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';
$smarty=new Smarty();
error_reporting(0);
session_start();
$tcMan = new TrainingCourseModule();
$trMan = new RegistrationModule();

if(isset($_SESSION['user_id']))
{
    $user_id=$_SESSION['user_id'];
    $isAdmin=$user->isAdmin($user_id);           
    if($isAdmin)
    {   
        if(isset($_POST['back']))
        header('Location:ApproveTrainingCourse.php');
    
        $tt_id=$_SESSION['tt_id'];
        $result=$tcMan->getSingleTrainingCourseInfo($tt_id);
        $smarty->assign('tcname',$result['tc_ar_name']);
        $smarty->assign('trname',$result['tr_ar_name']);
        $smarty->assign('trid',$result['tr_id']);
        $smarty->assign('tcEngname',$result['tc_eng_name']);  
        $smarty->assign('start_date',$result['start_date']);
        $smarty->assign('end_date',$result['end_date']);
        $smarty->assign('start_at',$result['start_at']);
        $smarty->assign('capacity',$result['capacity']);
        $smarty->assign('hours',$result['duration']);
        $smarty->assign('abstract',$result['abstract']);
        $smarty->assign('location',$result['location']);
        $smarty->assign('goals',$result['goals']);  
        $smarty->assign('type',$result['type']);
        $smarty->assign('url_act', '<a href="' . $result['url'] . '"> لرؤية الحقيبة التدريبية التي سبق رفعها مسبقا اضغط هناَ </a>');   
        $smarty->assign('url',$result['url']);

        if(isset($_POST['approve']))
        {
            if(!empty(trim($_POST['Tname'])) && !empty(trim($_POST['tr_id'])) && !empty(trim($_POST['abstract'])) && !empty(trim($_POST['Goals'])) && !empty(trim($_POST['Hours'])) && !empty(trim($_POST['stime'])) && !empty(trim($_POST['etime'])) && !empty(trim($_POST['type'])) && !empty(trim($_POST['start_at'])) && !empty(trim($_POST['capacity'])) && !empty(trim($_POST['Location']))) 
            {
                $handoutDir = $_POST['url'];
                $pid=$result['pid'];
                $Tname = $_POST['Tname'];
                $eng_name = $_POST['engname'];
                $Tabstract = $_POST['abstract'];
                $Tgoals = $_POST['Goals'];
                $Thours = $_POST['Hours'];
                $Tstart = $_POST['stime'];
                $Tend = $_POST['etime'];
                $Tcapacity = $_POST['capacity'];
                $Tstatus = 10;
                $type = $_POST['type'];
                $Tavailable_seat = $Tcapacity;
                $addDate = $result['add_date'];
                $startAt = $_POST['start_at'];
                $location = $_POST['Location'];
                $usrId = $_POST['tr_id'];
                $tc_avg = 0;

                $result=$tcMan->addTrainingCourse($tt_id,$usrId,$pid,$Tname,$eng_name,$Tabstract,$Tgoals,$Thours,$Tstart,$Tend,$Tcapacity,$Tstatus,$Tavailable_seat,$handoutDir,$addDate,$startAt,$location,$tc_avg,$type);                                  
                if ($result)
                {
                    echo '<script>alert("تم إعتماد الدورة بنجاح"); window.location = "ApproveTrainingCourse.php";</script>';    
                }
                else 
                    $smarty->assign('msg', "حدث خطأ ولم يتم اعتماد الدورة");
            }
            else {
                $smarty->assign('msg', 'يجب إكمال كافة الحقول');
            }
        }

        $smarty->display("Single_Admin_tcApprove.tpl");
    } 
    else
    {
    	header("Location:AdminLogin.php");
    }
}
else 
{
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
}
?>