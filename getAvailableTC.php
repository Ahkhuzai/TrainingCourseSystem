<?php
require_once 'TrainingCourse.php';
$tcMan = new TrainingCourse();
$result=$tcMan->getTrainingCourse();
echo json_encode($result);
?>