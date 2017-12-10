<?php
session_start();
require_once 'TrainingCourse.php';
$RM_Man = new TrainingCourse();
$sid=11;
$result=$RM_Man->getTrainer();
echo json_encode($result);
?>