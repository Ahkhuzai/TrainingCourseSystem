<?php

require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';
session_start();
$tcMan = new TrainingCourseModule();
$trMan = new RegistrationModule();

error_reporting(0);
$ids = explode("-", $_SESSION['tt_ids']);
$ids = array_filter($ids);
$result=array();
$trainee=$tcMan->getTraineeRegisteredProgram($ids);
echo json_encode($trainee);
?>