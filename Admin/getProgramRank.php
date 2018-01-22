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
{   
    for($i=0;$i<count($result);$i++)
    {
       $rankRes[$i] = $result[$i]['rank'];   
    }

    $res = array_unique($rankRes);

    $res= array_values($res);
   
    for ($i = 0; $i < count($res); $i++) {
        $rank[$i]['Rank'] = $res[$i];
        $rank[$i]['Total']=0;
    }


    $count=0;
    for($i=0;$i<count($result);$i++)
    {
        $count++;
        for($j=0;$j<count($rank);$j++)
            if($result[$i]['rank']==$rank[$j]['Rank'])
               $rank[$j]['Total']=$rank[$j]['Total']+1;
        
    }  
    for($j=0;$j<count($rank);$j++)
        $rank[$j]['Total']=($rank[$j]['Total']*100)/$count;
}

echo json_encode($rank);

?>