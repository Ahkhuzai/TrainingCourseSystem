<?php
session_start();
require_once 'TrainingCourse.php';
$tcMan= new TrainingCourse();
$tt_id = $_SESSION['tt_id'];
$sid=0;
$result= $tcMan->getTraineeRegistredInTC($tt_id,$sid);

echo json_encode($result);
?>