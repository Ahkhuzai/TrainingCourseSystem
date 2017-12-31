<?php
error_reporting(0);
session_start();
require_once '../RegistrationModule.php';
require_once '../TrainingCourseModule.php';
$RM_Man = new RegistrationModule();
$tcMan = new TrainingCourseModule();
$sid=1;
$result=$RM_Man->getTCRequests($sid);
if($result)
{
	for($i=0;$i<count($result);$i++)
	{
		$trainingInfo[$i]= $tcMan->getSingleTrainingCourseInfo($result[$i]['id']);
	}
}

echo json_encode($trainingInfo);
?>