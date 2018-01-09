<?php
error_reporting(0);
session_start();

require_once '../DAL/RegistrationRepo.php';
require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';

$tcMan= new TrainingCourseModule();
$trMan= new RegistrationModule();
$tRegMan=new RegistrationRepo();


$type=$_GET['type'];

if($type==1)
{
    $trainee = $tRegMan->fetchByQuery('SELECT DISTINCT `usr_id` FROM registration');
    if($trainee)
    {   
    for($i=0;$i<count($trainee);$i++)
        {
            $result[$i]=$trMan->getTraineeInfo($trainee[$i]['usr_id']);
        }
    }
}

if($type==2)
{
    
$result=$trMan->getTrainer();

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
}

echo json_encode($result);
?>