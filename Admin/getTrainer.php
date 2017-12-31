<?php
//error_reporting(0);
session_start();
require_once '../RegistrationModule.php';
require_once '../TrainingCourseModule.php';
$RM_Man = new RegistrationModule();
$tcMan = new TrainingCourseModule();

$result=$RM_Man->getTrainer();

if($result)
{
    for($i=0;$i<count($result);$i++)
    {
        $totalTc=$tcMan->getTotalTrainerTC($result[$i]['user_id']);
        
        if ($totalTc) {
            $result[$i]['tcCounts'] = count($totalTc);
            $totalrate= $tcMan->getTotalTrainerRate($totalTc);
            $result[$i]['totalRate'] =$totalrate;
        } else {
            $result[$i]['tcCounts'] = 0;
            $result[$i]['totalRate']=0;
        }
    }
}
echo json_encode($result);
?>