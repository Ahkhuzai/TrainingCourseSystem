<?php
session_start();
require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';
error_reporting(0);
$tcMan= new TrainingCourseModule();
$trMan= new RegistrationModule();
$resultAvailable= $tcMan->getTcBySid(10);
$resultAccepted= $tcMan->getTcBySid(2);
$resultComplate= $tcMan->getTcBySid(9);
$resultUnAvailable= $tcMan->getTcBySid(11);
$result=array();
if($resultAccepted)
    $result=$resultAccepted;
if($resultAvailable)
    $result= array_merge ($resultAvailable,$result);
if($resultComplate)
    $result = array_merge ($result,$resultComplate);
if($resultUnAvailable)
    $result= array_merge ($result,$resultUnAvailable);


for($i=0;$i<count($result);$i++)
{
    if ($result[$i]['pid'] == NULL) {

        $result[$i]['pname'] = 'لا تتبع برنامج محدد';
        $result[$i]['sid'] = $result[$i]['status'];
        $status=$trMan->getStatus($result[$i]['sid']);
        $result[$i]['status'] = $status['status_arabic'];
        $trainee=$trMan->getTraineeRegisteredInTC($result[$i]['id']);

        if( isset($trainee[0]['id']))
        $result[$i]['counts'] = count($trainee);
        else
            $result[$i]['counts']=0;
  
    } else {

        $Presult = $tcMan->getProgramInfo($result[$i]['pid']);
        $result[$i]['pname'] = $Presult['name'];
        $result[$i]['sid'] = $result[$i]['status'];
        $status=$trMan->getStatus($result[$i]['sid']);
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