<?php
	require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';
require_once '../DAL/TimetableRepo.php';
//error_reporting(0);
$tcMan= new TrainingCourseModule();
$trMan= new RegistrationModule();

echo $trMan->calcMissed(1);
?>