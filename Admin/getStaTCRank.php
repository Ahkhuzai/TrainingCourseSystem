<?php

require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';
session_start();
$tcMan = new TrainingCourseModule();
$trMan = new RegistrationModule();

error_reporting(0);
$ids=array();
$ids=$_SESSION['ids'];

$result=array();
for($i=0;$i<count($ids);$i++)
{
        $trainee=$trMan->getTraineeAcceptedInTC($ids[$i]);
        if($trainee)
	$result= array_merge($result,$trainee);
}

if($result)
{   for($i=0;$i<count($result);$i++)
    {
        if($result[$i]['sid']==12)
        {
            $rankRes[$i] = $result[$i]['rank'];   
        }
    }
    $res = array_unique($rankRes);
    
    for ($i = 0; $i < count($res); $i++) {
        $rank[$i]['Rank'] = $res[$i];
   
    $rank[$i]['Total']=0;
 }
    $count=0;
    for($i=0;$i<count($result);$i++)
    {
        if($result[$i]['sid']==12)
        {
            $count++;
            for($j=0;$j<count($rank);$j++)
                if($result[$i]['rank']==$rank[$j]['Rank'])
                    $rank[$j]['Total']=$rank[$j]['Total']+1;
        }
    }  
    for($j=0;$j<count($rank);$j++)
        $rank[$j]['Total']=($rank[$j]['Total']*100)/$count;
}

echo json_encode($rank);

?>