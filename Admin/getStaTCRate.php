<?php
require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';
session_start();
error_reporting(0);
$tcMan = new TrainingCourseModule();
$trMan = new RegistrationModule();
$ids=array();
$ids=$_SESSION['ids'];
$result=array();
for($i=0;$i<count($ids);$i++)
{
    $rateResult=$tcMan->getTrainingCourseRate($ids[$i]);
    if($rateResult)
        $result= array_merge ($result,$rateResult);
}
echo json_encode($result);

?>