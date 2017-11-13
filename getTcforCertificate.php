<?php
require_once 'TrainingCourse.php';
$usrID=2;
$tr = new TrainingCourse();
$result=$tr->getTrainingWaitingForCertificate($usrID);
echo json_encode($result);
?>