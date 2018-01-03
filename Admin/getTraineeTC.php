<?php
session_start();
require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';
require_once '../DAL/RegistrationRepo.php';
//error_reporting(0);
$tcMan= new TrainingCourseModule();
$trMan= new RegistrationModule();
$tRegMan = new RegistrationRepo();

$userId=$_SESSION['te_id'];

$result=$tRegMan->fetchByQuery('SELECT * FROM `registration` WHERE `usr_id`='.$userId);

for ($i = 0; $i < count($result); $i++) {
    $tcResult[$i] = $tcMan->getSingleTrainingCourseInfo($result[$i]['tt_id']);
    if ($tcResult[$i]['pid'] == NULL) {
        $tcResult[$i]['pname'] = 'لا تتبع برنامج محدد';
        $status = $trMan->getStatus($result[$i]['registration_status']);
        $tcResult[$i]['registration_status'] = $status['status_arabic'];
        //
   if($result[$i]['attendance_status']==12 || $result[$i]['attendance_status'] ==4|| $result[$i]['attendance_status'] ==5)
    {   
        $status = $trMan->getStatus($result[$i]['attendance_status']);
        $tcResult[$i]['attendance_status'] = $status['status_arabic'];
    }
    else 
         $tcResult[$i]['attendance_status'] = "لا يوجد حالة بعد";

    } else {
        $Presult = $tcMan->getProgramInfo($tcResult[$i]['pid']);
        $tcResult[$i]['pname'] = $Presult['name'];
            $status = $trMan->getStatus($result[$i]['registration_status']);
        $tcResult[$i]['registration_status'] = $status['status_arabic'];
        //
       if($result[$i]['attendance_status']==12 || $result[$i]['attendance_status'] ==4|| $result[$i]['attendance_status'] ==5)
        {   
            $status = $trMan->getStatus($result[$i]['attendance_status']);
            $tcResult[$i]['attendance_status'] = $status['status_arabic'];
        }
        else 
             $tcResult[$i]['attendance_status'] = "لا يوجد حالة بعد";
        }
}

echo json_encode($tcResult);
?>