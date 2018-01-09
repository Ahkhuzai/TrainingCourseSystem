<?php
error_reporting(0);
session_start();
require_once '../DAL/RegistrationRepo.php';
$tRegMan=new RegistrationRepo();
require_once '../RegistrationModule.php';
$trMan= new RegistrationModule();

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
    if($result)
    {   
        for($i=0;$i<count($result);$i++)
        {
            $rankRes[$i] = $result[$i]['rank'];   
        }
        
        $res = array_unique($rankRes);

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
}

if($type==2)
{
    $result=$trMan->getTrainer();

    if($result)
    {   
        for($i=0;$i<count($result);$i++)
        {
            $rankRes[$i] = $result[$i]['rank'];   
        }
        
        $res = array_unique($rankRes);

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
    
        }
?>