<?php
error_reporting(0);
session_start();
require_once '../RegistrationModule.php';
require_once '../DAL/RegistrationRepo.php';
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
    if($result)
    {    
        for($i=0;$i<count($result);$i++)
        {
            
            $departmentRes[$i] = $result[$i]['department'];   
            
        }
        $res = array_unique($departmentRes);
    
        for ($i = 0; $i < count($res); $i++) {
            $department[$i]['department'] = $res[$i];
            $department[$i]['total']=0;
        }
        for($i=0;$i<count($result);$i++)
        {
            for($j=0;$j<count($department);$j++)
                if($result[$i]['department']==$department[$j]['department'])
                    $department[$j]['total']=$department[$j]['total']+1;
            
        }   
    }

    echo json_encode($department);   
}

if($type==2)
{
    $result=$trMan->getTrainer();
     if($result)
    {    
        for($i=0;$i<count($result);$i++)
        {
            
            $departmentRes[$i] = $result[$i]['department'];   
            
        }
        $res = array_unique($departmentRes);
    
        for ($i = 0; $i < count($res); $i++) {
            $department[$i]['department'] = $res[$i];
            $department[$i]['total']=0;
        }
        for($i=0;$i<count($result);$i++)
        {
            for($j=0;$j<count($department);$j++)
                if($result[$i]['department']==$department[$j]['department'])
                    $department[$j]['total']=$department[$j]['total']+1;
            
        }   
    }

    echo json_encode($department);   
    
    
        }
?>