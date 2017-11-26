<?php
require_once 'TrainingCourse.php';
$tcMan = new TrainingCourse();

$result=$tcMan->getAvailableProgram();

echo json_encode($result);
?>