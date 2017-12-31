<?php
require_once '../TrainingCourse.php';
$tcMan = new TrainingCourse();
session_start();

$result = $tcMan->getTraineeRegister($_SESSION['user_id'],14);
for ($i = 0; $i < count($result); $i++) {
    $resultTC[$i] = $tcMan->getSingleTrainingCourseInfo($result[$i]['tt_id']);
    $resultTC[$i]['reg_status']=$tcMan->getStatus($result[$i]['registration_status']);
    $resultTC[$i]['r_id']=$result[$i]['id'];
}
for($i=0;$i<count($resultTC);$i++)
{
    if ($resultTC[$i]['pid'] == NULL) {
        $resultTC[$i]['pname'] = 'لا تتبع برنامج محدد';
        $resultTC[$i]['sid'] = $resultTC[$i]['status'];
        $resultTC[$i]['status'] = $tcMan->getStatus($resultTC[$i]['sid']);
        
  
    } else {
        $Presult = $tcMan->getProgramInfo($resultTC[$i]['pid']);
        $resultTC[$i]['pname'] = $Presult['name'];
        $resultTC[$i]['sid'] = $resultTC[$i]['status'];
        $resultTC[$i]['status'] = $tcMan->getStatus($resultTC[$i]['sid']);
        
    }   
}
echo json_encode($resultTC);
?>