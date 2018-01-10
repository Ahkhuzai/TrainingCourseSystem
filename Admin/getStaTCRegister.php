<?php

require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';
session_start();
$tcMan = new TrainingCourseModule();
$trMan = new RegistrationModule();

error_reporting(0);
$ids=array();
$ids=$_SESSION['ids'];

$result=array();
for($i=0;$i<count($ids);$i++)
{
        $trainee=$trMan->getTraineeAcceptedInTC($ids[$i]);
        if($trainee)
	$result= array_merge($result,$trainee);
}

echo json_encode($result);
?>