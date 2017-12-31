<?php
//error_reporting(0);
session_start();
require_once '../TrainingCourseModule.php';
$tcMan = new TrainingCourseModule();

$result=$tcMan->getTrainingCourse();

for($i=0;$i<count($result);$i++)
{
    if ($result[$i]['pid'] == NULL) {

        $result[$i]['pname'] = 'لا تتبع برنامج محدد';
    } else {

        $Presult = $tcMan->getProgramInfo($result[$i]['pid']);
        $result[$i]['pname'] = $Presult['name'];
    }   
}
echo json_encode($result);
?>