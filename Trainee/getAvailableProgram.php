<?php
require_once '../TrainingCourse.php';
error_reporting(0);
$tcMan= new TrainingCourse();
session_start();
$te_id=$_SESSION['user_id'];
$result=$tcMan->getAvailableProgram($te_id);
echo json_encode($result);
?>