<?php
include '../libs/smarty/libs/Smarty.class.php';
require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';
require_once '../DAL/AttendanceRepo.php';

$smarty=new Smarty();
//error_reporting(0);
session_start();
$tcMan = new TrainingCourseModule();
$trMan = new RegistrationModule();
$attMan = new AttendanceRepo();
if(isset($_GET['usr_id']))
{
    $_SESSION['USR']=$_GET['usr_id'];
    $_SESSION['TT']=$_GET['tt_id'];
    $_SESSION['TIME']=date('y-m-d');
}
if(isset($_POST['in']))
{
    
    $result = $attMan->save(0, $_SESSION['USR'], $_SESSION['TT'], $_SESSION['TIME']);
    unset($_SESSION);
}
$tc=$tcMan->getSingleTrainingCourseInfo($_SESSION['TT']);
$te=$trMan->getUserInfo($_SESSION['USR']);
$smarty->assign('tname',$tc['tc_ar_name']);
$smarty->assign('trainee',$te['ar_name']);
$smarty->assign('trainer',$tc['tc_ar_name']);
$smarty->display("takingAttendance.tpl");           

?>