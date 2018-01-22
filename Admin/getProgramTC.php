<?php
session_start();
require_once '../RegistrationModule.php';
require_once '../TrainingCourseModule.php';

$trMan = new RegistrationModule();
$tcMan = new TrainingCourseModule();

$ids = explode("-", $_SESSION['tt_ids']);
$ids = array_filter($ids);

for($i=0;$i<count($ids);$i++)
{
	$count = $trMan->getTraineeRegisteredInTC($ids[$i]);
	$trainingInfo[$i]= $tcMan->getSingleTrainingCourseInfo($ids[$i]);
	if($count)
		$trainingInfo[$i]['counts']=count($count);
	else
		$trainingInfo[$i]['counts']=0;
	$trainingInfo[$i]['sid'] = $trainingInfo[$i]['status'];
    $status=$trMan->getStatus($trainingInfo[$i]['sid']);
    $trainingInfo[$i]['status'] = $status['status_arabic'];
}

echo json_encode($trainingInfo);
?>