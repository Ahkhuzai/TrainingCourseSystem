<?php
include 'libs/smarty/libs/Smarty.class.php';
include 'TrainingCourse.php';

$smarty=new Smarty();
$trCourse = new TrainingCourse();
$usrId=1;
//error_reporting(0);

if(isset($_POST['saveTraining']))
{   
    if(!empty(trim($_POST['Tname'])))
    {
        $Tname=$_POST['Tname'];
        $Tabstract=$_POST['abstract'];
        $Tgoals=$_POST['Goals'];
        $Thours=$_POST['Hours'];
        $Tstart=$_POST['stime'];
        $Tend=$_POST['etime'];
        $Tcapacity=0;
        $Tstatus=6;
        $Tavailable_seat=0;
        $handoutDir="";
        $addDate="2017-5-25";
        $startAt="00:00:00";
        $location="-";
        $tr_avg=0;
        $tc_avg=0;
        
        $result=$trCourse->addTraining($usrId,$Tname,$Tabstract,$Tgoals,$Thours,$Tstart,$Tend,$Tcapacity,$Tstatus,$Tavailable_seat,$handoutDir,$addDate,$startAt,$location,$tr_avg,$tc_avg);    
    }
    else 
        $smarty->assign ('msg','يجب أدخال اسم الدورة ليتم حفظ الطلب');
}
if(isset($_POST['addTraining']))
{
    $Tname=$_POST['Tname'];
    $Tabstract=$_POST['abstract'];
    $Tgoals=$_POST['Goals'];
    $Thours=$_POST['Hours'];
    $Tstart=$_POST['stime'];
    $Tend=$_POST['etime'];
    $Tcapacity=0;
    $Tstatus=1;
    $Tavailable_seat=0;
    $handoutDir="";
    $addDate=date("Y-m-d");
    $startAt="00:00:00";
    $location="-";

    $result=$trCourse->addTraining($usrId,$Tname,$Tabstract,$Tgoals,$Thours,$Tstart,$Tend,$Tcapacity,$Tstatus,$Tavailable_seat,$handoutDir,$addDate,$startAt,$location);

}
$smarty->display("addTraining.tpl");
?>