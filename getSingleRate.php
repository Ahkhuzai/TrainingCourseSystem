<?php
require_once 'TrainingCourse.php';

$tr = new TrainingCourse();
$tt_id=$_GET['id'];
$result=$tr->getSingleTrainingCourseRate($tt_id);
echo json_encode($result);

?>