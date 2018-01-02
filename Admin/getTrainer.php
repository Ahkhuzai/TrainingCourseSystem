<?php
error_reporting(0);
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
            $result[$i]['tc_counts'] = count($totalTc);
            $totalrate= $tcMan->getTotalTrainerRate($totalTc);
            $result[$i]['total_rate'] =$totalrate;
        } else {
            $result[$i]['tc_counts'] = 0;
            $result[$i]['total_rate']=0;
        }
    }
}
echo json_encode($result);
?>