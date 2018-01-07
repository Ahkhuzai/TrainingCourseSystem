<?php
session_start();
error_reporting(0);
require_once '../RegistrationModule.php';

$trMan= new RegistrationModule();

$tt_id = $_SESSION['tt_id'];

$result= $trMan->getTraineeAcceptedInTC($tt_id);
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