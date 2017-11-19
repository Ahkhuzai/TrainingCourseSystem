<?php
include 'libs/smarty/libs/Smarty.class.php';
include 'TrainingCourse.php';

$smarty=new Smarty();
$trCourse = new TrainingCourse();
session_start();
if(isset($_SESSION['user_id']))
{
    $usrId=$_SESSION['user_id'];
   // error_reporting(0);
    if(isset($_POST['saveTraining']) )
    {       
        if(!empty(trim($_POST['Tname'])))
        {
            if(isset($_SESSION['tt_id']))
                $tt_id=$_SESSION['tt_id'];
            else {
                $tt_id=0;
            }
            $Tname=$_POST['Tname'];
            $Tabstract=$_POST['abstract'];
            $Tgoals=$_POST['Goals'];
            $Thours=$_POST['Hours'];
            $Tstart=$_POST['stime'];
            $Tend=$_POST['etime'];
            $Tcapacity=0;
            $Tstatus=6;
            $Tavailable_seat=0;
            $handoutDir=$_POST['handout_url'];
            $addDate=date("Y-m-d");
            $startAt="00:00:00";
            $location="-";
            $tr_avg=0;
            $tc_avg=0; 
            $result=$trCourse->addTraining($tt_id,$usrId,null,$Tname,$Tabstract,$Tgoals,$Thours,$Tstart,$Tend,$Tcapacity,$Tstatus,$Tavailable_seat,$handoutDir,$addDate,$startAt,$location,$tr_avg,$tc_avg);    
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
            if(isset($_SESSION['tt_id']))
                $tt_id=$_SESSION['tt_id'];
            else {
                $tt_id=0;
            }
            $Tname=$_POST['Tname'];
            $Tabstract=$_POST['abstract'];
            $Tgoals=$_POST['Goals'];
            $Thours=$_POST['Hours'];
            $Tstart=$_POST['stime'];
            $Tend=$_POST['etime'];
            $Tcapacity=0;
            $Tstatus=1;
            $Tavailable_seat=0;
            $handoutDir=$_POST['handout_url'];
            $addDate=date("Y-m-d");
            $startAt="00:00:00";
            $location="-";
            $tr_avg=0;
            $tc_avg=0;                   
            $result=$trCourse->addTraining($tt_id,$usrId,null,$Tname,$Tabstract,$Tgoals,$Thours,$Tstart,$Tend,$Tcapacity,$Tstatus,$Tavailable_seat,$handoutDir,$addDate,$startAt,$location,$tr_avg,$tc_avg);    
            if($result)
                $smarty->assign ('added','تم اضافة الطلب بنجاح');
            
        }
        else 
            $smarty->assign ('msg','يجب إكمال كافة الحقول');
    }
    
    $smarty->display("addTraining.tpl");
}
else 
{
    $smarty->assign('msg','غير مصرح لك بالدخول للنظام');
    $smarty->display("unAuthorized.tpl");
}
?>