<?php
require_once 'TrainingCourse.php';

session_start();
$usrID=$_SESSION['user_id'];
$tr = new TrainingCourse();
$result=$tr->getTrainingForRate($usrID);
echo json_encode($result);
?>