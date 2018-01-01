<?php
require_once '../TrainingCourseModule.php';
$tcMan = new TrainingCourseModule();
session_start();

$result = $tcMan->getTraineeAttended($_SESSION['user_id'],12);
for ($i = 0; $i < count($result); $i++) {
    $resultTC[$i] = $tcMan->getSingleTrainingCourseInfo($result[$i]['tt_id']);
    $resultTC[$i]['r_id']=$result[$i]['id'];
}
for($i=0;$i<count($resultTC);$i++)
{
    if ($resultTC[$i]['pid'] == NULL) {
        $resultTC[$i]['pname'] = 'لا تتبع برنامج محدد';
    } else {
        $Presult = $tcMan->getProgramInfo($resultTC[$i]['pid']);
        $resultTC[$i]['pname'] = $Presult['name'];     
    }   
}
echo json_encode($resultTC);
?>