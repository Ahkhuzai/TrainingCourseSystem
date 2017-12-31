<?php
session_start();
error_reporting(0);
require_once '../TrainingCourse.php';
$tcMan=new TrainingCourse();

$result=$tcMan->getTrainingCourseAvailableForTrainee($_SESSION['user_id']);
for ($i = 0; $i < count($result); $i++) {
    
    if ($result[$i]['pid'] == NULL) {
        $result[$i]['pname'] = 'لا تتبع برنامج محدد';
        $result[$i]['sid']=$result[$i]['status'];
        $result[$i]['status'] = $tcMan->getStatus($result[$i]['status']);
    } else {
        $Presult = $tcMan->getProgramInfo($result[$i]['pid']);
        $result[$i]['pname'] = $Presult['name'];
        $result[$i]['sid']=$result[$i]['status'];
        $result[$i]['status'] = $tcMan->getStatus($result[$i]['status']);
        
    }
}
echo json_encode($result);
?>