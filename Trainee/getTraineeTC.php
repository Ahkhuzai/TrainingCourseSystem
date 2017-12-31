<?php
session_start();
require_once '../TrainingCourse.php';
require_once '../DAL/RegistrationRepo.php';
error_reporting(0);
$tcMan= new TrainingCourse();
$tRegMan = new RegistrationRepo();

$userId=$_SESSION['user_id'];

$result=$tRegMan->fetchByQuery('SELECT * FROM `registration` WHERE (registration_status = 1 or registration_status=2 or registration_status = 3 )and `usr_id`='.$userId);
if($result)
{
    for ($i = 0; $i < count($result); $i++) {
        $tcResult[$i] = $tcMan->getSingleTrainingCourseInfo($result[$i]['tt_id']);
        if ($tcResult[$i]['pid'] == NULL) {
            $tcResult[$i]['pname'] = 'لا تتبع برنامج محدد';
            $tcResult[$i]['status'] = $tcMan->getStatus($result[$i]['registration_status']);
            $tcResult[$i]['sid'] = ($result[$i]['registration_status']);

        } else {
            $Presult = $tcMan->getProgramInfo($tcResult[$i]['pid']);
            $tcResult[$i]['pname'] = $Presult['name'];
            $tcResult[$i]['status'] = $tcMan->getStatus($result[$i]['registration_status']);
            $tcResult[$i]['sid'] = ($result[$i]['registration_status']);
        }
    }
}
echo json_encode($tcResult);
?>