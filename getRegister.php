<?php
require_once 'TrainingCourse.php';

if (isset($_GET['update']))
    {
    // UPDATE COMMAND
    }
else
    {
    $tt_id=1;
    $tr = new TrainingCourse();
    $result=$tr->getRegisterTrainee($tt_id);
    echo json_encode($result);
    }

?>