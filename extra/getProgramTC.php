<?php
require_once '../TrainingCourse.php';
session_start();
$tcMan = new TrainingCourse();
$pid=$_SESSION['program_id'];
$result=$tcMan->getTrainingCourseInProgram($pid);
echo json_encode($result);
?>