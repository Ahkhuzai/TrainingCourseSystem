<?php
error_reporting(0);
session_start();
require_once '../TrainingCourse.php';
$RM_Man = new TrainingCourse();
$result=$RM_Man->getTCRequestsOfTrainer($_SESSION['user_id']);
echo json_encode($result);
?>