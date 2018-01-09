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
{
    if ($result[$i]['sid'] == 2) {
            $result[$i]['boolstatus'] = 1;
            $result[$i]['boolstatus_reject'] = 0;
        } else if ($result[$i]['sid'] == 3) {
            $result[$i]['boolstatus'] = 0;
            $result[$i]['boolstatus_reject'] = 1;
        } else {
            $result[$i]['boolstatus'] = 0;
            $result[$i]['boolstatus_reject'] = 0;
        }
     
}

echo json_encode($result);

if (isset($_GET['update']))
{
    $reg_id=$_GET['rid'];
    $reg_status=$_GET['boolstatus'];
    $reg_status_reject = $_GET['boolstatusReject'];
    if($reg_status==true && $reg_status_reject==false)
        $reg_status=2;
    else if ($reg_status==false && $reg_status_reject==true)
        $reg_status=3;
    else 
        $reg_status=1;
    $result=$trMan->HandleTraineeRegister($reg_id,$reg_status);
}
?>