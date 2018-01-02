<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';


$smarty=new Smarty();
error_reporting(0);
session_start();
$tcMan = new TrainingCourseModule();
$trMan = new RegistrationModule();

if(isset($_GET['usr_id']))
{
    $_SESSION['USR']=$_GET['usr_id'];
    $_SESSION['TT']=$_GET['tt_id'];
    $_SESSION['TIME']=date('y-m-d');
}
if(isset($_POST['in'])&& !empty($_POST['pass']))
{   if($_POST['pass']==3124)
    {   
        $isOpen = $trMan->isTCAttendanceOpen($_SESSION['TT']);
        if($isOpen ==0)
        {
            //check if registered and accepted 
            $isRegistred = $tcMan->getTraineeAccepted($_SESSION['TT'],2);
            if($isRegistred)
            {   
                $attendance = $trMan->takeAttendance($_SESSION['USR'], $_SESSION['TT'], $_SESSION['TIME']);
                unset($_SESSION);
                //change training course status 
                if ($attendance==0) {
                    $smarty->assign('added', " تم التحضير بنجاح");
                } 
                else if ($attendance==1)
                    $smarty->assign('msg', " تم تسجيل التحضير مسبقا");
                else if ($attendance==-1)
                    $smarty->assign('msg', " لم يتم التحضير ");
            }
            else 
                $smarty->assign('msg'," المتدرب غير مسجل في الدورة او لم يتم قبول طلبة بعد ");
        }
        else if ($isOpen==-1)
            $smarty->assign('msg'," لم تبدأ الدورة بعد ");
        else if ($isOpen==1)
            $smarty->assign('msg'," انتهى وقت الدورة");
            
        $smarty->display("DoneAttendance.tpl");
    }
    else
    {
        $tc=$tcMan->getSingleTrainingCourseInfo($_SESSION['TT']);
        $te=$trMan->getUserInfo($_SESSION['USR']);
        $smarty->assign('tname',$tc['tc_ar_name']);
        $smarty->assign('trainee',$te['ar_name']);
        $smarty->assign('trainer',$tc['tc_ar_name']);
        $smarty->assign('msg'," كلمة المرور خاطئة");
        $smarty->display("takingAttendance.tpl");  
    }
}
else {
    $tc=$tcMan->getSingleTrainingCourseInfo($_SESSION['TT']);
    $te=$trMan->getUserInfo($_SESSION['USR']);
    $smarty->assign('tname',$tc['tc_ar_name']);
    $smarty->assign('trainee',$te['ar_name']);
    $smarty->assign('trainer',$tc['tc_ar_name']);
    $smarty->display("takingAttendance.tpl");   
}
        

?>