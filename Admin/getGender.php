<?php
//error_reporting(0);
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
}

if($type==2)
{
    $result=$trMan->getTrainer();
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
    
}
?>