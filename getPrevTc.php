<?php
require_once 'TrainingCourse.php';

$tr = new TrainingCourse();
$result=$tr->getOldTrainingByUserID(1);
echo json_encode($result);

?>