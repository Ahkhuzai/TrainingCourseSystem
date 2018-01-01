<?php
session_start();
error_reporting(0);
require_once '../RegistrationModule.php';

$trMan= new RegistrationModule();

$tt_id = $_SESSION['tt_id'];
$sid=0;
$result= $trMan->getTraineeRegisteredInTC($tt_id);
if($result)
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
    $trMan->ApproveCertificate($reg_id,$cer_status);
}

?>