<?php
session_start();
require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';
error_reporting(0);
$tcMan= new TrainingCourseModule();
$trMan= new RegistrationModule();

$result = $tcMan->getTraineeRegister($_SESSION['user_id'],2);
if($result)
{   $j=0;
    for ($i = 0; $i < count($result); $i++) {
        //ONLY COMPLETE TRAINING COURSE 
        $res=$tcMan->getSingleTrainingCourseInfo($result[$i]['tt_id']);
        if ($res['status']==9) {
            $resultTC[$j] = $res;
            $resultTC[$j]['r_id']=$result[$i]['id'];
            $j++;
        }
    }
    for($i=0;$i<count($resultTC);$i++)
    {
        if ($resultTC[$i]['pid'] == NULL) {
            $resultTC[$i]['pname'] = 'لا تتبع برنامج محدد';
            $resultTC[$i]['attendance_id']=$result[$i]['attendance_status'];
            $status = $trMan->getStatus($result[$i]['attendance_status']);
            $resultTC[$i]['attendance_status'] = $status['status_arabic'];
            
            
        } else {
            $Presult = $tcMan->getProgramInfo($resultTC[$i]['pid']);
            $resultTC[$i]['pname'] = $Presult['name']; 
            $resultTC[$i]['attendance_id']=$result[$i]['attendance_status'];
            $status = $trMan->getStatus($result[$i]['attendance_status']);
            $resultTC[$i]['attendance_status'] = $status['status_arabic'];
        }   
    }
}
echo json_encode($resultTC);
?>