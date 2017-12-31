<?php
error_reporting(0);
session_start();
require_once '../TrainingCourseModule.php';
$RM_Man = new TrainingCourseModule();

$result=$RM_Man->getProgram();
echo json_encode($result);
?>