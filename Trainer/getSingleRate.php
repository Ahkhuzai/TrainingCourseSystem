<?php
require_once '../TrainingCourseModule.php';
error_reporting(0);
$tr = new TrainingCourseModule();
session_start();
$tt_id=$_SESSION['tt_id'];
$result=$tr->getTrainingCourseRate($tt_id);

echo json_encode($result);

?>