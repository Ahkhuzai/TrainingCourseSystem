<?php
require_once 'TrainingCourse.php';
$usrID=2;
$tr = new TrainingCourse();
$result=$tr->getTrainingRequestByUserID($usrID);
echo json_encode($result);
?>