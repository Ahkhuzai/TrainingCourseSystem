<?php

require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';
session_start();
$tcMan = new TrainingCourseModule();
$trMan = new RegistrationModule();

error_reporting(0);
$ids = explode("-", $_SESSION['tt_ids']);
$ids = array_filter($ids);
$result=array();
$result=$tcMan->getTraineeAttendProgram($ids);
if($result)
{    for($i=0;$i<count($result);$i++)
    {
        $departmentRes[$i] = $result[$i]['department'];   
        
    }
    $res = array_unique($departmentRes);
     $res= array_values($res);
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

?>