<?php
require_once 'TrainingCourse.php';
$usrID=2;
$tr = new TrainingCourse();
$result=$tr->getOldTrainingByUserID($usrID);
echo json_encode($result);

?>