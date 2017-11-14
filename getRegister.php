<?php
require_once 'TrainingCourse.php';

if (isset($_GET['update']))
    {
    $reg_id=$_GET['id'];
    $cerApprove=$_GET['certificate_approved'];
    if($cerApprove==true)
        $cerApprove=1;
    else
        $cerApprove=0;
    $tr = new TrainingCourse();
    $result=$tr->approveCertificate($reg_id,$cerApprove);

    }
else
    {
    $tt_id=1;
    $tr = new TrainingCourse();
    $result=$tr->getRegisterTrainee($tt_id);
    echo json_encode($result);
    }

?>