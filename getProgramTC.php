<?php
require_once 'TrainingCourse.php';
session_start();
$tcMan = new TrainingCourse();
$pid=$_SESSION['program_id'];
$result=$tcMan->getProgramTrainingCourse($pid);
echo json_encode($result);
?>