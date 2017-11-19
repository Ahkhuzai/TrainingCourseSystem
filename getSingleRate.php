<?php
require_once 'TrainingCourse.php';

$tr = new TrainingCourse();
session_start();
$tt_id=$_SESSION['tt_id'];
$result=$tr->getSingleTrainingCourseRate($tt_id);
echo json_encode($result);

?>