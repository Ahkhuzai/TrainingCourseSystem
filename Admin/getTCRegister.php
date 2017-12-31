<?php

session_start();
//error_reporting(0);

require_once '../RegistrationModule.php';
require_once '../TrainingCourseModule.php';

$RM_Man = new RegistrationModule();
$tcMan = new TrainingCourseModule();
//only available for registration tc
$sid=10;
$result=$RM_Man->getTCRegister($sid);

for($i=0;$i<count($result);$i++)
{
	$count = $RM_Man->getTraineeRegisteredInTC($result[$i]['id']);
	$trainingInfo[$i]= $tcMan->getSingleTrainingCourseInfo($result[$i]['id']);
	if($count)
		$trainingInfo[$i]['counts']=count($count);
	else
		$trainingInfo[$i]['counts']=0;
}

echo json_encode($trainingInfo);

?>