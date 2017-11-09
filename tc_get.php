<?php
require_once 'TrainingCourse.php';

$tr = new TrainingCourse();
$result=$tr->getTrainingRequestByUserID(1);
echo json_encode($result);

?>