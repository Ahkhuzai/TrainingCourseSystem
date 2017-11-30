<?php
include 'libs/smarty/libs/Smarty.class.php';
require_once 'TrainingCourse.php';
$smarty=new Smarty();
$tcMan=new TrainingCourse();
error_reporting(0);
session_start(); 
if (!isset($_SESSION['user_id'])) {

    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
} else {
    $tt_id=$_SESSION['tt_id'];
    if(isset($_POST['deleteTraining']))
    {
        $result=$tcMan->deleteCourse($tt_id);
        if ($result) {
            echo '<script>alert("تم حذف الطلب بنجاح"); window.location = "viewRequest.php";</script>';
        } else
            echo '<script>alert("لم يتم حذف طلبك, الرجاء المحاولة في وقت لاحق")</script>';
    }
    if(isset($_POST['saveTraining']) )
    {       
        if(!empty(trim($_POST['Tname'])))
        {   
            $usrId=$_SESSION['user_id'];
            $Tname=$_POST['Tname'];
            $Tabstract=$_POST['abstract'];
            $Tgoals=$_POST['Goals'];
            $Thours=$_POST['Hours'];
            $Tstart=$_POST['stime'];
            $Tend = $_POST['etime'];  
            $Tcapacity=0;
            $Tstatus=6;
            $Tavailable_seat=0;
            $handoutDir=$_POST['handout_url'];
            $addDate=date("Y-m-d");
            $startAt="00:00:00";
            $location="-";
           
            $tc_avg=0; 
            $result=$tcMan->addTraining($tt_id,$usrId,null,$Tname,$Tabstract,$Tgoals,$Thours,$Tstart,$Tend,$Tcapacity,$Tstatus,$Tavailable_seat,$handoutDir,$addDate,$startAt,$location,$tc_avg);    
            if($result)
                $smarty->assign ('added','تم حفظ الطلب بنجاح , لإستكمال الطلب الرجاء الذهاب الى صفحة استعراض الطلبات');
        }
        else 
            $smarty->assign ('msg','يجب أدخال اسم الدورة ليتم حفظ الطلب');
    
       
        }
    if(isset($_POST['addTraining'])  )
    {   
        if(!empty(trim($_POST['Tname']))&& !empty(trim($_POST['abstract'])) && !empty(trim($_POST['Goals'])) && !empty(trim($_POST['Hours']))
                && !empty(trim($_POST['stime'])) && !empty(trim($_POST['etime'])) )
        {
            $usrId=$_SESSION['user_id'];
            $Tname=$_POST['Tname'];
            $Tabstract=$_POST['abstract'];
            $Tgoals=$_POST['Goals'];
            $Thours=$_POST['Hours'];
            $Tstart=$_POST['stime'];
            $Tend = $_POST['etime'];  
            $Tcapacity=0;
            $Tstatus=1;
            $Tavailable_seat=0;
            $handoutDir=$_POST['handout_url'];
            $addDate=date("Y-m-d");
            $startAt="00:00:00";
            $location="-";
           
            $tc_avg=0;                   
            $result=$tcMan->addTraining($tt_id,$usrId,null,$Tname,$Tabstract,$Tgoals,$Thours,$Tstart,$Tend,$Tcapacity,$Tstatus,$Tavailable_seat,$handoutDir,$addDate,$startAt,$location,$tc_avg);    
            if($result)
                $smarty->assign ('added','تم اضافة الطلب بنجاح');
            
        }
        else 
            $smarty->assign ('msg','يجب إكمال كافة الحقول');
    
       
        }
       
        $tt_id=$_SESSION['tt_id'];
        $result=$tcMan->getSingleTrainingCourseInfo($tt_id);
        $smarty->assign('name',$result['name']);
        $smarty->assign('hours',$result['duration']);
        $smarty->assign('abstract',$result['abstract']);
        $smarty->assign('goals',$result['goals']);
        $smarty->display("ICsingleTC.tpl");
       

}
?>