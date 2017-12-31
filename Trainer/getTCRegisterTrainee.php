<?php
session_start();
error_reporting(0);
require_once '../TrainingCourse.php';
$tcMan= new TrainingCourse();
$tt_id = $_SESSION['tt_id'];

$sid=0;
$result= $tcMan->getTraineeRegistredInTC($tt_id,$sid);
echo json_encode($result);

if (isset($_GET['update']))
{
    $reg_id=$_GET['rid'];
    $reg_status=$_GET['boolstatus'];
    if($reg_status==true)
        $reg_status=2;
    else
        $reg_status=3;
    
    $tcMan = new TrainingCourse();
    $result=$tcMan->HandleTraineeRegister($reg_id,$reg_status);
}
?>