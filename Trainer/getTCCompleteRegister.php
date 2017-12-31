<?php
error_reporting(0);
session_start();
require_once '../TrainingCourse.php';

$tcMan= new TrainingCourse();

$tt_id = $_SESSION['tt_id'];

$sid=0;
$result= $tcMan->getTraineeRegistredInTC($tt_id,$sid);
for($i=0;$i<count($result);$i++)
    if($result[$i]['certificate']==1)
        $result[$i]['certificate_status']="اعتمدت";
    else
        $result[$i]['certificate_status']="لم تعتمد";
echo json_encode($result);

if (isset($_GET['update']))
{
    $reg_id=$_GET['rid'];
    $cer_status=$_GET['certificate'];
    $tcMan->ApproveCertificate($reg_id,$cer_status);
}

?>