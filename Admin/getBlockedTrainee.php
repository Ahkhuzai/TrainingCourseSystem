<?php
error_reporting(0);
session_start();
require_once '../RegistrationModule.php';
require_once '../DAL/RegistrationRepo.php';
$trMan= new RegistrationModule();
$tRegMan=new RegistrationRepo();
$trainee = $tRegMan->fetchByQuery('SELECT DISTINCT `usr_id` FROM registration');

if($trainee)
    for($i=0;$i<count($trainee);$i++)
    {
        $isBlocked=$trMan->isBlock($trainee[$i]['usr_id']);
        if ($isBlocked) {
            $result[$i] = $trMan->getTraineeInfo($trainee[$i]['usr_id']);
            $result[$i]['endDate']=$isBlocked[0]['end_date'];
        }
    }
    
$result= array_values($result);

echo json_encode($result);
?>