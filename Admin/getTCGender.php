<?php
session_start();
error_reporting(0);
require_once '../RegistrationModule.php';

$trMan= new RegistrationModule();

$tt_id = $_SESSION['tt_id'];

$result= $trMan->getTraineeAcceptedInTC($tt_id);

$male=0;
$female=0;
if($result)
{    for($i=0;$i<count($result);$i++)
    {
        if($result[$i]['sid']==12)
        {
            if($result[$i]['gender']=='ذكر')
                $male++;
            else
                $female++;
        }
    }
    $femalePer = ($female * 100 )/count($result);
    $malePer = ($male * 100)/count($result);
    $gender[0]['Gender']='ذكر';
    $gender[0]['Total']=$malePer;
    $gender[1]['Gender']='انثى';
    $gender[1]['Total']=$femalePer;
}

echo json_encode($gender);

?>