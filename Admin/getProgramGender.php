<?php

require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';
session_start();
$tcMan = new TrainingCourseModule();
$trMan = new RegistrationModule();

error_reporting(0);
$ids = explode("-", $_SESSION['tt_ids']);
$ids = array_filter($ids);
$result=array();
$result=$tcMan->getTraineeAttendProgram($ids);
$male=0;
$female=0;

if($result)
{    for($i=0;$i<count($result);$i++)
    {    
       
            if($result[$i]['gender']=='ذكر')
                $male++;
            else
                $female++;
        
    }
    
    $totalAttend = $female+$male;
    $femalePer = ($female * 100 )/$totalAttend;
    $malePer = ($male * 100)/$totalAttend;
    $gender[0]['Gender']='ذكر';
    $gender[0]['Total']=$malePer;
    $gender[1]['Gender']='انثى';
    $gender[1]['Total']=$femalePer;
}
echo json_encode($gender);
?>