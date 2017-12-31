<?php
session_start();
error_reporting(0);
require_once '../RegistrationModule.php';
require_once '../TrainingCourseModule.php';
$tcMan=new TrainingCourseModule();
$trMan = new RegistrationModule();

$result=$tcMan->getTrainingCourseAvailableForTrainee($_SESSION['TraineeID']);

for ($i = 0; $i < count($result); $i++) {
    
    if ($result[$i]['pid'] == NULL) {
        $result[$i]['pname'] = 'لا تتبع برنامج محدد';
        $status =$trMan->getStatus($result[$i]['status']);
        $result[$i]['status'] = $status['status_arabic'];
        $result[$i]['boolRegister']=0;

    } else {
        $Presult = $tcMan->getProgramInfo($result[$i]['pid']);
        $result[$i]['pname'] = $Presult['name'];
        $status =$trMan->getStatus($result[$i]['status']);
        $result[$i]['status'] = $status['status_arabic'];
        $result[$i]['boolRegister']=0;
    }
}
echo json_encode($result);
if (isset($_GET['update']))
{
    $tt_id=$_GET['id'];
    $userId=$_SESSION['TraineeID'];
    $sid=2;
    $result=$trMan->RegisterTraineeInTC($userId,$tt_id,$sid);
}
?>