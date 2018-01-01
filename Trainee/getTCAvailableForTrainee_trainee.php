<?php
session_start();
error_reporting(0);
require_once '../RegistrationModule.php';
require_once '../TrainingCourseModule.php';
$tcMan=new TrainingCourseModule();
$trMan = new RegistrationModule();

$result=$tcMan->getTrainingCourseAvailableForTrainee($_SESSION['user_id']);

for ($i = 0; $i < count($result); $i++) {
    
    if ($result[$i]['pid'] == NULL) {
        $result[$i]['pname'] = 'لا تتبع برنامج محدد';
        $status =$trMan->getStatus($result[$i]['status']);
        $result[$i]['status'] = $status['status_arabic'];
   

    } else {
        $Presult = $tcMan->getProgramInfo($result[$i]['pid']);
        $result[$i]['pname'] = $Presult['name'];
        $status =$trMan->getStatus($result[$i]['status']);
        $result[$i]['status'] = $status['status_arabic'];
   
    }
}
echo json_encode($result);

?>