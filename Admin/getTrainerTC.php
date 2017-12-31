<?php
session_start();
require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';
error_reporting(0);
$tcMan= new TrainingCourseModule();
$trMan= new RegistrationModule();

$Allresult= $tcMan->getTcBySid(9);
$x=0;

for($i=0;$i<count($Allresult);$i++)
    if ($Allresult[$i]['tr_id'] == $_SESSION['tr_id']) {
        $result[$x] = $Allresult[$i];
        $x++;
    }

for($i=0;$i<count($result);$i++)
{
    if ($result[$i]['pid'] == NULL) {
        $result[$i]['pname'] = 'لا تتبع برنامج محدد';
        $rate=$tcMan->getSingleTCRate($result[$i]['id']);
        $result[$i]['rate'] = $rate['totalRate'];
        $result[$i]['sid'] = $result[$i]['status'];
        $result[$i]['status'] = $status['status_arabic'];
        $trainee=$trMan->getTraineeRegisteredInTC($result[$i]['id']);
        if( isset($trainee[0]['id']))
        $result[$i]['counts'] = count($trainee);
        else
            $result[$i]['counts']=0;
  
    } else {
        $Presult = $tcMan->getProgramInfo($result[$i]['pid']);
        $result[$i]['pname'] = $Presult['name'];
        $rate=$tcMan->getSingleTCRate($result[$i]['id']);
        $result[$i]['rate'] = $rate['totalRate'];
        $result[$i]['sid'] = $result[$i]['status'];
        $result[$i]['status'] = $status['status_arabic'];
        $trainee=$trMan->getTraineeRegisteredInTC($result[$i]['id']);
        if( isset($trainee[0]['id']))
        $result[$i]['counts'] = count($trainee);
        else
            $result[$i]['counts']=0;
    }   
}

echo json_encode($result);

?>