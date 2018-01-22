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
{   
    $result=super_unique($result,'id');
    for($i=0;$i<count($result);$i++)
    {
        if($result[$i]['sid']==12)
        {
            $departmentRes[$i] = $result[$i]['department'];   
        }
    }
    $res = array_unique($departmentRes);
     $res= array_values($res);
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
function super_unique($array,$key)
{
   $temp_array = [];
   foreach ($array as &$v) {
       if (!isset($temp_array[$v[$key]]))
       $temp_array[$v[$key]] =& $v;
   }
   $array = array_values($temp_array);
   return $array;

}
?>