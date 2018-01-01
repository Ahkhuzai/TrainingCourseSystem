<?php

require_once '../TrainingCourseModule.php';
session_start();
$usrID=$_SESSION['user_id'];
$tr = new TrainingCourseModule();
$result=$tr->getTrainingCourseForRateByUserID($usrID);
echo json_encode($result);
?>