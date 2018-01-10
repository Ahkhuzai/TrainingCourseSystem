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
{    for($i=0;$i<count($result);$i++)
    {
        if($result[$i]['sid']==12)
        {
            $departmentRes[$i] = $result[$i]['department'];   
        }
    }
    $res = array_unique($departmentRes);
    
    for ($i = 0; $i < count($res); $i++) {
        $department[$i]['department'] = $res[$i];
        $department[$i]['total']=0;
    }
    for($i=0;$i<count($result);$i++)
    {
        if($result[$i]['sid']==12)
        {
            for($j=0;$j<count($department);$j++)
                if($result[$i]['department']==$department[$j]['department'])
                    $department[$j]['total']=$department[$j]['total']+1;
        }
    }   
}

echo json_encode($department);

?>