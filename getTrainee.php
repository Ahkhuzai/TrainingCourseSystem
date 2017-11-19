<?php
require_once 'TrainingCourse.php';
session_start(); 
$tt_id=$_SESSION['tt_id'];
$tcMan= new TrainingCourse();
$result=$tcMan->getRegisterTrainee($tt_id);
echo json_encode($result);

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
?>